<?php
define("ENCRYPTPTION_STORAGE_MODE","InstructionFile");
require_once "../Ks3EncryptionClient.class.php";
require_once "../Ks3Client.class.php";
$bucket = "test-encryption";
$keyprefix = "php/";

$filename = "secret.key";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize ($filename));
fclose($handle);

$client = new Ks3EncryptionClient("lMQTr0hNlMpB0iOk/i+x","D4CsYLs75JcWEjbiI22zR3P7kJ/+5B1qdEje7A7I",$contents);
putObjectByContentAndGetObjectUsingInstruction($client,$bucket,$keyprefix);
putObjectByFileAndGetObjectUsingFile($client,$bucket,$keyprefix);
multipartUpload($client,$bucket,$keyprefix);
copyAnddeleteObject($client,$bucket,$keyprefix);

function putObjectByContentAndGetObjectUsingInstruction($client,$bucket,$keyprefix){
	$content = EncryptionUtil::genereateOnceUsedKey(rand(100,1000));
	$args = array(
		"Bucket"=>$bucket,
		"Key"=>$keyprefix."EOFile",
		"ACL"=>"public-read",
		"Content"=>$content
	);
	$client->putObjectByContent($args);
	rangeGetAndCheckMd5($client,$bucket,$keyprefix."EOFile",
			"D://testdown/down",base64_encode(md5($args["Content"])));
}
function putObjectByFileAndGetObjectUsingFile($client,$bucket,$keyprefix){

	$args = array(
		"Bucket"=>$bucket,
		"Key"=>$keyprefix."EOFile",
		"ACL"=>"public-read",
		"Content"=>array(
			"content"=>"D://IMG.jpg"
			)
	);
	$client->putObjectByFile($args);
	rangeGetAndCheckMd5($client,$bucket,$keyprefix."EOFile",
			"D://testdown/down",base64_encode(md5_file("D://IMG.jpg")));
}
function multipartUpload($client,$bucket,$keyprefix){
	//初始化分开上传，获取uploadid
    $args = array(
        "Bucket"=>$bucket,
        "Key"=>$keyprefix."EOFile",
    );
    $uploadid = $client->initMultipartUpload($args);
    $uploadid = $uploadid["UploadId"];//获取到uploadid
        //开始上传

    $file = "D://IMG.jpg";//要上传的文件
    $partsize = 1024*100;
    $resource = fopen($file,"r");
    $stat = fstat($resource);
    $total = $stat["size"];//获取文件的总大小
    fclose($resource);
    $count = (int)(($total-1)/$partsize)+1;//计算文件需要分几块上传
    for($i = 0;$i < $count;$i++){
        //依次上传每一块
        echo "upload".$i."\r\n";
        $args=array(
            "Bucket"=>$bucket,
        	"Key"=>$keyprefix."EOFile",
        	"LastPart"=>($i===$count-1),
            "Options"=>array(
                "partNumber"=>$i+1,
                "uploadId"=>$uploadid
            ),
            "ObjectMeta"=>array(
                "Content-Length"=>min($partsize,$total-$partsize*$i)//每次上传$partsize大小
            ),
            "Content"=>array(
                "content"=>$file,
                "seek_position"=>$partsize*$i//跳过之前已经上传的
            )
        );
        $etag = $client->uploadPart($args);
        $etag = $etag["ETag"];
    }
    $parts = $client->listParts(array("Bucket"=>$bucket,"Key"=>$keyprefix."EOFile","Options"=>array("uploadId"=>$uploadid)));
    //结束上传
    $args=array(
        "Bucket"=>$bucket,
        "Key"=>$keyprefix."EOFile",
        "Options"=>array("uploadId"=>$uploadid),
        "Parts"=>$parts["Parts"]//使用之前列出的块完成分开上传
    );
    $result = $client->completeMultipartUpload($args);

    rangeGetAndCheckMd5($client,$bucket,$keyprefix."EOFile",
    	"D://testdown/down",base64_encode(md5_file("D://IMG.jpg")));
}
function copyAnddeleteObject($client,$bucket,$keyprefix){
	$content = EncryptionUtil::genereateOnceUsedKey(rand(100,1000));
	$args = array(
		"Bucket"=>$bucket,
		"Key"=>$keyprefix."EOFile",
		"ACL"=>"public-read",
		"Content"=>$content
	);
	$client->putObjectByContent($args);

	if($client->objectExists(array("Bucket"=>$bucket,"Key"=>$keyprefix."EOFileCopy")))
		$client->deleteObject(array("Bucket"=>$bucket,"Key"=>$keyprefix."EOFileCopy"));
	if($client->objectExists(array("Bucket"=>$bucket,"Key"=>$keyprefix."EOFileCopy.instruction")))
		$client->deleteObject(array("Bucket"=>$bucket,"Key"=>$keyprefix."EOFileCopy.instruction"));

	$copyReq = array(
		"Bucket"=>$bucket,
		"Key"=>$keyprefix."EOFileCopy",
		"CopySource"=>array(
			"Bucket"=>$bucket,
			"Key"=>$keyprefix."EOFile"
			)
		);
	$client->copyObject($copyReq);

	if(!$client->objectExists(array("Bucket"=>$bucket,"Key"=>$keyprefix."EOFileCopy")))
		throw new Exception("not found ".$keyprefix."EOFileCopy");
	if(!$client->objectExists(array("Bucket"=>$bucket,"Key"=>$keyprefix."EOFileCopy.instruction")))
		throw new Exception("not found ".$keyprefix."EOFileCopy.instruction");

	$client->deleteObject(array("Bucket"=>$bucket,"Key"=>$keyprefix."EOFileCopy"));

	if($client->objectExists(array("Bucket"=>$bucket,"Key"=>$keyprefix."EOFileCopy")))
		throw new Exception("found ".$keyprefix."EOFileCopy");
	if($client->objectExists(array("Bucket"=>$bucket,"Key"=>$keyprefix."EOFileCopy.instruction")))
		throw new Exception("found ".$keyprefix."EOFileCopy.instruction");
}
function rangeGetAndCheckMd5($client,$bucket,$key,$file,$expectedMd5){
	$args = array("Bucket"=>$bucket,"Key"=>$key);
	$meta = $client->getObjectMeta($args);
	$contentlength = $meta["ObjectMeta"]["Content-Length"];

	$filelist = array();

	for($begin = 0;$begin <$contentlength;){
		$index = rand((int)($contentlength/20),(int)($contentlength/10));
		$range = array("start"=>$begin,"end"=>$begin+$index);
		$destFile = $file.$begin."-".($begin+$index);
		array_push($filelist,$destFile);
		$begin += ($index+1);
		$args = array(
			"Bucket"=>$bucket,
			"Key"=>$key,
			"Range"=>$range,
			"WriteTo"=>$destFile
		);
		$client->getObject($args);
	}

	foreach ($filelist as $key => $value) {
		$handle = fopen($value,"r");
		$size = filesize($value);
		if($size > 0){
			$content = fread($handle,$size);
			file_put_contents($file,$content,FILE_APPEND);
		}
		fclose($handle);
		@unlink($value);
	}
	$md5 = base64_encode(md5_file($file));
	if($md5 != $expectedMd5)
		throw new Exception("file md5 check error expected ".$expectedMd5." ,actual ".$md5, 1);
	@unlink($file);	
}
