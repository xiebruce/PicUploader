<?php

namespace Sabre\VObject\Recur\EventIterator;

use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\TestCase;
use Sabre\VObject\Reader;
use Sabre\VObject\Recur\EventIterator;

class Issue48Test extends TestCase
{
    public function testExpand()
    {
        $input = <<<ICS
BEGIN:VCALENDAR
BEGIN:VEVENT
UID:foo
DTEND;TZID=Europe/Moscow:20130710T120000
DTSTART;TZID=Europe/Moscow:20130710T110000
RRULE:FREQ=DAILY;UNTIL=20130712T195959Z
END:VEVENT
BEGIN:VEVENT
UID:foo
DTEND;TZID=Europe/Moscow:20130713T120000
DTSTART;TZID=Europe/Moscow:20130713T110000
RECURRENCE-ID;TZID=Europe/Moscow:20130711T110000
END:VEVENT
END:VCALENDAR
ICS;

        $vcal = Reader::read($input);
        $this->assertInstanceOf('Sabre\\VObject\\Component\\VCalendar', $vcal);

        $it = new EventIterator($vcal, 'foo');

        $result = iterator_to_array($it);

        $tz = new DateTimeZone('Europe/Moscow');

        $expected = [
            new DateTimeImmutable('2013-07-10 11:00:00', $tz),
            new DateTimeImmutable('2013-07-12 11:00:00', $tz),
            new DateTimeImmutable('2013-07-13 11:00:00', $tz),
        ];

        $this->assertEquals($expected, $result);
    }
}
