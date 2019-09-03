<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 15:00
 */

namespace uploader;

use Aws\S3\S3Client;
use Exception;
use BaiduBce\Services\Bos\BosClient;

class UploadBaidu extends Upload{
	public $bosConfig;
	public $accessKeyId;
	public $secretAccessKey;
	public $endpoint;
	public $bucket;
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
	    
	    $this->accessKeyId = $ServerConfig['accessKeyId'];
	    $this->secretAccessKey = $ServerConfig['secretAccessKey'];
	    $this->endpoint = $ServerConfig['endpoint'];
	    $this->bucket = $ServerConfig['bucket'];
	    $this->domain = $ServerConfig['domain'] ?? '';
	    $defaultDomain = str_replace('//', '//'.$this->bucket.'.', $this->endpoint);
	    !$this->domain && $this->domain = $defaultDomain;
	    
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
	 * Upload files to Baidu BOS(Baidu Object Storage)
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
		    
		    // 使用s3兼容api
	    	if($useS3CompatibleApi){
			    // ================= s3兼容 接口 start ==================
			    $start = strpos($this->endpoint, '//') + 2;
			    $end = strpos($this->endpoint, '.');
			    $region = substr($this->endpoint, $start, $end - $start);

			    $this->endpoint = str_replace('//', '//s3.', $this->endpoint);
			    $config = [
				    'version'     => 'latest',
				    'region'      => $region,
				    'credentials' => [
					    'key'    => $this->accessKeyId,
					    'secret' => $this->secretAccessKey,
				    ],
				    'endpoint' => $this->endpoint,
				    'signature_version' => 'v4',
			    ];
				
			    $s3Client = new S3Client($config);
			    $fp = fopen($uploadFilePath, 'rb');
			    $retObj = $s3Client->upload($this->bucket, $key, $fp, 'public-read');
			    is_resource($fp) && fclose($fp);
			
			    if(!is_object($retObj)){
				    throw new Exception(var_export($retObj, true));
			    }
			
			    //返回链接格式：
			    //http://markdown.s3.gz.bcebos.com/8b7c7cf23652d92afa50668fd10aaba9.jpg
			    //可以这样获取返回的链接，但我们不用它，直接拼就可以
			    // $link = $retObj->get('ObjectURL');
			    // ================= s3兼容 接口 end ==================
		    }else{
			    /*
			     * 如果设置了压缩图片或添加水印(即重新生成了图片的话)，则该接口上传会报错
			     * The request signature we calculated does not match the signature you provided. Check your Secret Access Key and signing method. Consult the service documentation for details. [requestId:50e0e073-72e3-4020-949a-500e75136dd5 status:403 code:SignatureDoesNotMatch]
			     */
			    // ========== 百度接口 ============
			    $bosConfig = [
				    'credentials' => [
					    'accessKeyId' => $this->accessKeyId,
					    'secretAccessKey' => $this->secretAccessKey,
				    ],
				    'endpoint' => $this->endpoint,
			    ];
			    $bosClient = new BosClient($bosConfig);
			    if(!is_file($uploadFilePath)){
				    throw new Exception('file '. $uploadFilePath . ' does not exists.');
			    }
			    $retArr = $bosClient->putObjectFromFile($this->bucket, $key, $uploadFilePath);
			    if(!isset($retArr->metadata['etag'])){
				    throw new Exception(var_export($retArr, true));
			    }
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