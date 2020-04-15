<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 21:01
 */

namespace uploader;

use Exception;
use GuzzleHttp\Client;

class UploadAzure extends Upload{
    //POST https://dev.azure.com/{organization}/{project}/_apis/git/repositories/{repositoryId}/pushes?api-version=5.1
    const BASE_URI = 'https://dev.azure.com/';
    const AUTH_BASE_URL = 'https://app.vssps.visualstudio.com/oauth2/';
    const AUTH_URL = self::AUTH_BASE_URL . 'authorize';
    const API_VERSION = '5.1';
    
    //分支，默认：master
    public $branch;
	//文件夹，表示把图片上传到仓库中的哪个文件夹下，可以为空，可以写多层文件夹，如：images/travel/Turkey
    public $directory;
    //类似github commit时的-m参数指定的内容，默认：Upload by PicUploader
    public $comment;
    //access_token，通过oauth2.0动态获取
    public $accessToken;
    //直接从网页端获取(而且也只能从网页端获取)
    public $personalAccessToken;
    //如果使用$personalAccessToken，则一定需要username
    public $username;
    public $appId;
    public $clientId;
    public $clientSecert;
    public $redirectUri;
    public $organization;
    public $project;
    public $repositoryId;
	//域名
	public $domain;
	//api基础地址
	public $baseUrl;
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
	    $ServerConfig = $params['config']['storageTypes'][strtolower($params['uploadServer'])];
	    
	    $this->username = $ServerConfig['username'] ?? '';
	    $this->personalAccessToken = $ServerConfig['accessToken'] ?? '';
	    $this->appId = $ServerConfig['appId'] ?? '';
	    $this->clientId = $ServerConfig['appSecret'] ?? '';
	    $this->clientSecert = $ServerConfig['clientSecret'] ?? '';
	    $this->organization = $ServerConfig['organization'] ?? '';
	    $this->project = $ServerConfig['project'] ?? '';
	    $this->repositoryId = $ServerConfig['repositoryId'] ?? '';
	    $this->branch = $ServerConfig['branch'] ?? 'master';
        $this->comment = $ServerConfig['comment'] ?? 'Upload by PicUploader: https://github.com/xiebruce/PicUploader';
	    //GET to get a list or POST to create/update/delete a file: https://dev.azure.com/{organization}/{project}/_apis/git/repositories/{repositoryId}/pushes?api-version=5.1
        //Get specific file: https://dev.azure.com/{organization}/{project}/_apis/git/repositories/{repositoryId}/pushes/{pushId}?api-version=5.1
	    $this->baseUrl = static::BASE_URI . $this->organization . '/' . $this->project . '/_apis/git/repositories/' . $this->repositoryId;
	    // $this->baseUrl = 'https://dev.azure.com/' . $this->organization . '/' . $this->project . '/_apis/git/repositories/' . $this->repositoryId . '/pushes?api-version=5.1';
	    // var_dump($this->baseUrl);exit;
	    $this->domain = $ServerConfig['domain'] ?? '';
	    $defaultDomain = rtrim(static::BASE_URI, '/');
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
    
        $redirectUri = APP_PATH . '/uploader/token/' . $this->uploadServer . 'RedirectUri';
        if(php_sapi_name() != 'cli'){
            $scheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://';
            $this->redirectUri = $scheme . $_SERVER['HTTP_HOST'] . '/auth/' . $this->uploadServer . 'Redirect.php';
            //把这个redirectUri存起来，是因为使用refresh_token获取access_token时需要该参数，而使用refresh_token获取有可能是快捷键上传或右击上传触发，这两种方式都属于cli方式，无法自动获取到域名，所以必须把在能获取的时候存下来
            file_put_contents($redirectUri, $this->redirectUri);
        }else{
            is_file($redirectUri) && $this->redirectUri = file_get_contents($redirectUri);
        }

