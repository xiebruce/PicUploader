<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-08-29
 * Time: 00:35
 */

    /*
     * 关于$argv与$argc变量，这两个变量是php作为脚本执行时，获取输入参数的变量
     * 比如 php test.php aa bb，那么在test.php里打印$argv变量就是一个数组，包含3个元素test.php, aa, bb，而$argc就是$argv的元素个数，相当于count($argc)
     */

    date_default_timezone_set('Asia/Shanghai');

    require 'vendor/autoload.php';
    require 'common/EasyImage.php';

    define('APP_PATH', __DIR__);
    
    $localConfigFile = __DIR__ . '/config/config-local.php';
    if(is_file($localConfigFile)){
        $config = require __DIR__ . '/config/config-local.php';
    }else{
        $config = require __DIR__ . '/config/config.php';
    }

    if(strtolower($config['storageType']) == 'netease'){
        require __DIR__ . '/vendor/qcloud/cos-sdk-v5/cos-autoloader.php';
    }
    if(strtolower($config['storageType']) == 'baidu'){
        require __DIR__ . '/thirdpart/bce-php-sdk-0.9/BaiduBce.phar';
    }
	
	//autoload class
	spl_autoload_register(function ($class_name) {
		require_once __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
	});
    
    //去除第一个元素（因为第一个元素是index.php，因为$argv是linux/mac的参数，
    //用php执行index.php的时候，index.php也算是一个参数）
    array_shift($argv);
    echo (new uploader\Upload($argv, $config))->getPublickLink();

