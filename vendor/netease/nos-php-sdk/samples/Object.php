<?php
require_once __DIR__ . '/Common.php';

use NOS\NosClient;
use NOS\Core\NosException;

$bucket = Common::getTestBucketName();
$nosClient = Common::getNosClient();
if (is_null($nosClient)) exit(1);


//----------------------------------------------基本使用--------------------------------------------------------

$nosClient->putObject($bucket, "b.file", "hi, nos");
Common::println("b.file is created");

$nosClient->uploadFile($bucket, "c.file", __FILE__);
Common::println("c.file is created");

$content = $nosClient->getObject($bucket, "b.file");
Common::println("b.file is fetched, the content is: " . $content);

$options = array(
    NosClient::NOS_FILE_DOWNLOAD => "./c.file.localcopy",
);
$nosClient->getObject($bucket, "c.file", $options);
Common::println("b.file is fetched to the local file: c.file.localcopy");

$nosClient->copyObject($bucket, "c.file", $bucket, "c.file.copy");
Common::println("c.file is copied to c.file.copy");

$doesExist = $nosClient->doesObjectExist($bucket, "c.file.copy");
Common::println("file c.file.copy exist? " . ($doesExist ? "yes" : "no"));

$nosClient->deleteObject($bucket, "c.file.copy");
Common::println("c.file.copy is deleted");

$doesExist = $nosClient->doesObjectExist($bucket, "c.file.copy");
Common::println("file c.file.copy exist? " . ($doesExist ? "yes" : "no"));

$nosClient->deleteObjects($bucket, array("b.file", "c.file"));
Common::println("b.file, c.file are deleted");

sleep(2);
unlink("c.file.localcopy");

//-----------------------------------------具体的使用方法请参考以下文档---------------------------------------------

listObjects($nosClient, $bucket);
listAllObjects($nosClient, $bucket);
putObject($nosClient, $bucket);
uploadFile($nosClient, $bucket);
getObject($nosClient, $bucket);
getObjectToLocalFile($nosClient, $bucket);
copyObject($nosClient, $bucket);
getObjectMeta($nosClient, $bucket);
deleteObject($nosClient, $bucket);
deleteObjects($nosClient, $bucket);
doesObjectExist($nosClient, $bucket);


/**
 *
 * @param unknown $nosClient
 * @param unknown $bucket
 */
