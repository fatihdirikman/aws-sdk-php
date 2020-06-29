<?php
namespace Aws\Test\S3;

use Aws\Command;
use Aws\CommandInterface;
use Aws\Exception\InvalidRegionException;
use Aws\Exception\UnresolvedEndpointException;
use Aws\Middleware;
use Aws\Result;
use Aws\S3\BucketEndpointArnMiddleware;
use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;
use Aws\Test\UsesServiceTrait;
use GuzzleHttp\Promise;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Aws\S3\BucketEndpointMiddleware
 */
class BucketEndpointArnMiddlewareTest extends TestCase
{
    use UsesServiceTrait;

    /**
     * @dataProvider accessPointArnCases
     *
     * @param $arn
     * @param $options
     * @param $endpoint
     * @param $key
     * @param $signingRegion
     * @throws \Exception
     */
    public function testCorrectlyModifiesUri(
        $arn,
        $options,
        $endpoint,
        $key,
        $signingRegion
    ) {
        $s3 = $this->getTestClient('s3', $options);
        $this->addMockResults($s3, [[]]);
        $command = $s3->getCommand(
            'GetObject',
            [
                'Bucket' => $arn,
                'Key' => $key
            ]
        );

        $command->getHandlerList()->appendSign(
            Middleware::tap(function (
                CommandInterface $cmd,
                RequestInterface $req
            ) use ($endpoint, $key, $signingRegion) {
                $this->assertEquals(
                    $endpoint,
                    $req->getUri()->getHost()
                );
                $this->assertEquals("/{$key}", $req->getRequestTarget());
                $this->assertEquals(
                    $signingRegion,
                    $cmd['@context']['signing_region']
                );
                $this->assertContains(
                    "/{$signingRegion}/s3/",
                    $req->getHeader('Authorization')[0]
                );
            })
        );
        $s3->execute($command);
    }

    public function accessPointArnCases()
    {
        return [
            [
                'arn:aws:s3:us-west-2:123456789012:accesspoint:myendpoint',
                [
                    'region' => 'us-west-2',
                ],
                'myendpoint-123456789012.s3-accesspoint.us-west-2.amazonaws.com',
                'Bar/Baz',
                'us-west-2',
            ],
            [
                'arn:aws:s3:us-east-1:123456789012:accesspoint:myendpoint',
                [
                    'region' => 'us-west-2',
                    'use_arn_region' => true,
                ],
                'myendpoint-123456789012.s3-accesspoint.us-east-1.amazonaws.com',
                'Bar/Baz',
                'us-east-1',
            ],
            [
                'arn:aws:s3:us-east-1:123456789012:accesspoint:myendpoint',
                [
                    'region' => 's3-external-1',
                    'use_arn_region' => true,
                ],
                'myendpoint-123456789012.s3-accesspoint.us-east-1.amazonaws.com',
                'Bar/Baz',
                'us-east-1',
            ],
            [
                'arn:aws:s3:us-east-1:123456789012:accesspoint:myendpoint',
                [
                    'region' => 's3-external-1',
                    'use_arn_region' => false,
                ],
                'myendpoint-123456789012.s3-accesspoint.s3-external-1.amazonaws.com',
                'Bar/Baz',
                'us-east-1',
            ],
            [
                'arn:aws:s3:us-west-2:123456789012:accesspoint:myendpoint',
                [
                    'region' => 'us-west-2',
                    'use_dual_stack_endpoint' => true,
                ],
                'myendpoint-123456789012.s3-accesspoint.dualstack.us-west-2.amazonaws.com',
                'Bar/Baz',
                'us-west-2',
            ],
            [
                'arn:aws-cn:s3:cn-north-1:123456789012:accesspoint:myendpoint',
                [
                    'region' => 'cn-north-1',
                    'use_arn_region' => true,
                ],
                'myendpoint-123456789012.s3-accesspoint.cn-north-1.amazonaws.com.cn',
                'Bar/Baz',
                'cn-north-1',
            ],
            [
                'arn:aws-cn:s3:cn-north-1:123456789012:accesspoint:myendpoint',
                [
                    'region' => 'cn-north-1',
                    'use_arn_region' => false,
                ],
                'myendpoint-123456789012.s3-accesspoint.cn-north-1.amazonaws.com.cn',
                'Bar/Baz',
                'cn-north-1',
            ],
            [
                'arn:aws-cn:s3:cn-northwest-1:123456789012:accesspoint:myendpoint',
                [
                    'region' => 'cn-north-1',
                    'use_arn_region' => true,
                ],
                'myendpoint-123456789012.s3-accesspoint.cn-northwest-1.amazonaws.com.cn',
                'Bar/Baz',
                'cn-northwest-1',
            ],
            [
                'arn:aws-us-gov:s3:us-gov-east-1:123456789012:accesspoint:myendpoint',
                [
                    'region' => 'us-gov-east-1',
                    'use_arn_region' => true,
                ],
                'myendpoint-123456789012.s3-accesspoint.us-gov-east-1.amazonaws.com',
                'Bar/Baz',
                'us-gov-east-1',
            ],
            [
                'arn:aws-us-gov:s3:us-gov-east-1:123456789012:accesspoint:myendpoint',
                [
                    'region' => 'fips-us-gov-east-1',
                    'use_arn_region' => true,
                ],
                'myendpoint-123456789012.s3-accesspoint.us-gov-east-1.amazonaws.com',
                'Bar/Baz',
                'us-gov-east-1',
            ],
            [
                'arn:aws-us-gov:s3:us-gov-east-1:123456789012:accesspoint:myendpoint',
                [
                    'region' => 'fips-us-gov-east-1',
                    'use_arn_region' => true,
                    'use_dual_stack_endpoint' => true,
                ],
                'myendpoint-123456789012.s3-accesspoint.dualstack.us-gov-east-1.amazonaws.com',
                'Bar/Baz',
                'us-gov-east-1',
            ],
        ];
    }

