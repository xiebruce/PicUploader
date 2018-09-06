<?php
namespace NOS\Tests;

use NOS\Core\NosException;
use NOS\Core\NosUtil;

class NosUtilTest extends \PHPUnit_Framework_TestCase
{

    public function testIsChinese()
    {
        $this->assertEquals(NosUtil::chkChinese("hello,world"), 0);
        $str = '你好,这里是卖咖啡!';
        $strGBK = NosUtil::encodePath($str);
        $this->assertEquals(NosUtil::chkChinese($str), 1);
        $this->assertEquals(NosUtil::chkChinese($strGBK), 1);
    }

    public function testIsGB2312()
    {
        $str = '你好,这里是卖咖啡!';
        $this->assertFalse(NosUtil::isGb2312($str));
    }

    public function testCheckChar()
    {
        $str = '你好,这里是卖咖啡!';
        $this->assertFalse(NosUtil::checkChar($str));
        $this->assertTrue(NosUtil::checkChar(iconv("UTF-8", "GB2312//IGNORE", $str)));
    }

    public function testIsIpFormat()
    {
        $this->assertTrue(NosUtil::isIPFormat("10.101.160.147"));
        $this->assertTrue(NosUtil::isIPFormat("12.12.12.34"));
        $this->assertTrue(NosUtil::isIPFormat("12.12.12.12"));
        $this->assertTrue(NosUtil::isIPFormat("255.255.255.255"));
        $this->assertTrue(NosUtil::isIPFormat("0.1.1.1"));
        $this->assertFalse(NosUtil::isIPFormat("0.1.1.x"));
        $this->assertFalse(NosUtil::isIPFormat("0.1.1.256"));
        $this->assertFalse(NosUtil::isIPFormat("256.1.1.1"));
        $this->assertFalse(NosUtil::isIPFormat("0.1.1.0.1"));
        $this->assertTrue(NosUtil::isIPFormat("10.10.10.10:123"));
    }

    public function testToQueryString()
    {
        $option = array(
            "a" => "b"
        );
        $this->assertEquals('a=b', NosUtil::toQueryString($option));
    }

    public function testSReplace()
    {
        $str = "<>&'\"";
        $this->assertEquals("&lt;&gt;&amp;&apos;&quot;", NosUtil::sReplace($str));
    }

    public function testCheckChinese()
    {
        $str = '你好,这里是卖咖啡!';
        $this->assertEquals(NosUtil::chkChinese($str), 1);
        if (NosUtil::isWin()) {
            $strGB = NosUtil::encodePath($str);
            $this->assertEquals($str, iconv("GB2312", "UTF-8", $strGB));
        }
    }

    public function testValidateOption()
    {
        $option = 'string';

        try {
            NosUtil::validateOptions($option);
            $this->assertFalse(true);
        } catch (NosException $e) {
            $this->assertEquals("string:option must be array", $e->getMessage());
        }

        $option = null;

        try {
            NosUtil::validateOptions($option);
            $this->assertTrue(true);
        } catch (NosException $e) {
            $this->assertFalse(true);
        }
    }

    public function testCreateDeleteObjectsXmlBody()
    {
        $xml = <<<BBBB
<?xml version="1.0" encoding="utf-8"?><Delete><Quiet>true</Quiet><Object><Key>obj1</Key></Object></Delete>
BBBB;
        $a = array('obj1');
        $this->assertEquals($xml, $this->cleanXml(NosUtil::createDeleteObjectsXmlBody($a,"true")));
    }

    public function testCreateCompleteMultipartUploadXmlBody()
    {
        $xml = <<<BBBB
<?xml version="1.0" encoding="utf-8"?><CompleteMultipartUpload><Part><PartNumber>2</PartNumber><ETag>xx</ETag></Part></CompleteMultipartUpload>
BBBB;
        $a = array(
            array(
                "PartNumber" => 2,
                "ETag" => "xx"
            )
        );
        $this->assertEquals($this->cleanXml(NosUtil::createCompleteMultipartUploadXmlBody($a)), $xml);
    }

    public function testCreatePutBucketDuplicationXmlBody()
    {
        $xml = <<<BBBB
<?xml version="1.0" encoding="utf-8"?><DeduplicationConfiguration><Status>enable</Status></DeduplicationConfiguration>
BBBB;
        $this->assertEquals($this->cleanXml(NosUtil::createPutBucketDuplicationXmlBody('enable')), $xml);
    }

