<?php
namespace Aws\S3;

use Aws\Api\ApiProvider;
use Aws\Api\DocModel;
use Aws\Api\Service;
use Aws\AwsClient;
use Aws\ClientResolver;
use Aws\Exception\AwsException;
use Aws\HandlerList;
use Aws\Middleware;
use Aws\RetryMiddleware;
use Aws\S3\Exception\S3Exception;
use Aws\ResultInterface;
use Aws\CommandInterface;
use GuzzleHttp\Psr7;
use Psr\Http\Message\StreamInterface;
use transducers as t;

/**
 * Client used to interact with **Amazon Simple Storage Service (Amazon S3)**.
 */
class S3Client extends AwsClient
{
    public static function getArguments()
    {
        $args = parent::getArguments();
        // Apply custom retry strategy.
        $args['retries']['fn'] = [__CLASS__, '_applyRetryConfig'];

        // Show information about the "us-standard" region in the error message
        $args['region']['required'] = function (array $args) {
            $base = ClientResolver::_missing_region($args);
            return "{$base}\nUse the 'us-standard' or 'us-east-1' region to "
                . "send requests to the global\nAmazon S3 endpoint, which is "
                . "generally able to send requests to any region\n(though you "
                . "may need to use a region specific endpoint when sending "
                . "requests\nover https to buckets with dots in them or "
                . "contacting signature version\n4 only regions.";
        };

        return $args + [
            'calculate_md5' => [
                'type'    => 'config',
                'valid'   => ['bool'],
                'doc'     => 'Set to false to disable calculating an MD5 for '
                    . 'all Amazon S3 signed uploads.',
                'default' => function (array &$args) {
                    // S3Client should calculate MD5 checksums for uploads
                    // unless explicitly disabled or using a v4 signer.
                    return $args['config']['signature_version'] != 'v4';
                },
            ],
            'bucket_endpoint' => [
                'type'    => 'config',
                'valid'   => ['bool'],
                'doc'     => 'Set to true to send requests to a hardcoded '
                    . 'bucket endpoint rather than create an endpoint as a '
                    . 'result of injecting the bucket into the URL. This '
                    . 'option is useful for interacting with CNAME endpoints.',
            ],
            'force_path_style' => [
                'type'    => 'config',
                'valid'   => ['bool'],
                'doc'     => 'Set to true to send requests using path style '
                    . 'bucket addressing (e.g., '
                    . 'https://s3.amazonaws.com/bucket/key). All requests sent '
                    . 'to region specific endpoints will use path style by '
                    . 'default. This option is only relevant when you wish to '
                    . 'use the us-standard or us-east-1 region AND force a '
                    . 'path style request. This option has no effect when '
                    . 'using a "bucket_endpoint".'
            ],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * In addition to the options available to
     * {@see Aws\AwsClient::__construct}, S3Client accepts the following
     * options:
     *
     * - bucket_endpoint: (bool) Set to true to send requests to a
     *   hardcoded bucket endpoint rather than create an endpoint as a result
     *   of injecting the bucket into the URL. This option is useful for
     *   interacting with CNAME endpoints.
     * - calculate_md5: (bool) Set to false to disable calculating an MD5
     *   for all Amazon S3 signed uploads.
     * - force_path_style: (bool) Set to true to send requests using path
     *   style bucket addressing (e.g., https://s3.amazonaws.com/bucket/key).
     *   All requests sent to region specific endpoints will use path style by
     *   default. This option is only relevant when you wish to use the
     *   us-standard or us-east-1 region AND force a path style request. This
     *   option has no effect when using a "bucket_endpoint".
     *
     * The S3Client requires that a region is provided. You can provide the
     * "us-standard" or "us-east-1" region to use a custom region that connects
     * to the global endpoint (s3.amazonaws.com). This region should be used
     * when you do not know the actual region of the bucket or wish to attempt
     * to use the same client to connect to multiple buckets. Using the
     * "us-standard" region may encounter errors in specific cases. For example,
     * we will attempt to place the bucket in the host header so that the
     * us-standard region works with buckets created for a specific region.
     * However, if the bucket contains dots ".", then the bucket must remain in
     * the path of the URI to ensure that SSL certificate verification does not
     * fail. In this case, you may receive a 301 redirect which will require
     * you to use a client with a specific region setting. You may also be
     * required to provide a region other than us-standard or us-east-1 when
     * the bucket is in a signature version 4 only region.
     *
     * @param array $args
     */
    public function __construct(array $args)
    {
        $region = isset($args['region']) ? $args['region'] : null;
        $standard = ($region == 'us-standard' || $region == 'us-east-1');
        // Rewrite us-standard to us-east-1 so that we can sign correctly.
        if ($standard) {
            $args['region'] = 'us-east-1';
        }

        parent::__construct($args);
        $stack = $this->getHandlerList();
        $stack->append('init:s3.ssec', SSECMiddleware::wrap($this->getEndpoint()->getScheme()));
        $stack->append('build:s3.md5', ApplyMd5Middleware::wrap($this->getConfig('calculate_md5')));
        $stack->append(
            'build:s3.content_type',
            Middleware::contentType(['PutObject', 'UploadPart'])
        );

        // Use the bucket style middleware when using a "bucket_endpoint" or
        // to move the bucket to the host if using us-standard and
        // force_path_style is false.
        $bucketEndpoint = $this->getConfig('bucket_endpoint');
        if ($bucketEndpoint
            || ($standard && !$this->getConfig('force_path_style'))
        ) {
            $stack->append(
                'build:s3.bucket_style',
                BucketStyleMiddleware::wrap($bucketEndpoint)
            );
        }

        $stack->append('sign:s3.put_object_url', PutObjectUrlMiddleware::wrap());
        $stack->append('sign:s3.permanent_redirect', PermanentRedirectMiddleware::wrap());
        $stack->append('init:s3.source_file', Middleware::sourceFile($this->getApi()));
    }

    /**
     * Determine if a string is a valid name for a DNS compatible Amazon S3
     * bucket.
     *
     * DNS compatible bucket names can be used as a subdomain in a URL (e.g.,
     * "<bucket>.s3.amazonaws.com").
     *
     * @param string $bucket Bucket name to check.
     *
     * @return bool
     */
    public static function isBucketDnsCompatible($bucket)
    {
        $bucketLen = strlen($bucket);

        return ($bucketLen >= 3 && $bucketLen <= 63) &&
            // Cannot look like an IP address
            !filter_var($bucket, FILTER_VALIDATE_IP) &&
            preg_match('/^[a-z0-9]([a-z0-9\-\.]*[a-z0-9])?$/', $bucket);
    }

    /**
     * Create a pre-signed URL for the given S3 command object.
     *
     * @param CommandInterface $command     Command to create a pre-signed
     *                                      URL for.
     * @param int|string|\DateTime $expires The time at which the URL should
     *                                      expire. This can be a Unix
     *                                      timestamp, a PHP DateTime object,
     *                                      or a string that can be evaluated
     *                                      by strtotime
     * @return string
     */
    public function createPresignedUrl(CommandInterface $command, $expires)
    {
        $signer = call_user_func(
            $this->getSignatureProvider(),
            $this->getConfig('signature_version'),
            $this->getApi()->getSigningName(),
            $this->getRegion()
        );

        return $signer->createPresignedUrl(
            $this->serialize($command),
            $this->getCredentials(),
            $expires
        );
    }

    /**
     * Returns the URL to an object identified by its bucket and key.
     *
     * If an expiration time is provided, the URL will be signed and set to
     * expire at the provided time.
     *
     * @param string $bucket  The name of the bucket where the object is located
     * @param string $key     The key of the object
     * @param mixed  $expires The time at which the URL should expire.
     * @param array  $args    Associative array of additional arguments found
     *                        in the GetObject API operation.
     *
     * @return string The URL to the object
     */
    public function getObjectUrl($bucket, $key, $expires = null, array $args = [])
    {
        $args = ['Bucket' => $bucket, 'Key' => $key] + $args;
        $command = $this->getCommand('GetObject', $args);

        return $expires
            ? $this->createPresignedUrl($command, $expires)
            : (string) $this->serialize($command)->getUri();
    }

    /**
     * Determines whether or not a bucket exists by name.
     *
     * @param string $bucket  The name of the bucket
     *
     * @return bool
     */
    public function doesBucketExist($bucket)
    {
        return $this->checkExistenceWithCommand(
            $this->getCommand('HeadBucket', ['Bucket' => $bucket])
        );
    }

    /**
     * Determines whether or not an object exists by name.
     *
     * @param string $bucket  The name of the bucket
     * @param string $key     The key of the object
     * @param array  $options Additional options available in the HeadObject
     *                        operation (e.g., VersionId).
     *
     * @return bool
     */
    public function doesObjectExist($bucket, $key, array $options = [])
    {
        return $this->checkExistenceWithCommand(
            $this->getCommand('HeadObject', [
                'Bucket' => $bucket,
                'Key'    => $key
            ] + $options)
        );
    }

    /**
     * Raw URL encode a key and allow for '/' characters
     *
     * @param string $key Key to encode
     *
     * @return string Returns the encoded key
     */
    public static function encodeKey($key)
    {
        return str_replace('%2F', '/', rawurlencode($key));
    }

    /**
     * Register the Amazon S3 stream wrapper with this client instance.
     */
    public function registerStreamWrapper()
    {
        StreamWrapper::register($this);
    }

    /**
     * Deletes objects from Amazon S3 that match the result of a ListObjects
     * operation. For example, this allows you to do things like delete all
     * objects that match a specific key prefix.
     *
     * @param string $bucket  Bucket that contains the object keys
     * @param string $prefix  Optionally delete only objects under this key prefix
     * @param string $regex   Delete only objects that match this regex
     * @param array  $options Aws\S3\BatchDelete options array.
     *
     * @see Aws\S3\S3Client::listObjects
     * @throws \RuntimeException if no prefix and no regex is given
     */
    public function deleteMatchingObjects(
        $bucket,
        $prefix = '',
        $regex = '',
        array $options = []
    ) {
        if (!$prefix && !$regex) {
            throw new \RuntimeException('A prefix or regex is required.');
        }

        $params = ['Bucket' => $bucket, 'Prefix' => $prefix];
        $iter = $this->getIterator('ListObjects', $params);

        if ($regex) {
            $iter = t\to_iter(
                $iter,
                t\filter(function ($c) use ($regex) {
                    return preg_match($regex, $c['Key']);
                })
            );
        }

        BatchDelete::fromIterator($this, $bucket, $iter, $options)->delete();
    }

    /**
     * Upload a file, stream, or string to a bucket.
     *
     * If the upload size exceeds the specified threshold, the upload will be
     * performed using concurrent multipart uploads.
     *
     * The options array accepts the following options:
     *
     * - before_upload: (callable) Callback to invoke before any upload
     *   operations during the upload process. The callback should have a
     *   function signature like `function (Aws\Command $command) {...}`.
     * - concurrency: (int, default=int(3)) Maximum number of concurrent
     *   `UploadPart` operations allowed during a multipart upload.
     * - mup_threshold: (int, default=int(16777216)) The size, in bytes, allowed
     *   before the upload must be sent via a multipart upload. Default: 16 MB.
     * - params: (array, default=array([])) Custom parameters to use with the
     *   upload. For single uploads, they must correspond to those used for the
     *   `PutObject` operation. For multipart uploads, they correspond to the
     *   parameters of the `CreateMultipartUpload` operation.
     * - part_size: (int) Part size to use when doing a multipart upload.
     *
     * @param string $bucket  Bucket to upload the object.
     * @param string $key     Key of the object.
     * @param mixed  $body    Object data to upload. Can be a
     *                        StreamInterface, PHP stream resource, or a
     *                        string of data to upload.
     * @param string $acl     ACL to apply to the object (default: private).
     * @param array  $options Options used to configure the upload process.
     *
     * @see Aws\S3\MultipartUploader for more info about multipart uploads.
     * @return ResultInterface Returns the result of the upload.
     */
    public function upload($bucket, $key, $body, $acl = 'private', array $options = [])
    {
        // Prepare the options.
        static $defaults = [
            'before_upload' => null,
            'concurrency'   => 3,
            'mup_threshold' => 16777216,
            'params'        => [],
            'part_size'     => null,
        ];
        $options = array_intersect_key($options + $defaults, $defaults);

        // Perform the required operations to upload the S3 Object.
        $body = Psr7\stream_for($body);
        if ($this->requiresMultipart($body, $options['mup_threshold'])) {
            // Perform a multipart upload.
            $options['before_initiate'] = function ($command) use ($options) {
                foreach ($options['params'] as $k => $v) {
                    $command[$k] = $v;
                }
            };
            return (new MultipartUploader($this, $body, [
                'bucket' => $bucket,
                'key'    => $key,
                'acl'    => $acl
            ] + $options))->upload();
        } else {
            // Perform a regular PutObject operation.
            $command = $this->getCommand('PutObject', [
                'Bucket' => $bucket,
                'Key'    => $key,
                'Body'   => $body,
                'ACL'    => $acl,
            ] + $options['params']);
            if (is_callable($options['before_upload'])) {
                $options['before_upload']($command);
            }
            return $this->execute($command);
        }
    }

    /**
     * Recursively uploads all files in a given directory to a given bucket.
     *
     * @param string $directory Full path to a directory to upload
     * @param string $bucket    Name of the bucket
     * @param string $keyPrefix Virtual directory key prefix to add to each upload
     * @param array  $options   Options available in Aws\S3\Transfer::__construct
     *
     * @see Aws\S3\Transfer for more options and customization
     */
    public function uploadDirectory(
        $directory,
        $bucket,
        $keyPrefix = null,
        array $options = []
    ) {
        $d = "s3://$bucket" . ($keyPrefix ? '/' . ltrim($keyPrefix, '/') : '');
        (new Transfer($this, $directory, $d, $options))->transfer();
    }

    /**
     * Downloads a bucket to the local filesystem
     *
     * @param string $directory Directory to download to
     * @param string $bucket    Bucket to download from
     * @param string $keyPrefix Only download objects that use this key prefix
     * @param array  $options   Options available in Aws\S3\Transfer::__construct
     */
    public function downloadBucket(
        $directory,
        $bucket,
        $keyPrefix = '',
        array $options = []
    ) {
        $s = "s3://$bucket" . ($keyPrefix ? '/' . ltrim($keyPrefix, '/') : '');
        (new Transfer($this, $s, $directory, $options))->transfer();
    }

    /**
     * Determines if the body should be uploaded using PutObject or the
     * Multipart Upload System. It also modifies the passed-in $body as needed
     * to support the upload.
     *
     * @param StreamInterface $body      Stream representing the body.
     * @param integer             $threshold Minimum bytes before using Multipart.
     *
     * @return bool
     */
    private function requiresMultipart(StreamInterface &$body, $threshold)
    {
        // If body size known, compare to threshold to determine if Multipart.
        if ($body->getSize() !== null) {
            return $body->getSize() >= $threshold;
        }

        // Handle the situation where the body size is unknown.
        // Read up to 5MB into a buffer to determine how to upload the body.
        $buffer = Psr7\stream_for();
        Psr7\copy_to_stream($body, $buffer, MultipartUploader::PART_MIN_SIZE);

        // If body < 5MB, use PutObject with the buffer.
        if ($buffer->getSize() < MultipartUploader::PART_MIN_SIZE) {
            $buffer->seek(0);
            $body = $buffer;
            return false;
        }

        // If body >= 5 MB, then use multipart. [YES]
        if ($body->isSeekable()) {
            // If the body is seekable, just rewind the body.
            $body->seek(0);
        } else {
            // If the body is non-seekable, stitch the rewind the buffer and
            // the partially read body together into one stream. This avoids
            // unnecessary disc usage and does not require seeking on the
            // original stream.
            $buffer->seek(0);
            $body = new Psr7\AppendStream([$buffer, $body]);
        }

        return true;
    }

    /**
     * Determines whether or not a resource exists using a command
     *
     * @param CommandInterface $command Command used to poll for the resource
     *
     * @return bool
     * @throws S3Exception|\Exception if there is an unhandled exception
     */
    private function checkExistenceWithCommand(CommandInterface $command)
    {
        try {
            $this->execute($command);
            return true;
        } catch (S3Exception $e) {
            if ($e->getAwsErrorCode() == 'AccessDenied') {
                return true;
            }
            if ($e->getStatusCode() >= 500) {
                throw $e;
            }
            return false;
        }
    }

    /** @internal */
    public static function _applyRetryConfig($value, $_, HandlerList $list)
    {
        if (!$value) {
            return;
        }

        $decider = RetryMiddleware::createDefaultDecider($value);
        $decider = function ($retries, $request, $result, $error) use ($decider) {
            if ($decider($retries, $request, $result, $error)) {
                return true;
            } elseif ($error instanceof AwsException) {
                return $error->getResponse()
                    && strpos(
                        $error->getResponse()->getBody(),
                        'Your socket connection to the server'
                    ) !== false;
            }
            return false;
        };

        $delay = [RetryMiddleware::class, 'exponentialDelay'];
        $list->append('sign:retry', Middleware::retry($decider, $delay));
    }

    /** @internal */
    public static function applyDocFilters(array $api, array $docs)
    {
        $b64 = '<div class="alert alert-info">This value will be base64 '
            . 'encoded on your behalf.</div>';

        // Add the SourceFile parameter.
        $docs['shapes']['SourceFile']['base'] = 'The path to a file on disk to use instead of the Body parameter.';
        $api['shapes']['SourceFile'] = ['type' => 'string'];
        $api['shapes']['PutObjectRequest']['members']['SourceFile'] = ['shape' => 'SourceFile'];
        $api['shapes']['UploadPartRequest']['members']['SourceFile'] = ['shape' => 'SourceFile'];

        // Several SSECustomerKey documentation updates.
        $docs['shapes']['SSECustomerKey']['append'] = $b64;
        $docs['shapes']['CopySourceSSECustomerKey']['append'] = $b64;
        $docs['shapes']['SSECustomerKeyMd5']['append'] =
            '<div class="alert alert-info">The value will be computed on your '
            . 'behalf if it is not supplied.</div>';

        // Add the ObjectURL to various output shapes and documentation.
        $objectUrl = 'The URI of the created object.';
        $api['shapes']['ObjectURL'] = ['type' => 'string'];
        $api['shapes']['PutObjectOutput']['members']['ObjectURL'] = ['shape' => 'ObjectURL'];
        $api['shapes']['CopyObjectOutput']['members']['ObjectURL'] = ['shape' => 'ObjectURL'];
        $api['shapes']['CompleteMultipartUploadOutput']['members']['ObjectURL'] = ['shape' => 'ObjectURL'];
        $docs['shapes']['ObjectURL']['base'] = $objectUrl;

        // Add a note that the ContentMD5 is optional.
        $docs['shapes']['ContentMD5']['append'] =
            '<div class="alert alert-info">The SDK will compute this value '
            . 'for you on your behalf if it is required or if you  are using '
            . 'the "s3" signature version.</div>';

        return [
            new Service($api, ApiProvider::defaultProvider()),
            new DocModel($docs)
        ];
    }
}
