<?php

require dirname(__FILE__, 2) . '/vendor/autoload.php';

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
    $result = $cosClient->detectLiveVideo(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Type' => 'live_video',
        'Input' => array(
            'Url' => 'rtmp://example.com/live/123', // 直播流地址
//            'DataId' => '',
//            'UserInfo' => array(
//                'TokenId' => '',
//                'Nickname' => '',
//                'DeviceId' => '',
//                'AppId' => '',
//                'Room' => '',
//                'IP' => '',
//                'Type' => '',
//            ),
        ),
        'Conf' => array(
            'Callback' => '',
//            'CallbackType' => 1,
            'BizType' => '07d41bbb5a3a93dca4xxxxxxxxxxx', // 直播流审核 BizType 必填，可联系工作人员生成后使用
        ),
    ));
    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
