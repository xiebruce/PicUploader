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
    require 'EasyImage.php';
    require 'Upload.php';
    if(is_file(__DIR__.'/config-local.php')){
        $config = require 'config-local.php';
    }else{
        $config = require 'config.php';
    }

    use PicUploader\Upload;

    echo (new Upload($config,$argv))->getPublickLink();

