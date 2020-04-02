<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-07-06
 * Time: 22:52
 */

/*
 *
GuzzleHTTP6 base_uri设置方法：
	base_uri		URI					Result
http://foo.com		/bar			http://foo.com/bar
http://foo.com/foo	/bar			http://foo.com/bar
http://foo.com/foo	bar				http://foo.com/bar
http://foo.com/foo/	bar				http://foo.com/foo/bar
http://foo.com		http://baz.com	http://baz.com
http://foo.com/?bar	bar				http://foo.com/bar
 */

namespace uploader;

use Exception;
use GuzzleHttp\Client;

class UploadOnedrive extends Upload{
    
    //块大小为10M(虽然普通上传不能大于4M，但分块上传每块的大小是可以超过4M的)
    const CHUNK_SIZE = 10485760;  //实际使用
    // const CHUNK_SIZE = 1048576; //just for test
    // const CHUNK_SIZE = 10485760; //just for test
    
    public $clientId;
    public $clientSecret;
	public $redirectUri;
	public $authority = 'https://login.microsoftonline.com';
	//tenant:承租人，这里指客户群体，有四种值(一般用第一种就好)：
	//1.common: 用于 Microsoft 帐户和工作或学校帐户
	//2.organizations: 仅适用于工作或学校帐户
	//3.consumers: 仅适用于 Microsoft 帐户
	//3.8eaef023-2b34-4da1-9baa-8bc8c9d6a490 或 contoso.onmicrosoft.com: 仅允许用户使用工作/学校帐户从特定的 Azure AD 租户登录应用程序。 可以使用 Azure AD 租户的友好域名或租户的 GUID 标识符。
	public $tenant;
	// public $tenant = 'd6378ae5-499f-40f9-84d4-9fe81fdbee46';
	public $unifiedAPIResource = 'https://graph.microsoft.com';
	public $version = 'v1.0'; //可选值：v1.0 , beta
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
	    $this->uploadServer = ucfirst($params['uploadServer']);
	    $this->clientId = $ServerConfig['clientId'];
	    $this->clientSecret = $ServerConfig['clientSecret'];
	    $this->proxy = $ServerConfig['proxy'] ?? '';
	    $this->tenant = $ServerConfig['tenant'] ?? 'common';
	    if(php_sapi_name() != 'cli'){
		    $scheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://';
		    $this->redirectUri = $scheme . $_SERVER['HTTP_HOST'] . '/auth/' . $this->uploadServer . 'Redirect.php';
	    }
	    //拼接后：https://login.microsoftonline.com/common/oauth2/v2.0/
	    $this->authority = $this->authority . '/' . $this->tenant . '/oauth2/v2.0/';
	    //拼接后：https://graph.microsoft.com/v1.0/me/drive/root:/，最后一定要带斜杠，
	    //因为GuzzleHTTP的base_uri要求一定在最后带斜杠，否则无效
	    $this->unifiedAPIResource = $this->unifiedAPIResource . '/' . $this->version . '/me/drive/root:/';
     
	    $this->domain = $ServerConfig['domain'] ?? '';
		/*
		$defaultDomain = 'https://jxjjxy-my.sharepoint.com/personal';
	    if(!$this->domain){
		    $this->domain = $defaultDomain;
	    }*/
	
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
	 * 文档：https://docs.microsoft.com/zh-cn/graph/auth-v2-user?view=graph-rest-1.0#2-get-authorization
	 * @return string
	 */
	public function getAuthorizationUrl(){
		$queryParam = [
			'response_type' => 'code',
			'client_id' => $this->clientId,
			'redirect_uri' => $this->redirectUri,
			'scope' => 'offline_access Files.ReadWrite Files.Read.All Files.ReadWrite.All',
			'response_mode' => 'query', // query, form_post
			// 'status' => '32131221', // 随机数，返回时原样返回，用于防止XSS
		];
		//http_build_query()函数能把数组变成：response_type=code&client_id=$this->clientId&……
		$queryStr = http_build_query($queryParam);
		$authUrl = $this->authority . "authorize?" . $queryStr;
		return $authUrl;
	}
	
