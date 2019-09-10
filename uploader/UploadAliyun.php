<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-07-06
 * Time: 22:52
 */


namespace uploader;

use Aws\S3\S3Client;
use Exception;
use OSS\OssClient;

class UploadAliyun extends Upload{

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
	    $ServerConfig = $params['config']['storageTypes'][$params['uploadServer']];
	    
        $this->accessKey = $ServerConfig['accessKey'];
        $this->secretKey = $ServerConfig['accessSecret'];
        $this->bucket = $ServerConfig['bucket'];
        $this->endpoint = $ServerConfig['endpoint'];
	    $this->domain = $ServerConfig['domain'] ?? '';
	    // http://bruce-markdown.oss-cn-shenzhen.aliyuncs.com
	    $defaultDomain = 'http://' . $this->bucket . '.' . $this->endpoint;
	    if(!$this->domain){
		    $this->domain = $defaultDomain;
	    }
	
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
	 * Upload files to Aliyun OSS(Object Storage Service)
	 * @param $key
	 * @param $uploadFilePath
	 * @param $useS3CompatibleApi
	 *
	 * @return array
	 */
	public function upload($key, $uploadFilePath, $useS3CompatibleApi=true){
	    try {
	    	if($this->directory){
			    $key = $this->directory . '/' . $key;
		    }
		
	    	if($useS3CompatibleApi){
			    $region = str_replace('.aliyuncs.com', '', $this->endpoint);
			    // ======================== 阿里云s3兼容api start =========================
			    $config = [
				    'version'     => 'latest',
				    'region'      => $region,
				    'credentials' => [
					    'key'    => $this->accessKey,
					    'secret' => $this->secretKey,
				    ],
				    'endpoint' => 'http://'.$this->endpoint,
				    'signature_version' => 'v4',
			    ];
			
			    $s3Client = new S3Client($config);
			    $fp = fopen($uploadFilePath, 'rb');
			    $retObj = $s3Client->upload($this->bucket, $key, $fp, 'public-read');
			    is_resource($fp) && fclose($fp);
			    
			    if(!is_object($retObj) || !$retObj->get('ObjectURL')){
				    throw new Exception(var_export($retObj, true));
			    }
			
			    //返回链接格式：
			    //http://markdown.s3.gz.bcebos.com/8b7c7cf23652d92afa50668fd10aaba9.jpg
			    //可以这样获取返回的链接，但我们不用它，直接拼就可以
			    // $link = $retObj->get('ObjectURL');
			    // ======================== 阿里云s3兼容api end =========================
		    }else{
			    // ======================== 阿里云api start =========================
			    $oss = new OssClient($this->accessKey, $this->secretKey, $this->endpoint);
			    if(!is_file($uploadFilePath)){
				    throw new Exception('file '. $uploadFilePath . ' does not exists.');
			    }
			
			    $retArr = $oss->uploadFile($this->bucket, $key, $uploadFilePath);
			    if(!isset($retArr['info']['url'])){
				    throw new Exception(var_export($retArr, true));
			    }
			    // ======================== 阿里云api end =========================
		    }
		    
		    //上传后返回的链接，但返回的链接不需要，因为图片链接一定是默认域名+key
		    // $link = $retArr['info']['url'];
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