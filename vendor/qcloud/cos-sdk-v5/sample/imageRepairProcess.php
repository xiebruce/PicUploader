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
    // --------------------- 1. 保存效果图到本地 ------------------------------ //
    $imageUrl = 'https://www.xxx.com/xxx.jpg';
    $result = $cosClient->imageRepairProcess(array(
        'Bucket' => 'examplebucket-1250000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => 'test.jpg',
        'ci-process' => 'ImageRepair',
        'MaskPic' => base64_encode($imageUrl),
//        'MaskPoly' => base64_encode('[[[200, 200], [400, 200], [400, 400], [200, 400]]]'),
        'SaveAs' => '/tmp/imageRepair.jpg' // 本地保存路径
    ));
    // 请求成功
    print_r($result);
    // --------------------- 1. 保存效果图到本地 ------------------------------ //

    // --------------------- 2. 上传时处理 ------------------------------ //
    $ciProcessParams = new Qcloud\Cos\ImageParamTemplate\CIProcessTransformation('ImageRepair');
    $ciProcessParams->addParam('MaskPic', 'https://www.xxx.com/xxx.jpg', true); // MaskPic/MaskPoly 二选一
//    $ciProcessParams->addParam('MaskPoly', '[[[200, 200], [400, 200], [400, 400], [200, 400]]]', true); // MaskPic/MaskPoly 二选一
    $picOperations = new Qcloud\Cos\ImageParamTemplate\PicOperationsTransformation();
    $picOperations->setIsPicInfo(1); // is_pic_info
    $picOperations->addRule($ciProcessParams, 'output.jpg', 'examplebucket-1250000000'); // rules
    $result = $cosClient->putObject(array(
        'Bucket' => 'examplebucket-1250000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => 'imageRepair.jpg',
        'Body' => fopen('/tmp/imageRepair.jpg', 'rb'), // 本地文件
        'PicOperations' => $picOperations->queryString(),
    ));
    // 请求成功
    print_r($result);
    // --------------------- 2. 上传时处理 ------------------------------ //

    // --------------------- 3. 云上数据处理 ------------------------------ //
    $ciProcessParams = new Qcloud\Cos\ImageParamTemplate\CIProcessTransformation('ImageRepair');
    $ciProcessParams->addParam('MaskPic', 'https://www.xxx.com/xxx.jpg', true); // MaskPic/MaskPoly 二选一
//    $ciProcessParams->addParam('MaskPoly', '[[[200, 200], [400, 200], [400, 400], [200, 400]]]', true); // MaskPic/MaskPoly 二选一
    $picOperations = new Qcloud\Cos\ImageParamTemplate\PicOperationsTransformation();
    $picOperations->setIsPicInfo(1); // is_pic_info
    $picOperations->addRule($ciProcessParams, 'output.jpg', 'examplebucket-1250000000'); // rules
    $result = $cosClient->ImageProcess(array(
        'Bucket' => 'examplebucket-1250000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Key' => 'test.jpg',
        'PicOperations' => $picOperations->queryString(),
    ));
    // 请求成功
    print_r($result);
    // --------------------- 3. 云上数据处理 ------------------------------ //
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
