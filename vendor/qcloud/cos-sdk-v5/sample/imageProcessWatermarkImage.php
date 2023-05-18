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
    // 图片处理-图片水印 https://cloud.tencent.com/document/product/460/6930
    $imageWatermarkRule = new Qcloud\Cos\ImageParamTemplate\ImageWatermarkTemplate();
    $imageWatermarkRule->setImage('https://www.xxx.com/xxx.jpg'); // 水印图片地址
    $imageWatermarkRule->setGravity('SouthEast'); // 图片水印位置
    $imageWatermarkRule->setDx(10); // 水平（横轴）边距，单位为像素，缺省值为0
    $imageWatermarkRule->setDy(10); // 垂直（纵轴）边距，单位为像素，默认值为0
    $imageWatermarkRule->setBlogo(1); // 水印图适配功能，适用于水印图尺寸过大的场景（如水印墙）
    $imageWatermarkRule->setScatype(1); // 根据原图的大小，缩放调整水印图的大小
    $imageWatermarkRule->setSpcent(200); // 与 scatype 搭配使用
    $imageWatermarkRule->setDissolve(70); // 图片水印的透明度
    $imageWatermarkRule->setBatch(1); // 平铺水印功能，可将图片水印平铺至整张图片
    $imageWatermarkRule->setDegree(90); // 当 batch 值为1时生效。图片水印的旋转角度设置

    $picOperations = new Qcloud\Cos\ImageParamTemplate\PicOperationsTransformation();
    $picOperations->setIsPicInfo(1); // is_pic_info
    $picOperations->addRule($imageWatermarkRule, "output.png"); // rules

    // -------------------- 1. 下载时处理 -------------------- //
//    $downloadUrl = $cosClient->getObjectUrl('examplebucket-125000000', 'xxx.jpg'); // 获取下载链接
    $downloadUrl = 'https://examplebucket-1250000000.cos.ap-guangzhou.myqcloud.com/xxx.jpg'; // 私有图片处理方式同上，仅增加签名部分，并与图片处理参数以“&”连接
    $rule = $imageWatermarkRule->queryString();
    echo "{$downloadUrl}?{$rule}";
//    echo "{$downloadUrl}&{$rule}"; // 携带签名的图片地址以“&”连接
    // -------------------- 1. 下载时处理 -------------------- //

    // -------------------- 2. 上传时处理 -------------------- //
    $result = $cosClient->putObject(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => 'object.jpg',
        'Body' => fopen('/tmp/local.jpg', 'rb'), // 本地文件
        'PicOperations' => $picOperations->queryString(),
    ));
    // 请求成功
    print_r($result);
    // -------------------- 2. 上传时处理 -------------------- //

    // -------------------- 3. 云上数据处理 -------------------- //
    $result = $cosClient->ImageProcess(array(
        'Bucket' => 'examplebucket-1250000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => 'test.png',
        'PicOperations' => $picOperations->queryString(),
    ));
    // 请求成功
    print_r($result);
    // -------------------- 3. 云上数据处理 -------------------- //
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
