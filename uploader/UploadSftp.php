<?php
/**
 * Created by PhpStorm.
 * User: Bruce Xie
 * Date: 2019-04-22
 * Time: 00:36
 */
	
namespace uploader;

use Exception;
use phpseclib\Net\SFTP;

class UploadSftp extends Common {
	public $host;
	public $port;
	public $timeout;
	public $username;
	public $password;
	public $prefix;
	public $directory;
	public $domain;
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
		
		$this->host = $ServerConfig['host'] ?? '';
		$this->port = $ServerConfig['port'] ?? '';
		$this->timeout = $ServerConfig['timeout'] ?? '30';
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
		$this->uploadServer = ucfirst($params['uploadServer']);
		
		$this->argv = $params['argv'];
		static::$config = $params['config'];
	}
	
	/**
	 * Upload files to a server by sftp
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return array
	 */
	public function upload($key, $uploadFilePath){
		try{
			$sftp = new SFTP($this->host, $this->port, $this->timeout);
			if (!$sftp->login($this->username, $this->password)) {
				throw new Exception('Login Failed');
			}
			$key2 = $key;
			$key = $this->prefix . '/' . $this->directory . '/' . $key;
			if(!$sftp->put($key, $uploadFilePath, SFTP::SOURCE_LOCAL_FILE)){
				throw new Exception('Upload failed');
			}
			$key = $this->directory . '/' . $key2;
			
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