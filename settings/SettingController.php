<?php
	/**
	 * Created by PhpStorm.
	 * User: Bruce Xie
	 * Date: 2019-04-13
	 * Time: 02:37
	 */

namespace settings;

class SettingController {
	public $settings;
	public $storageTypes;
	public $storagesDir;
	
	public function __construct ()
	{
		$settings = json_decode(file_get_contents(APP_PATH.'/config/.config.json'), true);
		/*foreach ($settings['storageTypes'] as &$setting){
			unset($setting['name']);
		}*/
		$this->settings = $settings;
		$this->storageTypes = $settings['storageTypes'];
		$this->storagesDir = APP_PATH.'/config/.settings';
	}
	
	/**
	 * 获取存储引擎参数
	 * @param $params
	 *
	 * @return false|string
	 */
	public function getStorageParams($params){
		$key = $params['key'];
		file_put_contents(__DIR__.'/test.txt','3242');
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
		return json_encode([
			'code' => $code,
			'data' => $columns,
		]);
	}
	
	/**
	 * 保存存储引擎参数
	 *
	 * @param $params
	 *
	 * @return false|string
	 */
	public function setStorageParams ($params){
		$key = $params['key'];
		unset($_POST['key']);
		
		!is_dir($this->storagesDir) && mkdir($this->storagesDir, 0777);
		$jsonFile = $this->storagesDir.'/storage-'.$key.'.json';
		file_put_contents($jsonFile, json_encode($_POST, JSON_UNESCAPED_SLASHES));
		return json_encode([
			'code' => 0,
			'msg' => '保存成功！',
		], JSON_UNESCAPED_UNICODE);
	}
	
	/**
	 * 返回在后台设置的配置
	 *
	 * @return false|string
	 */
	public function getGeneralSettings(){
		//以下配置单独存储文件，是因为他们是可选的，是为了防止未选择它们时导致之前保存的数据丢失
		
		//通用设置
		$generalSettingsFile = $this->storagesDir . '/general-settings.json';
		if(is_file($generalSettingsFile)){
			$generalSettings = json_decode(file_get_contents($generalSettingsFile), true);
		}else{
			unset($this->settings['storageTypes']);
			$generalSettings = $this->settings;
			
			//处理配置文件中的数据为后台可用数据
			//存储引擎
			$storageType = [];
			foreach($this->storageTypes as $key=>$val){
				$storageType[$key] = [
					'isActive' => strpos(strtolower($this->settings['storageType']), $key)===false ? '0' : '1',
					'name' => $val['name'],
				];
			}
			$generalSettings['storageType'] = $storageType;
			
			//允许上传的图片类型
			$allowMimeTypes = [];
			foreach($this->settings['allowMimeTypes'] as $key=>$val){
				$allowMimeTypes[$key] = [
					'isActive' => 1,
					'value' => $val,
				];
			}
			$generalSettings['allowMimeTypes'] = $allowMimeTypes;
		}
		
		//自定义返回链接格式
		$customFormatFile = $this->storagesDir . '/customFormat.json';
		if(is_file($customFormatFile)){
			$customFormat = json_decode(file_get_contents($customFormatFile), true);
		}else{
			$customFormat = $this->settings['customFormat'];
		}
		
		//图片水印设置
		$imageWatermarkFile = $this->storagesDir . '/image-watermark.json';
		if(is_file($imageWatermarkFile)){
			$imageWatermark = json_decode(file_get_contents($imageWatermarkFile), true);
		}else{
			$this->settings['watermark']['image']['watermark'] = '/static/watermark/'.$generalSettings['watermark']['image']['watermark'];
			$imageWatermark = $this->settings['watermark']['image'];
		}
		
		//文字水印设置
		$textWatermarkFile = $this->storagesDir . '/text-watermark.json';
		if(is_file($textWatermarkFile)){
			$textWatermark = json_decode(file_get_contents($textWatermarkFile), true);
		}else{
			$this->settings['watermark']['text']['fontFile'] = '/static/watermark/'.$generalSettings['watermark']['text']['fontFile'];
			$this->settings['watermark']['text']['fontFileName'] = $generalSettings['watermark']['text']['fontFile'];
			$textWatermark = $this->settings['watermark']['text'];
		}
		
		//把以上配置合并到通用配置中
		$generalSettings['customFormat'] = $customFormat;
		$generalSettings['watermark']['image'] = $imageWatermark;
		$generalSettings['watermark']['text'] = $textWatermark;
		
		//存储引擎配置
		$storagesFiles = glob($this->storagesDir.'/storage-*');
		$storageTypes = [];
		if(!empty($storagesFiles)){
			foreach($storagesFiles as $storagesFile){
				$key = str_replace('.json', '', substr($storagesFile, strrpos($storagesFile,'-') + 1));
				$storageTypes[$key] = json_decode(file_get_contents($storagesFile), true);
			}
		}
		
		//合并所有配置
		$config = array_merge($generalSettings, ['storageTypes' => $storageTypes]);
		
		return json_encode([
			'code' => 0,
			'data' => $config,
		], JSON_UNESCAPED_SLASHES);
	}
	
	public function setGeneralSettings(){
		!is_dir($this->storagesDir) && mkdir($this->storagesDir, 0777);
		$generalSettingsFile = $this->storagesDir.'/general-settings.json';
		$textWatermarkFile = $this->storagesDir.'/text-watermark.json';
		$imageWatermarkFile = $this->storagesDir.'/image-watermark.json';
		$customFormatFile = $this->storagesDir.'/customFormat.json';
		
		$textWatermarkJson = json_encode($_POST['watermark']['text'], JSON_UNESCAPED_UNICODE);
		$imageWatermarkJson = json_encode($_POST['watermark']['image'], JSON_UNESCAPED_UNICODE);
		$customFormatJson = json_encode($_POST['customFormat'], JSON_UNESCAPED_UNICODE);
		unset($_POST['watermark']['text']);
		unset($_POST['watermark']['image']);
		unset($_POST['customFormat']);
		
		!isset($_POST['allowMimeTypes']) && $_POST['allowMimeTypes'] = [];
		!isset($_POST['storageType']) && $_POST['storageType'] = [];
		!isset($_POST['watermark']['useWatermark']) && $_POST['watermark']['useWatermark'] = 0;
		!isset($_POST['watermark']['type']) && $_POST['watermark']['type'] = '';
		$generalSettingsJson = json_encode($_POST, JSON_UNESCAPED_UNICODE);
		
		file_put_contents($textWatermarkFile, $textWatermarkJson);
		file_put_contents($imageWatermarkFile, $imageWatermarkJson);
		file_put_contents($customFormatFile, $customFormatJson);
		file_put_contents($generalSettingsFile, $generalSettingsJson);
		
		return json_encode([
			'code' => 0,
			'msg' => '保存成功',
		], JSON_UNESCAPED_UNICODE);
	}
	
	/**
	 * 上传水印图片
	 * @param $params
	 *
	 * @return false|string
	 */
	public function uploadWatermarkImage($params){
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
}