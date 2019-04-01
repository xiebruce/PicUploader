<?php

namespace Sabre\VObject\Property\ICalendar;

use PHPUnit\Framework\TestCase;

class CalAddressTest extends TestCase
{
    /**
     * @dataProvider values
     */
    public function testGetNormalizedValue($expected, $input)
    {
        $vobj = new \Sabre\VObject\Component\VCalendar();
        $property = $vobj->add('ATTENDEE', $input);

        $this->assertEquals(
            $expected,
            $property->getNormalizedValue()
        );
    }

    public function values()
    {
        return [
            ['mailto:a@b.com', 'mailto:a@b.com'],
            ['mailto:a@b.com', 'MAILTO:a@b.com'],
            ['/foo/bar', '/foo/bar'],
        ];
    }
}
