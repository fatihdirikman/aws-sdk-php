<?php
namespace Aws\Test;

use Aws\Command;
use Aws\Exception\AwsException;
use Aws\MockHandler;
use Aws\Result;
use Aws\RetryMiddleware;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

/**
 * @covers Aws\RetryMiddleware
 */
class RetryMiddlewareTest extends \PHPUnit_Framework_TestCase
{
    public function testDeciderRetriesWhenStatusCodeMatches()
    {
        $decider = RetryMiddleware::createDefaultDecider();
        $command = new Command('foo');
        $request = new Request('GET', 'http://www.example.com');
        $result = new Result(['@metadata' => ['statusCode' => '500']]);
        $this->assertTrue($decider(0, $command, $request, $result, null));
        $result = new Result(['@metadata' => ['statusCode' => '503']]);
        $this->assertTrue($decider(0, $command, $request, $result, null));
    }

    public function testDeciderRetriesWhenConnectionError()
    {
        $decider = RetryMiddleware::createDefaultDecider();
        $command = new Command('foo');
        $request = new Request('GET', 'http://www.example.com');
        $err = new AwsException('e', $command, ['connection_error' => true]);
        $this->assertTrue($decider(0, $command, $request, null, $err));
        $err = new AwsException('e', $command, ['connection_error' => false]);
        $this->assertFalse($decider(0, $command, $request, null, $err));
    }

    public function testDeciderIgnoresNonAwsExceptions()
    {
        $decider = RetryMiddleware::createDefaultDecider();
        $command = new Command('foo');
        $request = new Request('GET', 'http://www.example.com');
        $err = new \Exception('e');
        $this->assertFalse($decider(0, $command, $request, null, $err));
    }

    public function testDeciderRetriesWhenAwsErrorCodeMatches()
    {
        $decider = RetryMiddleware::createDefaultDecider();
        $command = new Command('foo');
        $request = new Request('GET', 'http://www.example.com');
        $err = new AwsException('e', $command, ['code' => 'RequestLimitExceeded']);
        $this->assertTrue($decider(0, $command, $request, null, $err));
        $err = new AwsException('e', $command, ['code' => 'Foo']);
        $this->assertFalse($decider(0, $command, $request, null, $err));
    }

    public function testDeciderRetriesWhenExceptionStatusCodeMatches()
    {
        $decider = RetryMiddleware::createDefaultDecider();
        $command = new Command('foo');
        $request = new Request('GET', 'http://www.example.com');
        $err = new AwsException('e', $command, ['response' => new Response(500)]);
        $this->assertTrue($decider(0, $command, $request, null, $err));
        $err = new AwsException('e', $command, ['response' => new Response(503)]);
        $this->assertTrue($decider(0, $command, $request, null, $err));
        $err = new AwsException('e', $command, ['response' => new Response(403)]);
        $this->assertFalse($decider(0, $command, $request, null, $err));
    }

    public function testDeciderDoesNotRetryAfterMaxAttempts()
    {
        $decider = RetryMiddleware::createDefaultDecider();
        $command = new Command('foo');
        $request = new Request('GET', 'http://www.example.com');
        $err = new AwsException('e', $command, ['code' => 'RequestLimitExceeded']);
        $this->assertTrue($decider(0, $command, $request, null, $err));
        $this->assertFalse($decider(3, $command, $request, null, $err));
    }

    public function testDelaysExponentially()
    {
        $this->assertEquals(0, RetryMiddleware::exponentialDelay(0));
        $this->assertEquals(1, RetryMiddleware::exponentialDelay(1));
        $this->assertEquals(2, RetryMiddleware::exponentialDelay(2));
        $this->assertEquals(4, RetryMiddleware::exponentialDelay(3));
        $this->assertEquals(8, RetryMiddleware::exponentialDelay(4));
    }

