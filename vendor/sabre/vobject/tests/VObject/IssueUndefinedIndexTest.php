<?php

namespace Sabre\VObject;

use PHPUnit\Framework\TestCase;

class IssueUndefinedIndexTest extends TestCase
{
    /**
     * @expectedException \Sabre\VObject\ParseException
     */
    public function testRead()
    {
        $input = <<<VCF
BEGIN:VCARD
VERSION:3.0
PRODID:foo
N:Holmes;Sherlock;;;
FN:Sherlock Holmes
ORG:Acme Inc;
ADR;type=WORK;type=pref:;;,
\\n221B,Baker Street;London;;12345;United Kingdom
UID:foo
END:VCARD
VCF;

        $vcard = Reader::read($input, Reader::OPTION_FORGIVING);
    }
}
