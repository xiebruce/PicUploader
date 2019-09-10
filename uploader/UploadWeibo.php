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
	//上传目标服务器名称
	public $uploadServer;
	
    //config from config.php, using static because the parent class needs to use it.
    public static $config;
    //arguments from php client, the image absolute path
    public $argv;
	
	/**
	 * Upload constructor.
	 *
	 * @param $params
	 *
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
    public function __construct($params)
    {
        $ServerConfig = $params['config']['storageTypes'][$params['uploadServer']];
        
        $this->username = $ServerConfig['username'];
        $this->password = $ServerConfig['password'];

		//获取上传用的cookie(微博图床非公共接口，需要模拟登录取得cookie后，再模拟网页上传)
	    $this->cookie = $this->getCookie();
	    $this->uploadServer = ucfirst($params['uploadServer']);
	
	    //arguments from php client, the image absolute path
	    $this->argv = $params['argv'];
	    //config from config.php, using static because the parent class needs to use it.
	    static::$config = $params['config'];
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
		
		$cookie = [];
	    try {
		    //实例化GuzzleHttp
		    $client = new Client([
			    'base_uri' => $loginUrl,
			    'timeout'  => 10.0,
		    ]);
		    $response = $client->request('POST', '', [
			    'curl' => [
				    //如果使用了cacert.pem，貌似隔一段时间更新一次，所以还是不使用它了
				    //CURLOPT_CAINFO => APP_PATH.'/static/cacert.pem',
				    CURLOPT_SSL_VERIFYPEER => false,
				    CURLOPT_SSL_VERIFYHOST => false,
			    ],
			    'form_params' => $loginData
		    ]);
		
		    $res = $response->getHeaderLine('Set-Cookie');
		    //从返回的header中匹配出cookie
		    $preg = "/(SUB)=(.*?);/";
		    preg_match($preg, $res, $matches);
		    
		    if(isset($matches[1]) && $matches[1]=='SUB' && $matches[2]){
			    $cookie = [
				    $matches[1] => $matches[2],
			    ];
			    file_put_contents(self::COOKIE_CACHE_FILE, json_encode($cookie));
		    }else{
			    $string = $response->getBody()->getContents();
			    throw new Exception('Login faild: '.$string);
	        }
	    }catch (Exception $e){
			//上传数错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
			$this->writeLog($e->getMessage()."\n", 'error_log');
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
	 * Upload files to Weibo
	 * 微博发布窗口：https://weibo.com/minipublish
	 * @param $key  上传的文件名，由于微博无法自己指定key(因为微博图床并非官方真正提供接口，自然也就不可能自己命名上传的图片文件)，所以key在这里不使用。
	 * @param $uploadFilePath
	 * @param $originFilename
	 *
	 * @return array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \ImagickException
	 */
	public function upload($key, $uploadFilePath, $originFilename){
		try{
			$fileSize = filesize($uploadFilePath);
			if($fileSize > 20971520){
				$useWatermark = static::$config['watermark']['useWatermark'] ?? 0;
				$fileSizeHuman = (new Common())->getFileSizeHuman($uploadFilePath);
				$errMsg = 'PicUploader限制上传到微博的最大图片为20M，你上传的文件'.($useWatermark ? '压缩后': '').'为'.$fileSizeHuman."！";
				throw new Exception($errMsg);
			}
			if(strpos((new Common())->getMimeType($uploadFilePath), 'image')===false){
				$errMsg = '微博图床只能上传图片，你上传的文件“'.$originFilename.'”不是图片，无法上传！';
				throw new Exception($errMsg);
			}
			
			$uploadUrl = 'http://picupload.service.weibo.com/interface/pic_upload.php?mime=image%2Fjpeg&data=base64&url=0&markpos=1&logo=&nick=0&marks=1&app=miniblog&cb=http://weibo.com/aj/static/upimgback.html?_wv=5&callback=STK_ijax_'.time();
			
			//实例化GuzzleHttp
			$client = new Client([
				'base_uri' => $uploadUrl,
				'timeout'  => 10.0,
			]);
			$cookieJar = CookieJar::fromArray($this->cookie, 'picupload.service.weibo.com');
			$response = $client->request('POST', '', [
				'curl' => [
					//如果使用了cacert.pem，貌似隔一段时间更新一次，所以还是不使用它了
					//CURLOPT_CAINFO => APP_PATH.'/static/cacert.pem',
					CURLOPT_SSL_VERIFYPEER => false,
					CURLOPT_SSL_VERIFYHOST => false,
				],
				'cookies' => $cookieJar,
				'multipart' => [
					[
						'name' => 'b64_data',
						'contents' => base64_encode(file_get_contents($uploadFilePath))
					],
				]
			]);
			
			$string = $response->getBody()->getContents();
			
			$match = [];
			preg_match('/{.*}/i', $string, $match);
			if(!isset($match[0])){
				throw new Exception($string);
			}
			
			$arr = json_decode($match[0], true);
			if(!isset($arr['data']['pics']['pic_1']['pid'])){
				throw new Exception($string);
			}
			
			$link = $this->getUrl($arr['data']['pics']['pic_1']['pid']);
			
			$domain = '';
			$pattern = '/https\:\/\/.*?\.sinaimg.cn\/large/';
			if(preg_match($pattern, $link, $mathes)){
				$domain = isset($mathes[0]) ? $mathes[0] : '';
			}
			if(!isset($domain)){
				strpos($link, 'ws1.sinaimg.cn') && $domain = 'https://ws1.sinaimg.cn/large';
				strpos($link, 'ws2.sinaimg.cn') && $domain = 'https://ws2.sinaimg.cn/large';
				strpos($link, 'ws3.sinaimg.cn') && $domain = 'https://ws3.sinaimg.cn/large';
				strpos($link, 'ws4.sinaimg.cn') && $domain = 'https://ws4.sinaimg.cn/large';
			}
			$key = str_replace($domain.'/', '', $link);
			
			$data = [
				'code' => 0,
				'msg' => 'success',
				'key' => $key,
				'domain' => $domain,
			];
		}catch (Exception $e){
			//上传数错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
			$data = [
				'code' => -1,
				'msg' => $e->getMessage(),
			];
			$this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
		}
		
		return $data;
	}
}