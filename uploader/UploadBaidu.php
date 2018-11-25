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
	    
	    $this->bosConfig = $ServerConfig['bosConfig'];
	    $this->bucket = $ServerConfig['bucket'];
	    $this->domain = $ServerConfig['domain'];
	    
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
	 * @throws \Exception
	 */
	public function upload($key, $uploadFilePath, $originFilename){
	    $bosClient = new BosClient($this->bosConfig);
	    try {
		    $bosClient->putObjectFromFile($this->bucket, $key, $uploadFilePath);
		    $publicLink = $this->domain.'/'.$key;;
		    //按配置文件指定的格式，格式化链接
		    $link = $this->formatLink($publicLink, $originFilename);
		    return $link;
	    } catch (BceClientException $e) {
		    //上传数错，记录错误日志
		    $this->writeLog($e->getMessage()."\n", 'error_log');
	    }
    }
}