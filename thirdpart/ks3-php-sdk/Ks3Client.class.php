<?php
//使用时请在项目中引用该php文件
//设置默认时区
date_default_timezone_set('Asia/Shanghai');

//检测API路径
if(!defined("KS3_API_PATH"))
define("KS3_API_PATH", dirname(__FILE__));
//是否使用VHOST
if(!defined("KS3_API_VHOST"))
define("KS3_API_VHOST",TRUE);
//是否开启日志(写入日志文件)
if(!defined("KS3_API_LOG"))
define("KS3_API_LOG",TRUE);
//是否显示日志(直接输出日志)
if(!defined("KS3_API_DISPLAY_LOG"))
define("KS3_API_DISPLAY_LOG", TRUE);
//定义日志目录(默认是该项目log下)
if(!defined("KS3_API_LOG_PATH"))
define("KS3_API_LOG_PATH","");
//是否使用HTTPS
if(!defined("KS3_API_USE_HTTPS"))
define("KS3_API_USE_HTTPS",FALSE);
//是否开启curl debug模式
if(!defined("KS3_API_DEBUG_MODE"))
define("KS3_API_DEBUG_MODE",FALSE);
define("KS3_API_Author","lijunwei@kingsoft.com");
define("KS3_API_Version","1.2");

require_once KS3_API_PATH.DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."Consts.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."API.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."Signers.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."Ks3Request.class.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."Handlers.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."Builders.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."Logger.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."MessageHolder.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR."RequestCore.class.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."exceptions".DIRECTORY_SEPARATOR."Exceptions.php";

if(function_exists('get_loaded_extensions')){
	//检测curl扩展
	$extensions = get_loaded_extensions();
	if($extensions){
		if(!in_array('curl', $extensions)){
			throw new Ks3ClientException("please install curl extension");
		}
		if(!in_array('mbstring', $extensions)){
			throw new Ks3ClientException("please install mbstring extension");
			
		}
	}else{
		throw new Ks3ClientException("please install extensions");
	}
}else{
	throw new Ks3ClientException();
}

