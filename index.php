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
	
	use uploader\Common;
	use settings\SettingController;
	
	date_default_timezone_set('Asia/Shanghai');
	
	require 'vendor/autoload.php';
	require 'common/EasyImage.php';
	
	define('APP_PATH', strtr(__DIR__, '\\', '/'));

	require APP_PATH . '/thirdpart/bce-php-sdk-0.9/BaiduBce.phar';
	require APP_PATH . '/thirdpart/ufile-phpsdk/v1/ucloud/proxy.php';

	//autoload class
	spl_autoload_register(function ($class_name) {
		require_once APP_PATH . '/' . str_replace('\\', '/', $class_name) . '.php';
	});
	// (new Common())->copyPlainTextToClipboard(var_export($argv[1]));exit;
	//获取配置
	$config = call_user_func([(new SettingController()), 'getMergeSettings']);
	
	$isMweb = false;
	if(isset($_FILES['mweb'])){
		$isMweb = true;
		$_FILES['file'] = $_FILES['mweb'];
		unset($_FILES['mweb']);
	}
	$isPicgo = false;
	if(isset($_FILES['picgo'])){
		$isPicgo = true;
		$_FILES['file'] = $_FILES['picgo'];
		unset($_FILES['picgo']);
	}
	
	//if has post file
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
		$imgPath = (new Common())->getImageFromClipboard();
		$argv = [];
		if(is_file($imgPath)){
			$argv = [$imgPath];
		}
	}else{
		//去除第一个元素（因为第一个元素是index.php，因为$argv是linux/mac的参数，
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
			'do_not_format' => ($isMweb || $isPicgo)
		]
	]);
	
	//如果是MWeb或PicGo，则返回Mweb/Picgo支持的json格式
	if($isMweb || $isPicgo){
		if($isMweb){
			$data = [
				'code' => 'success',
				'data' => [
					'filename' => $_FILES['file']['name'],
					'url' => $link,
				],
			];
		}else{
			$data = [
				'code' => 'success',
				'url' => $link,
			];
		}
		
		header('Content-Type: application/json; charset=UTF-8');
		$json = json_encode($data, JSON_UNESCAPED_UNICODE);
		echo $json;
	}else{
		//如果是client模式，则直接返回链接
		(new Common())->sendNotification('success');
		echo $link;
	}