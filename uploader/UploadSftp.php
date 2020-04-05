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
     * 检查目录是否存在
     * @param $dirPath
     *
     * @return bool
     * @throws Exception
     */
    public function checkDirExistence($dirPath){
        $sftp = new SFTP($this->host, $this->port, $this->timeout);
        if (!$sftp->login($this->username, $this->password)) {
            throw new Exception('Login Failed');
        }
        return $sftp->is_dir($dirPath);
    }
    
    /**
     * 递归创建目录
     * @param $dirPath
     *
     * @return bool
     * @throws Exception
     */
    public function mkdir($dirPath){
        $sftp = new SFTP($this->host, $this->port, $this->timeout);
        if (!$sftp->login($this->username, $this->password)) {
            throw new Exception('Login Failed');
        }
        //第二个参数-1表示不设置权限(默认使用当前用户的权限)，第三个参数true表示递归创建
        return $sftp->mkdir($dirPath, -1, true);
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
			//注意，login虽然提示只接收username一个参数，但其实第二个password肯定要传的，因为没密码是不可能登录的
            //只提示一个参数的原因，是因为它第二个参数是使用func_get_args()这个函数动态获取参数，所以IDE不提示。
			if (!$sftp->login($this->username, $this->password)) {
				throw new Exception('Login Failed');
			}
            $uploadDirPath = $this->prefix . '/' . $this->directory;
			if(!$this->checkDirExistence($uploadDirPath)){
                //创建文件夹(可以递归创建)，如果整个路径已经存在，则mkdir会返回false，所以要先用is_dir
                //查看是否已存在，否则无法知道mkdir到底是因为创建失败还是目录已存在返回的false
                if(!$this->mkdir($uploadDirPath)){
                    throw new Exception('创建目录失败: ' . $uploadDirPath);
                }
            }
			
			$key2 = $key;
			$key = $uploadDirPath . '/' . $key;
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