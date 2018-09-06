<?php
namespace NOS\Tests;

use NOS\Core\NosException;
use NOS\Core\NosUtil;
use NOS\NosClient;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'TestNosClientBase.php';

class NosClientMultipartUploadTest extends TestNosClientBase
{
    public function testMultipartUploadBigFile()
    {
        $bigFileName = __DIR__ . DIRECTORY_SEPARATOR . "bigfile.tmp";
        $localFilename = __DIR__ . DIRECTORY_SEPARATOR . "localfile.tmp";
        NosUtil::generateFile($bigFileName, 6 * 1024 * 1024);

        $object = 'multipart-bigfile-test.tmp';
        try {
            $this->nosClient->multiuploadFile($this->bucket, $object, $bigFileName, array(NosClient::NOS_PART_SIZE => 1));
            $options = array(NosClient::NOS_FILE_DOWNLOAD => $localFilename);
            $this->nosClient->getObject($this->bucket, $object, $options);
            $this->assertEquals(md5_file($bigFileName), md5_file($localFilename));
         } catch (NosException $e) {
             var_dump($e->getMessage());
             $this->assertFalse(true);
         }
         unlink($bigFileName);
         unlink($localFilename);
    }

    public function testmultiUploadSuccess()
    {
        $object = "multipart-test.txt";
        $partFileName = __DIR__ . DIRECTORY_SEPARATOR . "part.txt";
        /**
         *  step 1. 初始化一个分块上传事件, 也就是初始化上传Multipart, 获取upload id
         */
        try {
            $upload_id = $this->nosClient->initiateMultipartUpload($this->bucket, $object);
        } catch (NosException $e) {
            $this->assertFalse(true);
        }
        /*
         * step 2. uploadPart
         */
        $partId = 1;
        $upload_parts = array();
        NosUtil::generateFile($partFileName, 6 * 1024);
        $options = array();
        $options[NosClient::NOS_FILE_UPLOAD] = $partFileName;
        $options[NosClient::NOS_PART_NUM] = $partId;
        $eTag = $this->nosClient->uploadPart($this->bucket,$object,$upload_id,$options);
        $upload_parts[] = array(
            'PartNumber' => $partId,
            'ETag' => $eTag,
        );

        try {
            $listPartsInfo = $this->nosClient->listParts($this->bucket, $object, $upload_id);
            $this->assertNotNull($listPartsInfo);
        } catch (NosException $e) {
            $this->assertTrue(false);
        }

        /**
         * step 3:list all multipart upload
         */
        $this->nosClient->listMultipartUploads($this->bucket);


        /**
         * step 4. success upload
         */
        try {
            $this->nosClient->completeMultipartUpload($this->bucket, $object, $upload_id, $upload_parts);
        } catch (NosException $e) {
            var_dump($e->getMessage());
            $this->assertTrue(false);
        }
        unlink($partFileName);
    }

    public function testAbortmultiUpload()
    {
        $object = "multipart-test.txt";
        $partFileName = __DIR__ . DIRECTORY_SEPARATOR . "part.txt";
        /**
         *  step 1. 初始化一个分块上传事件, 也就是初始化上传Multipart, 获取upload id
         */
        try {
            $upload_id = $this->nosClient->initiateMultipartUpload($this->bucket, $object);
        } catch (NosException $e) {
            $this->assertFalse(true);
        }
        /*
         * step 2. uploadPart
         */
        $partId = 1;
        NosUtil::generateFile($partFileName, 6 * 1024);
        $options = array();
        $options[NosClient::NOS_FILE_UPLOAD] = $partFileName;
        $options[NosClient::NOS_PART_NUM] = $partId;
        $this->nosClient->uploadPart($this->bucket,$object,$upload_id,$options);

        try {
            $listPartsInfo = $this->nosClient->listParts($this->bucket, $object, $upload_id);
            $this->assertNotNull($listPartsInfo);
        } catch (NosException $e) {
            $this->assertTrue(false);
        }

        /**
         * step 3:list all multipart upload
         */
        $this->nosClient->listMultipartUploads($this->bucket);

        /**
         * step 4. abort upload
         */
        try {
            $this->nosClient->abortMultipartUpload($this->bucket, $object, $upload_id);
        } catch (NosException $e) {
            var_dump($e->getMessage());
            $this->assertTrue(false);
        }
        unlink($partFileName);
    }
}

