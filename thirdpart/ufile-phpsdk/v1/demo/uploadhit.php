<?php

require_once('../ucloud/proxy.php');

//存储空间
$bucket = 'your bucket';
//上传至存储空间后的文件名称(请不要和API公私钥混淆)
$key    = 'your key';
//待秒传的本地文件路径
$file   = 'local file path';

//该接口不是上传接口.如果秒传返回非200错误码,意味着该文件在服务器不存在
//需要继续调用其他上传接口完成上传操作
list($data, $err) = UCloud_UploadHit($bucket, $key, $file);
if ($err) {
	echo "error: " . $err->ErrMsg . "\n";
	echo "code: " . $err->Code . "\n";
	exit;
}

echo "upload hit success\n";
