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
        //fileinfo可以获取任何文件的类型，不止图片
        if(function_exists('finfo_open')){
	        // open with FileInfo
	        $finfo = finfo_open(FILEINFO_MIME_TYPE); // FILEINFO_MIME_TYPE means return mime type
	        $mimetype =  finfo_file($finfo, $filePath);
	        finfo_close($finfo);
        }elseif(class_exists('Imagick', false)) {
	        // open with Imagick
	        $imagick = new \Imagick($filePath);
	        $mimetype = $imagick->getImageMimeType();
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
     * @param      $resizeOptions
     * @param null $quality
     *
     * @return string
     * @throws \ImagickException
     */
    public function optimizeImage($filePath, $resizeOptions, $quality=null){
        //We don't optimize gif image for the moment, cause it need extra tools. (e.g. gifsicle)
	    $mime = $this->getMimeType($filePath);
	    if(!preg_match('/image\/(jpeg|png|bmp|webp)/', $mime)){
	    	return false;
	    }
	
	    $optimize = false;
	    //图片宽高
	    $imageSize = getimagesize($filePath);
	    //图片宽度
	    $width = $imageSize[0] ?? 0;
	    //图片调试
	    $height = $imageSize[1] ?? 0;
	    //图片文件大小
	    $fileSize = filesize($filePath);
	    $percentage = (int)$resizeOptions['percentage'] / 100;
	    $widthGreaterThan = (int)$resizeOptions['widthGreaterThan'];
	    $heightGreaterThan = (int)$resizeOptions['heightGreaterThan'];
	    $carry = PHP_OS == 'Darwin' ? 1000 : 1024;
	    $sizeBiggerThan = (int)$resizeOptions['sizeBiggerThan'] * $carry;
	
	    if($width > $widthGreaterThan || $height > $heightGreaterThan || $fileSize > $sizeBiggerThan){
		    $optimize = true;
	    }
	
	    //$filePath is a tmp file
	    $tmpImgPath = $filePath;
	    if(strpos($filePath, '.tmp') === false){
		    $tmpDir = APP_PATH.'/.tmp';
		    !is_dir($tmpDir) && @mkdir($tmpDir, 0777 ,true);
		    $tmpImgPath = $tmpDir . '/.' . $this->getRandString() . '.' . $this->getFileExt($filePath);
	    }
	    
	    if($optimize){
		    //if no tmp file then create one
		    $img = new EasyImage($filePath);
		    if($width > $height){
			    $img->fit_to_width($width * $percentage);
		    }else if($height > $width){
			    $img->fit_to_height($height * $percentage);
		    }
		    $img->save($tmpImgPath, $quality);
	    }
	    
        return $tmpImgPath;
    }
	
	/**
	 * Add watermark
	 * @param $filePath
	 * @param $quality
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function watermark($filePath, $quality){
	    $img = new EasyImage($filePath);
	    $watermarkConfig = static::$config['watermark'];
	    $type = $watermarkConfig['type'];
		
		if($type=='image'){
		    $imageConfig = $watermarkConfig['image'];
		    if(strpos($imageConfig['fontFile'], '/')!==false){
			    $watermark = APP_PATH.$imageConfig['fontFile'];
		    }else{
			    $watermark = APP_PATH.'/static/watermark/'.$imageConfig['watermark'];
		    }
	        $img->overlay($watermark, $watermarkConfig['image']['position'], $imageConfig['alpha'], $imageConfig['offset']['x'], $imageConfig['offset']['y']);
	    }else if($type=='text'){
		    $textConfig =  $watermarkConfig['text'];
		    $matches = [];
		    preg_match("/rgba\((.*)\)/", $textConfig['color'], $matches);
		    if(isset($matches[1])){
			    $rgba = explode(',', $matches[1]);
			    $color = [
				    'r'=>$rgba[0] ?? '255',
				    'g'=>$rgba[1] ?? '0',
				    'b'=>$rgba[2] ?? 0,
				    'a'=>(int)((1-($rgba[3] ?? 0.15)) * 100),
			    ];
		    }else{
			    $color = $textConfig['color'];
		    }
		
		    if(strpos($textConfig['fontFile'], '/')!==false){
			    $fontPath = APP_PATH.$textConfig['fontFile'];
		    }else{
			    $fontPath = APP_PATH.'/static/watermark/'.$textConfig['fontFile'];
		    }
			
			$img->text($textConfig['words'], $fontPath, $textConfig['fontSize'], $color, $watermarkConfig['text']['position'], $textConfig['offset']['x'], $textConfig['offset']['y'], $textConfig['angle']);
	    }
		
		//if no tmp file then create one
	    if(strpos($filePath, '.tmp') === false){
		    $tmpDir = APP_PATH.'/.tmp';
		    !is_dir($tmpDir) && @mkdir($tmpDir, 0777 ,true);
		    $tmpImgPath = $tmpDir.'/.'.$this->getRandString().'.'.$this->getFileExt($filePath);
	    }else{
	    	//$filePath is a tmp file
		    $tmpImgPath = $filePath;
	    }
		
		$img->save($tmpImgPath, $quality);
	    // exit('watermark saved');
		return $tmpImgPath;
    }

    /**
     * 根据文件路径获取原文件名
     * @param $filePath
     *
     * @return mixed
     */
    public function getOriginFileName($filePath){
    	// windows
    	if(strpos($filePath, '\\')){
		    $arr = explode('\\', $filePath);
	    }else{ //macOS / Linux
		    $arr = explode('/', $filePath);
	    }
	    $filename = array_pop($arr);
    	// 如果是点开头的文件名，则把点去掉
    	if(strpos($filename, '.')===0){
    		$filename = substr($filename, 1);
	    }
    	$fileExt = $this->getFileExt($filePath);
	    return str_replace('.'.$fileExt, '', $filename);
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
        return isset($pathinfo['extension']) ? strtolower($pathinfo['extension']) : '';
    }

    /**
     * 生成随机文件名
     * @param $filePath
     *
     * @return string
     */
    public function genRandFileName($filePath){
        //生成图片名
        $randStr = $this->getRandString();
        return $randStr;
    }

    /**
     * 获取唯一的随机字符串，固定32位长度
     * @return string
     */
    public function getRandString(){
        return md5(uniqid(microtime(true)));
    }
	
	/**
	 * 获取指定长度的随机字符串，字符串中包含数字及大小写字母
	 * @param int $length
	 *
	 * @return bool|string
	 */
	public function getRandomString($length = 16) {
		$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
	}
	
	/**
	 * 根据不同系统返回对应的人性化显示的文件大小（带单位）
	 * @param $file
	 *
	 * @return int|string
	 */
	public function getFileSizeHuman($file){
	    $filesize = 0;
    	if(is_file($file)){
		    $filesize = filesize($file);
	    }else if(is_numeric($file)){
    		$filesize = $file;
	    }
    	//Mac系统显示文件大小是按1000进位的(与硬盘相同)
	    $carry = PHP_OS=='Darwin' ? 1000 : 1024;
	    $carry3 = pow($carry, 3);
	    $carry2 = pow($carry, 2);
	    $carry1 = $carry;
    	if($filesize >= $carry3){
		    $filesize = (string)round($filesize / $carry3, 2) . 'GB';
	    }else if($filesize >= $carry2){
		    $filesize = (string)round($filesize / $carry2, 2) . 'MB';
	    }else if($filesize >= $carry1){
    		$filesize = (string)round($filesize / $carry1, 2) . 'KB';
	    }else{
    		$filesize = (string)round($filesize, 2) . 'B';
	    }
    	return $filesize;
    }

    /**
     * Format the Link
     * @param        $url
     * @param string $filename
     *
     * @return string
     */
    public function formatLink($url, $filename='', $mime){
    	//非图片
    	if(strpos($mime, 'image')===false){
    	    switch($mime){
		        case 'video/mp4':
			        // $link = '<video controls name="media" title="'.$filename.'" width="935">><source src="'.$url.'" type="video/mp4"></video>';
			        $link = strtr(static::$config['videoFormat'], ['{{url}}'=>$url, '{{name}}'=>$filename]);
			        break;
		        case 'audio/mpeg':
			        // $link = '<audio src="'.$url.'" title="'.$filename.'">';
			        $link = strtr(static::$config['audioFormat'], ['{{url}}'=>$url, '{{name}}'=>$filename]);
		        	break;
		        default:
			        $link = '['.$filename.']('.$url.')';
	        }
	    }else{
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
				    $link = strtr(static::$config['customFormat'], ['{{url}}'=>$url, '{{name}}'=>$filename]);
				    break;
			    case 'normal':
			    default:
				    $link = $url;
		    }
	    }
        return $link;
    }

    /**
     * 写入log
     * @param        $content
     * @param string $type
     */
    public function writeLog($content, $type = 'uploaded'){
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
	        if(@is_dir($desktopPath)){
		        $symbolic = $desktopPath . '/PicUploader_Upload_Logs';
		        !is_link($symbolic) && @symlink($realLogPath, $symbolic);
	        }
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
            }
        }else{
            $logFile = $realLogPath.'/'.date('Y-m-d').'-error-log.txt';
            file_put_contents($logFile, $content, FILE_APPEND);
        }
    }
	
	/**
	 * 调用系统通知脚本，显示通知(Mac右上角弹出，Win10右下角弹出，Win7右下角气泡，Ubuntu顶部中间下滑)
	 * @param string $type
	 *
	 * @return bool
	 */
	public function sendNotification($type='success'){
	    $configFileName = PHP_OS=='WINNT' ? 'config_win.json' : 'config.json';
	    $configFile = APP_PATH.'/accessorys/PicUploaderHelper/'.$configFileName;
	    $config = json_decode(file_get_contents($configFile), true);
	    if(!isset($config['notification'][$type])){
		    return false;
	    }
	    $config = $config['notification'][$type];
	    $title = $config['title'];
	    $message = $config['message'];
	    $subtitle = '';
	    switch (PHP_OS){
		    case 'Darwin':
			    # Apple script: display notification
			    $applescript_command = 'display notification "' . $message . '" with title "' . $title . '" subtitle "' . $subtitle . '"';
			    # Execute apple script
			    $notification_script = "osascript -e '" . $applescript_command . "'";
		    	break;
		    case 'WINNT':
			    $powerShell = APP_PATH.'/accessorys/PicUploaderHelper/notification.ps1';
			    $notification_script = "powershell -ExecutionPolicy Unrestricted {$powerShell} '{$title}' '{$message}'";
		    	break;
		    default:
			    //Linux(目前仅测试了Ubuntu通过，其他Linux系统未测试，有些系统可能要自己安装“notify-send”)
			    $notification_script = "notify-send '{$title}' '{$message}'";
	    }
	    $handle = popen($notification_script, 'r');
	    pclose($handle);
    }
	
	/**
	 * 清理缓存文件
	 */
	public function clearTmpFiles(){
		$tmpDir = APP_PATH.'/.tmp';
		if(!is_dir($tmpDir)){
			return false;
		}
	    $files = scandir($tmpDir);
		//小于3表示只有“.”和“..”，其实就是文件夹没有文件
		if(count($files) < 3){
			return true;
		}
	    $files = array_slice($files, 2);
	    foreach ($files as $file){
	    	@unlink($tmpDir.'/'.$file);
	    }
	    return true;
    }
	
	/**
	 * 把给定纯文本内容复制到系统剪贴板，兼容Mac/Win/Linux(只能普通文本内容，不支持富文本及图片甚至文件)
	 * @param $content
	 *
	 * @return string|null
	 */
	public function copyPlainTextToClipboard($content){
	    $clipboard = PHP_OS=='Darwin' ? 'pbcopy' : (PHP_OS=='WINNT' ? 'clip' : 'xsel');
	    //$content不要加引号，因为引号会被输出的，因为这句命令已经是shell执行，而不是php
		//echo也不是php命令，而是shell命令，win/mac/linux都有echo这个命令的
	    $command = "echo {$content} | {$clipboard}";
		return shell_exec($command);
    }
	
	/**
	 * 使用pngpaste工具把剪贴板中的图片保存到文件中
	 * @return string
	 */
	public function getImageFromClipboard(){
		$configFileName = PHP_OS=='WINNT' ? 'config_win.json' : 'config.json';
		$config = json_decode(file_get_contents(APP_PATH.'/accessorys/PicUploaderHelper/'.$configFileName), true);
		$imgType = strtolower($config['img_type']) == 'jpeg' ? 'jpg' : 'png';
		if(PHP_OS == 'WINNT'){
			$powershell = APP_PATH . '/accessorys/PicUploaderHelper/dump-clipboard-'.$imgType.'.ps1';
			$command = "powershell -ExecutionPolicy Unrestricted {$powershell}";
			$output = shell_exec($command);
			$imgPath = trim($output);
		}else{
			$imgPath = APP_PATH.'/.tmp/image.'.$imgType;
			// is_file($imgPath) && unlink($imgPath);
			// Mac上要求安装pngpaste
			$command = '/usr/local/bin/pngpaste ' . $imgPath;
			//pngpaste保存图片成功是没有任何输出的(Linux/Unit系统惯例)
			$output = shell_exec($command);
		}
		
		if(is_file($imgPath)){
			return $imgPath;
		}
		return '';
	}
}