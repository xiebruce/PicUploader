<?php

require_once("../ucloud/proxy.php");

//存储空间名
$bucket = "your bucket";
//上传至存储空间后的文件名称(请不要和API公私钥混淆)
$key    = "your key";

function curl_file_get_contents($durl){  
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $durl);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回    
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回    
    $r = curl_exec($ch);  
    curl_close($ch);  
    return $r;  
}

/*
 * 访问公有Bucket的例子
 */
$url = UCloud_MakePublicUrl($bucket, $key);
echo "download url(public): ", $url . "\n";

/*
 * 访问私有Bucket的例子
 */
$url = UCloud_MakePrivateUrl($bucket, $key);
echo "download url(private): ", $url . "\n";

/*
 * 访问包含过期时间的私有Bucket例子
 */
$curtime = time();
$curtime += 60; // 有效期60秒
$url = UCloud_MakePrivateUrl($bucket, $key, $curtime);
$content = curl_file_get_contents($url);
echo "download file with expires: ", $url . "\n";
