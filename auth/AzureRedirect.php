<?php
	/**
	 * Created by PhpStorm.
	 * User: Bruce Xie
	 * Date: 2019-10-25
	 * Time: 15:39
	 */
	
	use settings\SettingController;
	
	require '../vendor/autoload.php';
	
	define('APP_PATH', strtr(dirname(__DIR__), '\\', '/'));
	
	//autoload class
	spl_autoload_register(function ($class_name) {
		require_once APP_PATH . '/' . str_replace('\\', '/', $class_name) . '.php';
	});
    
    $uploader = ucfirst(str_replace('Redirect.php', '', basename(__FILE__)));
	if(isset($_GET['code'])){
		//获取到code之后，再用code去换取access token
		$config = call_user_func([(new SettingController()), 'getMergeSettings']);
		$constructorParams = ['config' => $config, 'argv' => '', 'uploadServer' => $uploader];
		$uploadClass = 'uploader\\Upload'. $uploader;
		$accesstoken = (new $uploadClass($constructorParams))->getAccessToken($_GET['code']);
		// var_dump($accesstoken);exit;
		//跳转回原页面
        session_start();
        $redirectUri = isset($_SESSION[$uploader]['redirectUri']) ? $_SESSION[$uploader]['redirectUri'] : '';
        if(isset($redirectUri) && $redirectUri){
            // @unlink($file);
            unset($_SESSION[$uploader]['redirectUri']);
            header('Location: '. $redirectUri);
        }else{
            echo '跳转失败，请自行访问你的后台！';
        }
	}else if(isset($_GET['error']) && isset($_GET['error_description'])){
		echo $_GET['error_description'];
	}else{
		echo '该页面用于使用code换取access_token，请不要单独访问！';
	}