<?php

namespace Qcloud\Cos\Request;

use GuzzleHttp\Command\Guzzle\RequestLocation\XmlLocation as DefaultXmlLocation;

class XmlLocation extends DefaultXmlLocation
{
    protected function writeElement(\XMLWriter $writer, $prefix, $name, $namespace, $value)
    {
        if ($namespace) {
            $writer->startElementNS($prefix, $name, $namespace);
        } else {
            $writer->startElement($name);
        }
        // Remove use writeCdata
        $writer->writeRaw($value);
        $writer->endElement();
    }
}
