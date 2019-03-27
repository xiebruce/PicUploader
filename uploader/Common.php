<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-08-29
 * Time: 16:27
 */

namespace uploader;

use common\EasyImage;

class Common {

    public static $config;

    public function __construct()
    {
        // construct
    }

    /**
     * Get mime type of the given file
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
            $finfo = finfo_open(FILEINFO_MIME_TYPE); // FILEINFO_MIME_TYPE means return mime type
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
     * Optimize the image
     * @param      $filePath
     * @param      $imgWidth
     * @param null $quality
     *
     * @return string
     * @throws \ImagickException
     */
    public function optimizeImage($filePath, $imgWidth, $quality=null){
        $tmpImgPath = '';
        //We don't optimize gif image for the moment, cause it need extra tools. (e.g. gifsicle)
        if($this->getMimeType($filePath) != 'image/gif'){
            $optimize = false;
            //If Imagic was installed，we use it to get the resolution to decide if we should optimize this image.
            //If the resolution is empty, compare if the source width is larger than dst width.
            //If we don't get the source width, fine, we use the filesize the decide if we should optimise the image.
            if(class_exists('Imagick', false)){
                $imagick = new \Imagick($filePath);
                $imgResolution = $imagick->getImageResolution();
                $originImgWidth = $imagick->getImageWidth();
                if((isset($imgResolution['x']) && $imgResolution['x']>=150)
                    || (isset($imgResolution['y']) && $imgResolution['y']>=150)
                    || ($originImgWidth > $imgWidth)
                    || (filesize($filePath) > 500000))
                {
                    $optimize = true;
                }
            }else if(function_exists('getimagesize')){
                $fileSize = getimagesize($filePath);
                //If width larger than dst width, then optimise it.
                if(isset($fileSize[0]) && $fileSize[0] > $imgWidth){
                    $optimize = true;
                }
                //If filesize is lager than 500k, then optimize it.
            }else if(filesize($filePath) > 500000){
                $optimize = true;
            }

            if($optimize){
                $tmpDir = APP_PATH.'/.tmp';
                if(!is_dir($tmpDir)){
                    @mkdir($tmpDir, 0777 ,true);
                }
                $tmpImgPath = $tmpDir.'/.'.$this->getRandString().'.'.$this->getFileExt($filePath);
                $img = new EasyImage($filePath);
                $imgWidth && $img->fit_to_width($imgWidth);
                $img->save($tmpImgPath, $quality);
            }
        }
        return $tmpImgPath;
    }
	
	/**
	 * Add watermark
	 * @param $filePath
	 *
	 * @return string
	 */
	public function watermark($filePath){
	    $img = new EasyImage();
	    $img->load($filePath);
	    $watermarkConfig = static::$config['watermark'];
	    $type = $watermarkConfig['type'];
	    if($type=='image'){
		    $imageConfig = $watermarkConfig['image'];
	    	$watermark = APP_PATH.'/static/watermark/'.$imageConfig['watermark'];
	        $img->overlay($watermark, $watermarkConfig['position'], $imageConfig['alpha'], $imageConfig['offset']['x'], $imageConfig['offset']['y']);
	    }else if($type=='text'){
		    $textConfig =  $watermarkConfig['text'];
		    $fontPath = APP_PATH . '/static/watermark/'.$textConfig['font'];
		    $img->text($textConfig['word'], $fontPath, $textConfig['fontSize'], $textConfig['color'], $watermarkConfig['position'], $textConfig['offset']['x'], $textConfig['offset']['y'], $textConfig['angle']);
	    }
		
	    //if no tmp file then create one
	    if(strpos($filePath, '.tmp') === false){
		    $tmpDir = APP_PATH.'/.tmp';
		    if(!is_dir($tmpDir)){
			    @mkdir($tmpDir, 0777 ,true);
		    }
		    $tmpImgPath = $tmpDir.'/.'.$this->getRandString().'.'.$this->getFileExt($filePath);
	    }else{
	    	//$filePath is a tmp file
		    $tmpImgPath = $filePath;
	    }
		
		$img->save($tmpImgPath);
		return $tmpImgPath;
    }

