<?php

require_once("../ucloud/proxy.php");

//存储空间名
$bucket = "your bucket";
//上传至存储空间后的文件名称(请不要和API公私钥混淆)
$key    = "your key";
//待上传文件的本地路径
$file   = "local file path";

//该接口适用于0-10MB小文件,更大的文件建议使用分片上传接口
list($data, $err) = UCloud_PutFile($bucket, $key, $file);
if ($err) {
	echo "error: " . $err->ErrMsg . "\n";
	echo "code: " . $err->Code . "\n";
	exit;
}
echo "ETag: " . $data['ETag'] . "\n";
