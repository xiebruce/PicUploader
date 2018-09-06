<?php
namespace NOS\Tests;

use NOS\Core\NosUtil;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'TestNosClientBase.php';

class ContentTypeTest extends TestNosClientBase
{
    private function getContentType($bucket, $object)
    {
        $headers = $this->nosClient->GetObjectMeta($bucket, $object);
        return $headers['content-type'];
    }

    public function testByFileName()
    {
        $file = 'x.html';
        $object = 'x';

        NosUtil::generateFile($file, 10 * 1024);
        $this->nosClient->uploadFile($this->bucket, $object, $file);
        $type = $this->getContentType($this->bucket, $object);
        $this->assertEquals('text/html', $type);
        unlink($file);

        $file = 'y.json';
        $object = 'y';
        NosUtil::generateFile($file, 10 * 1024);
        $this->nosClient->uploadFile($this->bucket, $object, $file);
        $type = $this->getContentType($this->bucket, $object);
        $this->assertEquals('application/json', $type);
        unlink($file);
    }

    public function testByObjectKey()
    {
        $object = "x.txt";
        $this->nosClient->putObject($this->bucket, $object, "hello world");
        $type = $this->getContentType($this->bucket, $object);
        $this->assertEquals('text/plain', $type);

        $file = 'x.html';
        $object = 'x.txt';
        NosUtil::generateFile($file, 10 * 1024);

        $this->nosClient->uploadFile($this->bucket, $object, $file);
        $type = $this->getContentType($this->bucket, $object);
        $this->assertEquals('text/html', $type);
        unlink($file);

        $file = 'x.none';
        $object = 'x.txt';
        NosUtil::generateFile($file, 10 * 1024);

        $this->nosClient->uploadFile($this->bucket, $object, $file);
        $type = $this->getContentType($this->bucket, $object);
        $this->assertEquals('text/plain', $type);
        unlink($file);

        $file = 'x.mp3';
        $object = 'y.json';
        NosUtil::generateFile($file, 10 * 1024 * 1024);

        $this->nosClient->multiuploadFile($this->bucket, $object, $file, array(
            'partSize' => 100
        ));
        $type = $this->getContentType($this->bucket, $object);
        $this->assertEquals('audio/mpeg', $type);
        unlink($file);

        $file = 'x.none';
        $object = 'y.json';
        NosUtil::generateFile($file, 10 * 1024 * 1024);

        $this->nosClient->multiuploadFile($this->bucket, $object, $file, array(
            'partSize' => 100
        ));
        $type = $this->getContentType($this->bucket, $object);
        $this->assertEquals('application/json', $type);
        unlink($file);
    }

    public function testByUser()
    {

        $object = "x.txt";
        $this->nosClient->putObject($this->bucket, $object, "hello world", array(
            'Content-Type' => 'text/html'
        ));
        $type = $this->getContentType($this->bucket, $object);

        $this->assertEquals('text/html', $type);

        $file = 'x.html';
        $object = 'x';
        NosUtil::generateFile($file, 10 * 1024);

        $this->nosClient->uploadFile($this->bucket, $object, $file, array(
            'Content-Type' => 'application/json'
        ));
        $type = $this->getContentType($this->bucket, $object);
        $this->assertEquals('application/json', $type);
        unlink($file);

        $file = 'x.json';
        $object = 'y';
        NosUtil::generateFile($file, 10 * 1024 * 1024);

        $this->nosClient->multiuploadFile($this->bucket, $object, $file, array(
            'partSize' => 1,
            'Content-Type' => 'audio/mpeg'
        ));
        $type = $this->getContentType($this->bucket, $object);
        $this->assertEquals('audio/mpeg', $type);
        unlink($file);
    }
}

