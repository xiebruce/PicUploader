<?php
namespace Qiniu\Tests;

use PHPUnit\Framework\TestCase;

use Qiniu\Storage\FormUploader;
use Qiniu\Storage\UploadManager;
use Qiniu\Config;

class FormUpTest extends TestCase
{
    protected $bucketName;
    protected $auth;
    protected $cfg;

    /**
     * @before
     */
    protected function setUpConfigAndBucket()
    {
        global $bucketName;
        $this->bucketName = $bucketName;

        global $testAuth;
        $this->auth = $testAuth;
        $this->cfg = new Config();
    }

    public function testData()
    {
        $token = $this->auth->uploadToken($this->bucketName);
        list($ret, $error) = FormUploader::put($token, 'formput', 'hello world', $this->cfg, null, 'text/plain', null);
        $this->assertNull($error);
        $this->assertNotNull($ret['hash']);
    }

    public function testData2()
    {
        $upManager = new UploadManager();
        $token = $this->auth->uploadToken($this->bucketName);
        list($ret, $error) = $upManager->put($token, 'formput', 'hello world', null, 'text/plain', null);
        $this->assertNull($error);
        $this->assertNotNull($ret['hash']);
    }

    public function testDataFailed()
    {
        $token = $this->auth->uploadToken('fakebucket');
        list($ret, $error) = FormUploader::put($token, 'formput', 'hello world', $this->cfg, null, 'text/plain', null);
        $this->assertNull($ret);
        $this->assertNotNull($error);
    }

    public function testFile()
    {
        $key = 'formPutFile';
        $token = $this->auth->uploadToken($this->bucketName, $key);
        list($ret, $error) = FormUploader::putFile($token, $key, __file__, $this->cfg, null, 'text/plain', null);
        $this->assertNull($error);
        $this->assertNotNull($ret['hash']);
    }

    public function testFile2()
    {
        $key = 'formPutFile';
        $token = $this->auth->uploadToken($this->bucketName, $key);
        $upManager = new UploadManager();
        list($ret, $error) = $upManager->putFile($token, $key, __file__, null, 'text/plain', null);
        $this->assertNull($error);
        $this->assertNotNull($ret['hash']);
    }

    public function testFileFailed()
    {
        $key = 'fakekey';
        $token = $this->auth->uploadToken('fakebucket', $key);
        list($ret, $error) = FormUploader::putFile($token, $key, __file__, $this->cfg, null, 'text/plain', null);
        $this->assertNull($ret);
        $this->assertNotNull($error);
    }
}
