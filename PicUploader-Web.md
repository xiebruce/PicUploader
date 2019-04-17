# PicUploader-Web端/Mweb的配置与使用
## 先看一下效果
Web端上传图片示例：支持拖拽上传、截图粘贴上传、复制图片文件粘贴上传，如果gif图看不了，点这里看[web-upload-demo.gif](https://img.xiebruce.top/2019/04/16/b511d63082f0a21f270c2f372c145e68.gif)：
![web-upload-demo](https://img.xiebruce.top/2019/04/16/b511d63082f0a21f270c2f372c145e68.gif)

使用Web端配置参数，简单直观，不需要去配置文件手写了，如果gif图看不了，点这里看[web-demo.gif](https://img.xiebruce.top/2019/04/16/c47b6950bf92a1a1a5a2f018efeab1d8.gif)：
![web-demo](https://img.xiebruce.top/2019/04/16/c47b6950bf92a1a1a5a2f018efeab1d8.gif)

## Mac搭建php+nginx服务器(Win可往下看)
### 安装Homebrew
如果你没有安装过Homebrew，请先安装：[Mac安装Homebrew并更换国内镜像源](https://www.xiebruce.top/720.html)。

**设置open默认打开方式：**  
使用`文本编辑`软件新建一个文件，保存成任意名字到任意地方(但要你在访达中能找到)，然后找到你保存的文件，把它的后缀名修改成`.conf`，然后右击→`显示简介`→`打开方式`，如下图，选择“文本编辑.app”为打开方式，并点击`全部更改`，弹出问你是否继续，点继续，这样就搞定了，这个文件是没用的，等下边的东西设置好了，就可以删掉。  
![Xnip2019-04-17_14-01-24](https://img.xiebruce.top/2019/04/17/39eefdc236fe2860c41b543ed420762e.jpg)


### 安装php
使用Homebrew安装php
```bash
brew install php
```

修改php-fpm运行用户和组(注意其中的`7.3`以后可能变成7.4，7.5，未必是7.3)：
```bash
open /usr/local/etc/php/7.3/php-fpm.d/www.conf
```

打开后，找到以下代码位置(cmd+F搜索即可)：
```ini
user = _www
group = _www
```

把它们修改成：
```ini
user = 你的用户名
group = staff
```
你的用户名，用`whoami`命令可以获取（注意当前不要是root用户，不能填root）。

启动php-fpm：
```bash
brew services start php
```

或者你之前启动了，那就重启：
```bash
brew services restart php
```

### 安装nginx
在终端工具下执行以下命令以安装nginx：
```bash
brew install nginx
```

### 配置nginx
修改nginx的运行用户和组
```bash
open /usr/local/etc/nginx/nginx.conf
```

在它的第一行应该有一个`#user nobody;`，把它改成：`user 你的用户名 staff;`，那你的用户名是什么呢？在终端运行`whoami`命令即可获取。
比如我的就是：
```
user bruce staff;
```

创建一个虚拟主机文件夹
```bash
mkdir /usr/local/etc/nginx/servers
```

在访达中打开该文件夹：
```bash
open /usr/local/etc/nginx/servers
```

把以下配置保存成`api.picuploader.com.conf`文件，注意保存的时候要把`root /Users/bruce/www/personal/PicUploader;`中的PicUploader路径修改成你的PicUploader所在路径，然后把保存的文件拖到到前边打开的文件夹中：
```nginx
server {
    listen 80;
    server_name api.picuploader.com;

    client_header_timeout 60s;
    client_body_timeout 60s;
    send_timeout 60s;
    keepalive_timeout  65s;

    access_log /usr/local/var/log/nginx/api.picuploader.com.error.log combined;
    error_log /usr/local/var/log/nginx/api.picuploader.com.error.log error;

    root /Users/bruce/www/personal/PicUploader;

    location / {
        index dashboard.php;
        try_files $uri $uri/ index.php$is_args$args;
    }

    location ~ \.php$ {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        include fastcgi.conf;
    }
}
```
**特别注意：** 由于`index.php`之前已经使用，所以网页的index文件并非`index.php`，而是`dashboard.php`，所以上边的location里，一定要写`index dashboard.php;`，我提供的配置文件已经这么写了，也就是说你不要自己改动就行。

启动nginx
```bash
sudo brew services start nginx
```

打开host文件
```bash
open /etc/hosts
```

在文件最后添加：
```ini
127.0.0.1       api.picuploader.com
```
cmd+s保存后，关闭文件即可。

### 配置完成
上边已经配置完php+nginx，如果一切正常，浏览器访问`http://api.picuploader.com`就可以打开后台了。

进去之后，首先要设置你要使用的云的参数：
![-w914](https://img.xiebruce.top/2019/04/16/484be6f7f63abc150e3427a5f4f78835.jpg)

![-w1114](https://img.xiebruce.top/2019/04/16/a36fb44073cdd0a625eccc3356e09235.jpg)

然后这里选择要上传到哪些云，以及其他的一些参数：
![-w1440](https://img.xiebruce.top/2019/04/16/2b10ae99742c00551f8f61b84b4d1d0f.jpg)

配置好参数之后，就可以使用了，除了右击图片上传图片、快捷键上传图片之外，也可在这里上传，可以拖拽图片到这里(win版chrome目前我用jquery的drop事件竟然不支持)、也可以截图后直接`ctrl+v`在这里粘贴，当然也可以直接`ctrl+C`复制图片文件后，直接`ctrl+V`在这里粘贴上传：
![-w1440](https://img.xiebruce.top/2019/04/16/65b4312f3c43b0593307255433df9f6b.jpg)

注意：使用Web版来设置配置后，`config-local.php`将不起作用，但`config.php`来会用于读取默认参数。

### 在远程服务器上搭建
如果你要放在远程服务器上，由于没有密码认证，请使用nginx做HTTP的密码认证即可：[Nginx添加密码认证](https://www.xiebruce.top/634.html)。

### Windows使用PhpStudy搭建php+apache
1、先下载安装[PhpStudy](http://phpstudy.php.cn)，之前在 **[在Windows中设置使用PicUploader](https://github.com/xiebruce/PicUploader/blob/master/PicUploader-Windows-README.md)** 中有讲过PhpStudy的安装，我的PhpStudy安装在`D:\phpStudy`，下面将以这个位置为例。  
2、把整个`PicUploader`的代码`D:\phpStudy\PHPTutorial\WWW`目录下(如果你之前已经配置过右键菜单，那么又要删掉重新配置了，因为位置移动了)。  
3、进入`D:\phpStudy\PHPTutorial\Apache\conf`目录，找到`vhosts.conf`文件：
![-w676](https://img.xiebruce.top/2019/04/16/806f8fc6994a4fa7db2576dabc62ed1c.jpg)
4、打开上边找到的`vhosts.conf`, 在它原来代码下边空一行，把下边代码加进去(注意如果你的安装目录不一样，DocumentRoot的目录要修改成你的目录)：
```apache
<VirtualHost *:80>
    DocumentRoot "D:\phpStudy\PHPTutorial\WWW\PicUploader"
    ServerName api.picuploader.com
    DirectoryIndex dashboard.php
    ErrorLog "logs/api.picuploader.com-error.log"
    CustomLog "logs/api.picuploader.com-access.log" common
</VirtualHost>
```
再重复一遍，`PicUploader`整个文件夹必须放在PhpStudy的`WWW`目录下。

5、打开PhpStudy，点击切换版本，选择最新版本的php+Apache：
![-w600](https://img.xiebruce.top/2019/04/16/bf54187ebc00bcefe21e0b70ed1eea84.jpg)

6、点击`启动`或`重启`，只要运行状态里，Apache右边那个点保持绿色那就说明它在正常运行：
![-w389](https://img.xiebruce.top/2019/04/16/e5ac6b9f482cd78eafbb461a43d0d874.jpg)

7、进入`C:\Windows\System32\drivers\etc`目录，找到`hosts`文件，在它里面的内容最后添加下边这句(有可能说文件权限问题无法修改，这个请自己上网找方法看怎么能修改)：
```ini
127.0.0.1 		api.picuploader.com
```

8、浏览器打开`http://api.picuploader.com`试试看，如果一切正常，现在你已经能进PicUploader的页面了。

### MWeb使用PicUploader
MWeb一样要使用前边配置好的nginx服务器，按下边操作即可：

点击mweb的偏好设置→发布(publishing)→点击右边最下面一个`自定义(custom)`：
![Xnip2019-01-12_21-29-30.jpg](https://img.xiebruce.top/2019/01/12/e793f89b6057b6cb3938fec071d59b8b.jpg)

按下图填写：
![Xnip2019-01-12_21-32-44.jpg](https://img.xiebruce.top/2019/01/12/364177f976b82e0508291cfbbcc9188a.jpg)

写好文章后，点击顶部菜单栏中的的发布(publish)或编辑器右上角的分享按钮→上传本地图片到...(Upload Local Images to...)：  
![Xnip2019-01-12_21-38-34.jpg](https://img.xiebruce.top/2019/01/12/d50d050be893e19b338afe3dd0df063a.jpg)

如下图，点击Upload Images：
![Xnip2019-01-12_21-38-34.jpg](https://img.xiebruce.top/2019/01/12/38e6ded515aaddada287dc2a65f096d3.jpg)

上传完成后，即会出现地址图片地址，你可以点`New Document`建立一篇新文章，该文章就是你写的这篇文章，只不过图片全部被替换为线上地址了。

我一般是把`New Document`里的文章全选复制，然后关闭`New Document`的文章，再把文章内容全部替换回原来的文章中。
