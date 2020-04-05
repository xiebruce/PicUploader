<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 21:01
 */

/*
 * Imgur Api v3 文档一: https://api.imgur.com/#overview
 * Imgur Api V3 文档二: https://apidocs.imgur.com/?version=latest#authorization-and-oauth
 */

namespace uploader;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class UploadImgur extends Upload{
    
    const BASE_URL = 'https://api.imgur.com/';
    const DEFAULT_DOMAIN = 'https://i.imgur.com';
    const VERSION = '3';
    
    //Imgur的clientId，相当于在上面创建的一个应用的识别码
    public $clientId;
    //相当于密码
    public $clientSecret;
    //api url
    public $uploadBaseUri;
    //代理url
    public $proxy;
    public $albumId;
	//域名
	public $domain;
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
	    
	    $this->clientId = $ServerConfig['clientId'];
	    $this->clientSecret = $ServerConfig['clientSecret'] ?? '';
	    //Guzzle要求最后有"/"才能做base_uri
        $this->uploadBaseUri = static::BASE_URL . static::VERSION . '/';
	    $this->proxy = $ServerConfig['proxy'] ?? '';
	    $this->albumId = $ServerConfig['albumId'] ?? '';
	    $this->domain = $ServerConfig['domain'] ?? '';
	    $this->uploadServer = ucfirst($params['uploadServer']);
	    !$this->domain && $this->domain = static::DEFAULT_DOMAIN;
        if(php_sapi_name() != 'cli'){
            $scheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://';
            $this->redirectUri = $scheme . $_SERVER['HTTP_HOST'] . '/auth/' . $this->uploadServer . 'Redirect.php';
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
        //https://api.imgur.com/oauth2/authorize?client_id=YOUR_CLIENT_ID&response_type=REQUESTED_RESPONSE_TYPE&state=APPLICATION_STATE
        $queryParam = [
            //Imgur特立独行，竟然说code类型将要废弃，只剩token类似，这意味着
            //不需要用code换取access_token而是这一次就直接返回了access_token
            'response_type' => 'token',
            'client_id' => $this->clientId,
            // 'status' => '32131221', // 随机数，返回时原样返回，用于防止XSS
        ];
        //http_build_query()函数能把数组变成：response_type=code&client_id=$this->clientId&……
        $queryStr = http_build_query($queryParam);
        $authUrl = static::BASE_URL . 'oauth2/authorize?' . $queryStr;
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
     * 注：在https://apidocs.imgur.com/?version=latest中搜索"Forming the authorization URL"可以看到，
     * Imgur已经废弃了使用code换取acces_token的方式，也就是说用户授权后返回地址中直接就有access_token，实
     * 在搞不明白为什么要这么做。所以本方法在这里是用不到的。
     * @param $code
     *
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAccessTokenFromCode($code){
        return $this->getAccessTokenFromImgur($code);
    }
    
    /**
     * 刷新access_token
     * @param $refreshToken
     *
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAccessTokenFromRefreshToken($refreshToken){
        return $this->getAccessTokenFromImgur($refreshToken, true);
    }
    
    /**
     * 保存access_token到文件中
     * @param $tokenArr
     *
     * @return bool
     */
    public function setAccessToken($tokenArr){
        $tokenFile = APP_PATH . '/uploader/token/'.$this->uploadServer.'Tokens';
        file_put_contents($tokenFile, json_encode($tokenArr, JSON_UNESCAPED_SLASHES));
        return true;
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
    public function getAccessTokenFromImgur($codeOrRefreshToken, $refreshToken=false){
        $formData = [
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            //只在用code交换access_token时使用，使用refresh_token
            //刷新access_token时虽然不用传，但传了也没事，不过在Imgur中用不到
            'redirect_uri' => $this->redirectUri,
        ];
        if($refreshToken){
            $formData['grant_type'] = 'refresh_token';
            $formData['refresh_token'] = $codeOrRefreshToken;
        }else{
            //这个部分Imgur用不到
            $formData['grant_type'] = 'authorization_code';
            $formData['code'] = $codeOrRefreshToken;
        }
        
        // $tokenRequestBody = http_build_query($formData);
        try {
            //GuzzleHTTP 6文档: https://guzzle-cn.readthedocs.io/zh_CN/latest/quickstart.html
            $GuzzleConfig = [
                'base_uri' => static::BASE_URL,
                'timeout'  => 30.0,
            ];
            if($this->proxy){
                $GuzzleConfig['proxy'] = $this->proxy;
            }
            //实例化GuzzleHttp
            $client = new Client($GuzzleConfig);
            $uri = 'oauth2/token';
            $response = $client->request('POST', $uri, [
                'verify' => false,
                'form_params' => $formData,
            ]);
            
            $string = $response->getBody()->getContents();
            if($response->getReasonPhrase() != 'OK'){
                throw new Exception($string);
            }
            $tokens = json_decode($string, true);
            $this->setAccessToken($tokens);
        } catch (Exception $e) {
            //上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
            $tokens = [];
            $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
        }
        
        //return the token
        return $tokens;
    }
    
    /**
     * 使用CURL方式上传
     * @param $uploadFilePath
     * @param $accessToken
     *
     * @return bool|string
     */
    public function uploadByCurl($uploadFilePath, $accessToken){
        $ch = curl_init();
        $mimeType = mime_content_type($uploadFilePath);
        $fileType = '';
        if(strpos($mimeType, 'image')!==false){
            $fileType = 'image';
        }else if(strpos($mimeType, 'video')!==false){
            $fileType = 'video';
        }
        if(!$fileType){
            return false;
        }
        $filename = basename($uploadFilePath);
        $options = [
            //还有另一个上传接口：https://api.imgur.com/3/image, 但返回结果有点不一样
            CURLOPT_URL => 'https://api.imgur.com/3/upload',
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => [
                'Authorization: Bearer ' . $accessToken,
            ],
            CURLOPT_POSTFIELDS => [
                //$fileType's value can be 'image' or 'video'
                $fileType => new \CURLFile($uploadFilePath),
                'type' => 'file',
                'name' => $filename,
                'title' => $filename,
                'description' => $filename,
            ],
            //In case you're in Windows, sometimes will throw error if not set SSL verification to false
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => 0,
        ];
        //In case you need a proxy
        $options[CURLOPT_PROXY] = 'http://127.0.0.1:1087';
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        if(curl_errno($ch)){
            echo 'Error: ' . curl_error($ch);
        }
        return $result;
    }
	
	/**
	 * Upload files to Imgur.com
	 * @param $key 自定义文件名(变量名用$key是因为对象存储是key=>value形式的，所以所谓文件名，其实真正的叫法是key，就像redis的key对应value一样，value自然就是图片的base64码了)，由于这里使用Imgur并没有使用access_token的方式上传(Imgur只提供网页版access_token)，所以相当于没有账号系统，相当于匿名上传，无法自定义上传文件名，所以这个$key并没有用到
	 * @param $uploadFilePath
	 * @param $originFilename
	 *
	 * @return array
	 * @throws GuzzleException
	 * @throws \ImagickException
	 */
	public function upload($key, $uploadFilePath, $originFilename){
		try {
			$mimeType = (new Common())->getMimeType($uploadFilePath);
			$allowVideoTypes = [
			    'video/mp4',
			    'video/webm',
			    'video/x-matroska',
			    'video/quicktime',
			    'video/x-flv',
			    'video/x-msvideo',
			    'video/x-ms-wmv',
			    'video/mpeg',
            ];
			
            $isImg = $isVideo = $supportedVideoFormat = false;
			if(strpos($mimeType, 'image')!==false){
			    $isImg = true;
            }else if(strpos($mimeType, 'video')!==false){
                $isVideo = true;
                if(in_array($mimeType, $allowVideoTypes)){
                    $supportedVideoFormat = true;
                }
            }
			if(!$isImg && !$isVideo){
                $fileExt = (new Common())->getFileExt($uploadFilePath);
                $errMsg = 'Imgur只能上传图片和支持的视频格式，你上传的文件“'.$originFilename . '.' . $fileExt .'”不是图片也不是视频，无法上传！';
                throw new Exception($errMsg);
            }else if($isVideo && !$supportedVideoFormat){
                $fileExt = (new Common())->getFileExt($uploadFilePath);
                $errMsg = 'Imgur只能上传图片和支持的视频格式，你上传的文件“'.$originFilename . '.' . $fileExt .'”是视频，但Imgur不支持上传该视频格式(只支持: mp4/webm/x-matroska/quicktime/x-flv/x-msvideo/x-ms-wmv/mpeg)，无法上传！';
                throw new Exception($errMsg);
            }
			
            $fileSize = filesize($uploadFilePath);
            if($isImg && $fileSize > 10485760){
                $useWatermark = static::$config['watermark']['useWatermark'] ?? 0;
                $fileSizeHuman = (new Common())->getFileSizeHuman($uploadFilePath);
                $errMsg = 'Imgur限制最大视频体积为200M，你上传的图片'.($useWatermark ? '压缩后': '').'为'.$fileSizeHuman."！\n";
                throw new Exception($errMsg);
            }
            //209715200B = 200MB
            if($isVideo && $supportedVideoFormat && $fileSize > 209715200) {
                $fileSizeHuman = (new Common())->getFileSizeHuman($uploadFilePath);
                $errMsg = 'Imgur限制最大图片体积为200M，你上传的视频体积为' . $fileSizeHuman
                    . "！\n";
                throw new Exception($errMsg);
            }
            
            $GuzzleConfig = [
				'base_uri' => $this->uploadBaseUri,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//实例化GuzzleHttp
			$client = new Client($GuzzleConfig);
			
			$accessToken = $this->getAccessToken();
			$authorization = $accessToken ? 'Bearer ' . $accessToken : 'Client-ID '.$this->clientId;
            
            $fileTpye = $isImg ? 'image' : 'video';
			//上传
			$fp = fopen($uploadFilePath, 'rb');
            $formData = [
                [
                    'name' => $fileTpye,
                    'contents' => $fp,
                ],
                [
                    'name' => 'type',
                    'contents' => 'file',
                ],
                [
                    'name' => 'name',
                    'contents' => $originFilename,
                ],
                [
                    'name' => 'title',
                    'contents' => $originFilename,
                ],
                [
                    'name' => 'description',
                    'contents' => $originFilename,
                ],
            ];
            //cQxVB94
            if($this->albumId){
                $formData[] = [
                    'name' => 'album',
                    'contents' => $this->albumId,
                ];
            }
			$response = $client->request('POST', 'upload', [
				'verify' => false,
				'headers'=>[
					'Authorization' => $authorization,
				],
				'multipart' => $formData,
			]);
			is_resource($fp) && fclose($fp);
			
			$string = $response->getBody()->getContents();
			
			if($response->getReasonPhrase() != 'OK'){
				throw new Exception('上传接口返回的数据：' . $string);
			}
			
			$returnArr = json_decode($string, true);
			if($returnArr['success'] !== true){
				throw new Exception('json_decode后的数据'.var_export($returnArr, true));
			}
			
			$data = $returnArr['data'];
			// 图片链接，但这里不用，而是自己拼接
			$link = $data['link'];
			$deleteLink = $data['deletehash'];
			
			$key = str_replace(static::DEFAULT_DOMAIN . '/', '', $link);
			
			$data = [
				'code' => 0,
				'msg' => 'success',
				'key' => $key,
				'domain' => $this->domain,
				'delHash' => $deleteLink,
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
	
	/**
	 * Delete image from Imgur
	 * @param $hash
	 *
	 * @return array
	 * @throws GuzzleException
	 */
	public function deleteImage($hash){
	    $GuzzleConfig = [
		    'base_uri' => $this->uploadBaseUri,
		    'timeout'  => 30.0,
	    ];
	    if($this->proxy){
		    $GuzzleConfig['proxy'] = $this->proxy;
	    }
	    //实例化GuzzleHttp
	    $client = new Client($GuzzleConfig);
	
	    //上传
        $accessToken = $this->getAccessToken();
        $authorization = $accessToken ? 'Bearer ' . $accessToken : 'Client-ID '.$this->clientId;
	    $response = $client->request('DELETE', 'image/'.$hash, [
	        'verify' => false,
		    'headers'=>[
			    'Authorization' => $authorization,
		    ],
	    ]);
	
	    $string = $response->getBody()->getContents();
	
	    if($response->getReasonPhrase() != 'OK'){
		    return [
			    'code' => -1,
			    'message' => '删除接口返回数据：'.$string,
		    ];
	    }
	
	    $returnArr = json_decode($string, true);
	    if($returnArr['success'] !== true){
		    return [
			    'code' => -2,
			    'message' => '删除接口返回数据json_decode后'.var_export($returnArr, true),
		    ];
	    }
	    
	    return [
		    'code' => 0,
		    'message' => 'Delete success',
	    ];
    }
    
    /**
     * 创建相册，但它不同于文件夹，相册无法相互嵌套，而且可以创建相同名称的相册(但id是不同的)
     * 所以无法从名称上查询一个相册是否存在(没有这样的接口)
     * @param $name
     *
     * @return string
     * @throws GuzzleException
     */
    public function createAlbum($name){
        try {
            $GuzzleConfig = [
                'base_uri' => $this->uploadBaseUri,
                'timeout'  => 30.0,
            ];
            if($this->proxy){
                $GuzzleConfig['proxy'] = $this->proxy;
            }
            //实例化GuzzleHttp
            $client = new Client($GuzzleConfig);
        
            $accessToken = $this->getAccessToken();
            $authorization = $accessToken ? 'Bearer ' . $accessToken : 'Client-ID '.$this->clientId;
        
            //上传
            $response = $client->request('POST', 'album', [
                'verify' => false,
                'headers'=>[
                    'Authorization' => $authorization,
                ],
                'form_params' => [
                    'title' => $name,
                    'description' => $name,
                    // 'privacy' => '' // public | hidden | secret
                ]
            ]);
        
            $string = $response->getBody()->getContents();
            if($response->getReasonPhrase() != 'OK'){
                throw new Exception('上传接口返回的数据：' . $string);
            }
        
            $returnArr = json_decode($string, true);
            if($returnArr['success'] !== true){
                throw new Exception('json_decode后的数据'.var_export($returnArr, true));
            }
            $albumId = $returnArr['data']['id'];
        } catch (Exception $e) {
            //上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
            $albumId = '';
            $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
        }
        return $albumId;
    }
    
    /**
     * 获取相册信息
     * @param $id
     *
     * @return array|mixed
     * @throws GuzzleException
     */
    public function getAlbum($id){
        try {
            $GuzzleConfig = [
                'base_uri' => $this->uploadBaseUri,
                'timeout'  => 30.0,
            ];
            if($this->proxy){
                $GuzzleConfig['proxy'] = $this->proxy;
            }
            //实例化GuzzleHttp
            $client = new Client($GuzzleConfig);
        
            $accessToken = $this->getAccessToken();
            $authorization = $accessToken ? 'Bearer ' . $accessToken : 'Client-ID '.$this->clientId;
        
            //上传
            $uri = 'album/' . $id;
            $response = $client->request('GET', $uri, [
                'verify' => false,
                'headers'=>[
                    'Authorization' => $authorization,
                ],
            ]);
        
            $string = $response->getBody()->getContents();
            if($response->getReasonPhrase() != 'OK'){
                throw new Exception('上传接口返回的数据：' . $string);
            }
        
            $returnArr = json_decode($string, true);
            if($returnArr['success'] !== true){
                throw new Exception('json_decode后的数据'.var_export($returnArr, true));
            }
            // $albumId = $returnArr['data']['id'];
        } catch (Exception $e) {
            //上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
            $returnArr = [];
            $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
        }
        return $returnArr;
    }
    
    /**
     * 判断album是否存在
     * @param $id
     *
     * @return bool
     * @throws GuzzleException
     */
    public function isAlbumExists($id){
        $retArr = $this->getAlbum($id);
        $bool = isset($retArr['data']['id']) ? true : false;
        return $bool;
    }
}