<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 15:00
 */

namespace uploader;

use Exception;
use BaiduBce\Services\Bos\BosClient;

class UploadBaidu extends Upload{
	public $bosConfig;
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
	    
	    $this->bosConfig = [
		    'credentials' => [
			    'accessKeyId' => $ServerConfig['accessKeyId'],
			    'secretAccessKey' => $ServerConfig['secretAccessKey'],
		    ],
		    'endpoint' => $ServerConfig['endpoint'],
	    ];
	    $this->bucket = $ServerConfig['bucket'];
	    $this->domain = $ServerConfig['domain'] ?? '';
	    $defaultDomain = str_replace('//', '//'.$this->bucket.'.', $this->bosConfig['endpoint']);
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
	 * Upload files to Baidu BOS(Baidu Object Storage)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return array
	 */
	public function upload($key, $uploadFilePath){
	    try {
		    $bosClient = new BosClient($this->bosConfig);
		    if($this->directory){
			    $key = $this->directory . '/' . $key;
		    }
		    if(!is_file($uploadFilePath)){
			    throw new Exception('file '. $uploadFilePath . ' does not exists.');
		    }
		    $retArr = $bosClient->putObjectFromFile($this->bucket, $key, $uploadFilePath);
		    // var_dump($retArr);exit;
		    if(!isset($retArr->metadata['etag'])){
			    throw new Exception(var_export($retArr, true));
		    }

		    $data = [
		    	'code' => 0,
			    'msg' => 'success',
		    	'key' => $key,
			    'domain' => $this->domain,
		    ];
	    } catch (Exception $e) {
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