<?php

namespace Aws\Tests\Common\Signature;

use Aws\Common\Signature\SignatureV4;
use Aws\Common\Credentials\Credentials;
use Guzzle\Parser\ParserRegistry;
use Guzzle\Http\Message\RequestFactory;
use Guzzle\Http\Message\Request;

class SignatureV4Test extends \Guzzle\Tests\GuzzleTestCase
{
    const DEFAULT_KEY = 'AKIDEXAMPLE';
    const DEFAULT_SECRET = 'wJalrXUtnFEMI/K7MDENG+bPxRfiCYEXAMPLEKEY';
    const DEFAULT_DATETIME = 'Mon, 09 Sep 2011 23:36:00 GMT';

    /**
     * @return SignatureV4
     */
    private function getSignature()
    {
        // Mock the timestamp function to use the test suite timestamp
        $signature = $this->getMock('Aws\Common\Signature\SignatureV4', array('getTimestamp', 'getDateTime'));

        // Hack the shared timestamp
        $signature->expects($this->any())
            ->method('getTimestamp')
            ->will($this->returnValue(strtotime(self::DEFAULT_DATETIME)));

        // Hack the date time to deal with the wrong date in the example files
        $signature->expects($this->any())
            ->method('getDateTime')
            ->will($this->returnValueMap(array(
            array(SignatureV4::DATE_FORMAT_RFC1123, 'Mon, 09 Sep 2011 23:36:00 GMT'),
            array(SignatureV4::DATE_FORMAT_ISO8601, '20110909T233600Z'),
            array(SignatureV4::DATE_FORMAT_SHORT, '20110909')
        )));

        return $signature;
    }

    /**
     * @dataProvider testSuiteProvider
     * @covers Aws\Common\Signature\SignatureV4
     * @covers Aws\Common\Signature\AbstractSignature
     */
    public function testSignsRequestsProperly($group)
    {
        ParserRegistry::get('url')->setUtf8Support(true);

        // Create a request based on the '.req' file
        $requestString = file_get_contents($group['req']);
        $request = RequestFactory::getInstance()->fromMessage($requestString);

        // Sanitize the request
        $request->removeHeader('User-Agent');
        $request->removeHeader('Content-Length');

        // Sign the request using the test credentials
        $credentials = new Credentials(self::DEFAULT_KEY, self::DEFAULT_SECRET);
        // Get a mock signature object
        $signature = $this->getSignature();

        // Sign the request
        $signature->signRequest($request, $credentials);

        // Test that the canonical request is correct
        $this->assertEquals(str_replace("\r", '', file_get_contents($group['creq'])), $request->getParams()->get('aws.canonical_request'));

        // Test that the string to sign is correct
        $this->assertEquals(str_replace("\r", '', file_get_contents($group['sts'])), $request->getParams()->get('aws.string_to_sign'));

        // Test that the authorization header is correct
        $this->assertEquals(str_replace("\r", '', file_get_contents($group['authz'])), $request->getHeader('Authorization'));

        ParserRegistry::get('url')->setUtf8Support(false);
    }

    /**
     * @return array
     */
    public function testSuiteProvider()
    {
        // Gather a list of files sorted by name
        $files = glob(__DIR__ . DIRECTORY_SEPARATOR . 'aws4_testsuite' . DIRECTORY_SEPARATOR . '*');
        sort($files);

        $groups = array();

        // Break the files up into groups of five for each test case
        $group = array();
        for ($i = 0, $c = count($files); $i < $c; $i++) {
            $types = explode('.', $files[$i]);
            $type = end($types);
            $group[$type] = $files[$i];
            if (count($group) == 5) {
                $groups[] = array($group);
                $group = array();
            }
        }

        return $groups;
    }

    /**
     * @covers Aws\Common\Signature\SignatureV4::signRequest
     */
    public function testSignsRequestsThatUseXamzdateHeaders()
    {
        $credentials = new Credentials(self::DEFAULT_KEY, self::DEFAULT_SECRET);
        $signature = $this->getSignature();
        $request = RequestFactory::getInstance()->fromMessage("GET / HTTP/1.1\r\nx-amz-date: Mon, 09 Sep 2011 23:36:00 GMT\r\nHost: foo.com\r\n\r\n");

        $signature->signRequest($request, $credentials);
        $this->assertContains("\nx-amz-date:20110909T233600Z", $request->getParams()->get('aws.canonical_request'));
        $this->assertNotContains("\ndate:20110909T233600Z", $request->getParams()->get('aws.canonical_request'));
    }

    /**
     * @covers Aws\Common\Signature\SignatureV4::signRequest
     */
    public function testUsesSecurityTokensWhenAvailable()
    {
        $signature = $this->getSignature();
        $request = new Request('GET', 'http://www.example.com');
        // Create a credentials object with a token
        $credentials = new Credentials('a', 'b', 'c', time() + 10000);
        $signature->signRequest($request, $credentials);
        $this->assertEquals('c', (string) $request->getHeader('x-amz-security-token'));
    }

    /**
     * @covers Aws\Common\Signature\AbstractEndpointSignature::setServiceName
     * @covers Aws\Common\Signature\AbstractEndpointSignature::setRegionName
     */
    public function testCanExplicitlySetServiceAndRegionName()
    {
        $signature = $this->getSignature();
        $signature->setServiceName('foo');
        $signature->setRegionName('bar');
        $request = new Request('GET', 'http://www.example.com');
        $credentials = new Credentials('fizz', 'buzz');
        $signature->signRequest($request, $credentials);
        $this->assertContains('/foo/aws4_request', $request->getParams()->get('aws.string_to_sign'));
    }

    /**
     * @covers Aws\Common\Signature\SignatureV4::setMaxCacheSize
     * @covers Aws\Common\Signature\SignatureV4::signRequest
     * @covers Aws\Common\Signature\SignatureV4::getHash
     */
    public function testMaintainsCappedCache()
    {
        $signature = $this->getSignature();
        $signature->setMaxCacheSize(8);
        $request = new Request('GET', 'http://www.example.com');

        $credentials = new Credentials('fizz', 'buzz');
        $signature->signRequest($request, $credentials);
        $this->assertEquals(4, count($this->readAttribute($signature, 'hashCache')));

        $credentials = new Credentials('fizz', 'baz');
        $signature->signRequest($request, $credentials);
        $this->assertEquals(8, count($this->readAttribute($signature, 'hashCache')));

        $credentials = new Credentials('fizz', 'paz');
        $signature->signRequest($request, $credentials);
        $this->assertEquals(4, count($this->readAttribute($signature, 'hashCache')));
    }
}
