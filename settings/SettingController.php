<?php
	/**
	 * Created by PhpStorm.
	 * User: Bruce Xie
	 * Date: 2019-04-13
	 * Time: 02:37
	 */

namespace settings;

use uploader\UploadOnedrive;
use uploader\UploadGoogledrive;

class SettingController extends Controller {
	public $settings;
	public $storageTypes;
	public $storagesDir;
	
	public function __construct ()
	{
		if(is_file(APP_PATH.'/config/.config.json')){
			$settings = json_decode(file_get_contents(APP_PATH.'/config/.config.json'), true);
		}else{
			if(is_file(APP_PATH.'/config/config-local.php')){
				$settings = require(APP_PATH.'/config/config-local.php');
			}else if(is_file(APP_PATH.'/config/config.php')){
				$settings = require(APP_PATH.'/config/config.php');
			}else{
				throw new \Exception('No config-local.php or config.php found in "config/" directory!');
			}
		}
		$this->settings = $settings;
		$this->storageTypes = $settings['storageTypes'];
		$this->storagesDir = APP_PATH.'/config/.settings';
	}
	
	/**
	 * 获取存储引擎参数
	 * @param $params
	 *
	 * @return false|string
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function getStorageParams($params){
		$key = $params['key'];
		$jsonFile = $this->storagesDir.'/storage-'.$key.'.json';
		if(is_file($jsonFile)){
			$columns = json_decode(file_get_contents($jsonFile), true);
			$code = 0;
		}else{
			$columns = [];
			if(isset($this->storageTypes[$key])){
				$columns = $this->storageTypes[$key];
			}
			$code = 1;
		}
		unset($columns['name']);
		
		$returnArr = [
			'code' => $code,
			'data' => $columns,
		];
		//暂时用false
		$authorized = false;
		if(in_array($key, ['onedrive', 'googledrive', 'dropbox', 'imgur', 'azure', 'flickr'])){
			$config = $this->getMergeSettings();
			$constructorParams = ['config' => $config, 'argv' => '', 'uploadServer' => $key];
			$uploader = 'uploader\\Upload' . ucfirst($key);
			/** @var UploadOnedrive $upload */
			$upload = new $uploader($constructorParams);
			$token = $upload->getAccessToken();
			$authUrl = '';
			if($token){
				$authorized = true;
			}else{
				$authUrl = $upload->getAuthorizationUrl();
			}
			
