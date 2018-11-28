<?php

require_once("../ucloud/proxy.php");

//存储空间名
$bucket = "your bucket";
//上传至存储空间后的文件名称(请不要和API公私钥混淆)
$key    = "your key";

list($data, $err) = UCloud_Delete($bucket, $key);
if ($err) {
	echo "error: " . $err->ErrMsg . "\n";
	echo "code: " . $err->Code . "\n";
	exit;
}

echo "delete $bucket/$key success\n";
