<?php

require dirname(__FILE__, 2) . '/vendor/autoload.php';

$secretId = "SECRETID"; //替换为用户的 secretId，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$secretKey = "SECRETKEY"; //替换为用户的 secretKey，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$region = "ap-beijing"; //替换为用户的 region，已创建桶归属的region可以在控制台查看，https://console.cloud.tencent.com/cos5/bucket
$cosClient = new Qcloud\Cos\Client(
    array(
        'region' => $region,
        'schema' => 'https', //协议头部，默认为http
        'credentials' => array(
            'secretId' => $secretId,
            'secretKey' => $secretKey)));
try {
    /**
     * 此接口已不再维护 2021.11.25
     * 图片审核建议使用 detectImage & detectImages 两个接口
     * 新增功能字段会在 detectImage & detectImages 接口维护
     */
    //存储桶图片审核
    $result = $cosClient->getObjectSensitiveContentRecognition(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => 'exampleobject',
        'DetectType' => 'porn,politics', //可选四种参数：porn,politics,terrorist,ads，可使用多种规则，注意规则间不要加空格
        'ci-process' => 'sensitive-content-recognition',
//      'Interval' => 5, // 审核gif时使用 截帧的间隔
//      'MaxFrames' => 5, // 针对 GIF 动图审核的最大截帧数量，需大于0。
//      'BizType' => '', // 审核策略
    ));
    // 请求成功
    print_r($result);


    //图片链接审核
    $imgUrl = 'https://test.jpg';
    $result = $cosClient->getObjectSensitiveContentRecognition(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => '/', // 链接图片资源路径写 / 即可
        'DetectType' => 'porn,ads',//可选四种参数：porn,politics,terrorist,ads，可使用多种规则，注意规则间不要加空格
        'DetectUrl' => $imgUrl,
        'ci-process' => 'sensitive-content-recognition',
//      'Interval' => 5, // 审核gif时使用 截帧的间隔
//      'MaxFrames' => 5, // 针对 GIF 动图审核的最大截帧数量，需大于0。
//      'BizType' => '', // 审核策略
    ));
    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
