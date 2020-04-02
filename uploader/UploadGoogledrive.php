<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-07-06
 * Time: 22:52
 */

/*
 *
Google Api V3指南: https://developers.google.com/drive/api/v3/about-sdk
Google Api V3详细Api: https://developers.google.com/drive/api/v3/reference

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
use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;
use GuzzleHttp\Exception\RequestException;

class UploadGoogledrive extends Upload{
	
	//块大小为5M(因为小于5M可以直接上传)
	const CHUNK_SIZE = 10485760;  //实际使用
	// const CHUNK_SIZE = 1048576; //just for test
	// const CHUNK_SIZE = 20971520; //just for test
 
	const OAUTH_BASE_URL = 'https://oauth2.googleapis.com';
	const API_BASE_URL = 'https://www.googleapis.com';
	
	public $clientId;
	public $clientSecret;
	public $redirectUri;
	public $uploadBaseUrl;
	public $commonBaseUrl;
	public $version = 'v3'; //可选值：v2, v3
	public $domain;
	//默认域名
	public $defaultDomain;
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

		//拼接后：https://graph.microsoft.com/v1.0/me/drive/root:/，最后一定要带斜杠，
		//因为GuzzleHTTP的base_uri要求一定在最后带斜杠，否则无效
		$this->uploadBaseUrl = static::API_BASE_URL . '/upload/drive/' . $this->version . '/files/';
		//在这里用于设置权限(其实就是创建分享链接要用的，分享，在googledrive来说就是给文件赋予一个任何人都可读的权限)
		$this->commonBaseUrl = static::API_BASE_URL . '/drive/' . $this->version . '/files/';
		
		$this->domain = $ServerConfig['domain'] ?? '';
		
		$this->defaultDomain = 'https://drive.google.com';
		!$this->domain && $this->domain = $this->defaultDomain;
		
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
	 * 返回授权url(被settings/SettingController.php中的getStorageParams()方法调用)
	 * 因为调用时new的是变量类名，所以这里显示没有使用(phpstorm无法识别)
	 * 文档：https://developers.google.com/oauthplayground/
	 * @return string
	 */
	public function getAuthorizationUrl(){
		$queryParam = [
			'response_type' => 'code',
			'client_id' => $this->clientId,
			'redirect_uri' => $this->redirectUri,
			'scope' => 'https://www.googleapis.com/auth/drive',
			'access_type' => 'offline',
			'prompt' => 'consent', //美[kənˈsent] 同意,准许
			// 'status' => '32131221', // 随机数，返回时原样返回，用于防止XSS
		];
		//http_build_query()函数能把数组变成：response_type=code&client_id=$this->clientId&……
		$queryStr = http_build_query($queryParam);
		$authUrl = "https://accounts.google.com/o/oauth2/v2/auth?" . $queryStr;
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
		
		if(!isset($tokenArr['access_token'])){
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
		return $this->getAccessTokenFromGoogle($code);
	}
	
	/**
	 * 刷新access_token
	 * @param $refreshToken
	 *
	 * @return array|mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function getAccessTokenFromRefreshToken($refreshToken){
		return $this->getAccessTokenFromGoogle($refreshToken, true);
	}
	
	/**
	 * 使用标准的Oauth2.0授权方式从"oauth2.googleapis.com"中获取access_token
	 * 有可能通过code获取(第一次)或通过refresh_token获取(刷新token)
	 * 因为两个获取接口以及方法都是一模一样的，只不过有两个参数不同
	 * 文档：https://developers.google.com/oauthplayground(自己请求一下看参数就行)
	 * @param string $codeOrRefreshToken
	 * @param bool $refreshToken
	 *
	 * @return array|mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function getAccessTokenFromGoogle($codeOrRefreshToken, $refreshToken=false){
		$queryParams = [
			'client_id' => $this->clientId,
			'client_secret' => $this->clientSecret,
			//只在用code交换access_token时使用，使用refresh_token刷新access_token时虽然不用传，但传了也没事
			'redirect_uri' => $this->redirectUri,
		];
		if($refreshToken){
			$queryParams['grant_type'] = 'refresh_token';
			$queryParams['refresh_token'] = $codeOrRefreshToken;
		}else{
			$queryParams['grant_type'] = 'authorization_code';
			$queryParams['code'] = $codeOrRefreshToken;
		}
		// $tokenRequestBody = http_build_query($queryParams);
		try {
			//GuzzleHTTP 6文档: https://guzzle-cn.readthedocs.io/zh_CN/latest/quickstart.html
			$GuzzleConfig = [
				'base_uri' => static::OAUTH_BASE_URL,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//实例化GuzzleHttp
			$client = new Client($GuzzleConfig);
			$uri = '/token';
			$response = $client->request('POST', $uri, [
				'verify' => false,
				'json' => $queryParams,
			]);
			
			$string = $response->getBody()->getContents();
			if($response->getReasonPhrase() != 'OK'){
				throw new Exception($string);
			}
			$tokens = json_decode($string, true);
			$tokenFile = APP_PATH . '/uploader/token/'.$this->uploadServer.'Tokens';
			//对于google，如果是刷新token，则返回结果不会有refresh_token(refresh_token只在第一次用code换取access_token的时候返回，但它会一直有效(除非重新用code换取access_token)，但为了方便，我们需要把之前的refresh取出来合并上去，这样就跟每次都返回refresh_token一样了)
			//第二个条件是为了兼容其它会每次都返回refresh_token的接口(比如微软)
			if($refreshToken && !isset($tokens['refresh_token'])){
				$oldTokens = json_decode(file_get_contents($tokenFile), true);
				//把旧的refresh_token合并到新的里面（因为新的里面是没有refresh_token的）
				$tokens['refresh_token'] = $oldTokens['refresh_token'];
			}
			file_put_contents($tokenFile, json_encode($tokens, JSON_UNESCAPED_SLASHES));
			
		} catch (Exception $e) {
			//上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
			$tokens = [];
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		
		//return the token
		return $tokens;
	}
	
	/**
	 * 与UploadSmallFile()功能完全相同，只不过是用php原生curl写的，留着作为参考
	 * @param      $key
	 * @param      $uploadFilePath
	 * @param      $originFilename
	 * @param bool $base64
	 *
	 * @return bool|string
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \ImagickException
	 */
	public function uploadByCurl($key, $uploadFilePath, $originFilename, $base64=false){
		$ch = curl_init();
		//boundary，用于分隔数据，要复杂一点以免跟实际文件数据一样造成分割出错
		$boundary = md5(mt_rand() . microtime());
		$params = json_encode([
			'name' => $key,
			'description' => $originFilename,
		]);
		//获取文件的数据
		$fileContent = file_get_contents($uploadFilePath);
		
		$mimeType = $this->getMimeType($uploadFilePath);
		
		//参考：https://www.jianshu.com/p/e810d1799384
		//参考：https://stackoverflow.com/questions/60813750/how-can-i-upload-files-to-googledrive-in-multipart-type-by-using-php-curl
		//以--{$boundary}开头，{$boundary}是一个自定义变量，用于分隔数据
		//(它要足够复杂不能跟实际文件内容相同)，最后要换一行(不管什么系统都用\r\n换行)
		$dataToUpload = "--{$boundary}\r\n";
		//传输数据前要先指定数据的格式，并且要换两行
		$dataToUpload .= "Content-Type: application/json\r\n\r\n";
		//真正的数据，要放在指定格式那一行换两行后的位置
		$dataToUpload .= "{$params}\r\n";
		//跟着又是boundary(即分界符)，分界符都是两个横杠开头，后面都换一行
		$dataToUpload .= "--{$boundary}\r\n";
		if($base64){
			$dataToUpload .= "Content-Transfer-Encoding: base64\r\n\r\n";
			//如果内容用base64_encode()，那前面的Content-Type要换成：Content-Transfer-Encoding: base64 (接口收到后就知道要先解码)
			$dataToUpload .= base64_encode($fileContent) . "\r\n";
		}else{
			//分界符后又是新的数据，又要指定这个数据的格式，指定格式后要换两行
			$dataToUpload .= "Content-Type: {$mimeType}\r\n\r\n";
			//在指定格式的那一行换两行后，是真正的数据
			$dataToUpload .= "{$fileContent}\r\n";
		}
		
		//最后以boundary结尾，但是结尾的boundary除了在开头有两个横杠，在结尾也要有两个横杠
		$dataToUpload .= "--{$boundary}--";
		
		$accessToken = $this->getAccessToken();
		
		$options = [
			CURLOPT_URL =>  'https://www.googleapis.com/upload/drive/v3/files?uploadType=multipart',
			CURLOPT_POST => true,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POSTFIELDS => $dataToUpload,
			CURLOPT_HTTPHEADER => [
				'Authorization:Bearer ' . $accessToken,
				//告诉服务器内容类型(根据接口需要，有可能是multipart/related，有可能是multipart/form-data)
				//但boundary一定要告诉服务器，因为服务器要用这个来分割数据
				'Content-Type: multipart/related; boundary=' . $boundary,
			],
			//In case you're in Windows, sometimes will throw error if not set SSL verification to false
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_SSL_VERIFYHOST => 0,
		];
		//In case you need a proxy
		$options[CURLOPT_PROXY] = 'http://127.0.0.1:1087';
		
		curl_setopt_array($ch, $options);
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		curl_close ($ch);
		return $result;
	}
	
	/**
	 * uploadByGuzzle
	 * @param $uploadFilePath
	 * @param $accessToken
	 *
	 * @return string
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	function uploadByGuzzle($uploadFilePath, $accessToken){
		$boundary = md5(mt_rand() . microtime());
		//MetaData
		$params = json_encode([
			'name' => basename($uploadFilePath),
			'description' => 'This is a test',
		]);
		$fileContent = file_get_contents($uploadFilePath);
		
		$dataToUpload = "--{$boundary}\r\n";
		$dataToUpload .= "Content-Type: application/json\r\n\r\n";
		$dataToUpload .= "{$params}\r\n";
		$dataToUpload .= "--{$boundary}\r\n";
		$dataToUpload .= "Content-Transfer-Encoding: base64\r\n\r\n";
		$dataToUpload .= base64_encode($fileContent) . "\r\n";
		$dataToUpload .= "--{$boundary}--";
		
		$GuzzleConfig = [
			'base_uri' => 'https://www.googleapis.com/upload/drive/v3/files/',
			'timeout'  => 30.0,
		];
		//In case you need a proxy
		$GuzzleConfig['proxy'] = 'http://127.0.0.1:1087';
		//GuzzleHttp
		$client = new Client($GuzzleConfig);
		$uri = '?uploadType=multipart';
		$response = $client->request('POST', $uri, [
			'verify' => false,
			'headers' => [
				'Authorization' => 'Bearer ' . $accessToken,
				'Content-Type' => 'multipart/related; boundary=' . $boundary,
			],
			'body' => $dataToUpload,
		]);
		
		$string = $response->getBody()->getContents();
		return $string;
	}
	
	/**
	 * 上传小文件(不大于5M，大于5M要用createUploadSession()创建上传会话并用UploadBytes2UploadSession()分块上传)
	 * 文档：https://developers.google.com/drive/api/v3/manage-uploads#multipart
	 * @param        $key
	 * @param        $uploadFilePath
	 * @param        $originFilename
	 * @param string $parentId
	 * @param bool   $useBase64
	 *
	 * @return array|mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function UploadSmallFile($key, $uploadFilePath, $originFilename, $parentId='root', $useBase64=true){
		try {
			//当多个数据一起上传时，boundary是用于分隔不同数据用的，要复杂一点以免跟实际文件数据一样造成分割出错
			$boundary = md5(mt_rand() . microtime());
			//MetaData
			$params = json_encode([
				'name' => $key,
				'parents' => [
					$parentId
				],
				'description' => $originFilename,
			]);
			//获取文件的数据
			$fileContent = file_get_contents($uploadFilePath);
			
			$mimeType = $this->getMimeType($uploadFilePath);
			
			/*
			 * 关于boundary：
			 * 参考：https://www.jianshu.com/p/e810d1799384
			 * 参考：https://stackoverflow.com/questions/60813750/how-can-i-upload-files-to-googledrive-in-multipart-type-by-using-php-curl
			 */
			
			//以--{$boundary}开头，{$boundary}是一个自定义变量，用于分隔数据
			//(它要足够复杂不能跟实际文件内容相同)，最后要换一行(不管什么系统都用\r\n换行)
			$dataToUpload = "--{$boundary}\r\n";
			//传输数据前要先指定数据的格式，并且要换两行
			$dataToUpload .= "Content-Type: application/json\r\n\r\n";
			//真正的数据，要放在指定格式那一行换两行后的位置
			$dataToUpload .= "{$params}\r\n";
			//跟着又是boundary(即分界符)，分界符都是两个横杠开头，后面都换一行
			$dataToUpload .= "--{$boundary}\r\n";
			if($useBase64){
				$dataToUpload .= "Content-Transfer-Encoding: base64\r\n\r\n";
				//如果内容用base64_encode()，那前面的Content-Type要换成：Content-Transfer-Encoding: base64 (接口收到后就知道要先解码)
				$dataToUpload .= base64_encode($fileContent) . "\r\n";
			}else{
				//分界符后又是新的数据，又要指定这个数据的格式，指定格式后要换两行
				$dataToUpload .= "Content-Type: {$mimeType}\r\n\r\n";
				//在指定格式的那一行换两行后，是真正的数据
				$dataToUpload .= "{$fileContent}\r\n";
			}
			
			//最后以boundary结尾，但是结尾的boundary除了在开头有两个横杠，在结尾也要有两个横杠
			$dataToUpload .= "--{$boundary}--";
			$returnArr = $this->createFile($dataToUpload, $boundary);
		} catch (Exception $e) {
			$returnArr = [];
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		return $returnArr;
	}
	
	/**
	 * 上传小文件(不大于5M，大于5M要用createUploadSession()创建上传会话并用UploadBytes2UploadSession()分块上传)，使用"composer install google/apiclient"方式，但这里已经被我删掉了，20多M，太大了
	 * 文档：https://developers.google.com/drive/api/v3/manage-uploads#simple
	 * @param $key
	 * @param $uploadFilePath
	 * @param $originFilename
	 *
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function UploadSmallFile2($key, $uploadFilePath, $originFilename){
		try {
			if($this->directory){
				$key = $this->directory . '/' . $key;
			}
			$fileMetadata = new Google_Service_Drive_DriveFile([
				'name' => $key,
				'description' => $originFilename,
				// 'parents' =>
			]);
			$client = new Google_Client();
			$accessToken = $this->getAccessToken();
			$client->setAccessToken($accessToken);
			$this->proxy && $client->setHttpClient(new Client(['proxy' => $this->proxy]));
			$driveService = new Google_Service_Drive($client);
			$mimeType = $this->getMimeType($uploadFilePath);
			$file = $driveService->files->create($fileMetadata, [
				'data' => file_get_contents($uploadFilePath),
				'mimeType' => $mimeType,
				'uploadType' => 'multipart',
				'fields' => 'kind, id, name, mimeType',
			]);
			if(!isset($file->id)){
				throw new Exception('Upload failed');
			}
			//为了与分块上传返回的结果一致
			$returnArr = [
				'kind' => $file->kind,
				'id' => $file->id,
				'name' => $file->name,
				'mimeType' => $file->mimeType,
			];
		} catch (Exception $e) {
			$returnArr = [];
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		return $returnArr;
	}
	
	/**
	 * 在GoogleDrive中创建文件(文件夹属于一种特殊的文件：没有内容，mimeType=application/vnd.google-apps.folder)
	 * @param $dataToUpload:是一个由boundary分隔的字符串，遵循规则：https://developers.google.com/drive/api/v3/manage-uploads#send_a_multipart_upload_request，其中包含MetaData(一个json，用于指定文件属性，如文件名，mimeType，父文件夹id等等)
	 * @param $boundary
	 *
	 * @return array|mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function createFile($dataToUpload, $boundary){
		try {
			$GuzzleConfig = [
				'base_uri' => $this->uploadBaseUrl,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//GuzzleHttp
			$client = new Client($GuzzleConfig);
			$accessToken = $this->getAccessToken();
			// var_dump($contentLength);exit;
			$uri = '?uploadType=multipart';
			$response = $client->request('POST', $uri, [
				'verify' => false,
				'headers' => [
					'Authorization' => 'Bearer ' . $accessToken,
					'Content-Type' => 'multipart/related; boundary=' . $boundary,
					//长度可以不指定，curl会自动发送
					// 'Content-Length' => $contentLength,
				],
				'body' => $dataToUpload,
			]);
			
			$string = $response->getBody()->getContents();
			if($response->getReasonPhrase() != 'OK'){
				throw new Exception($string);
			}
			$returnArr = json_decode($string, true);
		} catch (Exception $e) {
			$returnArr = [];
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		return $returnArr;
	}
	
	/**
	 * 获取已经存在的文件夹路径，以便跟我们要上传的路径比较，得出需要创建哪些文件夹
	 * 例如：我要上传到/2020/03/25/，但通过此方法查到了/2020/03/已存在，这样我就
	 * 知道要创建的文件夹只有"25"了，并且需要在"03"文件夹下创建(把返回的lastFolderId指定为父id即可)
	 * @param        $folders
	 * @param string $parentId
	 *
	 * @return array|bool
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function checkFolderExistence($folders, $parentId='root'){
		try {
			static $lastFolderId = 'root';
			$accessToken = $this->getAccessToken();
			//按顺序，从第一个开始查找
			$folderName = array_shift($folders);
			
			$GuzzleConfig = [
				'base_uri' => $this->commonBaseUrl,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//GuzzleHttp
			$client = new Client($GuzzleConfig);
			$folderName = addslashes($folderName);
			// $uri =  $this->commonBaseUrl . "?mimeType='application/vnd.google-apps.folder'&q='" . $keyword . "'";
			//q的值是一串由关键词"and"连接起来的参数，这些参数本身又是由参数和值组成，如：
			//查询名称为"xxx"的文件：name='xxx'(名称一定要单引号括起来)
			//指定被查询的文件是文件夹：mimeType='application/vnd.google-apps.folder'
			//指定只在某个文件夹下查找：'<folderId>' in parents (fodlerId一定要单引号括起来，如果要指定在根下查找，则用'root' in parents)
			$uri = "?q=mimeType='application/vnd.google-apps.folder' and '" . $parentId . "' in parents and name='" . $folderName . "' and trashed=false";
			// and trash=false
			// var_dump($uri);exit;
			$response = $client->request('GET', $uri, [
				'verify' => false,
				'headers' => [
					'Authorization' => 'Bearer ' . $accessToken,
				],
			]);
			
			$string = $response->getBody()->getContents();
	
			if($response->getReasonPhrase() != 'OK'){
				$string = $response->getBody()->getContents();
				throw new Exception($string);
			}
			
			$returnArr = json_decode($string, true);
			
			$folderId = isset($returnArr['files'][0]['id']) ? $returnArr['files'][0]['id'] : false;
		
			//如果文件夹存在
			if($folderId){
				//如果本次查找到了文件夹，则把$lastFolderId更新为本次查找到的文件夹的id
				$lastFolderId =  $folderId;
			}else{
				//如果不存在就创建，注意：因为$lastFolderId是静态变量，存储的是最后
				//一次查找到文件夹时返回的文件夹id，所以用它作为父文件夹id去创建文件夹
				// var_dump($folderName, $lastFolderId);exit;
				$returnArr = $this->createFolder($folderName, $lastFolderId);
				$lastFolderId = $returnArr['id'];
			}
			
			//如果还有需要查找的文件夹(即$folders不为空)，则继续查找下一级(递归查找)，
			if(!empty($folders)){
				$lastFolderId = $this->checkFolderExistence($folders, $lastFolderId);
			}
		} catch (RequestException $e) {
			$lastFolderId = false;
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getResponse()->getBody()->getContents() . "\n\n", 'error_log');
		}
		return $lastFolderId;
	}
	
	/**
	 * 创建上传会话(用于上传大文件，在Googledrive这里是指超过5M的文件)
	 * 文档链接：https://developers.google.com/drive/api/v3/manage-uploads#resumable
	 * @param $key
	 * @param $uploadFilePath
	 * @param $originFilename
	 * @param $lastFolderId
	 *
	 * @return bool|string
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \ImagickException
	 */
	public function createUploadSession($key, $uploadFilePath, $originFilename, $lastFolderId='root'){
		try {
			$accessToken = $this->getAccessToken();
			$GuzzleConfig = [
				'base_uri' => $this->uploadBaseUrl,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//GuzzleHttp
			$client = new Client($GuzzleConfig);
			$mimeType = $this->getMimeType($uploadFilePath);
			//Final url：https://www.googleapis.com/upload/drive/v3/files?uploadType=resumable
			$uri = '?uploadType=resumable';
			$response = $client->request('POST', $uri, [
				'verify' => false,
				'headers' => [
					'Authorization' => 'Bearer ' . $accessToken,
					'X-Upload-Content-Type'  => $mimeType,
					'X-Upload-Content-Length'  => filesize($uploadFilePath),
				],
				// Metadata
				'json' => [
					'name' => $key,
					'parents' => [
						$lastFolderId
					],
					'description' => $originFilename,
				],
			]);
			
			if(($reason = $response->getReasonPhrase()) != 'OK'){
				throw new RequestException($reason);
			}
			
			$uploadUrl = $response->getHeader('Location')[0];
		} catch (RequestException $e) {
			$uploadUrl = false;
			//用$e->getMessage()获取的报错会被截取(超过120字符GuzzleHttp就自动截取了)，用这种方法就可以获取完整报错(如果需要的话)
			// $errMsg = $e->getResponse()->getBody()->getContents();
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		return $uploadUrl;
	}
	
	/**
	 * 分块上传，这里我把每块的大小设置了5M(因为不大于5M的都可以一次上传)
	 * 文档：https://developers.google.com/drive/api/v3/manage-uploads#upload-resumable
	 * @param $uploadUrl
	 * @param $uploadFilePath
	 *
	 * @return array|mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function UploadBytes2UploadSession($uploadUrl, $uploadFilePath){
		try{
			//把文件分块上传，每块5M(但最后一块可能小于5M)，块大小必须是256kb的倍数
			$chunkSize = static::CHUNK_SIZE;
			$fileSize = filesize($uploadFilePath);
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
				$stream = fopen($uploadFilePath, 'rb');
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
				
				//非最后一次返回的reasonPhrase都是：Resume Incomplete，最后一次是：OK
				//非最后一次返回的statusCode都是：308，最后一次是：200(最后一次即整个文件上传成功)
				$statusCode = $response->getStatusCode();
				if(!in_array($statusCode, ['308', '200'])){
					throw new RequestException('Resumable Upload Error!');
				}
				
				if($statusCode == 200){
					//只有$statusCode=200(即整个文件上传完成)这里才会返回数据，否则为空
					$string = $response->getBody()->getContents();
					$returnArr = json_decode($string, true);
				}
				
				$bytesRemaining -= $chunkSize;
				$i++;
			}
		}catch (RequestException $e){
			$returnArr = [];
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		return $returnArr;
	}
	
	/**
	 * 在GoogleDrive中创建共享链接(php原生curl写法)，不删除留着备用
	 * @param $fileId
	 * @param $accessToken
	 * @param $isImg
	 *
	 * @return bool|string
	 */
	public function createShareLink2($fileId, $accessToken, $isImg=false){
		$ch = curl_init();
		$options = [
			CURLOPT_URL => 	'https://www.googleapis.com/drive/v3/files/'.$fileId.'/permissions',
			CURLOPT_POST => true,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POSTFIELDS => json_encode([
				'type'=>'anyone',
				'role'=>'reader',
			]),
			CURLOPT_HTTPHEADER => [
				'Authorization:Bearer '.$accessToken,
				'Content-Type:application/json',
			],
			//In case you're in win, sometimes will throw error if not set to false
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_SSL_VERIFYHOST => false,
		];
		//In case you need a proxy
		$options[CURLOPT_PROXY] = 'http://127.0.0.1:1087';
		
		curl_setopt_array($ch, $options);
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		curl_close ($ch);
		
		//GoogleDrive的分享链接是固定的(但这种分享链接无法嵌入到markdown)
		// $webViewLink = 'https://drive.google.com/file/d/'.$fileId.'/view';
		//或者使用这种格式(但最后它还是会跳转到上面那种格式)
		// $webViewLink = 'https://drive.google.com/open?id='.$fileId;
		
		//参考：https://github.com/googlecolab/colabtools/issues/882#issuecomment-560490773
		//能链接到markdown的非图片格式：https://drive.google.com/uc?id=<fileId>&export=download
		//能链接到markdown的图片格式：https://drive.google.com/uc?id=<fileId>&export=view
		$shareLink = 'http://drive.google.com/uc?id='.$result['id'].'&export=';
		if($isImg){
			$shareLink .= 'view';
		}else{
			$shareLink .= 'download';
		}
		return $shareLink;
	}
	
	/**
	 * 创建分享链接
	 * 文档：https://developers.google.com/drive/api/v3/manage-sharing
	 * 具体接口文档：https://developers.google.com/drive/api/v3/reference/permissions/create
	 * 实际上该方法并不是获取分享链接，因为分享链接一直都是固定的(只需要传一个文件id即可)，所以该方法所做的
	 * 操作是把文件设置为任何人(anyone)可读(reader)，这样已知的分享链接才有用(没有权限知道链接也没用)
	 *
	 * @param $fileId
	 * @param $isImg
	 *
	 * @return string
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function createShareLink($fileId, $isImg=true){
		try {
			$accessToken = $this->getAccessToken();
			
			$GuzzleConfig = [
				'base_uri' => $this->commonBaseUrl,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//GuzzleHttp
			$client = new Client($GuzzleConfig);
			$uri = $fileId . '/permissions';
			$response = $client->request('POST', $uri, [
				'verify' => false,
				'headers' => [
					'Authorization' => 'Bearer ' . $accessToken,
				],
				'json' => [
					//user, group, domain, anyone
					'type' => 'anyone',
					//owner, organizer, fileOrganizer, writer, commenter, reader
					'role' => 'reader',
				],
			]);
			
			//这个返回没啥用
			// $string = $response->getBody()->getContents();
			// var_dump($string);exit;
			if($response->getReasonPhrase() != 'OK'){
				$string = $response->getBody()->getContents();
				throw new Exception($string);
			}
			//GoogleDrive的分享链接是固定的(但这种分享链接无法嵌入到markdown)
			// $webViewLink = 'https://drive.google.com/file/d/'.$fileId.'/view';
			//或者使用这种格式(但最后它还是会跳转到上面那种格式)
			// $webViewLink = 'https://drive.google.com/open?id='.$fileId;
			
			//参考：https://github.com/googlecolab/colabtools/issues/882#issuecomment-560490773
			//能链接到markdown的非图片格式：https://drive.google.com/uc?id=<fileId>&export=download
			//能链接到markdown的图片格式：https://drive.google.com/uc?id=<fileId>&export=view
			$shareLink = 'https://drive.google.com/uc?id='.$fileId.'&export=';
			if($isImg){
				$shareLink .= 'view';
			}else{
				$shareLink .= 'download';
			}
		} catch (RequestException $e) {
			$shareLink = '';
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getResponse()->getBody()->getContents() . "\n\n", 'error_log');
		}
		return $shareLink;
	}
	
	/**
	 * 创建文件夹：其实就是创建mimeType=application/vnd.google-apps.folder且没有文件内容的一种特殊文件
	 *
	 * @param string $name
	 * @param string $parentId
	 *
	 * @return array|mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function createFolder(string $name, string $parentId='root'){
		try {
			//当多个数据一起上传时，boundary是用于分隔不同数据用的要复杂一点以免跟实际文件数据一样造成分割出错
			$boundary = md5(mt_rand() . microtime());
			//MetaData
			$params = json_encode([
				'name' => $name,
				'parents' => [
					$parentId
				],
				'mimeType' => 'application/vnd.google-apps.folder',
			]);
			
			/*
			 * 关于boundary：
			 * 参考：https://www.jianshu.com/p/e810d1799384
			 * 参考：https://stackoverflow.com/questions/60813750/how-can-i-upload-files-to-googledrive-in-multipart-type-by-using-php-curl
			 */
			
			//以--{$boundary}开头，{$boundary}是一个自定义变量，用于分隔数据
			//(它要足够复杂不能跟实际文件内容相同)，最后要换一行(不管什么系统都用\r\n换行)
			$dataToUpload = "--{$boundary}\r\n";
			//传输数据前要先指定数据的格式，并且要换两行
			$dataToUpload .= "Content-Type: application/json\r\n\r\n";
			//真正的数据，要放在指定格式那一行换两行后的位置
			$dataToUpload .= "{$params}\r\n";
			//最后以boundary结尾，但是结尾的boundary除了在开头有两个横杠，在结尾也要有两个横杠
			$dataToUpload .= "--{$boundary}--";
			
			$returnArr = $this->createFile($dataToUpload, $boundary);
		} catch (Exception $e) {
			$returnArr = [];
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		return $returnArr;
	}
	
	/**
	 * Upload files to Googledrive
	 * @param $key:一个取机生成的key，不能直接使用$uploadFilePath中的文件名作为$key，因为当不压缩且不加水印时，它就是真实文件名，不用作为key(容易同名覆盖)
	 * @param $uploadFilePath
	 * @param $originFilename: 原始文件名($uploadFilePath中的文件名是压缩或添加水印后的临时文件，并不是原始文件名，所以原始文件名无法从$uploadFilePath中获得，需要前面传过来)
	 *
	 * @return array|void
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function upload($key, $uploadFilePath, $originFilename){
		try {
			//如果直接传到根目录，那上级id注是root，否则就是具体文件夹的id
			$lastFolderId = 'root';
			if($this->directory){
				//先创建目录
				$folders = explode('/', $this->directory);
				$lastFolderId = $this->checkFolderExistence($folders);
			}
			
			if(filesize($uploadFilePath) > static::CHUNK_SIZE){    //真实使用
			// if(filesize($uploadFilePath) < static::CHUNK_SIZE)){    //测试用
				$uploadUrl = $this->createUploadSession($key, $uploadFilePath, $originFilename, $lastFolderId);
				if(!$uploadUrl){
					throw new Exception('创建上传会话失败');
				}
				$data = $this->UploadBytes2UploadSession($uploadUrl, $uploadFilePath);
			}else{
				$data = $this->UploadSmallFile($key, $uploadFilePath, $originFilename, $lastFolderId);
			}
			
			if(strpos($this->getMimeType($uploadFilePath), 'image')!==false){
				$isImg = true;
			}else{
				$isImg = false;
			}
			$shareLink = $this->createShareLink($data['id'], $isImg);
			//$shareLink的格式：
			//https://drive.google.com/uc?id=<fileId>&export=view
			//https://drive.google.com/uc?id=<fileId>&export=download
			$key = str_replace($this->defaultDomain . '/', '', $shareLink);
			
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