<?php

require dirname(__FILE__) . '/../vendor/autoload.php';

$secretId = "SECRETID"; //替换为用户的 secretId，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$secretKey = "SECRETKEY"; //替换为用户的 secretKey，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$region = "ap-beijing"; //替换为用户的 region，已创建桶归属的region可以在控制台查看，https://console.cloud.tencent.com/cos5/bucket
$cosClient = new Qcloud\Cos\Client(
    array(
        'region' => $region,
        'schema' => 'https', // 审核时必须为https
        'credentials' => array(
            'secretId' => $secretId,
            'secretKey' => $secretKey)));
try {
    $result = $cosClient->detectImages(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Inputs' => array(
            array(
                'Object' => 'test01.png', // 桶文件
//                'Interval' => '', // 可选 审核 GIF 时使用 截帧的间隔
//                'MaxFrames' => '', // 可选 针对 GIF 动图审核的最大截帧数量，需大于0。
//                'DataId' => 'aaa', // 可选 图片标识，该字段在结果中返回原始内容，长度限制为512字节
            ),
            array(
                'Url' => 'http://example.com/test.png', // 图片URL
//                'Interval' => 5, // 可选 审核 GIF 时使用 截帧的间隔
//                'MaxFrames' => 5, // 可选 针对 GIF 动图审核的最大截帧数量，需大于0。
//                'DataId' => 'bbb', // 可选 图片标识，该字段在结果中返回原始内容，长度限制为512字节
            ),
        ),
//        'Conf' => array(
//            'BizType' => '' // 可选 定制化策略，不传走默认策略
//            'DetectType' => 'Porn,Ads', // 可选 不填走默认策略 或 定制化策略，四种参数：Porn,Ads等，可使用多种规则，注意规则间不要加空格
//        ) // 可选 在DetectType/BizType都不传的情况下，走默认策略及默认审核场景。
    ));
    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
