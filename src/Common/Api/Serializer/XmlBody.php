<?php
namespace Aws\Common\Api\Serializer;

use Aws\Common\Api\Service;
use Aws\Common\Api\Shape;
use Aws\Common\Api\StructureShape;
use Aws\Common\Api\ListShape;
use Aws\Common\Api\TimestampShape;

/**
 * @internal Formats the XML body of a REST-XML services.
 */
class XmlBody
{
    /** @var \Aws\Common\Api\Service */
    private $api;

    /**
     * @param Service $api API being used to create the XML body.
     */
    public function __construct(Service $api)
    {
        $this->api = $api;
    }

    /**
     * Builds the XML body based on an array of arguments.
     *
     * @param Shape $shape Operation being constructed
     * @param array $args  Associative array of arguments
     *
     * @return string
     */
    public function build(Shape $shape, array $args)
    {
        $xml = new \XMLWriter();
        $xml->openMemory();
        $xml->startDocument('1.0', 'UTF-8');
        $this->format($shape, $shape['locationName'], $args, $xml);
        $xml->endDocument();

        return $xml->outputMemory();
    }

    private function startElement(Shape $shape, $name, \XMLWriter $xml)
    {
        $xml->startElement($name);

        if ($ns = $shape['xmlNamespace']) {
            $xml->writeAttribute(
                isset($ns['prefix']) ? "xmlns:{$ns['prefix']}" : 'xmlns',
                $shape['xmlNamespace']['uri']
            );
        }
    }

    private function format(Shape $shape, $name, $value, \XMLWriter $xml)
    {
        // Any method mentioned here has a custom serialization handler.
        static $methods = [
            'add_structure' => true,
            'add_list'      => true,
            'add_blob'      => true,
            'add_timestamp' => true,
            'add_boolean'   => true,
            'add_string'    => true
        ];

        $type = 'add_' . $shape['type'];
        if (isset($methods[$type])) {
            $this->{$type}($shape, $name, $value, $xml);
        } else {
            $this->defaultShape($shape, $name, $value, $xml);
        }
    }

    private function defaultShape(Shape $shape, $name, $value, \XMLWriter $xml)
    {
        $this->startElement($shape, $name, $xml);
        $this->writeContent($value, $xml);
        $xml->endElement();
    }

    private function add_structure(
        StructureShape $shape,
        $name,
        array $value,
        \XMLWriter $xml
    ) {
        $this->startElement($shape, $name, $xml);

        foreach ($value as $k => $v) {
            if ($v !== null && $shape->hasMember($k)) {
                $member = $shape->getMember($k);
                $elementName = $member['locationName'] ?: $k;
                $this->format($member, $elementName, $v, $xml);
            }
        }

        $xml->endElement();
    }

    private function add_list(
        ListShape $shape,
        $name,
        array $value,
        \XMLWriter $xml
    ) {
        $items = $shape->getMember();

        if ($shape['flattened']) {
            $elementName = $name;
        } else {
            $this->startElement($shape, $name, $xml);
            $elementName = $items['locationName'] ?: 'member';
        }

        foreach ($value as &$v) {
            $this->format($items, $elementName, $v, $xml);
        }

        if (!$shape['flattened']) {
            $xml->endElement();
        }
    }

    private function add_blob(Shape $shape, $name, $value, \XMLWriter $xml)
    {
        $this->startElement($shape, $name, $xml);
        $this->writeContent(base64_encode($value), $xml);
        $xml->endElement();
    }

    private function add_timestamp(
        TimestampShape $shape,
        $name,
        $value,
        \XMLWriter $xml
    ) {
        $this->startElement($shape, $name, $xml);
        $value = $shape->format(
            $value,
            $this->api->getMetadata('timestampFormat')
        );
        $this->writeContent($value, $xml);
        $xml->endElement();
    }

    private function add_boolean(
        Shape $shape,
        $name,
        $value,
        \XMLWriter $xml
    ) {
        $this->startElement($shape, $name, $xml);
        $this->writeContent($value ? 'true' : 'false', $xml);
        $xml->endElement();
    }

    private function add_string(
        Shape $shape,
        $name,
        $value,
        \XMLWriter $xml
    ) {
        if ($shape['xmlAttribute']) {
            $xml->writeAttribute($shape['locationName'] ?: $name, $value);
        } else {
            $this->defaultShape($shape, $name, $value, $xml);
        }
    }

    /**
     * Write raw XML content (text) to the XML writer.
     */
    private function writeContent($value, \XMLWriter $xml)
    {
        $xml->writeRaw($value);
    }
}
