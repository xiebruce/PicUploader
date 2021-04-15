<?php

namespace Sabre\VObject\ITip;

class BrokerNewEventTest extends BrokerTester
{
    public function testNoAttendee()
    {
        $message = <<<ICS
BEGIN:VCALENDAR
BEGIN:VEVENT
UID:foobar
DTSTART:20140811T220000Z
DTEND:20140811T230000Z
END:VEVENT
END:VCALENDAR
ICS;

        $result = $this->parse(null, $message, []);
    }

    public function testVTODO()
    {
        $message = <<<ICS
BEGIN:VCALENDAR
BEGIN:VTODO
UID:foobar
END:VTODO
END:VCALENDAR
ICS;

        $result = $this->parse(null, $message, []);
    }

    public function testSimpleInvite()
    {
        $message = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:foobar
DTSTART:20140811T220000Z
DTEND:20140811T230000Z
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=White:mailto:white@example.org
END:VEVENT
END:VCALENDAR
ICS;

        $version = \Sabre\VObject\Version::VERSION;
        $expectedMessage = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Sabre//Sabre VObject $version//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VEVENT
UID:foobar
DTSTART:20140811T220000Z
DTEND:20140811T230000Z
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=White;PARTSTAT=NEEDS-ACTION:mailto:white@example.org
DTSTAMP:**ANY**
END:VEVENT
END:VCALENDAR
ICS;

        $expected = [
            [
                'uid' => 'foobar',
                'method' => 'REQUEST',
                'component' => 'VEVENT',
                'sender' => 'mailto:strunk@example.org',
                'senderName' => 'Strunk',
                'recipient' => 'mailto:white@example.org',
                'recipientName' => 'White',
                'message' => $expectedMessage,
            ],
        ];

        $this->parse(null, $message, $expected, 'mailto:strunk@example.org');
    }

    /**
     * @expectedException \Sabre\VObject\ITip\ITipException
     */
    public function testBrokenEventUIDMisMatch()
    {
        $message = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:foobar
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=White:mailto:white@example.org
END:VEVENT
BEGIN:VEVENT
UID:foobar2
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=White:mailto:white@example.org
END:VEVENT
END:VCALENDAR
ICS;

        $this->parse(null, $message, [], 'mailto:strunk@example.org');
    }

    /**
     * @expectedException \Sabre\VObject\ITip\ITipException
     */
    public function testBrokenEventOrganizerMisMatch()
    {
        $message = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:foobar
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=White:mailto:white@example.org
END:VEVENT
BEGIN:VEVENT
UID:foobar
ORGANIZER:mailto:foo@example.org
ATTENDEE;CN=White:mailto:white@example.org
END:VEVENT
END:VCALENDAR
ICS;

        $this->parse(null, $message, [], 'mailto:strunk@example.org');
    }

    public function testRecurrenceInvite()
    {
        $message = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:foobar
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=One:mailto:one@example.org
ATTENDEE;CN=Two:mailto:two@example.org
DTSTART:20140716T120000Z
DURATION:PT1H
RRULE:FREQ=DAILY
EXDATE:20140717T120000Z
END:VEVENT
BEGIN:VEVENT
UID:foobar
RECURRENCE-ID:20140718T120000Z
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=Two:mailto:two@example.org
ATTENDEE;CN=Three:mailto:three@example.org
DTSTART:20140718T120000Z
DURATION:PT1H
END:VEVENT
END:VCALENDAR
ICS;

        $version = \Sabre\VObject\Version::VERSION;

        $expected = [
            [
                'uid' => 'foobar',
                'method' => 'REQUEST',
                'component' => 'VEVENT',
                'sender' => 'mailto:strunk@example.org',
                'senderName' => 'Strunk',
                'recipient' => 'mailto:one@example.org',
                'recipientName' => 'One',
                'message' => <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Sabre//Sabre VObject $version//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VEVENT
UID:foobar
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=One;PARTSTAT=NEEDS-ACTION:mailto:one@example.org
ATTENDEE;CN=Two;PARTSTAT=NEEDS-ACTION:mailto:two@example.org
DTSTART:20140716T120000Z
DURATION:PT1H
RRULE:FREQ=DAILY
EXDATE:20140717T120000Z,20140718T120000Z
DTSTAMP:**ANY**
END:VEVENT
END:VCALENDAR
ICS
            ],
            [
                'uid' => 'foobar',
                'method' => 'REQUEST',
                'component' => 'VEVENT',
                'sender' => 'mailto:strunk@example.org',
                'senderName' => 'Strunk',
                'recipient' => 'mailto:two@example.org',
                'recipientName' => 'Two',
                'message' => <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Sabre//Sabre VObject $version//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VEVENT
UID:foobar
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=One;PARTSTAT=NEEDS-ACTION:mailto:one@example.org
ATTENDEE;CN=Two;PARTSTAT=NEEDS-ACTION:mailto:two@example.org
DTSTART:20140716T120000Z
DURATION:PT1H
RRULE:FREQ=DAILY
EXDATE:20140717T120000Z
DTSTAMP:**ANY**
END:VEVENT
BEGIN:VEVENT
UID:foobar
RECURRENCE-ID:20140718T120000Z
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=Two:mailto:two@example.org
ATTENDEE;CN=Three:mailto:three@example.org
DTSTART:20140718T120000Z
DURATION:PT1H
DTSTAMP:**ANY**
END:VEVENT
END:VCALENDAR
ICS
            ],
            [
                'uid' => 'foobar',
                'method' => 'REQUEST',
                'component' => 'VEVENT',
                'sender' => 'mailto:strunk@example.org',
                'senderName' => 'Strunk',
                'recipient' => 'mailto:three@example.org',
                'recipientName' => 'Three',
                'message' => <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Sabre//Sabre VObject $version//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VEVENT
UID:foobar
RECURRENCE-ID:20140718T120000Z
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=Two:mailto:two@example.org
ATTENDEE;CN=Three:mailto:three@example.org
DTSTART:20140718T120000Z
DURATION:PT1H
DTSTAMP:**ANY**
END:VEVENT
END:VCALENDAR
ICS
            ],
        ];

        $this->parse(null, $message, $expected, 'mailto:strunk@example.org');
    }

