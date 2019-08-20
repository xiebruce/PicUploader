<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2019-07-06
 * Time: 22:47
 */


namespace uploader;

use Cloudinary;

class UploadCloudinary extends Upload{
    public $cloudName;
    //api key
    public $apiKey;
    //api secret
    public $apiSecret;
    //域名
    public $domain;
    //上传目标文件夹
    public $directory;
	//是否使用代理
	public $proxy;
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
	    
        $this->cloudName = $ServerConfig['cloudName'];
	    $this->apiKey = $ServerConfig['apiKey'];
	    $this->apiSecret = $ServerConfig['apiSecret'];
        $this->domain = $ServerConfig['domain'] ?? '';
	    if(!isset($ServerConfig['directory']) || ($ServerConfig['directory']=='' && $ServerConfig['directory']!==false)){
		    //如果没有设置，使用默认的按年/月/日方式使用目录
		    $this->directory = date('Y/m/d');
	    }else{
		    //设置了，则按设置的目录走
		    $this->directory = trim($ServerConfig['directory'], '/');
	    }
	    $this->proxy = $ServerConfig['proxy'] ?? '';
	    $this->uploadServer = ucfirst($params['uploadServer']);

        $this->argv = $params['argv'];
        static::$config = $params['config'];
    }
	
	/**
	 * Upload files to Cloudinary
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function upload($key, $uploadFilePath){
	    try {
		    // $pathinfo = pathinfo($uploadFilePath);
	    	// var_export($pathinfo);exit;
		    // $key = preg_replace('/.jpg|.jpeg|.png|$/');
		    if($this->directory){
			    $key = $this->directory. '/' . $key;
		    }
		    
		    //设置参数
		    Cloudinary::config(array(
			    "cloud_name" => $this->cloudName,
			    "api_key" => $this->apiKey,
			    "api_secret" => $this->apiSecret
		    ));
		
		    $uploadOptions = [
			    'public_id' => $key,
		    ];
		    $this->proxy && $uploadOptions['proxy'] = $this->proxy;

		    //上传文件
		    $retArr = Cloudinary\Uploader::upload_large_part($uploadFilePath, $uploadOptions);
		    if(!isset($retArr['secure_url'])){
			    throw new \Exception(var_export($retArr, true)."\n");
		    }
		    if($this->domain){
		    	$link = $this->domain . '/' .$retArr['public_id'];
		    }else{
			    $link = $retArr['secure_url'];
		    }
	    } catch (NosException $e) {
		    //上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
		    $link = $e->getMessage();
		    $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage(), 'error_log');
	    }
		return $link;
    }
}