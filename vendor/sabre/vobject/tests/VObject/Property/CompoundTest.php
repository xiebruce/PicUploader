<?php

namespace Sabre\VObject\Property;

use PHPUnit\Framework\TestCase;
use Sabre\VObject\Component\VCard;

class CompoundTest extends TestCase
{
    public function testSetParts()
    {
        $arr = [
            'ABC, Inc.',
            'North American Division',
            'Marketing;Sales',
        ];

        $vcard = new VCard();
        $elem = $vcard->createProperty('ORG');
        $elem->setParts($arr);

        $this->assertEquals('ABC\, Inc.;North American Division;Marketing\;Sales', $elem->getValue());
        $this->assertEquals(3, count($elem->getParts()));
        $parts = $elem->getParts();
        $this->assertEquals('Marketing;Sales', $parts[2]);
    }

    public function testGetParts()
    {
        $str = 'ABC\, Inc.;North American Division;Marketing\;Sales';

        $vcard = new VCard();
        $elem = $vcard->createProperty('ORG');
        $elem->setRawMimeDirValue($str);

        $this->assertEquals(3, count($elem->getParts()));
        $parts = $elem->getParts();
        $this->assertEquals('Marketing;Sales', $parts[2]);
    }

    public function testGetPartsNull()
    {
        $vcard = new VCard();
        $elem = $vcard->createProperty('ORG', null);

        $this->assertEquals(0, count($elem->getParts()));
    }
}
