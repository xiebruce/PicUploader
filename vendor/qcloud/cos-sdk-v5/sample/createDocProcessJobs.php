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
    $result = $cosClient->createDocProcessJobs(array(
        'Bucket' => 'examplebucket-1250000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Tag' => 'DocProcess', //任务的 Tag：DocProcess 固定值
        'QueueId' => 'pd8e422a2ea134165a92f2012ea43****', //任务所在的队列 ID
        'Input' => array(
            'Object' => 'Append功能测试.pdf' //待操作的文件对象
        ),
        'Operation' => array(
            'DocProcess' => array(
                'SrcType' => 'pdf', //源数据的后缀类型
                'TgtType' => 'png', //转换输出目标文件类型
                'SheetId' => 0, //表格文件参数，转换第 X 个表，默认为1
                'StartPage' => 1, //从第 X 页开始转换，默认为1
                'EndPage' => 3, //转换至第 X 页，默认为-1，即转换全部页
                'ImageParams' => '', //转换后的图片处理参数
                'DocPassword' => '', //Office 文档的打开密码
                'Comments' => 0, //是否隐藏批注和应用修订，默认为 0
                'PaperDirection' => 0, //表格文件转换纸张方向，默认为0
                'Quality' => 100, //生成预览图的图片质量，取值范围 [1-100]，默认值100
                'Zoom' => 100, //预览图片的缩放参数，取值范围[10-200]， 默认值100
            ),
            'Output' => array(
                'Region' => $region, //存储桶的地域
                'Bucket' => 'examplebucket-1250000000', //存储结果的存储桶
                'Object' => 'pic-${Page}.jpg', //输出文件路径
            ),
        ),
    ));
    // 请求成功
    print_r($result);
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
