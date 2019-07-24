<?php
class EncryptionUtil{
	public static $INSTRUCTION_SUFFIX = ".instruction";
	public static function genereateOnceUsedKey($length=32){
		$randpwd = "";  
		for ($i = 0; $i < $length; $i++)  
		{  
			$randpwd .= chr(mt_rand(33, 126));  
		}  
		return $randpwd;   
	}
	public static function encode_AES_ECB($data,$secret_key){
		$td = mcrypt_module_open(MCRYPT_RIJNDAEL_128,'',MCRYPT_MODE_ECB,'');

		$blocksize = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128,MCRYPT_MODE_ECB);
		$pad = $blocksize - (strlen($data) % $blocksize);
		$data = $data . str_repeat(chr($pad), $pad);

		$iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
		mcrypt_generic_init($td,$secret_key,$iv);
		$encrypted = mcrypt_generic($td,$data);
		mcrypt_generic_deinit($td);
		return $encrypted;
	}
	public static function decode_AES_ECB($data,$secret_key){
		$td = mcrypt_module_open(MCRYPT_RIJNDAEL_128,'',MCRYPT_MODE_ECB,'');
		$iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
		mcrypt_generic_init($td,$secret_key,$iv);
		$data = mdecrypt_generic($td,$data);
		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);

		$dec_s = strlen($data);
		$padding = ord($data[$dec_s-1]);
		$data = substr($data, 0, -$padding);

		return trim($data);
	}
	public static function getKeyEncryptionAlgm($encryptionMaterials){
		if(is_array($encryptionMaterials)){
			return "RSA";
		}else{
			return "AES";
		}
	}
	public static function getAdjustedRange($range,$blocksize){
		$a = $range["start"];
		$b = $range["end"];
		$a = $a - ($a%$blocksize)-$blocksize;
		if($a < 0)
			$a = 0;

		$b = $b+$blocksize-$b%$blocksize+$blocksize;

		return array("start"=>$a,"end"=>$b);
	}
	public static function encodeCek($encryptionMaterials,$cek){
		$encrypKeyAlg = EncryptionUtil::getKeyEncryptionAlgm($encryptionMaterials);
		if($encrypKeyAlg === "AES"){
			$secretKey = $encryptionMaterials;
			$encryptedSek = EncryptionUtil::encode_AES_ECB($cek,$secretKey);
			if(empty($encryptedSek))
				throw new Ks3ClientException("can not encode cek useing AES");
		}else if($encrypKeyAlg === "RSA"){
			$encryptedSek = "";
			openssl_public_encrypt($cek,$encryptedSek, $encryptionMaterials[0]);
			if(empty($encryptedSek))
				throw new Ks3ClientException("can not encode cek useing RSA");
		}
		return $encryptedSek;
	}
	public static function decodeCek($encryptionMaterials,$cekEncrypted){
		$encrypKeyAlg = EncryptionUtil::getKeyEncryptionAlgm($encryptionMaterials);
		if($encrypKeyAlg === "AES"){
			$secretKey = $encryptionMaterials;
			$cek = EncryptionUtil::decode_AES_ECB($cekEncrypted,$secretKey);
			if(empty($cek))
				throw new Ks3ClientException("can not decode cek useing AES,secret key maybe not correct");
		}else if($encrypKeyAlg === "RSA"){
			$cek = "";
			openssl_private_decrypt($cekEncrypted,$cek, $encryptionMaterials[1]);
			if(empty($cek))
				throw new Ks3ClientException("can not decode cek useing RSA,public/private key pair maybe not correct");
		}
		return $cek;
	}
	public static function getPKCS5EncrypedLength($length,$blocksize){
		$pad = $blocksize - $length%$blocksize;
		return $length+$pad;
	}
	//pkcs5填充
	public static function PKCS5Padding($data,$blocksize){
		$pad = $blocksize - strlen($data)%$blocksize;
		for($i = 0;$i < $pad;$i++){
			$data.= chr($pad);
		}
		return $data;
	}
	public static function updateContentMD5Header($req){
		if(!is_array($req))
			return $req;
		if(isset($req["ObjectMeta"])){
			$meta = $req["ObjectMeta"];
		}else{
			return $req;
		}
		if(is_array($meta) && isset($meta["Content-MD5"])){
			$md5 = $meta["Content-MD5"];
		}else{
			return $req;
		}
		if(empty($md5)){
			return $req;
		}else{
			$req["ObjectMeta"]["Content-MD5"] = NULL;
			$req["UserMeta"]["x-kss-meta-x-kss-unencrypted-content-md5"] = $md5;
		}
		return $req;
	}
	public static function metaTextLength($req){
		if(!is_array($req))
			return -1;
		if(isset($req["ObjectMeta"])){
			$meta = $req["ObjectMeta"];
		}else{
			return -1;
		}
		if(is_array($meta) && isset($meta["Content-Length"])){
			$length = $meta["Content-Length"];
			return $length;
		}else
			return -1;
	}
	public static function plainTextLength($args){
		if(isset($args["Content"])){
			if(is_array($args["Content"])){
				$content = $args["Content"]["content"];
				$seek_position = 0;
				$resourceLength = 0;
				$length = -1;
				$isFile = FALSE;

				if (!is_resource($content)){
					$isFile = TRUE;
					//如果之前用户已经转化为GBK则不转换
					if(Utils::chk_chinese($content)&&!Utils::check_char($content)){
						$content = iconv('utf-8','gbk',$content);
					}
					if(!file_exists($content))
						throw new Ks3ClientException("the specified file does not exist ");
					$length = Utils::getFileSize($content);
					$content = fopen($content,"r");
				}else{
					$stats = fstat($content);
					if ($stats && $stats["size"] >= 0){
						$length = $stats["size"];	
					}
				}
				$resourceLength = $length;
				//优先取用户设置seek_position，没有的话取ftell
				if(isset($args["Content"]["seek_position"])&&$args["Content"]["seek_position"]>0){
					$seek_position = $args["Content"]["seek_position"];
				}else if(!$isFile){
					$seek_position = ftell($content);
					if($seek_position<0)
						$seek_position = 0;
					fseek($content,0);
				}

				$lengthInMeta = -1;
				if(isset($args["ObjectMeta"]["Content-Length"])){
					$lengthInMeta = $args["ObjectMeta"]["Content-Length"];
				}
				if($lengthInMeta > 0){
					$length = $lengthInMeta;
				}else if($resourceLength > 0){
					//根据seek_position计算实际长度
					$length = $resourceLength - $seek_position;
				}
				if($length <= 0)
					throw new Ks3ClientException("calculate content length failed,unexpected contetn length ".$length);
				return $length;
			}else{
				$content = $args["Content"];
				$lengthInMeta = EncryptionUtil::metaTextLength($args);
				$length = strlen($content);
				if($length<$lengthInMeta||$lengthInMeta <= 0)
					return $length;
				else
					return $lengthInMeta;
			}
		}
		return -1;
	}
	public static function initMultipartUploadContext($initResult,$iv,$cek,$encryptedCek,$matdesc="{}"){
		$cacheDir = KS3_API_PATH.DIRECTORY_SEPARATOR."cache".DIRECTORY_SEPARATOR;
		$encryptionDir = KS3_API_PATH.DIRECTORY_SEPARATOR."cache".DIRECTORY_SEPARATOR."encryption".DIRECTORY_SEPARATOR;
		if(!is_dir($cacheDir))
			mkdir($cacheDir);
		if(!is_dir($encryptionDir))
			mkdir($encryptionDir);
		if(is_array($matdesc)){
			$matdesc = json_encode($matdesc);
		}
		$initResult["firstIv"] = base64_encode($iv);
		$initResult["nextIv"] = base64_encode($iv);
		$initResult["cek"] = base64_encode($cek);
		$initResult["encryptedCek"] = base64_encode($encryptedCek);
		$initResult["lastPart"] = FALSE;
		$initResult["matdesc"] = $matdesc;
		$json = json_encode($initResult);
		$file = EncryptionUtil::openfile($encryptionDir.$initResult["UploadId"], "w");
		fwrite($file, $json);
		fclose($file);
	}
	public static function updateMultipartUploadContext($UploadId,$iv,$lastPart = FALSE){
		$encryptionDir = KS3_API_PATH.DIRECTORY_SEPARATOR."cache".DIRECTORY_SEPARATOR."encryption".DIRECTORY_SEPARATOR;
		$content = EncryptionUtil::getMultipartUploadContext($UploadId);
		$content["nextIv"] = base64_encode($iv);
		$content["lastPart"] = $lastPart;
		$json = json_encode($content);
		$file = EncryptionUtil::openfile($encryptionDir.$UploadId, "w");
		fwrite($file, $json);
		fclose($file);
	}
	public static function getMultipartUploadContext($UploadId){
		$encryptionDir = KS3_API_PATH.DIRECTORY_SEPARATOR."cache".DIRECTORY_SEPARATOR."encryption".DIRECTORY_SEPARATOR;
		if(!EncryptionUtil::multipartUploadContextExists($UploadId))
			throw new Ks3ClientException("can not found multipart upload context in cache dir");
		$jsonString = file_get_contents($encryptionDir.$UploadId);
		$arry = json_decode($jsonString,TRUE);
		return $arry;
	}
	public static function deleteMultipartUploadContext($UploadId){
		$encryptionDir = KS3_API_PATH.DIRECTORY_SEPARATOR."cache".DIRECTORY_SEPARATOR."encryption".DIRECTORY_SEPARATOR;
		@unlink($encryptionDir.$UploadId);
	}
	public static function multipartUploadContextExists($UploadId){
		$encryptionDir = KS3_API_PATH.DIRECTORY_SEPARATOR."cache".DIRECTORY_SEPARATOR."encryption".DIRECTORY_SEPARATOR;
		return file_exists($encryptionDir.$UploadId);
	}
	public static function openfile($path,$mode){
		$file = fopen($path, $mode);
		if($file)
			return $file;
		else
			throw new Ks3ClientException("open file ".$path." error");
	}
	//matdesc为字符串或array数据类型。
	public static function createInstructionFile($bucket,$key,$cek,$iv,$matdesc="{}"){
		if(is_array($matdesc)){
			$matdesc = json_encode($matdesc);
		}
		$key = $key.EncryptionUtil::$INSTRUCTION_SUFFIX;

		$instruction = json_encode(array(
			"x-kss-key"=>$cek,
			"x-kss-iv"=>$iv,
			"x-kss-matdesc"=>$matdesc
			));

		$req = array(
			"Bucket"=>$bucket,
			"Key"=>$key,
			"Content"=>$instruction,
			"UserMeta"=>array(
				"x-kss-meta-x-kss-crypto-instr-file"=>base64_encode($key)
				)
			);
		return $req;
	}
	public static function isInstructionFile($s3Object){
		$meta = $s3Object["Meta"];
		if(isset($meta["UserMeta"]["x-kss-meta-x-kss-crypto-instr-file"]))
			return TRUE;
		return FALSE;
	}
}
?>