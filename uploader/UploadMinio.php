<?php
/**
 * Created by PhpStorm.
 * User: Bruce Xie
 * Date: 2019-09-25
 * Time: 12:47
 */
	
namespace uploader;

use Exception;
use Aws\S3\S3Client;

class UploadMinio extends Upload{
	
	public $accessKey;
	public $secretKey;
	public $bucket;
	public $region;
	public $endpoint;
	public $domain;
	public $proxy;
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
		
		$this->accessKey = $ServerConfig['AccessKeyId'];
		$this->secretKey = $ServerConfig['AccessKeySecret'];
		$this->bucket = $ServerConfig['bucket'];
		$this->region = $ServerConfig['region'];
		$this->endpoint = $ServerConfig['endpoint'];
		$this->domain = $ServerConfig['domain'] ?? '';
		!$this->domain && $this->domain = $this->endpoint;
		
		$this->proxy = $ServerConfig['proxy'] ?? '';
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
	 * Upload files to Minio by using S3 compatible API
	 * Docs-en: https://docs.min.io/docs/how-to-use-aws-sdk-for-php-with-minio-server.html
	 * Docs-cn: https://docs.min.io/cn/how-to-use-aws-sdk-for-php-with-minio-server.html
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return array
	 * @throws Exception
	 */
	public function upload($key, $uploadFilePath){
		try {
			if($this->directory){
				$key = $this->directory . '/' . $key;
			}
			
			$config = [
				'version' => 'latest',
				'region' => $this->region,
				'credentials' => [
					'key' => $this->accessKey,
					'secret' => $this->secretKey,
				],
				'use_path_style_endpoint' => true,
				'endpoint' => $this->endpoint,
				'signature_version' => 'v4',
			];
			//如果有使用代理
			if($this->proxy){
				$config['http'] = [
					'proxy' => $this->proxy,
				];
			}
			
			$s3Client = new S3Client($config);
			$fp = fopen($uploadFilePath, 'rb');
			$retObj = $s3Client->upload($this->bucket, $key, $fp, 'public-read');
			is_resource($fp) && fclose($fp);
			
			if(!is_object($retObj)){
				throw new Exception(var_export($retObj, true));
			}
			
			//返回链接格式：
			//http://127.0.0.1:9003/markdown/2019/09/25/48720518907faed00f4e239f1dbd24b0.jpg
			//可以这样获取返回的链接，但我们不用它，直接拼就可以
			// $link = $retObj->get('ObjectURL');
			
			$data = [
				'code' => 0,
				'msg' => 'success',
				'key' => $this->bucket . '/' . $key,
				'domain' => $this->domain,
			];
		} catch (Exception $e) {
			//上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
			$data = [
				'code' => -1,
				'msg' => $e->getMessage(),
			];
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		return $data;
	}
}