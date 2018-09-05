<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 00:46
 */

namespace uploader;

use GuzzleHttp\Client;

class UploadSmms extends Common {
    //config from config.php, using static because the parent class needs to use it.
    public static $config;
    //arguments from php client, the image absolute path
    public $argv;
    //baseUrl
    public $smmsBaseUrl;

    /**
     * Upload constructor.
     *
     * @param $config
     * @param $argv
     */
    public function __construct($config, $argv)
    {
        $this->smmsBaseUrl = $config['sm.ms']['baseUrl'];
        $this->argv = $argv;
        static::$config = $config;
    }

    /**
     * Upload image to http://sm.ms
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ImagickException
     */
    public function upload(){
        $link = '';
        $client = new Client([
            'base_uri' => $this->smmsBaseUrl,
            'timeout'  => 10.0,
        ]);
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
            $imgWidth = isset(static::$config['imgWidth']) && static::$config['imgWidth'] ? static::$config['imgWidth'] : 0;
            if($imgWidth){
                $tmpImgPath = $this->optimizeImage($filePath, $imgWidth);
            }
            $uploadFilePath = $tmpImgPath ? $tmpImgPath : $filePath;
            $originFileName = $this->getOriginFileName($filePath);

            $fileSize = filesize($uploadFilePath);
            if($fileSize > 5000000){
                if($imgWidth){
                    $error = 'Due to https://sm.ms restriction, you can\'t upload photos lager than 5M, this photo is '.($fileSize/1000000).'M after compress.'."\n";
                }else{
                    $error = "Due to https://sm.ms restriction, you can't upload photos lager than 5M, and you didn't set the compress option at the config file.\n";
                }

                $this->writeLog($error, 'error_log');
                continue;
            }
            //upload?ssl=1
            //post file to https://sm.ms
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
            // Delete the tmp file
            $tmpImgPath && is_file($tmpImgPath) && @unlink($tmpImgPath);
        }
        return $link;
    }
}