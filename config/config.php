<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-08-30
 * Time: 14:58
 */

$config = [
    //Qiniu Cloud
    'qiniu' => [
        //七牛云AppKey
        'AK' => 'ASGZ******************************o0AoF',
        //七牛云AppSecret
        'SK' => 'UoC******************************JylkEy',
        //七牛云对象存储空间名
        'bucket' => 'm*****n',
        //七牛云外链域名
        'domain' => 'http://pe5s*********clouddn.com',
        //七牛优化参数，直接加在链接后面，但是不会优化原图，只会优化输出的图片，如果不需要可以不配置该项（即注释掉）
        // 'optimize' => '?imageMogr2/thumbnail/800x/strip/quality/80',
    ],

    //Tencent Cloud
    'tecent' => [
        'appId' => '12*****60',
        'secretId' => 'AKID******************************2PZZM1ut33',
        'secretKey' => 'zlKh******************************tjLn2',
        'bucket' => 'ma******860',
        'region' => 'ap*******u',
    ],

    //Netease Cloud
    'netease' => [
        'accessKey' => '4bd5***************cd3c7b',
        'accessSecret' => '465e**************82db',
        'bucket' => 'mar********ket',
        //endPoint不是域名，域名是 bucket.'.'.endPoint
        'endPoint' => 'nos-ea*********6.net',
    ],
	//baidu Cloud
    'baidu' => [
        'bosConfig' => [
            'credentials' => [
                'accessKeyId' => '4fdda****************de91b5',
                'secretAccessKey' => 'ddd6c5***************1ffd03a3',
            ],
            'endpoint' => 'http://********.com',
        ],
        'bucket' => 'markdown',
        'domain' => 'http://mar*********ebos.com',
    ],
    //JCloud
    'jd' => [
        'key' => '050CA84*****************568B',
        'secret' => 'E1CD******************8A6F',
        'endpoint' => 'https://s3.cn********loudcs.com',
        'region' => 'c*****-1',
        'bucket' => 'm******n',
    ],
    //Aliyun Cloud
    'aliyun' => [
        'accessKey' => 'cDz******kaL',
        'accessSecret' => 'dNGT*************4h2',
        'bucket' => 'b******own',
        'endpoint' => 'oss-cn***********cs.com',
    ],
	
	//Youpai Cloud
	'youpai' => [
		'serviceName' => 'b*************n',
		'operator' => 'aa*********bb*',
		'password' => 'cc**********dd*',
		'domain' => 'http://***********.test.upcdn.net',
	],

    //https://sm.ms
    'smms' => [
        'baseUrl' => 'https://sm.ms/api/',
    ],

    //图片优化宽度（建议填1000），值为0或注释掉表示不优化
    'imgWidth' => 1000,

    //链接类型，三个值，normal, markdown, markdownWithLink，不填或者填的值不在这三个值里，按normal算
    //其中markdownWithLink表示点击后会跳转到图片源地址
    'linkType' => 'markdown',

    //存储服务器，值为：Qiniu/Tecent/Netease/Baidu/jd/aliyun/smms 其中之一
    'storageType' => 'smms',

    //set this option to find your upload logs more easily
    'logPath' => '/Users/xxxx/Desktop',

    //the allowed MIME type
    'allowMimeTypes' => ['image/jpeg', 'image/png', 'image/gif'],
];

return $config;