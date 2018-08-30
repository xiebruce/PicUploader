<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-08-29
 * Time: 16:27
 */

namespace PicUploader;

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class Upload {

    //七牛AccessKey
    public $accessKey;
    //七牛AccessSecret
    public $secretKey;
    //七牛存储空间名称
    public $bucket;
    //七牛对外开放域名
    public $domain;
    //临时目录（用于存储优化后的图片，上传后，即会自动删除该图片）
    public $tmpDir;
    //图片质量（取值范围0-1，如0.8，当值为0和1时不优化图片）
    public $imgWidth;
    //七牛优化参数，直接加个图片url后面，但只会优化输出图片，不会优化原图，
    //也就是说原图还是一样占用那么多空间（'?imageMogr2/thumbnail/800x/strip/quality/80'）
    public $optimize;
    //Mac传过来的参数，其实就是图片路径
    public $argv;
    //允许上传的图片
    public $allowMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];

    /**
     * Upload constructor.
     *
     * @param $config
     */
    public function __construct($config, $argv)
    {
        $this->accessKey = $config['Qiniu']['AK'];
        $this->secretKey = $config['Qiniu']['SK'];
        $this->bucket = $config['Qiniu']['bucket'];

        $this->domain = $config['Qiniu']['domain'];
        $this->tmpDir = __DIR__.'/.tmp';
        $this->imgWidth = isset($config['imgWidth']) ? $config['imgWidth'] : 0;
        $this->optimize = isset($config['Qiniu']['optimize']) ? $config['Qiniu']['optimize'] : '';

        $this->argv = $argv;
    }

    /**
     * 上传图片到七牛云并返回链接
     * @param int $mardownLink
     *
     * @return string
     * @throws \Exception
     */
    public function getPublickLink($mardownLink = 1){
        //$argv 是php作为客户程序使用时默认就有的参数，这个变量会把外部传入的参数接收进来，$argv是一个数组
        //比如 php /Users/xxx/www/index.php aa bb，则$argv的值为数组：['/Users/xxx/www/index.php','aa','bb']
        //去除参数中的第一个元素（因为第一个元素是本文件）
        $markDownLink = '';
        foreach($this->argv as $filePath){
            $mimeType = $this->getMimeType($filePath);
            //如果不是允许的图片，则直接跳过（目前允许jpg/png/gif）
            if(!in_array($mimeType, $this->allowMimeTypes)){
                continue;
            }

            //获取图片扩展名
            $pathinfo = pathinfo($filePath);
            $ext = $pathinfo['extension'];
            //生成图片名
            $randStr = $this->getRandString();
            $fileName = $randStr.'.'.$ext;
            //组装key名（因为我们用的是七牛云的OSS:Object Storage Service，即对象存储服务，存储是用key=>value的方式存的）
            $key = date('Y/m/d/') . $fileName;

            //如果配置文件指定优化比率，则按指定的比率优化
            $tmpImgPath = '';
            if($this->imgWidth){
                //优化gif需要安装一些额外的库，暂时不优化
                if($mimeType != 'image/gif'){
                    $optimize = false;
                    //如果安装了Imagic，则使用Imagick判断分辨率是否大于150来来决定是否要优化
                    //如果没有分辨率，判断图片宽度是否大于配置的要优化的宽度
                    //如果宽度也没有，看文件是否大于500k
                    if(class_exists('Imagick', false)){
                        $imagick = new \Imagick($filePath);
                        $imgResolution = $imagick->getImageResolution();
                        $imgWidth = $imagick->getImageWidth();
                        if((isset($imgResolution['x']) && $imgResolution['x']>=150)
                            || (isset($imgResolution['y']) && $imgResolution['y']>=150)
                            || ($imgWidth > $this->imgWidth)
                            || (filesize($filePath) > 500000))
                        {
                            $optimize = true;
                        }
                    }else if(function_exists('getimagesize')){
                        $fileSize = getimagesize($filePath);
                        //如果宽度大于要优化的宽度，则优化
                        if(isset($fileSize[0]) && $fileSize[0] > $this->imgWidth){
                            $optimize = true;
                        }
                        //如果文件大小大于500k，则优化
                    }else if(filesize($filePath) > 500000){
                        $optimize = true;
                    }

                    if($optimize){
                        $tmpImgPath = $this->tmpDir.'/'.$fileName;
                        (new EasyImage())->load($filePath)->fit_to_width($this->imgWidth)->save($tmpImgPath);
                    }
                }
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
                $this->logfile(var_export($err, true), 'error_log');
            } else {
                //组装成markdown格式（后面的参数为七牛优化参数）
                $publicLink = $this->domain . '/' . $ret['key'];
                $this->optimize && $publicLink .= $this->optimize;

                //如果需要输出markdown图片链接格式
                if($mardownLink){
                    $markDownLink .= '![]('.$publicLink.')'."\n";
                }else{
                    $markDownLink .= $publicLink."\n";
                }

                //删除临时图片
                isset($tmpImgPath) && is_file($tmpImgPath) && @unlink($tmpImgPath);
            }
        }
        //记录上传日志
        $datetime = date('Y-m-d H:i:s');
        $content = "picture uploaded at {$datetime} => \n{$markDownLink}\n---\n";
        $this->logfile($content);
        return $markDownLink;
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
        if(!is_file(__DIR__.'/QiniuToken') || (time() - filemtime(__DIR__.'/QiniuToken')) > $expires){
            // 生成上传Token
            $token = $auth->uploadToken($bucket, null, $expires);
            //缓存到文件中
            file_put_contents(__DIR__.'/QiniuToken',$token);
        }else{
            $token = file_get_contents(__DIR__.'/QiniuToken');
        }

        return $token;
    }

    /**
     * 获取随机字符串
     * @return string
     */
    public function getRandString(){
        return md5(uniqid(microtime(true)));
    }

    /**
     * 获取文件mime类型
     * @param $filePath
     *
     * @return bool|mixed|string
     * @throws \ImagickException
     */
    public function getMimeType($filePath)
    {
        $mimetype = false;
        if(class_exists('Imagick', false)){
            // open with Imagick
            $imagick = new \Imagick($filePath);
            $mimetype = $imagick->getImageMimeType();
        }elseif(function_exists('finfo_open')) {
            // open with FileInfo
            $finfo = finfo_open(FILEINFO_MIME_TYPE); // 返回 mime 类型
            $mimetype =  finfo_file($finfo, $filePath);
            finfo_close($finfo);
        } elseif(function_exists('getimagesize')) {
            // open with GD
            $fileInfo = getimagesize($filePath);
            $mimetype = $fileInfo['mime'];
        } elseif(function_exists('exif_imagetype')) {
            // open with EXIF
            $mimeTypeNum = exif_imagetype($filePath);
            $mimeTypes = [1=>'image/gif', 2=>'image/jpeg', 3=>'image/png'];
            $mimetype = $mimeTypes[$mimeTypeNum];
        } elseif(function_exists('mime_content_type')) {
            $mimetype = mime_content_type($filePath);
        }
        return $mimetype;
    }

    /**
     * 写入log
     * @param        $content
     * @param string $type
     */
    public function logfile($content, $type = 'uploaded'){
        $logPath = __DIR__.'/log/'.$type.'/'.date('Y/m');
        if(!is_dir($logPath)){
            mkdir($logPath, 0777, true);
        }
        $logFile = $logPath.'/'.date('Y-m-d').'-log.md';
        if($type == 'uploaded'){
            /*
             * 采用把最新上传的图片添加到日志文件的开头的方式，方便查看最新上传的图片
             */
            if(!is_file($logFile)){
                file_put_contents($logFile, $content, FILE_APPEND);
            }else{
                $tmpLog = __DIR__.'/.tmp/.tmplog';
                //把原来的内容先复制到临时文件里
                copy($logFile, $tmpLog);
                //新内容直接覆盖写入
                file_put_contents($logFile, $content);
                //再把原来的内容重新追加写入到日志文件中
                file_put_contents($logFile, file_get_contents($tmpLog), FILE_APPEND);
                //删除临时文件
                @unlink($tmpLog);
            }
        }else{
            file_put_contents($logFile, $content, FILE_APPEND);
        }
    }
}