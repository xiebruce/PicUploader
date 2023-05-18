<?php
namespace Qiniu\Tests;

use PHPUnit\Framework\TestCase;

use Qiniu;

class EntryTest extends TestCase
{
    public function testNormal()
    {
        $bucket = 'qiniuphotos';
        $key = 'gogopher.jpg';
        $encodeEntryURI = Qiniu\entry($bucket, $key);
        $this->assertEquals('cWluaXVwaG90b3M6Z29nb3BoZXIuanBn', $encodeEntryURI);
    }

    public function testKeyEmpty()
    {
        $bucket = 'qiniuphotos';
        $key = '';
        $encodeEntryURI = Qiniu\entry($bucket, $key);
        $this->assertEquals('cWluaXVwaG90b3M6', $encodeEntryURI);
    }

    public function testKeyNull()
    {
        $bucket = 'qiniuphotos';
        $key = null;
        $encodeEntryURI = Qiniu\entry($bucket, $key);
        $this->assertEquals('cWluaXVwaG90b3M=', $encodeEntryURI);
    }

    public function testKeyNeedReplacePlusSymbol()
    {
        $bucket = 'qiniuphotos';
        $key = '012ts>a';
        $encodeEntryURI = Qiniu\entry($bucket, $key);
        $this->assertEquals('cWluaXVwaG90b3M6MDEydHM-YQ==', $encodeEntryURI);
    }

    public function testKeyNeedReplaceSlashSymbol()
    {
        $bucket = 'qiniuphotos';
        $key = '012ts?a';
        $encodeEntryURI = Qiniu\entry($bucket, $key);
        $this->assertEquals('cWluaXVwaG90b3M6MDEydHM_YQ==', $encodeEntryURI);
    }
}
