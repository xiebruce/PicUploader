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
$time = 3.14;
$local_path = "/data/exampleobject/test.jpg";
try {
    /*
     * 如果访问400，media bucket unbinded, bucket's host is unavailable
     * 请先在控制台开启媒体处理开关
     */
    $result = $cosClient->getSnapshot(
        array(
            'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
            'Key' =>'exampleobject', //桶中的媒体文件,如test.mp4
            'ci-process' => 'snapshot', //操作类型，固定使用 snapshot
            'Time' => $time, //截图的时间点，单位为秒
            'SaveAs' => $local_path, //本地保存路径
//          'Width' => 0,
//          'Height' => 0,
//          'Format' => 'jpg',
//          'Rotate' => 'auto',
//          'Mode' => 'exactframe',
        )
    );
    // 请求成功
    echo($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
