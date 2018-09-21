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
	];
	
	return $config;