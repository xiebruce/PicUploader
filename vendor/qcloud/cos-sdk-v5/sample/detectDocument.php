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
    // 存储桶文档审核
    $result = $cosClient->detectDocument(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Input' => array(
            'Object' => 'test01.docx',
//            'Type' => 'docx',
//            'DataId' => '', // 选填 该字段在审核结果中会返回原始内容，长度限制为512字节。您可以使用该字段对待审核的数据进行唯一业务标识。
        ),
//        'Conf' => array(
//            'BizType' => '',
//            'DetectType' => 'Porn,Terrorism,Politics,Ads', // 选填，在只有BizType时走设定策略的审核场景
//            'Callback' => '', // 回调URL 选填
//        ), // 选填 在DetectType/BizType都不传的情况下，走默认策略及默认审核场景。
    ));

    // 文档URL审核
    $result = $cosClient->detectDocument(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Input' => array(
            'Url' => 'https://example.com/test01.docx',
//            'Type' => 'docx',
//            'DataId' => '', // 选填 该字段在审核结果中会返回原始内容，长度限制为512字节。您可以使用该字段对待审核的数据进行唯一业务标识。
        ),
//        'Conf' => array(
//            'BizType' => '',
//            'DetectType' => 'Porn,Terrorism,Politics,Ads', // 选填，在只有BizType时走设定策略的审核场景
//            'Callback' => '', // 回调URL 选填
//        ), // 选填 在DetectType/BizType都不传的情况下，走默认策略及默认审核场景。
    ));
    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
