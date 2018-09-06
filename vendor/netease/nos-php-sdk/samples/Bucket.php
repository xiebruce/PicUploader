<?php

require_once __DIR__ . '/Common.php';

use NOS\NosClient;
use NOS\Core\NosException;

$bucket = Common::getTestBucketName();
$nosClient = Common::getNosClient();
if (is_null($nosClient)) exit(1);


//-------------------------------------------------------基本使用-------------------------------------------------
$exist = $nosClient->doesBucketExist($bucket);

if(!$exist)
{
    $nosClient->createBucket($bucket, NosClient::NOS_ACL_TYPE_PRIVATE);
    Common::println("bucket $bucket created");
}

$doesExist = $nosClient->doesBucketExist($bucket);
Common::println("bucket $bucket exist? " . ($doesExist ? "yes" : "no"));

$bucketListInfo = $nosClient->listBuckets();

$nosClient->putBucketAcl($bucket, NosClient::NOS_ACL_TYPE_PUBLIC_READ);
Common::println("bucket $bucket acl put");

$acl = $nosClient->getBucketAcl($bucket);
Common::println("bucket $bucket acl get: " . $acl);


//-----------------------------------------------------具体方法请参考以下函数-----------------------------------------------
$res = doesBucketExist($nosClient, $bucket);
if(!$res){
createBucket($nosClient, $bucket);
}
putBucketAcl($nosClient, $bucket);
getBucketAcl($nosClient, $bucket);
listBuckets($nosClient);
cleanBucket($nosClient,$bucket);
deleteBucket($nosClient, $bucket);

function createBucket($nosClient, $bucket)
{
    try {
        $nosClient->createBucket($bucket, NosClient::NOS_ACL_TYPE_PUBLIC_READ);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
}


function doesBucketExist($nosClient, $bucket)
{
    try {
        $res = $nosClient->doesBucketExist($bucket);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    if ($res === true) {
        print(__FUNCTION__ . ": OK" . "\n");
    } else {
        print(__FUNCTION__ . ": FAILED" . "\n");
    }
    return $res;
}

function deleteBucket($nosClient, $bucket)
{
    try {
        $nosClient->deleteBucket($bucket);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
}

function putBucketAcl($nosClient, $bucket)
{
    $acl = NosClient::NOS_ACL_TYPE_PUBLIC_READ;
    try {
        $nosClient->putBucketAcl($bucket, $acl);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
}

function getBucketAcl($nosClient, $bucket)
{
    try {
        $res = $nosClient->getBucketAcl($bucket);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
    print('acl: ' . $res);
}

function listBuckets($nosClient)
{
    $bucketList = null;
    try {
        $bucketListInfo = $nosClient->listBuckets();
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
    $bucketList = $bucketListInfo->getBucketList();
    foreach ($bucketList as $bucket) {
        print($bucket->getName() . "\t" . $bucket->getCreatedate() . "\n");
    }
}

function cleanBucket($nosClient,$bucket) {
    if (is_null($nosClient)) {
        exit(1);
    }
    try {
        $exist = $nosClient->doesBucketExist($bucket);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    if (! $exist) {
        return;
    }

    try {
        while (true) {
            $needDeletes = array();
            $objects = $nosClient->listObjects($bucket);
            foreach ($objects->getObjectList() as $object) {
                $needDeletes[] = $object->getKey();
            }
            if (count($needDeletes) == 0) {
                break;
            }
            $nosClient->deleteObjects($bucket, $needDeletes);
        }
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }

    try {
        $uploads = $nosClient->listMultipartUploads($bucket);
        foreach ($uploads->getUploads() as $upload) {
            $nosClient->abortMultipartUpload($bucket, $upload->getKey(), $upload->getUploadId());
        }
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    printf(__FUNCTION__ . ": Clean Bucket Success\n");
}