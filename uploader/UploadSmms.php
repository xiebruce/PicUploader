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
    //config from config.php, using static because the parent class needs to use it.
    public static $config;
    //arguments from php client, the image absolute path
    public $argv;
    //云服务器配置
    public $serverConfig;

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
        $this->serverConfig = $config['storageTypes'][strtolower(substr($className,6))];;
        $this->argv = $argv;
        static::$config = $config;
    }
	
	/**
	 * Upload image to http://sm.ms
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
		        $quality = $mimeType=='image/png' ? static::$config['compreLevel'] : static::$config['quality'];
		        $tmpImgPath = $this->optimizeImage($filePath, static::$config['imgWidth'], $quality);
		        $uploadFilePath = $tmpImgPath ? $tmpImgPath : $filePath;
	        }
	
	        //添加水印
	        if(isset(static::$config['watermark']['useWatermark']) && static::$config['watermark']['useWatermark']==1 && $this->getMimeType($filePath) != 'image/gif'){
		        $tmpImgPath = $uploadFilePath = $this->watermark($uploadFilePath);
	        }

            $fileSize = filesize($uploadFilePath);
            if($fileSize > 5000000){
	            $imgWidth = isset(static::$config['imgWidth']) && static::$config['imgWidth'] ? static::$config['imgWidth'] : 0;
                if($imgWidth){
                    $error = 'Due to https://sm.ms restriction, you can\'t upload photos lager than 5M, this photo is '.($fileSize/1000000).'M after compress.'."\n";
                }else{
                    $error = "Due to https://sm.ms restriction, you can't upload photos lager than 5M, and you didn't set the compress option at the config file.\n";
                }

                $this->writeLog($error, 'error_log');
                continue;
            }
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
                //上传数错，记录错误日志
                $this->writeLog($string, 'error_log');
                continue;
            }

            $returnArr = json_decode($string, true);
            if($returnArr['code'] == 'success'){
                $data = $returnArr['data'];
                $deleteLink = 'Delete Link: '.$data['delete'];
                // $link .= $this->formatLink($data['url'], $originFilename);
	            $link = [
	            	'link' => $this->formatLink($data['url'], $originFilename),
		            'delLink' => $deleteLink
	            ];
            }
            // Delete the tmp file
            $tmpImgPath && is_file($tmpImgPath) && @unlink($tmpImgPath);
        }
        return $link;
    }
}