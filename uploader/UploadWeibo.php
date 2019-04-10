<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 00:46
 */

namespace uploader;

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;

class UploadWeibo extends Common {
	//cookie缓存文件名
	const COOKIE_CACHE_FILE = __DIR__ . '/token/weiboCookie';
	
	public $uploadUrl;
	//微信用户名
	public $username;
	//微博密码
	public $password;
	//上传cookie
	public $cookie;
	
    //config from config.php, using static because the parent class needs to use it.
    public static $config;
    //arguments from php client, the image absolute path
    public $argv;
	
	/**
	 * Upload constructor.
	 *
	 * @param $config
	 * @param $argv
	 *
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
    public function __construct($config, $argv)
    {
	    $tmpArr = explode('\\',__CLASS__);
	    $className = array_pop($tmpArr);
        $ServerConfig = $config['storageTypes'][strtolower(substr($className,6))];
	
	    $this->uploadUrl = $ServerConfig['uploadUrl'];
        $this->username = $ServerConfig['username'];
        $this->password = $ServerConfig['password'];
		//获取上传用的cookie(微博图床非公共接口，需要模拟登录取得cookie后，再模拟网页上传)
	    $this->cookie = $this->getCookie();
	
	    //arguments from php client, the image absolute path
	    $this->argv = $argv;
	    //config from config.php, using static because the parent class needs to use it.
	    static::$config = $config;
    }
	
	/**
	 * 获取微博上传用cookie(登录后在header返回的)
	 * @return array|mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function getCookie(){
		//据说微博cookie过期时间为1天，我就设置1天-50秒的秒数
		$expires = 86350;
		//如果文件存在，且未过期，且文件里有内容，则使用文件缓存的token
		$tokenDir = __DIR__ . '/token';
		if(!is_dir($tokenDir)){
			@mkdir($tokenDir, 0777, true);
		}
		$cookieFile = self::COOKIE_CACHE_FILE;
		if(is_file($cookieFile) && ((time() - filemtime($cookieFile)) < $expires) && file_get_contents($cookieFile)!=''){
			return json_decode(file_get_contents($cookieFile), true);
		}
		
		return $this->weiboLogin();
	}
	
	/**
	 * 模拟微博登录，用于获取返回的cookie
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function weiboLogin(){
		$loginUrl = 'https://login.sina.com.cn/sso/login.php?client=ssologin.js(v1.4.15)&_='.time();
	    $loginData = [
	        'entry' => 'sso',
	        'gateway' => '1',
	        'from' => 'null',
	        'savestate' => '30',
	        'useticket' => '0',
	        'vsnf' => '1',
	        'su' => base64_encode($this->username),
	        'service' => 'sso',
	        'sp' => $this->password,
	        'sr' => '1920*1080',
	        'encoding' => 'UTF-8',
	        'cdult' => '3',
	        'domain' => 'sina.com.cn',
	        'prelt' => '0',
	        'returntype' => 'TEXT',
	    ];
	
	    //实例化GuzzleHttp
	    $client = new Client([
		    'base_uri' => $loginUrl,
		    'timeout'  => 10.0,
	    ]);
	    $response = $client->request('POST', '', [
		    'form_params' => $loginData
	    ]);
	
	    $res = $response->getHeaderLine('Set-Cookie');
	    // $string = $response->getBody()->getContents();
	    //从返回的header中匹配出cookie
	    $preg = "/(SUB)=(.*?);/";
	    preg_match($preg, $res, $matches);
	    
	    $cookie = [];
	    if(isset($matches[1]) && $matches[1]=='SUB' && $matches[2]){
	        $cookie = [
		        $matches[1] => $matches[2],
	        ];
	        file_put_contents(self::COOKIE_CACHE_FILE, json_encode($cookie));
	    }
	    return $cookie;
    }
	
	/**
	 * 获取图片链接 (直接使用：http://blog.kkksos.com/2018/09/21/12.html 的函数)
	 * @param string $pid 微博图床pid，或者微博图床链接(带后缀)。
	 * @param string $size 图片尺寸 0-7(数字越大尺寸越大)
	 * @param bool $https (true) 是否使用 https 协议
	 * @return string 图片链接 当 $pid 既不是 pid 也不是合法的微博图床链接时返回空值
	 */
	public function getUrl($pid, $size='large', $https=true)
	{
		//可选size：'large', 'mw1024', 'mw690', 'bmiddle', 'small', 'thumb180', 'thumbnail', 'square'
		if (preg_match('/^[a-zA-Z0-9]{32}$/', $pid) === 1) {
			return ($https ? 'https' : 'http') . '://' . ($https ? 'ws' : 'ww')
				. ((crc32($pid) & 3) + 1) . ".sinaimg.cn/" . $size
				. "/$pid." . ($pid[21] === 'g' ? 'gif' : 'jpg');
		}
		// 传递 url
		$url = $pid;
		$imgUrl = preg_replace_callback('/^(https?:\/\/[a-z]{2}\d\.sinaimg\.cn\/)' . '(large|bmiddle|mw1024|mw690|small|square|thumb180|thumbnail)' . '(\/[a-z0-9]{32}\.(jpg|gif))$/i', function ($match) use ($size) {
			return $match[1] . $size . $match[3];
		}, $url, -1, $count);
		if ($count === 0) {
			return '';
		}
		return $imgUrl;
	}
	
	/**
	 * Upload image to Weibo
	 * @param $key  上传的文件名，由于微博无法自己指定key(因为微博图床并非官方真正提供接口，自然也就不可能自己命名上传的图片文件)，所以key在这里不使用。
	 * @param $uploadFilePath
	 *
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function upload($key, $uploadFilePath){
		$fileSize = filesize($uploadFilePath);
		if($fileSize > 5000000){
			$imgWidth = isset(static::$config['imgWidth']) && static::$config['imgWidth'] ? static::$config['imgWidth'] : 0;
			if($imgWidth){
				$error = 'Due to https://sm.ms restriction, you can\'t upload photos lager than 5M, this photo is '.($fileSize/1000000).'M after compress.'."\n";
			}else{
				$error = "Due to https://sm.ms restriction, you can't upload photos lager than 5M, and you didn't set the compress option at the config file.\n";
			}
			
			$this->writeLog($error, 'error_log');
		}else{
			try{
				//实例化GuzzleHttp
				$client = new Client([
					'base_uri' => $this->uploadUrl,
					'timeout'  => 10.0,
				]);
				$cookieJar = CookieJar::fromArray($this->cookie, 'picupload.service.weibo.com');

				$response = $client->request('POST', '', [
					'cookies' => $cookieJar,
					'multipart' => [
						[
							'name' => 'pic1',
							'contents' => fopen($uploadFilePath, 'r')
						],
					]
				]);
				
				$string = $response->getBody()->getContents();
				
				$match = [];
				preg_match('/{.*}/i', $string, $match);
				if(!isset($match[0])){
					throw new \Exception($string);
				}
				
				$arr = json_decode($match[0], true);
				if(!isset($arr['data']['pics']['pic_1']['pid'])){
					throw new \Exception($string);
				}else{
					$link = $this->getUrl($arr['data']['pics']['pic_1']['pid']);
					return $link;
				}
			}catch (\Exception $e){
				//上传数错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
				$link = [
					'link' => $e->getMessage()."\n",
					'delLink' => '',
				];
				$this->writeLog($link, 'error_log');
			}
		}
	}
}