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

class UploadGitlab extends Upload{
    
    //github仓库(带用户名)，如：xiebruce/PicUploader
    public $repo;
    public $projectId;
    //分支，默认：master
    public $branch;
	//文件夹，表示把图片上传到仓库中的哪个文件夹下，可以为空，可以写多层文件夹，如：images/travel/Turkey
    public $directory;
    //github commit时的-m参数指定的内容，默认：Upload by PicUploader [https://github.com/xiebruce/PicUploader]
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
	    $ServerConfig = $params['config']['storageTypes'][$params['uploadServer']];
	    $this->repo = $ServerConfig['repo'] ?? '';
	    $this->projectId = $ServerConfig['projectId'] ?? '';
        $this->baseUri = rtrim($ServerConfig['baseUri'], '/') . '/';
        $this->branch = $ServerConfig['branch'] ?? 'master';
	    $this->message = $ServerConfig['message'] ?? 'Upload by PicUploader: https://github.com/xiebruce/PicUploader';
	    $this->access_token = $ServerConfig['access_token'] ?? '';
	    $this->domain = $ServerConfig['domain'] ?? '';
	    $defaultDomain = rtrim($this->baseUri, '/');
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
     * getBranchList
     * 文档: https://docs.gitlab.com/ee/api/branches.html#list-repository-branches
     * @param string $branch
     *
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getBranchList($branch=''){
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
            
            $uri = 'api/v4/projects/' . $this->projectId . '/repository/branches';
            $branch && $uri = $uri . '?search=^' . $branch;
            $response = $client->request('GET', $uri, [
                'verify' => false,
                'headers' => [
                    'PRIVATE-TOKEN' => $this->access_token,
                    'content-type' => 'application/json',
                ],
            ]);
        
            $string = $response->getBody()->getContents();
            if($response->getReasonPhrase() != 'OK'){
                throw new Exception($string);
            }
        
            $returnArr = json_decode($string, true);
            $data = $returnArr;
        } catch (Exception $e) {
            //上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
            $data = [
                'code' => $e->getCode(),
                'msg' => $e->getMessage(),
            ];
            $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
        }
        return $data;
    }
    
    /**
     * isBranchExists
     * @param $branch
     *
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function isBranchExists($branch){
        $branchList = $this->getBranchList($branch);
        $branches = array_column($branchList, 'name');
        $branchExists = false;
        if(in_array($branch, $branches)){
            $branchExists = true;
        }
        return $branchExists;
    }
    
    /**
     * createBranch
     * 文档: https://docs.gitlab.com/ee/api/branches.html#create-repository-branch
     * @param $branch
     *
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createBranch($branch){
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
            
            $uri = 'api/v4/projects/' . $this->projectId . '/repository/branches';
            $response = $client->request('POST', $uri, [
                'verify' => false,
                'headers' => [
                    'PRIVATE-TOKEN' => $this->access_token,
                    'content-type' => 'application/json',
                ],
                'query' => [
                    'branch' => $branch,
                    'ref' => 'master',
                ],
            ]);
        
            $string = $response->getBody()->getContents();
            if($response->getReasonPhrase() != 'Created'){
                throw new Exception($string);
            }
        
            $returnArr = json_decode($string, true);
            if(!isset($returnArr['name'])){
                throw new Exception(var_export($returnArr, true));
            }
        
            $data = $returnArr;
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
	 * Upload files to Github
     * 文档: https://docs.gitlab.com/ee/api/repository_files.html#create-new-file-in-repository
     * @param $key
	 * @param $uploadFilePath
	 *
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function upload($key, $uploadFilePath){
		try {
            if(!$this->isBranchExists($this->branch)){
                $branchInfo = $this->createBranch($this->branch);
                if(isset($branchInfo['code']) && $branchInfo['code']==-1){
                    throw new Exception($branchInfo['msg']);
                }
            }
            
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
			$uri = 'api/v4/projects/' . $this->projectId . '/repository/files/' . urlencode($key);
			$response = $client->request('POST', $uri, [
				'verify' => false,
				'headers' => [
					'PRIVATE-TOKEN' => $this->access_token,
                    'content-type' => 'application/json',
				],
				'json' => [
                    'branch' => $this->branch,
                    'content' => base64_encode(file_get_contents($uploadFilePath)),
					'commit_message' => $this->message,
                    'encoding' => 'base64'
				],
			]);
			
			$string = $response->getBody()->getContents();
			if($response->getReasonPhrase() != 'Created'){
				throw new Exception($string);
			}
			
			$returnArr = json_decode($string, true);
			if(!isset($returnArr['file_path'])){
				throw new Exception(var_export($returnArr, true));
			}
            //https://gitlab.com/picuploader/img_bed/-/raw/master4/images/2020/04/17/T002R300x300M000000EI9tu27e5iy_1.jpg
            //https://gitlab.com/xiebruce/img_bed/-/raw/master/Xnip2020-04-13_15-30-13.jpg
			$key = strtolower($this->repo) . '/-/raw/' . $this->branch . '/' . $key;
			
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