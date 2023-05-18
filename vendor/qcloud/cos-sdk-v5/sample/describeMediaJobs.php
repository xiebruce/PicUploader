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
    /*
    拉取符合条件的任务, 支持
    Transcode、Snapshot、Animation、Concat、SmartCover、VideoProcess、VideoMontage、VoiceSeparate、SDRtoHDR、
    DigitalWatermark、ExtractDigitalWatermark、SuperResolution、VideoTag、PicProcess、Segment
    */
    $result = $cosClient->describeMediaJobs(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Tag' => 'Transcode', // 任务 的Tag
        'QueueId' => 'paaf4fce5521a40888a3034a5dxxxxxxx', // queueId
    ));
    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
