<?php
	define('APP_PATH', strtr(__DIR__, '\\', '/'));
	
	// 历史记录页面
	if(isset($_GET['history']) && $_GET['history']==1){
		include APP_PATH.'/settings/history.php';
		exit;
	}
	
	if(is_file(APP_PATH . '/config/config-local.php')){
		$config = require APP_PATH . '/config/config-local.php';
	}else{
		$config = require APP_PATH . '/config/config.php';
	}
	file_put_contents(APP_PATH . '/config/.config.json', json_encode($config, JSON_UNESCAPED_UNICODE));
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dashboard-PicUploader</title>
<!--	<link href="/static/rgbaColorPicker/rgbaColorPicker.css" rel="stylesheet">-->
<!--	<script src="/static/rgbaColorPicker/rgbaColorPicker.js"></script>-->
	
	<script src="/static/js/clipboard.js"></script>
	<script src="https://cdn.staticfile.org/jquery/3.4.1/jquery.min.js"></script>
	
	<!-- 依赖jQuery -->
	<link href="/static/Spectrum-ColorPicker/spectrum.css" rel="stylesheet">
	<script src="/static/Spectrum-ColorPicker/spectrum.js"></script>
	
	<link href="/static/ImageViewer/imageviewer.css" rel="stylesheet">
	<script src="/static/ImageViewer/imageviewer.min.js"></script>
	
	<link href="/static/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link href="/static/css/dashboard.css" rel="stylesheet">
	<script src="/static/js/dashboard.js"></script>
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="logo">
				<img src="/static/images/PicUploader.png">
			</div>
			<div class="backend">PicUploader</div>
		</div>
		<div class="body">
			<div class="left-bar">
				<div class="icons upload-image" title="上传图片">
					<i class="fa fa-cloud-upload"></i>
				</div>
				<div class="icons general-setting" title="通用设置">
					<i class="fa fa-cog"></i>
				</div>
				<div class="icons cloud-storage" title="设置云存储服务器参数">
					<i class="fa fa-cloud"></i>
					<div class="sub-left-bar">
						<!--<i class="fa fa-times-circle close"></i>-->
						<ul class="list">
							<?php foreach($config['storageTypes'] as $key=>$storageType):?>
							<li data-key="<?=$key?>" class="cloud"><?=(isset($storageType['name']) && $storageType['name']) ? $storageType['name'] : $key?></li>
							<?php endforeach;?>
						</ul>
					</div>
				</div>
				<div class="icons upload-history" title="上传历史">
					<i class="fa fa-history"></i>
				</div>
			</div>
			<div class="main">
				<div class="show-save-tip">
					<div class="show-save-tip-text">可按“ctrl+s(Win)”或“cmd+s(Mac)”保存</div>
				</div>
				<div class="form-area">
					<form class="cloud-setting">
						<!-- 动态插入 -->
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>