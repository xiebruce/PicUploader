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
    //存储桶视频审核
    $result = $cosClient->detectVideo(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Input' => array(
            'Object' => 'test.mp4', // 存储桶文件
//            'DataId' => '', // 可选 该字段在审核结果中会返回原始内容，长度限制为512字节。您可以使用该字段对待审核的数据进行唯一业务标识。
        ),
        'Conf' => array(
//            'BizType' => '', // 可选 定制化策略
//            'DetectType' => 'Porn,Terrorism,Politics,Ads', // 可选 不传走默认策略或定制化策略
//            'Callback' => '', // 可选 回调URL
//            'DetectContent' => 1, // 可选 用于指定是否审核视频声音，当值为0时：表示只审核视频画面截图；值为1时：表示同时审核视频画面截图和视频声音。默认值为0。
//            'CallbackVersion' => 'Detail', // 可选 回调内容的结构，有效值：Simple（回调内容包含基本信息）、Detail（回调内容包含详细信息）。默认为 Simple。
            'Snapshot' => array(
//                'Mode' => 'Average', // 可选 截帧模式，默认值为 Interval。Interval 表示间隔模式；Average 表示平均模式；Fps 表示固定帧率模式。
//                'TimeInterval' => 50, // 可选 视频截帧频率
                'Count' => '3', // 视频截帧数量
            ),
        ),
    ));

    //视频url审核
    $videoUrl = 'http://example.com/test.mp4';
    $result = $cosClient->detectVideo(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Input' => array(
            'Url' => $videoUrl, // 视频url
//            'DataId' => '', // 可选 该字段在审核结果中会返回原始内容，长度限制为512字节。您可以使用该字段对待审核的数据进行唯一业务标识。
        ),
        'Conf' => array(
//            'BizType' => '', // 可选 定制化策略
//            'DetectType' => 'Porn,Terrorism,Politics,Ads', // 可选 不传走默认策略或定制化策略
//            'Callback' => '', // 可选 回调URL
//            'DetectContent' => 1, // 可选 用于指定是否审核视频声音，当值为0时：表示只审核视频画面截图；值为1时：表示同时审核视频画面截图和视频声音。默认值为0。
//            'CallbackVersion' => 'Detail', // 可选 回调内容的结构，有效值：Simple（回调内容包含基本信息）、Detail（回调内容包含详细信息）。默认为 Simple。
            'Snapshot' => array(
//                'Mode' => 'Average', // 可选 截帧模式，默认值为 Interval。Interval 表示间隔模式；Average 表示平均模式；Fps 表示固定帧率模式。
//                'TimeInterval' => 50, // 可选 视频截帧频率
                'Count' => '3', // 视频截帧数量
            ),
        ),
    ));

    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