    public function testRecurrenceInvite2()
    {
        // This method tests a nearly identical path, but in this case the
        // master event does not have an EXDATE.
        $message = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:foobar
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=One:mailto:one@example.org
ATTENDEE;CN=Two:mailto:two@example.org
DTSTART:20140716T120000Z
DTEND:20140716T130000Z
RRULE:FREQ=DAILY
END:VEVENT
BEGIN:VEVENT
UID:foobar
RECURRENCE-ID:20140718T120000Z
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=Two:mailto:two@example.org
ATTENDEE;CN=Three:mailto:three@example.org
DTSTART:20140718T120000Z
DTEND:20140718T130000Z
END:VEVENT
END:VCALENDAR
ICS;

        $version = \Sabre\VObject\Version::VERSION;

        $expected = [
            [
                'uid' => 'foobar',
                'method' => 'REQUEST',
                'component' => 'VEVENT',
                'sender' => 'mailto:strunk@example.org',
                'senderName' => 'Strunk',
                'recipient' => 'mailto:one@example.org',
                'recipientName' => 'One',
                'message' => <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Sabre//Sabre VObject $version//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VEVENT
UID:foobar
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=One;PARTSTAT=NEEDS-ACTION:mailto:one@example.org
ATTENDEE;CN=Two;PARTSTAT=NEEDS-ACTION:mailto:two@example.org
DTSTART:20140716T120000Z
DTEND:20140716T130000Z
RRULE:FREQ=DAILY
EXDATE:20140718T120000Z
DTSTAMP:**ANY**
END:VEVENT
END:VCALENDAR
ICS
            ],
            [
                'uid' => 'foobar',
                'method' => 'REQUEST',
                'component' => 'VEVENT',
                'sender' => 'mailto:strunk@example.org',
                'senderName' => 'Strunk',
                'recipient' => 'mailto:two@example.org',
                'recipientName' => 'Two',
                'message' => <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Sabre//Sabre VObject $version//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VEVENT
UID:foobar
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=One;PARTSTAT=NEEDS-ACTION:mailto:one@example.org
ATTENDEE;CN=Two;PARTSTAT=NEEDS-ACTION:mailto:two@example.org
DTSTART:20140716T120000Z
DTEND:20140716T130000Z
RRULE:FREQ=DAILY
DTSTAMP:**ANY**
END:VEVENT
BEGIN:VEVENT
UID:foobar
RECURRENCE-ID:20140718T120000Z
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=Two:mailto:two@example.org
ATTENDEE;CN=Three:mailto:three@example.org
DTSTART:20140718T120000Z
DTEND:20140718T130000Z
DTSTAMP:**ANY**
END:VEVENT
END:VCALENDAR
ICS
            ],
            [
                'uid' => 'foobar',
                'method' => 'REQUEST',
                'component' => 'VEVENT',
                'sender' => 'mailto:strunk@example.org',
                'senderName' => 'Strunk',
                'recipient' => 'mailto:three@example.org',
                'recipientName' => 'Three',
                'message' => <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Sabre//Sabre VObject $version//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VEVENT
UID:foobar
RECURRENCE-ID:20140718T120000Z
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=Two:mailto:two@example.org
ATTENDEE;CN=Three:mailto:three@example.org
DTSTART:20140718T120000Z
DTEND:20140718T130000Z
DTSTAMP:**ANY**
END:VEVENT
END:VCALENDAR
ICS
            ],
        ];

        $this->parse(null, $message, $expected, 'mailto:strunk@example.org');
    }

