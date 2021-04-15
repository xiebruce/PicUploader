<?php

namespace Sabre\VObject\Property\VCard;

use PHPUnit\Framework\TestCase;
use Sabre\VObject;

class PhoneNumberTest extends TestCase
{
    public function testParser()
    {
        $input = "BEGIN:VCARD\r\nVERSION:3.0\r\nTEL;TYPE=HOME;VALUE=PHONE-NUMBER:+1234\r\nEND:VCARD\r\n";

        $vCard = VObject\Reader::read($input);
        $this->assertInstanceOf('Sabre\VObject\Property\VCard\PhoneNumber', $vCard->TEL);
        $this->assertEquals('PHONE-NUMBER', $vCard->TEL->getValueType());
        $this->assertEquals($input, $vCard->serialize());
    }
}
