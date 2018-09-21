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
        static::$config['storageType'] = isset(static::$config['storageType']) ? static::$config['storageType'] : 'Qiniu';
    }
	
	/**
	 * Get public link
	 * @return mixed
	 */
	public function getPublickLink(){
        $fileCount = count($this->argv);
        if($fileCount > 5){
            $error = "Sorry, it's too slow if you upload more than 5 photos at a time, {$fileCount} were selected!\n";
            $this->writeLog($error, 'error_log');
            exit($error);
        }
		$storageTypes = array_keys(static::$config['storageTypes']);
		$storageType = strtolower(static::$config['storageType']);
        if(!in_array($storageType, $storageTypes)){
        	$errMsg = "Cannot find storage type `".static::$config['storageType']."` in config file, please check the config file and try again.\n";
        	$this->writeLog($errMsg, 'StorageTypeError');
        	exit($errMsg);
        }
        //new 变量类名不会带上命名空间，所以自己把命名空间加上
		$className = __NAMESPACE__.'\\Upload'.ucfirst($storageType);
        //new 变量类名，并调用对应类的upload()方法上传文件
		$link = (new $className(static::$config, $this->argv))->upload();

        //记录上传日志
        $datetime = date('Y-m-d H:i:s');
        $storageType = static::$config['storageType'];
        $content = "Picture uploaded to {$storageType} at {$datetime} => \n{$link}\n---\n";
        $this->writeLog($content);
        return $link;
    }
}