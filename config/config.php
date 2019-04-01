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
				//七牛云外链域名（域名要自己绑定，因为默认域名30天后会被回收）
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
				//如果不填domain，则自动拼接腾讯给的域名
				'domain' => '',
			],
			
			//Netease Cloud
			'netease' => [
				'accessKey' => '4bd5*********************************7b',
				'accessSecret' => '465*****************************82db',
				'bucket' => 'markdown-bucket',
				//endPoint不是域名，域名是 bucket.'.'.endPoint
				'endPoint' => 'nos-eastchina1.126.net',
				//如果不填domain，则自动拼装网易云给的域名
				'domain' => '',
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
				//如果不写，则自动拼装百度给的域名
				'domain' => '',
			],
			//JCloud
			'jd' => [
				'key' => '050***********************B',
				'secret' => 'E1C******************8A6F',
				'endpoint' => 'https://s3.cn-south-1.jcloudcs.com',
				'region' => 'cn-south-1',
				'bucket' => 'markdown',
				//如果不写，则自动拼装京东给的域名
				'domain' => '',
			],
			//Aliyun Cloud
			'aliyun' => [
				'accessKey' => 'cD********aL',
				'accessSecret' => 'dN***************V4h2',
				'bucket' => 'bruce-markdown',
				'endpoint' => 'oss-cn-shenzhen.aliyuncs.com',
				//如果不写，则自动拼装阿里云给的域名
				'domain' => '',
			],
			
			//Upyun Cloud
			'upyun' => [
				'serviceName' => 'bl******wn',
				'operator' => '*******',
				'password' => '**************',
				//如果不写，则自动拼装又拍云给的域名
				'domain' => '',
			],
			
			//https://sm.ms
			'smms' => [
				'baseUri' => 'https://sm.ms/api',
				//代理地址，如果使用shadowsocks做代理，ip填127.0.0.1即可，端口从『偏好设置→HTTP→监听端口』找
				//留空或注释掉表示不使用代理
				// 'proxy' => 'http://127.0.0.1:1087',
				//无法自定义域名和key名，只能直接用它返回的地址（原因是无账号系统，自己定义的key无法保证全局唯一）
			],
			
			//imgur
			'imgur' => [
				'baseUri' => 'https://api.imgur.com/3/',
				'clientId' => 'ab************cdf',
				//代理地址，如果使用shadowsocks做代理，ip填http://127.0.0.1（或直接填127.0.0.1）即可，
				//端口从『偏好设置→HTTP→监听端口』找，留空或注释掉表示不使用代理
				// 'proxy' => 'http://127.0.0.1:1087',
				//无法自定义域名和key名，只能直接用它返回的地址（原因是无账号系统，自己定义的key无法保证全局唯一）
			],
			
			//Ucloud
			'ucloud' => [
				'publicKey' => 'Rgv************************************************************3M=',
				'privateKey' => 'Jt4************************************************************8qGH',
				//markdown-blog.cn-gd.ufileos.com
				'proxySuffix' => '.cn-**.ufileos.com',
				'bucket' => 'mar******log',
				//endPoint，cdn加速域名是bucket名+endPoint组成，Ucloud中没有endPoint的说法，
				//但其实这就是endPoint，这个值请自己复制cdn加速域名除去bucket名部分到这里（不包含英文句点）
				'endPoint' => 'ufile.ucloud.com.cn',
				//如果不写，则自动拼装Ucloud给的域名
				'domain' => '',
			],
			
			//QingCloud
			'qingcloud' => [
				'accessKeyId' => 'TIJ************ADM',
				'secretAccessKey' => 'hvF************************************Awe0x',
				'bucket' => 'bl******down',
				'zone' => '***',
				//如果不写，则自动拼装QingCloud给的域名
				'domain' => '',
			],
			
			//Github
			'github' => [
				//基础api，不要修改
				'baseUri' => 'https://api.github.com/repos/',
				//github仓库(github左上角的名字，带用户名)
				'repo' => 'xiebruce/PicUploader',
				//分支，默认为master
				'branch' => 'master',
				//文件夹，表示把图片上传到仓库中的哪个文件夹下，可以为空，可以写多层文件夹，如：images/travel/Turkey
				'directory' => 'images',
				//提交的评论信息，可以不填
				'message' => 'Upload from PicUploader',
				//access_token，授权token
				'access_token' => 'c506a9de*********************d375de5e',
				//不填则使用github默认的域名，填了则使用填的域名
				'domain' => '',
				//代理地址，如果使用shadowsocks做代理，ip填http://127.0.0.1（或直接填127.0.0.1）即可，
				//端口从『偏好设置→HTTP→监听端口』找，留空或注释掉表示不使用代理
				// 'proxy' => 'http://127.0.0.1:1087',
			],
			
			//Weibo(上传图片到微博并不会自动发一条微博，请放心使用)
			'weibo' => [
				//登录url，请不要修改
				'loginUrl' => 'https://login.sina.com.cn/sso/login.php?client=ssologin.js(v1.4.15)&_='.time(),
				//上传url，请不要修改
				'uploadUrl' => 'http://picupload.service.weibo.com/interface/pic_upload.php?mime=image%2Fjpeg&data=base64&url=0&markpos=1&logo=&nick=0&marks=1&app=miniblog&cb=http://weibo.com/aj/static/upimgback.html?_wv=5&callback=STK_ijax_'.time(),
				//微博登录用户名(或邮箱)
				'username' => 'zhangsan@sina.com',
				//微博登录密码
				'password' => '*****************',
			],
		],
		
		//图片优化宽度（建议填1000），值为0或注释掉表示不优化
		'imgWidth' => 1000,
		
		//jpe图片专用，表示图片质量，0-100，数值越大，图片质量越好
		'quality' => 80,
		//png图片专用，压缩级别，0-9，数值越大，压缩的越厉害（图片质量也会越低，压缩速度也越慢）
		'compreLevel' => 9,
		
		//链接类型，四个值，normal, markdown, markdownWithLink, custom，不填或者填的值不在这四个值里，按normal算
		//其中markdownWithLink表示点击后会跳转到图片源地址
		'linkType' => 'markdown',
		//自定义返回链接格式，其中{{url}}在返回的时候会被替换为图片url，{{name}}会被替换为上传的图片名称（这样做主要为了小图居中）
		'customFormat' => '<p align="center"><img src="{{url}}" title="{{name}}" alt="{{name}}" width="80%"></p>',
		
		//存储服务器，可选值为：Qiniu/Tencent/Netease/Baidu/Aliyun/Jd/Upyun/Smms/Imgur/Ucloud/Qingcloud/Github/Weibo
		'storageType' => 'Weibo',
		//存储服务器可写多个，表示同时传到多个地方，有两种写法，一是用逗号隔开，二是直接用数组，如
		// 'storageType' => 'Upyun, Qiniu',
		//或使用数组写法，两种方式用一种即可，
		/*'storageType' => [
			'Upyun',
			'Qiniu',
		],*/
		
		//日志真实记录在系统日志目录下：在本项目目录下的logs目录中
		//但你可通过该项配置建立一个软链接(即快捷方式)到你想要的地方
		//你可以填写两种值：
		//1、填写：desktop，则你的桌面会出现一个PicUploader_Upload_Logs文件夹，打开该文件夹即可看到日志
		//2、填写实际路径，比如你填写：/User/你的用户名/Downloads，则会在/User/你的用户名/Downloads下出现一个PicUploader_Upload_Logs文件夹
		//3、如果不填，或者填写的既不是desktop也不是一个存在的路径，则不创建符号链接，但日志还是会存往：本项目目录下的logs目录中
		//4、建议保持默认不要动，即放在桌面，这样方便查找日志
		'logPath' => 'desktop',
		
		//允许的图片类型
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
				
				//字体文件名（字体文件必须为.ttf格式，且必须放在static/watermark文件夹下，windows下最好把字体文件名改为英文，实测win10上写中文名找不到字体文件）
				//下载字体网站：http://www.17ziti.com（字体之家）
				'font' => 'jdchj.ttf',
				
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