    /**
     * 根据文件路径获取原文件名
     * @param $filePath
     *
     * @return mixed
     */
    public function getOriginFileName($filePath){
    	if(strpos($filePath, '\\')){
		    $arr = explode('\\', $filePath);
	    }else{
		    $arr = explode('/', $filePath);
	    }
	    $filename = array_pop($arr);
    	if(strpos($filename, '.')===0){
    		$filename = substr($filename, 1);
	    }
	    return $filename;
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
     * Format the Link
     * @param        $url
     * @param string $filename
     *
     * @return string
     */
    public function formatLink($url, $filename=''){
        switch (static::$config['linkType']){
            case 'markdown':
                $link = '!['.$filename.']('.$url.')';
                break;
            case 'markdownWithLink':
                //image with link
                $img = '!['.$filename.']('.$url.')';
                $link = '['.$img.']('.$url.')';
                break;
	        case 'custom':
	        	$customFormat = static::$config['customFormat'];
		        $link = str_replace('{{url}}', $url, $customFormat);
		        $link = str_replace('{{name}}', $filename, $link);
	        	break;
            case 'normal':
            default:
                $link = $url;
        }
        return $link."\n";
    }

    /**
     * 写入log
     * @param        $content
     * @param string $type
     */
    public function writeLog($content, $type = 'uploaded'){
    	var_dump(static::$config);exit;
        $logPath = isset(static::$config['logPath']) ? str_replace('\\', '/', static::$config['logPath']) : 'default';
	    //日志文件实际存储路径（在本项目目录下的logs目录中）
	    $realLogPath = APP_PATH . '/logs';
        
        //配置指定了日志位置，则创建一个符号链接到指定的位置
        if(is_dir($logPath)){
	        $symbolic = rtrim($logPath, '/') . '/PicUploader_Upload_Logs';
	        !is_link($symbolic) && @symlink($realLogPath, $symbolic);
        }else if($logPath == 'desktop'){
	        $SysUsername = get_current_user();
        	//配置把log指定到桌面，则创建一个符号链接到桌面
	        //Win
	        if(PHP_OS == 'WINNT'){
		        $desktopPath = 'C:/Users/' . $SysUsername . '/Desktop';
	        }else if(PHP_OS == 'Darwin'){
	            //Mac
		        $desktopPath = '/Users/' . $SysUsername . '/Desktop';
	        }else{
	        	//其他Linux，未测试
		        $desktopPath = '/home/' . $SysUsername . '/Desktop';
	        }
	        $symbolic = $desktopPath . '/PicUploader_Upload_Logs';
	        !is_link($symbolic) && @symlink($realLogPath, $symbolic);
        }
        
	    $realLogPath .= '/' . date('Y/m');
	    !is_dir($realLogPath) && @mkdir($realLogPath, 0777, true);
	    
        if($type == 'uploaded'){
            $logFile = $realLogPath.'/'.date('Y-m-d').'-log.md';
            /*
             * 采用把最新上传的图片添加到日志文件的开头的方式，方便查看最新上传的图片
             */
            if(!is_file($logFile)){
                file_put_contents($logFile, $content, FILE_APPEND);
            }else{
                $tmpLogDir = APP_PATH.'/.tmp';
	            !is_dir($tmpLogDir) && @mkdir($tmpLogDir, 0777, true);
	            //读取原来的日志
	            $oldLog = file_get_contents($logFile);
                //新内容直接覆盖写入
                file_put_contents($logFile, $content);
                //再把原来的内容重新追加写入到新日志文件中（这样就实现了最新的日志在最前面，即prepend效果）
                file_put_contents($logFile, $oldLog, FILE_APPEND);
                //删除临时文件
                @unlink($tmpLog);
            }
        }else{
            $logFile = $realLogPath.'/'.date('Y-m-d').'-error-log.txt';
            file_put_contents($logFile, $content, FILE_APPEND);
        }
    }
}