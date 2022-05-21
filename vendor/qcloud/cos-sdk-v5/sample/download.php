<?php

require dirname(__FILE__) . '/../vendor/autoload.php';

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
$local_path = "/data/exampleobject";

$printbar = function($totalSize, $downloadedSize) {
    printf("downloaded [%d/%d]\n", $downloadedSize, $totalSize);
};

try {
    $result = $cosClient->download(
        $bucket = 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        $key = 'exampleobject',
        $saveAs = $local_path,
        $options=['Progress' => $printbar, //指定进度条
                  'PartSize' => 10 * 1024 * 1024, //分块大小
                  'Concurrency' => 5, //并发数
                  'ResumableDownload' => true, //是否开启断点续传，默认为false
                  'ResumableTaskFile' => 'tmp.cosresumabletask' //断点文件信息路径，默认为<localpath>.cosresumabletask
                ]
    );
    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
