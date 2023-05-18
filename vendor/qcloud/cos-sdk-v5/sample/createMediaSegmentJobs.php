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
    // 提交转封装任务 https://cloud.tencent.com/document/product/436/67186
    $result = $cosClient->createMediaSegmentJobs(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Tag' => 'Segment',
        'QueueId' => 'p81e648af2aee496885707ca0xxxxxxxxx',
        'Input' => array(
            'Object' => 'video01.mp4'
        ),
        'Operation' => array(
            'Segment' => array(
                'Format' => 'mkv',
                'Duration' => '5',
                'HlsEncrypt' => array(
                    'IsHlsEncrypt' => 'false',
                    'UriKey' => '',
                ),
            ),
            'Output' => array(
                'Region' => $region,
                'Bucket' => 'examplebucket-125000000',
                'Object' => 'Segment-trans${Number}.mkv',
            ),
//            'UserData' => 'xxx', // 透传用户信息
//            'JobLevel' => '0', // 任务优先级，级别限制：0 、1 、2。级别越大任务优先级越高，默认为0
        ),
        'CallBack' => '',
    ));
    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
