<?php

namespace Sabre\VObject\Splitter;

use PHPUnit\Framework\TestCase;

class VCardTest extends TestCase
{
    public function createStream($data)
    {
        $stream = fopen('php://memory', 'r+');
        fwrite($stream, $data);
        rewind($stream);

        return $stream;
    }

    public function testVCardImportValidVCard()
    {
        $data = <<<EOT
BEGIN:VCARD
UID:foo
END:VCARD
EOT;
        $tempFile = $this->createStream($data);

        $objects = new VCard($tempFile);

        $count = 0;
        while ($objects->getNext()) {
            ++$count;
        }
        $this->assertEquals(1, $count);
    }

    /**
     * @expectedException \Sabre\VObject\ParseException
     */
    public function testVCardImportWrongType()
    {
        $event[] = <<<EOT
BEGIN:VEVENT
UID:foo1
DTSTAMP:20140122T233226Z
DTSTART:20140101T050000Z
END:VEVENT
EOT;

        $event[] = <<<EOT
BEGIN:VEVENT
UID:foo2
DTSTAMP:20140122T233226Z
DTSTART:20140101T060000Z
END:VEVENT
EOT;

        $data = <<<EOT
BEGIN:VCALENDAR
$event[0]
$event[1]
END:VCALENDAR

EOT;
        $tempFile = $this->createStream($data);

        $splitter = new VCard($tempFile);

        while ($object = $splitter->getNext()) {
        }
    }

    public function testVCardImportValidVCardsWithCategories()
    {
        $data = <<<EOT
BEGIN:VCARD
UID:card-in-foo1-and-foo2
CATEGORIES:foo1,foo2
END:VCARD
BEGIN:VCARD
UID:card-in-foo1
CATEGORIES:foo1
END:VCARD
BEGIN:VCARD
UID:card-in-foo3
CATEGORIES:foo3
END:VCARD
BEGIN:VCARD
UID:card-in-foo1-and-foo3
CATEGORIES:foo1\,foo3
END:VCARD
EOT;
        $tempFile = $this->createStream($data);

        $splitter = new VCard($tempFile);

        $count = 0;
        while ($object = $splitter->getNext()) {
            ++$count;
        }
        $this->assertEquals(4, $count);
    }

    /**
     * @expectedException \Sabre\VObject\ParseException
     */
    public function testVCardImportVCardNoComponent()
    {
        $data = <<<EOT
BEGIN:VCARD
FN:first card

BEGIN:VCARD
FN:ok
END:VCARD
EOT;
        $tempFile = $this->createStream($data);

        $splitter = new VCard($tempFile);

        $this->expectException(\Sabre\VObject\ParseException::class);
        $this->expectExceptionMessage('Invalid MimeDir file. Unexpected component: "BEGIN:VCARD" in document type VCARD');
        while ($object = $splitter->getNext()) {
        }
    }

    public function testVCardImportQuotedPrintableOptionForgivingLeading()
    {
        $data = <<<EOT
BEGIN:VCARD
FN;card
TITLE;CHARSET=UTF-8;ENCODING=QUOTED-PRINTABLE:=D0=D0=D0=D0=D0=D0=D0=D0=D0=D0=D0=D0=D0=D0=D0=D0=D0=D0=D0=D0=D0=D0=D0=

END:VCARD
BEGIN:VCARD
FN;card
END:VCARD
EOT;
        $tempFile = $this->createStream($data);

        $splitter = new VCard($tempFile, \Sabre\VObject\Parser\Parser::OPTION_FORGIVING);

        $count = 0;
        while ($object = $splitter->getNext()) {
            ++$count;
        }
        $this->assertEquals(2, $count);
    }

    public function testVCardImportEndOfData()
    {
        $data = <<<EOT
BEGIN:VCARD
UID:foo
END:VCARD
EOT;
        $tempFile = $this->createStream($data);

        $objects = new VCard($tempFile);
        $object = $objects->getNext();

        $this->assertNull($objects->getNext());
    }

    /**
     * @expectedException \Sabre\VObject\ParseException
     */
    public function testVCardImportCheckInvalidArgumentException()
    {
        $data = <<<EOT
BEGIN:FOO
END:FOO
EOT;
        $tempFile = $this->createStream($data);

        $objects = new VCard($tempFile);
        while ($objects->getNext()) {
        }
    }

    public function testVCardImportMultipleValidVCards()
    {
        $data = <<<EOT
BEGIN:VCARD
UID:foo
END:VCARD
BEGIN:VCARD
UID:foo
END:VCARD
EOT;
        $tempFile = $this->createStream($data);

        $objects = new VCard($tempFile);

        $count = 0;
        while ($objects->getNext()) {
            ++$count;
        }
        $this->assertEquals(2, $count);
    }

    public function testImportMultipleSeparatedWithNewLines()
    {
        $data = <<<EOT
BEGIN:VCARD
UID:foo
END:VCARD


BEGIN:VCARD
UID:foo
END:VCARD


EOT;
        $tempFile = $this->createStream($data);
        $objects = new VCard($tempFile);

        $count = 0;
        while ($objects->getNext()) {
            ++$count;
        }
        $this->assertEquals(2, $count);
    }

    public function testVCardImportVCardWithoutUID()
    {
        $data = <<<EOT
BEGIN:VCARD
END:VCARD
EOT;
        $tempFile = $this->createStream($data);

        $objects = new VCard($tempFile);

        $count = 0;
        while ($objects->getNext()) {
            ++$count;
        }

        $this->assertEquals(1, $count);
    }
}
