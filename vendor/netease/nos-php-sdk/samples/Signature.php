<?php
require_once __DIR__ . '/Common.php';


use NOS\Http\RequestCore;
use NOS\Http\ResponseCore;
use NOS\NosClient;
use NOS\Core\NosException;

$bucket = Common::getTestBucketName();
$nosClient = Common::getNosClient();
if (is_null($nosClient)) exit(1);

//------------------------------------------------------------基本使用----------------------------------------
$nosClient->uploadFile($bucket, "a.file", __FILE__);

$signedUrl = $nosClient->signUrl($bucket, "a.file", 3600);
Common::println($signedUrl);

//-----------------------------------------------------------完整用法-------------------------------------------
$nosClient->putObject($bucket, "test/test-signature-test-upload-and-download.txt", "nos php sample");
getSignedUrlForGettingObject($nosClient,$bucket);

function getSignedUrlForGettingObject($nosClient, $bucket)
{
    $object = "test/test-signature-test-upload-and-download.txt";
    $timeout = 3600;
    try {
        $signedUrl = $nosClient->signUrl($bucket, $object, $timeout);
    } catch (NosException $e) {
        printf(__FUNCTION__ . ": FAILED\n");
        printf($e->getMessage() . "\n");
        return;
    }
    print(__FUNCTION__ . ": signedUrl: " . $signedUrl . "\n");
    /**
     * 可以类似的代码来访问签名的URL，也可以输入到浏览器中去访问
     */
    $request = new RequestCore($signedUrl);
    $request->set_method('GET');
    $request->add_header('Content-Type', '');
    $request->send_request();
    $res = new ResponseCore($request->get_response_header(), $request->get_response_body(), $request->get_response_code());
    if ($res->isOK()) {
        print(__FUNCTION__ . ": OK" . "\n");
    } else {
        print(__FUNCTION__ . ": FAILED" . "\n");
    };
}