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
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;

class UploadSmms extends Common {
    
    const BASE_URI = 'https://sm.ms/api/v2/';
    const DEFAULT_DOMAIN = 'https://i.loli.net';
    
	//代理url
	public $proxy;
	//上传token
	public $token;
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
	    $this->proxy = $ServerConfig['proxy'] ?? '';
	    $this->token = $ServerConfig['token'] ?? '';
	    $this->uploadServer = ucfirst($params['uploadServer']);
	    $this->domain = $ServerConfig['domain'] ?? '';
	    !$this->domain && $this->domain = static::DEFAULT_DOMAIN;
	    
        $this->argv = $params['argv'];
        static::$config = $params['config'];
    }
    
    public function uploadByCurl($uploadFilePath){
        $ch = curl_init();
        $options = [
            CURLOPT_URL => 'https://sm.ms/api/v2/upload',
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Authorization: ' . $this->token,
            ],
            CURLOPT_POSTFIELDS => [
                'smfile' => new \CURLFile($uploadFilePath, mime_content_type($uploadFilePath), substr(basename($uploadFilePath),1)),
            ],
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => 0
        ];
        //if case you need a proxy
        $options[CURLOPT_PROXY] = 'http://127.0.0.1:1087';
        curl_setopt_array($ch, $options);
        $ret = curl_exec($ch);
        if(curl_errno($ch)){
            echo 'Error: ' . curl_error($ch);
        }
        return $ret;
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
				$errMsg = 'Smms只能上传图片，你上传的文件“'.$originFilename .'”不是图片，无法上传！';
				throw new Exception($errMsg);
			}
			
			$GuzzleConfig = [
				'base_uri' => static::BASE_URI,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//实例化GuzzleHttp
			$client = new Client($GuzzleConfig);
			//upload file to https://sm.ms
			$fp = fopen($uploadFilePath, 'r');
			//Smms默认会将原文件名作为上传后的文件名，但这里的"原文件"可能是压缩或添加水印后的文件(有一个
            //句点开头，因为这样表示隐藏文件，所以在这里要手动指定filename，这样就不会直接使用文件名了)
			$filename = strpos($key, '.')===0 ? substr($key, 1) : $key;
            $formData = [
                [
                    'name' => 'smfile',
                    'contents' => $fp,
                    'filename' => $filename,
                ],
            ];
            $response = $client->request('POST', 'upload', [
                'verify' => false,
                'headers'=>[
                    //当token为空时，相当于匿名上传
                    'Authorization' => $this->token,
                ],
                'multipart' => $formData,
            ]);
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
    
    /**
     * Delete image from Imgur
     * @param $hash
     *
     * @return array
     * @throws GuzzleException
     */
    public function deleteImage($hash){
        $GuzzleConfig = [
            'base_uri' => static::BASE_URI,
            'timeout'  => 30.0,
        ];
        if($this->proxy){
            $GuzzleConfig['proxy'] = $this->proxy;
        }
        //实例化GuzzleHttp
        $client = new Client($GuzzleConfig);
        $response = $client->request('GET', 'delete/'.$hash, [
            'verify' => false,
        ]);
        $string = $response->getBody()->getContents();
        if($response->getReasonPhrase() != 'OK'){
            return [
                'code' => -1,
                'message' => '删除接口返回数据：'.$string,
            ];
        }
        
        $returnArr = json_decode($string, true);
        if($returnArr['success'] !== true && $returnArr['message']!='File already deleted.'){
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
}