function putObject($nosClient, $bucket)
{
    $object = "nos-php-sdk-test/upload-test-object-name.txt";
    $content = file_get_contents(__FILE__);
    $options = array();
    try {
        $nosClient->putObject($bucket, $object, $content, $options);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
}


/**
 *
 * @param unknown $nosClient
 * @param unknown $bucket
 */
function uploadFile($nosClient, $bucket)
{
    $object = "nos-php-sdk-test/upload-test-object-name.txt";
    $filePath = __FILE__;
    $options = array();

    try {
        $options[NosClient::NOS_HEADERS]['Cache-Control'] = 'max-age=60';
        $options[NosClient::NOS_HEADERS]['Content-Disposition'] = 'attachment; filename="xxxxxx"';
        $nosClient->uploadFile($bucket, $object, $filePath, $options);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
}


/**
 *
 * @param unknown $nosClient
 * @param unknown $bucket
 */
function listObjects($nosClient, $bucket)
{
    $prefix = 'nos-php-sdk-test/';
    $delimiter = '/';
    $nextMarker = '';
    $maxkeys = 1000;
    $options = array(
        'delimiter' => $delimiter,
        'prefix' => $prefix,
        'max-keys' => $maxkeys,
        'marker' => $nextMarker,
    );
    try {
        $listObjectInfo = $nosClient->listObjects($bucket, $options);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
    $objectList = $listObjectInfo->getObjectList(); // 文件列表
    if (!empty($objectList)) {
        print("objectList:\n");
        foreach ($objectList as $objectInfo) {
            print($objectInfo->getKey() . "\n");
        }
    }
}

function listAllObjects($nosClient, $bucket)
{
    //构造dir下的文件和虚拟目录
    for ($i = 0; $i < 100; $i += 1) {
        $nosClient->putObject($bucket, "dir/obj" . strval($i), "hi");
    }

    $prefix = 'dir/';
    $delimiter = '/';
    $nextMarker = '';
    $maxkeys = 30;

    while (true) {
        $options = array(
            'delimiter' => $delimiter,
            'prefix' => $prefix,
            'max-keys' => $maxkeys,
            'marker' => $nextMarker,
        );
        var_dump($options);
        try {
            $listObjectInfo = $nosClient->listObjects($bucket, $options);
        } catch (NosException $e) {
            printf(__FUNCTION__ . ": FAILED\n");
            printf($e->getMessage() . "\n");
            return;
        }
        // 得到nextMarker，从上一次listObjects读到的最后一个文件的下一个文件开始继续获取文件列表
        $nextMarker = $listObjectInfo->getNextMarker();
        $listObject = $listObjectInfo->getObjectList();
        var_dump(count($listObject));
        if ($nextMarker === '') {
            break;
        }
    }
}


function getObject($nosClient, $bucket)
{
    $object = "nos-php-sdk-test/upload-test-object-name.txt";
    $options = array();
    try {
        $content = $nosClient->getObject($bucket, $object, $options);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
    if (file_get_contents(__FILE__) === $content) {
        print(__FUNCTION__ . ": FileContent checked OK" . "\n");
    } else {
        print(__FUNCTION__ . ": FileContent checked FAILED" . "\n");
    }
}

function getObjectToLocalFile($nosClient, $bucket)
{
    $object = "nos-php-sdk-test/upload-test-object-name.txt";
    $localfile = "upload-test-object-name.txt";
    $options = array(
        NosClient::NOS_FILE_DOWNLOAD => $localfile,
    );

    try {
        $nosClient->getObject($bucket, $object, $options);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK, please check localfile: 'upload-test-object-name.txt'" . "\n");
    if (file_get_contents($localfile) === file_get_contents(__FILE__)) {
        print(__FUNCTION__ . ": FileContent checked OK" . "\n");
    } else {
        print(__FUNCTION__ . ": FileContent checked FAILED" . "\n");
    }
    if (file_exists($localfile)) {
        unlink($localfile);
    }
}

function copyObject($nosClient, $bucket)
{
    $fromBucket = $bucket;
    $fromObject = "nos-php-sdk-test/upload-test-object-name.txt";
    $toBucket = $bucket;
    $toObject = $fromObject . '.copy';
    $options = array();

    try {
        $nosClient->copyObject($fromBucket, $fromObject, $toBucket, $toObject, $options);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
}


function getObjectMeta($nosClient, $bucket)
{
    $object = "nos-php-sdk-test/upload-test-object-name.txt";
    try {
        $objectMeta = $nosClient->getObjectMeta($bucket, $object);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
    if (isset($objectMeta[strtolower('Content-Disposition')]) &&
        'attachment; filename="xxxxxx"' === $objectMeta[strtolower('Content-Disposition')]
        ) {
            print(__FUNCTION__ . ": ObjectMeta checked OK" . "\n");
        } else {
            print(__FUNCTION__ . ": ObjectMeta checked FAILED" . "\n");
        }
}

function deleteObject($nosClient, $bucket)
{
    $object = "nos-php-sdk-test/upload-test-object-name.txt";
    try {
        $nosClient->deleteObject($bucket, $object);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
}


function deleteObjects($nosClient, $bucket)
{
    $objects = array();
    $objects[] = "nos-php-sdk-test/upload-test-object-name.txt";
    $objects[] = "nos-php-sdk-test/upload-test-object-name.txt.copy";
    try {
        $nosClient->deleteObjects($bucket, $objects);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
}

function doesObjectExist($nosClient, $bucket)
{
    $object = "nos-php-sdk-test/upload-test-object-name.txt";
    try {
        $exist = $nosClient->doesObjectExist($bucket, $object);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": OK" . "\n");
    var_dump($exist);
}