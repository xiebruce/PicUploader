<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 15:00
 */

namespace uploader;


use Aws\S3\S3Client;

class UploadUcloud extends Upload{

    public $publicKey;
    public $privateKey;
    public $proxySuffix;
	public $bucket;
	public $endPoint;
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
	    
        $this->publicKey = $ServerConfig['publicKey'];
        $this->privateKey = $ServerConfig['privateKey'];
        $this->proxySuffix = $ServerConfig['proxySuffix'];
        $this->bucket = $ServerConfig['bucket'];
        $this->endPoint = $ServerConfig['endPoint'];
	    $this->domain = $ServerConfig['domain'] ?? '';
	    if(!isset($ServerConfig['directory'])){
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
	 * Upload images to Jcloud
	 * @param $key
	 * @param $uploadFilePath
	 * @param $originFilename
	 *
	 * @return string
	 */
	public function upload($key, $uploadFilePath, $originFilename){
		//因为它的sdk里全是引用的这三个global变量，我也不去改它了，所以变在这里覆盖一下值
		global $UCLOUD_PUBLIC_KEY, $UCLOUD_PRIVATE_KEY, $UCLOUD_PROXY_SUFFIX;
		$UCLOUD_PUBLIC_KEY = $this->publicKey;
		$UCLOUD_PRIVATE_KEY = $this->privateKey;
		$UCLOUD_PROXY_SUFFIX = $this->proxySuffix;
		
		if($this->directory){
			$key = $this->directory. '/' . $key;
		}
		//初始化分片上传,获取本地上传的uploadId和分片大小
		list($data, $err) = UCloud_MInit($this->bucket, $key);
		$this->writeLog('UCloud_MInit: '.var_export($data, true)."\n", 'error_log');
		if ($err) {
			$this->writeLog('UCloud_MInit: '.var_export($err, true)."\n", 'error_log');
			exit;
		}
		
		//数据上传
		list($etagList, $err) = UCloud_MUpload($this->bucket, $key, $uploadFilePath, $data['UploadId'], $data['BlkSize']);
		$this->writeLog('UCloud_MUpload: '.var_export($etagList, true)."\n", 'error_log');
		if ($err) {
			$this->writeLog('UCloud_MUpload: '.var_export($err, true)."\n", 'error_log');
			exit;
		}
		
		//上传p完成
		list($data, $err) = UCloud_MFinish($this->bucket, $key, $data['UploadId'], $etagList);
		$this->writeLog('UCloud_MFinish: '.var_export($data, true)."\n", 'error_log');
		if ($err) {
			$this->writeLog('UCloud_MFinish: '.var_export($err, true)."\n", 'error_log');
			exit;
		}
		
		if(!$this->domain){
			$this->domain = 'http://'.$this->bucket.'.'.ltrim($this->endPoint, '.');
		}
		$link = $this->domain.'/'.$data['Key'];
		
		return $link;
    }
}