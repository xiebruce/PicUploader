<?php

require dirname(__FILE__) . '/../vendor/autoload.php';

$secretId = "SECRETID"; //替换为用户的 secretId，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$secretKey = "SECRETKEY"; //替换为用户的 secretKey，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$region = "ap-beijing"; //替换为用户的 region，已创建桶归属的region可以在控制台查看，https://console.cloud.tencent.com/cos5/bucket
$cosClient = new Qcloud\Cos\Client(
    array(
        'region' => $region,
        'schema' => 'https', // 审核时必须为https
        'credentials'=> array(
            'secretId'  => $secretId ,
            'secretKey' => $secretKey)));
try {
    // start --------------- 桶文件审核 ----------------- //
    $result = $cosClient->detectAudio(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Input' => array(
            'Object' => 'sound01.mp3',
//            'DataId' => '', // 可选 该字段在审核结果中会返回原始内容，长度限制为512字节。您可以使用该字段对待审核的数据进行唯一业务标识。
        ),
//        'Conf' => array(
//            'BizType' => '', // 可选 定制化策略
//            'DetectType' => 'Porn,Terrorism,Politics,Ads', // 可选 若不传此参数，BizType为空时走默认策略，BizType不为空走定制化策略
//            'Callback' => '', // 可选 回调URL
//            'CallbackVersion' => '', // 可选 回调内容的结构，有效值：Simple（回调内容包含基本信息）、Detail（回调内容包含详细信息）。默认为 Simple。
//        ), // 可选 走默认策略及默认审核场景。
    ));
    // 请求成功
    print_r($result);
    // end --------------- 桶文件审核 ----------------- //

    // start --------------- 音频文件地址审核 ----------------- //
    $result = $cosClient->detectAudio(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Input' => array(
            'Url' => 'https://example.com/test.mp3',
//            'DataId' => '', // 可选 该字段在审核结果中会返回原始内容，长度限制为512字节。您可以使用该字段对待审核的数据进行唯一业务标识。
        ),
//        'Conf' => array(
//            'BizType' => '', // 可选 定制化策略
//            'DetectType' => 'Porn,Terrorism,Politics,Ads', // 可选 若不传此参数，BizType为空时走默认策略，BizType不为空走定制化策略
//            'Callback' => '', // 可选 回调URL
//            'CallbackVersion' => '', // 可选 回调内容的结构，有效值：Simple（回调内容包含基本信息）、Detail（回调内容包含详细信息）。默认为 Simple。
//        ), // 可选 走默认策略及默认审核场景。
    ));
    // 请求成功
    print_r($result);
    // end --------------- 音频文件地址审核 ----------------- //
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
