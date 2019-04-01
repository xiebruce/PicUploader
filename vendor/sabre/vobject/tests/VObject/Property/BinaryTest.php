<?php

namespace Sabre\VObject\Property;

use PHPUnit\Framework\TestCase;
use Sabre\VObject;

class BinaryTest extends TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testMimeDir()
    {
        $vcard = new VObject\Component\VCard(['VERSION' => '3.0']);
        $vcard->add('PHOTO', ['a', 'b']);
    }
}
