<?php
/**
 * Created by PhpStorm.
 * User: Bruce Xie
 * Date: 2019-10-31
 * Time: 14:32
 */

namespace uploader;

use Exception;
use GuzzleHttp\Client as GuzzleClient;

/*
 * 文档： https://www.dropbox.com/developers/documentation/http/documentation
 */
class UploadDropbox extends Upload{
    
    const BASE_URL = 'https://dropbox.com';
    const AUTH_TOKEN_URL = 'https://api.dropboxapi.com/oauth2/token';
    const UPLOAD_URL = 'https://content.dropboxapi.com/2/files/upload';
    // const CREATE_SHARED_LINK = 'https://api.dropboxapi.com/2/sharing/create_shared_link';
    const CREATE_SHARED_LINK = 'https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings';
    
	public $appKey;
	public $appSecret;
	public $redirectUri;
	public $baseUrl = '';
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
		$ServerConfig = $params['config']['storageTypes'][strtolower($params['uploadServer'])];
		$this->uploadServer = ucfirst($params['uploadServer']);
		$this->appKey = $ServerConfig['appKey'];
		$this->appSecret = $ServerConfig['appSecret'];
		$this->proxy = $ServerConfig['proxy'] ?? '';
		if(php_sapi_name() != 'cli'){
			$scheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://';
			$this->redirectUri = $scheme . $_SERVER['HTTP_HOST'] . '/auth/' . $this->uploadServer . 'Redirect.php';
		}
		$this->domain = $ServerConfig['domain'] ?? '';
		
