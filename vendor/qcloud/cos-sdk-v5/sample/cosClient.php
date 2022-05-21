<?php

require dirname(__FILE__) . '/../vendor/autoload.php';

$secretId = "SECRETID"; //替换为用户的 secretId，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$secretKey = "SECRETKEY"; //替换为用户的 secretKey，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$region = "ap-beijing"; //替换为用户的 region，已创建桶归属的region可以在控制台查看，https://console.cloud.tencent.com/cos5/bucket
$token = "COS_TMPTOKEN"; //如果使用永久密钥不需要填入token，如果使用临时密钥需要填入，临时密钥生成和使用指引参见https://cloud.tencent.com/document/product/436/14048
$cosClient = new Qcloud\Cos\Client(
    array(
        'region' => $region, //园区
        'schema' => 'https', //协议头部，默认为http
        'timeout' => 10, //超时时间
        'connect_timeout' => 10, //连接超时时间
        'ip' => '', //ip
        'port' => '', //端口
        'endpoint' => '', //endpoint
        'domain' => '', //domain可以填写用户自定义域名，或者桶的全球加速域名
        'proxy' => '', //代理服务器
        'retry' => 10, //重试次数
        'userAgent' => '', //UA
        'allow_redirects' => false, //是否follow302
        'credentials'=> array(
            'secretId'  => $secretId ,
            'secretKey' => $secretKey,
            'token'     => $token,
            'anonymous' => true, //匿名模式
        )
    )
);
