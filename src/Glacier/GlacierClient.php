<?php
namespace Aws\Glacier;

use Aws\AwsClient;
use Aws\CommandInterface;
use Aws\Exception\CouldNotCreateChecksumException;
use Aws\HashingStream;
use Aws\Middleware;
use Aws\PhpHash;
use Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **Amazon Glacier** service.
 */
class GlacierClient extends AwsClient
{
    public function __construct(array $args)
    {
        parent::__construct($args);

        // Setup middleware.
        $stack = $this->getHandlerList();
        $stack->append('build:glacier.api_version',$this->getApiVersionMiddleware());
        $stack->append('build:glacier.checksum', $this->getChecksumsMiddleware());
        $stack->append(
            'build:glacier.content_type',
            Middleware::contentType(['UploadArchive', 'UploadPart'])
        );
        $stack->append(
            'init:glacier.source_file',
            Middleware::sourceFile($this->getApi(), 'body', 'sourceFile')
        );
    }

    /**
     * {@inheritdoc}
     *
     * Sets the default accountId to "-" for all operations.
     */
    public function getCommand($name, array $args = [])
    {
        return parent::getCommand($name, $args + ['accountId' => '-']);
    }

    /**
     * Creates a middleware that updates a command with the content and tree
     * hash headers for upload operations.
     *
     * @return callable
     * @throws CouldNotCreateChecksumException if the body is not seekable.
     */
    private function getChecksumsMiddleware()
    {
        return function (callable $handler) {
            return function (
                CommandInterface $command,
                RequestInterface $request = null
            ) use ($handler) {
                // If uploading, then make sure checksums are added.
                $name = $command->getName();
                if (($name === 'UploadArchive' || $name === 'UploadPart')
                    && (!$command['checksum'] || !$command['ContentSHA256'])
                ) {
                    $body = $request->getBody();
                    if (!$body->isSeekable()) {
                        throw new CouldNotCreateChecksumException('sha256');
                    }

                    // Add a tree hash if not provided.
                    if (!$command['checksum']) {
                        $body = new HashingStream(
                            $body, new TreeHash(),
                            function ($result) use ($command, &$request) {
                                $request = $request->withHeader(
                                    'x-amz-sha256-tree-hash',
                                    bin2hex($result)
                                );
                            }
                        );
                    }

                    // Add a linear content hash if not provided.
                    if (!$command['ContentSHA256']) {
                        $body = new HashingStream(
                            $body, new PhpHash('sha256'),
                            function ($result) use ($command) {
                                $command['ContentSHA256'] = bin2hex($result);
                            }
                        );
                    }

                    // Read the stream in order to calculate the hashes.
                    while (!$body->eof()) {
                        $body->read(1048576);
                    }
                    $body->seek(0);
                }

                // Set the content hash header if a value is in the command.
                if ($command['ContentSHA256']) {
                    $request = $request->withHeader(
                        'x-amz-content-sha256',
                        $command['ContentSHA256']
                    );
                }

                return $handler($command, $request);
            };
        };
    }

    /**
     * Creates a middleware that adds the API version header for all requests.
     *
     * @return callable
     */
    private function getApiVersionMiddleware()
    {
        return function (callable $handler) {
            return function (
                CommandInterface $command,
                RequestInterface $request = null
            ) use ($handler) {
                return $handler($command, $request->withHeader(
                    'x-amz-glacier-version',
                    $this->getApi()->getMetadata('apiVersion')
                ));
            };
        };
    }
}
