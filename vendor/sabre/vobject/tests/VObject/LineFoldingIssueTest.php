<?php

namespace Sabre\VObject;

use PHPUnit\Framework\TestCase;

class LineFoldingIssueTest extends TestCase
{
    public function testRead()
    {
        $event = <<<ICS
BEGIN:VCALENDAR\r
BEGIN:VEVENT\r
DESCRIPTION:TEST\\n\\n \\n\\nTEST\\n\\n \\n\\nTEST\\n\\n \\n\\nTEST\\n\\nTEST\\nTEST, TEST\r
END:VEVENT\r
END:VCALENDAR\r

ICS;

        $obj = Reader::read($event);
        $this->assertEquals($event, $obj->serialize());
    }
}
