<?php
	/**
	 * Created by PhpStorm.
	 * User: bruce
	 * Date: 2018-08-29
	 * Time: 00:35
	 */
	
	/*
	 * 关于$argv与$argc变量，这两个变量是php作为脚本执行时，获取输入参数的变量
	 * 比如执行： php test.php aa bb，那么在test.php里打印$argv变量就是一个数组，包含3个元素test.php, aa, bb，而$argc就是$argv的元素个数，相当于count($argc)，当然也可用$_SERVER['argv']，$_SERVER['argc']表示。
	 */
	
	use uploader\Common;
	use settings\SettingController;
	
	date_default_timezone_set('Asia/Shanghai');
	
	require 'vendor/autoload.php';
	require 'common/EasyImage.php';
	
	define('APP_PATH', strtr(__DIR__, '\\', '/'));
	
	require APP_PATH . '/thirdpart/ufile-phpsdk/v1/ucloud/proxy.php';
	require APP_PATH . '/thirdpart/eSDK_Storage_OBS_V3.1.3_PHP/obs-autoloader.php';
	//金山云的define数据
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
	 * @var bool $isWeb
	 * @var bool $isUeditor
     */
	$plugins = ['mweb','picgo','sharex','upic','web','ueditor'];
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
	//因为第三方工具(如mweb,upic)及网页版会把图片post上传到这里
	$deleteOriginalFile = true;
	//当$argv不存在(表示是客户端上传文件)或argv存在但没有元素(这种情况理论上不可能存在)
    //或只有一个元素(index.php后面无参数)则把$argv置空，因为它没有实际要上传的文件路径参数
	if(!isset($argv) || count($argv)<2){
        $argv = [];
    }
	
	if(isset($_FILES['file']) && $files = $_FILES['file']){
	    $postFile = true;
		$tmpDir = APP_PATH.'/.tmp';
		!is_dir($tmpDir) && @mkdir($tmpDir, 0777);
		//handle receive multi file upload
		if(is_array($files['tmp_name'])){
			foreach($files['tmp_name'] as $key=>$tmp_name){
				$ext = mb_substr($files['name'][$key], strrpos($files['name'][$key], '.'));
				if (strtolower($ext) == '.php'){
					continue;
				}
				$dest = $tmpDir.'/'.$files['name'][$key];
				if(move_uploaded_file($tmp_name, $dest)){
					$argv[] = $dest;
				}
			}
		}else{
			//handle receive single file upload
			$dest = $tmpDir.'/'.$files['name'];
			$tmp_name = $files['tmp_name'];
			$ext = mb_substr($files['name'], strrpos($files['name'], '.'));
			if (strtolower($ext) != '.php'){
				if(move_uploaded_file($tmp_name, $dest)){
					$argv[] = $dest;
				}
			}
		}
		//如果有传参数
	}else if(isset($argv[1])){
        if($argv[1]=='--type=alfred'){
            $alfred = true;
            $imgPath = (new Common())->getImageFromClipboard();
            if(is_file($imgPath)){
                $argv = [$imgPath];
            }else{
                $argv = [];
            }
        }else if($argv[1]=='--type=typora'){
            $typora = true;
            //把第一个index.php和第二个--type=typora去掉，剩下的都是图片路径
            count($argv) > 2 && $argv = array_slice($argv,2);
        }else if($argv[1]=='--type=python'){
            $deleteOriginalFile = false;
            $python = true;
            count($argv) > 2 && $argv = array_slice($argv,2);
        }else{
            //只有右击上传时，不删除源文件(从剪贴板粘贴或通过接口上传，源文件其实都是在临时文件目录里，
            //所以要删除源文件，因为这个所谓的“源文件”已经不是最初上传的那个源文件了)
            $deleteOriginalFile = false;
            //去除第一个元素（因为第一个元素是index.php，$argv可接收client方式执行时的参数，
            //用php执行index.php的时候，index.php也算是一个参数）
            count($argv) > 1 && $argv = array_slice($argv,1);
        }
    }
	// var_dump($argv);exit;
	//提示没有图片可上传(只有在没有截图到剪贴板的情况下直接按上传快捷键会导致$argv为空)
    //事实上最后一个非python上传可以不用判断(因为在python那边判断了根本不走这边，但判断了也不碍事)
	if(empty($argv) && !isset($postFile) && !isset($typora) && !isset($python)){
	    //提示没图片
		(new Common())->sendNotification('no_image');
		exit;
	}
	
	//处理在Linux中右键上传时，传过来的路径中可能有反斜杠的情况(去掉反斜杠)
    PHP_OS != 'WINNT' && array_walk($argv, function (&$item){
       $item = stripslashes($item);
    });
 
	/*
	 1.python快捷键上传：无论Mac还是Win，都在Python那边做了提示，这里不需要处理
	 2.右击上传：
		Mac: 需要提示上传中(按目前的配置是不会提示的)
		Win: 不需要提示，Win右击上传由于任务栏会闪现php-cgi，当图标显示就表明是上传中，但还是要通知
	 3.Alfred/WinHotKey快捷键上传：
		Alfred(Mac): 要提示
		WinHotKey(Win): 要提示，不过因为调用时用了--type=alfred，所以还是相当于Alfred
	
	 总的来说就是：不是post上传文件，也不是typora上传，也不是python那边调用上传的情况下，就要提示
	*/
	if(!isset($postFile) && !isset($typora) && !isset($python)){
		//提示上传中
		(new Common())->sendNotification('uploading');
	}
	// file_put_contents('/Users/bruce/Downloads/qcloud.txt', var_export($argv,true));exit;
	$uploader = 'uploader\Upload';
	// $uploader = 'uploader\UploadCoroutine';
	//getPublickLink
    $doDotFormat = $isMweb || $isPicgo || $isSharex || $isUpic || isset($typora) || strtolower($config['storageType'])=='onedrive' || $isUeditor;
	$link = call_user_func_array([(new $uploader($argv, $config)), 'getPublickLink'], [
		[
            'isWeb' => $isWeb,
			'doNotFormat' => $doDotFormat,
			'deleteOriginalFile' => $deleteOriginalFile,
		]
	]);
	
	//如果是MWeb/PicGo/ShareX/Upic/Web等，则返回它们支持的json格式
	if($isMweb || $isPicgo || $isSharex || $isUpic || $isWeb){
		// mweb或sharex接收的json格式
		$data = [
			'code' => 'success',
			'data' => [
				'filename' => htmlspecialchars($_FILES['file']['name']),
				'url' => $isWeb ? $link['formatLink'] : $link,
                //专用于web上传，其它客户端上传该参数无用
                'notFormatUrl' => $isWeb ? $link['notFormatLink'] : '',
			],
		];
		
		header('Content-Type: application/json; charset=UTF-8');
		$json = json_encode($data, JSON_UNESCAPED_UNICODE);
		echo $json;
	}else if(isset($typora)){
		echo $link;
	}else{
	    if(PHP_OS != 'Darwin'){
            /*
             * Windows
             * 右击上传：会自动复制到剪贴板(命令里有输出到剪贴板)
             * 快捷键上传：
             *  1.WinHotKey: 不会自动复制，所以这里要复制一下(由于WinHotKey
             *  调用的命令加了--type=alfred，所以这里判断alfred的就复制)
             *  2.Pyhon: python里有复制到剪贴板，所以这里不需要
             * ========================================================
             * Linux
             * 右击上传：会自动复制到剪贴板(命令里有输出到剪贴板)
             * 快捷键上传：
             *  1.系统可设置快捷键上传，本质也是执行命令，所以命令里可以输出到剪贴板
             *  2.Python: python里有复制到剪贴板，所以这里不需要
             */
            if(isset($alfred)){
                (new Common())->copyPlainTextToClipboard($link);
            }else{
                echo $link;
            }
        }else{
            /**
             * macOS
             * 快捷键上传:
             *  1.Alfred: 不需要在这里复制到剪贴板，因为Alfred会做这事儿
             *  2.Python: 不需要在这里复制到剪贴板，因为Python那边有做这事儿
             *
             * 非快捷键上传：
             *  1.右击上传: 右击上传最终调用的命令里会复制到剪贴板，不需要在这里做这事儿
             *  2.直接在终端执行: 这种情况如果后面没有跟复制到剪贴板的命令就不会复制
             *  到剪贴板，但用终端执行只是调试，真正使用不会这么用，所以可以不管。
             * ================================================================
             * Windows:
             * 右击上传：会自动复制到剪贴板(命令里有输出到剪贴板)
             * 快捷键上传：
             *  1.WinHotKey: 不会自动复制，所以这里要复制一下(由于WinHotKey
             *  调用的命令加了--type=alfred，所以这里判断alfred的就复制)
             *  2.Pyhon: python里有复制，所以这里不需要
             */
            echo $link;
        }
		
		//只要非第三方客户端或网页上传，都要通知上传成功还是失败
        /*
         * 这个也带https，但不能认为是成功
         * sh: -c: line 0: syntax error near unexpected token `('
sh: -c: line 0: `echo cURL error 28: Operation timed out after 30005 milliseconds with 0 bytes received (see http://curl.haxx.se/libcurl/c/libcurl-errors.html) | pbcopy'
         */
        //?号表示[s]可能是0个或1个
		if(!strpos($link, 'Operation timed out') && preg_match('/http[s]?:\/\/(.*?)$/', $link)){
			//通知上传成功
			(new Common())->sendNotification('success');
		}else{
			//通知上传失败
			(new Common())->sendNotification('failed');
		}
	}