<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2020-05-03
 * Time: 15:46
 */

namespace uploader;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class UploadTusu extends Common {
    
    public $host;
    public $bucket;
	//代理url
	public $proxy;
	//上传token
	public $secretKey;
	//域名
	public $domain;
	public $directory;
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
	    $this->host = $ServerConfig['host'] ?? '';
	    $this->bucket = $ServerConfig['bucket'] ?? '';
	    $this->proxy = $ServerConfig['proxy'] ?? '';
	    $this->secretKey = $ServerConfig['secretKey'] ?? '';
	    $this->uploadServer = ucfirst($params['uploadServer']);
	    $this->domain = $ServerConfig['domain'] ?? '';
    
        if(!isset($ServerConfig['directory']) || ($ServerConfig['directory']=='' && $ServerConfig['directory']!==false)){
            //如果没有设置，使用默认的按年/月/日方式使用目录
            $this->directory = date('Y/m/d');
        }else{
            //设置了，则按设置的目录走
            $this->directory = trim($ServerConfig['directory'], '/');
        }
	    
        $this->argv = $params['argv'];
        static::$config = $params['config'];
    }
	
	/**
	 * Upload files to 图速云
	 * @param $key  由于图速云无法自己指定key，所以这里$key用不上
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
				$errMsg = '图速云限制最大文件为4M，你上传的文件'.($useWatermark ? '压缩后': '').'为'.$fileSizeHuman."！\n";
				throw new Exception($errMsg);
			}
			/*if(strpos((new Common())->getMimeType($uploadFilePath), 'image')===false){
				$errMsg = '图速云只能上传图片，你上传的文件“'.$originFilename .'”不是图片，无法上传！';
				throw new Exception($errMsg);
			}*/
			
			$GuzzleConfig = [
				'base_uri' => $this->host,
				'timeout'  => 30.0,
			];
			if($this->proxy){
				$GuzzleConfig['proxy'] = $this->proxy;
			}
			//实例化GuzzleHttp
			$client = new Client($GuzzleConfig);
			//upload file to 图速云
            $response = $client->request('POST', '?a=upload', [
                'verify' => false,
                'multipart' => [
                    [
                        'name' => 'bucket',
                        'contents' => $this->bucket,
                    ],
                    [
                        'name' => 'secret_key',
                        'contents' => $this->secretKey,
                    ],
                    [
                        'name' => 'path',
                        'contents' => '/' . $this->directory,
                    ],
                    [
                        'name' => 'file',
                        'contents' => fopen($uploadFilePath, 'r'),
                        'filename' => $originFilename,
                    ],
                ],
            ]);
		
			$string = $response->getBody()->getContents();
			if($response->getReasonPhrase() != 'OK'){
				throw new Exception($string);
			}
			
			$returnArr = json_decode($string, true);
			if($returnArr['code'] != 0){
                //上传数错，抛出异常
                throw new Exception(var_export($returnArr, true));
			}
            $path = $returnArr['data']['path'];
			$firstSlashPos = strpos($path, '/');
			!$this->domain && $this->domain = substr($path, 0, $firstSlashPos);
			$key = substr($path, $firstSlashPos + 1);
			
			$data = [
				'code' => 0,
				'msg' => 'success',
				'key' => $key,
				'domain' => $this->domain,
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