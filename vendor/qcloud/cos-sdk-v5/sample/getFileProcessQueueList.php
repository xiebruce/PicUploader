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
    // 搜索文件处理队列
//    $result = $cosClient->getFileProcessQueueList(array(
//        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
////        'QueueIds' => '', // 队列 ID，以“,”符号分割字符串
////        'State' => 'Active', // Active 表示队列内的作业会被调度执行;  Paused 表示队列暂停
////        'PageNumber' => '1', // 第几页,默认值1
////        'PageSize' => '10', // 每页个数,默认值10
//    ));
//    // 请求成功
//    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
