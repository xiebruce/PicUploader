# Register-Cloud-Storage.md

## 七牛云
### 1. 接入七牛云需要的参数
以下是接入七牛云需要的参数，注册的时候留意一下这些参数在哪里能找到：

- `AppKey`、`AppSecret`：这两个是一对，就好像账号与密码一样；
- `bucket`：云存储空间名称，一般叫“桶”，也可直接叫`bucket`；
- `domain`：外链域名

### 2. 注册七牛云
- 七牛云地址：[https://www.qiniu.com](https://www.qiniu.com)
- 注册时，选择『个人账户』，注意姓名一定要真实姓名，因为后面要实名认证，『输入个人网站』一栏可以输入你自己的博客地址（不一定要自己搭的，比如博客园的也行），或者干脆随便输一个也行。
- 注册后上传手持正反面身份证照片上传进行实名认证，你上传的照片没问题的话，最多三天，最少可能一两小时即可认证通过。
- 实名认证通过后你会收到一封邮件，邮件里有说免费额度
![Xnip2018-09-06_06-29-41.png](https://img.xiebruce.top/2018/09/06/343043714f49175069ec0113e4c43318.png)

### 获取密钥
进入[七牛云管理控制台](https://portal.qiniu.com)，选择右上角的头像→密钥管理：
![-w626](https://img.xiebruce.top/2019/04/09/7f268b7efad151b5185bf52743dfa99a.jpg)

下图的AK和SK即为配置文件中的`AK`和`SK`值：
![screenshot_upload_tmp.jpeg](https://img.xiebruce.top/2019/04/09/9fd5b8c474b63c3bf4080fd222395f24.jpeg)

### 3.新建存储空间
- 实名认证通过后，选择『新建存储空间』，存储空间就是上面据说的参数`bucket`：
![](https://img.xiebruce.top/2018/08/29/9d384dba74d300c690fdca06f5855cbe.png)

- 点击『内容管理』，现在你可以在这里手动上传图片试试了，注意这里有个『外链默认域名』，也就是第1点提到的domain参数
![](https://img.xiebruce.top/2018/08/29/2f9a1fbd9cfa7ffbfb59c4d0848e797a.png)

### 4、添加域名
由于七牛云的默认域名30天后会被回收，所以你必须添加自己的域名，并且自己的域名还必须是备案过的，而备案一个域名又需要有一个自己的网站，因为域名是用来访问网站的，没有网站而给域名单独备案是没有意义的，所以不存在单独给域名备案的情况，一定要有对应的个人网站，如果你没有个人网站或者你网站在国外服务器上是无法备案的，那么请放弃七牛云吧，或者跟朋友要一个备案过的子域名来用也行。

选择`融合CDN`→`域名管理`→`添加域名`（这个添加的域名就是配置文件中的`domain`值）：
![screenshot_upload_tmp.jpeg](https://img.xiebruce.top/2019/04/09/14ed037b0c35ab407b90dde8e3706175.jpeg)

按下图填写：
![screenshot_upload_tmp.jpeg](https://img.xiebruce.top/2019/04/09/58398644da2cc4e986de414913b43047.jpeg)

继续填写，其他保持默认即可：
![screenshot_upload_tmp.jpeg](https://img.xiebruce.top/2019/04/09/deb9eb65585b4772f818cbd300651457.jpeg)

### 4. 完成
到这里我们已经拿到了AppKey(AK)、AppSecret(SK)、bucket、domain四个参数了，拿着这些参数就可以接入七牛云使用它的对象存储功能了，注意这个domain值不能不填，必须填，因为七牛没有长期可用的默认域名。

## 腾讯云
### 1、接入腾讯云需要的参数
appId、secretId、secretKey、bucket、region、domain

### 2、注册腾讯云
[点击前往腾讯云](https://cloud.tencent.com)，一般使用QQ号或微信号登录即可。
### ３、获取Appid和密钥
进入[控制台](https://console.cloud.tencent.com)，点击右上角自己的账号→`访问管理`：
![Xnip2019-04-09_16-21-51.jpg](https://img.xiebruce.top/2019/04/09/ae5f21ad749954fbd97900bd6446b90d.jpg)

点击`API密钥管理`：
![Xnip2019-04-09_16-22-55.jpg](https://img.xiebruce.top/2019/04/09/fb0ef6568112d35291ac920fcefb53ea.jpg)

它会问你是否使用子账户，由于我只是个人使用，所以我直接选择`继续使用`，也就是我不使用子账户：
![Xnip2019-04-09_16-23-19.jpg](https://img.xiebruce.top/2019/04/09/bbf21ac8bb0db3c7f2dcbeb71f89e857.jpg)

点击`新建密钥`即会自动产生一个密钥，此时你就能看到配置文件中的`AppId`、`SecretId`、`SecretKey`这三个值，填到配置文件中：
![Xnip2019-04-09_16-26-59.jpg](https://img.xiebruce.top/2019/04/09/92288265c79953b6f53c58fa82b468f0.jpg)

### 创建存储桶
点击`云产品`→`对象存储`：
![Xnip2019-04-09_16-20-21.jpg](https://img.xiebruce.top/2019/04/09/1f1cd209a4ff9d35d9ab3a4120a42223.jpg)

创建一个存储桶
![Xnip2019-04-09_16-39-12.jpg](https://img.xiebruce.top/2019/04/09/8b0bdf2ba8b2c5fa0b275c77e89c5fd1.jpg)

创建后，配置文件中的`bucket`和`region`值就在这里：
![Xnip2019-04-09_16-41-20.jpg](https://img.xiebruce.top/2019/04/09/d1591f3ac96092cb0a0e01287e6c93c0.jpg)

### 完成
到这里，我们已经拿到了appId、secretId、secretKey、bucket、region值，而domain的话，我们可以不填(留空)，不填会自动使用默认腾讯云给的默认域名，填了就会使用填的域名。

## 网易云
### 1、接入网易云需要的参数
accessKey、accessSecret、bucket、endPoint、domain。

### 2、注册网易云
[点击前往网易云](https://www.163yun.com)，请自行注册并认证。

### 3、获取密钥
进入网易云[控制台](https://console.163yun.com)，点击右上角`用户名`→`AccessKey`：
![Xnip2019-04-09_16-44-43.jpg](https://img.xiebruce.top/2019/04/09/d3c1e744bf7ea4bdd07a37e0cfb2a103.jpg)

创建一个`AccessKey`，配置文件中的`accessKey`及`accessSecret`值就在这里：
![Xnip2019-04-09_16-46-47.jpg](https://img.xiebruce.top/2019/04/09/c9b3de5a9cf67f5c316e8a573bcc32d7.jpg)

### 创建存储桶
`云产品`→`云计算基础服务`→`对象存储`：
![Xnip2019-04-09_16-48-30.jpg](https://img.xiebruce.top/2019/04/09/7edef6dbcb4d4d7e1f718f35bbf5ba33.jpg)

点击`桶管理`→`创建桶`，创建之后，这里的“桶名称”就是配置文件中的`bucket`要填的值：
![Xnip2019-04-09_16-50-38.jpg](https://img.xiebruce.top/2019/04/09/37ece9635fe69501bcce367d39525ded.jpg)

点击桶名→选择`域名管理`，如下图所示，外网的endpoint值，即为配置文件中的`endpoint`值：
![Xnip2019-04-09_16-54-48.jpg](https://img.xiebruce.top/2019/04/09/42a25639d5174628a48496be012f95fa.jpg)

### 完成
至此我们已经拿到了accessKey、accessSecret、bucket、endPoint参数，至于domain，可以不填，如果填了就会使用填的，不填会自动使用默认的。

## 百度云
### 1、接入百度云需要的参数
accessKeyId、secretAccessKey、endpoint、bucket、domain

### 2、注册百度云
[点击前往百度云](https://www.163yun.com)，请自行注册并认证。

### 3、获取密钥
进入[百度云控制台](https://console.bce.baidu.com)，点击右上角头像→`安全认证`：
![Xnip2019-04-09_17-16-00.jpg](https://img.xiebruce.top/2019/04/09/b66c99becd37670342e5d402ecb82a39.jpg)

创建一个`AccessKey`，即可得到配置文件中的`accessKeyId`和`secretAccessKey`参数，
![Xnip2019-04-09_17-15-31.jpg](https://img.xiebruce.top/2019/04/09/c3d64852a50746c2e4ce3b86a2bf4952.jpg)

### 创建存储桶
`总览`→`产品服务`→`存储和CDN`→`对象存储BOS`：
![Xnip2019-04-09_17-18-59.jpg](https://img.xiebruce.top/2019/04/09/f7404d4d995fccd08550d8a84ec91662.jpg)

创建一个存储桶(即bucket)，配置文件中的bucket参数就是你自己取的bucket名：
![screenshot_upload_tmp.jpeg](https://img.xiebruce.top/2019/04/09/5e27d16628f7169d0e30bedcde9feaa4.jpeg)

而`endpoint`参数只在文档里有说明：[Bucket管理](https://cloud.baidu.com/doc/BOS/PHP-SDK.html#.83.E7.DD.BB.93.23.D8.72.D6.25.25.E5.28.FA.73.FA)，目前就三个：
- 北京区域：http://bj.bcebos.com
- 广州区域：http://gz.bcebos.com
- 苏州区域：http://su.bcebos.com

### 完成
至此我们已经拿到了accessKeyId、secretAccessKey、endpoint、bucket参数，至于domain可以不填，不填会自动使用默认的域名，填了就会使用填的域名。

## 京东云
### 1、接入京东云需要的参数
key、secret、endpoint、region、bucket、domain

### 注册京东云
[点击前往京东云](https://www.163yun.com)，请自行注册。

### 获取密钥
进入[京东云控制台](https://console.jdcloud.com/overview)，点击左上角用户名→`Access Key管理`：
![screenshot_upload_tmp.jpeg](https://img.xiebruce.top/2019/04/09/6acd76b336cfc929be3e3d72c7286dfc.jpeg)

配置文件中的`key`和`secret`参数就是这里的`Access Key ID`和`Access Key Secret`：
![screenshot_upload_tmp.jpeg](https://img.xiebruce.top/2019/04/09/a9cdf16f1740ce65afbaaa9dcf5feb19.jpeg)

### 创建存储空间
选择`产品`→`对象存储`：
![screenshot_upload_tmp.jpeg](https://img.xiebruce.top/2019/04/09/3a5747b3b6f13a15a3f38523c7700a10.jpeg)

空间管理→新建空间，这里的“空间名称”就是配置文件中的`bucket`值：
![screenshot_upload_tmp.jpeg](https://img.xiebruce.top/2019/04/09/93dd70b6a4a74b82aa44c6295134bab5.jpeg)

点击“空间名称”进入以下界面，配置文件中的`endpoint`值就在这里，另外配置文件中的`region`值即为endpoint中“s3”后面的“cn-south-1”，创建bucket选择的地域不同，这个值可能会有所不同：
![Xnip2019-04-09_17-53-14.jpg](https://img.xiebruce.top/2019/04/09/ee5237b90a334ceb56fa290e544b8032.jpg)

### 完成
key、secret、endpoint、region、bucket，至于domain可以不填，不填会自动使用默认的域名，填了就会使用填的域名。

## 阿里云
### 1、接入阿里云需要的参数
accessKey、accessSecret、bucket、endpoint、domain

### 2、注册阿里云
[点击前往阿里云](https://www.163yun.com)，请自行注册。

### 3、获取密钥
进入[阿里云控制台](https://home.console.aliyun.com)，点击右上角用户名→`accesskeys`：
![Xnip2019-04-09_16-58-54.jpg](https://img.xiebruce.top/2019/04/09/5a91d20f0e64d51c5e4fe1eeea02eebb.jpg)

然后它会问你是否要使用子账户，由于我是个人使用，所以不使用子账户，直接选择`继续使用AccessKey`：
![Xnip2019-04-09_16-59-15.jpg](https://img.xiebruce.top/2019/04/09/767f7b5145949633f68ac688b3bdf971.jpg)

然后创建一个`AccessKey`，配置文件中的`accessKey`和`accessSecret`参数就在这里：
![Xnip2019-04-09_17-01-52.jpg](https://img.xiebruce.top/2019/04/09/943c9ac16b49121bebab2a5470b3abd8.jpg)

### 创建存储桶
选择`产品与服务`→`对象存储OSS`：
![Xnip2019-04-09_17-03-24.jpg](https://img.xiebruce.top/2019/04/09/39d7a3eda76d717024382839845c2dd5.jpg)

创建一个bucket，即可获取到`bucket`、`endpoint`两个参数的值并填入配置文件中：
![Xnip2019-04-09_17-08-53.jpg](https://img.xiebruce.top/2019/04/09/56b494202fd819d471cbb9778200ac4f.jpg)

### 完成
至此我们已经拿到了accessKey、accessSecret、bucket、endpoint参数，至于domain可以不填，不填会自动使用默认的域名，填了就会使用填的域名。

## 又拍云(Upyun)
### 1、接入又拍云需要的参数
serviceName、operator、password、domain

### 2、注册又拍云
- [点击前往注册又拍云](https://console.upyun.com/register)
![注册又拍云.png](https://img.xiebruce.top/2018/10/25/1acb66e707ea05db7c3c973785f9bf86.png)

- 实名认证，但由于我已经实名认证了，我没法截图，网上也很难找到截图，我找了一张很模糊的，不过还是能看清的：
![Xnip2018-10-25_13-49-24.png](https://img.xiebruce.top/2018/10/25/c567b6550a6a24fe5903dd990480b170.png)
**认证方式：**支付宝芝麻信用有700分以上选支付宝芝麻信用认证，没有的话选人工（选人工应该要上传手持身份证的照片）
**所属行业：**我的是博客，所以我选的是`门户网站`→`博客`
**网站/产品：**就填你的网站名称（暂时没有就随便想一个）
**网站地址：**写你自己搭建的博客域名，没有的话用csdn，博客园，新浪博客之类的博客地址，再没有的话好像也可以不写
**个人名称：**写你的姓名（跟身份证要一样）
**身份证号码：**如实填写，否则无法通过实名认证

- 点击右上角`控制台`
![Xnip2018-10-25_11-31-20.png](https://img.xiebruce.top/2018/10/25/13d8950a67bc527e1a4db38200f26e3f.png)

- 选择`云产品`→`云存储`：
![Xnip2018-10-25_11-34-19.png](https://img.xiebruce.top/2018/10/25/5a7e53127447566f7b23569b5085bb80.png)

- 点击右上角创建服务：
![Xnip2018-10-25_11-36-21.png](https://img.xiebruce.top/2018/10/25/badc8d690737ce0cc75c2cd7e7ac4455.png)

- 按下图填写信息并创建，上面说了，要上传图片到又拍云需要四个参数，这里面已经有serviceName、operator、password三个参数了，注意把这些参数记下：
![Xnip2018-10-25_11-48-23.png](https://img.xiebruce.top/2018/10/25/63fd32aaaacdd11a44f8b9c06301cc53.png)

- 创建完服务点击保存后，可以看到你创建好的服务，其中有一个`加速域名`，这个即是“domain参数”，这样四个参数都已经得到了，然后你就可以填写到配置文件中使用了！
![Xnip2018-10-25_14-48-14.png](https://img.xiebruce.top/2018/10/25/5bc8baf922c93af7e48bf09dbbb461ae.png)

- 测试是否能正常使用
下载[fileZilla](https://filezilla-project.org/download.php?type=client)，然后按下图填写配置：
![Xnip2018-10-25_15-02-32.png](https://img.xiebruce.top/2018/10/25/851b5421ed830a6ef059c0c96e7de7ae.png)
其中，host是这个：v0.ftp.upyun.com，我写出来免得你手敲了！

- 如果能连上，那就说明没问题，如果不能连上，请查看右上角用户名→账户管理
![Xnip2018-10-25_15-06-07.png](https://img.xiebruce.top/2018/10/25/c075e6147b47d715ac441f86a842d24d.png)
- 然后点击`操作员`→`授权`→`管理`，查看是否已经给了这个操作员权限，如果没有给，则给它加上权限，然后再试，应该就没问题了
![Xnip2018-10-25_15-10-29.png](https://img.xiebruce.top/2018/10/25/d9a8751147ccf2b52147be5e6d31fea4.png)

- 申请[又拍云联盟](https://www.upyun.com/league)，获取每月10G存储空间+15G流量免费额度（这个链接里就有告诉你怎么申请）
[![Xnip2018-10-25_15-13-48.png](https://img.xiebruce.top/2018/10/25/41493ed9825ad37c5001cee51aa9f122.png)](https://www.upyun.com/league)

[![Xnip2018-11-05_12-42-58.png](https://img.xiebruce.top/2018/11/05/b4b791a41e0af453a1d0892e4c1c1771.png)](https://www.upyun.com/league)

- 主要就是要在自己网站上放一个又拍云logo(并且点这个logo可以跳转到又拍云官网)，位置的话，你可以放在网站底部，或者放在你觉得可以放的地方都可以，不限制位置，而且它的logo有各种不同的大小，样式，颜色等，你选一个适合自己网站的即可：
![Xnip2018-11-05_12-46-14.png](https://img.xiebruce.top/2018/11/05/d2090b6c08cf1276e869ba546fc6ee23.png)

- 放完logo后点上图第3步中的『立即申请』即可。

### 完成
至此，你已经拿到了serviceName、operator、password、domain四个参数了，其中domain可以不填，不填会默认使用又拍云的默认域名，填了就会使用填的域名，如果你自己添加过域名，那么就必须填了。

注意：请不要开启全球cdn，开国内的就可以，国外cdn超贵。

## sm.ms(无需注册)
- [sm.ms](http://sm.ms)的域名为“http://sm.ms”，经过测试，在国内(不含港澳台)使用sm.ms时好时坏，除非开科学上网，否则不稳定，如果小齿轮一直转个不停，基本上就是上传失败超时了。
- 设置代理：可以上传的情况下不建议设置代理，如果上传超时、报错，则设置代理试试，直接在配置文件填写代理的ip+端口即可，如（127.0.0.1:1087），不过设置代理后上传速度会稍慢（具体快慢取决于你的代理速度）:
```php
//https://sm.ms
'smms' => [
    'baseUrl' => 'https://sm.ms/api/',
    //代理地址，如果使用shadowsocks做代理，ip填http://127.0.0.1（或直接填127.0.0.1）即可，
    //端口从『偏好设置→HTTP→监听端口』找，留空或注释掉表示不使用代理
    'proxy' => 'http://127.0.0.1:1087',
],
```
- 注意sm.ms单张图片不能超过5M，但由于我有做压缩，一般不会超过5M，如果上传后粘贴没有内容或者报错，请查看日志，很有可能是这张图片压缩后超过了5M，或者图片是超过5M的gif图（gif图不压缩）

## Imgur
- 先注册Imgur：[https://imgur.com/register](https://imgur.com/register)并登录。
- 然后点击[addclient](https://api.imgur.com/oauth2/addclient)创建Application，这一步能拿到clientID和clientSecret：
![Xnip2018-11-11_03-56-35.png](https://i.loli.net/2018/11/11/5be737f29d355.png)
- 虽然注册了Imgur，但用我这个工具上传后，你还是无法从你的Imgur账号上找到你上传的图片，原因是PicUploader不是网页应用，所以无法做授权(Imgur不提供其他授权方式，所以上面拿到的clientSecret并没有什么用处)，所以，用Imgur做图床还是相当于匿名图床。
- 另外，因为Imgur是国外的，如果上传报错，请使用科学上网工具，并在配置文件中打开代理的注释，填写你的代理端口。

## Ucloud
### 1、接入Ucloud需要的参数
publicKey、privateKey、proxySuffix、bucket、endPoint、domain

### 2、注册Ucloud
[点击前往注册Ucloud](https://www.ucloud.cn)，请自行注册并认证。

### 3、获取密钥
进入[控制台](https://console.ucloud.cn)，点击`右上角头像`→`API 密钥`→点击`显示`即可看到`publicKey`和`privateKey`。

### 4、创建存储空间
创建存储空间时，如下图，“存储空间域名”里，你自己填的部分就是`bucket`参数值，后面部分就是`proxySuffix`参数值(注意是`.`开头的)  
![screenshot_upload_tmp.jpeg](https://img.xiebruce.top/2019/04/09/5d656126aadaaae53ee69eeb27044239.jpeg)

创建存储空间之后，在列表里看也是一样的，自己填的那部分是“bucket”参数值，剩下的部分就是“proxySuffix”参数值：  
![screenshot_upload_tmp.jpeg](https://img.xiebruce.top/2019/04/09/ea623f106408f29840dac9b2bc4b2e93.jpeg)

点击存储空间名，选择`域名管理`，如下图的值即为domain值，如果你没有添加自定义域名，这个domain值你不用添加到配置文件中，程序会自动使用默认域名，如果添加了自定义域名，就要把自定义的域名填写到配置文件中：
![screenshot_upload_tmp.jpeg](https://img.xiebruce.top/2019/04/09/5004ea320d72f92f6c4ea309292a72b2.jpeg)

### 5、完成
至此，我们已经拿到了publicKey、privateKey、proxySuffix、bucket，而endPoint是固定的，我们直接使用`.ufile.ucloud.com.cn`作为endPoint值，其实就是上边的domain值除去bucket名部分，比如我的domain为`blog-markdown.ufile.ucloud.com.cn`，bucket名为前面的`blog-markdown`，剩下的`.ufile.ucloud.com.cn`部分即为配置文件中需要的`endPoint`值。

### 青云(QingCloud)
### 1、接入青云需要的参数
accessKeyId、secretAccessKey、bucket、zone、domain

### 2、注册青云
[点击前往注册QingCloud](https://console.qingcloud.com/signup)

### 3、获取密钥
进入[控制台](https://console.qingcloud.com)，点击右上角的用户名，选择`API 密钥`→点击`创建`，输入一个名称，比如`Accesskey`，这个名称是随意输入的，描述可以不写：
![Xnip2019-04-09_16-01-16.jpg](https://img.xiebruce.top/2019/04/09/978c11a13953b729584639897c2f7db1.jpg)

点击确定后，会弹出以下框，它会让你下载一个叫`access_key.csv`的文件：
![Xnip2019-04-09_15-57-56.jpg](https://img.xiebruce.top/2019/04/09/3d34cef9bb07d6539e687487c8b480df.jpg)

里面的两个key，即为配置文件中要填的`accessKeyId`与`secretAccessKey`：
![Xnip2019-04-09_16-03-45.jpg](https://img.xiebruce.top/2019/04/09/47c8d5fe554b15bd1a95dc221827fab7.jpg)

### 创建存储空间
选择一个区域（每个区域都可以创建一个对象存储）：
![Xnip2019-04-09_16-08-56.jpg](https://img.xiebruce.top/2019/04/09/7f5c87b6c15fcaf5b55e2a64690ffb4d.jpg)

然后选择`存储`→`对象存储`
![Xnip2019-04-09_16-09-19.jpg](https://img.xiebruce.top/2019/04/09/ef24dbc9f5ed7481b0c324e792fb130a.jpg)

然后创建bucket(名字自己随便取，就是创建一个存储空间的意思)：
![Xnip2019-04-09_16-09-31.jpg](https://img.xiebruce.top/2019/04/09/2caff42d63d6010bf32167e5e2036872.jpg)

创建后，Url中你的bucket名后面的那个即为配置文件中要使用的`zone`值，比如北京是`pek3b`：
![Xnip2019-04-09_16-10-33.jpg](https://img.xiebruce.top/2019/04/09/082881af45df20323f18d9b6ffa91cb9.jpg)

广东的是`gd2`：
![Xnip2019-04-09_16-10-05.jpg](https://img.xiebruce.top/2019/04/09/3aaa59afd72112770bcc3db1f2c1c84c.jpg)

### 完成
至此我们已经拿到了accessKeyId、secretAccessKey、bucket、zone参数，而domain可以不填，不填会自动使用默认域名，如果你自己添加过域名，那么就必须填你添加的域名。

## Github
### 1、接入Github需要的参数
repo、branch、directory、message、access_token、domain，而baseUri是固定的，不需要修改。

### 2、注册github
[点击前往Github](https://github.com)，请自行注册。

### 3、获取access_token
点击右上角自己的头像→`Settings`→选择左侧菜单的最后一项`Developer Settings`→选择`Personal access tokens`→点击`Generate new token`→它会跳转让你输入github的登录密码→生成token成功。

### 3、创建存储仓库
Github做图床，首先要创建一个仓库：点击Github右上角的`+`号→`New repository`→输入仓库名即可创建仓库。

如下图，就是一个github仓库，它的仓库名称为`xiebruce/PicUploader`(对应配置中的`repo`参数)，当前分支名称是`master`(对应配置中的branch参数)：
![Xnip2019-03-29_04-58-20.jpg](https://img.xiebruce.top/2019/03/29/3904db6a63e8ea6058ca3022ccdab1c0.jpg)

配置中的“message”：
![Xnip2019-03-29_05-20-15.jpg](https://img.xiebruce.top/2019/03/29/d99d7e4c06b0fec0e1513b623d5b20ea.jpg)

删除github中的文件：
![Xnip2019-03-30_17-25-11.jpg](https://img.xiebruce.top/2019/03/30/aac433aeb9c5e8fce1b06357809b1214.jpg)

### 4、完成
至此，我们已经得到了repo、branch、access_token，而message只是提交后显示的备注信息，自己喜欢用什么备注信息可以自己写，至于directory，它是存储目录，留空就存到根目录下，可以自己写类似`images/travel/Turkey`这样的多级目录作为存储目录，域名可以不填，不填会使用默认域名，填了会使用填了的域名(主要用于自己做了nginx反向代理提供统一的域名)

## 微博
- 只需要有微博账号，在配置文件中填写微博的登录账号(username)和密码(password)，即可使用！
- 微博图床是上传图片到新浪微博，但上传图片并不会自动发一条微博，图片是匿名的，你也无法在自己的微博相册中找到，所以不用担心上传图片会自动发微博。
- 微博图床并不是官方提供接口，而是网友通过模拟登录微博并使用mini微博的上传图片接口间接实现的，稳定性请自行网上了解。
- 微博上传偶尔会出现一次速度略慢的情况，这是因为在登录获取cookie(获取一次可以使用24小时，24小时后再上传图片会自动登录获取新cookie)。