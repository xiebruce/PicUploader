<?php

namespace Sabre\VObject;

use PHPUnit\Framework\TestCase;

class BirthdayCalendarGeneratorTest extends TestCase
{
    use PHPUnitAssertions;

    public function testVcardStringWithValidBirthday()
    {
        $generator = new BirthdayCalendarGenerator();
        $input = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Gump;Forrest;;Mr.
FN:Forrest Gump
BDAY:19850407
UID:foo
END:VCARD
VCF;

        $expected = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:**ANY**
DTSTAMP:**ANY**
SUMMARY:Forrest Gump's Birthday
DTSTART;VALUE=DATE:19850407
RRULE:FREQ=YEARLY
TRANSP:TRANSPARENT
X-SABRE-BDAY;X-SABRE-VCARD-UID=foo;X-SABRE-VCARD-FN=Forrest Gump:BDAY
END:VEVENT
END:VCALENDAR
ICS;

        $generator->setObjects($input);
        $output = $generator->getResult();

        $this->assertVObjectEqualsVObject(
            $expected,
            $output
        );
    }

    public function testArrayOfVcardStringsWithValidBirthdays()
    {
        $generator = new BirthdayCalendarGenerator();
        $input = [];

        $input[] = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Gump;Forrest;;Mr.
FN:Forrest Gump
BDAY:19850407
UID:foo
END:VCARD
VCF;

        $input[] = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Doe;John;;Mr.
FN:John Doe
BDAY:19820210
UID:bar
END:VCARD
VCF;

        $expected = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:**ANY**
DTSTAMP:**ANY**
SUMMARY:Forrest Gump's Birthday
DTSTART;VALUE=DATE:19850407
RRULE:FREQ=YEARLY
TRANSP:TRANSPARENT
X-SABRE-BDAY;X-SABRE-VCARD-UID=foo;X-SABRE-VCARD-FN=Forrest Gump:BDAY
END:VEVENT
BEGIN:VEVENT
UID:**ANY**
DTSTAMP:**ANY**
SUMMARY:John Doe's Birthday
DTSTART;VALUE=DATE:19820210
RRULE:FREQ=YEARLY
TRANSP:TRANSPARENT
X-SABRE-BDAY;X-SABRE-VCARD-UID=bar;X-SABRE-VCARD-FN=John Doe:BDAY
END:VEVENT
END:VCALENDAR
ICS;

        $generator->setObjects($input);
        $output = $generator->getResult();

        $this->assertVObjectEqualsVObject(
            $expected,
            $output
        );
    }

    public function testArrayOfVcardStringsWithValidBirthdaysViaConstructor()
    {
        $input = [];

        $input[] = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Gump;Forrest;;Mr.
FN:Forrest Gump
BDAY:19850407
UID:foo
END:VCARD
VCF;

        $input[] = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Doe;John;;Mr.
FN:John Doe
BDAY:19820210
UID:bar
END:VCARD
VCF;

        $generator = new BirthdayCalendarGenerator($input);

        $expected = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:**ANY**
DTSTAMP:**ANY**
SUMMARY:Forrest Gump's Birthday
DTSTART;VALUE=DATE:19850407
RRULE:FREQ=YEARLY
TRANSP:TRANSPARENT
X-SABRE-BDAY;X-SABRE-VCARD-UID=foo;X-SABRE-VCARD-FN=Forrest Gump:BDAY
END:VEVENT
BEGIN:VEVENT
UID:**ANY**
DTSTAMP:**ANY**
SUMMARY:John Doe's Birthday
DTSTART;VALUE=DATE:19820210
RRULE:FREQ=YEARLY
TRANSP:TRANSPARENT
X-SABRE-BDAY;X-SABRE-VCARD-UID=bar;X-SABRE-VCARD-FN=John Doe:BDAY
END:VEVENT
END:VCALENDAR
ICS;

        $generator->setObjects($input);
        $output = $generator->getResult();

        $this->assertVObjectEqualsVObject(
            $expected,
            $output
        );
    }