    public function testRecurrenceInvite3()
    {
        // This method tests a complex rrule
        $message = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:foobar
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=One:mailto:one@example.org
DTSTART:20140716T120000Z
DTEND:20140716T130000Z
RRULE:FREQ=WEEKLY;INTERVAL=2;COUNT=8;BYDAY=SA,SU
END:VEVENT
END:VCALENDAR
ICS;

        $version = \Sabre\VObject\Version::VERSION;

        $expected = [
            [
                'uid' => 'foobar',
                'method' => 'REQUEST',
                'component' => 'VEVENT',
                'sender' => 'mailto:strunk@example.org',
                'senderName' => 'Strunk',
                'recipient' => 'mailto:one@example.org',
                'recipientName' => 'One',
                'message' => <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Sabre//Sabre VObject $version//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VEVENT
UID:foobar
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=One;PARTSTAT=NEEDS-ACTION:mailto:one@example.org
DTSTART:20140716T120000Z
DTEND:20140716T130000Z
RRULE:FREQ=WEEKLY;INTERVAL=2;COUNT=8;BYDAY=SA,SU
DTSTAMP:**ANY**
END:VEVENT
END:VCALENDAR
ICS
            ],
        ];

        $this->parse(null, $message, $expected, 'mailto:strunk@example.org');
    }

    public function testScheduleAgentClient()
    {
        $message = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:foobar
DTSTART:20140811T220000Z
DTEND:20140811T230000Z
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=White;SCHEDULE-AGENT=CLIENT:mailto:white@example.org
END:VEVENT
END:VCALENDAR
ICS;

        $version = \Sabre\VObject\Version::VERSION;

        $this->parse(null, $message, [], 'mailto:strunk@example.org');
    }

    /**
     * @expectedException \Sabre\VObject\ITip\ITipException
     */
    public function testMultipleUID()
    {
        $message = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:foobar
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=One:mailto:one@example.org
ATTENDEE;CN=Two:mailto:two@example.org
DTSTART:20140716T120000Z
DTEND:20140716T130000Z
RRULE:FREQ=DAILY
END:VEVENT
BEGIN:VEVENT
UID:foobar2
RECURRENCE-ID:20140718T120000Z
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=Two:mailto:two@example.org
ATTENDEE;CN=Three:mailto:three@example.org
DTSTART:20140718T120000Z
DTEND:20140718T130000Z
END:VEVENT
END:VCALENDAR
ICS;

        $version = \Sabre\VObject\Version::VERSION;
        $this->parse(null, $message, [], 'mailto:strunk@example.org');
    }

    /**
     * @expectedException \Sabre\VObject\ITip\SameOrganizerForAllComponentsException
     */
    public function testChangingOrganizers()
    {
        $message = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:foobar
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=One:mailto:one@example.org
ATTENDEE;CN=Two:mailto:two@example.org
DTSTART:20140716T120000Z
DTEND:20140716T130000Z
RRULE:FREQ=DAILY
END:VEVENT
BEGIN:VEVENT
UID:foobar
RECURRENCE-ID:20140718T120000Z
ORGANIZER;CN=Strunk:mailto:ew@example.org
ATTENDEE;CN=Two:mailto:two@example.org
ATTENDEE;CN=Three:mailto:three@example.org
DTSTART:20140718T120000Z
DTEND:20140718T130000Z
END:VEVENT
END:VCALENDAR
ICS;

        $this->parse(null, $message, [], 'mailto:strunk@example.org');
    }

    public function testCaseInsensitiveOrganizers()
    {
        $message = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:foobar
ORGANIZER;CN=Strunk:mailto:strunk@example.org
ATTENDEE;CN=One:mailto:one@example.org
ATTENDEE;CN=Two:mailto:two@example.org
DTSTART:20140716T120000Z
DTEND:20140716T130000Z
RRULE:FREQ=DAILY
END:VEVENT
BEGIN:VEVENT
UID:foobar
RECURRENCE-ID:20140718T120000Z
ORGANIZER;CN=Strunk:mailto:Strunk@example.org
ATTENDEE;CN=Two:mailto:two@example.org
ATTENDEE;CN=Three:mailto:three@example.org
DTSTART:20140718T120000Z
DTEND:20140718T130000Z
END:VEVENT
END:VCALENDAR
ICS;

        $this->parse(null, $message, [
            [
                'uid' => 'foobar',
                'method' => 'REQUEST',
                'component' => 'VEVENT',
                'sender' => 'mailto:strunk@example.org',
            ],
            [
                'uid' => 'foobar',
                'method' => 'REQUEST',
                'component' => 'VEVENT',
                'sender' => 'mailto:strunk@example.org',
            ],
            ['uid' => 'foobar',
                'method' => 'REQUEST',
                'component' => 'VEVENT',
                'sender' => 'mailto:strunk@example.org',
            ],
        ], 'mailto:strunk@example.org');
    }

    public function testNoOrganizerHasAttendee()
    {
        $message = <<<ICS
BEGIN:VCALENDAR
BEGIN:VEVENT
UID:foobar
DTSTART:20140811T220000Z
DTEND:20140811T230000Z
ATTENDEE;CN=Two:mailto:two@example.org
END:VEVENT
END:VCALENDAR
ICS;

        $this->parse(null, $message, [], 'mailto:strunk@example.org');
    }
}