    /**
     * @dataProvider badUsageProvider
     *
     * @param CommandInterface $command
     * @param array $config
     * @param \Exception $expected
     */
    public function testThrowsForIncorrectArnUsage($command, $config, \Exception $expected)
    {
        try {
            $s3 = $this->getTestClient('s3', $config);
            $this->addMockResults($s3, [[]]);
            $command = $s3->getCommand(
                $command->getName(),
                $command->toArray()
            );
            $s3->execute($command);
            $this->fail('This was expected to fail with: ' . $expected->getMessage());
        } catch (\Exception $e) {
            $this->assertTrue($e instanceof $expected);
            $this->assertEquals(
                $expected->getMessage(),
                $e->getMessage()
            );
        }
    }

    public function badUsageProvider()
    {
        return [
            // Non-matching regions
            [
                new Command(
                    'GetObject',
                    [
                        'Bucket' => 'arn:aws:s3:us-east-1:123456789012:accesspoint:myendpoint',
                        'Key' => 'Bar/Baz',
                    ]
                ),
                ['region' => 'us-west-2'],
                new InvalidRegionException('The region specified in the ARN'
                    . ' (us-east-1) does not match the client region (us-west-2).')
            ],
            // Accelerate with access point ARN
            [
                new Command(
                    'GetObject',
                    [
                        'Bucket' => 'arn:aws:s3:us-east-1:123456789012:accesspoint:myendpoint',
                        'Key' => 'Bar/Baz',
                    ]
                ),
                [
                    'region' => 'us-west-2',
                    'use_accelerate_endpoint' => true,
                ],
                new UnresolvedEndpointException('Accelerate is currently not'
                    . ' supported with access points. Please disable accelerate'
                    . ' or do not supply an access point ARN.')
            ],
            // Path-style with access point ARN
            [
                new Command(
                    'GetObject',
                    [
                        'Bucket' => 'arn:aws:s3:us-east-1:123456789012:accesspoint:myendpoint',
                        'Key' => 'Bar/Baz',
                    ]
                ),
                [
                    'region' => 'us-west-2',
                    'use_path_style_endpoint' => true,
                ],
                new UnresolvedEndpointException('Path-style addressing is'
                    . ' currently not supported with access points. Please'
                    . ' disable path-style or do not supply an access point ARN.')
            ],
            // Wrong ARN type
            [
                new Command(
                    'GetObject',
                    [
                        'Bucket' => 'arn:aws:s3:us-east-1:123456789012:some_type:myendpoint',
                        'Key' => 'Bar/Baz',
                    ]
                ),
                ['region' => 'us-west-2'],
                new S3Exception(
                    'Bucket parameter parsed as ARN and failed with: Provided'
                        . ' ARN was not a valid S3 access point ARN or S3'
                        . ' Outposts access point ARN.',
                    new Command([])
                )
            ],
            // Invalid ARN
            [
                new Command(
                    'GetObject',
                    [
                        'Bucket' => 'arn:not:valid',
                        'Key' => 'Bar/Baz',
                    ]
                ),
                ['region' => 'us-west-2'],
                new S3Exception(
                    'Bucket parameter parsed as ARN and failed with: The 6th'
                        . ' component of an ARN represents the resource'
                        . ' information and must not be empty. Individual'
                        . ' service ARNs may include additional delimiters to'
                        . ' further qualify resources.',
                    new Command([])
                )
            ],
            // Endpoint and ARN both set
            [
                new Command(
                    'GetObject',
                    [
                        'Bucket' => 'arn:aws:s3:us-east-1:123456789012:accesspoint:myendpoint',
                        'Key' => 'Bar/Baz',
                    ]
                ),
                ['region' => 'us-west-2', 'endpoint' => 'https://foo.com'],
                new UnresolvedEndpointException('A custom endpoint has been'
                    . ' supplied along with an access point ARN, and these are'
                    . ' not compatible with each other. Please only use one or'
                    . ' the other.')
            ],
            // Non-matching partition
            [
                new Command(
                    'GetObject',
                    [
                        'Bucket' => 'arn:aws-cn:s3:cn-north-1:123456789012:accesspoint:myendpoint',
                        'Key' => 'Bar/Baz',
                    ]
                ),
                [
                    'region' => 'us-west-2',
                    's3_use_arn_region' => true,
                ],
                new InvalidRegionException('The supplied ARN partition does not'
                    . " match the client's partition.")
            ],
            // Non-matching calculated partition
            [
                new Command(
                    'GetObject',
                    [
                        'Bucket' => 'arn:aws:s3:cn-north-1:123456789012:accesspoint:myendpoint',
                        'Key' => 'Bar/Baz',
                    ]
                ),
                [
                    'region' => 'us-east-1',
                    's3_use_arn_region' => true,
                ],
                new InvalidRegionException('The corresponding partition for the'
                    . " supplied ARN region does not match the client's partition.")
            ],
            // CreateBucket operation with access point ARN
            [
                new Command(
                    'CreateBucket',
                    [
                        'Bucket' => 'arn:aws:s3:us-west-2:123456789012:accesspoint:myendpoint',
                    ]
                ),
                [
                    'region' => 'us-west-2',
                    's3_use_arn_region' => true,
                ],
                new S3Exception(
                    'ARN values cannot be used in the bucket field for the'
                        . ' CreateBucket operation.',
                    new Command([])
                )
            ],
        ];
    }

    public function testCorrectlyHandlesCopyObject()
    {
        $s3 = new S3Client([
            'version' => 'latest',
            'region' => 'us-west-2',
            's3_use_arn_region' => true,
            'handler' => function(CommandInterface $cmd, RequestInterface $req) {
                $this->assertEquals(
                    'myendpoint-123456789012.s3-accesspoint.us-west-2.amazonaws.com',
                    $req->getUri()->getHost()
                );
                $this->assertEquals(
                    'arn:aws:s3:us-west-2:123456789012:accesspoint:myendpoint/myobject',
                    $req->getHeader('x-amz-copy-source')[0]
                );
                return Promise\promise_for(new Result([]));
            }
        ]);
        $command = $s3->getCommand(
            'CopyObject',
            [
                'Bucket' => 'arn:aws:s3:us-west-2:123456789012:accesspoint:myendpoint',
                'CopySource' => 'arn:aws:s3:us-west-2:123456789012:accesspoint:myendpoint/myobject',
                'Key' => 'mykey'
            ]
        );
        $s3->execute($command);
    }
}