    public function testCreatePutBucketVersingXmlBody()
    {
        $xml = <<<BBBB
<?xml version="1.0" encoding="utf-8"?><VersioningConfiguration><Status>enable</Status></VersioningConfiguration>
BBBB;
        $this->assertEquals($this->cleanXml(NosUtil::createPutBucketVersingXmlBody('enable')), $xml);
    }

    public function testCreatPutBucketDefault404XmlBody()
    {
        $xml = <<<BBBB
<?xml version="1.0" encoding="utf-8"?><Default404Configuration><Key>test</Key></Default404Configuration>
BBBB;
        $this->assertEquals($this->cleanXml(NosUtil::creatPutBucketDefault404XmlBody('test')), $xml);
    }

    public function testValidateBucket()
    {
        $this->assertTrue(NosUtil::validateBucket("xx-x"));
        $this->assertFalse(NosUtil::validateBucket("XXXqwe-123"));
        $this->assertFalse(NosUtil::validateBucket("X-X"));
        $this->assertFalse(NosUtil::validateBucket("/X"));
        $this->assertFalse(NosUtil::validateBucket(""));
    }

    public function testValidateObject()
    {
        $this->assertTrue(NosUtil::validateObject("xxx"));
        $this->assertTrue(NosUtil::validateObject("xxx23"));
        $this->assertTrue(NosUtil::validateObject("12321-xxx"));
        $this->assertTrue(NosUtil::validateObject("x"));
        $this->assertFalse(NosUtil::validateObject("/aa"));
        $this->assertFalse(NosUtil::validateObject("\\aa"));
        $this->assertFalse(NosUtil::validateObject(""));
    }

    public function testStartWith()
    {
        $this->assertTrue(NosUtil::startsWith("xxab", "xx"), true);
    }

    public function testReadDir()
    {
        $list = NosUtil::readDir("./", ".|..|.svn|.git", true);
        $this->assertNotNull($list);
    }

    public function testGetMd5SumForFile()
    {
        $str1 = NosUtil::getMd5SumForFile(__FILE__, 0, filesize(__FILE__) - 1);
        // $str2 = base64_encode(md5(file_get_contents(__FILE__), true));
        $str2 = md5(file_get_contents(__FILE__), false);
        $this->assertEquals($str1, $str2);
    }

    public function testGenerateFile()
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . "generatedFile.txt";
        NosUtil::generateFile($path, 1024 * 1024);
        $this->assertEquals(filesize($path), 1024 * 1024);
        unlink($path);
    }

    public function testThrowOssExceptionWithMessageIfEmpty()
    {
        $null = null;
        try {
            NosUtil::throwNosExceptionWithMessageIfEmpty($null, "xx");
            $this->assertTrue(false);
        } catch (NosException $e) {
            $this->assertEquals('xx', $e->getMessage());
        }
    }

    public function testThrowOssExceptionWithMessageIfEmpty2()
    {
        $null = "";
        try {
            NosUtil::throwNosExceptionWithMessageIfEmpty($null, "xx");
            $this->assertTrue(false);
        } catch (NosException $e) {
            $this->assertEquals('xx', $e->getMessage());
        }
    }

    public function testValidContent()
    {
        $null = "";
        try {
            NosUtil::validateContent($null);
            $this->assertTrue(false);
        } catch (NosException $e) {
            $this->assertEquals('http body content is invalid', $e->getMessage());
        }

        $notnull = "x";
        try {
            NosUtil::validateContent($notnull);
            $this->assertTrue(true);
        } catch (NosException $e) {
            $this->assertEquals('http body content is invalid', $e->getMessage());
        }
    }

    public function testThrowOssExceptionWithMessageIfEmpty3()
    {
        $null = "xx";
        try {
            NosUtil::throwNosExceptionWithMessageIfEmpty($null, "xx");
            $this->assertTrue(True);
        } catch (NosException $e) {
            $this->assertTrue(false);
        }
    }

    private function cleanXml($xml)
    {
        return str_replace("\n", "", str_replace("\r", "", $xml));
    }
}

