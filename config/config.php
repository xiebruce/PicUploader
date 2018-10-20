<?php
	/**
	 * Created by PhpStorm.
	 * User: bruce
	 * Date: 2018-08-30
	 * Time: 14:58
	 */
	
	$config = [
		'storageTypes' => [
			//Qiniu Cloud
			'qiniu' => [
				//七牛云AppKey
				'AK' => 'ASG********************************0AoF',
				//七牛云AppSecret
				'SK' => 'Uo*********************************lkEy',
				//七牛云对象存储空间名
				'bucket' => 'markdown',
				//七牛云外链域名
				'domain' => 'http://pe5scgdex.bkt.clouddn.com',
				//七牛优化参数，直接加在链接后面，但是不会优化原图，只会优化输出的图片，如果不需要可以不配置该项（即注释掉）
				// 'optimize' => '?imageMogr2/thumbnail/800x/strip/quality/80',
			],
			
			//Tencent Cloud
			'tencent' => [
				'appId' => '1*******0',
				'secretId' => 'AKID*********************************ut33',
				'secretKey' => 'zlK*********************************tjLn2',
				'bucket' => 'markdown-*******',
				'region' => 'ap-guangzhou',
			],
			
			//Netease Cloud
			'netease' => [
				'accessKey' => '4bd5*********************************7b',
				'accessSecret' => '465*****************************82db',
				'bucket' => 'markdown-bucket',
				//endPoint不是域名，域名是 bucket.'.'.endPoint
				'endPoint' => 'nos-eastchina1.126.net',
			],
			
			//baidu Cloud
			'baidu' => [
				'bosConfig' => [
					'credentials' => [
						'accessKeyId' => '4fdda********************b5',
						'secretAccessKey' => 'ddd6****************3a3',
					],
					'endpoint' => 'http://gz.bcebos.com',
				],
				'bucket' => 'markdown',
				'domain' => 'http://markdown.gz.bcebos.com',
			],
			//JCloud
			'jd' => [
				'key' => '050***********************B',
				'secret' => 'E1C******************8A6F',
				'endpoint' => 'https://s3.cn-south-1.jcloudcs.com',
				'region' => 'cn-south-1',
				'bucket' => 'markdown',
			],
			//Aliyun Cloud
			'aliyun' => [
				'accessKey' => 'cD********aL',
				'accessSecret' => 'dN***************V4h2',
				'bucket' => 'bruce-markdown',
				'endpoint' => 'oss-cn-shenzhen.aliyuncs.com',
			],
			
			//Upyun Cloud
			'upyun' => [
				'serviceName' => 'bl******wn',
				'operator' => '*******',
				'password' => '**************',
				'domain' => 'http://blog-markdown.test.upcdn.net',
			],
			
			//https://sm.ms
			'smms' => [
				'baseUrl' => 'https://sm.ms/api/',
				//代理地址，如果使用shadowsocks做代理，ip填127.0.0.1即可，端口从『偏好设置→HTTP→监听端口』找
				//留空或注释掉表示不使用代理
				// 'proxy' => 'http://127.0.0.1:1087',
			],
		],
		
		//图片优化宽度（建议填1000），值为0或注释掉表示不优化
		'imgWidth' => 1000,
		
		//链接类型，三个值，normal, markdown, markdownWithLink，不填或者填的值不在这三个值里，按normal算
		//其中markdownWithLink表示点击后会跳转到图片源地址
		'linkType' => 'markdown',
		
		//存储服务器，值为：Qiniu/Tecent/Netease/Baidu/Aliyun/Jd/Upyun/smms 其中之一
		'storageType' => 'Qiniu',
		
		//set this option to find your upload logs more easily
		'logPath' => '/Users/xxxx/Desktop',
		
		//the allowed MIME type
		'allowMimeTypes' => ['image/jpeg', 'image/png', 'image/gif'],
		
		//watermark/水印
		'watermark' => [
			//两个值，0或1，0表示不添加水印，1表示添加水印
			'useWatermark' => 1,
			
			//水印类型，支持图片水印和文字水印：image或text，如果是image，请填写以下image配置
			//如果是text，请填写以下的text配置。
			'type' => 'image',
			
			//position有四种值，分别对应图片四个角：top-left/top-right/bottom-left/bottom-right/left/right/top/bottom/center
			//对应：左上/右上/左下/右下/左/右/上/下/中间，默认是右下
			'position' => 'center',
			
			//图片水印配置
			'image' => [
				//alpha值为0-100，0完全透明(看不见)，100完全不透明（即数字越靠近0越透明，越靠近100越不透明）
				'alpha' => 50,
				
				//水印图片名称，默认为watermark.png，请把static/watermark/watermark.png替换为你自己的水印即可
				'watermark' => 'watermark.png',
				
				//设置离边界的距离，设置右边和下边距离，请用负数，设置左边和上边距离，请用正数
				//当你设置水印在右下角时，需要设置的距离为右边和下边（x、y都用负数）
				//当你设置水印在右上角时，需要设置的距离为右边和上边（x用负数，y用正数）
				//当你设置水印在左上角时，需要设置的距离为左边和上边（x、y都用正数）
				//当你设置水印在左下角时，需要设置的距离为左边和上边（x用正数，y用负数）
				//当你设置水印在中间时，需要设置的距离为左边和上边（x、y都用正数将会稍向右下偏移，都用负数则会稍向右上偏移）
				//如果还是搞不懂，自己随便设置个值试一下，正的不行就用负，试一试就懂了
				'offset' => [
					//设置距离左右边界的距离
					'x' => -10,
					//设置距离上下边界的距离
					'y' => -10,
				],
			],
			
			//文字水印配置（当type=text时，该配置才会用到）
			'text' => [
				//水印文字
				'word' => "这是水印",
				
				//文字颜色，有两种格式，1、使用标准的16进制色值（文字无透明度），2、使用rgba颜色（可让文字带透明度）
				// 'color' => '#ff0000',
				//rgba格式颜色，可设置透明度，rgb分别是红绿蓝光的三原色，取值范围都是：0-255
				'color' => [
					'r' => 255,
					'g' => 0,
					'b' => 0,
					//a表示透明度，为0-127.0之间，0为完全不透明，数字越大越透明，直到127.0为完全透明(即透明成看不见)
					'a' => 110,
				],
				
				//字体文件名（字体文件必须为.ttf格式，且必须放在static/watermark文件夹下）
				//下载字体网站：http://www.17ziti.com（字体之家）
				'font' => '经典粗黑简.ttf',
				
				//字体大小，整型数字，数字越大字体越大
				'fontSize' => 30,
				
				//逆时针旋转角度(0-360)，如果要顺时针旋转，请用负数
				'angle' => 45,
				
				//水印距离边的距离，与图片水印的一样
				'offset' => [
					'x' => 0,
					'y' => 50,
				],
			],
		],
	];
	
	return $config;