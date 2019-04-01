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
	
    public static $config;
    //arguments from php client, the image absolute path
    public $argv;

    /**
     * Upload constructor.
     *
     * @param $config
     * @param $argv
     */
    public function __construct($config, $argv)
    {
	    $tmpArr = explode('\\',__CLASS__);
	    $className = array_pop($tmpArr);
	    $ServerConfig = $config['storageTypes'][strtolower(substr($className,6))];
	    
	    $this->repo = $ServerConfig['repo'] ?? '';
	    $this->branch = $ServerConfig['branch'] ?? 'master';
	    $this->message = $ServerConfig['message'] ?? 'Upload from PicUploader [https://www.xiebruce.top/17.html]';
	    $this->access_token = $ServerConfig['access_token'] ?? '';
	    $this->domain = $ServerConfig['domain'] ?? '';
	    if(!isset($ServerConfig['directory'])){
		    //如果没有设置，使用默认的按年/月/日方式使用目录
		    $this->directory = date('Y/m/d');
	    }else{
		    //设置了，则按设置的目录走
		    $this->directory = trim($ServerConfig['directory'], '/');
	    }
	
	    $this->baseUri = $ServerConfig['baseUri'];
	    $this->proxy = $ServerConfig['proxy'] ?? '';

        $this->argv = $argv;
        static::$config = $config;
    }
	
	/**
	 * Upload images to Imgur
	 * @param $key
	 * @param $uploadFilePath
	 * @param $originFilename
	 *
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function upload($key, $uploadFilePath, $originFilename){
		$fileSize = filesize($uploadFilePath);
		if($fileSize > 10000000){
			$imgWidth = isset(static::$config['imgWidth']) && static::$config['imgWidth'] ? static::$config['imgWidth'] : 0;
			if($imgWidth){
				$error = 'Due to https://sm.ms restriction, you can\'t upload photos lager than 5M, this photo is '.($fileSize/1000000).'M after compress.'."\n";
			}else{
				$error = "Due to https://sm.ms restriction, you can't upload photos lager than 5M, and you didn't set the compress option at the config file.\n";
			}
			
			$this->writeLog($error, 'error_log');
			return $error;
		}else{
			try {
				$GuzzleConfig = [
					'base_uri' => $this->baseUri,
					'timeout'  => 10.0,
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
						'message' => '',
						'content' => base64_encode(file_get_contents($uploadFilePath)),
						'branch' => $this->branch,
					],
				]);
				
				$string = $response->getBody()->getContents();
				
				if($response->getReasonPhrase() != 'Created'){
					throw new \Exception($string);
				}else{
					$returnArr = json_decode($string, true);
					if(isset($returnArr['content']['download_url'])){
						if(!$this->domain){
							$link = $returnArr['content']['download_url'];
						}else{
							$link = $this->domain . '/' .$returnArr['content']['path'];
						}
					}else{
						throw new \Exception(var_export($returnArr, true));
					}
				}
			} catch (Exception $e) {
				echo $e->getMessage();exit;
				//上传数错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
				$link = [
					'link' => $e->getMessage()."\n",
					'delLink' => '',
				];
				$this->writeLog($link, 'error_log');
			}
			return $link;
		}
    }
}