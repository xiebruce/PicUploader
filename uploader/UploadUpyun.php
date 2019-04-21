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

        $this->argv = $argv;
        static::$config = $config;
    }
	
	/**
	 * Upload images to Upyun
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
		    }else{
		    	if(!$this->domain){
				    $this->domain = 'http://'.$this->serviceName.'.test.upcdn.net';
			    }
			    $link = $this->domain.'/'.$key;
		    }
	    } catch (NosException $e) {
		    //上传数错，记录错误日志
		    $link = $e->getMessage()."\n";
		    $this->writeLog($link, 'error_log');
	    }
		return $link;
    }
}