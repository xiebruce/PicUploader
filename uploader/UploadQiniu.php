<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 00:46
 */

namespace uploader;

use Qiniu\Auth;
use Qiniu\Config;
use Qiniu\Storage\UploadManager;

class UploadQiniu extends Common {
    //七牛AccessKey
    public $accessKey;
    //七牛AccessSecret
    public $secretKey;
    //七牛存储空间名称
    public $bucket;
    //七牛对外开放域名
    public $domain;
    public $directory;
    
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
	    
        $this->accessKey = $ServerConfig['AK'];
        $this->secretKey = $ServerConfig['SK'];
        $this->bucket = $ServerConfig['bucket'];
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
	 * Upload Images to Qiniu Kodo
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function upload($key, $uploadFilePath){
		try {
			//获取七牛token
			$token = $this->getToken();
			// 构建 UploadManager 对象
			$uploadMgr = new UploadManager();
			if($this->directory){
				$key = $this->directory. '/' . $key;
			}
			// 调用 UploadManager 的 putFile 方法进行文件的上传。
			list($ret, $err) = $uploadMgr->putFile($token, $key, $uploadFilePath);
			if ($err !== null) {
				throw new \Exception(var_export($err, true)."\n");
			} else {
				//拼接域名和优化参数成为一个可访问的外链
				$link = $this->domain . '/' . $ret['key'];
				$optimize = isset(static::$config['optimize']) ? static::$config['optimize'] : '';
				$optimize && $link .= $optimize;
			}
		}catch (\Exception $e){
			//上传数错，记录错误日志
			$link = $e->getMessage()."\n";
			$this->writeLog($link, 'error_log');
		}
		return $link;
    }

    /**
     * 获取七牛token
     * @return bool|string
     */
    public function getToken(){
        // 初始化签权对象
        $auth = new Auth($this->accessKey, $this->secretKey);
        //你创建你的七牛云存储空间名称
        $bucket = $this->bucket;
        //token过期时间
        $expires = 7190;
        //如果文件存在，且未过期，且文件里有内容，则使用文件缓存的token
        $tokenDir = __DIR__ . '/token';
        if(!is_dir($tokenDir)){
            @mkdir($tokenDir, 0777, true);
        }
        $tokenFile = __DIR__ . '/token/qiniuToken';
        if(is_file($tokenFile) && ((time() - filemtime($tokenFile)) < $expires) && file_get_contents($tokenFile)!=''){
            $token = file_get_contents($tokenFile);
        }else{
            // 生成上传Token
            $token = $auth->uploadToken($bucket, null, $expires);
            //缓存到文件中
            file_put_contents($tokenFile,$token);
        }
        return $token;
    }
}