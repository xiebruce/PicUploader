<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 00:46
 */

namespace uploader;

use GuzzleHttp\Client;

class UploadSmms extends Common {
	//api url
	public $baseUrl;
	//代理url
	public $proxy;
	
    //config from config.php, using static because the parent class needs to use it.
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
	
	    $this->baseUrl = $ServerConfig['baseUrl'];
	    $this->proxy = $ServerConfig['proxy'] ?? '';
        
        $this->argv = $argv;
        static::$config = $config;
    }
	
	/**
	 * Upload image to http://sm.ms
	 * @param $key  由于sm.ms无法自己指定key(主要是没有账号系统怕跟别人重复，所以都是它重命名)，所以key在这里不使用。
	 * @param $uploadFilePath
	 *
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function upload($key, $uploadFilePath){
		$GuzzleConfig = [
			'base_uri' => $this->baseUrl,
			'timeout'  => 10.0,
		];
		if($this->proxy){
			$GuzzleConfig['proxy'] = $this->proxy;
		}
        //实例化GuzzleHttp
        $client = new Client($GuzzleConfig);
		
		$fileSize = filesize($uploadFilePath);
		if($fileSize > 5000000){
			$imgWidth = isset(static::$config['imgWidth']) && static::$config['imgWidth'] ? static::$config['imgWidth'] : 0;
			if($imgWidth){
				$error = 'Due to https://sm.ms restriction, you can\'t upload photos lager than 5M, this photo is '.($fileSize/1000000).'M after compress.'."\n";
			}else{
				$error = "Due to https://sm.ms restriction, you can't upload photos lager than 5M, and you didn't set the compress option at the config file.\n";
			}
			
			$this->writeLog($error, 'error_log');
		}else{
			try{
				//upload?ssl=1
				//post file to https://sm.ms
				$response = $client->request('POST', 'upload?ssl=1', [
					'multipart' => [
						[
							'name'     => 'smfile',
							'contents' => fopen($uploadFilePath, 'r')
						],
					]
				]);
				
				$string = $response->getBody()->getContents();
				if($response->getReasonPhrase() != 'OK'){
					throw new \Exception($string);
				}else{
					$returnArr = json_decode($string, true);
					if($returnArr['code'] == 'success'){
						$data = $returnArr['data'];
						$deleteLink = 'Delete Link: '.$data['delete'];
						// $link .= $this->formatLink($data['url'], $originFilename);
						$link = [
							'link' => $data['url'],
							'delLink' => $deleteLink,
						];
						return $link;
					}
				}
			}catch (\Exception $e){
				//上传数错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
				$link = [
					'link' => $e->getMessage()."\n",
					'delLink' => '',
				];
				$this->writeLog($link, 'error_log');
			}
		}
    }
}