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
    // 图片处理-文字水印 https://cloud.tencent.com/document/product/460/6951
    $textWatermarkRule = new Qcloud\Cos\ImageParamTemplate\TextWatermarkTemplate();
    $textWatermarkRule->setText('水印内容'); // 水印内容
    $textWatermarkRule->setFont('tahoma.ttf'); // 水印字体
    $textWatermarkRule->setFontsize(13); // 水印文字字体大小
    $textWatermarkRule->setFill('#3D3D3D'); // 字体颜色，缺省为灰色，需设置为十六进制 RGB 格式（例如 #FF0000）
    $textWatermarkRule->setDissolve(90); // 文字透明度，取值1 - 100 ，默认90（90%不透明度）
    $textWatermarkRule->setGravity('SouthEast'); // 文字水印位置，九宫格位置（参见九宫格方位图），默认值 SouthEast
    $textWatermarkRule->setDx(10); // 水平（横轴）边距，单位为像素，缺省值为0
    $textWatermarkRule->setDy(10); // 垂直（纵轴）边距，单位为像素，默认值为0
    $textWatermarkRule->setBatch(1); // 平铺水印功能，可将文字水印平铺至整张图片。值为1时，表示开启平铺水印功能
    $textWatermarkRule->setDegree(10); // 当 batch 值为1时生效。文字水印的旋转角度设置，取值范围为0 - 360，默认0
    $textWatermarkRule->setShadow(10); // 文字阴影效果，有效值为[0,100]，默认为0，表示无阴影

    $picOperations = new Qcloud\Cos\ImageParamTemplate\PicOperationsTransformation();
    $picOperations->setIsPicInfo(1); // is_pic_info
    $picOperations->addRule($textWatermarkRule, "output.png"); // rules

    // -------------------- 1. 下载时处理 -------------------- //
//    $downloadUrl = $cosClient->getObjectUrl('examplebucket-125000000', 'xxx.jpg'); // 获取下载链接
    $downloadUrl = 'https://examplebucket-1250000000.cos.ap-guangzhou.myqcloud.com/xxx.jpg'; // 私有图片处理方式同上，仅增加签名部分，并与图片处理参数以“&”连接
    $rule = $textWatermarkRule->queryString();
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