	/**
	 * getAccessToken(从缓存或者线上获取)
	 * @param string $code
	 *
	 * @return bool|mixed
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
		
		if(!isset($tokenArr['refresh_token'])){
			return false;
		}
		$existsTime = time() - filemtime($tokenFile);
		if($existsTime > 3500){
			$tokenArr = $this->getAccessTokenFromRefreshToken($tokenArr['refresh_token']);
		}
		if(!isset($tokenArr['refresh_token'])){
			return false;
		}
		return $tokenArr['access_token'];
	}
	
	/**
	 * 首次获取access_token(通过code)
	 * @param $code
	 *
	 * @return array|mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function getAccessTokenFromCode($code){
		return $this->getAccessTokenFromGraph($code);
	}
	
	/**
	 * 刷新access_token
	 * @param $refreshToken
	 *
	 * @return array|mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function getAccessTokenFromRefreshToken($refreshToken){
		return $this->getAccessTokenFromGraph($refreshToken, true);
	}
	
	/**
	 * 使用标准的Oauth2.0授权方式从微软的Graph接口中获取access_token
	 * 有可能通过code获取(第一次)或通过refresh_token获取(刷新token)
	 * 因为两个获取接口以及方法都是一模一样的，只不过有两个参数不同
	 * 1、通过code获取access_token文档：https://docs.microsoft.com/zh-cn/graph/auth-v2-user?view=graph-rest-1.0#2-get-authorization
	 * 2、通过refresh_token获取access_token文档：https://docs.microsoft.com/zh-cn/graph/auth-v2-user?view=graph-rest-1.0#2-get-authorization
	 * 3、使用access_token的文档：https://docs.microsoft.com/zh-cn/graph/auth-v2-user?view=graph-rest-1.0#2-get-authorization
	 * @param string $codeOrRefreshToken
	 * @param bool $refreshToken
	 *
	 * @return array|mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function getAccessTokenFromGraph($codeOrRefreshToken, $refreshToken=false){
		$queryParams = [
			'client_id' => $this->clientId,
			'client_secret' => $this->clientSecret,
			'redirect_uri' => $this->redirectUri,
		];
		if($refreshToken){
			$queryParams['grant_type'] = 'refresh_token';
			$queryParams['refresh_token'] = $codeOrRefreshToken;
		}else{
			$queryParams['grant_type'] = 'authorization_code';
			$queryParams['code'] = $codeOrRefreshToken;
		}
		$tokenRequestBody = http_build_query($queryParams);
		try {
			//GuzzleHTTP 6文档: https://guzzle-cn.readthedocs.io/zh_CN/latest/quickstart.html
			$GuzzleConfig = [
				'base_uri' => $this->authority,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//实例化GuzzleHttp
			$client = new Client($GuzzleConfig);
			$uri = 'token';
			$response = $client->request('POST', $uri, [
				'verify' => false,
				'body' => $tokenRequestBody,
			]);
			
			$string = $response->getBody()->getContents();
			if($response->getReasonPhrase() != 'OK'){
				throw new Exception($string);
			}
			$tokenFile = APP_PATH . '/uploader/token/'.$this->uploadServer.'Tokens';
			file_put_contents($tokenFile, $string);
			$tokens = json_decode($string, true);
		} catch (Exception $e) {
			//上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
			$tokens = [];
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		
		//return the token
		return $tokens;
	}
	
	/**
	 * 上传小文件(不大于4M，大于4M要用createUploadSession()创建上传会话并用UploadBytes2UploadSession()分块上传)
	 * 文档：https://docs.microsoft.com/zh-cn/onedrive/developer/rest-api/api/driveitem_put_content?view=odsp-graph-online
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return bool|string
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function UploadSmallFile($key, $uploadFilePath){
		try {
			if($this->directory){
				$key = $this->directory . '/' . $key;
			}
			
			$accessToken = $this->getAccessToken();
			$GuzzleConfig = [
				'base_uri' => $this->unifiedAPIResource,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//实例化GuzzleHttp
			$client = new Client($GuzzleConfig);
			//upload file to onedrive “images” folder
			// $uri = 'me/drive/root:/images/' . $key . ':/content';
			//upload file to onedrive root path
			//DriveItem资源类型: https://docs.microsoft.com/zh-cn/graph/api/resources/driveitem?view=graph-rest-1.0
			$uri = $key . ':/content';
			$response = $client->request('PUT', $uri, [
				'verify' => false,
				'headers' => [
					'Authorization' => 'Bearer ' . $accessToken,
					'Content-Type'  => 'application/json',
				],
				'body' => file_get_contents($uploadFilePath)
			]);
			
			$string = $response->getBody()->getContents();
			if($response->getReasonPhrase() != 'Created'){
				throw new Exception($string);
			}
			
			$returnArr = json_decode($string, true);
			if(!isset($returnArr['parentReference']['path']) && !isset($returnArr['name'])){
				throw new Exception($string);
			}
			//创建分享后，这个webUrl就是原图地址，但是直接访问这个地址会让登录，
			//但是一定要从分享的那个地址里点击"查看原图"跳转过去才能看
			// $webUrl = $returnArr['webUrl'];
		} catch (Exception $e) {
			$returnArr = [];
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		return $returnArr;
	}
	
	/**
	 * 创建上传会话(用于上传大文件，在OneDrive这里是指超过4M的文件)
	 * 文档链接：https://docs.microsoft.com/zh-cn/onedrive/developer/rest-api/api/driveitem_createuploadsession?view=odsp-graph-online
	 * @param $key
	 *
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function createUploadSession($key){
		try {
			if($this->directory){
				$key = $this->directory . '/' . $key;
			}
			
			$accessToken = $this->getAccessToken();
			$GuzzleConfig = [
				'base_uri' => $this->unifiedAPIResource,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//实例化GuzzleHttp
			$client = new Client($GuzzleConfig);
			//最终请求的地址：https://graph.microsoft.com/v1.0/me/drive/root:/path/to/file:/createUploadSession
			$uri = $key . ':/createUploadSession';
			$response = $client->request('POST', $uri, [
				'verify' => false,
				'headers' => [
					'Authorization' => 'Bearer ' . $accessToken,
					'Content-Type'  => 'application/json',
				],
				'json' => [
					'item' => [
						"@microsoft.graph.conflictBehavior" => "rename",
					]
				]
			]);
			$string = $response->getBody()->getContents();
			if($response->getReasonPhrase() != 'OK'){
				throw new Exception($string);
			}
			$data = json_decode($string, true);
		} catch (Exception $e) {
			$data = [];
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		return $data;
	}
	
	/**
	 * 分块上传，这里我把每块的大小设置了4M
	 * 文档：https://docs.microsoft.com/zh-cn/onedrive/developer/rest-api/api/driveitem_createuploadsession?view=odsp-graph-online
	 * @param $uploadUrl
	 * @param $uploadFilePath
	 *
	 * @return array|mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function UploadBytes2UploadSession($uploadUrl, $uploadFilePath){
		try{
			//把文件分块上传，每块4M(但最后一块可能小于4M)
			// $chunkSize = 4 * 1024 * 1024;
			$chunkSize = static::CHUNK_SIZE; //just for test
			$file = file_get_contents($uploadFilePath);
			$fileSize = strlen($file);
			//还剩多少字节没上传(刚开始未上传的字节肯定就是整个文件大小)
			$bytesRemaining = $fileSize;
			$GuzzleConfig = [
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//实例化GuzzleHttp
			$client = new Client($GuzzleConfig);
			
			//循环变量
			$i = 0;
			$returnArr = [];
			while ($bytesRemaining) {
				$start = $i * $chunkSize;
				$end = $start + $chunkSize - 1;
				$offset = $i * $chunkSize;
				
				//有一个关键点，最后一块如果不满一块的大小(4M)，则在header里指定的时候就要变了
				if ($bytesRemaining < $chunkSize) {
					//最后一块碎片如果不满一块，则块大小就要变成这个块的实际大小
					$chunkSize = $bytesRemaining;
					//因为字节是第0位开始数的，所以最后一个字节一定是：$fileSize - 1
					$end = $fileSize - 1;
				}
				//打开一个文件(方便后面对它进行操作，例如这里就是要读取它的一部分)
				$stream = fopen($uploadFilePath, 'r');
				if (!$stream) {
					throw new Exception('读取文件失败');
				}
				//从打开的文件句柄中获取一段(第二个位置表示要获取的长度，第三个参数表示从哪个位置开始获取)
				$data = stream_get_contents($stream, $chunkSize, $offset);
				fclose($stream);
				
				$contentRange = " bytes " . $start . "-" . $end . "/" . $fileSize;
				
				$uri = $uploadUrl;
				$response = $client->request('PUT', $uri, [
					'verify' => false,
					'headers' => [
						'Content-Length' => $chunkSize,
						'Content-Range' => $contentRange,
					],
					'body' => $data,
				]);
				
				$string = $response->getBody()->getContents();
				//每一部分上传完都返回Accepted，只有最后一部分上传完表示整个文件上传完成，会返回Created
				if(!in_array($response->getReasonPhrase(), ['Accepted', 'Created'])){
					throw new Exception($string);
				}

				$returnArr = json_decode($string, true);
				//最后一次返回结果会包含webUrl，前面的都包含nextExpectedRanges
				//经实际测试，最后一次(即文件上传完成后)返回的结果跟上传小文件"UploadSmallFile()"的返回结果是一样的
				if(!isset($returnArr['nextExpectedRanges']) && !isset($returnArr['webUrl'])){
					throw new Exception($string);
				}
				
				$bytesRemaining -= $chunkSize;
				$i++;
			}
		}catch (Exception $e){
			$returnArr = [];
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		return $returnArr;
	}
	
	/**
	 * 创建分享链接
	 * 文档：https://docs.microsoft.com/zh-cn/graph/api/driveitem-createlink?view=graph-rest-1.0&tabs=http
	 * @param $itemPath
	 *
	 * @return string
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function createShareLink($itemPath){
		try {
			$accessToken = $this->getAccessToken();
			
			$GuzzleConfig = [
				'base_uri' => $this->unifiedAPIResource,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//实例化GuzzleHttp
			$client = new Client($GuzzleConfig);
			$uri = $itemPath . ':/createLink';
			$response = $client->request('POST', $uri, [
				'verify' => false,
				'headers' => [
					'Authorization' => 'Bearer ' . $accessToken,
					'Content-Type'  => 'application/json',
				],
				'json' => [
					'type' => 'view', //view, edit, embed(仅个人版支持)
					'scope' => 'anonymous',
				],
			]);
			
			$string = $response->getBody()->getContents();
			if($response->getReasonPhrase() != 'Created'){
				throw new Exception($string);
			}
			
			$returnArr = json_decode($string, true);
			if(!isset($returnArr['link']['webUrl'])){
				throw new Exception($string);
			}
			$shareLink = $returnArr['link']['webUrl'];
		} catch (Exception $e) {
			$shareLink = '';
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		return $shareLink;
	}
	
	/**
	 * Upload files to Onedrive(Microsoft Azure)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return array|void
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function upload($key, $uploadFilePath){
		try {
			//4 * 1024 * 1024 = 4194304(即4M)，如果文件大于4M，则分块上传
			if(filesize($uploadFilePath) > static::CHUNK_SIZE){    //真实使用
			// if(filesize($uploadFilePath) < static::CHUNK_SIZE){    //测试用
				$UploadSession = $this->createUploadSession($key);
				if(!isset($UploadSession['uploadUrl'])){
					throw new Exception('创建上传会话失败');
				}
				$data = $this->UploadBytes2UploadSession($UploadSession['uploadUrl'], $uploadFilePath);
			}else{
				$data = $this->UploadSmallFile($key, $uploadFilePath);
			}
			// 去掉"/drive/root:/"是因为base_uri中已经有了
			$path = str_replace('/drive/root:/', '', $data['parentReference']['path']);
			$itemPath = $path . '/' . $data['name'];
			$shareLink = $this->createShareLink($itemPath);
			
			$lastSlashPos = strrpos($shareLink, '/');
			$this->domain = substr($shareLink, 0, $lastSlashPos);
			$key = substr($shareLink, $lastSlashPos + 1);
			$data = [
				'code' => 0,
				'msg' => 'success',
				'key' => $key,
				'domain' => $this->domain,
			];
		}catch (Exception $e){
			$data = [
				'code' => -1,
				'msg' => $e->getMessage(),
			];
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		return $data;
    }
}