<?php
function rangeGetAndCheckMd5($client,$bucket,$key,$file,$expectedMd5){
	$args = array("Bucket"=>$bucket,"Key"=>$key);
	$meta = $client->getObjectMeta($args);
	$contentlength = $meta["ObjectMeta"]["Content-Length"];

	$filelist = array();

	for($begin = 0;$begin <$contentlength;){
		$index = rand((int)($contentlength/20),(int)($contentlength/4));
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
		//@unlink($value);
	}
	$md5 = md5_file($file);
	//@unlink($file);	
	if($md5 != $expectedMd5)
		throw new Exception("file md5 check error expected ".$expectedMd5." ,actual ".$md5, 1);
	foreach ($filelist as $key => $value) {
		@unlink($value);
	}
	@unlink($file);
}
function generateFile($sizeInBytes,$destFile){
	for($i = 0;$i < $sizeInBytes/10;$i++){
		$randpwd = "";  
		for ($j = 0; $j < 10; $j++)  
		{  
			$randpwd .= chr(mt_rand(33, 126));  
		}  
		file_put_contents($destFile,$randpwd,FILE_APPEND);
	}
}
?>