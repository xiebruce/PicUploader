<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 00:46
 */

namespace uploader;

use Qcloud\Cos\Client;

class UploadTencent extends Common {
    public $region;
    public $secretId;
    public $secretKey;
    public $bucket;
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
	    
        $this->region = $ServerConfig['region'];
        $this->secretId = $ServerConfig['secretId'];
        $this->secretKey = $ServerConfig['secretKey'];
        $this->bucket = $ServerConfig['bucket'];

        $this->argv = $argv;
        static::$config = $config;
    }

    /**
     * Upload Images to Tecent Cloud
     * @return string
     * @throws \ImagickException
     */
    public function upload(){

        $link = '';
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
	        if(isset(static::$config['watermark']['useWatermark']) && static::$config['watermark']['useWatermark']==1){
		        $tmpImgPath = $uploadFilePath = $this->watermark($filePath);
	        }

            $cosClient = new Client([
                'region' => $this->region,
                'credentials' => [
                    'secretId' => $this->secretId,
                    'secretKey' => $this->secretKey,
                ],
            ]);

            //获取随机文件名
            $newFileName = $this->genRandFileName($uploadFilePath);

            //组装key名（因为我们用的是腾讯云的对象存储服务，存储是用key=>value的方式存的）
            $key = date('Y/m/d/') . $newFileName;

            $retObj = $cosClient->Upload($this->bucket, $key, fopen($uploadFilePath, 'rb'));
            if (!is_object($retObj) || !$retObj->get('Location')) {
                //上传数错，记录错误日志
                $this->writeLog(var_export($retObj, true)."\n", 'error_log');
            } else {
                //拼接域名和优化参数成为一个可访问的外链
                $publicLink = $retObj->get('Location');
                //按配置文件指定的格式，格式化链接
                $link .= $this->formatLink($publicLink, $originFilename);
            }

            //删除临时图片
            $tmpImgPath && is_file($tmpImgPath) && @unlink($tmpImgPath);
        }
        return $link;
    }

}