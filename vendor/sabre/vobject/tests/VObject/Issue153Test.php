<?php

namespace Sabre\VObject;

use PHPUnit\Framework\TestCase;

class Issue153Test extends TestCase
{
    public function testRead()
    {
        $obj = Reader::read(file_get_contents(dirname(__FILE__).'/issue153.vcf'));
        $this->assertEquals('Test Benutzer', (string) $obj->FN);
    }
}