class Ks3Client{
	private $accessKey;
	private $secretKey;
	private $endpoint;
	private $log;
	public function __construct($accessKey = NULL, $secretKey = NULL, $endpoint = NULL ){
		$this->accessKey = $accessKey;
		$this->secretKey = $secretKey;

		if(empty($endpoint)){
			throw new Ks3ClientException("must set endpoint, please see http://ks3.ksyun.com/doc/api/index.html Region part");
		}
		$this->endpoint = $endpoint;

		$this->signers = array();
		$this->log = new Logger();
	}
	/**
	方法列表:(具体使用请参考readme.md)
	listBuckets,罗列bucket
	deleteBucket，删除bucket
	deleteBucketCORS，删除bucket跨域配置
	createBucket,新建bucket
	setBucketAcl，设置bucket访问权限
	setBucketCORS,设置bucket跨域配置
	setBucketLogging,设置bucket日志配置
	listObjects,罗列object
	getBucketAcl,获取bucket访问权限
	getBucketCORS,获取bucket跨域配置
	getBucketLocation,获取bucket地点配置
	getBucketLogging,获取bucket日志配置
	bucketExists,判断bucket是否存在
	listMutipartUploads,罗列当前bucket下尚未结束的分块上传
	putObjectByContent,上传文件
	putObjectByFile,上传文件
	setObjectAcl，设置object访问权限
	copyObject,复制object
	getObjectMeta，获取object元数据
	objectExists，判断object是否存在
	deleteObject，删除object
	deleteObjects，删除多个object
	getObject，下载object
	getObjectAcl，获取object访问权限
	initMultipartUpload，初始化分块上传
	uploadPart，上传块
	abortMultipartUpload，终止分块上传
	listParts，罗列已经上传的块
	completeMultipartUpload，完成分块上传
	generatePresignedUrl，生成文件外链
	putAdp,添加异步数据处理任务
	getAdp,查询异步数据处理任务
	*/
	public function __call($method,$args=array()){
		$holder = new MessageHolder();

		$holder->msg = "------------------Logging Start-------------------------\r\n";
		$holder->msg .= "method->".$method." args->".serialize($args)."\r\n";
		$ex = NULL;
		try{
			$result = $this->invoke($method,$args,$holder);
		}catch(Exception $e){
			$holder->msg.=$e."\r\n";
			$ex = $e;
		}
		$holder->msg .= "------------------Logging End-------------------------\r\n";
		$this->log->info($holder->msg);
		if($ex !=NULL)
			throw $ex;
		return $result;
	}
	private function invoke($method,$args=array(),$holder,$location=NULL){
		$api = API::$API[$method];
		if(!$api){
			throw new Ks3ClientException($method." Not Found API");
		}
		if(count($args) !== 0){
			if(count($args)>1||!is_array($args[0])){
				throw new Ks3ClientException("this method only needs one array argument");
			}
			$args = $args[0];
		}
		if(isset($api["redirect"])){
			$api = API::$API[$api["redirect"]];
		}
		$request = new Ks3Request();
		if(empty($args["Bucket"])){
			if($api["needBucket"]){
				throw new Ks3ClientException($method." this api need bucket");
			}
		}else{
			$request->bucket = $args["Bucket"];
		}
		$position = "Key";
		//position主要为queryadp接口用的
		if(isset($api["objectPostion"])){
			$position = $api["objectPostion"];
		}
		if(empty($args[$position])){
			if($api["needObject"]){
				throw new Ks3ClientException($method." this api need ".$position);
			}
		}else{
			$key = $args[$position];
			$preEncoding = mb_detect_encoding($key, array("ASCII","UTF-8","GB2312","GBK","BIG5"));
			$holder->msg.="key encoding ".$preEncoding."\r\n";
			if(strtolower($preEncoding) != "utf-8"){
				$key = iconv($preEncoding, "UTF-8",$key);
			}
			$request->key = $key;
		}
		$method = $api["method"];
		if($method == "Method"){
			if(empty($args["Method"])){
				$request->method="GET";
			}else{
				$request->method=$args["Method"];
			}
		}else{
			$request->method=$api["method"];
		}
		if(KS3_API_USE_HTTPS)
			$request->scheme="https://";
		else
			$request->scheme="http://";
		$request->endpoint=$this->endpoint;
		//add subresource
		if(!empty($api["subResource"])){
			$request->subResource=$api["subResource"];
		}
		//add query params
		if(isset($api["queryParams"] )){ 
			foreach ($api["queryParams"] as $key => $value) {
				$required = FALSE;
				if(substr($value,0,1)==="!"){
					$required = TRUE;
					$value=substr($value,1);
				}
				$index = explode("->",$value);
				$curIndexArg = $args;
				$add = TRUE;
				$curkey = "";
				foreach ($index as $key1 => $value1) {
					if(!isset($curIndexArg[$value1])&&$value1 !== "*"){
						$add = FALSE;
					}else{
						$curkey = $value1;
						//星号表示所有,按照暂时的业务，默认星号后面就没了
						if($curkey == "*"){
							foreach ($curIndexArg as $queryK => $queryV) {
								if(!is_array($queryV)){
									$request->addQueryParams($queryK,$queryV);
								}
							}
							$add = FALSE;
							$required = FALSE;
							break;
						}else{
							$curIndexArg = $curIndexArg[$value1];
						}
					}
				}
				if(!empty($curIndexArg)&&$add){
					$request->addQueryParams($curkey,$curIndexArg);
					continue;
				}
				if($required)
					throw new Ks3ClientException($method." param ".$value." is required");
			}
		}
		if(isset($api["body"])){
			if(isset($api["body"]["builder"])){
				$builderName = $api["body"]["builder"];
				$builder = new $builderName();
				$request->body = $builder->build($args);
			}else if(isset($api["body"]["position"])){
				$position = $api["body"]["position"];
				$index = explode("->",$position);
				$curIndexArg = $args;
				$add = TRUE;
				$curkey = "";
				foreach ($index as $key1 => $value1) {
					if(!isset($curIndexArg[$value1])){
						$add = FALSE;
					}else{
						$curIndexArg = $curIndexArg[$value1];
						$curkey = $value1;
					}
				}
				if(!empty($curIndexArg)&&$add){
					$request->body=$curIndexArg;
				}
			}
		}
		
		//add ext headers
		//TODO
		//sign request
		$signer = NULL;
		if(isset($api["signer"])){
			$signers = explode("->",$api["signer"]);
			foreach ($signers as $key => $value) {
				$signer = new $value();
				$log = $signer->sign($request,array("accessKey"=>$this->accessKey,"secretKey"=>$this->secretKey,"args"=>$args));
				if(!empty($log)){
					$holder->msg.=$log."\r\n";
				}
			}
		}

		if($signer===NULL||!($signer instanceof QueryAuthSigner)){
			$url = $request->toUrl($this->endpoint);
			if($location!=NULL)
				$url = $location;
			$httpRequest = new RequestCore($url);
			if(KS3_API_DEBUG_MODE===TRUE)
				$httpRequest->debug_mode=TRUE;
			$httpRequest->set_method($request->method);
			foreach ($request->headers as $key => $value) {
				$httpRequest->add_header($key,$value);
			}
			$httpRequest->request_body=$request->body;

			if(isset($args["writeCallBack"])){
				$httpRequest->register_streaming_write_callback($args["writeCallBack"]);
			}
			if(isset($args["readCallBack"])){
				$httpRequest->register_streaming_read_callback($args["readCallBack"]);
			}

			$read_stream = $request->read_stream;
			$read_length = $request->getHeader(Headers::$ContentLength);
			$seek_position = $request->seek_position;
			if(isset($read_stream))
			{
				$httpRequest->set_read_stream($read_stream,$read_length);
				$httpRequest->set_seek_position($seek_position);
				$httpRequest->remove_header(Headers::$ContentLength);
			}
			$write_stream = $request->write_stream;
			if(isset($write_stream)){
				$httpRequest->set_write_stream($write_stream);
			}

			$holder->msg.="request url->".serialize($httpRequest->request_url)."\r\n";
			$holder->msg.="request headers->".serialize($httpRequest->request_headers)."\r\n";
			$holder->msg.="request body->".$httpRequest->request_body."\r\n";
			$holder->msg.="request read stream length->".$read_length."\r\n";
			$holder->msg.="request read stream seek position->".$seek_position."\r\n";
			$httpRequest->send_request();
			//print_r($httpRequest);
			$body = $httpRequest->get_response_body ();	
			$data =  new ResponseCore ( $httpRequest->get_response_header() , Utils::replaceNS2($body), $httpRequest->get_response_code () );

			if($data->status == 307){
				$respHeaders = $httpRequest->get_response_header();
				$location = $respHeaders["location"];
				if(substr($location,0,4) == "http"){
					$holder->msg.="response code->".$httpRequest->get_response_code ()."\r\n";
					$holder->msg.="response headers->".serialize($httpRequest->get_response_header())."\r\n";
					$holder->msg.="response body->".$body."\r\n";
					$holder->msg.="retry request to ".$location."\r\n";
					//array($args)详见invoke开头
					return $this->invoke($method,array($args),$holder,$location);
				}
			}
			$holder->msg.="response code->".$httpRequest->get_response_code ()."\r\n";
			$holder->msg.="response headers->".serialize($httpRequest->get_response_header())."\r\n";
			$holder->msg.="response body->".$body."\r\n";
			$handlers = explode("->",$api["handler"]);
			foreach ($handlers as $key => $value) {
				$handler = new $value();
				$data = $handler->handle($data);
			}
			return $data;
		}else{
			$url = $request->toUrl($this->endpoint);
			$holder->msg.=$url."\r\n";
			return $url;
		}
	}
	//用于生产表单上传时的签名信息
	public function postObject($bucket ,$postFormData=array(),$unknowValueFormFiled=array(),$filename=NULL,$expire=18000){
		$policy = array();

		$expireTime = Utils::iso8601(time()+$expire);
		$policy["expiration"] = $expireTime;
		$postFormData["bucket"]=$bucket;
		$conditions = array();
		foreach ($postFormData as $key => $value) {
			$condition = array();
			$condition[$key] = str_replace("\${filename}",$filename, $value);
			array_push($conditions,$condition);
		}
		foreach ($unknowValueFormFiled as $key => $value) {
			$condition = array();
			array_push($condition,"starts-with");
			array_push($condition,"\$".$value);
			array_push($condition,"");
			array_push($conditions,$condition);
		}
		$policy["conditions"] = $conditions;
		$json = json_encode($policy);
		$signature = base64_encode(hash_hmac('sha1', base64_encode($json), $this->secretKey, true));
		$result = array();
		$result["Policy"] = base64_encode($json);
		$result["Signature"] = $signature;
		$result["KSSAccessKeyId"] = $this->accessKey;
		return $result;
	}
}

?>
