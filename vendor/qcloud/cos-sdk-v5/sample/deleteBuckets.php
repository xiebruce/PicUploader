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
    //列出所有buckets
    $buckets = $cosClient->listBuckets();

    //若bucket列表不为空则进行删除逻辑，先删除对象，再判断是否有上传的任务进行删除，最后删除桶
    if (!empty($buckets['Buckets'][0])) {
        foreach ($buckets['Buckets'][0]['Bucket'] as $key => $value) {
            $result = $cosClient->listObjects(array('Bucket' => $value['Name']));
            if (isset($result['Contents'])) {
                foreach ($result['Contents'] as $content) {
                    $cosClient->deleteObject(array('Bucket' => $value['Name'], 'Key' => $content['Key']));
                }
            }
            while(True){
                $result = $cosClient->ListMultipartUploads(
                    array('Bucket' => $value['Name']));
                if ($result['Uploads'] == array()) {
                    break;
                }
                foreach ($result['Uploads'] as $upload) {
                    try {
                        $cosClient->AbortMultipartUpload(
                            array('Bucket' => $value['Name'],
                                'Key' => $upload['Key'],
                                'UploadId' => $upload['UploadId']));
                    } catch (\Exception $e) {
                        print_r($e);
                    }
                }
            }
            $cosClient->deleteBucket(array('Bucket' => $value['Name']));
        }
    }
    print_r('DELETE ALL BUCKETS SUCCEED!');
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
