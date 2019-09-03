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
use NOS\NosClient;

class UploadNetease extends Upload{

    public $accessKey;
    public $secretKey;
    public $bucket;
    //即domain，域名
    public $endpoint;
    public $domain;
    public $region;
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
        //endpoint不是域名，外链域名是 bucket.'.'.endpoint
        $this->endpoint = $ServerConfig['endpoint'];
        $this->region = $ServerConfig['region'];
	    $this->domain = $ServerConfig['domain'] ?? '';
	    //http://markdown-bucket.nos-eastchina1.126.net/2019/08/30/d2c3738f9ce6293116b971b353ef70b5.jpg
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
	 * Upload files to Netease Cloud
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return mixed|string
	 * @throws Exception
	 */
	public function upload($key, $uploadFilePath){
	    try {
		    if($this->directory){
			    $key = $this->directory . '/' . $key;
		    }
		    
		    $config = [
			    'version' => 'latest',
			    'region' => $this->region,
			    'credentials' => [
				    'key' => $this->accessKey,
				    'secret' => $this->secretKey,
			    ],
			    'endpoint' => $this->endpoint,
		    ];
		    
		    //如果有使用代理
		    if($this->proxy){
			    $config['http'] = [
				    'proxy' => $this->proxy,
			    ];
		    }

		    $s3Client = new S3Client($config);
		    $fp = fopen($uploadFilePath, 'rb');
		    $retObj = $s3Client->upload($this->bucket, $key, $fp, 'public-read');
		    is_resource($fp) && fclose($fp);
			
		    if(!is_object($retObj)){
			    throw new Exception(var_export($retObj, true));
		    }
		
		    //返回链接格式：
		    //http://markdown-bucket.nos-eastchina1.126.net/2019/08/30/d2c3738f9ce6293116b971b353ef70b5.jpg
		    // 这样可以获取到返回的链接，但我们不需要，这个链接可以自己拼
		    // $link = $retObj->get('ObjectURL');
		    
		    $data = [
			    'code' => 0,
			    'msg' => 'success',
			    'key' => $key,
			    'domain' => $this->domain,
		    ];
	    } catch (NosException $e) {
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