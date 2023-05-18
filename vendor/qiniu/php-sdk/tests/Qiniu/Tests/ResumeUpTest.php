<?php
namespace Qiniu\Tests;

use PHPUnit\Framework\TestCase;

use phpDocumentor\Reflection\DocBlock\Tags\Version;
use Qiniu\Region;
use Qiniu\Storage\BucketManager;
use Qiniu\Storage\ResumeUploader;
use Qiniu\Storage\UploadManager;
use Qiniu\Http\Client;
use Qiniu\Config;
use Qiniu\Zone;

class ResumeUpTest extends TestCase
{
    private static $keyToDelete = array();

    /**
     * @afterClass
     */
    public static function cleanupTestData()
    {
        global $bucketName;
        global $testAuth;

        $config = new Config();
        $bucketManager = new BucketManager($testAuth, $config);
        foreach (self::$keyToDelete as $key) {
            $bucketManager->delete($bucketName, $key);
        }
    }
    protected $bucketName;
    protected $auth;

    /**
     * @before
     */
    protected function setUpAuthAndBucket()
    {
        global $bucketName;
        $this->bucketName = $bucketName;

        global $testAuth;
        $this->auth = $testAuth;
    }

    public function test4ML()
    {
        $key = "resumePutFile4ML_".rand();
        $upManager = new UploadManager();
        $token = $this->auth->uploadToken($this->bucketName, $key);
        $tempFile = qiniuTempFile(4 * 1024 * 1024 + 10);
        $resumeFile = tempnam(sys_get_temp_dir(), 'resume_file');
        $this->assertNotFalse($resumeFile);
        list($ret, $error) = $upManager->putFile(
            $token,
            $key,
            $tempFile,
            null,
            'application/octet-stream',
            false,
            $resumeFile
        );
        $this->assertNull($error);
        $this->assertNotNull($ret['hash']);

        $domain = getenv('QINIU_TEST_DOMAIN');
        $response = Client::get("http://$domain/$key");
        $this->assertEquals(200, $response->statusCode);
        $this->assertEquals(md5_file($tempFile, true), md5($response->body(), true));
        unlink($tempFile);
    }

    public function test4ML2()
    {
        $key = 'resumePutFile4ML_'.rand();
        $cfg = new Config();
        $upManager = new UploadManager($cfg);
        $token = $this->auth->uploadToken($this->bucketName, $key);
        $tempFile = qiniuTempFile(4 * 1024 * 1024 + 10);
        $resumeFile = tempnam(sys_get_temp_dir(), 'resume_file');
        $this->assertNotFalse($resumeFile);
        list($ret, $error) = $upManager->putFile(
            $token,
            $key,
            $tempFile,
            null,
            'application/octet-stream',
            false,
            $resumeFile
        );
        $this->assertNull($error);
        $this->assertNotNull($ret['hash']);

        $domain = getenv('QINIU_TEST_DOMAIN');
        $response = Client::get("http://$domain/$key");
        $this->assertEquals(200, $response->statusCode);
        $this->assertEquals(md5_file($tempFile, true), md5($response->body(), true));
        unlink($tempFile);
    }

    // public function test8M()
    // {
    //     $key = 'resumePutFile8M';
    //     $upManager = new UploadManager();
    //     $token = $this->auth->uploadToken($this->bucketName, $key);
    //     $tempFile = qiniuTempFile(8*1024*1024+10);
    //     list($ret, $error) = $upManager->putFile($token, $key, $tempFile);
    //     $this->assertNull($error);
    //     $this->assertNotNull($ret['hash']);
    //     unlink($tempFile);
    // }

    public function testFileWithFileType()
    {
        $config = new Config();
        $bucketManager = new BucketManager($this->auth, $config);

        $testCases = array(
            array(
                "fileType" => 1,
                "name" => "IA"
            ),
            array(
                "fileType" => 2,
                "name" => "Archive"
            ),
            array(
                "fileType" => 3,
                "name" => "DeepArchive"
            )
        );

        foreach ($testCases as $testCase) {
            $key = 'FileType'.$testCase["name"].rand();
            $police = array(
                "fileType" => $testCase["fileType"],
            );
            $token = $this->auth->uploadToken($this->bucketName, $key, 3600, $police);
            $upManager = new UploadManager();
            list($ret, $error) = $upManager->putFile($token, $key, __file__, null, 'text/plain');
            $this->assertNull($error);
            $this->assertNotNull($ret);
            array_push(self::$keyToDelete, $key);
            list($ret, $err) = $bucketManager->stat($this->bucketName, $key);
            $this->assertNull($err);
            $this->assertEquals($testCase["fileType"], $ret["type"]);
        }
    }

