<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 21:01
 */


namespace uploader;

use OSS\OssClient;

class UploadAliyun extends Upload{

    public $accessKey;
    public $secretKey;
    public $bucket;
    //即domain，域名
    public $endpoint;
    //config from config.php, using static because the parent class needs to use it.
    public static $config;
    //arguments from php client, the image absolute path
    public $argv;

    /**
     * Upload constructor.
     *
     * @param $config
     * @param $argv
     */
    public function __construct($config, $argv)
    {
	    $tmpArr = explode('\\',__CLASS__);
	    $className = array_pop($tmpArr);
	    $ServerConfig = $config['storageTypes'][strtolower(substr($className,6))];
	    
        $this->accessKey = $ServerConfig['accessKey'];
        $this->secretKey = $ServerConfig['accessSecret'];
        $this->bucket = $ServerConfig['bucket'];
        $this->endpoint = $ServerConfig['endpoint'];

        $this->argv = $argv;
        static::$config = $config;
    }
	
	/**
	 * Upload images to Netease Cloud
	 * @param $key
	 * @param $uploadFilePath
	 * @param $originFilename
	 *
	 * @return string
	 */
	public function upload($key, $uploadFilePath, $originFilename){
	    try {
		    $oss = new OssClient($this->accessKey, $this->secretKey, $this->endpoint);
		    $retArr = $oss->uploadFile($this->bucket, $key, $uploadFilePath);
		    if(isset($retArr['info']['url'])){
			    $publicLink = $retArr['info']['url'];
			    //按配置文件指定的格式，格式化链接
			    $link = $this->formatLink($publicLink, $originFilename);
			    return $link;
		    }else{
			    throw new \Exception(var_export($retArr, true)."\n");
		    }
	    } catch (\Exception $e) {
		    //上传数错，记录错误日志
		    $this->writeLog($e->getMessage()."\n", 'error_log');
	    }
    }
}