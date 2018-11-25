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

        $this->argv = $argv;
        static::$config = $config;
    }
	
	/**
	 * Upload Images to Tecent Cloud
	 * @param $key
	 * @param $uploadFilePath
	 * @param $originFilename
	 *
	 * @return string
	 */
	public function upload($key, $uploadFilePath, $originFilename){
        $link = '';
	    $cosClient = new Client([
		    'region' => $this->region,
		    'credentials' => [
			    'secretId' => $this->secretId,
			    'secretKey' => $this->secretKey,
		    ],
	    ]);
	    $retObj = $cosClient->Upload($this->bucket, $key, fopen($uploadFilePath, 'rb'));
	    if (!is_object($retObj) || !$retObj->get('Location')) {
		    //上传数错，记录错误日志
		    $this->writeLog(var_export($retObj, true)."\n", 'error_log');
	    } else {
		    //拼接域名和优化参数成为一个可访问的外链
		    $location = urldecode($retObj->get('Location'));
		    $matches = [];
		    preg_match('/\d{4}\/\d{2}\/\d{2}\/.+/',$location,$matches);
		    $key = $matches[0] ?? '';
		    $domain = 'http://'.$this->bucket.'.cos.'.$this->region.'.myqcloud.com';
		    // http://markdown-1254010860.cos.ap-guangzhou.myqcloud.com
		    if($key){
		    	$publicLink = $domain .'/'.$key;
		    }else{
		        $publicLink = $location;
		    }
		    //按配置文件指定的格式，格式化链接
		    $link .= $this->formatLink($publicLink, $originFilename);
	    }
        return $link;
    }

}