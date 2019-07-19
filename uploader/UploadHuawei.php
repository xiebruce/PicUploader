<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 00:46
 */

namespace uploader;

use Obs\ObsClient;
use Obs\ObsException;

class UploadHuawei extends Common {
    //华为AccessKey
    public $accessKey;
    //华为AccessSecret
    public $secretKey;
    //华为存储空间名称
    public $bucket;
	//EndPoint
	public $endpoint;
    //华为对外开放域名
    public $domain;
    //目录
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
	    
        $this->accessKey = $ServerConfig['accessKey'];
        $this->secretKey = $ServerConfig['secretKey'];
        $this->bucket = $ServerConfig['bucket'];
        $this->endpoint = $ServerConfig['endpoint'];
        $this->domain = $ServerConfig['domain'];
	
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
	 * Upload Images to Huawei OBS(Object-O)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function upload($key, $uploadFilePath){
		try {
			if($this->directory){
				$key = $this->directory. '/' . $key;
			}
			
			$obsClient = ObsClient::factory([
				'key' => $this->accessKey,
				'secret' => $this->secretKey,
				'endpoint' => $this->endpoint,
				'socket_timeout' => 30,
				'connect_timeout' => 30
			]);
			
			/*
			 * Step 1: initiate multipart upload
			 */
			$resp = $obsClient -> initiateMultipartUpload(['Bucket'=>$this->bucket, 'Key'=>$key]);
			
			$uploadId = $resp['UploadId'];
			
			/*
			 * Step 2: upload a part
			 */
			$resp = $obsClient->uploadPart([
				'Bucket' => $this->bucket,
				'Key' => $key,
				'UploadId' => $uploadId,
				'PartNumber' => 1,
				'Body' => fopen($uploadFilePath, 'rb'),
			]);
			
			$etag = $resp['ETag'];
			
			/*
			 * Step 3: complete multipart upload
			 */
			$res = $obsClient->completeMultipartUpload([
				'Bucket' => $this->bucket,
				'Key' => $key,
				'UploadId' => $uploadId,
				'Parts' => [
					['PartNumber' => 1,'ETag' => $etag]
				],
			]);

			if(!isset($res['Key'])){
				throw new ObsException(var_export($res, true)."\n");
			}else{
				$this->domain = $this->domain ? $this->domain : 'https://'.$this->bucket.'.'.$this->endpoint;
				$link = $this->domain . '/' . $res['Key'];
			}
		}catch (ObsException $e){
			//上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
			$link = $e->getMessage();
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage(), 'error_log');
		}
		return $link;
	}
}