<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 00:46
 */

namespace uploader;

use Qcloud\Cos\Client;

class UploadTencent extends Common {
    public $region;
    public $secretId;
    public $secretKey;
    public $bucket;
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
	    
        $this->region = $ServerConfig['region'];
        $this->secretId = $ServerConfig['secretId'];
        $this->secretKey = $ServerConfig['secretKey'];
        $this->bucket = $ServerConfig['bucket'];
        $this->domain = $ServerConfig['domain'] ?? '';
	    if(!isset($ServerConfig['directory'])){
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
	 * Upload Images to Tecent COS(Cloud Object Storage)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 */
	public function upload($key, $uploadFilePath){
        try{
	        $cosClient = new Client([
		        'region' => $this->region,
		        'credentials' => [
			        'secretId' => $this->secretId,
			        'secretKey' => $this->secretKey,
		        ],
	        ]);
	        if($this->directory){
		        $key = $this->directory. '/' . $key;
	        }
	        $retObj = $cosClient->Upload($this->bucket, $key, fopen($uploadFilePath, 'rb'));
	        if (!is_object($retObj) || !$retObj->get('Location')) {
		        //上传数错，抛出异常
		        throw new \Exception(var_export($retObj, true)."\n");
	        } else {
		        //拼接域名和优化参数成为一个可访问的外链
		        $location = urldecode($retObj->get('Location'));
		        $matches = [];
		        preg_match('/\d{4}\/\d{2}\/\d{2}\/.+/',$location,$matches);
		        $key = $matches[0] ?? '';
		        if(!$this->domain){
			        $this->domain = 'http://'.$this->bucket.'.cos.'.$this->region.'.myqcloud.com';
		        }
		        // http://markdown-1254010860.cos.ap-guangzhou.myqcloud.com
		        if($key){
			        $link = $this->domain .'/'.$key;
		        }else{
			        $link = $location;
		        }
	        }
        }catch (\Exception $e){
	        //上传数错，记录错误日志
	        $link = $e->getMessage()."\n";
	        $this->writeLog($link, 'error_log');
        }
		return $link;
	}
}