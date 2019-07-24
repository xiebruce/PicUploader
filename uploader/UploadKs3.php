<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 21:01
 */

namespace uploader;
use Ks3Client;

class UploadKs3 extends Upload{

    public $accessKey;
    public $secretKey;
    public $bucket;
    //即domain，域名
    public $endpoint;
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
    	$ch = curl_init();
	    $ServerConfig = $params['config']['storageTypes'][$params['uploadServer']];
	    
        $this->accessKey = $ServerConfig['accessKey'];
        $this->secretKey = $ServerConfig['accessSecret'];
        $this->bucket = $ServerConfig['bucket'];
        $this->endpoint = $ServerConfig['endpoint'];
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
	 * Upload images to Aliyun OSS(Object Storage Service)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 */
	public function upload($key, $uploadFilePath){
	    try {
		    $aa = curl_init();
		    // var_export($aa);exit;
	    	if($this->directory){
			    $key = $this->directory. '/' . $key;
		    }
	    	
		    $client = new Ks3Client($this->accessKey, $this->secretKey, $this->endpoint);
		    $res = $client->putObjectByFile([
		    	'Bucket' => $this->bucket,
		    	'Key' => $key,
			    "ACL"=>"public-read",//可以设置访问权限,合法值,private、public-read
		    	'Content' => [
		    		'content' => fopen($uploadFilePath, 'r'),
				    'seek_position' => 0,
			    ],
		    ]);
		    
	    	
		    if(!isset($res['ETag'])){
			    throw new \Exception(var_export($res, true)."\n");
		    }
		    //默认域名：https://ks3-cn-guangzhou.ksyun.com（与不同区域有关）
		    if(!$this->domain){
		    	$this->domain = 'https://' . $this->endpoint;
		    }
		    $link = $this->domain . '/' . $this->bucket . '/' . $key;
	    } catch (\Exception $e) {
		    //上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
		    $link = $e->getMessage();
		    $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage(), 'error_log');
	    }
	    return $link;
    }
}