		$defaultDomain = 'https://dl.dropboxusercontent.com/s';
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
		
		
		$this->argv = $params['argv'];
		static::$config = $params['config'];
	}
	
	/**
	 * 返回授权url
     * 文档： https://www.dropbox.com/developers/documentation/http/documentation
     * 注意，文档右侧的目录导航里没有oauth2.0相关的，直接从文档最开始往下看或者搜索"Authorization"就行
	 * @return string
	 */
	public function getAuthorizationUrl(){
		session_start();
		$state = $this->getRandomString(32);
		$_SESSION['state'] = $state;
		//Request Parameters
		$params = [
			'client_id' => $this->appKey,
			'response_type' => 'code',
			'state' => $state,
			'redirect_uri' => $this->redirectUri,
		];
		
		$queryParams = http_build_query($params);
        $authUrl = static::BASE_URL . '/oauth2/authorize?' . $queryParams;
		return $authUrl;
	}
	
	/**
	 * newGuzzleClient
	 * @param string $baseUrl
	 *
	 * @return GuzzleClient
	 */
	public function newGuzzleClient($baseUrl=''){
		$GuzzleConfig = [
			'timeout'  => 30.0,
		];
		if($baseUrl){
			$GuzzleConfig['base_uri'] = $baseUrl;
		}
		if($this->proxy){
			$GuzzleConfig['proxy'] = $this->proxy;
		}
		//实例化GuzzleHttp
		return new GuzzleClient($GuzzleConfig);
	}
	
	/**
	 * 获取AccessToken
     * 文档： https://www.dropbox.com/developers/documentation/http/documentation
     * 注意: 文档右侧的目录导航里没有oauth2.0相关的，直接从文档最开始往下看或者搜索"/oauth2/token"往下几个就是
     * 注意: dropbox是没有refresh_token的说法的，所以它的access_token是永久有效的(除非重新授权)
	 * @param        $code
	 * @param string $grant_type
	 *
	 * @return mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function getAccessTokenFromCode($code, $grant_type = 'authorization_code') {
		//Request Params
		$params = [
			'code' => $code,
			'grant_type' => $grant_type,
			'client_id' => $this->appKey,
			'client_secret' => $this->appSecret,
			'redirect_uri' => $this->redirectUri,
		];
		
		$queryString = http_build_query($params);
		$uri = static::AUTH_TOKEN_URL . '?' . $queryString;
		
		//实例化GuzzleHttp
		$client = $this->newGuzzleClient(static::BASE_URL);
		//upload file to onedrive root path
		$response = $client->request('POST', $uri, [
		    'verify' => false,
        ]);
		
		$string = $response->getBody()->getContents();
		if($response->getReasonPhrase() != 'OK'){
			throw new Exception($string);
		}
		
		$tokenFile = APP_PATH . '/uploader/token/'.$this->uploadServer.'Tokens';
		file_put_contents($tokenFile, $string);
		
		//parse the response json into a Token object
		$tokens = json_decode($string, true);
		
		//return the token
		return $tokens;
	}
	
	/**
	 * getAccessToken
	 * @param string $code
	 *
	 * @return mixed|string
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function getAccessToken($code=''){
		$tokenFile = APP_PATH . '/uploader/token/'.$this->uploadServer.'Tokens';
		$tokenArr = [];
		if($code){
			$tokenArr = $this->getAccessTokenFromCode($code);
		}else{
			is_file($tokenFile) && $tokenArr = json_decode(file_get_contents($tokenFile), true);
		}
		return $tokenArr['access_token'] ?? '';
	}
	
	/**
	 * Create a share link
     * 文档: https://www.dropbox.com/developers/documentation/http/documentation#sharing-create_shared_link_with_settings
     * 注意，create_shared_link已经弃用了，现在要用create_shared_link_with_settings
	 * @param $path
	 *
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function createSharedLink($path){
		$accessToken = $this->getAccessToken();
		// var_dump($accessToken);exit;
		$client = $this->newGuzzleClient();
		
		$postData = [
			'verify' => false,
			'headers' => [
				'Authorization' => 'Bearer ' . $accessToken,
				'Content-Type'  => 'application/json',
			],
			'json' => [
				'path' => $path,
				'settings' => [
				    'requested_visibility' => 'public',
				    'audience' => 'public',
				    'access' => 'viewer',
                ],
			],
		];
		$response = $client->request('POST', static::CREATE_SHARED_LINK, $postData);
		
		$string = $response->getBody()->getContents();
		if($response->getReasonPhrase() != 'OK'){
			throw new Exception($string);
		}
		
		//返回数据格式
		// $string  = '{"url": "https://www.dropbox.com/s/rd1h8y8hk32edoe/2a3d76d1c5fb671f2ad2350bb766dde3.jpg?dl=0", "visibility": {".tag": "public"}, "path": "/2a3d76d1c5fb671f2ad2350bb766dde3.jpg"}';
		$data = json_decode($string, true);
		//替换成无参数的直接访问链接
		$key = strtr($data['url'], [
			'https://www.dropbox.com/s/' => '',
			'?dl=0' => '',
		]);
		
		return [
			'key' => $key,
			'url' => $this->domain . '/' . $key,
		];
	}
	
	/**
	 * Upload files to Dropbox
	 * @link https://www.dropbox.com/developers/documentation/http/documentation#files-upload
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function upload($key, $uploadFilePath){
		try {
			$accessToken = $this->getAccessToken();
			if($this->directory){
				$key = $this->directory . '/' . $key;
			}
			//dropbox要求key的前面必须斜杠开头
			$key = '/' . $key;
			
			$fp = fopen($uploadFilePath, 'rb');
			$arguments = json_encode([
				'path' => $key,
				'mode' => 'add',
			]);
			
			$client = $this->newGuzzleClient();
			$response = $client->request('POST', static::UPLOAD_URL, [
				'verify' => false,
				'headers' => [
					'Authorization' => 'Bearer ' . $accessToken,
					'Content-Type'  => 'application/octet-stream',
					'Dropbox-API-Arg' => $arguments,
				],
				'body' => $fp,
			]);
			
			$string = $response->getBody()->getContents();
			if($response->getReasonPhrase() != 'OK'){
				throw new Exception($string);
			}
			
			$returnArr = json_decode($string, true);
			if(!isset($returnArr['path_display'])){
				throw new Exception($string);
			}
			
			is_resource($fp) && fclose($fp);
			
			$pathDisplay = $returnArr['path_display'];
			//把上传的文件创建分享链接
			$shareData = $this->createSharedLink($pathDisplay);
			$key = $shareData['key'];
			
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