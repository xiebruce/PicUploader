<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 21:01
 */


namespace uploader;

use Upyun\Config;
use Upyun\Upyun;

class UploadUpyun extends Upload{
    public $serviceName;
    //操作员名称
    public $operator;
    //操作员密码
    public $password;
    //域名
    public $domain;
    public $directory;
	//上传目标服务器名称
	public $uploadServer;
    
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
	    
        $this->serviceName = $ServerConfig['serviceName'];
        $this->operator = $ServerConfig['operator'];
        $this->password = $ServerConfig['password'];
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
	 * Upload files to Upyun(又拍云)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function upload($key, $uploadFilePath){
	    try {
		    if($this->directory){
			    $key = $this->directory. '/' . $key;
		    }
		    $serviceConfig = new Config($this->serviceName, $this->operator, $this->password);
		    $client = new Upyun($serviceConfig);
		    $retArr = $client->write($key, fopen($uploadFilePath, 'r'));
		
		    if(!isset($retArr['x-upyun-content-length'])){
			    throw new \Exception(var_export($retArr, true)."\n");
		    }
		    if(!$this->domain){
			    $this->domain = 'http://'.$this->serviceName.'.test.upcdn.net';
		    }
		    $link = $this->domain.'/'.$key;
	    } catch (NosException $e) {
		    //上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
		    $link = $e->getMessage();
		    $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage(), 'error_log');
	    }
		return $link;
    }
}