<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 21:01
 */

namespace uploader;

use GuzzleHttp\Client;

class UploadGithub extends Upload{
    //github仓库(带用户名)，如：xiebruce/PicUploader
    public $repo;
    //分支，默认：master
    public $branch;
	//文件夹，表示把图片上传到仓库中的哪个文件夹下，可以为空，可以写多层文件夹，如：images/travel/Turkey
    public $directory;
    //github commit时的-m参数指定的内容，默认：Upload from PicUploader [https://www.xiebruce.top/17.html]
    public $message;
    //access_token，需要有这个才有权限操作
    public $access_token;
	//域名
	public $domain;
	//api基础地址
	public $baseUri;
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
	    $ServerConfig = $params['config']['storageTypes'][$params['uploadServer']];;
	    
	    $this->repo = $ServerConfig['repo'] ?? '';
	    $this->branch = $ServerConfig['branch'] ?? 'master';
	    $this->message = $ServerConfig['message'] ?? 'Upload from PicUploader: https://github.com/xiebruce/PicUploader';
	    $this->access_token = $ServerConfig['access_token'] ?? '';
	    $this->domain = $ServerConfig['domain'] ?? '';
	    if(!isset($ServerConfig['directory']) || ($ServerConfig['directory']=='' && $ServerConfig['directory']!==false)){
		    //如果没有设置，使用默认的按年/月/日方式使用目录
		    $this->directory = date('Y/m/d');
	    }else{
		    //设置了，则按设置的目录走
		    $this->directory = trim($ServerConfig['directory'], '/');
	    }
	
	    $this->baseUri = 'https://api.github.com/repos/';
	    $this->proxy = $ServerConfig['proxy'] ?? '';
	    $this->uploadServer = ucfirst($params['uploadServer']);

        $this->argv = $params['argv'];
        static::$config = $params['config'];
    }
	
	/**
	 * Upload files to Github
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function upload($key, $uploadFilePath){
		try {
			$GuzzleConfig = [
				'base_uri' => $this->baseUri,
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
			$response = $client->request('PUT', $uri, [
				'headers' => [
					'Authorization' => 'token '.$this->access_token,
				],
				'json' => [
					'message' => $this->message,
					'content' => base64_encode(file_get_contents($uploadFilePath)),
					'branch' => $this->branch,
				],
			]);
			
			$string = $response->getBody()->getContents();
			
			if($response->getReasonPhrase() != 'Created'){
				throw new \Exception($string);
			}
			
			$returnArr = json_decode($string, true);
			if(!isset($returnArr['content']['download_url'])){
				throw new \Exception(var_export($returnArr, true));
			}
			
			if(!$this->domain){
				$link = $returnArr['content']['download_url'];
			}else{
				$link = $this->domain . '/' .$returnArr['content']['path'];
			}
		} catch (Exception $e) {
			//上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
			$link = $e->getMessage();
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage(), 'error_log');
		}
		return $link;
    }
}