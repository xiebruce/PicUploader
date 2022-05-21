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
    $result = $cosClient->getDescribeDocProcessJobs(array(
        'Bucket' => 'examplebucket-1250000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'QueueId' => 'pd8e422a2ea134165a92f2012ea43****', //拉取该队列 ID 下的任务
        'Tag' => 'DocProcess', //任务的 Tag：DocProcess 固定值
//      'NextToken' => '143486', //请求的上下文，用于翻页。上次返回的值
//      'OrderByTime' => 'Desc', //Desc 或者 Asc。默认为 Desc
//      'Size' => 2, //拉取的最大任务数。默认为10。最大为100
//      'States' => 'All', //拉取该状态的任务，以,分割，支持多状态：All、Submitted、Running、Success、Failed、Pause、Cancel。默认为 All。
//      'StartCreationTime' => '2021-10-10T16:20:07+0800', //拉取创建时间大于该时间的任务
//      'EndCreationTime' => '2021-10-10T16:20:07+0800', //拉取创建时间小于该时间的任务
    ));
    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
