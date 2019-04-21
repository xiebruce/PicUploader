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
    public $domain;
    public $directory;
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
	    $this->domain = $ServerConfig['domain'] ?? '';
	
	    if(!isset($ServerConfig['directory']) || ($ServerConfig['directory']=='' && $ServerConfig['directory']!==false)){
		    //如果没有设置，使用默认的按年/月/日方式使用目录
		    $this->directory = date('Y/m/d');
	    }else{
		    //设置了，则按设置的目录走
		    $this->directory = trim($ServerConfig['directory'], '/');
	    }
	    
        $this->argv = $argv;
        static::$config = $config;
    }
	
	/**
	 * Upload images to Aliyun OSS(Object Storage Service)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 */
	public function upload($key, $uploadFilePath){
	    try {
	    	if($this->directory){
			    $key = $this->directory. '/' . $key;
		    }
		    $oss = new OssClient($this->accessKey, $this->secretKey, $this->endpoint);
		    $retArr = $oss->uploadFile($this->bucket, $key, $uploadFilePath);
		    if(isset($retArr['info']['url'])){
		    	// http://bruce-markdown.oss-cn-shenzhen.aliyuncs.com
			    $defaultDomain = 'http://'.$this->bucket.'.'.$this->endpoint;
			    $link = $retArr['info']['url'];
			    if($this->domain){
				    $link = str_replace($defaultDomain, $this->domain, $link);
			    }
		    }else{
			    throw new \Exception(var_export($retArr, true)."\n");
		    }
	    } catch (\Exception $e) {
		    //上传数错，记录错误日志
		    $link = $e->getMessage()."\n";
		    $this->writeLog($link, 'error_log');
	    }
	    return $link;
    }
}