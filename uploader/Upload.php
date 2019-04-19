<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 01:02
 */

namespace uploader;

class Upload extends Common {
    //arguments from MacOS(the absolute path of image)
    public $argv;
    //the config
    public static $config;

    public function __construct($argv, $config)
    {
        $this->argv = $argv;
        static::$config = $config;
        static::$config['storageType'] = isset(static::$config['storageType']) ? static::$config['storageType'] : 'Smms';
    }
	
	/**
	 * Get public link
	 * @param $params
	 *
	 * @return string
	 * @throws \ImagickException
	 */
	public function getPublickLink($params){
        $fileCount = count($this->argv);
        if($fileCount > 5){
            $error = "Sorry, it's too slow if you upload more than 5 photos at a time, {$fileCount} were selected!\n";
            $this->writeLog($error, 'error_log');
            exit($error);
        }
        $allowMimeTypes = array_values(static::$config['allowMimeTypes']);
		$links = '';
		foreach($this->argv as $filePath){
			$mimeType = $this->getMimeType($filePath);
			$originFilename = $this->getOriginFileName($filePath);
			//如果不是允许的图片，则直接跳过（目前允许jpg/png/gif）
			if(!in_array($mimeType, $allowMimeTypes)){
				$error = 'Only MIME in "'.join(', ', static::$config['allowMimeTypes']).'" is allow to upload, but the MIME of this photo "'.$originFilename.'" is '.$mimeType."\n";
				$this->writeLog($error, 'error_log');
				continue;
			}
			//获取随机文件名
			$newFileName = $this->genRandFileName($filePath);
			
			//组装key名（因为我们用的是对象存储服务，存储是用key=>value的方式存的，所以这个key就相当于文件名，当然带路径，但其实这个所谓的路径又与我们平常的路径不太相同，它其实就是文件名的一部分）
			$key = $newFileName;
			
			//如果配置了优化宽度，则优化
			$uploadFilePath = $filePath;
			$tmpImgPath = APP_PATH . '/.tmp/'.$originFilename;
			$quality = $mimeType=='image/png' ? static::$config['compreLevel'] : static::$config['quality'];
			if(isset(static::$config['resizeOptions']['percentage']) && static::$config['resizeOptions']['percentage'] > 0 && static::$config['resizeOptions']['percentage'] < 1){
				$tmpImgPath = $this->optimizeImage($filePath, static::$config['resizeOptions'], $quality);
				$uploadFilePath = $tmpImgPath ? $tmpImgPath : $filePath;
			} else if(isset(static::$config['imgWidth']) && static::$config['imgWidth'] > 0){
				$tmpImgPath = $this->optimizeImage($filePath, static::$config['imgWidth'], $quality);
				$uploadFilePath = $tmpImgPath ? $tmpImgPath : $filePath;
			}
			
			//添加水印
			if(isset(static::$config['watermark']['useWatermark']) && static::$config['watermark']['useWatermark']==1 && $this->getMimeType($filePath) != 'image/gif'){
				$tmpImgPath = $uploadFilePath = $this->watermark($uploadFilePath);
			}
			
			//同时上传到多个云时，兼容字符串写法和数组
			$uploadServers = static::$config['storageType'];
			is_string($uploadServers) && $uploadServers = explode(',', $uploadServers);

			//支持的存储服务器
			$storageTypes = array_keys(static::$config['storageTypes']);
			//循环上传到每个云存储服务器
			$link = '';
			
			foreach($uploadServers as $uploadServer){
				$uploadServer = strtolower(trim($uploadServer));
				if(in_array($uploadServer, $storageTypes)){
					//new 变量类名不会带上命名空间，所以自己把命名空间加上
					$className = __NAMESPACE__.'\\Upload'.ucfirst($uploadServer);
					//new 变量类名，并调用对应类的upload()方法上传文件
					if($uploadServer == 'imgur'){
						$link = (new $className(static::$config, $this->argv))->upload($key, $uploadFilePath, $originFilename);
					}else{
						$link = (new $className(static::$config, $this->argv))->upload($key, $uploadFilePath);
					}
					
					if(!$params['is_mweb']){
						//按配置文件指定的格式，格式化链接
						if(in_array($uploadServer, ['smms', 'imgur'])){
							$link['link'] = $this->formatLink($link['link'], $originFilename);
						}else{
							$link = $this->formatLink($link, $originFilename);
						}
					}
					
					$log = $link;
					if(in_array($uploadServer, ['smms', 'imgur'])){
						$log = join("\n", $link);
						$link = $link['link'];
					}
					//记录上传日志
					$datetime = date('Y-m-d H:i:s');
					$content = "Picture uploaded to {$uploadServer} at {$datetime} => \n{$log}\n\n---\n";
					$this->writeLog($content);
				}else{
					$errMsg = "Cannot find storage type `{$uploadServer}` in config file, please check the config file and try again.\n";
					$this->writeLog($errMsg, 'StorageTypeError');
				}
			}
			//只返回最后一个云的link（但由于只有域名不同，所以不同云之间只要换个域名，就可以访问同一张照片），
			//而且由于我自己做了反向代理，所以我的所有云都访问使用同一个图片域名(我自己的域名)，然后我在我的
			//服务器把这个域名代理到真正的域名
			$links .= $link;
			
			//删除临时图片
			$tmpImgPath && is_file($tmpImgPath) && @unlink($tmpImgPath);
		}
        return $links;
    }
}