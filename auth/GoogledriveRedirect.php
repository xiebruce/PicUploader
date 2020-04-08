<?php
	/**
	 * Created by PhpStorm.
	 * User: Bruce Xie
	 * Date: 2019-10-25
	 * Time: 15:39
	 */
	
	session_start();
	
	require '../vendor/autoload.php';
	
	use settings\SettingController;
	
	define('APP_PATH', strtr(dirname(__DIR__), '\\', '/'));
	
	//autoload class
	spl_autoload_register(function ($class_name) {
		require_once APP_PATH . '/' . str_replace('\\', '/', $class_name) . '.php';
	});
    
    $uploader = ucfirst(str_replace('Redirect.php', '', basename(__FILE__)));
	if (isset($_GET['code'])) {
		// oAuth2.0标准授权，传过去的state值一定会原样返回，如果发现返回的state值跟传过去的不一样，则中途肯定出了问题
		/*if($_GET['state'] !== $_SESSION['state']){
			exit('会话已过期或是非法授权');
		}*/
		//获取到code之后，再用code去换取access token
		$config = call_user_func([(new SettingController()), 'getMergeSettings']);
		$constructorParams = ['config' => $config, 'argv' => '', 'uploadServer' => $uploader];
		$uploadClass = 'uploader\\Upload'. $uploader;
		//获取之后会保存在文件里
		(new $uploadClass($constructorParams))->getAccessToken($_GET['code']);
		
		//跳转回原页面
        $redirectUri = isset($_SESSION[$uploader]['redirectUri']) ? $_SESSION[$uploader]['redirectUri'] : '';
        if(isset($redirectUri) && $redirectUri){
            // @unlink($file);
            unset($_SESSION[$uploader]['redirectUri']);
            header('Location: '. $redirectUri);
        }else{
            echo '跳转失败，请自行访问你的后台！';
        }
	}else{
		echo '该页面用于使用code换取access_token，请不要单独访问！';
	}