<?php

require_once("../ucloud/conf.php");
require_once("../ucloud/http.php");
require_once("../ucloud/proxy.php");

//存储空间名
$bucket = "your bucket";
//上传至存储空间后的文件名称(请不要和API公私钥混淆)
$key    = "your key";
//待上传文件的本地路径
$file   = "local file path";

//该接口适用于web的POST表单上传,本SDK为了完整性故带上该接口demo.
//服务端上传建议使用分片上传接口,而非POST表单
list($data, $err) = UCloud_MultipartForm($bucket, $key, $file);
if ($err) {
	echo "error: " . $err->ErrMsg . "\n";
	echo "code: " . $err->Code . "\n";
	exit;
}
echo "ETag: " . $data['ETag'] . "\n";
