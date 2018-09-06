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
        static::$config['storageType'] = isset(static::$config['storageType']) ? strtolower(static::$config['storageType']) : 'qiniu';
    }

    /**
     * Get public link
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ImagickException
     */
    public function getPublickLink(){
        $fileCount = count($this->argv);
        if($fileCount > 5){
            $error = "Sorry, it's too slow if you upload more than 5 photos at a time, {$fileCount} were selected!\n";
            $this->writeLog($error, 'error_log');
            echo $error;
            exit;
        }

        switch(strtolower(static::$config['storageType'])){
            case 'qiniu':
                $link = (new UploadQiniu(static::$config, $this->argv))->upload();
                break;
            case 'tecent':
                $link = (new UploadTencent(static::$config, $this->argv))->upload();
                break;
            case 'netease':
                $link = (new UploadNetease(static::$config, $this->argv))->upload();
                break;
            case 'sm.ms':
            default:
                $link = (new UploadSmms(static::$config, $this->argv))->upload();
        }

        //记录上传日志
        $datetime = date('Y-m-d H:i:s');
        $storageType = static::$config['storageType'];
        $content = "Picture uploaded to {$storageType} at {$datetime} => \n{$link}\n---\n";
        $this->writeLog($content);
        return $link;
    }
}