<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 00:46
 */

namespace uploader;

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class UploadQiniu extends Common {
    //七牛AccessKey
    public $accessKey;
    //七牛AccessSecret
    public $secretKey;
    //七牛存储空间名称
    public $bucket;
    //七牛对外开放域名
    public $domain;
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
	    
        $this->accessKey = $ServerConfig['AK'];
        $this->secretKey = $ServerConfig['SK'];
        $this->bucket = $ServerConfig['bucket'];
        $this->domain = $ServerConfig['domain'];

        $this->argv = $argv;
        static::$config = $config;
    }

    /**
     * 上传文件到七牛云
     * @return string
     * @throws \ImagickException
     */
    public function upload(){
        //$argv 是php作为客户程序使用时默认就有的参数，这个变量会把外部传入的参数接收进来，$argv是一个数组
        //比如 php /Users/xxx/www/index.php aa bb，则$argv的值为数组：['/Users/xxx/www/index.php','aa','bb']
        //去除参数中的第一个元素（因为第一个元素是本文件）
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

            //获取随机文件名
            $newFileName = $this->genRandFileName($filePath);

            //组装key名（因为我们用的是七牛云的OSS:Object Storage Service，即对象存储服务，存储是用key=>value的方式存的）
            $key = date('Y/m/d/') . $newFileName;

            //如果配置了优化宽度，则优化
            $tmpImgPath = '';
            if(isset(static::$config['imgWidth']) && static::$config['imgWidth']){
                $tmpImgPath = $this->optimizeImage($filePath, static::$config['imgWidth']);
            }
            $uploadFilePath = $tmpImgPath ? $tmpImgPath : $filePath;

            //获取七牛token
            $token = $this->getToken();
            // 构建 UploadManager 对象
            $uploadMgr = new UploadManager();
            // 调用 UploadManager 的 putFile 方法进行文件的上传。
            list($ret, $err) = $uploadMgr->putFile($token, $key, $uploadFilePath);
            if ($err !== null) {
                //上传数错，记录错误日志
                $this->writeLog(var_export($err, true)."\n", 'error_log');
            } else {
                //拼接域名和优化参数成为一个可访问的外链
                $publicLink = $this->domain . '/' . $ret['key'];
                $optimize = isset(static::$config['optimize']) ? static::$config['optimize'] : '';
                $optimize && $publicLink .= $optimize;
                //按配置文件指定的格式，格式化链接
                $link .= $this->formatLink($publicLink, $originFilename);
            }
            //删除临时图片
            $tmpImgPath && is_file($tmpImgPath) && @unlink($tmpImgPath);
        }
        return $link;
    }

    /**
     * 获取七牛token
     * @return bool|string
     */
    public function getToken(){
        // 初始化签权对象
        $auth = new Auth($this->accessKey, $this->secretKey);
        //你创建你的七牛云存储空间名称
        $bucket = $this->bucket;
        //token过期时间
        $expires = 7190;
        //如果文件存在，且未过期，且文件里有内容，则使用文件缓存的token
        $tokenDir = __DIR__ . '/token';
        if(!is_dir($tokenDir)){
            @mkdir($tokenDir, 0777, true);
        }
        $tokenFile = __DIR__ . '/token/qiniuToken';
        if(is_file($tokenFile) && ((time() - filemtime($tokenFile)) < $expires) && file_get_contents($tokenFile)!=''){
            $token = file_get_contents($tokenFile);
        }else{
            // 生成上传Token
            $token = $auth->uploadToken($bucket, null, $expires);
            //缓存到文件中
            file_put_contents($tokenFile,$token);
        }
        return $token;
    }
}