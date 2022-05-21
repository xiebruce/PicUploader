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

try {
    $result = $cosClient->updateMediaQueue(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => 'xxx', // queueId
        'Name' => '', // 模板名称, 长度限制100字符
        'QueueID' => 'xxx', // queueId
        'State' => 'Active', // 管道状态
        'NotifyConfig' => array(
            'Url' => '', // 回调配置
            'Type' => 'Url', // 回调类型，普通回调：Url
            'Event' => 'TaskFinish', // 任务完成：TaskFinish；工作流完成：WorkflowFinishh
            'State' => 'Off', // 回调开关，Off，On
        ), // 通知渠道
    ));
    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
