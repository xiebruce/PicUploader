<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 15:00
 */

namespace uploader;

class UploadUcloud extends Upload{

    public $publicKey;
    public $privateKey;
    public $proxySuffix;
	public $bucket;
	public $endPoint;
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
	    $ServerConfig = $params['config']['storageTypes'][$params['uploadServer']];;
	    
        $this->publicKey = $ServerConfig['publicKey'];
        $this->privateKey = $ServerConfig['privateKey'];
        $this->proxySuffix = $ServerConfig['proxySuffix'];
        $this->bucket = $ServerConfig['bucket'];
        $this->endPoint = $ServerConfig['endPoint'];
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
	 * Upload images to Ucloud
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 */
	public function upload($key, $uploadFilePath){
		try{
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
			if ($err) {
				throw new \Exception('UCloud_MFinish: '.var_export($err, true));
			}
			
			//数据上传
			list($etagList, $err) = UCloud_MUpload($this->bucket, $key, $uploadFilePath, $data['UploadId'], $data['BlkSize']);
			if ($err) {
				throw new \Exception('UCloud_MFinish: '.var_export($err, true));
			}
			
			//上传p完成
			list($data, $err) = UCloud_MFinish($this->bucket, $key, $data['UploadId'], $etagList);
			if ($err) {
				throw new \Exception('UCloud_MFinish: '.var_export($err, true));
			}
			
			if(!$this->domain){
				$this->domain = 'http://'.$this->bucket.'.'.ltrim($this->endPoint, '.');
			}
			$link = $this->domain.'/'.$data['Key'];
		}catch (\Exception $e){
			//上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
			$link = $e->getMessage();
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage(), 'error_log');
		}
		return $link;
    }
}