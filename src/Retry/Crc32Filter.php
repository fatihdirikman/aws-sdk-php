<?php
namespace Aws\Retry;

use GuzzleHttp\Event\AbstractTransferEvent;
use GuzzleHttp\Subscriber\Retry\RetrySubscriber;
use GuzzleHttp\Psr7;

/**
 * Retries requests based on the x-amz-crc32 response header.
 */
class Crc32Filter
{
    public function __invoke($retries, AbstractTransferEvent $event)
    {
        if (!($response = $event->getResponse())) {
            return RetrySubscriber::DEFER;
        }

        if (!$response->hasHeader('x-amz-crc32')) {
            return RetrySubscriber::DEFER;
        }

        $hash = hexdec(Psr7\hash($response->getBody(), 'crc32b'));

        return (int) $response->getHeader('x-amz-crc32') !== $hash
            ? RetrySubscriber::RETRY
            : RetrySubscriber::DEFER;
    }
}
