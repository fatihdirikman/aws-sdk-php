<?php

namespace Aws\Tests\Common\Exception\Parser;

use Aws\Common\Exception\Parser\DefaultXmlExceptionParser;
use Guzzle\Http\Message\Response;

/**
 * @covers Aws\Common\Exception\Parser\DefaultXmlExceptionParser
 */
class DefaultXmlExceptionParserTest extends \Guzzle\Tests\GuzzleTestCase
{
    /**
     * @return array
     */
    public function xmlDataProvider()
    {
        return array(
            array(
                '<?xml version="1.0" encoding="UTF-8"?>' . "\n" .
                '<Response>' .
                '  <Errors>' .
                '    <Error>' .
                '      <Code>Error code text</Code>' .
                '      <Message>Error message</Message>' .
                '    </Error>' .
                '  </Errors>' .
                '  <RequestID>xyz</RequestID>' .
                '</Response>'
            ),
            array(
                '<?xml version="1.0" encoding="UTF-8"?>' . "\n" .
                '<Error>' .
                '  <Code>Error code text</Code>' .
                '  <Message>Error message</Message>' .
                '  <Resource>Foo</Resource>' .
                '  <RequestId>xyz</RequestId>' .
                '</Error>'
            )
        );
    }

    /**
     * @dataProvider xmlDataProvider
     */
    public function testParsesResponses($xml)
    {
        $response = Response::fromMessage(
            "HTTP/1.1 400 Bad Request\r\n\r\n" .
            $xml
        );

        $parser = new DefaultXmlExceptionParser();
        $result = $parser->parse($response);
        $this->assertInternalType('array', $result);
        $this->assertEquals('client', $result['type']);
        $this->assertEquals('Error code text', $result['code']);
        $this->assertEquals('Error message', $result['message']);
        $this->assertEquals('xyz', $result['request_id']);
        $this->assertInstanceOf('SimpleXMLElement', $result['parsed']);
    }
}
