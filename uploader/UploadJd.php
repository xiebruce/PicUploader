<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 15:00
 */

namespace uploader;


use Aws\S3\S3Client;

class UploadJd extends Upload{

    public $accessKey;
    public $secretKey;
    public $endpoint;
    public $bucket;
    public $region;
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
	    
        $this->accessKey = $ServerConfig['key'];
        $this->secretKey = $ServerConfig['secret'];
        $this->endpoint = $ServerConfig['endpoint'];
        $this->bucket = $ServerConfig['bucket'];
        $this->region = $ServerConfig['region'];

        $this->argv = $argv;
        static::$config = $config;
    }

    /**
     * Upload images to Jcloud
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
            $tmpImgPath = '';
            if(isset(static::$config['imgWidth']) && static::$config['imgWidth']){
                $tmpImgPath = $this->optimizeImage($filePath, static::$config['imgWidth']);
            }
            $uploadFilePath = $tmpImgPath ? $tmpImgPath : $filePath;

            //获取随机文件名
            $newFileName = $this->genRandFileName($uploadFilePath);

            //组装key名（因为我们用的是腾讯云的对象存储服务，存储是用key=>value的方式存的）
            $key = date('Y/m/d/') . $newFileName;

            $s3Client = new S3Client([
                'version' => 'latest',
                'region' => $this->region,
                'endpoint' => $this->endpoint,
                'credentials' => [
                    'key' => $this->accessKey,
                    'secret' => $this->secretKey,
                ],
            ]);
            try {
                $retObj = $s3Client->upload($this->bucket, $key, fopen($uploadFilePath, 'r'), 'public');
                if(is_object($retObj)){
                    $publicLink = $retObj->get('ObjectURL');
                    //按配置文件指定的格式，格式化链接
                    $link .= $this->formatLink($publicLink, $originFilename);
                    //删除临时图片
                    $tmpImgPath && is_file($tmpImgPath) && @unlink($tmpImgPath);
                }else{
                    $this->writeLog(var_export($retObj, true)."\n", 'error_log');
                    continue;
                }
            } catch (NosException $e) {
                //上传数错，记录错误日志
                $this->writeLog($e->getMessage()."\n", 'error_log');
                continue;
            }
        }
        return $link;
    }
}