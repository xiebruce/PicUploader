<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2019-07-06
 * Time: 22:47
 */


namespace uploader;

use Exception;
use Cloudinary;

class UploadCloudinary extends Upload{
    public $cloudName;
    //api key
    public $apiKey;
    //api secret
    public $apiSecret;
    //是否使用原始文件名
    public $useOriginalName;
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
	    //默认都使用原文件名(这里的原文件名是cloudinary本身的配置项，但PicUploader里可以设置不使用原文件名，虽然这对于cloudinary来说还是原文件名，但由于这个“原文件名”已经是PicUploader修改后的名称，所以保持原文件名并不会导致覆盖)
	    $this->useOriginalName = 1;
        $this->domain = $ServerConfig['domain'] ?? '';
	    // https://res.cloudinary.com/bruce/image/upload/v1567241594/2019/08/31/11.jpg
	    // Cloudinary中的域名中的v1567241594是时间戳，表示版本，但不写版本也是可以的(如果你在cloudinary后台修改了图片则有可能还是获取到原来的图)，或者写短点，写成v1也行，参考：https://support.cloudinary.com/hc/en-us/articles/202520912-What-are-image-versions-
        $defaultDomain = 'https://res.cloudinary.com/' . $this->cloudName . '/image/upload/v1';
	    !$this->domain && $this->domain = $defaultDomain;
     
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
	 * API doc: https://cloudinary.com/documentation/image_upload_api_reference
	 * @param $key
	 * @param $uploadFilePath
	 * @param $originFilename
	 *
	 * @return array
	 */
	public function upload($key, $uploadFilePath, $originFilename){
	    try {
		    if($this->directory){
			    $key = $this->directory . '/' . $key;
		    }
		    
		    //设置参数
		    Cloudinary::config(array(
			    "cloud_name" => $this->cloudName,
			    "api_key" => $this->apiKey,
			    "api_secret" => $this->apiSecret
		    ));
		
		    $uploadOptions = [
		    	//就相当于文件名，不用带后缀，因为cloudinary会根据文件类型自动添加，如果你带了，会有两个后缀
			    'public_id' => substr($key, 0, strrpos($key, '.')),
			    // 默认值：public，所以可不指定
			    'access_mode' => 'public',
			    // 默认值：auto，所以可不指定
			    'resource_type' => 'auto',
			    //设置标题
			    'context' => 'caption='.$originFilename,
		    ];
		    // var_dump($uploadOptions);exit;
		    if($this->useOriginalName){
		    	//使用原始文件名
			    $uploadOptions['use_filename'] = true;
			    //在原始文件名后添加随机字符串(即真正使用原始文件名)
			    //但这样会造成同名覆盖，如果上传另一张名字一样的图片，就会覆盖已存在的图
			    //按道理设置了true就会在原文件名后添加随机字符串，但实测不会，可能有bug
			    $uploadOptions['unique_filename'] = false;
		    }
		    $this->proxy && $uploadOptions['proxy'] = $this->proxy;

		    //上传文件
		    $retArr = Cloudinary\Uploader::upload_large_part($uploadFilePath, $uploadOptions);
		    if(!isset($retArr['public_id'])){
			    throw new Exception(var_export($retArr, true));
		    }
		
		    $data = [
			    'code' => 0,
			    'msg' => 'success',
			    'key' => $key,
			    'domain' => $this->domain,
		    ];
	    } catch (Exception $e) {
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