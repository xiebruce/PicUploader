<?php
	/**
	 * Created by PhpStorm.
	 * User: Bruce Xie
	 * Date: 2019-10-25
	 * Time: 15:39
	 */
    
    //特立独行的Imgur竟然把用code换取access_token的步骤省略了，直接一步authorize就能获取到access_token
    //而且竟然把所有参数放在#号后面而不是?号后面，导致不能直接用$_GET获取，事实上PHP是无法获取的，只能用js
    //而且返回的expire_in值竟然是10年(单位按秒算的话)
    //参见：https://apidocs.imgur.com/?version=latest，在里面搜索"Forming the authorization URL"

    //返回的链接格式：https://api.picuploader.com/auth/ImgurRedirect.php#access_token=9582bdd***********8bed08e15b9c&expires_in=315360000&token_type=bearer&refresh_token=1f9d4d3************4513192&account_username=xiediebruce&account_id=96115121
    
    //这段主要是用js把#号为成?号，以便php可以获取参数
    if(empty($_GET)){
        $js = <<<EOF
        <script>
            let arr = window.location.href.split('#');
            window.location.href = arr[0] + '?' + arr[1];
        </script>
    EOF;
    
        echo $js;
        exit;
    }
    
    //--------------------------------------------------------------
    session_start();
    require '../vendor/autoload.php';
    
    use uploader\UploadImgur;
    use settings\SettingController;
    
    define('APP_PATH', strtr(dirname(__DIR__), '\\', '/'));
    
    //autoload class
    spl_autoload_register(function ($class_name) {
        require_once APP_PATH . '/' . str_replace('\\', '/', $class_name) . '.php';
    });
    
    $uploader = ucfirst(str_replace('Redirect.php', '', basename(__FILE__)));
    if(isset($_GET['access_token'])){
        $config = call_user_func([(new SettingController()), 'getMergeSettings']);
        $constructorParams = ['config' => $config, 'argv' => '', 'uploadServer' => $uploader];
        $uploadClass = 'uploader\\Upload'. $uploader;
        //保存access_token
        (new $uploadClass($constructorParams))->setAccessToken($_GET);
        $redirectUri = isset($_SESSION[$uploader]['redirectUri']) ? $_SESSION[$uploader]['redirectUri'] : '';
        if(isset($redirectUri) && $redirectUri){
            // @unlink($file);
            unset($_SESSION[$uploader]['redirectUri']);
            header('Location: '. $redirectUri);
        }else{
            echo '跳转失败，请自行访问你的后台！';
        }
    }else{
        echo '该页面是Imgur回调页面，请不要直接访问！';
    }
    
    