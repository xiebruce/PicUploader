<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-08-29
 * Time: 16:27
 */

namespace PicUploader;

use GuzzleHttp\Client;
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
    //图片mime类型
    public $mimeType;
    //链接类型（normal / markdown / markdownWithLink）
    public $linkType;
    //存储类型（Qiniu / sm.sm）
    public $storageType;
    public $smmsBaseUrl;

    /**
     * Upload constructor.
     *
     * @param $config
     * @param $argv
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
        $this->linkType = isset($config['linkType']) ? $config['linkType'] : 'normal';
        $this->storageType = isset($config['storageType']) ? $config['storageType'] : 'sm.ms';
        $this->smmsBaseUrl = $config['sm.ms']['baseUrl'];

        //去除第一个元素（因为第一个元素是index.php，因为$argv是linux/mac的参数，
        //用php执行index.php的时候，index.php也算是一个参数）
        array_shift($argv);
        $this->argv = $argv;
    }

    /**
     * 获取公共链接
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ImagickException
     */
    public function getPublickLink(){
        switch($this->storageType){
            case 'Qiniu':
                $link = $this->uploadToQiniu();
                break;
            case 'sm.ms':
            default:
                $link = $this->uploadToSmms();
        }

        //记录上传日志
        $datetime = date('Y-m-d H:i:s');
        $content = "Picture uploaded to {$this->storageType} at {$datetime} => \n{$link}\n---\n";
        $this->writeLog($content);
        return $link;
    }

    /**
     * 上传文件到七牛云
     * @return string
     * @throws \ImagickException
     */
    public function uploadToQiniu(){
        $fileCount = count($this->argv);
        if($fileCount > 5){
            $error = "Sorry, it's too slow if you upload more than 5 photos at a time, {$fileCount} were selected!\n";
            $this->writeLog($error, 'error_log');
            echo $error;
            exit;
        }
        //$argv 是php作为客户程序使用时默认就有的参数，这个变量会把外部传入的参数接收进来，$argv是一个数组
        //比如 php /Users/xxx/www/index.php aa bb，则$argv的值为数组：['/Users/xxx/www/index.php','aa','bb']
        //去除参数中的第一个元素（因为第一个元素是本文件）
        $link = '';
        foreach($this->argv as $filePath){
            $this->mimeType = $this->getMimeType($filePath);
            $originFilename = $this->getOriginFileName($filePath);
            //如果不是允许的图片，则直接跳过（目前允许jpg/png/gif）
            if(!in_array($this->mimeType, $this->allowMimeTypes)){
                $error = 'Only MIME in "'.join(', ', $this->allowMimeTypes).'" is allow to upload, but the MIME of this photo "'.$originFilename.'" is '.$this->mimeType."\n";
                $this->writeLog($error, 'error_log');
                continue;
            }

            //获取随机文件名
            $newFileName = $this->genRandFileName($filePath);

            //组装key名（因为我们用的是七牛云的OSS:Object Storage Service，即对象存储服务，存储是用key=>value的方式存的）
            $key = date('Y/m/d/') . $newFileName;

            //如果配置了优化宽度，则优化
            $tmpImgPath = '';
            if($this->imgWidth){
                $tmpImgPath = $this->optimizeImage($filePath);
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
                $this->optimize && $publicLink .= $this->optimize;
                //按配置文件指定的格式，格式化链接
                $link .= $this->formatLink($publicLink, $originFilename);
            }
            //删除临时图片
            $tmpImgPath && is_file($tmpImgPath) && @unlink($tmpImgPath);
        }
        return $link;
    }

    /**
     * 上传图片到: http://sm.ms
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ImagickException
     */
    public function uploadToSmms(){
        $fileCount = count($this->argv);
        if($fileCount > 5){
            $error = "Sorry, due to https://sm.ms restriction, you can only upload 5 photos at a time, {$fileCount} were selected!\n";
            $this->writeLog($error, 'error_log');
            echo $error;
            exit;
        }

        try{
            $link = '';
            $client = new Client([
                'base_uri' => $this->smmsBaseUrl,
                'timeout'  => 10.0,
            ]);
            foreach($this->argv as $filePath){
                $this->mimeType = $this->getMimeType($filePath);
                $originFilename = $this->getOriginFileName($filePath);
                //如果不是允许的图片，则直接跳过（目前允许jpg/png/gif）
                if(!in_array($this->mimeType, $this->allowMimeTypes)){
                    $error = 'Only MIME in "'.join(', ', $this->allowMimeTypes).'" is allow to upload, but the MIME of this photo "'.$originFilename.'" is '.$this->mimeType."\n";
                    $this->writeLog($error, 'error_log');
                    continue;
                }

                //如果配置了优化宽度，则优化
                $tmpImgPath = '';
                if($this->imgWidth){
                    $tmpImgPath = $this->optimizeImage($filePath);
                }
                $uploadFilePath = $tmpImgPath ? $tmpImgPath : $filePath;
                $originFileName = $this->getOriginFileName($filePath);

                $fileSize = filesize($uploadFilePath);
                if($fileSize > 5000000){
                    if($this->imgWidth){
                        $error = 'Due to https://sm.ms restriction, you can\'t upload photos lager than 5M, this photo is '.($fileSize/1000000).'M after compress.'."\n";
                    }else{
                        $error = "Due to https://sm.ms restriction, you can't upload photos lager than 5M, and you didn't set the compress option at the config file.\n";
                    }

                    $this->writeLog($error, 'error_log');
                    continue;
                }
                //upload?ssl=1
                //上传到https://sm.ms
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
                    $link .= $this->formatLink($data['url'], $originFileName);
                    $link .= $deleteLink . "\n\n";
                }
                //删除临时图片
                // $tmpImgPath && is_file($tmpImgPath) && @unlink($tmpImgPath);
            }
            return $link;
        }catch (\ErrorException $exception){
            echo 234234;exit;
            var_dump($exception);exit;
            $this->writeLog($error, 'error_log');
        }
    }

    /**
     * 格式化链接
     * @param        $url
     * @param string $filename
     *
     * @return string
     */
    public function formatLink($url, $filename=''){
        //如果需要输出markdown图片链接格式
        switch ($this->linkType){
            case 'markdown':
                $link = '!['.$filename.']('.$url.')'."\n";
                break;
            case 'markdownWithLink':
                //带链接的图片
                $img = '!['.$filename.']('.$url.')';
                $link = '['.$img.']('.$url.')'."\n";
                break;
            case 'normal':
            default:
                $link = $url."\n";
        }
        return $link;
    }

    /**
     * 优化图片
     * @param $filePath
     *
     * @return string
     * @throws \ImagickException
     */
    public function optimizeImage($filePath){
        $tmpImgPath = '';
        //优化gif需要安装一些额外的库，暂时不优化
        if($this->mimeType != 'image/gif'){
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
                $tmpImgPath = $this->tmpDir.'/.'.$this->getRandString().'.'.$this->getFileExt($filePath);
                (new EasyImage())->load($filePath)->fit_to_width($this->imgWidth)->save($tmpImgPath);
            }
        }
        return $tmpImgPath;
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
        if(is_file(__DIR__.'/QiniuToken') && ((time() - filemtime(__DIR__.'/QiniuToken')) < $expires) && file_get_contents(__DIR__.'/QiniuToken')!=''){
            $token = file_get_contents(__DIR__.'/QiniuToken');
        }else{
            // 生成上传Token
            $token = $auth->uploadToken($bucket, null, $expires);
            //缓存到文件中
            file_put_contents(__DIR__.'/QiniuToken',$token);
        }
        return $token;
    }

    /**
     * 根据文件路径获取原文件名
     * @param $filePath
     *
     * @return mixed
     */
    public function getOriginFileName($filePath){
        $arr = explode('/', $filePath);
        return array_pop($arr);
    }

    /**
     * 获取文件扩展名
     * @param $filePath
     *
     * @return mixed
     */
    public function getFileExt($filePath){
        //获取图片扩展名
        $pathinfo = pathinfo($filePath);
        return $pathinfo['extension'];
    }

    /**
     * 生成随机文件名
     * @param $filePath
     *
     * @return string
     */
    public function genRandFileName($filePath){
        $ext = $this->getFileExt($filePath);
        //生成图片名
        $randStr = $this->getRandString();
        return $randStr.'.'.$ext;
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
    public function writeLog($content, $type = 'uploaded'){
        $logPath = __DIR__.'/log/'.$type.'/'.date('Y/m');
        if(!is_dir($logPath)){
            mkdir($logPath, 0777, true);
        }
        if($type == 'uploaded'){
            $logFile = $logPath.'/'.date('Y-m-d').'-log.md';
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
            $logFile = $logPath.'/'.date('Y-m-d').'-log.txt';
            file_put_contents($logFile, $content, FILE_APPEND);
        }
    }
}