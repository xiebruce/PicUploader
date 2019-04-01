<?php

namespace Sabre\VObject\Property;

use PHPUnit\Framework\TestCase;
use Sabre\VObject;

class BooleanTest extends TestCase
{
    public function testMimeDir()
    {
        $input = "BEGIN:VCARD\r\nX-AWESOME;VALUE=BOOLEAN:TRUE\r\nX-SUCKS;VALUE=BOOLEAN:FALSE\r\nEND:VCARD\r\n";

        $vcard = VObject\Reader::read($input);
        $this->assertTrue($vcard->{'X-AWESOME'}->getValue());
        $this->assertFalse($vcard->{'X-SUCKS'}->getValue());

        $this->assertEquals('BOOLEAN', $vcard->{'X-AWESOME'}->getValueType());
        $this->assertEquals($input, $vcard->serialize());
    }
}
