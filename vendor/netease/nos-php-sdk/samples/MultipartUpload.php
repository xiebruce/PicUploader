<?php

require_once __DIR__ . '/Common.php';

use NOS\NosClient;
use NOS\Core\NosUtil;
use NOS\Core\NosException;

$bucket = Common::getTestBucketName();
$nosClient = Common::getNosClient();
if (is_null($nosClient)) exit(1);

//---------------------------------------基本使用-----------------------------------

$nosClient->multiuploadFile($bucket, "file.php", __FILE__, array());
Common::println("local file " . __FILE__ . " is uploaded to the bucket $bucket, file.php");

// 列出当前未完成的分片上传
$listMultipartUploadInfo = $nosClient->listMultipartUploads($bucket, array());

//--------------------------------------完整使用--------------------------------------
multiuploadFile($nosClient, $bucket);
putObjectByRawApis($nosClient, $bucket);
listMultipartUploads($nosClient, $bucket);


function multiuploadFile($nosClient, $bucket)
{
    $object = "test/multipart-test.txt";
    $file = __FILE__;
    $options = array();

    try {
        $nosClient->multiuploadFile($bucket, $object, $file, $options);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ":  OK" . "\n");
}

function putObjectByRawApis($nosClient, $bucket)
{
    $object = "test/multipart-test.txt";
    /**
     *  step 1. 初始化一个分块上传事件, 也就是初始化上传Multipart, 获取upload id
     */
    try {
        $uploadId = $nosClient->initiateMultipartUpload($bucket, $object);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": initiateMultipartUpload FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": initiateMultipartUpload OK" . "\n");

    /*
     * step 2. 上传分片
     */
    $partSize = 10 * 1024 * 1024;
    $uploadFile = __FILE__;
    $uploadFileSize = filesize($uploadFile);
    $pieces = $nosClient->generateMultiuploadParts($uploadFileSize, $partSize);
    $responseUploadPart = array();
    $uploadPosition = 0;
    $isCheckMd5 = true;
    foreach ($pieces as $i => $piece) {
        $fromPos = $uploadPosition + (integer)$piece[NosClient::NOS_SEEK_TO];
        $toPos = (integer)$piece[NosClient::NOS_LENGTH] + $fromPos - 1;
        $upOptions = array(
            NosClient::NOS_FILE_UPLOAD => $uploadFile,
            NosClient::NOS_PART_NUM => ($i + 1),
            NosClient::NOS_SEEK_TO => $fromPos,
            NosClient::NOS_LENGTH => $toPos - $fromPos + 1,
            NosClient::NOS_CHECK_MD5 => $isCheckMd5,
        );
        if ($isCheckMd5) {
            $contentMd5 = NosUtil::getMd5SumForFile($uploadFile, $fromPos, $toPos);
            $upOptions[NosClient::NOS_CONTENT_MD5] = $contentMd5;
        }
        //2. 将每一分片上传到nos
        try {
            $responseUploadPart[] = $nosClient->uploadPart($bucket, $object, $uploadId, $upOptions);
        } catch (NosException $e) {
            printf(__FUNCTION__ . ": initiateMultipartUpload, uploadPart - part#{$i} FAILED\n");
            printf($e->getMessage() . "\n");
            return;
        }
        printf(__FUNCTION__ . ": initiateMultipartUpload, uploadPart - part#{$i} OK\n");
    }
    $uploadParts = array();
    foreach ($responseUploadPart as $i => $eTag) {
        $uploadParts[] = array(
            'PartNumber' => ($i + 1),
            'ETag' => $eTag,
        );
    }
    /**
     * step 3. 完成上传
     */
    try {
        $nosClient->completeMultipartUpload($bucket, $object, $uploadId, $uploadParts);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": completeMultipartUpload FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    printf(__FUNCTION__ . ": completeMultipartUpload OK\n");
}

function listMultipartUploads($nosClient, $bucket)
{
    $options = array(
        'max-uploads' => 100,
        'key-marker' => '',
        'prefix' => '',
        'upload-id-marker' => ''
    );
    try {
        $listMultipartUploadInfo = $nosClient->listMultipartUploads($bucket, $options);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": listMultipartUploads FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    printf(__FUNCTION__ . ": listMultipartUploads OK\n");
    $listUploadInfo = $listMultipartUploadInfo->getUploads();
    var_dump($listUploadInfo);
}