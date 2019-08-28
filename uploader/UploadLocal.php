<?php
/**
 * Created by PhpStorm.
 * User: Bruce Xie
 * Date: 2019-04-22
 * Time: 00:36
 */
	
namespace uploader;

class UploadLocal extends Common {
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
		//处理目标机是Windows的情况(虽然不太可能是Win，但who knows?)
		$this->prefix = rtrim(str_replace( '\\', '/', $ServerConfig['prefix']), '/');
		$this->domain = $ServerConfig['domain'];
		if(!isset($ServerConfig['directory']) || ($ServerConfig['directory']=='' && $ServerConfig['directory']!==false)){
			//如果没有设置，使用默认的按年/月/日方式使用目录
			$this->directory = date('Y/m/d');
		}else{
			//设置了，则按设置的目录走
			$this->directory = trim(str_replace( '\\', '/', $ServerConfig['directory']), '/');
		}
		$this->uploadServer = ucfirst($params['uploadServer']);
		
		$this->argv = $params['argv'];
		static::$config = $params['config'];
	}
	
	/**
	 * Upload files to local(the server that PicUploader located at)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 */
	public function upload($key, $uploadFilePath){
		try{
			if(!is_dir($this->prefix)){
				throw new \Exception('Please make sure that prefix directory exists.');
			}
			
			$destDir = $this->prefix.'/'.$this->directory;
			
			//如果目录不存在，则创建
			!is_dir($destDir) && @mkdir($destDir, 0777, true);
			
			$destFilePath = $destDir.'/'.$key;
			if(!copy($uploadFilePath, $destFilePath)){
				throw new \Exception('Upload failed');
			}
			$link = $this->domain.'/'.$this->directory.'/'.$key;
		}catch (\Exception $e){
			//上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
			$link = $e->getMessage();
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage(), 'error_log');
		}
		return $link;
	}
}