			$returnArr['oauth'] = [
				'authorized' => $authorized,
				'authUrl' => $authUrl,
			];
		}
		return json_encode($returnArr);
	}
	
	/**
	 * 保存存储引擎参数
	 *
	 * @param $params
	 *
	 * @return false|string
	 */
	public function setStorageParams($params){
		$key = $params['key'];
		unset($_POST['key']);
		foreach($_POST as &$val){
			$val = trim($val);
		}
		if(in_array($key, ['github', 'gitee', 'gitlab'])){
			$arr = explode('/', $_POST['repo']);
			$_POST['repo'] = rtrim($arr[0]) . '/' . ltrim($arr[1]);
		}
		!is_dir($this->storagesDir) && mkdir($this->storagesDir, 0777);
		$jsonFile = $this->storagesDir.'/storage-'.$key.'.json';
        $config = json_encode($_POST, JSON_UNESCAPED_SLASHES);
        //在Win中，如果从"文件→属性→安全→对象名称"中复制路径，会多出一个你看不见的字符"\u202a"，只有变成
        //json后才看的见它的unicode，这样会导致路径明明存在程序却说不存在的情况，所以要把这个字符在json中去掉
        $config = str_replace('\u202a', '', $config);
		file_put_contents($jsonFile, $config);
		return json_encode([
			'code' => 0,
			'msg' => '保存成功！',
		], JSON_UNESCAPED_UNICODE);
	}
	
	/**
	 * 后台获取配置
	 *
	 * @return false|string
	 */
	public function getGeneralSettings(){
		//以下配置单独存储文件，是因为他们是可选的，是为了防止未选择它们时导致之前保存的数据丢失
		
		//=========================== 通用设置 开始 ===============================
		//通用设置，即storageTypes,watermark,customFormat外的部分，
		//因为storageTypes,watermark,customFormat是可选部分，每个key都单独存一个文件
		$generalSettingsFile = $this->storagesDir . '/general-settings.json';
		
		//如果后台有设置过，那么会存在该文件
		if(is_file($generalSettingsFile)){
			$generalSettings = json_decode(file_get_contents($generalSettingsFile), true);
			//对比配置文件中的项与单独保存的json文件中的项，如果配置文件中有新增，则添加进去
			$storageTypeFromWebConfig = array_keys($generalSettings['storageType']);
			$storageTypeFromConfigFile = array_keys($this->settings['storageTypes']);
			$diffKeys = array_diff($storageTypeFromConfigFile, $storageTypeFromWebConfig);
			if(!empty($diffKeys)){
				foreach ($diffKeys as $diffKey){
					$tmpStorageTypes = $this->settings['storageTypes'][$diffKey];
					$generalSettings['storageType'][$diffKey] = [
						'name' => isset($tmpStorageTypes['name']) ? $tmpStorageTypes['name'] : $diffKey
					];
				}
			}
		}else{
			//如果后台未设置，则从config目录下的config.php/config-local.php中读取，
			//当config-local.php存在时，config.php无效，否则才会读取config.php中的配置
			$generalSettings = $this->settings;
			
			//处理配置文件中的存储引擎数据为后台可用数据
			$storageType = [];
			foreach($this->storageTypes as $key=>$val){
				$storageType[$key] = [
					'isActive' => strpos(strtolower($this->settings['storageType']), $key)===false ? '0' : '1',
					'name' => (isset($val['name']) && $val['name']) ? $val['name'] : $key,
				];
			}
			$generalSettings['storageType'] = $storageType;
		}
		
		//=========================== 通用设置 结束 ===============================
		
		//=========================== 图片水印设置 开始 ===============================
		//图片水印设置
		$imageWatermarkFile = $this->storagesDir . '/image-watermark.json';
		//如果后台有保存则使用后台的
		if(is_file($imageWatermarkFile)){
			$imageWatermark = json_decode(file_get_contents($imageWatermarkFile), true);
		}else{
			//否则直接使用配置文件中的，但要处理水印图片的路径为后台可用路径
			$this->settings['watermark']['image']['watermark'] = '/static/watermark/'.$this->settings['watermark']['image']['watermark'];
			$imageWatermark = $this->settings['watermark']['image'];
		}
		//=========================== 图片水印设置 结束 ===============================
		
		//=========================== 文字水印设置 开始 ===============================
		//文字水印设置
		$textWatermarkFile = $this->storagesDir . '/text-watermark.json';
		//如果后台有保存则使用后台的
		if(is_file($textWatermarkFile)){
			$textWatermark = json_decode(file_get_contents($textWatermarkFile), true);
		}else{
			//否则直接使用配置文件中的，但要处理水印字体文件路径为后台可用路径，
			//以及水印文件名配置文件中是不保存的，但后台又需要，所以需要在这里添加
			$this->settings['watermark']['text']['fontFileName'] = $this->settings['watermark']['text']['fontFile'];
			$this->settings['watermark']['text']['fontFile'] = '/static/watermark/'.$this->settings['watermark']['text']['fontFile'];
			$textWatermark = $this->settings['watermark']['text'];
		}
		//=========================== 文字水印设置 开始 ===============================
		
		//=========================== 自定义返回链接格式 开始 ===============================
		//自定义返回链接格式
		$customFormatFile = $this->storagesDir . '/customFormat.json';
		//如果后台有保存则使用后台的
		if(is_file($customFormatFile)){
			$customFormat = json_decode(file_get_contents($customFormatFile), true);
		}else{
			//后台没有则直接使用配置文件中的(config-local.php存在会优先读取，否则读取config.php)
			$customFormat = $this->settings['customFormat'];
		}
		//=========================== 自定义返回链接格式 结束 ===============================
		
		//=========================== 常用目录 开始 ===============================
		//自定义返回链接格式
		$commonUsedDirFile = $this->storagesDir . '/common-used-dir.json';
		//如果后台有保存则使用后台的
		if(is_file($commonUsedDirFile)){
			$commonUsedDir = json_decode(file_get_contents($commonUsedDirFile), true);
		}else{
			//后台没有则直接使用配置文件中的(config-local.php存在会优先读取，否则读取config.php)
			$commonUsedDir = $this->settings['commonUsedDirs'];
		}
		//=========================== 常用目录 结束 ===============================
		
		//把以上配置合并到通用配置中
		$generalSettings['customFormat'] = $customFormat;
		$generalSettings['videoFormat'] = isset($generalSettings['videoFormat']) ? $generalSettings['videoFormat'] : $this->settings['videoFormat'];
		$generalSettings['audioFormat'] = isset($generalSettings['audioFormat']) ? $generalSettings['audioFormat'] : $this->settings['audioFormat'];
		$generalSettings['watermark']['image'] = $imageWatermark;
		$generalSettings['watermark']['text'] = $textWatermark;
		$generalSettings['commonUsedDirs'] = $commonUsedDir;
		
		return json_encode([
			'code' => 0,
			'data' => $generalSettings,
		], JSON_UNESCAPED_SLASHES);
	}
	
	/**
	 * 后台保存设置
	 * @return false|string
	 */
	public function setGeneralSettings(){
		!is_dir($this->storagesDir) && mkdir($this->storagesDir, 0777);
		$generalSettingsFile = $this->storagesDir.'/general-settings.json';
		$textWatermarkFile = $this->storagesDir.'/text-watermark.json';
		$imageWatermarkFile = $this->storagesDir.'/image-watermark.json';
		$customFormatFile = $this->storagesDir.'/customFormat.json';
		$commonUsedDirFile = $this->storagesDir . '/common-used-dir.json';
		
		$textWatermarkJson = json_encode($_POST['watermark']['text'], JSON_UNESCAPED_UNICODE);
		$imageWatermarkJson = json_encode($_POST['watermark']['image'], JSON_UNESCAPED_UNICODE);
		$customFormatJson = json_encode($_POST['customFormat'], JSON_UNESCAPED_UNICODE);
		
		$commonUsedDir = trim($_POST['commonUsedDir']);
		$commonUsedDirs = [];
		if($commonUsedDir){
			$commonUsedDirs = explode("\n", $commonUsedDir);
			//把每个元素去除两端空格，如果是空值则删除
			array_walk($commonUsedDirs, function(&$val, $key) use (&$commonUsedDirs){
				$val = trim($val);
				if($val == ''){
					unset($commonUsedDirs[$key]);
				}
			});
		}
		$commonUsedDirJson = json_encode(array_values($commonUsedDirs), JSON_UNESCAPED_UNICODE);
		
		unset($_POST['watermark']['text']);
		unset($_POST['watermark']['image']);
		unset($_POST['customFormat']);
		unset($_POST['commonUsedDir']);
		
		!isset($_POST['storageType']) && $_POST['storageType'] = [];
		!isset($_POST['watermark']['useWatermark']) && $_POST['watermark']['useWatermark'] = 0;
		!isset($_POST['watermark']['type']) && $_POST['watermark']['type'] = '';
		foreach($_POST as &$val){
			if(is_string($val)){
				$val = trim($val);
			}
		}
		$generalSettingsJson = json_encode($_POST, JSON_UNESCAPED_UNICODE);
		
		file_put_contents($textWatermarkFile, $textWatermarkJson);
		file_put_contents($imageWatermarkFile, $imageWatermarkJson);
		file_put_contents($customFormatFile, $customFormatJson);
		file_put_contents($generalSettingsFile, $generalSettingsJson);
		file_put_contents($commonUsedDirFile, $commonUsedDirJson);
		
		return json_encode([
			'code' => 0,
			'msg' => '保存成功',
		], JSON_UNESCAPED_UNICODE);
	}
	
	/**
	 * 合并获取后台设置的配置及配置文件中的配置
	 * @return mixed
	 */
	public function getMergeSettings(){
		//================获取存储引擎配置 开始===============
		$storagesFiles = glob(APP_PATH.'/config/.settings/storage-*');
		$storageTypes = [];
		if(!empty($storagesFiles)){
			//后台保存的存储引擎
			$backendStorageKeys = [];
			foreach($storagesFiles as $storagesFile){
				$key = str_replace('.json', '', substr($storagesFile, strrpos($storagesFile,'-') + 1));
				$backendStorageKeys[] = $key;
				$storageTypes[$key] = json_decode(file_get_contents($storagesFile), true);
			}
			$configStorageKeys = array_keys($this->settings['storageTypes']);
			//对比配置文件中的存储引擎，如果其中有某个存储引擎在后台配置中不存在，则把它合并到后台的配置中(当然只是合并输出，并未存储到后台)
			$storageKeys = array_diff($configStorageKeys, $backendStorageKeys);
			if(!empty($storageKeys)){
				foreach ($storageKeys as $storageKey){
					$storageTypes[$storageKey] = $this->settings['storageTypes'][$storageKey];
				}
			}
		}else{
			//否则直接从配置文件中获取（优先获取config-local.php，没有则获取local.php）
			$storageTypes = $this->settings['storageTypes'];
		}
		//替换年月日位符为当前年月日
		foreach($storageTypes as $key => $storageType){
			if(isset($storageTypes[$key]['directory']) && $storageTypes[$key]['directory']){
					$storageTypes[$key]['directory'] = strtr($storageTypes[$key]['directory'], ['{Y}'=>date('Y'), '{m}'=>date('m'), '{d}'=>date('d')]);
			}
		}
		//================获取存储引擎配置 结束===============
		
		//================获取通用配置 开始===============
		$generalSettingsFile = $this->storagesDir . '/general-settings.json';
		
		//如果后台有设置过，那么会存在该文件
		if(is_file($generalSettingsFile)){
			$generalSettings = json_decode(file_get_contents($generalSettingsFile), true);
			//把后台保存的通用配置处理为实际可用格式
			$tmpStorageType = '';
			foreach($generalSettings['storageType'] as $key=>$val){
				if(isset($val['isActive']) && $val['isActive']=="1"){
					$tmpStorageType .= ucfirst($key).',';
				}
			}
			$generalSettings['storageType'] = rtrim($tmpStorageType, ',');
		}else{
			//否则直接使用config-local.php或config.php中的配置
			$generalSettings = $this->settings;
		}
		//=====================获取通用配置 结束======================
		
		//=====================获取文字水印配置 开始==================
		$textWatermarkFile = $this->storagesDir . '/text-watermark.json';
		//如果后台有保存则使用后台的
		if(is_file($textWatermarkFile)){
			$textWatermark = json_decode(file_get_contents($textWatermarkFile), true);
		}else{
			//否则直接使用config-local.php或config.php配置文件中的，但要处理水印字体文件路径为正确相对路径
			$this->settings['watermark']['text']['fontFile'] = '/static/watermark/'.$this->settings['watermark']['text']['fontFile'];
			$textWatermark = $this->settings['watermark']['text'];
		}
		//=====================获取文字水印配置 结束====================
		
		//=====================获取图片水印配置 开始====================
		$imageWatermarkFile = $this->storagesDir . '/image-watermark.json';
		//如果后台有保存则使用后台的
		if(is_file($imageWatermarkFile)){
			$imageWatermark = json_decode(file_get_contents($imageWatermarkFile), true);
		}else{
			//否则直接使用配置文件中的，但要处理水印图片的路径为正确的相对路径
			$this->settings['watermark']['image']['watermark'] = '/static/watermark/'.$this->settings['watermark']['image']['watermark'];
			$imageWatermark = $this->settings['watermark']['image'];
		}
		//====================获取图片水印配置 结束====================
		
		//================获取自定义返回链接格式配置 开始===============
		$customFormatFile = $this->storagesDir . '/customFormat.json';
		//如果后台有保存则使用后台的
		if(is_file($customFormatFile)){
			$customFormat = json_decode(file_get_contents($customFormatFile), true);
		}else{
			//后台没有则直接使用配置文件中的(config-local.php存在会优先读取，否则读取config.php)
			$customFormat = $this->settings['customFormat'];
		}
		//================获取自定义返回链接格式配置 结束===============
		
		//合并配置
		$config = $generalSettings;
		$config['storageTypes'] = $storageTypes;
		
		$watermark = $generalSettings['watermark'];
		$watermark['text'] = $textWatermark;
		$watermark['image'] = $imageWatermark;
		$config['watermark'] = $watermark;
		
		$config['customFormat'] = $customFormat;
		return $config;
	}
	
	/**
	 * 上传水印图片
	 *
	 * @return false|string
	 */
	public function uploadWatermarkImage(){
		if(!isset($_FILES['watermark']['tmp_name'])){
			return json_encode([
				'code' => -1,
				'msg' => '上传出错',
			]);
		}
		$file = $_FILES['watermark'];
		if($path = $this->uploadFile($file)){
			return json_encode([
				'code' => 0,
				'msg' => '上传功能',
				'path' => $path,
				'name' => $file['name'],
			]);
		}
		return json_encode([
			'code' => -1,
			'msg' => '上传出错'
		]);
	}
	
	
	/**
	 * 上传文字水印字体文件
	 * @return false|string
	 */
	public function uploadFontFile(){
		if(!isset($_FILES['font-file']['tmp_name'])){
			return json_encode([
				'code' => -1,
				'msg' => 'upload faild',
			]);
		}
		$file = $_FILES['font-file'];
		if($path = $this->uploadFile($file)){
			return json_encode([
				'code' => 0,
				'msg' => 'upload success!',
				'path' => $path,
				'name' => $file['name'],
			]);
		}
		return json_encode([
			'code' => -1,
			'msg' => 'upload faild!'
		]);
	}
	
	/**
	 * 上传文件
	 * @param $file
	 *
	 * @return bool|string
	 */
	public function uploadFile($file){
		$ext = mb_substr($file['name'], strrpos($file['name'], '.'));
		$newName = md5(uniqid(microtime(true))).$ext;
		$relativeDir = '/uploads/'.date('Y/m/d');
		$absDir = APP_PATH . $relativeDir;
		!is_dir($absDir) && mkdir($absDir, 0777, true);
		$path = $absDir.'/'.$newName;
		if(!move_uploaded_file($file['tmp_name'], $path)){
			return false;
		}
		return $relativeDir.'/'.$newName;
	}
	
	/**
	 * 获取数据库配置
	 * @return array
	 */
	public function getDatabaseConfig(){
		$database = [];
		$generalSettingsFile = $this->storagesDir.'/general-settings.json';
		if(!is_file($generalSettingsFile)){
			if(isset($this->settings['database'])){
				$database = $this->settings['database'];
			}
		}else{
			$generalSettings = json_decode(file_get_contents($generalSettingsFile), true);
			if(isset($generalSettings['database'])){
				$database = $generalSettings['database'];
			}
		}
		
		return $database;
	}
	
	/**
	 * 获取常用目录
	 * @return false|string
	 */
	public function getCommonUsedDir() {
		//自定义返回链接格式
		$commonUsedDirsFile = $this->storagesDir . '/common-used-dir.json';
		//如果后台有保存则使用后台的
		if(is_file($commonUsedDirsFile)){
			$commonUsedDirs = json_decode(file_get_contents($commonUsedDirsFile), true);
		}else{
			//后台没有则直接使用配置文件中的(config-local.php存在会优先读取，否则读取config.php)
			$commonUsedDirs = $this->settings['commonUsedDirs'];
		}
		
		$curVal = '';
		$commonUsedDirsFile = $this->storagesDir . '/upload-dest-dir.json';
		if(is_file($commonUsedDirsFile)){
			$curVal = file_get_contents($commonUsedDirsFile);
		}
		
		return json_encode([
			'code' => 0,
			'data' => [
				'commonUsedDirs' => $commonUsedDirs,
				'curVal' => $curVal,
			],
		], JSON_UNESCAPED_SLASHES);
	}
	
	/**
	 * 设置所有云服务器的上传目录（smms,imgur,weibo等不可设置的除外）
	 * @return false|string
	 */
	public function setAllStorageTypeDirectory() {
		$directory = trim($_POST['directory']);
		
		$storagesFiles = glob($this->storagesDir . '/storage-*');
		$storageTypes = [];
		if(!empty($storagesFiles)){
			//后台保存的存储引擎
			$backendStorageKeys = [];
			foreach($storagesFiles as $storagesFile){
				$key = str_replace('.json', '', substr($storagesFile, strrpos($storagesFile,'-') + 1));
				$backendStorageKeys[] = $key;
				$storageTypes[$key] = json_decode(file_get_contents($storagesFile), true);
			}
			$configStorageKeys = array_keys($this->settings['storageTypes']);
			//对比配置文件中的存储引擎，如果其中有某个存储引擎在后台配置中不存在，则把它合并到后台的配置中(当然只是合并输出，并未存储到后台)
			$storageKeys = array_diff($configStorageKeys, $backendStorageKeys);
			if(!empty($storageKeys)){
				foreach ($storageKeys as $storageKey){
					$storageTypes[$storageKey] = $this->settings['storageTypes'][$storageKey];
				}
			}
		}else{
			//否则直接从配置文件中获取（优先获取config-local.php，没有则获取local.php）
			$storageTypes = $this->settings['storageTypes'];
		}
		
		foreach ($storageTypes as $key => $storageType){
			if(in_array($key, ['smms', 'imgur', 'weibo'])){
				continue;
			}
			$jsonFile = $this->storagesDir . '/storage-' . $key . '.json';
			$storageType['directory'] = $directory;
			file_put_contents($jsonFile, json_encode($storageType, JSON_UNESCAPED_SLASHES));
		}
		
		file_put_contents($this->storagesDir . '/upload-dest-dir.json', $directory);
		
		//同时修改所有存储服务器的上传路径
		return json_encode([
			'code' => 0,
			'msg' => 'success',
		]);
	}
	
	/**
	 *
	 * @param $data
	 *
	 * @return false|string
	 * @throws \Exception
	 */
	public function getAuthUrl($data){
		$config = $this->getMergeSettings();
		$key = ucfirst($data['key']);
		$constructorParams = ['config' => $config, 'argv' => '', 'uploadServer' => $key];
		$uploader = 'uploader\\Upload' . $key;
		/** @var UploadOnedrive $uploader */
		/** @var UploadGoogledrive $uploader */
		$authUrl = (new $uploader($constructorParams))->getAuthorizationUrl();
		!session_id() && session_start();
		$_SESSION[$key]['redirectUri'] = $data['uri'];
		return json_encode([
			'code' => 0,
			'authUrl' => $authUrl,
			'msg' => 'Please redirect to authUrl to ask for authorization.',
		]);
	}
}