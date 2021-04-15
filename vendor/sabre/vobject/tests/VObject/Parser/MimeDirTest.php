<?php

namespace Sabre\VObject\Parser;

use PHPUnit\Framework\TestCase;

/**
 * Note that most MimeDir related tests can actually be found in the ReaderTest
 * class one level up.
 */
class MimeDirTest extends TestCase
{
    /**
     * @expectedException \Sabre\VObject\ParseException
     */
    public function testParseError()
    {
        $mimeDir = new MimeDir();
        $mimeDir->parse(fopen(__FILE__, 'a+'));
    }

    public function testDecodeLatin1()
    {
        $vcard = <<<VCF
BEGIN:VCARD
VERSION:3.0
FN:umlaut u - \xFC
END:VCARD\n
VCF;

        $mimeDir = new MimeDir();
        $mimeDir->setCharset('ISO-8859-1');
        $vcard = $mimeDir->parse($vcard);
        $this->assertEquals("umlaut u - \xC3\xBC", $vcard->FN->getValue());
    }

    public function testDecodeInlineLatin1()
    {
        $vcard = <<<VCF
BEGIN:VCARD
VERSION:2.1
FN;CHARSET=ISO-8859-1:umlaut u - \xFC
END:VCARD\n
VCF;

        $mimeDir = new MimeDir();
        $vcard = $mimeDir->parse($vcard);
        $this->assertEquals("umlaut u - \xC3\xBC", $vcard->FN->getValue());
    }

    public function testIgnoreCharsetVCard30()
    {
        $vcard = <<<VCF
BEGIN:VCARD
VERSION:3.0
FN;CHARSET=unknown:foo-bar - \xFC
END:VCARD\n
VCF;

        $mimeDir = new MimeDir();
        $vcard = $mimeDir->parse($vcard);
        $this->assertEquals("foo-bar - \xFC", $vcard->FN->getValue());
    }

    public function testDontDecodeLatin1()
    {
        $vcard = <<<VCF
BEGIN:VCARD
VERSION:4.0
FN:umlaut u - \xFC
END:VCARD\n
VCF;

        $mimeDir = new MimeDir();
        $vcard = $mimeDir->parse($vcard);
        // This basically tests that we don't touch the input string if
        // the encoding was set to UTF-8. The result is actually invalid
        // and the validator should report this, but it tests effectively
        // that we pass through the string byte-by-byte.
        $this->assertEquals("umlaut u - \xFC", $vcard->FN->getValue());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testDecodeUnsupportedCharset()
    {
        $mimeDir = new MimeDir();
        $mimeDir->setCharset('foobar');
    }

    /**
     * @expectedException \Sabre\VObject\ParseException
     */
    public function testDecodeUnsupportedInlineCharset()
    {
        $vcard = <<<VCF
BEGIN:VCARD
VERSION:2.1
FN;CHARSET=foobar:nothing
END:VCARD\n
VCF;

        $mimeDir = new MimeDir();
        $mimeDir->parse($vcard);
    }

    public function testDecodeWindows1252()
    {
        $vcard = <<<VCF
BEGIN:VCARD
VERSION:3.0
FN:Euro \x80
END:VCARD\n
VCF;

        $mimeDir = new MimeDir();
        $mimeDir->setCharset('Windows-1252');
        $vcard = $mimeDir->parse($vcard);
        $this->assertEquals("Euro \xE2\x82\xAC", $vcard->FN->getValue());
    }

    public function testDecodeWindows1252Inline()
    {
        $vcard = <<<VCF
BEGIN:VCARD
VERSION:2.1
FN;CHARSET=Windows-1252:Euro \x80
END:VCARD\n
VCF;

        $mimeDir = new MimeDir();
        $vcard = $mimeDir->parse($vcard);
        $this->assertEquals("Euro \xE2\x82\xAC", $vcard->FN->getValue());
    }

    public function testCaseInsensitiveInlineCharset()
    {
        $vcard = <<<VCF
BEGIN:VCARD
VERSION:2.1
FN;CHARSET=iSo-8859-1:Euro
N;CHARSET=utf-8:Test2
END:VCARD\n
VCF;

        $mimeDir = new MimeDir();
        $vcard = $mimeDir->parse($vcard);
        // we can do a simple assertion here. As long as we don't get an exception, everything is thing
        $this->assertEquals('Euro', $vcard->FN->getValue());
        $this->assertEquals('Test2', $vcard->N->getValue());
    }
}
