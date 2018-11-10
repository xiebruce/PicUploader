<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 21:01
 */


namespace uploader;


use GuzzleHttp\Client;

class UploadImgur extends Upload{
    public $serverConfig;
    public $serviceName;
    //操作员名称
    public $operator;
    //操作员密码
    public $password;
    //域名
    public $domain;
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
	    $this->serverConfig = $config['storageTypes'][strtolower(substr($className,6))];
	    
        /*$this->serviceName = $ServerConfig['serviceName'];
        $this->operator = $ServerConfig['operator'];
        $this->password = $ServerConfig['password'];
        $this->domain = $ServerConfig['domain'];*/

        $this->argv = $argv;
        static::$config = $config;
    }
	
	/**
	 * Upload images to Imgur
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \ImagickException
	 */
	public function upload(){
	    $link = [];
	    $GuzzleConfig = [
		    'base_uri' => $this->serverConfig['baseUrl'],
		    'timeout'  => 10.0,
	    ];
	    if(isset($this->serverConfig['proxy']) && $this->serverConfig['proxy']){
		    $GuzzleConfig['proxy'] = $this->serverConfig['proxy'];
	    }
	    //实例化GuzzleHttp
	    $client = new Client($GuzzleConfig);
	    
	    //循环上传
        foreach($this->argv as $filePath){
            $mimeType = $this->getMimeType($filePath);
            $originFilename = $this->getOriginFileName($filePath);
            //如果不是允许的图片，则直接跳过（目前允许jpg/png/gif）
            if(!in_array($mimeType, static::$config['allowMimeTypes'])){
                $error = 'Only MIME in "'.join(', ', static::$config['allowMimeTypes']).'" is allow to upload, but the MIME of this photo "'.$originFilename.'" is '.$mimeType."\n";
                $this->writeLog($error, 'error_log');
                continue;
            }
	
	        //如果配置了优化宽度，则优化
	        $uploadFilePath = $filePath;
	        $tmpImgPath = '';
	        if(isset(static::$config['imgWidth']) && static::$config['imgWidth'] > 0){
		        $tmpImgPath = $this->optimizeImage($filePath, static::$config['imgWidth']);
		        $uploadFilePath = $tmpImgPath ? $tmpImgPath : $filePath;
	        }

	        //添加水印
	        if(isset(static::$config['watermark']['useWatermark']) && static::$config['watermark']['useWatermark']==1 && $this->getMimeType($filePath) != 'image/gif'){
		        $tmpImgPath = $uploadFilePath = $this->watermark($filePath);
	        }
	
	        $fileSize = filesize($uploadFilePath);
	        if($fileSize > 10000000){
		        $imgWidth = isset(static::$config['imgWidth']) && static::$config['imgWidth'] ? static::$config['imgWidth'] : 0;
		        if($imgWidth){
			        $error = 'Due to https://sm.ms restriction, you can\'t upload photos lager than 5M, this photo is '.($fileSize/1000000).'M after compress.'."\n";
		        }else{
			        $error = "Due to https://sm.ms restriction, you can't upload photos lager than 5M, and you didn't set the compress option at the config file.\n";
		        }
		
		        $this->writeLog($error, 'error_log');
		        continue;
	        }
	
	        //获取随机文件名
	        $newFileName = $this->genRandFileName($uploadFilePath);
	        
            try {
	        	//上传
	            $response = $client->request('POST', 'image', [
	            	'headers'=>[
	            	    'Authorization' => 'Client-ID '.$this->serverConfig['clientId'],
		            ],
		            'multipart' => [
			            [
				            'name' => 'image',
				            'contents' => fopen($uploadFilePath, 'r'),
			            ],
			            [
			                'name' => 'type',
			                'contents' => 'file',
			            ],
			            [
			            	'name' => 'name',
			            	'contents' => $newFileName,
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
	
	            $string = $response->getBody()->getContents();
	            if($response->getReasonPhrase() != 'OK'){
		            //上传数错，记录错误日志
		            $this->writeLog($string, 'error_log');
		            continue;
	            }
	
	            $returnArr = json_decode($string, true);
	            if($returnArr['success'] === true){
		            $data = $returnArr['data'];
		            $deleteLink = 'Delete Hash: '.$data['deletehash'];
		            $link = [
			            'link' => $this->formatLink($data['link'], $originFilename),
			            'delLink' => $deleteLink
		            ];
	            }
	            // Delete the tmp file
	            $tmpImgPath && is_file($tmpImgPath) && @unlink($tmpImgPath);
            } catch (NosException $e) {
                //上传数错，记录错误日志
                $this->writeLog($e->getMessage()."\n", 'error_log');
                continue;
            }
        }
        return $link;
    }
}