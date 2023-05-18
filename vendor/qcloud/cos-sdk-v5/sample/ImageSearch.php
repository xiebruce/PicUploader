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
    // 图片搜索接口 https://cloud.tencent.com/document/product/460/63901
    $result = $cosClient->imageSearch(array(
        'Bucket' => 'examplebucket-1250000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => '', // ObjectKey
        'MatchThreshold' => 0, // 出参 Score 中，只有超过 MatchThreshold 值的结果才会返回。默认为0
        'Offset' => 0, // 起始序号，默认值为0
        'Limit' => 10, // 返回数量，默认值为10，最大值为100
        'Filter' => '', // 针对入库时提交的 Tags 信息进行条件过滤。支持>、>=、<、<=、=、!=，多个条件之间支持 AND 和 OR 进行连接
    ));
    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
