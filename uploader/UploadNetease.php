<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 15:00
 */

namespace uploader;

use NOS\NosClient;

class UploadNetease extends Upload{

    public $accessKey;
    public $secretKey;
    public $bucket;
    //即domain，域名
    public $endPoint;
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
	    
        $this->accessKey = $ServerConfig['accessKey'];
        $this->secretKey = $ServerConfig['accessSecret'];
        $this->bucket = $ServerConfig['bucket'];
        //endPoint不是域名，外链域名是 bucket.'.'.endPoint
        $this->endPoint = $ServerConfig['endPoint'];

        $this->argv = $argv;
        static::$config = $config;
    }

    /**
     * Upload images to Netease Cloud
     * @return string
     * @throws \ImagickException
     * @throws \NOS\Core\NosException
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

            $nosClient = new NosClient($this->accessKey, $this->secretKey, $this->endPoint);

            //获取随机文件名
            $newFileName = $this->genRandFileName($uploadFilePath);

            //组装key名（因为我们用的是腾讯云的对象存储服务，存储是用key=>value的方式存的）
            $key = date('Y/m/d/') . $newFileName;

            try {
                $options[NosClient::NOS_HEADERS]['Cache-Control'] = 'max-age=31536000';
                $options[NosClient::NOS_HEADERS]['Content-Disposition'] = 'attachment; filename="'.$newFileName.'"';
                $nosClient->uploadFile($this->bucket, $key, $uploadFilePath, $options);
                $publicLink = 'http://'.$this->bucket.'.'.$this->endPoint.'/'.$key;
                //按配置文件指定的格式，格式化链接
                $link .= $this->formatLink($publicLink, $originFilename);
                //删除临时图片
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