<?php
//更加详细的表单上传请参考js sdk
require_once "../Ks3Client.class.php";

$client = new Ks3Client("","");
$bucket_name = "phpsdktestlijunwei";
if(!$client->bucketExists(array("Bucket"=>$bucket_name))){
    $client->createBucket(array("Bucket"=>$bucket_name));
}


$key = 'formuploadtest/@中文.txt';
$host = "kss.ksyun.com";
$host_uri = "http://".$host."/".$bucket_name;
$redirect = $host_uri;

//将所有能确定值的表单项都放在该数组中
$postData = array(
	"key"=>$key,
	"success_action_redirect"=>$redirect,
	"Content-Type"=>"text/html",
	);
//将不能确定值的表单项都放在该数组中
$unknowData = array(
	"random"
	);
$result = $client->postObject($bucket_name,$postData,$unknowData);
print_r($result);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<form action="<?php echo $host_uri;?>" method="post" enctype="multipart/form-data">
Key to upload: <input type="input" name="key" value="<?php echo $key;?>" /><br />
<input type="hidden" name="success_action_redirect" value="<?php echo $redirect;?>" />
<input type="hidden" name="Content-Type" value="text/html" />
<input type="hidden" name="random" value="vfegf34egf3" />
<input type="hidden" name="KSSAccessKeyId" value="<?php echo $result["KSSAccessKeyId"];?>" />
<input type="hidden" name="Policy" value="<?php echo $result["Policy"];?>" />
<input type="hidden" name="Signature" value="<?php echo $result["Signature"];?>" />
File: <input type="file" name="file" /> <br />
<!-- The elements after this will be ignored -->
<input type="submit" name="submit" value="Upload to KSS S3" />
</form>
</html>