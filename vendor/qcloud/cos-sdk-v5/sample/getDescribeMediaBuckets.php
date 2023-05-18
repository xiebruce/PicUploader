<?php

require dirname(__FILE__, 2) . '/vendor/autoload.php';

$secretId = "SECRETID"; //替换为用户的 secretId，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$secretKey = "SECRETKEY"; //替换为用户的 secretKey，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$region = "ap-beijing"; //替换为用户的 region，已创建桶归属的region可以在控制台查看，https://console.cloud.tencent.com/cos5/bucket
$cosClient = new Qcloud\Cos\Client(
    array(
        'region' => $region,
        'schema' => 'https', //协议头部，默认为http
        'credentials'=> array(
            'secretId'  => $secretId ,
            'secretKey' => $secretKey)));

try {
    $result = $cosClient->describeMediaBuckets(array(
        'Regions' => '', // 可选 地域信息，例如 ap-shanghai、ap-beijing，若查询多个地域以“,”分隔字符串
        'BucketNames' => '', // 可选 存储桶名称，以“,”分隔，支持多个存储桶，精确搜索
        'BucketName' => '', // 可选 存储桶名称前缀，前缀搜索
        'PageNumber' => 1, // 可选 第几页
        'PageSize' => 20, // 可选 每页个数
    ));
    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
