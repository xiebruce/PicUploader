<?php
	/**
	 * Created by PhpStorm.
	 * User: Bruce Xie
	 * Date: 2018-11-23
	 * Time: 16:29
	 */
	
namespace uploader;

use Guzzle\Common\Exception\ExceptionCollection;
use QingStor\SDK\Config;
use QingStor\SDK\Service\QingStor;

class UploadQingcloud extends Upload{
	
	public $accessKeyId;
	public $secretAccessKey;
	public $bucket;
	//区域
	public $zone;
	public $domain;
	public $directory;
	//上传目标服务器名称
	public $uploadServer;
	
	//config from config.php, using static because the parent class needs to use it.
	public static $config;
	//arguments from php client, the image absolute path
	public $argv;
	
	/**
	 * Upload constructor.
	 *
	 * @param $params
	 */
	public function __construct($params)
	{
		$ServerConfig = $params['config']['storageTypes'][$params['uploadServer']];
		
		$this->accessKeyId = $ServerConfig['accessKeyId'];
		$this->secretAccessKey = $ServerConfig['secretAccessKey'];
		$this->bucket = $ServerConfig['bucket'];
		//endPoint不是域名，外链域名是 bucket.'.'.endPoint
		$this->zone = $ServerConfig['zone'];
		$this->domain = $ServerConfig['domain'] ?? '';
		if(!isset($ServerConfig['directory']) || ($ServerConfig['directory']=='' && $ServerConfig['directory']!==false)){
			//如果没有设置，使用默认的按年/月/日方式使用目录
			$this->directory = date('Y/m/d');
		}else{
			//设置了，则按设置的目录走
			$this->directory = trim($ServerConfig['directory'], '/');
		}
		$this->uploadServer = ucfirst($params['uploadServer']);
		
		$this->argv = $params['argv'];
		static::$config = $params['config'];
	}
	
	/**
	 * Upload files to QingCloud QingStor
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function upload($key, $uploadFilePath){
		try {
			$config = new Config($this->accessKeyId, $this->secretAccessKey);
			$service = new QingStor($config);
			$bucket = $service->Bucket($this->bucket, $this->zone);
			
			if($this->directory){
				$key = $this->directory. '/' . $key;
			}
			// Put object
			$body = file_get_contents($uploadFilePath);
			$res = $bucket->putObject($key, ['body' => $body]);
			//http状态码201表示Created，即创建成功（这里表示文件在服务器创建成功，即上传成功）
			if($res->statusCode==201){
				if(!$this->domain){
					//http://blog-markdown.gd2.qingstor.com
					$this->domain = 'http://'.$this->bucket.'.'.$this->zone.'.qingstor.com/';
				}
				$link = $this->domain.'/'.$key;
			}else{
				throw new \Exception('error_code => '.$res->code."\nerror_message => ".$res->message, $res->statusCode);
			}
		} catch (\Exception $e) {
			//上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
			$link = $e->getMessage();
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage(), 'error_log');
		}
		return $link;
	}
}