    public function testRetriesWhenResultMatches()
    {
        $command = new Command('foo');
        $request = new Request('GET', 'http://www.example.com');
        $res1 = new Result(['@metadata' => ['statusCode' => '503']]);
        $res2 = new Result(['@metadata' => ['statusCode' => '200']]);
        $mock = new MockHandler(
            [
                function ($command, $request) use ($res1) {
                    $this->assertFalse(isset($command['@http']['delay']));
                    return $res1;
                },
                function ($command, $request) use ($res2) {
                    $this->assertSame(0, $command['@http']['delay']);
                    return $res2;
                },
            ],
            function () use (&$called) { $called[] = func_get_args(); }
        );

        $wrapped = new RetryMiddleware(
            RetryMiddleware::createDefaultDecider(),
            [RetryMiddleware::class, 'exponentialDelay'],
            $mock
        );

        $result = $wrapped($command, $request)->wait();
        $this->assertSame($res2, $result);
        $this->assertCount(2, $called);
        $this->assertSame([$res1], $called[0]);
        $this->assertSame([$res2], $called[1]);
    }

    public function testRetriesWhenExceptionMatches()
    {
        $command = new Command('foo');
        $request = new Request('GET', 'http://www.example.com');
        $mock = new MockHandler(
            [
                function ($command, $request) {
                    $this->assertFalse(isset($command['@http']['delay']));
                    return new AwsException('foo', $command, [
                        'connection_error' => true
                    ]);
                },
                function ($command, $request) {
                    $this->assertSame(0, $command['@http']['delay']);
                    return new Result();
                },
            ],
            function () use (&$called) { $called[] = func_get_args(); },
            function () use (&$called) { $called[] = func_get_args(); }
        );

        $wrapped = new RetryMiddleware(
            RetryMiddleware::createDefaultDecider(),
            [RetryMiddleware::class, 'exponentialDelay'],
            $mock
        );

        $result = $wrapped($command, $request)->wait();
        $this->assertInstanceOf('Aws\ResultInterface', $result);
        $this->assertCount(2, $called);
        $this->assertInstanceOf('Aws\Exception\AwsException', $called[0][0]);
        $this->assertInstanceOf('Aws\ResultInterface', $called[1][0]);
    }

    public function testForwardRejectionWhenExceptionDoesNotMatch()
    {
        $command = new Command('foo');
        $request = new Request('GET', 'http://www.example.com');
        $mock = new MockHandler(
            [
                function ($command, $request) {
                    $this->assertFalse(isset($command['@http']['delay']));
                    return new AwsException('foo', $command);
                }
            ],
            function () use (&$called) { $called[] = func_get_args(); },
            function () use (&$called) { $called[] = func_get_args(); }
        );

        $wrapped = new RetryMiddleware(
            RetryMiddleware::createDefaultDecider(),
            [RetryMiddleware::class, 'exponentialDelay'],
            $mock
        );

        try {
            $wrapped($command, $request)->wait();
            $this->fail();
        } catch (AwsException $e) {
            $this->assertCount(1, $called);
            $this->assertContains('foo', $e->getMessage());
        }
    }

    public function testForwardValueWhenResultDoesNotMatch()
    {
        $command = new Command('foo');
        $request = new Request('GET', 'http://www.example.com');
        $res1 = new Result();
        $mock = new MockHandler(
            [$res1],
            function () use (&$called) { $called[] = func_get_args(); },
            function () use (&$called) { $called[] = func_get_args(); }
        );

        $wrapped = new RetryMiddleware(
            RetryMiddleware::createDefaultDecider(),
            [RetryMiddleware::class, 'exponentialDelay'],
            $mock
        );

        $result = $wrapped($command, $request)->wait();
        $this->assertSame($res1, $result);
        $this->assertCount(1, $called);
    }

    public function testRetriesCanBeDisabledOnACommand()
    {
        $decider = RetryMiddleware::createDefaultDecider($retries = 3);
        $command = new Command('foo', ['@retries' => 0]);
        $request = new Request('GET', 'http://www.example.com');
        $err = new AwsException('e', $command, ['connection_error' => true]);
        $this->assertFalse($decider(0, $command, $request, null, $err));
    }
}
