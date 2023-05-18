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
    // 人脸检测 https://cloud.tencent.com/document/product/460/63223
    $result = $cosClient->imageDetectFace(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => '', // ObjectKey
//        'MaxFaceNum' => 1, // 最多处理的人脸数目。默认值为1（仅检测图片中面积最大的那张人脸），最大值为120。此参数用于控制处理待检测图片中的人脸个数，值越小，处理速度越快。
    ));
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
