<?php

namespace NOS\Tests;

use NOS\Core\MimeTypes;

class MimeTypesTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMimeType()
    {
        $this->assertEquals('application/xml', MimeTypes::getMimetype('file.xml'));
    }
}
