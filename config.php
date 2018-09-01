<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-08-30
 * Time: 14:58
 */

$config = [
    //七牛云
    'Qiniu' => [
        //七牛云AppKey
        'AK' => 'ASGZjb***************************tto0AoF',
        //七牛云AppSecret
        'SK' => 'UoCCK2******************************lkEy',
        //七牛云对象存储空间名
        'bucket' => 'markdown',
        //七牛云外链域名
        'domain' => 'http://pe5********.clouddn.com',
        //七牛优化参数，直接加在链接后面，但是不会优化原图，只会优化输出的图片，如果不需要可以不配置该项（即注释掉）
        // 'optimize' => '?imageMogr2/thumbnail/800x/strip/quality/80',
    ],

    'sm.ms' => [
        'baseUrl' => 'https://sm.ms/api/',

    ],

    //图片优化宽度（建议填1000），值为0或注释掉表示不优化
    'imgWidth' => 1000,

    //链接类型，三个值，normal, markdown, markdownWithLink，不填或者填的值不在这三个值里，按normal算
    //其中markdownWithLink表示点击后会跳转到图片源地址
    'linkType' => 'markdownWithLink',
    //目前只支持七牛云(Qiniu)，后续会支持sm.ms
    // 'storageType' => 'Qiniu',
    'storageType' => 'sm.ms',
];

return $config;