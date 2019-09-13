<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 21:01
 */

namespace uploader;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class UploadImgur extends Upload{
    //Imgur的clientId，相当于在上面创建的一个应用的识别码
    public $clientId;
    //api url
    public $baseUri;
    //代理url
    public $proxy;
	//域名
	public $domain;
	//默认域名
	public $defaultDomain;
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
	    
	    $this->clientId = $ServerConfig['clientId'];
	    $this->baseUri = 'https://api.imgur.com/3/';
	    $this->proxy = $ServerConfig['proxy'] ?? '';
	    $this->domain = $ServerConfig['domain'] ?? '';
	    $this->uploadServer = ucfirst($params['uploadServer']);
	    $this->defaultDomain = 'https://i.imgur.com';
	    !$this->domain && $this->domain = $this->defaultDomain;
        $this->argv = $params['argv'];
        static::$config = $params['config'];
    }
	
	/**
	 * Upload files to Imgur.com
	 * @param $key 自定义文件名(变量名用$key是因为对象存储是key=>value形式的，所以所谓文件名，其实真正的叫法是key，就像redis的key对应value一样，value自然就是图片的base64码了)，由于这里使用Imgur并没有使用access_token的方式上传(Imgur只提供网页版access_token)，所以相当于没有账号系统，相当于匿名上传，无法自定义上传文件名，所以这个$key并没有用到
	 * @param $uploadFilePath
	 * @param $originFilename
	 *
	 * @return array
	 * @throws GuzzleException
	 * @throws \ImagickException
	 */
	public function upload($key, $uploadFilePath, $originFilename){
		try {
			$fileSize = filesize($uploadFilePath);
			if($fileSize > 10485760){
				$useWatermark = static::$config['watermark']['useWatermark'] ?? 0;
				$fileSizeHuman = (new Common())->getFileSizeHuman($uploadFilePath);
				$errMsg = 'Imgur限制最大文件为10M，你上传的文件'.($useWatermark ? '压缩后': '').'为'.$fileSizeHuman."！\n";
				throw new Exception($errMsg);
			}
			if(strpos((new Common())->getMimeType($uploadFilePath), 'image')===false){
				$errMsg = 'Imgur只能上传图片，你上传的文件“'.$originFilename.'”不是图片，无法上传！';
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
			
			//上传
			$fp = fopen($uploadFilePath, 'rb');
			$response = $client->request('POST', 'image', [
				'curl' => [
					//如果使用了cacert.pem，貌似隔一段时间更新一次，所以还是不使用它了
					//CURLOPT_CAINFO => APP_PATH.'/static/cacert.pem',
					CURLOPT_SSL_VERIFYPEER => false,
					CURLOPT_SSL_VERIFYHOST => false,
				],
				'headers'=>[
					'Authorization' => 'Client-ID '.$this->clientId,
				],
				'multipart' => [
					[
						'name' => 'image',
						'contents' => $fp,
					],
					[
						'name' => 'type',
						'contents' => 'file',
					],
					[
						'name' => 'name',
						'contents' => $originFilename,
					],
					[
						'name' => 'title',
						'contents' => $originFilename,
					],
					[
						'name' => 'description',
						'contents' => $originFilename,
					],
				]
			]);
			is_resource($fp) && fclose($fp);
			
			$string = $response->getBody()->getContents();
			
			if($response->getReasonPhrase() != 'OK'){
				throw new Exception('上传接口返回的数据：' . $string);
			}
			
			$returnArr = json_decode($string, true);
			if($returnArr['success'] !== true){
				throw new Exception('json_decode后的数据'.var_export($returnArr, true));
			}
			
			$data = $returnArr['data'];
			// 图片链接，但这里不用，而是自己拼接
			$link = $data['link'];
			$deleteLink = $data['deletehash'];
			
			$key = str_replace($this->defaultDomain . '/', '', $link);
			
			$data = [
				'code' => 0,
				'msg' => 'success',
				'key' => $key,
				'domain' => $this->domain,
				'delHash' => $deleteLink,
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
	
	/**
	 * Delete image from Imgur
	 * @param $hash
	 *
	 * @return array
	 * @throws GuzzleException
	 */
	public function deleteImage($hash){
	    $GuzzleConfig = [
		    'base_uri' => $this->baseUri,
		    'timeout'  => 30.0,
	    ];
	    if($this->proxy){
		    $GuzzleConfig['proxy'] = $this->proxy;
	    }
	    //实例化GuzzleHttp
	    $client = new Client($GuzzleConfig);
	
	    //上传
	    $response = $client->request('DELETE', 'image/'.$hash, [
		    'headers'=>[
			    'Authorization' => 'Client-ID '.$this->clientId,
		    ],
	    ]);
	
	    $string = $response->getBody()->getContents();
	
	    if($response->getReasonPhrase() != 'OK'){
		    return [
			    'code' => -1,
			    'message' => '删除接口返回数据：'.$string,
		    ];
	    }
	
	    $returnArr = json_decode($string, true);
	    if($returnArr['success'] !== true){
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