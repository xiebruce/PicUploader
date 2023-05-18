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
    // 1. 文档转码 https://cloud.tencent.com/document/product/460/47074
    $bucket = 'examplebucket-125000000';
    $key = 'exampleobject';
    $url = $cosClient->getObjectUrl($bucket, $key);
    $params = array(
        'ci-process' => 'doc-preview',
//        'srcType' => '',
        'page' => 3,
        'dstType' => 'png',
//        'password' => '',
//        'comment' => '',
//        'sheet' => '',
//        'excelPaperDirection' => '',
//        'excelRow' => '',
//        'excelCol' => '',
//        'excelPaperSize' => '',
//        'txtPagination' => '',
        'ImageParams' => 'imageMogr2/thumbnail/!50p',
//        'quality' => '',
//        'scale' => '',
//        'imageDpi' => '',
    );
    $query = http_build_query($params);
    echo $url . $query; // 生成的可访问链接

    // 2. 文档转HTML https://cloud.tencent.com/document/product/460/52518
    $bucket = 'examplebucket-125000000';
    $key = 'exampleobject';
    $url = $cosClient->getObjectUrl($bucket, $key, "+30 minutes");
    $params = array(
        'ci-process' => 'doc-preview',
//        'srcType' => '',
        'dstType' => 'html',
//        'sign' => '',
//        'copyable' => '',
//        'htmlParams' => '',
//        'htmlwaterword' => '',
//        'htmlfillstyle' => '',
//        'htmlfront' => '',
//        'htmlrotate' => '',
//        'htmlhorizontal' => '',
//        'htmlvertical' => '',
    );
    $query = http_build_query($params);
    echo $url . $query; // 生成的可访问链接
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
