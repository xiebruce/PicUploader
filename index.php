<?php
	/**
	 * Created by PhpStorm.
	 * User: bruce
	 * Date: 2018-08-29
	 * Time: 00:35
	 */
	
	/*
	 * 关于$argv与$argc变量，这两个变量是php作为脚本执行时，获取输入参数的变量
	 * 比如 php test.php aa bb，那么在test.php里打印$argv变量就是一个数组，包含3个元素test.php, aa, bb，而$argc就是$argv的元素个数，相当于count($argc)，当然也可用$_SERVER['argv']，$_SERVER['argc']表示。
	 */
	
	/*header('Content-Type: application/json; charset=UTF-8');
    echo '{"code":"success","data":{"filename":"20190418194552.png","url":"https://ws2.sinaimg.cn/large/6db312f1gy1g270z0i9qtj207205m3yv.jpg"}}';exit;*/
	error_reporting(E_ALL ^E_NOTICE);
	
	use uploader\Common;
	use settings\SettingController;
	
	date_default_timezone_set('Asia/Shanghai');
	
	require 'vendor/autoload.php';
	require 'common/EasyImage.php';
	
	define('APP_PATH', strtr(__DIR__, '\\', '/'));

	require APP_PATH . '/thirdpart/ufile-phpsdk/v1/ucloud/proxy.php';
	require APP_PATH . '/thirdpart/eSDK_Storage_OBS_V3.1.3_PHP/obs-autoloader.php';
	//是否使用VHOST
	define("KS3_API_VHOST",FALSE);
	//是否开启日志(写入日志文件)
	define("KS3_API_LOG",FALSE);
	//是否显示日志(直接输出日志)
	define("KS3_API_DISPLAY_LOG", FALSE);
	//定义日志目录(默认是该项目log下)
	define("KS3_API_LOG_PATH","");
	//是否使用HTTPS
	define("KS3_API_USE_HTTPS",TRUE);
	//是否开启curl debug模式
	define("KS3_API_DEBUG_MODE",FALSE);
	require APP_PATH . '/thirdpart/ks3-php-sdk/Ks3Client.class.php';

	//autoload class
	spl_autoload_register(function ($class_name) {
		require_once APP_PATH . '/' . str_replace('\\', '/', $class_name) . '.php';
	});
	
	/*if((new \settings\DbModel())->connection)
		// $arr = (new \settings\HistoryController())->getList(1);
		// var_dump($arr);
		(new \settings\HistoryController())->Add('试试中文.png', 'https://3243.jpg', 43242);
	exit;*/
	//获取配置
	$config = call_user_func([(new SettingController()), 'getMergeSettings']);
	
	/**
	 * 由于这三个变量是可变变量，IDE无法识别变量，会导致下边使用这些变量的代码提示变量未定义，
	 * 所以用这种方法定义，这样IDE就能识别，注意第一个斜杠后边必须是两个“*”号，一个星号是不会起作用的。
	 *
	 * @var bool $isMweb
	 * @var bool $isPicgo
	 * @var bool $isSharex
	 * @var bool $isUpic
	 */
	$plugins = ['mweb','picgo','sharex','upic'];
	foreach($plugins as $plugin) {
		$tmp = ucfirst($plugin);
		//用可变变量方式定义三个变量$isMweb、$isPicgo、$isSharex、$isUpic，用于下边代码判断当前是否是mweb/picgo/sharex/upic请求。
		${'is'.$tmp} = false;
		if(isset($_FILES[$plugin])){
			${'is'.$tmp} = true;
			$_FILES['file'] = $_FILES[$plugin];
			unset($_FILES[$plugin]);
		}
	}
	
	//if has post file
	//是否需要删除原始文件(如果是上传的那就需要，如果是本地的就不需要)
	$deleteOriginalFile = true;
	if(isset($_FILES['file']) && $files = $_FILES['file']){
		$tmpDir = APP_PATH.'/.tmp';
		!is_dir($tmpDir) && @mkdir($tmpDir, 0777);
		//receive multi file upload
		if(is_array($files['tmp_name'])){
			$argv = [];
			foreach($files['tmp_name'] as $key=>$tmp_name){
				$dest = $tmpDir.'/'.$files['name'][$key];
				if(move_uploaded_file($tmp_name, $dest)){
					$argv[] = $dest;
				}
			}
		}else{
			//receive single file upload
			$dest = $tmpDir.'/'.$files['name'];
			$tmp_name = $files['tmp_name'];
			if(move_uploaded_file($tmp_name, $dest)){
				$argv[] = $dest;
			}
		}
	}else if(isset($argv[1]) && $argv[1]=='--type=alfred'){
		$alfred = true;
		$imgPath = (new Common())->getImageFromClipboard();
		$argv = [];
		if(is_file($imgPath)){
			$argv = [$imgPath];
		}
	}else{
		//只有右击上传时，不删除源文件(从剪贴板粘贴或通过接口上传，源文件其实都是在临时文件目录里，
		//所以要删除源文件，因为这个“源文件”已经不是最初上传的那个源文件了)
		$deleteOriginalFile = false;
		//去除第一个元素（因为第一个元素是index.php，$argv可接收client方式执行时的参数，
		//用php执行index.php的时候，index.php也算是一个参数）
		if(isset($argv) && $argv){
			array_shift($argv);
		}else{
			exit('未检测到图片');
		}
	}

	$uploader = 'uploader\Upload';
	// $uploader = 'uploader\UploadCoroutine';
	//getPublickLink
	$link = call_user_func_array([(new $uploader($argv, $config)), 'getPublickLink'], [
		[
			'doNotFormat' => ($isMweb || $isPicgo || $isSharex || $isUpic),
			'deleteOriginalFile' => $deleteOriginalFile,
		]
	]);
	
	//如果是MWeb或PicGo，则返回Mweb/Picgo支持的json格式
	if($isMweb || $isPicgo || $isSharex || $isUpic){
		// mweb或sharex接收的json格式
		$data = [
			'code' => 'success',
			'data' => [
				'filename' => $_FILES['file']['name'],
				'url' => $link,
			],
		];
		
		header('Content-Type: application/json; charset=UTF-8');
		$json = json_encode($data, JSON_UNESCAPED_UNICODE);
		echo $json;
	}else{
		//这个通知，在一个win10可以，另一个win10又不行(这个win10上用管理员又可以，可是另一上win10也没有用管理员，而且本身用户都有管理员权限)，在win上还是用python来通知好了。
		if(isset($alfred)){
			(new Common())->sendNotification('success');
		}
		//如果是client模式，则直接返回链接
		echo $link;
	}