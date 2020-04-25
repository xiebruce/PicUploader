<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2019-07-06
 * Time: 22:52
 */

/*
 * coding.net官方文档: https://open.coding.net/open-api/
 * 注意，官方文档中并没有上传api，也发邮件问了，他们并不打算支持通过api上传，所以最初以为coding.net是无法通过api上传的，但是自从看到picgo插件: https://github.com/zytomorrow/picgo-plugin-coding 之后，发现原来是可以通过api上传的，api需要自己在网页里上传一下，然后看请求的参数，自己找出api以及需要的参数。
 * 感谢@zytomorrow的解答，参见：https://github.com/zytomorrow/picgo-plugin-coding/issues/1
 */

namespace uploader;

use Exception;
use GuzzleHttp\Client;

class UploadCodingnet extends Upload{
    
    public $baseUri;
    //gittee仓库(带用户名)，如：xiebruce/PicUploader
    public $group;
    public $username;
    public $project;
    //分支，默认：master
    public $branch;
	//文件夹，表示把图片上传到仓库中的哪个文件夹下，可以为空，可以写多层文件夹，如：images/travel/Turkey
    public $directory;
    //gitee commit时的-m参数指定的内容，默认：Upload by PicUploader [https://github.com/xiebruce/PicUploader]
    public $message;
    //access_token，需要有这个才有权限操作
    public $accessToken;
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
	    
	    $this->group = $ServerConfig['group'] ?? '';
	    $this->username = $ServerConfig['username'] ?? '';
	    $this->project = $ServerConfig['project'] ?? '';
	    $this->group = $ServerConfig['group'] ?? '';
	    $this->branch = $ServerConfig['branch'] ?? 'master';
	    $this->message = $ServerConfig['message'] ?? 'Upload by PicUploader';
	    $this->accessToken = $ServerConfig['access_token'] ?? '';
	    $this->domain = $ServerConfig['domain'] ?? '';
        //GET to branch info, POST to upload file
        //https://xiebruce-01.coding.net/api/user/xiebruce-01/project/imagebed/depot/imagebed/git/upload/master
        //list branch
        //https://xiebruce-01.coding.net/api/user/xiebruce-01/project/imagebed/depot/imagebed/git/list_branches
        $this->baseUri = 'https://' . $this->group . '.coding.net/api/user/' . $this->username . '/project/' . $this->project . '/depot/' . $this->project . '/git/';
        
        $defaultDomain = 'https://' . $this->group . '.coding.net/p/' . $this->project . '/d/' . $this->project . '/git/raw/' . $this->branch;
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
     * getLastCommitSha(直接查询指定的branch)
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getLastCommitSha2(){
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
            $uri = 'upload/master';
            $response = $client->request('GET', $uri, [
                'verify' => false,
                'headers'=>[
                    'Authorization' => 'token ' . $this->accessToken,
                ],
            ]);
        
            $string = $response->getBody()->getContents();
            if($response->getReasonPhrase() != 'OK'){
                throw new Exception($string);
            }
        
            $returnArr = json_decode($string, true);
            if(!isset($returnArr['data']['lastCommit'])){
                throw new Exception(var_export($returnArr, true));
            }
        
            $lastCommitSha = $returnArr['data']['lastCommit'];
        } catch (Exception $e) {
            //上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
            $lastCommitSha = '';
            $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
        }
        return $lastCommitSha;
    }
    
    /**
     * getBranchList
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getBranchList(){
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
            $uri = 'list_branches';
            $response = $client->request('GET', $uri, [
                'verify' => false,
                'headers'=>[
                    'Authorization' => 'token ' . $this->accessToken,
                ],
            ]);
        
            $string = $response->getBody()->getContents();
            if($response->getReasonPhrase() != 'OK'){
                throw new Exception($string);
            }
        
            $returnArr = json_decode($string, true);
            if(!isset($returnArr['code']) || $returnArr['code']!==0){
                throw new Exception(var_export($returnArr, true));
            }
        
            $branches = $returnArr['data'];
        } catch (Exception $e) {
            //上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
            $branches = [];
            $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
        }
        return $branches;
    }
    
    /**
     * getLastCommitSha
     * @param $branch
     *
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getLastCommitSha($branch){
        $branches = $this->getBranchList();
        //把原数组以name作为key
        $branches = array_column($branches, null, 'name');
        if(array_key_exists($branch, $branches)){
            $branchExists = true;
            $lastCommitSha = $branches[$branch]['sha'];
        }else{
            $branchExists = false;
            $lastCommitSha = $branches['master']['sha'];
        }
        return [
            'branchExists' => $branchExists,
            'lastCommitSha' => $lastCommitSha,
        ];
    }
	
	/**
	 * Upload files to coding.net(已被腾讯收购)
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
			
			$mime = mime_content_type($uploadFilePath);
            $llastCommitShaInfo = $this->getLastCommitSha($this->branch);
            $branchName = '';
            $uri = 'upload/' . $this->branch;
            //当branch不存在时，需要创建，创建只需要指定"newRef"参数的值为新的branch名即可
            //但是，由于branch不存在，所以$lastCommitSha需要从master中获取，api指向也必须用master
            if(!$llastCommitShaInfo['branchExists']){
                $branchName = $this->branch;
                $uri = 'upload/master';
            }
            if($this->directory){
                $uri .= '/' . $this->directory;
            }
            $lastCommitSha = $llastCommitShaInfo['lastCommitSha'];
			$response = $client->request('POST', $uri, [
				'verify' => false,
                'headers'=>[
                    'Authorization' => 'token ' . $this->accessToken,
                ],
				'multipart' => [
				    [
				        'name' => 'message',
				        'contents' => $this->message,
                    ],
                    [
                        'name' => 'lastCommitSha',
                        'contents' => $lastCommitSha,
                    ],
                    [
                        'name' => 'newRef',
                        'contents' => $branchName,
                    ],
                    [
                        //不能带路径
                        'name' => $key,
                        'contents' => file_get_contents($uploadFilePath),
                        'headers' => [
                            'Content-Type' => $mime,
                        ],
                        //文件名，必须传，否则报"提交内容不能为空"错误
                        'filename' => $key,
                    ],
                ],
			]);
			
			$string = $response->getBody()->getContents();
			if($response->getReasonPhrase() != 'OK'){
				throw new Exception($string);
			}
			
			$returnArr = json_decode($string, true);
			if(!isset($returnArr['code']) || $returnArr['code']!==0){
				throw new Exception(var_export($returnArr, true));
			}
			
            //直链url格式
            //https://xiebruce-01.coding.net/p/imagebed/d/imagebed/git/raw/master2/a4cd4f06ff30deff5c9bea968dfdf472.png
            if($this->directory){
                $key = $this->directory . '/' . $key;
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