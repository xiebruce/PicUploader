<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2019-07-06
 * Time: 22:52
 */

namespace uploader;

use Exception;
use GuzzleHttp\Client;

class UploadGitee extends Upload{
    
    const BASE_URI = 'https://gitee.com/api/v5/repos/';
    
    //gittee仓库(带用户名)，如：xiebruce/PicUploader
    public $repo;
    //分支，默认：master
    public $branch;
	//文件夹，表示把图片上传到仓库中的哪个文件夹下，可以为空，可以写多层文件夹，如：images/travel/Turkey
    public $directory;
    //gitee commit时的-m参数指定的内容，默认：Upload by PicUploader [https://github.com/xiebruce/PicUploader]
    public $message;
    //access_token，需要有这个才有权限操作
    public $access_token;
	//域名
	public $domain;
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
	    
	    $this->repo = $ServerConfig['repo'] ?? '';
	    $this->branch = $ServerConfig['branch'] ?? 'master';
	    $this->message = $ServerConfig['message'] ?? 'Upload by PicUploader [https://github.com/xiebruce/PicUploader]';
	    $this->access_token = $ServerConfig['access_token'] ?? '';
	    $this->domain = $ServerConfig['domain'] ?? '';
	    // https://gitee.com/xiebruce/imagebed/raw/master/2019/08/31/9ac6b79ca970fe0a6be2e5f31bf2bc59.jpeg
	    $defaultDomain = 'https://gitee.com/' . $this->repo . '/raw/' . $this->branch;
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
	 * Upload files to gittee(即码云)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function upload($key, $uploadFilePath){
		try {
			$GuzzleConfig = [
				'base_uri' => static::BASE_URI,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//new GuzzleHttp instance
			$client = new Client($GuzzleConfig);
			
			//request
			if($this->directory){
				$key = $this->directory . '/' . $key;
			}
			$uri = $this->repo . '/contents/'. $key;
			$response = $client->request('POST', $uri, [
				'verify' => false,
				'json' => [
					'access_token' => $this->access_token,
					'message' => $this->message,
					'content' => base64_encode(file_get_contents($uploadFilePath)),
					'branch' => $this->branch,
				],
			]);
			
			$string = $response->getBody()->getContents();
			
			if($response->getReasonPhrase() != 'Created'){
				throw new Exception($string);
			}
			
			$returnArr = json_decode($string, true);
			if(!isset($returnArr['content']['download_url'])){
				throw new Exception(var_export($returnArr, true));
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