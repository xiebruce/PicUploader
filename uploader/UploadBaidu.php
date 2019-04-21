<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 15:00
 */

namespace uploader;

use BaiduBce\Exception\BceClientException;
use BaiduBce\Services\Bos\BosClient;

class UploadBaidu extends Upload{
	public $bosConfig;
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
	    
	    $this->bosConfig = [
		    'credentials' => [
			    'accessKeyId' => $ServerConfig['accessKeyId'],
			    'secretAccessKey' => $ServerConfig['secretAccessKey'],
		    ],
		    'endpoint' => $ServerConfig['endpoint'],
	    ];
	    $this->bucket = $ServerConfig['bucket'];
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
	 * Upload images to Baidu BOS(Baidu Object Storage)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function upload($key, $uploadFilePath){
	    $bosClient = new BosClient($this->bosConfig);
	    try {
		    if($this->directory){
			    $key = $this->directory. '/' . $key;
		    }
		    $bosClient->putObjectFromFile($this->bucket, $key, $uploadFilePath);
		    if(!$this->domain){
		    	$endpoint = $this->bosConfig['endpoint'];
		    	$pos = strpos($endpoint, '://') + 3;
		    	$this->domain = substr($endpoint, 0, $pos) . $this->bucket . '.' . substr($endpoint, $pos);
		    }
		    $link = $this->domain.'/'.$key;
	    } catch (BceClientException $e) {
		    //上传数错，记录错误日志
		    $link = $e->getMessage()."\n";
		    $this->writeLog($link, 'error_log');
	    }
		return $link;
    }
}