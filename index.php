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

    define('APP_PATH', strtr(__DIR__, '\\', '/'));
    
    $localConfigFile = APP_PATH . '/config/config-local.php';
    if(is_file($localConfigFile)){
        $config = require APP_PATH . '/config/config-local.php';
    }else{
        $config = require APP_PATH . '/config/config.php';
    }
	
	require APP_PATH . '/thirdpart/bce-php-sdk-0.9/BaiduBce.phar';
	require APP_PATH . '/thirdpart/ufile-phpsdk/v1/ucloud/proxy.php';
	
	//autoload class
	spl_autoload_register(function ($class_name) {
		require_once APP_PATH . '/' . str_replace('\\', '/', $class_name) . '.php';
	});
	
	$isMweb = false;
	if(isset($_FILES['mweb'])){
		$isMweb = true;
		$_FILES['file'] = $_FILES['mweb'];
	}
	
	//if has post file
    if(isset($_FILES['file']) && $files = $_FILES['file']){
		//receive multi file upload
	    if(is_array($files['tmp_name'])){
		    $argv = [];
		    foreach($files['tmp_name'] as $key=>$tmp_name){
			    $dest = APP_PATH.'/.tmp/.'.$files['name'][$key];
			    if(move_uploaded_file($tmp_name, $dest)){
				    $argv[] = $dest;
			    }
		    }
	    }else{
	    	//receive single file upload
		    $dest = APP_PATH.'/.tmp/.'.$files['name'];
		    $tmp_name = $files['tmp_name'];
		    if(move_uploaded_file($tmp_name, $dest)){
			    $argv[] = $dest;
		    }
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

	//getPublickLink
    $link = (new uploader\Upload($argv, $config))->getPublickLink([
    	'is_mweb' => $isMweb,
    ]);
    
    //如果是MWeb，则返回Mweb支持的json格式
    if($isMweb){
	    $data = [
		    'code' => 'success',
		    'data' => [
			    'filename' => $_FILES['file']['name'],
			    'url' => $link,
		    ],
	    ];
	    header('Content-Type: application/json; charset=UTF-8');
	    $json = json_encode($data);
	    // file_put_contents('/Users/bruce/Downloads/picuploader.txt', $json, FILE_APPEND);
	    echo $json;
    }else{
    	//如果是client模式，则直接返回链接
	    echo $link;
    }