    public function testResumeUploadWithParams()
    {
        $key = "resumePutFile4ML_".rand();
        $upManager = new UploadManager();
        $policy = array('returnBody' => '{"hash":$(etag),"fname":$(fname),"var_1":$(x:var_1),"var_2":$(x:var_2)}');
        $token = $this->auth->uploadToken($this->bucketName, $key, 3600, $policy);
        $tempFile = qiniuTempFile(4 * 1024 * 1024 + 10);
        $resumeFile = tempnam(sys_get_temp_dir(), 'resume_file');
        $this->assertNotFalse($resumeFile);
        list($ret, $error) = $upManager->putFile(
            $token,
            $key,
            $tempFile,
            array("x:var_1" => "val_1", "x:var_2" => "val_2", "x-qn-meta-m1" => "val_1", "x-qn-meta-m2" => "val_2"),
            'application/octet-stream',
            false,
            $resumeFile
        );
        $this->assertNull($error);
        $this->assertNotNull($ret['hash']);
        $this->assertEquals("val_1", $ret['var_1']);
        $this->assertEquals("val_2", $ret['var_2']);
        $this->assertEquals(basename($tempFile), $ret['fname']);

        $domain = getenv('QINIU_TEST_DOMAIN');
        $response = Client::get("http://$domain/$key");
        $this->assertEquals(200, $response->statusCode);
        $this->assertEquals(md5_file($tempFile, true), md5($response->body(), true));
        $headers = $response->headers();
        $this->assertEquals("val_1", $headers["X-Qn-Meta-M1"]);
        $this->assertEquals("val_2", $headers["X-Qn-Meta-M2"]);
        unlink($tempFile);
    }

    public function testResumeUploadV2()
    {
        $cfg = new Config();
        $upManager = new UploadManager($cfg);
        $testFileSize = array(
            config::BLOCK_SIZE / 2,
            config::BLOCK_SIZE,
            config::BLOCK_SIZE + 10,
            config::BLOCK_SIZE * 2,
            config::BLOCK_SIZE * 2.5
        );
        $partSize = 5 * 1024 * 1024;
        foreach ($testFileSize as $item) {
            $key = 'resumePutFile4ML_'.rand()."_";
            $token = $this->auth->uploadToken($this->bucketName, $key);
            $tempFile = qiniuTempFile($item);
            $resumeFile = tempnam(sys_get_temp_dir(), 'resume_file');
            $this->assertNotFalse($resumeFile);
            list($ret, $error) = $upManager->putFile(
                $token,
                $key,
                $tempFile,
                null,
                'application/octet-stream',
                false,
                $resumeFile,
                'v2',
                $partSize
            );
            $this->assertNull($error);
            $this->assertNotNull($ret['hash']);

            $domain = getenv('QINIU_TEST_DOMAIN');
            $response = Client::get("http://$domain/$key");
            $this->assertEquals(200, $response->statusCode);
            $this->assertEquals(md5_file($tempFile, true), md5($response->body(), true));
            unlink($tempFile);
        }
    }

    public function testResumeUploadV2WithParams()
    {
        $key = "resumePutFile4ML_".rand();
        $upManager = new UploadManager();
        $policy = array('returnBody' => '{"hash":$(etag),"fname":$(fname),"var_1":$(x:var_1),"var_2":$(x:var_2)}');
        $token = $this->auth->uploadToken($this->bucketName, $key, 3600, $policy);
        $tempFile = qiniuTempFile(4 * 1024 * 1024 + 10);
        $resumeFile = tempnam(sys_get_temp_dir(), 'resume_file');
        $this->assertNotFalse($resumeFile);
        list($ret, $error) = $upManager->putFile(
            $token,
            $key,
            $tempFile,
            array("x:var_1" => "val_1", "x:var_2" => "val_2", "x-qn-meta-m1" => "val_1", "x-qn-meta-m2" => "val_2"),
            'application/octet-stream',
            false,
            $resumeFile,
            'v2'
        );
        $this->assertNull($error);
        $this->assertNotNull($ret['hash']);
        $this->assertEquals("val_1", $ret['var_1']);
        $this->assertEquals("val_2", $ret['var_2']);
        $this->assertEquals(basename($tempFile), $ret['fname']);

        $domain = getenv('QINIU_TEST_DOMAIN');
        $response = Client::get("http://$domain/$key");
        $this->assertEquals(200, $response->statusCode);
        $this->assertEquals(md5_file($tempFile, true), md5($response->body(), true));
        $headers = $response->headers();
        $this->assertEquals("val_1", $headers["X-Qn-Meta-M1"]);
        $this->assertEquals("val_2", $headers["X-Qn-Meta-M2"]);
        unlink($tempFile);
    }

    // valid versions are tested above
    // Use PHPUnit's Data Provider to test multiple Exception is better,
    // but not match the test style of this project
    public function testResumeUploadWithInvalidVersion()
    {
        $cfg = new Config();
        $upManager = new UploadManager($cfg);
        $testFileSize = config::BLOCK_SIZE * 2;
        $partSize = 5 * 1024 * 1024;
        $testInvalidVersions = array(
            // High probability invalid versions
            'v',
            '1',
            '2'
        );

        $expectExceptionCount = 0;
        foreach ($testInvalidVersions as $invalidVersion) {
            $key = 'resumePutFile4ML_'.rand()."_";
            $token = $this->auth->uploadToken($this->bucketName, $key);
            $tempFile = qiniuTempFile($testFileSize);
            $resumeFile = tempnam(sys_get_temp_dir(), 'resume_file');
            $this->assertNotFalse($resumeFile);
            try {
                $upManager->putFile(
                    $token,
                    $key,
                    $tempFile,
                    null,
                    'application/octet-stream',
                    false,
                    $resumeFile,
                    $invalidVersion,
                    $partSize
                );
            } catch (\Exception $e) {
                $isRightException = false;
                $expectExceptionCount++;
                while ($e) {
                    $isRightException = $e instanceof \UnexpectedValueException;
                    if ($isRightException) {
                        break;
                    }
                    $e = $e->getPrevious();
                }
                $this->assertTrue($isRightException);
            }

            unlink($tempFile);
        }
        $this->assertEquals(count($testInvalidVersions), $expectExceptionCount);
    }
}
