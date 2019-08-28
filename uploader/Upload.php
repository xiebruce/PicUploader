<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 01:02
 */

namespace uploader;

use settings\DbModel;
use settings\HistoryController;

class Upload extends Common {
    //arguments from MacOS(the absolute path of image)
    public $argv;
	//Maximum number of uploading files at a time
	public $maxNum;
    //the config
    public static $config;

    public function __construct($argv, $config)
    {
        $this->argv = $argv;
        static::$config = $config;
        $this->maxNum = static::$config['maxNum'] ?? 10;
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
		if($fileCount == 0){
			$error = "没有文件可上传！\n";
			$this->writeLog($error, 'error_log');
			$this->sendNotification('no_image');
			exit($error);
		}
        if($fileCount > $this->maxNum){
            $error = "同时上传多个文件会比较慢，所以限制最多只能上传{$this->maxNum}个文件, 你选择的文件数为：{$fileCount} 个!\n";
            $this->writeLog($error, 'error_log');
            exit($error);
        }

		$links = '';
		foreach($this->argv as $filePath){
			$fileSize = filesize($filePath);
			//为防止不小心上传了过大的文件，大于100M的文件一律跳过不上传
			if($fileSize > 104857600){
				$fileSizeHuman = (new Common())->getFileSizeHuman($filePath);
				$error = '为防止文件过大导致上传时间太长或上传失败，PicUploader限制上传的文件最大为100M，当前上传的文件大小为'.$fileSizeHuman."！\n";
				$this->writeLog($error, 'error_log');
				continue;
			}
			
			$mimeType = $this->getMimeType($filePath);
			$fileExt = $this->getFileExt($filePath);
			//不带后缀名的原始文件名
			$originFilename = $this->getOriginFileName($filePath);
			
			$fileNameFormat = isset(static::$config['fileNameFormat']) ? trim(static::$config['fileNameFormat']) : '';
			$pattern1 = '/\{Y\}|\{m\}|\{d\}|\{H\}|\{i\}|\{s\}|\{origin\}|\{timestamp\}|\{random:(\d+)\}/';
			//preg_match()返回1表示匹配到了，返回0表示未匹配到，返回false表示发生错误了
			if(preg_match($pattern1, $fileNameFormat) === 1){
				// 替换随机字符串
				$matches = [];
				$pattern2 = '/\{random:(\d+)\}/';
				$isMatch = preg_match($pattern2, $fileNameFormat, $matches);
				if($isMatch){
					$randomStrLen = isset($matches[1]) ? strval($matches[1]) : 8;
					$randomStrLen = $randomStrLen < 8 ? 8 : ($randomStrLen > 100 ? 100 : $randomStrLen);
					$randomStr = $this->getRandomString($randomStrLen);
					$fileNameFormat = preg_replace($pattern2, $randomStr, $fileNameFormat);
				}
				$newFileName = strtr($fileNameFormat, [
					'{Y}' => date('Y'),
					'{m}' => date('m'),
					'{d}' => date('d'),
					'{H}' => date('H'),
					'{i}' => date('i'),
					'{s}' => date('s'),
					'{origin}' => $originFilename,
					'{timestamp}' => time(),
				]);
			}else{
				//获取随机文件名
				$newFileName = $this->genRandFileName($filePath);
			}
			
			// 对象存储的key(上传的文件可能是没有后缀的文件)
			if($fileExt){
				$key = $newFileName . '.' . $fileExt;
			}else{
				$key = $newFileName;
			}
			
			// 原始文件路径
			$uploadFilePath = $filePath;

			//如果是图片则做压缩和水印处理
			if(strpos($mimeType, 'image')!==false && $mimeType!=='image/svg'){
				$quality = $mimeType=='image/png' ? static::$config['compreLevel'] : static::$config['quality'];
				
				//添加水印
				if(isset(static::$config['watermark']['useWatermark']) && static::$config['watermark']['useWatermark']==1 && $this->getMimeType($filePath) != 'image/gif'){
					$tmpImgPath = $this->watermark($uploadFilePath, $quality);
					$uploadFilePath = $tmpImgPath ? $tmpImgPath : $filePath;
				}
				
				//压缩
				$resizeOptions = isset(static::$config['resizeOptions']['percentage']) ? static::$config['resizeOptions']['percentage'] : 0;
				if($resizeOptions && $resizeOptions > 0){
					static::$config['resizeOptions']['percentage'] = $resizeOptions > 100 ? 100 : $resizeOptions;
					$tmpImgPath = $this->optimizeImage($uploadFilePath, static::$config['resizeOptions'], $quality);
					$uploadFilePath = $tmpImgPath ? $tmpImgPath : $filePath;
				} else if(isset(static::$config['imgWidth']) && static::$config['imgWidth'] > 0){
					$tmpImgPath = $this->optimizeImage($uploadFilePath, static::$config['imgWidth'], $quality);
					$uploadFilePath = $tmpImgPath ? $tmpImgPath : $filePath;
				}
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
					$cloudType = '';
					if(isset(static::$config['storageTypes'][$uploadServer]['type'])){
						$cloudType = static::$config['storageTypes'][$uploadServer]['type'];
					}

					$args = [$key, $uploadFilePath];
					if(in_array($uploadServer, ['imgur', 'smms', 'weibo'])){
						$args[] = $originFilename;
					}
					$constructorParams = [
						'config' => static::$config,
						'argv' => $this->argv,
						'uploadServer' => $uploadServer
					];

					if($cloudType){
						$className = strtolower($cloudType);
					}else{
						$className = $uploadServer;
					}
					//new 变量类名不会带上命名空间，所以自己把命名空间加上
					$className = __NAMESPACE__.'\\Upload'.ucfirst($className);

					//这两种调用方法作用一样，但call_user_func_array可根据条件改变参数个数，不用再写一次upload调用，缺点是无法用IDE跟踪函数
					// $link = (new $className(static::$config, $this->argv))->upload($key, $uploadFilePath);
					$link = call_user_func_array([(new $className($constructorParams)), 'upload'], $args);
					
					// 如果数据库连接正常，则保存上传记录到数据库
					if((new DbModel())->connection){
						$url = isset($link['link']) ? ($uploadServer=='smms'?join(",", $link):join(";", $link)) : $link;
						$size = filesize($uploadFilePath);
						// $size = is_numeric($size) ? $size : 0;
						$filename = $fileExt ? $originFilename . '.' . $fileExt : $originFilename;
						(new HistoryController)->Add($filename, $url, $size);
					}

					if(!$params['doNotFormat']){
						//按配置文件指定的格式，格式化链接
						if(in_array($uploadServer, ['smms', 'imgur'])){
							$link['link'] = $this->formatLink($link['link'], $originFilename, $mimeType);
						}else{
							$link = $this->formatLink($link, $originFilename, $mimeType);
						}
					}
					
					$log = $link;
					if($uploadServer == 'smms'){
						$log = $link['link']."\nDelete Link: ".$link['delLink'];
						$link = $link['link'];
					}
					if($uploadServer == 'imgur'){
						$log = $link['link']."\nDelete Hash: ".$link['delHash'];
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
			//对于从剪贴板粘贴的或接口上传的，删除源文件(这个源文件实质上是上传后的那个文件，它在.tmp目录里，并不是你电脑上的源文件)
			$params['deleteOriginalFile'] && @unlink($filePath);
			// $this->copyPlainTextToClipboard($link);
			// $this->sendNotification('success');
			//只返回最后一个云的link（但由于只有域名不同，所以不同云之间只要换个域名，就可以访问同一张照片），
			//而且由于我自己做了反向代理，所以我的所有云都访问使用同一个图片域名(我自己的域名)，然后我在我的
			//服务器把这个域名代理到真正的域名
			$links .= $link;
		}
		// $str = var_export(isset($tmpImgPath), true);
		// file_put_contents('/Users/bruce/Downloads/tmp-debug.txt', "{$str}--{$tmpImgPath}\n----------------------------------------\n\n", FILE_APPEND);
		isset($tmpImgPath) && @unlink($tmpImgPath);
		return $links;
    }
}