    public function testVcardObjectWithValidBirthday()
    {
        $generator = new BirthdayCalendarGenerator();
        $input = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Gump;Forrest;;Mr.
FN:Forrest Gump
BDAY:19850407
UID:foo
END:VCARD
VCF;

        $input = Reader::read($input);

        $expected = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:**ANY**
DTSTAMP:**ANY**
SUMMARY:Forrest Gump's Birthday
DTSTART;VALUE=DATE:19850407
RRULE:FREQ=YEARLY
TRANSP:TRANSPARENT
X-SABRE-BDAY;X-SABRE-VCARD-UID=foo;X-SABRE-VCARD-FN=Forrest Gump:BDAY
END:VEVENT
END:VCALENDAR
ICS;

        $generator->setObjects($input);
        $output = $generator->getResult();

        $this->assertVObjectEqualsVObject(
            $expected,
            $output
        );
    }

    public function testArrayOfVcardObjectsWithValidBirthdays()
    {
        $generator = new BirthdayCalendarGenerator();
        $input = [];

        $input[] = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Gump;Forrest;;Mr.
FN:Forrest Gump
BDAY:19850407
UID:foo
END:VCARD
VCF;

        $input[] = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Doe;John;;Mr.
FN:John Doe
BDAY:19820210
UID:bar
END:VCARD
VCF;

        foreach ($input as $key => $value) {
            $input[$key] = Reader::read($value);
        }

        $expected = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:**ANY**
DTSTAMP:**ANY**
SUMMARY:Forrest Gump's Birthday
DTSTART;VALUE=DATE:19850407
RRULE:FREQ=YEARLY
TRANSP:TRANSPARENT
X-SABRE-BDAY;X-SABRE-VCARD-UID=foo;X-SABRE-VCARD-FN=Forrest Gump:BDAY
END:VEVENT
BEGIN:VEVENT
UID:**ANY**
DTSTAMP:**ANY**
SUMMARY:John Doe's Birthday
DTSTART;VALUE=DATE:19820210
RRULE:FREQ=YEARLY
TRANSP:TRANSPARENT
X-SABRE-BDAY;X-SABRE-VCARD-UID=bar;X-SABRE-VCARD-FN=John Doe:BDAY
END:VEVENT
END:VCALENDAR
ICS;

        $generator->setObjects($input);
        $output = $generator->getResult();

        $this->assertVObjectEqualsVObject(
            $expected,
            $output
        );
    }

    public function testVcardStringWithValidBirthdayWithXAppleOmitYear()
    {
        $generator = new BirthdayCalendarGenerator();
        $input = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Gump;Forrest;;Mr.
FN:Forrest Gump
BDAY;X-APPLE-OMIT-YEAR=1604:1604-04-07
UID:foo
END:VCARD
VCF;

        $expected = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:**ANY**
DTSTAMP:**ANY**
SUMMARY:Forrest Gump's Birthday
DTSTART;VALUE=DATE:20000407
RRULE:FREQ=YEARLY
TRANSP:TRANSPARENT
X-SABRE-BDAY;X-SABRE-VCARD-UID=foo;X-SABRE-VCARD-FN=Forrest Gump;X-SABRE-OMIT-YEAR=2000:BDAY
END:VEVENT
END:VCALENDAR
ICS;

        $generator->setObjects($input);
        $output = $generator->getResult();

        $this->assertVObjectEqualsVObject(
            $expected,
            $output
        );
    }

    public function testVcardStringWithValidBirthdayWithoutYear()
    {
        $generator = new BirthdayCalendarGenerator();
        $input = <<<VCF
BEGIN:VCARD
VERSION:4.0
N:Gump;Forrest;;Mr.
FN:Forrest Gump
BDAY:--04-07
UID:foo
END:VCARD
VCF;

        $expected = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:**ANY**
DTSTAMP:**ANY**
SUMMARY:Forrest Gump's Birthday
DTSTART;VALUE=DATE:20000407
RRULE:FREQ=YEARLY
TRANSP:TRANSPARENT
X-SABRE-BDAY;X-SABRE-VCARD-UID=foo;X-SABRE-VCARD-FN=Forrest Gump;X-SABRE-OMIT-YEAR=2000:BDAY
END:VEVENT
END:VCALENDAR
ICS;

        $generator->setObjects($input);
        $output = $generator->getResult();

        $this->assertVObjectEqualsVObject(
            $expected,
            $output
        );
    }

