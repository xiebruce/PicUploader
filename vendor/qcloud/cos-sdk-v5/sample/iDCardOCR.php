<?php

require dirname(__FILE__, 2) . '/vendor/autoload.php';

$secretId = "SECRETID"; //替换为用户的 secretId，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$secretKey = "SECRETKEY"; //替换为用户的 secretKey，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$region = "ap-beijing"; //替换为用户的 region，已创建桶归属的region可以在控制台查看，https://console.cloud.tencent.com/cos5/bucket
$cosClient = new Qcloud\Cos\Client(
    array(
        'region' => $region,
        'schema' => 'https', //协议头部，默认为http
        'credentials' => array(
            'secretId' => $secretId,
            'secretKey' => $secretKey)));
try {
    // 身份证识别 https://cloud.tencent.com/document/product/460/48638
    // 1. 云上数据处理
    $result = $cosClient->iDCardOCR(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => '', // ObjectKey
//        'CardSide' => 'FRONT', // 身份证正反面
//        'Config' => '{"CropIdCard":true,"CropPortrait":true}',
    ));
    print_r($result);

    // 2. 上传时处理
    $result = $cosClient->iDCardOCRByUpload(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => '', // ObjectKey
        'Body' => fopen('/tmp/test.jpg', 'rb'),
//        'CardSide' => 'FRONT', // 身份证正反面
//        'Config' => '{"CropIdCard":true,"CropPortrait":true}',
    ));
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
