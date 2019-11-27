<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 00:46
 */

namespace uploader;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class UploadSmms extends Common {
	//api url
	public $baseUri;
	//代理url
	public $proxy;
	//上传token
	public $token;
	//接口版本
	public $version;
	//域名
	public $domain;
	//默认域名
	public $defaultDomain;
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
	    //baseUri一定要斜杠结尾
	    $this->baseUri = 'https://sm.ms/api/';
	    $this->proxy = $ServerConfig['proxy'] ?? '';
	    $this->token = $ServerConfig['token'] ?? '';
	    $this->version = $ServerConfig['version'] ? strtolower($ServerConfig['version']) : 'v1';
	    $this->uploadServer = ucfirst($params['uploadServer']);
	    $this->defaultDomain = 'https://i.loli.net';
	    $this->domain = $ServerConfig['domain'] ?? '';
	    !$this->domain && $this->domain = $this->defaultDomain;
	    
        $this->argv = $params['argv'];
        static::$config = $params['config'];
    }
	
	/**
	 * Upload files to http://sm.ms
	 * @param $key  由于sm.ms无法自己指定key(主要是没有账号系统怕跟别人重复，所以都是它重命名)，所以key在这里不使用。
	 * @param $uploadFilePath
	 * @param $originFilename
	 *
	 * @return array
	 * @throws GuzzleException
	 * @throws \ImagickException
	 */
	public function upload($key, $uploadFilePath, $originFilename){
		try{
			$fileSize = filesize($uploadFilePath);
			if($fileSize > 5242880){
				$useWatermark = static::$config['watermark']['useWatermark'] ?? 0;
				$fileSizeHuman = (new Common())->getFileSizeHuman($uploadFilePath);
				$errMsg = 'Smms限制最大文件为10M，你上传的文件'.($useWatermark ? '压缩后': '').'为'.$fileSizeHuman."！\n";
				throw new Exception($errMsg);
			}
			if(strpos((new Common())->getMimeType($uploadFilePath), 'image')===false){
				$errMsg = 'Smms只能上传图片，你上传的文件“'.$originFilename.'”不是图片，无法上传！';
				throw new Exception($errMsg);
			}
			
			$GuzzleConfig = [
				'base_uri' => $this->baseUri,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//实例化GuzzleHttp
			$client = new Client($GuzzleConfig);
			//upload file to https://sm.ms
			$fp = fopen($uploadFilePath, 'rb');
			$postData = [
				'curl' => [
					//如果使用了cacert.pem，貌似隔一段时间更新一次，所以还是不使用它了
					//CURLOPT_CAINFO => APP_PATH.'/static/cacert.pem',
					CURLOPT_SSL_VERIFYPEER => false,
					CURLOPT_SSL_VERIFYHOST => false,
				],
				'multipart' => [
					[
						'name'     => 'smfile',
						'contents' => $fp,
					],
				]
			];
			
			//如果是v2接口，则在header中传一个token，接口也加一个v2
			$uri = 'upload';
			if($this->version == 'v2'){
				$uri = 'v2/' . $uri;
				$postData['header'] = [
					'Authorization' => 'Basic '.$this->token,
				];
			}
			
			$response = $client->request('POST', $uri, $postData);
			is_resource($fp) && fclose($fp);
			
			$string = $response->getBody()->getContents();
			
			if($response->getReasonPhrase() != 'OK'){
				throw new Exception($string);
			}
			
			$returnArr = json_decode($string, true);
			
			if($returnArr['code'] == 'success'){
				$data = $returnArr['data'];
				$key = ltrim($data['path'], '/');
				$deleteLink = $data['delete'];
			}else{
				/**
				 //当图片已上传过时，会返回以下结果，由于图片可能是在别人那里传的，所以不能返回删除链接(否则有可能把别人的图删掉)
				   {
						"success": false,
						"code": "exception",
						"message": "Image upload repeated limit, this image exists at: https://i.loli.net/2019/10/30/3BgAobJtkDfNOH2.jpg",
						"RequestId": "A321EA8D-3553-41F5-9F7D-748A97119058"
					}
				 */
				$matches = [];
				if(preg_match('/.*?(https\:\/\/i.loli.net)\/(.*$)/', $returnArr['message'], $matches) && isset($matches[2])){
					$key = $matches[2];
					$deleteLink = '';
				}else{
					throw new Exception($string);
				}
			}
			
			$data = [
				'code' => 0,
				'msg' => 'success',
				'key' => $key,
				'domain' => $this->domain,
				'delLink' => $deleteLink,
			];
			
		}catch (Exception $e){
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