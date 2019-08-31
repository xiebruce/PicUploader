<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 00:46
 */

namespace uploader;

use Exception;
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
	    $ServerConfig = $params['config']['storageTypes'][$params['uploadServer']];
	    
        $this->region = $ServerConfig['region'];
        $this->secretId = $ServerConfig['secretId'];
        $this->secretKey = $ServerConfig['secretKey'];
        $this->bucket = $ServerConfig['bucket'];
        $this->domain = $ServerConfig['domain'] ?? '';
	    // http://markdown-1254010860.cos.ap-guangzhou.myqcloud.com
	    $defaultDomain = 'http://' . $this->bucket . '.cos.' . $this->region . '.myqcloud.com';
	    !$this->domain && $this->domain = $defaultDomain;
	    
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
	 * Upload files to Tecent COS(Cloud Object Storage)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return array
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
		        $key = $this->directory . '/' . $key;
	        }
	        $fp = fopen($uploadFilePath, 'rb');
	        $retObj = $cosClient->Upload($this->bucket, $key, $fp);
	        is_resource($fp) && fclose($fp);
	        
	        if (!is_object($retObj) || !$retObj->get('Location')) {
		        //上传数错，抛出异常
		        throw new Exception(var_export($retObj, true));
	        }
	
	        //这样可以拿到外链，但因为可以自己接，所以不需要用这个拿
	        // $link = urldecode($retObj->get('Location'));
	
	        $data = [
		        'code' => 0,
		        'msg' => 'success',
		        'key' => $key,
		        'domain' => $this->domain,
	        ];
        }catch (Exception $e){
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