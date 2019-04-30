<?php
	/**
	 * Created by PhpStorm.
	 * User: Bruce Xie
	 * Date: 2019-04-13
	 * Time: 03:10
	 */
	
	require '../vendor/autoload.php';
	
	define('APP_PATH', strtr(dirname(__DIR__), '\\', '/'));
	spl_autoload_register(function ($class_name) {
		require_once APP_PATH . '/' . str_replace('\\', '/', $class_name) . '.php';
	});
	
	$func = $_GET['func'] ?? '';
	//处理横杠分隔的函数名为大写字母
	if(strpos($func, '-')){
		$arr = explode('-', $func);
		foreach ($arr as $key => &$val){
			if($key>0){
				$val = ucfirst($val);
			}
		}
		$func = join('', $arr);
	}
	
	$className = '\\settings\\'.(!isset($_GET['class']) ? 'SettingController' : $_GET['class']);
	if($func){
		$json = call_user_func_array(array((new $className()), $func), [$_REQUEST]);
		echo $json;
	}