<?php
//使用客户端加密的方式上传下载文件
//检测API路径
if(!defined('KS3_API_PATH'))
define('KS3_API_PATH', dirname(__FILE__));
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."Ks3Client.class.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."encryption".DIRECTORY_SEPARATOR."EncryptionUtil.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."encryption".DIRECTORY_SEPARATOR."EncryptionHandlers.php";

//加密模式
//暂时仅支持EO,使用AES/CBC/PKCS5Padding算法对数据进行加密
if(!defined("ENCRYPTPTION_MODE"))
define("ENCRYPTPTION_MODE","EO");
//加密信息存储模式,暂时支持 ObjectMetadata和InstructionFile
//ObjectMetadata:存在用户元数据中
//InstructionFile：存在一个.instruction文件中
if(!defined("ENCRYPTPTION_STORAGE_MODE"))
define("ENCRYPTPTION_STORAGE_MODE","ObjectMetadata");


if(function_exists('get_loaded_extensions')){
	//检测mcrypt,openssl扩展
	$extensions = get_loaded_extensions();
	if($extensions){
		if(!in_array('mcrypt', $extensions)){
			throw new Ks3ClientException("please install mcrypt extension");
		}
		if(!in_array('openssl', $extensions)){
			throw new Ks3ClientException("please install openssl extension");
		}
	}else{
		throw new Ks3ClientException("please install extensions");
	}
}else{
	throw new Ks3ClientException();
} 
class Ks3EncryptionClient extends Ks3Client{
	private $encryptionHandler = NULL;
	//用户提供的主密钥,可以是对称秘钥或非对称秘钥(array,分别是公钥和私钥)
	private $encryptionMaterials = NULL;

	public function __construct($accessKey, $secretKey,$encryptionMaterials, $endpoint = NULL ){
		parent::__construct($accessKey,$secretKey,$endpoint);
		if(is_array($encryptionMaterials)){
			if(count($encryptionMaterials)==2){
				$pk = openssl_pkey_get_public($encryptionMaterials[0]);
				$sk = openssl_pkey_get_private($encryptionMaterials[1]);
				if(!$pk)
					throw new Ks3ClientException("invalid RSA public key,you can generate key use openssl");
				if(!$sk)
					throw new Ks3ClientException("invalid RSA private key,you can generate key use openssl");
				$encryptionMaterials = array($pk,$sk);
			}else{
				throw new Ks3ClientException("encryptionMaterials should be string or an array of size 2");
			}
		}
		$ks3client = new Ks3Client($accessKey,$secretKey,$endpoint);
		$this->encryptionMaterials = $encryptionMaterials;
		if(ENCRYPTPTION_MODE == "EO"){
			$this->encryptionHandler = new EncryptionEO($ks3client,$encryptionMaterials);
		}elseif (ENCRYPTPTION_MODE == "AE") {
			throw new Ks3ClientException("Authenticated encryption will be supported in the futher");
		}
		else{
			throw new Ks3ClientException("unsupported encryption mode :".ENCRYPTPTION_MODE);
		}
		if(ENCRYPTPTION_STORAGE_MODE != "ObjectMetadata"&&ENCRYPTPTION_STORAGE_MODE!="InstructionFile"){
			throw new Ks3ClientException("unsupported encryption storage mode :".ENCRYPTPTION_STORAGE_MODE);
		}
	}

	public function putObjectByContent($args=array()){
		return $this->encryptionHandler->putObjectByContentSecurely($args);
	}
	public function putObjectByFile($args=array()){
		return $this->encryptionHandler->putObjectByFileSecurely($args);
	}
	public function getObject($args=array()){
		return $this->encryptionHandler->getObjectSecurely($args);
	}
	public function initMultipartUpload($args=array()){
		return $this->encryptionHandler->initMultipartUploadSecurely($args);
	}
	public function uploadPart($args=array()){
		return $this->encryptionHandler->uploadPartSecurely($args);
	}
	public function abortMultipartUpload($args=array()){
		return $this->encryptionHandler->abortMultipartUploadSecurely($args);
	}
	public function completeMultipartUpload($args=array()){
		return $this->encryptionHandler->completeMultipartUploadSecurely($args);
	}
	public function deleteObject($args=array()){
		$result = parent::deleteObject($args);
		$args["Key"] = $args["Key"].EncryptionUtil::$INSTRUCTION_SUFFIX;
		try {
			parent::deleteObject($args);
		} catch (Exception $e) {
			//do nothing
		}
		return $result;
	}
	public function copyObject($args=array()){
		if(parent::objectExists(array(
			"Bucket"=>$args["Bucket"],
			"Key"=>$args["Key"]
			))){
			throw new Ks3ClientException("copy object faild,destination object exists");
		}
		if(parent::objectExists(array(
			"Bucket"=>$args["CopySource"]["Bucket"],
			"Key"=>$args["CopySource"]["Key"].EncryptionUtil::$INSTRUCTION_SUFFIX
			))){
			parent::copyObject(
				array(
					"Bucket"=>$args["Bucket"],
					"Key"=>$args["Key"].EncryptionUtil::$INSTRUCTION_SUFFIX,
					"CopySource"=>array(
						"Bucket"=>$args["CopySource"]["Bucket"],
						"Key"=>$args["CopySource"]["Key"].EncryptionUtil::$INSTRUCTION_SUFFIX
						)
					)
				);
		}
		return parent::copyObject($args);
	}
}

?>