    public function testVcardStringWithInvalidBirthday()
    {
        $generator = new BirthdayCalendarGenerator();
        $input = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Gump;Forrest;;Mr.
FN:Forrest Gump
BDAY:foo
X-SABRE-BDAY;X-SABRE-VCARD-UID=foo;X-SABRE-VCARD-FN=Forrest Gump:BDAY
END:VCARD
VCF;

        $expected = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
END:VCALENDAR
ICS;

        $generator->setObjects($input);
        $output = $generator->getResult();

        $this->assertVObjectEqualsVObject(
            $expected,
            $output
        );
    }

    public function testVcardStringWithNoBirthday()
    {
        $generator = new BirthdayCalendarGenerator();
        $input = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Gump;Forrest;;Mr.
FN:Forrest Gump
UID:foo
END:VCARD
VCF;

        $expected = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
END:VCALENDAR
ICS;

        $generator->setObjects($input);
        $output = $generator->getResult();

        $this->assertVObjectEqualsVObject(
            $expected,
            $output
        );
    }

    public function testVcardStringWithValidBirthdayLocalized()
    {
        $generator = new BirthdayCalendarGenerator();
        $input = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Gump;Forrest;;Mr.
FN:Forrest Gump
BDAY:19850407
UID:foo
END:VCARD
VCF;

        $expected = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:**ANY**
DTSTAMP:**ANY**
SUMMARY:Forrest Gump's Geburtstag
DTSTART;VALUE=DATE:19850407
RRULE:FREQ=YEARLY
TRANSP:TRANSPARENT
X-SABRE-BDAY;X-SABRE-VCARD-UID=foo;X-SABRE-VCARD-FN=Forrest Gump:BDAY
END:VEVENT
END:VCALENDAR
ICS;

        $generator->setObjects($input);
        $generator->setFormat('%1$s\'s Geburtstag');
        $output = $generator->getResult();

        $this->assertVObjectEqualsVObject(
            $expected,
            $output
        );
    }

    public function testVcardStringWithEmptyBirthdayProperty()
    {
        $generator = new BirthdayCalendarGenerator();
        $input = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Gump;Forrest;;Mr.
FN:Forrest Gump
BDAY:
UID:foo
END:VCARD
VCF;

        $expected = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
END:VCALENDAR
ICS;

        $generator->setObjects($input);
        $output = $generator->getResult();

        $this->assertVObjectEqualsVObject(
            $expected,
            $output
        );
    }

    /**
     * @expectedException \Sabre\VObject\ParseException
     */
    public function testParseException()
    {
        $generator = new BirthdayCalendarGenerator();
        $input = <<<EOT
BEGIN:FOO
FOO:Bar
END:FOO
EOT;

        $generator->setObjects($input);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidArgumentException()
    {
        $generator = new BirthdayCalendarGenerator();
        $input = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
SUMMARY:Foo
DTSTART;VALUE=DATE:19850407
END:VEVENT
END:VCALENDAR
ICS;

        $generator->setObjects($input);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidArgumentExceptionForPartiallyInvalidArray()
    {
        $generator = new BirthdayCalendarGenerator();
        $input = [];

        $input[] = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Gump;Forrest;;Mr.
FN:Forrest Gump
BDAY:19850407
UID:foo
END:VCARD
VCF;
        $calendar = new Component\VCalendar();

        $input = $calendar->add('VEVENT', [
            'SUMMARY' => 'Foo',
            'DTSTART' => new \DateTime('NOW'),
        ]);

        $generator->setObjects($input);
    }

    public function testBrokenVcardWithoutFN()
    {
        $generator = new BirthdayCalendarGenerator();
        $input = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Gump;Forrest;;Mr.
BDAY:19850407
UID:foo
END:VCARD
VCF;

        $expected = <<<ICS
BEGIN:VCALENDAR
VERSION:2.0
END:VCALENDAR
ICS;

        $generator->setObjects($input);
        $output = $generator->getResult();

        $this->assertVObjectEqualsVObject(
            $expected,
            $output
        );
    }
}
