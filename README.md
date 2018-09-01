    
PicUploader
===============
![PicUploader](http://pe5scgdex.bkt.clouddn.com/2018/08/30/d1b13ae0f6fbed04a68ad4b38d01f5d5.png)
PicUploader 是一个用php编写的借助Mac的Automator来帮助你快速上传你的图片到七牛云并自动把地址拼接成markdown格式放到剪贴板的小工具(故只有MacOS用户能使用)，你只需要右击图片，点击`你的自定义菜单`，稍等片刻，即可直接到markdown编辑器中粘贴你的图片地址，同时你也可以设置一个快捷键。 配置完成后，要获取一个可用于markdown的图片外链只需要：右击图片——点击`你的自定义菜单`——到markdown编辑器中粘贴！

![PicUploader demonstration](https://github.com/xiebruce/PicUploader/blob/master/PicUploader%20Demonstration.gif)

## 一、 准备开始
### 1. 注册七牛云
- 七牛云地址：https://www.qiniu.com
- 注册时，选择『个人账户』，注意姓名一定要真实姓名，因为后面要实名认证，『输入个人网站』一栏可以输入你自己的博客地址（不一定要自己搭的，比如博客园的也行），或者干脆随便输一个也行。
- 注册后上传手持正反面身份证照片上传进行实名认证，你上传的照片没问题的话，最多三天，最少可能一两小时即可认证通过。

### 2.新建存储空间
- 实名认证通过后，选择『新建存储空间』
![](http://pe5scgdex.bkt.clouddn.com/2018/08/29/9d384dba74d300c690fdca06f5855cbe.png)
- 点击『内容管理』，现在你可以在这里手动上传图片试试了，注意这里有个『外链默认域名』，待会下面配置会用到它。
![](http://pe5scgdex.bkt.clouddn.com/2018/08/29/2f9a1fbd9cfa7ffbfb59c4d0848e797a.png)
- 点击右上角`个人面板`——`个人中心`——`密钥管理`，这里的AK/SK下面配置会用到它。
![](http://pe5scgdex.bkt.clouddn.com/2018/08/29/b623604467ea4da4489e8018b674fb94.png)
### 3.也可以不注册七牛云，直接使用sm.ms（1.1版本添加）
- 直接使用是上传到[sm.ms](http://sm.ms)，我这里刚开始是可以，后来上传一直超时（如果小齿轮一直转个不停，基本上就是超时了），感觉是被封ip了，后来用手机开流量可以上传，大家用的时候能否上传我也不确定。
- 注意sm.ms单张图片不能超过5M，但由于我有做压缩，一般不会超过5M，如果上传后粘贴没有内容，请查看日志，很有可能是这张图片压缩后超过了5M，或者是超过5M的gif图（gif图不压缩）
- 如果粘贴出来的内容以下内容，那就是无法上传到sm.ms了，只能换七牛啦。
```
Fatal error: Uncaught GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 10003 milliseconds with 0 out of 0 bytes received (see http://curl.haxx.se/libcurl/c/libcurl-errors.html) in /Users/bruce/www/personal/PicUploader/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php on line 185

GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 10003 milliseconds with 0 out of 0 bytes received (see http://curl.haxx.se/libcurl/c/libcurl-errors.html) in /Users/bruce/www/personal/PicUploader/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php on line 185

Call Stack:
    0.0015     390496   1. {main}() /Users/bruce/www/personal/PicUploader/index.php:0
    0.0128    1021472   2. PicUploader\Upload->getPublickLink() /Users/bruce/www/personal/PicUploader/index.php:27
    0.0128    1021472   3. PicUploader\Upload->uploadToSmms() /Users/bruce/www/personal/PicUploader/Upload.php:83
    0.6283    1675632   4. GuzzleHttp\Client->request() /Users/bruce/www/personal/PicUploader/Upload.php:211
   10.6451    2047552   5. GuzzleHttp\Promise\RejectedPromise->wait() /Users/bruce/www/personal/PicUploader/vendor/guzzlehttp/guzzle/src/Client.php:131
```

## 二、下载使用
### 1.下载PicUploader
- git clone git@github.com:xiebruce/PicUploader.git
- 直接下载 [PicUploader](https://github.com/xiebruce/PicUploader/archive/master.zip)

### 2.填写配置
- 在config.php文件中，修改AK/SK/bucket/domain四项为你的七牛云的配置。建议把config.php复制一份，命名为config-local.php，然后在config-local.php中修改你的配置即可，避免以后更新的时候把你的配置给覆盖了。
- 如果使用sm.ms，那就不需要修改配置了，直接使用！

``` php
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
```
## 三、使用Automator新建一个workflow
### 1.打开Automator
![](http://pe5scgdex.bkt.clouddn.com/2018/08/30/a808c59b097d5877e650dc7ced31977d.png)
### 2.点击左下角的`New Document`
![](http://pe5scgdex.bkt.clouddn.com/2018/08/29/ead60bb5f700caee17115126e016045c.png?imageMogr2/thumbnail/800x/strip/quality/80)
### 3.选择Services
![](http://pe5scgdex.bkt.clouddn.com/2018/08/29/4d86ad1338d5cd9b9a12eae0bff6bd41.png)

### 4.按下图操作
注意每一个需要选择的地方都不要选错（咦，这个图右侧的步骤用什么软件写的？安利Mac下非常好用的一个截图工具『xnip』），其中最后一步保存的文件名，将出现在右键菜单上，你可以自己取一个自己喜欢的名字，比如英文我用英文系统，所以我取的是『Get Public Link』，中文你可以取『获取外链』或者『markdown外链』之类的。
![](http://pe5scgdex.bkt.clouddn.com/2018/08/29/ede18f0537e41baf801e99e2a488b9a3.png)
``` php
/usr/local/bin/php /Users/xxxx/www/PicUploader/index.php "$@" | pbcopy
```
注意：
- 前面的/usr/local/bin/php，是我自己用brew安装的，如果你用的是系统自带的，那么它可能是在/usr/bin/php，你可以用『which php』来查看它的路径。
- 把index.php的路径换成你自己的路径

### 5.试试右击任意图片
看，最后一个按钮是不是就是你刚刚保存的Services名称？什么？你电脑上没看见？那是因为你电脑上超过5个这种类似的菜单，它就自动收到二级菜单下了，其实很多菜单根本用不到，你可以到`系统偏好设置`→`键盘`→`快捷键`→`服务(Services)`里面找到对应的按钮，把它们的勾去掉就行。  
![](http://pe5scgdex.bkt.clouddn.com/2018/08/29/ba398bb8ac9a1c5c5cb6623609346573.png?imageMogr2/thumbnail/500x/strip/quality/80)
## 三、开始使用
### 1.右击任意一张图片
如果一切正常，你对着图片右击，并点击右键菜单中的`Get Public Link`后，你将会在Mac顶部工具栏那里看到一个小齿轮在转动，说明Services正在执行，图片正在上传，当图片上传完成后，小齿轮就会消失，此时剪贴板已经有你上传的图片地址了，直接到markdown编辑器`command+v`试试吧
![](http://pe5scgdex.bkt.clouddn.com/2018/08/29/79fe0db0bfbecca78bde951f90554fb4.png?imageMogr2/thumbnail/50x/strip/quality/80)
### 2. 为你创建的服务创建快捷键
`系统偏好设置`→`键盘`→`快捷键`→`服务(Services)`→找到你的自定义菜单添加快捷键即可，当然喜欢用鼠标搞定的童鞋也可以不创建。  
![](http://pe5scgdex.bkt.clouddn.com/2018/08/30/549a81ea2ab503d2585406497f8d61d3.png?imageMogr2/thumbnail/800x/strip/quality/80)
### 3.查看上传日志
- 还记得你刚刚把**PicUploader**的代码放哪了吗？现在去打开它的目录看看，是不是有个log目录？是的，这里保存了你上传的文件外链地址，你在七牛云是能找到对应的图片的，如果你觉得哪张图片不想要，可以在七牛云中把它删除了。
- 这个日志文件也是markdown格式，所以你可以用mweb之类的markdown编辑器查看它，但是有个问题就是当日志内容增加时，MWeb无法刷新，建议用[typora](https://typora.io/)打开日志，这个会自动刷新，而且免费。
- 日志是倒序添加的，即最新上传的图片在最前面，方便一时忘了粘贴，可以找到地址，因为在七牛云中文件多的话比较难找到。

## 四、注意事项
### 1.关于config里的imgWidth选项
- 由于七牛云免费空间有限(免费10G,好像也不小了哈哈)，而且大文件加载特别慢，所以有些大图片需要压缩后上传，由于试过按质量压缩对图片影响较大，所以选择按宽度压缩（高度会保持等比例适应）。
- 如果要设置压缩图片，建议imgWidth设置为800或1000，别担心分辨率低的图压缩后看不清，即使设置了该选项，分辨率比较低的图片也是不会被压缩的。
- 由于gif图片实际上是由很多张图片组合在一起的，它的压缩比较麻烦，需要Mac装一些额外的库，所以暂时选择不压缩gif（也就是说即使你设置了imgWidth为800或者1000，也不会压缩gif图片）
- 返回的图片地址中『』这部分是七牛云的压缩参数(如果你配置了的话)，也就是说这部分参数你可以去掉直接查看你上传的图，其中thumbnail/800x表示设置宽度为800，strip表示去除一些exif信息以减小图片大小，quality/80表示设置图片质量为原来的80%，其实还可以在最后加个/format/webp这样图片加载会快很多，因为webp能在最大程度还原图片清晰度的同时把图片体积降到最小。

### 2.建议安装七牛谷歌浏览器扩展
因为图片上传到七牛云后，在七牛的后台实在无法直观的浏览和管理图片，如果你希望方便管理你的图片，可以下载两款谷歌浏览器插件：
- [qiniu upload files](https://chrome.google.com/webstore/detail/qiniu-upload-files/emmfkgdgapbjphdolealbojmcmnphdcc) 用来管理七牛云上的图片
- [七牛云图床](https://chrome.google.com/webstore/detail/%E4%B8%83%E7%89%9B%E4%BA%91%E5%9B%BE%E5%BA%8A/fmpbbmjlniogoldpglopponaibclkjdg) 一款可以让你直接上传图片到七牛云的工具，但是它没有分文件夹。

### 3.上传完成通知问题
- 其实Automator是可以在脚本执行完后弹出系统通知的，我也添加了，但是却不弹，不知道是什么原因，哪位童鞋知道可以告诉我。
![](http://pe5scgdex.bkt.clouddn.com/2018/08/30/c91e4a969326b02ef9e919487cd50346.png)
- 目前要看图片是否上传完成，只能看工具栏上的小齿轮，小齿轮消失了说明上传完成，然后就可以去markdown编辑器粘贴了。

## 五、更新日志
### 2018-09-01 1.1版本
- 添加支持https://sm.ms，默认上传到sm.ms
- 添加mardownWithLink链接类型（点击图片后能跳转到图片链接）
- fix bug log时间设置成东八区
### 2018-08-30 1.0版本
由于个人写markdown需要，目前现有的一些笔记软件都因为各种原因传图并不是很方便，于是写了这个小工具，想到可能有跟我一样需求的童鞋，就顺手发出来供有需要的童鞋使用，如有处理不好的地方在所难免，希望大家能批评指正！
## 六、参考资料
[七牛云phpsdk文档](https://developer.qiniu.com/kodo/sdk/1241/php)  
[百度知道：没有个人网站怎么注册七牛云存储](https://zhidao.baidu.com/question/714797122999158885.html)  
[sm.ms Api](https://sm.ms/doc/)  
[GuzzleHttp官方文档](http://docs.guzzlephp.org/en/stable/quickstart.html#post-form-requests)  
[google](http://www.google.com/ncr)  
[百度](http://www.baidu.com)  
