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
    // 多任务接口 https://cloud.tencent.com/document/product/436/58335
    $result = $cosClient->CreateMediaJobs(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Tag' => 'Transcode', // 可选，单一任务时，优先以Operation.Tag为准，当Operation无Tag参数时，该参数生效
        'QueueId' => 'paaf4fce5521a40888a303xxxxxxxxxxxxxx',
        'CallBack' => '',
        'Input' => array(
            'Object' => 'example.mp4'
        ),
        'Operation' => array(
            array(
                'Tag' => 'Transcode',
                'TemplateId' => 't04e1ab86554984f1aa17cxxxxxxxxxxxxxx',
                'Output' => array(
                    'Region' => $region,
                    'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
                    'Object' => 'video01.mp4',
                ),
                'WatermarkTemplateId' => array(
                    't112d18d9b2a9b430e91dxxxxxxxxxxxxxx',
                ),
            ),
            array(
                'Tag' => 'Transcode',
                'TemplateId' => 't04e1ab86554984f1aa17xxxxxxxxxxxxxx',
                'Output' => array(
                    'Region' => $region,
                    'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
                    'Object' => 'video02.mp4',
                ),
                'WatermarkTemplateId' => array(
                    't1bf713bb5c6a5496e859axxxxxxxxxxxxxx',
                ),
            ),
        ),
    ));
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
