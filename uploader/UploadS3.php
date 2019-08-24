<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2019-07-24
 * Time: 19:49
 */

namespace uploader;

use Aws\DynamoDb\DynamoDbClient;
use Aws\S3\S3Client;

class UploadS3 extends Upload{

    public $accessKey;
    public $secretKey;
    public $bucket;
    public $region;
	public $domain;
	public $proxy;
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
	    $ServerConfig = $params['config']['storageTypes'][$params['uploadServer']];
	    
        $this->accessKey = $ServerConfig['AccessKeyId'];
        $this->secretKey = $ServerConfig['AccessKeySecret'];
        $this->bucket = $ServerConfig['bucket'];
        $this->region = $ServerConfig['region'];
	    $this->domain = $ServerConfig['domain'] ?? '';
	    $this->proxy = $ServerConfig['proxy'] ?? '';
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
	 * Upload files to Amazon S3(S3 stands for three words that begin with letter S：Simple Storage Service)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function upload($key, $uploadFilePath){
	    try {
		    if($this->directory){
			    $key = $this->directory. '/' . $key;
		    }
		    
		    $config = [
			    'version' => 'latest',
			    'region' => $this->region,
			    'credentials' => [
				    'key' => $this->accessKey,
				    'secret' => $this->secretKey,
			    ],
		    ];
		    //如果有使用代理
		    if($this->proxy){
			    $config['http'] = [
				    'proxy' => $this->proxy,
			    ];
		    }
		    // var_dump($config);exit;
		    $s3Client = new S3Client($config);
		    $retObj = $s3Client->upload($this->bucket, $key, fopen($uploadFilePath, 'r'), 'public-read');
		    if(!is_object($retObj)){
			    throw new \Exception(var_export($retObj, true));
		    }
			
		    //返回链接格式：
		    //https://markdownimgbed.s3.ap-northeast-1.amazonaws.com/2019/07/24/b7f2ea3fb8a86f710f24687924d17d64.png
		    $link = $retObj->get('ObjectURL');
		    if($this->domain){
			    $defaultDomain = 'https://'.$this->bucket.'.s3.'.$this->region.'.amazonaws.com';
			    $link = str_replace($defaultDomain, $this->domain,$link);
		    }
	    } catch (\Exception $e) {
		    //上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
		    $link = $e->getMessage();
		    $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage(), 'error_log');
	    }
        return $link;
    }
}