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
	//默认域名
	public $defaultDomain;
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
	    $this->defaultDomain = $this->siteUrl;
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
				'curl' => [
					//如果使用了cacert.pem，貌似隔一段时间更新一次，所以还是不使用它了
					//CURLOPT_CAINFO => APP_PATH.'/static/cacert.pem',
					CURLOPT_SSL_VERIFYPEER => false,
					CURLOPT_SSL_VERIFYHOST => false,
				],
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
				throw new Exception($string);
			}
			
			$returnArr = json_decode($string, true);
			if(!isset($returnArr['status_code']) || $returnArr['status_code'] !== 200){
				throw new Exception(var_export($returnArr, true));
			}
			
			$link = $returnArr['image']['url'];
			//删除domain，只剩key部分(因为需要统一决定是使用这个域名还是使用反向代理域名)
			$key = str_replace($this->defaultDomain . '/', '', $link);
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