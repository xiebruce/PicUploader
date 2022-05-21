<?php
namespace Kunnu\Dropbox;

use PHPUnit\Framework\TestCase;

class DropboxFileTest extends TestCase
{
    protected $stream;

    public function setUp()
    {
        $this->stream = fopen(__FILE__, 'r');
    }

    public function tearDown()
    {
        fclose($this->stream);
    }

    public function testGetStreamOrFilePathReturnsStringWhenConstructedNormally()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|DropboxFile $dropboxFile */
        $dropboxFile = $this->getMockBuilder(DropboxFile::class)
            ->setMethods(['getFilePath', 'getStream', 'isCreatedFromStream'])
            ->disableOriginalConstructor()
            ->getMock();

        $dropboxFile
            ->expects($this->any())
            ->method('getFilePath')
            ->willReturn('/i/am/a/file');

        $dropboxFile
            ->expects($this->never())
            ->method('getStream');

        $dropboxFile
            ->expects($this->atLeastOnce())
            ->method('isCreatedFromStream')
            ->willReturn(false);

        $result = $dropboxFile->getStreamOrFilePath();

        self::assertSame('/i/am/a/file', $result);
    }

    public function testGetStreamOrFilePathReturnsStringWhenConstructedWithStream()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|DropboxFile $dropboxFile */
        $dropboxFile = $this->getMockBuilder(DropboxFile::class)
            ->setMethods(['getFilePath', 'getStream', 'isCreatedFromStream'])
            ->disableOriginalConstructor()
            ->getMock();

        $dropboxFile
            ->expects($this->never())
            ->method('getFilePath');

        $dropboxFile
            ->expects($this->any())
            ->method('getStream')
            ->willReturn($this->stream);

        $dropboxFile
            ->expects($this->atLeastOnce())
            ->method('isCreatedFromStream')
            ->willReturn(true);

        $result = $dropboxFile->getStreamOrFilePath();

        self::assertSame($this->stream, $result);
    }
}
