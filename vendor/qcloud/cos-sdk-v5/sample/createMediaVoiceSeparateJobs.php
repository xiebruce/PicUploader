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
    // 提交人声分离任务 https://cloud.tencent.com/document/product/436/58341
    // start --------------- 使用模版 ----------------- //
    $result = $cosClient->createMediaVoiceSeparateJobs(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Tag' => 'VoiceSeparate',
        'QueueId' => '',
        'CallBack' => '',
        'Input' => array(
            'Object' => 'test.mp3'
        ),
        'Operation' => array(
            'TemplateId' => '',
            'Output' => array(
                'Region' => $region,
                'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
                'Object' => 'VoiceSeparate01.mp3',
                'AuObject' => 'VoiceSeparate02.mp3',
            ),
//            'UserData' => 'xxx', // 透传用户信息
//            'JobLevel' => '0', // 任务优先级，级别限制：0 、1 、2。级别越大任务优先级越高，默认为0
        ),
    ));
    // 请求成功
    print_r($result);
    // end --------------- 使用模版 ----------------- //

    // start --------------- 自定义参数 ----------------- //
    $result = $cosClient->createMediaVoiceSeparateJobs(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Tag' => 'VoiceSeparate',
        'QueueId' => '',
        'CallBack' => '',
        'Input' => array(
            'Object' => 'test.mp3'
        ),
        'Operation' => array(
            'Output' => array(
                'Region' => $region,
                'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
                'Object' => 'VoiceSeparate01.mp3',
                'AuObject' => 'VoiceSeparate02.mp3',
            ),
            'VoiceSeparate' => array(
                'AudioMode' => 'AudioAndBackground',
                'AudioConfig' => array(
                    'Codec' => 'mp3',
                    'Samplerate' => '11025',
                    'Bitrate' => '256',
                    'Channels' => '2',
                ),
            ),
//            'UserData' => 'xxx', // 透传用户信息
//            'JobLevel' => '0', // 任务优先级，级别限制：0 、1 、2。级别越大任务优先级越高，默认为0
        ),
    ));
    // 请求成功
    print_r($result);
    // end --------------- 自定义参数 ----------------- //
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
