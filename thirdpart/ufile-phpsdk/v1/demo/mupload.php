<?php

require_once('../ucloud/proxy.php');

//存储空间名
$bucket = 'your bucket';
//上传至存储空间后的文件名称(请不要和API公私钥混淆)
$key    = 'your key';
//待上传文件的本地路径
$file   = 'local file path';

//初始化分片上传,获取本地上传的uploadId和分片大小
list($data, $err) = UCloud_MInit($bucket, $key);
if ($err)
{
	echo "error: " . $err->ErrMsg . "\n";
	echo "code: " . $err->Code . "\n";
	exit;
}

$uploadId = $data['UploadId'];
$blkSize  = $data['BlkSize'];
echo "UploadId: " . $uploadId . "\n";
echo "BlkSize:  " . $blkSize . "\n";

//数据上传
list($etagList, $err) = UCloud_MUpload($bucket, $key, $file, $uploadId, $blkSize);
if ($err) {
	echo "error: " . $err->ErrMsg . "\n";
	echo "code: " . $err->Code . "\n";
	exit;
}

//完成上传
list($data, $err) = UCloud_MFinish($bucket, $key, $uploadId, $etagList);
if ($err) {
	echo "error: " . $err->ErrMsg . "\n";
	echo "code: " . $err->Code . "\n";
	exit;
}
echo "Etag:     " . $data['ETag'] . "\n";
echo "FileSize: " . $data['FileSize'] . "\n";
