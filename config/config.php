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
        'AK' => 'ASGZj*****************************to0AoF',
        //七牛云AppSecret
        'SK' => 'UoCCK*****************************tylkEy',
        //七牛云对象存储空间名
        'bucket' => 'm*****n',
        //七牛云外链域名
        'domain' => 'http://pe5*******.bkt.clouddn.com',
        //七牛优化参数，直接加在链接后面，但是不会优化原图，只会优化输出的图片，如果不需要可以不配置该项（即注释掉）
        // 'optimize' => '?imageMogr2/thumbnail/800x/strip/quality/80',
    ],

    //Tencent Cloud
    'tecent' => [
        'appId' => '12*******60',
        'secretId' => 'AKID****************************M1ut33',
        'secretKey' => 'zlKh****************************tjLn2',
        'bucket' => 'ma*******860',
        'region' => 'ap-******',
    ],

    //https://sm.ms
    'sm.ms' => [
        'baseUrl' => 'https://sm.ms/api/',
    ],

    //图片优化宽度（建议填1000），值为0或注释掉表示不优化
    'imgWidth' => 1000,

    //链接类型，三个值，normal, markdown, markdownWithLink，不填或者填的值不在这三个值里，按normal算
    //其中markdownWithLink表示点击后会跳转到图片源地址
    'linkType' => 'markdown',

    //存储服务器，值为：Qiniu/Tecent/sm.ms 其中之一
    // 'storageType' => 'sm.ms',

    //set this option to find your upload logs more easily
    // 'logPath' => '/Users/username/Desktop',

    //the allowed MIME type
    'allowMimeTypes' => ['image/jpeg', 'image/png', 'image/gif'],
];

return $config;