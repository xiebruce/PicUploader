<?php
/**
 * Created by PhpStorm.
 * User: Bruce Xie
 * Date: 2019-04-22
 * Time: 00:36
 */
	
namespace uploader;

use phpseclib\Net\SFTP;

class UploadSftp extends Common {
	public $host;
	public $username;
	public $password;
	public $prefix;
	public $directory;
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
	 * @param $uploadServer
	 */
	public function __construct($config, $argv, $uploadServer)
	{
		$ServerConfig = $config['storageTypes'][$uploadServer];
		$this->host = $ServerConfig['host'];
		$this->username = $ServerConfig['username'];
		$this->password = $ServerConfig['password'];
		$this->prefix = rtrim($ServerConfig['prefix'], '/');
		$this->domain = $ServerConfig['domain'];
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
	 * Upload Images to Tecent COS(Cloud Object Storage)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 */
	public function upload($key, $uploadFilePath){
		try{
			$sftp = new SFTP($this->host);
			if (!$sftp->login($this->username, $this->password)) {
				throw new \Exception('Login Failed');
			}
			$key2 = $key;
			$key = $this->prefix.'/'.$this->directory.'/'.$key;
			if(!$sftp->put($key, $uploadFilePath, SFTP::SOURCE_LOCAL_FILE)){
				throw new \Exception('Upload failed');
			}
			$link = $this->domain.'/'.$this->directory.'/'.$key2;
		}catch (\Exception $e){
			//上传数错，记录错误日志
			$link = $e->getMessage()."\n";
			$this->writeLog($link, 'error_log');
		}
		return $link;
	}
}