        $this->argv = $params['argv'];
        static::$config = $params['config'];
    }
    
    /**
     * 返回授权url(被settings/SettingController.php中的getStorageParams()方法调用)
     * 因为调用时new的是变量类名，所以这里显示没有使用(phpstorm无法识别)
     * 文档：https://docs.microsoft.com/en-us/azure/devops/integrate/get-started/authentication/oauth?view=azure-devops#authorize-your-app
     * @return string
     */
    public function getAuthorizationUrl(){
        $queryParam = [
            'response_type' => 'Assertion',
            'client_id' => $this->appId,
            'redirect_uri' => $this->redirectUri,
            'scope' => 'vso.code_full',
            // 'state' => '32131221', // 随机数，返回时原样返回，用于防止XSS，可以不传，传了也可以不用
        ];
        //http_build_query()函数能把数组变成：response_type=code&client_id=$this->clientId&……
        $queryStr = http_build_query($queryParam);
        $authUrl = static::AUTH_URL . '?' . $queryStr;
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
        return $this->getAccessTokenFromAzure($code);
    }
    
    /**
     * 刷新access_token
     * @param $refreshToken
     *
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAccessTokenFromRefreshToken($refreshToken){
        return $this->getAccessTokenFromAzure($refreshToken, true);
    }
    
    /**
     * 使用标准的Oauth2.0授权方式从"app.vssps.visualstudio.com/oauth2/"中获取access_token
     * 有可能通过code获取(第一次)或通过refresh_token获取(刷新token)，因为两个获取接口以及方法都
     * 是一模一样的，只不过有两个参数不同，所以写成同一个方法，用参数来判断区别
     * getAccessToken by code: https://docs.microsoft.com/en-us/azure/devops/integrate/get-started/authentication/oauth?view=azure-devops#get-an-access-and-refresh-token-for-the-user
     * getAccessToken by refreshToken: https://docs.microsoft.com/en-us/azure/devops/integrate/get-started/authentication/oauth?view=azure-devops#refresh-an-expired-access-token
     *
     * @param string $codeOrRefreshToken
     * @param bool $refreshToken
     *
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAccessTokenFromAzure($codeOrRefreshToken, $refreshToken=false){
        //code获取accesstoken参数：client_assertion_type=urn:ietf:params:oauth:client-assertion-type:jwt-bearer&client_assertion={0}&grant_type=urn:ietf:params:oauth:grant-type:jwt-bearer&assertion={1}&redirect_uri={2}
        
        //refreshToken获取accesstoken参数：client_assertion_type=urn:ietf:params:oauth:client-assertion-type:jwt-bearer&client_assertion={0}&grant_type=refresh_token&assertion={1}&redirect_uri={2}
        $queryParams = [
            'client_assertion_type' => 'urn:ietf:params:oauth:client-assertion-type:jwt-bearer',
            'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
            'client_assertion' => urlencode($this->clientSecert),
            'redirect_uri' => $this->redirectUri,
        ];
        if($refreshToken){
            $queryParams['grant_type'] = 'refresh_token';
            $queryParams['assertion'] = $codeOrRefreshToken;
        }else{
            $queryParams['grant_type'] = 'urn:ietf:params:oauth:grant-type:jwt-bearer';
            $queryParams['assertion'] = $codeOrRefreshToken;
        }
        
        try {
            //GuzzleHTTP 6文档: https://guzzle-cn.readthedocs.io/zh_CN/latest/quickstart.html
            $GuzzleConfig = [
                'base_uri' => static::AUTH_BASE_URL,
                'timeout'  => 30.0,
            ];
            if($this->proxy){
                $GuzzleConfig['proxy'] = $this->proxy;
            }
            //实例化GuzzleHttp
            $client = new Client($GuzzleConfig);
            $response = $client->request('POST', 'token', [
                'verify' => false,
                'form_params' => $queryParams,
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
     * getAuthorizationToken
     * 支持两种access_token，一种是从Azure后台自己生成，一种是通过标准OAuth2.0获取
     * personal access token方式使用文档: https://docs.microsoft.com/en-us/rest/api/azure/devops/?view=azure-devops-rest-5.1#assemble-the-request
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAuthorizationToken(){
        //Oauth2.0方式的access_token
        $accessToken = $this->getAccessToken();
        if(!$accessToken){
            //直接Azure后台拿的access_token
            $authorization = 'Basic ' . base64_encode($this->username . ':' . $this->personalAccessToken);
        }else{
            $authorization = 'Bearer '.$accessToken;
        }
        return $authorization;
    }
    
    /**
     * getRefsList
     * 文档: https://docs.microsoft.com/en-us/rest/api/azure/devops/git/refs/list?view=azure-devops-rest-5.1#refs
     * @param string $url
     *
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getRefsList(){
        try {
            $GuzzleConfig = [
                'timeout'  => 30.0,
            ];
            if($this->proxy){
                $GuzzleConfig['proxy'] = $this->proxy;
            }
            
            //new GuzzleHttp instance
            $client = new Client($GuzzleConfig);
            //GET https://dev.azure.com/{organization}/{project}/_apis/git/repositories/{repositoryId}/refs?api-version=5.1
            $queryArr = [
                'api-version' => static::API_VERSION,
                'filter' => 'heads/' . $this->branch,
            ];
            $url = $this->baseUrl . '/refs';
            $queryStr = http_build_query($queryArr);
            $url .= '?' . $queryStr;
            // echo($url);exit;
            $response = $client->request('GET', $url, [
                'verify' => false,
                'headers' => [
                    'Authorization' => $this->getAuthorizationToken(),
                ],
                //https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html#query
                //GET请求使用query添加参数，相当于在原链接后加 ?a=1&b=2……
                //当提供的uri已经有参数时，如果用query传，会把uri已有的参数忽略
                /*'query' => [
                    'searchCriteria.refName' => $this->branch,
                    'searchCriteria.includeRefUpdates' => false,
                    //返回的条数
                    'top' => 1,
                ],*/
            ]);
        
            $string = $response->getBody()->getContents();
            // var_dump($string);exit;
            if($response->getReasonPhrase() != 'OK'){
                throw new Exception($string);
            }
            
            $returnArr = json_decode($string, true);
            if(!isset($returnArr['count'])){
                throw new Exception(var_export($returnArr, true));
            }
            
            $returnArr = $returnArr['value'];
        } catch (Exception $e) {
            //上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
            $returnArr = [];
            $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
        }
        return $returnArr;
    }
    
    /**
     * getObjectIdOfRef
     * @param $branch
     *
     * @return mixed|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getObjectIdOfRef($branch){
        $refs = $this->getRefsList($branch);
        $objectId = '';
        if($refs){
            foreach($refs as $ref){
                if($ref['name'] == 'refs/heads/'.$branch){
                    $objectId = $ref['objectId'];
                    break;
                }
            }
        }
        return $objectId;
    }
    
	/**
	 * Upload files to Github
     * 文档: https://docs.microsoft.com/en-us/rest/api/azure/devops/git/pushes/create?view=azure-devops-rest-5.1
     *
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function upload($key, $uploadFilePath){
		try {
			$GuzzleConfig = [
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
            $key = '/' . $key;
			// var_dump($key);exit;
            
            $oldObjectId = $this->getObjectIdOfRef($this->branch);
            
            //POST https://dev.azure.com/{organization}/{project}/_apis/git/repositories/{repositoryId}/pushes?api-version=5.1
            $url = $this->baseUrl . '/pushes?api-version=' . static::API_VERSION;
            // echo $url;exit;
 			$response = $client->request('POST', $url, [
				'verify' => false,
				'headers' => [
					'Authorization' => $this->getAuthorizationToken(),
				],
				'json' => [
				    'refUpdates' => [
                        [
                            'name'=> 'refs/heads/' . $this->branch,
                            'oldObjectId' => $oldObjectId,
                        ],
                    ],
				    'commits' => [
				        [
                            'comment' => $this->comment,
                            'changes' => [
                                [
                                    //add, edit, delete
                                    'changeType' => 'add',
                                    'item' => [
                                        'path' => $key,
                                    ],
                                    'newContent' => [
                                        'content' => base64_encode(file_get_contents($uploadFilePath)),
                                        'contentType' => 'base64encoded'
                                    ]
                                ]
                            ],
                        ],
                    ],
				],
			]);
			
			$string = $response->getBody()->getContents();
			if($response->getReasonPhrase() != 'Created'){
				throw new Exception($string);
			}
			
			$returnArr = json_decode($string, true);
			if(!isset($returnArr['repository']['url'])){
				throw new Exception(var_export($returnArr, true));
			}
			
			//图片直链地址示例
			//https://dev.azure.com/kmx3ecup/694e5d2b-7aeb-4aac-814c-19edb50d9ff1/_apis/git/repositories/5405f405-6043-4670-b0a7-771caccf49c1/items?path=/2020/04/14/504732077dca6531269b2fc13a426958.jpg&versionDescriptor[versionOptions]=0&versionDescriptor[versionType]=0&versionDescriptor[version]=master1&resolveLfs=true&$format=octetStream&api-version=5.0
            $publicUrl = $returnArr['repository']['url'] . '/items?path=' . $key . '&versionDescriptor[versionOptions]=0&versionDescriptor[versionType]=0&versionDescriptor[version]=' . $this->branch . '&resolveLfs=true&$format=octetStream&api-version=5.0';
            $key = str_replace(static::BASE_URI, '', $publicUrl);
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