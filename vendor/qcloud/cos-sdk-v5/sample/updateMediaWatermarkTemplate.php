<?php

require dirname(__FILE__, 2) . '/vendor/autoload.php';

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
    // https://cloud.tencent.com/document/product/436/54036 更新水印模板
    // 文本
    $result = $cosClient->updateMediaWatermarkTemplate(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => '', // TemplateId
        'Tag' => 'Watermark',
        'Name' => 'Watermark-Template-Name',
        'Watermark' => array(
            'Type' => 'Text',
            'Pos' => 'TopRight',
            'LocMode' => 'Absolute',
            'Dx' => '128',
            'Dy' => '128',
            'StartTime' => '',
            'EndTime' => '',
            'Text' => array(
                'FontSize' => '30',
                'FontType' => 'simfang',
                'FontColor' => '0x000000',
                'Transparency' => '30',
                'Text' => '水印内容',
            ),
        ),
    ));
    // 请求成功
    print_r($result);

    // 图片
    $result = $cosClient->updateMediaWatermarkTemplate(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => '', // TemplateId
        'Tag' => 'Watermark',
        'Name' => 'Watermark-Template-Name2-1',
        'Watermark' => array(
            'Type' => 'Image',
            'Pos' => 'TopRight',
            'LocMode' => 'Absolute',
            'Dx' => '128',
            'Dy' => '128',
            'StartTime' => '',
            'EndTime' => '',
            'Image' => array(
                'Url' => 'https://examplebucket-125000000.cos.ap-guangzhou.myqcloud.com/test01.png',
                'Mode' => 'Proportion',
                'Width' => '10',
                'Height' => '',
                'Transparency' => '100',
                'Background' => '',
            ),
        ),
    ));
    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
