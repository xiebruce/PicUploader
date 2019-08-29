<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2019-07-20
 * Time: 18:53
 */

namespace uploader;

use Exception;
use GuzzleHttp\Client;

class UploadChevereto extends Upload{
    public $accessToken;
	//域名
	public $domain;
	//api基础地址
	public $siteUrl;
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
	    
	    $this->accessToken = $ServerConfig['accessKey'] ?? '';
	    $this->siteUrl = $ServerConfig['siteUrl'] ?? '';
	    $this->proxy = $ServerConfig['proxy'] ?? '';
	    $this->domain = $ServerConfig['domain'] ?? '';
	    $this->uploadServer = ucfirst($params['uploadServer']);

        $this->argv = $params['argv'];
        static::$config = $params['config'];
    }
	
	/**
	 * Upload files to Chevereto(An open source self-hosted image host)
	 * @param $key, 由于Chevereto不能自定义上传的文件名称，所以key在这里用不到
	 * @param $uploadFilePath
	 *
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function upload($key, $uploadFilePath){
		try {
			$GuzzleConfig = [
				'base_uri' => $this->siteUrl,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			
			//new GuzzleHttp instance
			$client = new Client($GuzzleConfig);
			
			$uri = '/api/1/upload';
			$response = $client->request('POST', $uri, [
				'multipart' => [
					[
						'name'     => 'key',
						'contents' => $this->accessToken,
					],
					[
						'name'     => 'format',
						'contents' => 'json',
					],
					[
						'name'     => 'source',
						'contents' => base64_encode(file_get_contents($uploadFilePath)),
					],
				]
			]);
			$string = $response->getBody()->getContents();
			if($response->getReasonPhrase() != 'OK'){
				throw new \Exception($string);
			}
			
			$returnArr = json_decode($string, true);
			if(!isset($returnArr['status_code']) || $returnArr['status_code'] !== 200){
				throw new \Exception(var_export($returnArr, true));
			}
			
			if(!$this->domain){
				$link = $returnArr['image']['url'];
			}else{
				$link = str_replace($this->siteUrl, $this->domain, $returnArr['image']['url']);
			}
		} catch (Exception $e) {
			//上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
			$link = $e->getMessage();
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage(), 'error_log');
		}
		return $link;
    }
}