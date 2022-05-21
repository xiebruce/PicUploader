<?php

require dirname(__FILE__) . '/../vendor/autoload.php';

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
    $result = $cosClient->putBucketReferer(
        array(
            'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
            'Status' => 'Enabled', //是否开启防盗链，枚举值：Enabled、Disabled
            'RefererType' => 'White-List', //防盗链类型，枚举值：Black-List、White-List
            'DomainList' => array(
                'Domains' => array(
                     '*.qq.com',
                     '*.qcloud.com',
                )
            ), //生效域名列表
//            'EmptyReferConfiguration' => 'Allow',//是否允许空 Referer 访问，枚举值：Allow、Deny，默认值为 Deny
        )
    );
    // 请求成功
    echo($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
