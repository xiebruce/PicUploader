<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 15:00
 */

namespace uploader;

use NOS\NosClient;

class UploadNetease extends Upload{

    public $accessKey;
    public $secretKey;
    public $bucket;
    //即domain，域名
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
	    
        $this->accessKey = $ServerConfig['accessKey'];
        $this->secretKey = $ServerConfig['accessSecret'];
        $this->bucket = $ServerConfig['bucket'];
        //endPoint不是域名，外链域名是 bucket.'.'.endPoint
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
	 * Upload images to Netease Cloud
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 * @throws \NOS\Core\NosException
	 */
	public function upload($key, $uploadFilePath){
	    try {
		    $tmpArr = explode('/', $key);
		    $newFileName = array_pop($tmpArr);
		    $options[NosClient::NOS_HEADERS]['Cache-Control'] = 'max-age=31536000';
		    $options[NosClient::NOS_HEADERS]['Content-Disposition'] = 'attachment; filename="'.$newFileName.'"';
		
		    if($this->directory){
			    $key = $this->directory. '/' . $key;
		    }
		    $nosClient = new NosClient($this->accessKey, $this->secretKey, $this->endPoint);
		    $nosClient->uploadFile($this->bucket, $key, $uploadFilePath, $options);
		    if(!$this->domain){
			    $this->domain = 'http://'.$this->bucket.'.'.$this->endPoint;
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