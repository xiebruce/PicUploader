<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 15:00
 */

namespace uploader;


use Aws\S3\S3Client;

class UploadJd extends Upload{

    public $accessKey;
    public $secretKey;
    public $endpoint;
    public $bucket;
    public $region;
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
	    
        $this->accessKey = $ServerConfig['key'];
        $this->secretKey = $ServerConfig['secret'];
        $this->endpoint = $ServerConfig['endpoint'];
        $this->bucket = $ServerConfig['bucket'];
        $this->region = $ServerConfig['region'];
	    $this->domain = $ServerConfig['domain'] ?? '';

        $this->argv = $argv;
        static::$config = $config;
    }
	
	/**
	 * Upload images to Jcloud
	 * @param $key
	 * @param $uploadFilePath
	 * @param $originFilename
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function upload($key, $uploadFilePath, $originFilename){
	    $s3Client = new S3Client([
		    'version' => 'latest',
		    'region' => $this->region,
		    'endpoint' => $this->endpoint,
		    'credentials' => [
			    'key' => $this->accessKey,
			    'secret' => $this->secretKey,
		    ],
	    ]);
	    try {
		    $retObj = $s3Client->upload($this->bucket, $key, fopen($uploadFilePath, 'r'), 'public');
		    if(is_object($retObj)){
		    	//返回链接格式：
			    //https://markdown.s3.cn-south-1.jcloudcs.com/2018/11/28/bc4443f413b4eb32b3964d9c8e1fe755.jpeg
			    $publicLink = $retObj->get('ObjectURL');
			    if($this->domain){
				    $pos = strpos($this->endpoint, '://') + 3;
				    $defaultDomain = substr($this->endpoint, 0, $pos) . $this->bucket . '.' . substr($this->endpoint, $pos);
				    $publicLink = str_replace($defaultDomain, $this->domain,$publicLink);
			    }
			    //按配置文件指定的格式，格式化链接
			    $link = $this->formatLink($publicLink, $originFilename);
		    }else{
			    throw new \Exception(var_export($retObj, true)."\n");
		    }
	    } catch (\Exception $e) {
		    //上传数错，记录错误日志
		    $link = $e->getMessage()."\n";
		    $this->writeLog($link, 'error_log');
	    }
        return $link;
    }
}