<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 21:01
 */


namespace uploader;

use Exception;
use Upyun\Config;
use Upyun\Upyun;

class UploadUpyun extends Upload{
    public $serviceName;
    //操作员名称
    public $operator;
    //操作员密码
    public $password;
    //域名
    public $domain;
    public $directory;
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
	    
        $this->serviceName = $ServerConfig['serviceName'];
        $this->operator = $ServerConfig['operator'];
        $this->password = $ServerConfig['password'];
        $this->domain = $ServerConfig['domain'] ?? '';
        //http://blog-markdown.test.upcdn.net
        $defaultDomain = 'http://' . $this->serviceName . '.test.upcdn.net';
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
    
    // public function
	
	/**
	 * Upload files to Upyun(又拍云)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return array
	 * @throws Exception
	 */
	public function upload($key, $uploadFilePath){
	    try {
		    if($this->directory){
			    $key = $this->directory . '/' . $key;
		    }
		    $serviceConfig = new Config($this->serviceName, $this->operator, $this->password);
		    // 15728640 = 15M，如果文件大于15M，则使用并行分块上传
            if(filesize($uploadFilePath) > 15728640){
                /* uploadType有两个值
                   - BLOCK : 串行分块上传
                   - BLOCK_PARALLEL : 并行分块上传
                */
                $serviceConfig->uploadType = 'BLOCK_PARALLEL';
            }
		    $client = new Upyun($serviceConfig);
		    $fp = fopen($uploadFilePath, 'rb');
		    $retArr = $client->write($key, $fp);
		    is_resource($fp) && fclose($fp);
			
		    if(!isset($retArr['x-upyun-content-length'])){
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