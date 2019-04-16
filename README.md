PicUploader
===============
### 简介

![PicUploader-logo.png](https://img.xiebruce.top/2018/09/19/781e669d020efbde43dc952eb802293b.png)

**PicUploader** 是一个用php编写的图床工具，它能帮助你快速上传你的图片到云图床，并自动返回Markdown格式链接到剪贴板。配置完成后，要获取一个可用于markdown的图片外链只需要：  
**方式一：** 右击图片→点击`你的自定义上传菜单`→系统弹出上传成功通知→到Markdown编辑器中粘贴！  
**方式二：** 截图并点击复制到剪贴板→按上传快捷键→系统弹出上传成功通知→到Markdown编辑器中粘贴！  
**方式三：** 右击网页中的图片→点击`复制图片`→按上传快捷键→系统弹出上传成功通知→到Markdown编辑器中粘贴！    
**方式四：** 在网页版拖拽、粘贴图片、截图后粘贴来上传，上传完剪贴板也会有返回的地址，直接去Markdown编辑器粘贴即可。

### 主要功能
- 支持Mac和Windows
- 支持图片压缩后上传(支持jpg/png，gif不支持压缩)
- 支持添加水印后上传(支持文字水印、图片水印、自定义水印颜色和透明度)
- 返回的链接可自定义（如原始链接、Markdown格式链接、可点击的Markdown格式链接、完全自定义的链接）
- 可作为MWeb的API使用（需要自行配置nginx+php服务器）
- 支持快捷键上传剪贴板中的图片（需要配合PicUploaderHelper使用）
- 支持Web端拖拽、粘贴上传图片
- 支持Web端设置相关参数
- 目前支持13种图床：七牛云/腾讯云/网易云/百度云/阿里云/京东云/又拍云/sm.ms/Imgur/Ucloud/QingCloud/Github/微博

![这是一个用于演示的gif图，如果你看到这行文字说明它没加载出来，请点我直接跳转链接查看吧，或者使劲强刷](https://github.com/xiebruce/PicUploader/blob/master/accessorys/PicUploader%20demonstration.gif)

[Web版](https://github.com/xiebruce/PicUploader/blob/master/PicUploader-Web.md)：
![web-upload-demo](https://img.xiebruce.top/2019/04/16/b511d63082f0a21f270c2f372c145e68.gif)

## 注册存储服务器账号
目前支持七牛云/腾讯云/网易云/百度云/阿里云/京东云/又拍云/sm.ms/Imgur/Ucloud/QingCloud/Github/微博共13种，以下服务选择一种就可以，如果是自己搭建的博客，建议参考我这篇文章：[使用nginx负载均衡+多个云的免费额度打造免费markdown图床](https://www.xiebruce.top/644.html)

注册各个云的方法具体请查看：[Register-Cloud-Storage.md](https://github.com/xiebruce/PicUploader/blob/master/Register-Cloud-Storage.md)

## 下载使用
### 下载PicUploader
- 使用git下载：
```bash
git clone https://github.com/xiebruce/PicUploader.git
```
- 或者直接下载： [PicUploader](https://github.com/xiebruce/PicUploader/archive/master.zip)
注意下载后把它解压放到一个相对稳定一点的目录，不能放在『下载』里面，因为这样你可能随手删除了。（以后最好不要移动，否则要改配置比较麻烦）

### 填写配置
- 把`PicUploader/config/config.php`文件`command+D`复制一份，命名为`config-local.php`，然后在`config-local.php`中修改你的配置(配置你的七牛云/腾讯云/网易云/百度云/阿里云/京东云/又拍云/Imgur/Ucloud/QingCloud/Github/微博其中一个)即可。
- 如果使用sm.ms，那就不需要修改配置了，直接使用！
- 以配置七牛云存储为例，在config-local.php文件中找到以下代码，填好AK/SK/bucket/domain四个参数，如果不知道参数怎么来，请查看[Register-Cloud-Storage.md](https://github.com/xiebruce/PicUploader/blob/master/Register-Cloud-Storage.md)
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
    //自定义目录格式：false 表示不使用任何目录，直接上传到根目录下
    // 'directory' => false,
    //自定义目录格式：2019/03/31，如果不设置或者设置为空，
    // 'directory' => date('Y/m/d/'),
    //自定义目录格式：images/2019/03/31
    // 'directory' => 'images/' . date('Y/m/d/'),
    //自定义目录格式：images/Travel/2019/03/31
    // 'directory' => 'images/Travel/' . date('Y/m/d/'),
    //自定义目录格式：images/Travel/Maldives
    // 'directory' => 'images/Travel/Maldives',
],
```

- 搜索`storageType`(注意是storageType，而不是storageTypes)，并在`=>`后设置您当前要使用哪个云，如我要使用七牛云：
```php
'storageType' => 'Qiniu',
```
- 支持同时上传到多个云，只需逗号隔开即可，比如我现在就同时上传到6个云(多个云会使用最后一个云的域名作为返回域名)：
```php
'storageType' => 'Qiniu,Tencent,Netease,Upyun,Qingcloud,Ucloud',
```
也许你会觉得奇怪，同时上传到那么多云干嘛？看了这篇文章你就知道了：[使用nginx负载均衡+多个云的免费额度打造免费markdown图床](https://www.xiebruce.top/644.html)

- 水印配置直接参考配置文件的注释

## 在macOS上使用
### 打开『自动操作/Automator』
或者像下面gif图演示的那样用『聚焦搜索』来打开
![](https://img.xiebruce.top/2018/08/30/a808c59b097d5877e650dc7ced31977d.png)

### 按下图操作
注意每一个需要选择的地方都不要选错，其中最后一步保存的文件名，将出现在右键菜单上，你可以自己取一个自己喜欢的名字，比如『获取Markdown外链』。
![添加一个服务.gif](https://github.com/xiebruce/PicUploader/blob/master/accessorys/Create%20a%20service.gif)

``` php
export LC_CTYPE="zh_CN.UTF-8"
/usr/bin/php /Users/xxxxx/www/PicUploader-master/index.php "$@" | pbcopy
```
注意：
- 注意`/usr/bin/php`这个路径，最好在终端用`which php`命令来查看它的路径，确认一下是否正确，如果执行`which php`命令后输出的不是`/usr/bin/php`，则以`which php`命令输出的为准。
- 把/Users/xxxxx/www/PicUploader-master/index.php 的路径换成你自己的index.php路径，怎么看你的index.php路径呢？打开终端，把index.php文件拖到终端上，终端就会显示出它的路径。
- 特别注意：Mac自带php缺少freetype扩展，导致gd库处理图片的时候报错，如果你是做php开发的，那这个问题你肯定解决了，如果不是，那你需要解决这个问题,先用这下边这个命令看看有没有内容输出，如果什么都没有输出，那就确定是缺少freetype
``` shell
php -i | grep configure | grep freetype
```
- 确定缺少freetype之后，如果你不用水印功能，则可以不理会，如果你要使用水印功能，请使用以下命令重装php(否则会报错)，重装后，上面的`/usr/bin/php`请直接改成`/usr/local/bin/php`，不需要看`which php`的结果了：
``` shell
brew install php
```
- php需要安装`gd`、`curl`、`exif`、`fileinfo`这四个扩展，前两个必须要有，后两个最好有，查看php有哪些扩展的命令：
```bash
/usr/local/bin/php -m
```
安装扩展请查看：[Mac Homebrew1.5以后安装php扩展的方法](https://www.xiebruce.top/607.html)。

### 试试右击任意图片
看，最后一个按钮是不是就是你刚刚保存的Services名称？如果你电脑上没看见，是因为你电脑上超过5个这种类似的菜单，它就自动收到二级菜单下了，其实很多菜单根本用不到，你可以到`系统偏好设置`→`键盘`→`快捷键`→`服务(Services)`里面找到对应的按钮，把它们的勾去掉就行：
![Xnip2018-09-07_23-58-26.png](https://img.xiebruce.top/2018/09/08/66b431b893bc5b2abc456b6bf4f0b6ee.png)

如果一切正常，你对着图片右击，并点击右键菜单中的`获取Markdown链接`后，你将会在Mac顶部工具栏那里看到一个小齿轮在转动，说明图片正在上传，当小齿轮停止转动(不需要等它消失)，即说明上传已经完成，同时右上角会弹出通知，此时剪贴板已经有你上传的图片地址了，直接到markdown编辑器`command+v`粘贴试试吧。  
![](https://img.xiebruce.top/2018/08/29/79fe0db0bfbecca78bde951f90554fb4.png)
### 为你的服务创建快捷键
`系统偏好设置`→`键盘`→`快捷键`→`服务(Services)`→找到你的自定义菜单添加快捷键即可，添加快捷键后，假设你双手都在键盘上，用空格预览一张图后，决定把它上传，那么只要使用方向键选中它，然后直接按快捷键即可，当然喜欢用鼠标搞定的童鞋也可以不创建。
![screenshot_upload_tmp.jpeg](https://img.xiebruce.top/2019/03/27/bb36752960436e674dd3174fb830976a.jpeg)
### 查看上传日志
因为在配置文件中的`logPath`可以配置日志显示在桌面，'logPath' => 'desktop' ，所以不出意外，你的桌面装会有一个如下图所示的文件夹，这里保存了你上传的图片的Markdown外链地址，你在七牛云（或者其他服务器）是能找到对应的图片的，如果你觉得哪张图片不想要，可以在对应服务器中把它删除了。  
![](https://img.xiebruce.top/2018/11/19/cc344641965d5d79aa6c2aba8f408552.jpg)

这个日志文件也是markdown格式，所以你可以用markdown编辑器查看它，日志是倒序添加的，即最新上传的图片在最前面。

为防止一时忘了粘贴又不小心复制了其他的内容，可以使用
[Alfred](https://www.xiebruce.top/64.html#Alfred)的历史记录功能找到，当然也可以用`Paste`剪贴板记录软件找到。

Win10由于权限原因，无法给logs文件夹创建快捷方式到桌面，你必须自己发送到桌面快捷方式。
![-w755](https://img.xiebruce.top/2019/03/27/6e039e2527df56a5957b667be038a1e8.jpg)

## 在Windows上使用
在Windows上配置环境及右键菜单请查看：[PicUploader-Windows-README.md](https://github.com/xiebruce/PicUploader/blob/master/PicUploader-Windows-README.md)

## MWeb配置
请查看：[PicUploader-Web端/Mweb的配置与使用](https://github.com/xiebruce/PicUploader/blob/master/PicUploader-Web.md)

## 使用快捷键上传助手(v2.6.3新增)
### Mac版上传助手
在PicUploader的`accessorys`文件夹中找到`PicUploaderHelper-macOS.zip`，或者也可以在这里下载：[PicUploaderHelper-macOS.zip](https://github.com/xiebruce/PicUploader/blob/master/accessorys/PicUploaderHelper-macOS.zip)
上传助手使用文档请查看：[PicUploaderHelper-macOS-README.md](https://github.com/xiebruce/PicUploader/blob/master/PicUploaderHelper-macOS-README.md)
### Windows版上传助手
在PicUploader的`accessorys`文件夹中找到`PicUploaderHelper-Windows.zip`，或者也可以在这里下载：[PicUploaderHelper-Windows.zip](https://github.com/xiebruce/PicUploader/blob/master/accessorys/PicUploaderHelper-Windows.zip)
上传助手使用文档请查看：[PicUploaderHelper-Windows-README.md](https://github.com/xiebruce/PicUploader/blob/master/PicUploaderHelper-Windows-README.md)

## 其他
### 关于压缩
- 原压缩选项`imgWidth`即将废弃，建议使用新的压缩选项`resizeOptions`，当这两个选项同时存储的情况下会使用`resizeOptions`选项，此时`imgWidth`选项无效。
- 由于gif图片实际上是由很多张图片组合在一起的，它的压缩比较麻烦，需要Mac装一些额外的库，所以暂时选择不压缩gif。
- 如果你用的是七牛云，则返回的图片地址中『?imageMogr2/thumbnail/800x/strip/quality/80』这部分是七牛云的压缩参数(如果你配置了的话)，也就是说这部分参数你可以去掉直接查看你上传的图，其中thumbnail/800x表示设置宽度为800，strip表示去除一些exif信息以减小图片大小，quality/80表示设置图片质量为原来的80%，其实还可以在最后加个/format/webp这样图片加载会快很多，因为webp能在最大程度还原图片清晰度的同时把图片体积降到最小。

### 安装管理工具
因为图片上传到七牛云后，在七牛的后台实在无法直观的浏览和管理图片，如果你希望方便管理你的图片，可以下载两款谷歌浏览器插件：
- [qiniu upload files](https://chrome.google.com/webstore/detail/qiniu-upload-files/emmfkgdgapbjphdolealbojmcmnphdcc) 用来管理七牛云上的图片
- [七牛云图床](https://chrome.google.com/webstore/detail/%E4%B8%83%E7%89%9B%E4%BA%91%E5%9B%BE%E5%BA%8A/fmpbbmjlniogoldpglopponaibclkjdg) 一款可以让你直接上传图片到七牛云的工具，但是它没有分文件夹。
- 腾讯COS官方MacOS客户端：[点击前往下载](https://cloud.tencent.com/document/product/436/11366)
- 百度BOS官方MasOS客户端：[点击前往下载](https://cloud.baidu.com/doc/BOS/BOSCLI.html#.E4.B8.8B.E8.BD.BD)
- 如果是又拍云，因为又拍云没有网页管理工具，只能自己用ftp工具查看。
- 其他云...自己找吧。

### 上传完成无法弹出通知问题
- 一般情况下，上传完成后右上角就会弹出通知，如果你没有弹出，有可能是因为系统没更新的问题，像我的系统版本一直是10.13.1，我的就不弹，但是我让别人试就会弹（后来我更新10.14(Mojave)系统后，就能正常弹出提示了）。
- 如果你的系统也没更新，那有可能也不会弹通知，那就只能看工具栏上的小齿轮，小齿轮停止转动说明上传完成（不需要等小齿轮消失，停止转动即已完成），然后就可以去markdown编辑器粘贴了。

### 说个不幸的消息
- 七牛云默认域名是测试域名，只能使用30天，30天后该域名会被回收，所以你需要绑定自己的域名，但绑定自己的域名需要域名已经备案，而域名备案是跟网站一块的，就是说如果你只买了域名没有自己的网站的话，是无法备案的，这时你可以看看有没有朋友有已备案的域名，叫他给你解析一个二级域名也行，因为一个人一般只用一两个二级域名，所以会有很多二级域名可用的。
- 又拍云也提供默认测试域名，不过我问过又拍客服，又拍云的测试域名是不会回收的，也就是你可以一直使用，不需要有自己已备案的域名，但缺点是，又拍云的默认域名提供的cdn服务器比较少，也就是说，你用又拍云默认的域名可能加载图片会相对比较慢（相对绑定自己的域名来说），但具体有多慢，我没有试过，所以也是建议你绑定自己的域名，当然了，又拍云绑定自己的域名，同样要求域名已备案，国内所有云都有这个要求！
- 其他域名都不会回收，所以如果没有自己的网站，用七牛做云存储其实可以首先排除了！

## 更新日志
**2019-04-10 v2.7版本**
- 新增web界面，可在界面上设置参数，可以web界面上拖拽传图、复制图片文件后在上面直接粘贴传图、截图复制到剪贴板后直接在上面粘贴传图。

**2019-04-10 v2.6.6版本**
- fixbugs
- 修改压缩方式为指定压缩比例及宽、高、图片文件大小超过指定值时才进行压缩

**2019-03-30 v2.6.5版本**
- 添加支持Github图床
- 添加支持Weibo图床

**2019-03-27 v2.6.4版本**
- 修改windows的右键安装工具为中文，修改编码为ANSI-GB2312(之前utf-8会导致中文菜单乱码)，添加自定义菜单文字的功能。
- 修改默认字体文件名为拼音，因为在win10中测试如果字体为中文名会导致找不到字体文件
- 添加windows上的配置文档，详细讲解如何配置
- 修改图片处理插件中的抛出异常的bug
- 添加Windows版PicUploaderHelper及其配置使用文档

**2019-03-25 v2.6.3版本**
- 支持全局快捷键上传剪贴板中的图片

**2019-01-12 v2.6.2版本**
- 添加mweb支持
- 添加网页版上传支持

**2018-12-06 v2.6.1版本**
- 添加支持Windows系统（理论上Linux系统一样可用，只要你能通过右键菜单或快捷键调用上传命令）

**2018-11-24 v2.6版本**
- 添加青云QingCloud及Ucloud的支持
- 修改结构，去除冗余代码
- 添加支持同时上传到多个云

**2018-11-15 v2.5.2版本**
- 用户指定日志位置后，只创建日志软链接(快捷方式)，日志原文件存储在项目目录下的logs目录中

**2018-11-13 v2.5.1版本**
- 修复压缩无效的bug
- 修复压缩临时文件未删除的问题
- 添加压缩质量配置

**2018-11-11 v2.5版本**
- 添加支持Imgur

**2018-10-20 v2.4版本**
- 添加水印支持（支持文字水印、图片水印）
- 去掉了上传到sm.ms同时返回了删除链接的问题，但日志里还是会有删除链接

**2018-09-21 v2.3版本**
- 修改config结构
- 使用变量类名动态识别调用不同存储类型对应的类以精简代码
- 在每个类里动态调用配置文件

**2018-09-19 v2.2.2版本**
- 添加又拍云支持

**2018-09-08 v2.2.1版本**
- 解决图片文件名为中文时粘贴乱码或者无法粘贴的问题
- 修改了README.md中说的不清楚的地方，部分英文菜单改用中文

**2018-09-06 v2.2版本**
- 添加支持百度云
- 添加支持京东云
- 添加支持阿里云

**2018-09-06 v2.1版本**
- 添加支持网易云
- bug fix

**2018-09-06 v2.0版本**
- 完全重构代码
- 添加支持腾讯云
- 添加上传日志路径配置（可配置到桌面方便随时查看）

**2018-09-01 v1.1版本**
- 添加支持[https://sm.ms](https://sm.ms)，默认上传到sm.ms
- 添加mardownWithLink链接类型（点击图片后能跳转到图片链接）
- fix bug log时间设置成东八区

**2018-08-30 v1.0版本**
- 由于个人写markdown需要，目前现有的一些笔记软件都因为各种原因传图并不是很方便，于是写了这个小工具，想到可能有跟我一样需求的童鞋，就顺手发出来供有需要的童鞋使用，如有处理不好的地方在所难免，希望大家能批评指正！

## 参考资料
[七牛云phpsdk文档](https://developer.qiniu.com/kodo/sdk/1241/php)  
[百度知道：没有个人网站怎么注册七牛云存储](https://zhidao.baidu.com/question/714797122999158885.html)  
[sm.ms Api](https://sm.ms/doc/)  
[GuzzleHttp官方文档](http://docs.guzzlephp.org/en/stable/quickstart.html#post-form-requests)  
[腾讯云phpsdk文档](https://cloud.tencent.com/document/product/436/12266)  
[网易云phpsdk文档](https://www.163yun.com/help/documents/15677641583214592)  
[阿里云phpsdk文档](https://help.aliyun.com/document_detail/32101.html?spm=a2c4g.11186623.4.2.70d8c839FzL6jV)  
[京东云phpsdk文档](https://www.jdcloud.com/help/detail/1910/isCatalog/1)  
[百度云phpsdk文档](https://cloud.baidu.com/doc/BOS/PHP-SDK.html#.E5.AE.89.E8.A3.85SDK.E5.B7.A5.E5.85.B7.E5.8C.85)  
[又拍云phpsdk文档](https://github.com/upyun/php-sdk)  
[Imgur API](https://apidocs.imgur.com/#2078c7e0-c2b8-4bc8-a646-6e544b087d0f)  
[使用github的api上传文件到项目](https://stong-chen.github.io/2018/11/06/%E4%BD%BF%E7%94%A8github%E7%9A%84api%E4%B8%8A%E4%BC%A0%E6%96%87%E4%BB%B6%E5%88%B0%E9%A1%B9%E7%9B%AE22/#%E5%88%9B%E5%BB%BAtoken)  
[REST API v3 - Create a file](https://developer.github.com/v3/repos/contents/#create-a-file)  
[cURL error 60: SSL certificate: unable to get local issuer certificate
](https://stackoverflow.com/questions/29822686/curl-error-60-ssl-certificate-unable-to-get-local-issuer-certificate/34883260#34883260)  
[新浪图床API接口及源码](http://blog.kkksos.com/2018/09/21/12.html)  
[google](http://www.google.com/ncr)  
[百度](http://www.baidu.com)  
