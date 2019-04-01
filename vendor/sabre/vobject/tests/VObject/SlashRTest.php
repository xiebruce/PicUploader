<?php

namespace Sabre\VObject;

use PHPUnit\Framework\TestCase;

/**
 * This issue was pointed out in Issue 55. \r should be stripped completely
 * when encoding property values.
 */
class SlashRTest extends TestCase
{
    public function testEncode()
    {
        $vcal = new Component\VCalendar();
        $prop = $vcal->add('test', "abc\r\ndef");
        $this->assertEquals("TEST:abc\\ndef\r\n", $prop->serialize());
    }
}
