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
	    $ServerConfig = $params['config']['storageTypes'][$params['uploadServer']];;
	    
        $this->region = $ServerConfig['region'];
        $this->secretId = $ServerConfig['secretId'];
        $this->secretKey = $ServerConfig['secretKey'];
        $this->bucket = $ServerConfig['bucket'];
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
	        //上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
	        $link = $e->getMessage();
	        $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage(), 'error_log');
        }
		return $link;
	}
}