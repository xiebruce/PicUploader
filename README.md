    
PicUploader
===============
![PicUploader](http://pe5scgdex.bkt.clouddn.com/2018/08/30/d1b13ae0f6fbed04a68ad4b38d01f5d5.png)
PicUploader 是一个用php编写的借助Mac的『自动操作/Automator』来帮助你快速上传你的图片到七牛云/腾讯云/网易云/百度云/阿里云/京东云/sm.ms并自动把地址拼接成markdown格式放到剪贴板的小工具(故只有MacOS用户能使用)，配置完成后，要获取一个可用于markdown的图片外链只需要：右击图片——点击`你的自定义菜单`——到markdown编辑器中粘贴！

![PicUploader demonstration](https://github.com/xiebruce/PicUploader/blob/master/PicUploader%20demonstration.gif)

## 一、 注册存储服务器账号
目前支持七牛云/腾讯云/网易云/百度云/阿里云/京东云/sm.ms七种，以下服务选择一种就可以！
### 1. 注册七牛云
- [点击前往七牛云](https://www.qiniu.com)
- [查看注册七牛云对象存储教程](http://www.xiebruce.xyz/2018/09/06/%E6%B3%A8%E5%86%8C%E4%B8%83%E7%89%9B%E4%BA%91%E5%AF%B9%E8%B1%A1%E5%AD%98%E5%82%A8%E6%95%99%E7%A8%8B/)
### 2.注册腾讯云
- [点击前往腾讯云](https://cloud.tencent.com)
腾讯云暂时未写注册教程，其实也用不着什么教程，聪明的你自己看着随便点都能点出来啦。
### 3.注册网易云
- [点击前往网易云](https://www.163yun.com)
网易云暂时未写注册教程，其实也用不着什么教程，聪明的你自己看着随便点都能点出来啦。
### 4.注册百度云
- [点击前往百度云](https://www.163yun.com)
百度云暂时未写注册教程，其实也用不着什么教程，聪明的你自己看着随便点都能点出来啦。
### 5.注册京东云
- [点击前往京东云](https://www.163yun.com)
京东云暂时未写注册教程，其实也用不着什么教程，聪明的你自己看着随便点都能点出来啦。
### 6.注册阿里云
- [点击前往阿里云](https://www.163yun.com)
阿里云暂时未写注册教程，其实也用不着什么教程，聪明的你自己看着随便点都能点出来啦。
### 7.无需注册直接使用sm.ms
- 直接使用是上传到[sm.ms](http://sm.ms)，我这里刚开始是可以，后来上传一直超时（如果小齿轮一直转个不停，基本上就是超时了），感觉是被封ip了，后来用手机开流量可以上传，大家用的时候能否上传我也不确定。（注：后来过几天又自动好了）
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
注意下载后把它解压放到一个相对稳定一点的目录，不能放在『下载』里面，因为这样你可能随手删除了。（以后最好不要移动，否则要改配置比较麻烦）

### 2.填写配置
- 把PicUploader/config/config.php文件`command+D`复制一份，命名为config-local.php，然后在config-local.php中修改你的配置(配置你的七牛云/腾讯云/网易云/百度云/阿里云/京东云其中一个)即可。
- 如果使用sm.ms，那就不需要修改配置了，直接使用！
- 以配置七牛云存储为例，在config-local.php文件中找到以下代码，填好AK/SK/bucket/domain四个参数，如果不知道参数怎么来，请查看[注册七牛云对象存储教程](http://www.xiebruce.xyz/2018/09/06/%E6%B3%A8%E5%86%8C%E4%B8%83%E7%89%9B%E4%BA%91%E5%AF%B9%E8%B1%A1%E5%AD%98%E5%82%A8%E6%95%99%E7%A8%8B/)
``` php
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
```
- 继续填写配置，在config-local.php中搜索『logPath』，把它箭头右边的『/Users/xxxx/Desktop』中的『xxxx』改成你自己的用户目录名，用户目录怎么找？请求看下图：
``` php
'logPath' => '/Users/xxxx/Desktop',
```
如下图，在访达中随便打开一个目录，比如我打开的是『下载』目录，看下边路径中有个小房子🏠旁边的名字即为你的用户目录名
![Xnip2018-09-08_00-23-46.png](http://pe5scgdex.bkt.clouddn.com/2018/09/08/fe0e6100ce10729f01012fd57d556ae5.png)

## 三、使用『自动操作/Automator』新建一个workflow服务
### 1.打开『自动操作/Automator』
或者像下面gif图演示的那样用『聚焦搜索』来打开
![](http://pe5scgdex.bkt.clouddn.com/2018/08/30/a808c59b097d5877e650dc7ced31977d.png)

### 2.按下图操作
注意每一个需要选择的地方都不要选错，其中最后一步保存的文件名，将出现在右键菜单上，你可以自己取一个自己喜欢的名字，比如『获取Markdown外链』。
![添加一个服务.gif](https://github.com/xiebruce/PicUploader/blob/master/Create%20a%20service.gif)

``` php
export LC_CTYPE="zh_CN.UTF-8"
/usr/bin/php /Users/xxxxx/www/PicUploader-master/index.php "$@" | pbcopy
```
注意：
- 注意/usr/bin/php路径，最好在终端用『which php』来查看它的路径，确认一下是否正确。
- 把/Users/xxxxx/www/PicUploader-master/index.php 的路径换成你自己的index.php路径

### 3.试试右击任意图片
看，最后一个按钮是不是就是你刚刚保存的Services名称？什么？你电脑上没看见？那是因为你电脑上超过5个这种类似的菜单，它就自动收到二级菜单下了，其实很多菜单根本用不到，你可以到`系统偏好设置`→`键盘`→`快捷键`→`服务(Services)`里面找到对应的按钮，把它们的勾去掉就行。  
![Xnip2018-09-07_23-58-26.png](http://pe5scgdex.bkt.clouddn.com/2018/09/08/66b431b893bc5b2abc456b6bf4f0b6ee.png)

## 三、开始使用
### 1.右击任意一张图片
如果一切正常，你对着图片右击，并点击右键菜单中的`获取Markdown链接`后，你将会在Mac顶部工具栏那里看到一个小齿轮在转动，说明Services正在执行，图片正在上传，当小齿轮停止转动(不需要等它消失)，即说明上传已经完成，同时右上角会弹出通知，此时剪贴板已经有你上传的图片地址了，直接到markdown编辑器`command+v`粘贴试试吧
![](http://pe5scgdex.bkt.clouddn.com/2018/08/29/79fe0db0bfbecca78bde951f90554fb4.png?imageMogr2/thumbnail/50x/strip/quality/80)
### 2. 为你创建的服务创建快捷键
`系统偏好设置`→`键盘`→`快捷键`→`服务(Services)`→找到你的自定义菜单添加快捷键即可，当然喜欢用鼠标搞定的童鞋也可以不创建。  
![](http://pe5scgdex.bkt.clouddn.com/2018/08/30/549a81ea2ab503d2585406497f8d61d3.png?imageMogr2/thumbnail/800x/strip/quality/80)
### 3.查看上传日志
- 因为在配置文件中的 'logPath' => '/Users/xxxx/Desktop' 配置了上传日志保存到桌面，所以不出意外，你的桌面装会有一个如下图所示的文件夹，这里保存了你上传的图片的Markdown外链地址，你在七牛云（或者其他服务器）是能找到对应的图片的，如果你觉得哪张图片不想要，可以在对应服务器中把它删除了。
![Xnip2018-09-08_00-34-41.png](http://pe5scgdex.bkt.clouddn.com/2018/09/08/d4d35766f028a4a26b9c6be9b139e2bf.png)
- 这个日志文件也是markdown格式，所以你可以用mweb之类的markdown编辑器查看它，但是有个问题当你用Mweb打开它之后，如果再上传一张图片，这个文件里肯定会增加一条你上传的记录，但是在Mweb中却不会刷新，必须关掉重新打开才能看的到，这个特别麻烦，建议用[typora](https://typora.io/)这个软件来打开日志，这个会自动刷新，而且免费。
- 日志是倒序添加的，即最新上传的图片在最前面，方便一时忘了粘贴，可以找到地址，因为在服务器中文件多的话比较难找到。

## 四、注意事项
### 1.关于config里的imgWidth选项
- 由于各个云服务器免费空间有限(七牛云免费10G,好像也不小了哈哈)，而且大文件加载特别慢，所以有些大图片需要压缩后上传，由于试过按质量压缩对图片影响较大，所以选择按宽度压缩（高度会保持等比例适应）。
- 如果要设置压缩图片，建议imgWidth设置为800或1000，别担心分辨率低的图压缩后看不清，即使设置了该选项，分辨率比较低的图片也是不会被压缩的。
- 由于gif图片实际上是由很多张图片组合在一起的，它的压缩比较麻烦，需要Mac装一些额外的库，所以暂时选择不压缩gif（也就是说即使你设置了imgWidth为800或者1000，也不会压缩gif图片）
- 返回的图片地址中『?imageMogr2/thumbnail/800x/strip/quality/80』这部分是七牛云的压缩参数(如果你配置了的话)，也就是说这部分参数你可以去掉直接查看你上传的图，其中thumbnail/800x表示设置宽度为800，strip表示去除一些exif信息以减小图片大小，quality/80表示设置图片质量为原来的80%，其实还可以在最后加个/format/webp这样图片加载会快很多，因为webp能在最大程度还原图片清晰度的同时把图片体积降到最小。

### 2.安装管理工具
因为图片上传到七牛云后，在七牛的后台实在无法直观的浏览和管理图片，如果你希望方便管理你的图片，可以下载两款谷歌浏览器插件：
- [qiniu upload files](https://chrome.google.com/webstore/detail/qiniu-upload-files/emmfkgdgapbjphdolealbojmcmnphdcc) 用来管理七牛云上的图片
- [七牛云图床](https://chrome.google.com/webstore/detail/%E4%B8%83%E7%89%9B%E4%BA%91%E5%9B%BE%E5%BA%8A/fmpbbmjlniogoldpglopponaibclkjdg) 一款可以让你直接上传图片到七牛云的工具，但是它没有分文件夹。
- 腾讯COS官方MacOS客户端：[点击前往下载](https://cloud.tencent.com/document/product/436/11366)
- 百度BOS官方MasOS客户端：[点击前往下载](https://cloud.baidu.com/doc/BOS/BOSCLI.html#.E4.B8.8B.E8.BD.BD)

### 3.上传完成通知问题
- 一般情况下，上传完成后右上角就会弹出通知，如果你没有弹出，有可能是因为系统没更新的问题，像我的系统版本一直是10.13.1，我的就不弹，但是我让别人试就会弹。
- 如果你的系统也没更新，那有可能也不会弹通知，那就只能看工具栏上的小齿轮，小齿轮停止转动说明上传完成（不需要等小齿轮消失，停止转动即已完成），然后就可以去markdown编辑器粘贴了。

## 五、更新日志
### 2018-09-08 v2.2.1
- 解决图片文件名为中文时粘贴乱码或者无法粘贴的问题
- 修改了README.md中说的不清楚的地方，部分英文菜单改用中文
### 2018-09-06 v2.2版本
- 添加支持百度云
- 添加支持京东云
- 添加支持阿里云
### 2018-09-06 v2.1版本
- 添加支持网易云
- bug fix
### 2018-09-06 v2.0版本
- 完全重构代码
- 添加支持腾讯云
- 添加上传日志路径配置（可配置到桌面方便随时查看）
### 2018-09-01 v1.1版本
- 添加支持[https://sm.ms](https://sm.ms)，默认上传到sm.ms
- 添加mardownWithLink链接类型（点击图片后能跳转到图片链接）
- fix bug log时间设置成东八区
### 2018-08-30 v1.0版本
由于个人写markdown需要，目前现有的一些笔记软件都因为各种原因传图并不是很方便，于是写了这个小工具，想到可能有跟我一样需求的童鞋，就顺手发出来供有需要的童鞋使用，如有处理不好的地方在所难免，希望大家能批评指正！

## 六、参考资料
[七牛云phpsdk文档](https://developer.qiniu.com/kodo/sdk/1241/php)  
[百度知道：没有个人网站怎么注册七牛云存储](https://zhidao.baidu.com/question/714797122999158885.html)  
[sm.ms Api](https://sm.ms/doc/)  
[GuzzleHttp官方文档](http://docs.guzzlephp.org/en/stable/quickstart.html#post-form-requests)  
[腾讯云phpsdk文档](https://cloud.tencent.com/document/product/436/12266)  
[网易云phpsdk文档](https://www.163yun.com/help/documents/15677641583214592)  
[阿里云phpsdk文档](https://help.aliyun.com/document_detail/32101.html?spm=a2c4g.11186623.4.2.70d8c839FzL6jV)  
[京东云phpsdk文档](https://www.jdcloud.com/help/detail/1910/isCatalog/1)  
[百度云phpsdk](https://cloud.baidu.com/doc/BOS/PHP-SDK.html#.E5.AE.89.E8.A3.85SDK.E5.B7.A5.E5.85.B7.E5.8C.85)  
[google](http://www.google.com/ncr)  
[百度](http://www.baidu.com)  
