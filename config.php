<?php

$config = [
    //七牛云
    'Qiniu' => [
        //七牛云AppKey
        'AK' => 'ASGZ******************************to0AoF',
        //七牛云AppSecret
        'SK' => 'UoCC******************************JylkEy',
        //七牛云对象存储空间名
        'bucket' => 'm*****n',
        //七牛云外链域名
        'domain' => 'http://pe*******x.bkt.clouddn.com',
        //七牛优化参数，直接加在链接后面，但是不会优化原图，只会优化输出的图片，如果不需要可以不配置该项（即注释掉）
        // 'optimize' => '?imageMogr2/thumbnail/800x/strip/quality/80',
    ],

    //图片优化宽度（建议填1000），值为0或注释掉表示不优化
    // 'imgWidth' => 1000,
    //是否获取markdown格式的链接，即『![](http://xxxxxxx.jpg)』这种格式
    //如果为0，则是普通链接，如果不配置该项则默认为1（即markdown格式）
    // 'markdownLink' => 1,
];

return $config;