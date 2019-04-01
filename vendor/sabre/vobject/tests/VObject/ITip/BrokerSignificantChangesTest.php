<?php

namespace Sabre\VObject\ITip;

class BrokerSignificantChangesTest extends BrokerTester
{
    /**
     * Check significant changes detection (no change).
     */
    public function testSignificantChangesNoChange()
    {
        $old = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
CALSCALE:GREGORIAN
PRODID:-//Ximian//NONSGML Evolution Calendar//EN
BEGIN:VEVENT
UID:20140813T153116Z-12176-1000-1065-6@johnny-lubuntu
DTSTAMP:20140813T142829Z
DTSTART;TZID=America/Toronto:20140815T110000
SEQUENCE:2
SUMMARY:Evo makes a Meeting
LOCATION:fruux HQ
CLASS:PUBLIC
RRULE:FREQ=WEEKLY
ORGANIZER:MAILTO:martin@fruux.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;RSVP=
 TRUE;LANGUAGE=en:MAILTO:dominik@fruux.com
CREATED:20140813T153211Z
LAST-MODIFIED:20140813T155353Z
END:VEVENT
END:VCALENDAR
ICS;

        $new = $old;
        $expected = [['significantChange' => false]];

        $this->parse($old, $new, $expected, 'mailto:martin@fruux.com');
    }

    /**
     * Check significant changes detection (no change).
     */
    public function testSignificantChangesRRuleNoChange()
    {
        $old = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
CALSCALE:GREGORIAN
PRODID:-//Ximian//NONSGML Evolution Calendar//EN
BEGIN:VEVENT
UID:20140813T153116Z-12176-1000-1065-6@johnny-lubuntu
DTSTAMP:20140813T142829Z
DTSTART;TZID=America/Toronto:20140815T110000
SEQUENCE:2
SUMMARY:Evo makes a Meeting
LOCATION:fruux HQ
CLASS:PUBLIC
RRULE:FREQ=WEEKLY
ORGANIZER:MAILTO:martin@fruux.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;RSVP=
 TRUE;LANGUAGE=en:MAILTO:dominik@fruux.com
CREATED:20140813T153211Z
LAST-MODIFIED:20140813T155353Z
END:VEVENT
END:VCALENDAR
ICS;

        $new = str_replace('FREQ=WEEKLY', 'FREQ=WEEKLY;INTERVAL=1', $old);
        $expected = [['significantChange' => false]];

        $this->parse($old, $new, $expected, 'mailto:martin@fruux.com');
    }

    /**
     * Check significant changes detection (no change).
     */
    public function testSignificantChangesRRuleOrderNoChange()
    {
        $old = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
CALSCALE:GREGORIAN
PRODID:-//Ximian//NONSGML Evolution Calendar//EN
BEGIN:VEVENT
UID:20140813T153116Z-12176-1000-1065-6@johnny-lubuntu
DTSTAMP:20140813T142829Z
DTSTART;TZID=America/Toronto:20140815T110000
SEQUENCE:2
SUMMARY:Evo makes a Meeting
LOCATION:fruux HQ
CLASS:PUBLIC
RRULE:FREQ=WEEKLY;BYDAY=MO
ORGANIZER:MAILTO:martin@fruux.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;RSVP=
 TRUE;LANGUAGE=en:MAILTO:dominik@fruux.com
CREATED:20140813T153211Z
LAST-MODIFIED:20140813T155353Z
END:VEVENT
END:VCALENDAR
ICS;

        $new = str_replace('FREQ=WEEKLY;BYDAY=MO', 'BYDAY=MO;FREQ=WEEKLY', $old);
        $expected = [['significantChange' => false]];

        $this->parse($old, $new, $expected, 'mailto:martin@fruux.com');
    }
}
