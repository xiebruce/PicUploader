PicUploader
===============
![PicUploader-logo.png](https://img.xiebruce.top/2018/09/19/781e669d020efbde43dc952eb802293b.png)

**PicUploader** 是一个用php编写的图床工具，它能帮助你快速上传你的图片到云图床，并自动返回Markdown格式链接到剪贴板。配置完成后，要获取一个可用于markdown的图片外链只需要：

- **方式一：** 右击电脑本地任意格式文件→点击`你的自定义上传菜单`→系统通知文件上传成功→到Markdown编辑器中粘贴！
- **方式二：** 截图并点击复制到剪贴板→按快捷键→系统通知图片上传成功→到Markdown编辑器中粘贴！
- **方式三：** 右击网页中的图片→点击`复制图片`→按上传快捷键→系统弹出上传成功通知→到Markdown编辑器中粘贴！
- **方式四：** 使用网页版上传，包括拖放上传(支持多文件)、复制本地图片文件后粘贴上传、截图后粘贴上传、复制网页上的图片后粘贴上传、点击上传按钮选择图片后上传(支持多文件)。

## 主要功能
- 支持Mac和Windows(也可用于Linux服务器端)、理论上也支持Linux桌面版，只要你能添加右键菜单或者用快捷键调用上传命令的话；
- 支持图片压缩后上传(支持jpg/png/webp，gif/bmp不支持压缩)；
- 支持添加水印后上传(支持文字水印、图片水印、自定义水印颜色/透明度/角度/位置，支持jpg/png/bmp/webp，gif不支持水印)；
- 返回的链接可自定义（如原始链接、Markdown格式链接、可点击的Markdown格式链接、完全自定义的链接）；
- 完全自定义上传文件名(可选变量有当前年、月、日、当前时间戳，随机字符串(可调长度))
- 可作为MWeb/Typora的API使用，可作为PicGo/ShareX/uPic等的自定义图床使用；
- 支持快捷键上传剪贴板中的图片(配合Alfred/WinHotKey使用)；
- 支持Web端拖放、粘贴、或直接选择上传图片；
- 支持Web端设置所有参数；
- 支持上传任意格式文件(除了图片，还可以上传任意格式文件，只要你的存储端支持就行)；
- 目前支持的图床：七牛、腾讯、网易、百度、京东、阿里、又拍、sm.ms、Imgur、Ucloud、青云、Nextcloud、Github、Gitee(码云)、Cloudinary、Chevereto、Minio、Aws s3、金山、华为、DropBox、OneDrive、GoogleDrive、Azure、个人服务器(sftp)、本地(即PicUploader所在机器)。

## 功能演示
[Mac右击图片上传演示](https://img.xiebruce.top/2018/09/11/f4859eda8832f814486fc00df971e3cc.gif)、[Mac快捷键上传截图演示](https://img.xiebruce.top/2019/04/21/9d331dd128140a2f17cdbd0bda7860ae.gif)、[Win10右击图片上传演示](https://img.xiebruce.top/2019/08/28/1a832a7a4c82a1c0aa9fcbba618b13b6.gif)、[Win10快捷键上传截图演示](https://img.xiebruce.top/2019/08/29/5a5afac8e73a522374b06663ddd74490.gif)  
[Win7右击图片上传演示](https://img.xiebruce.top/2019/08/28/d06379b706f8cccc1e727548c1c9ef21.gif)、[Win7快捷键上传截图演示](https://img.xiebruce.top/2019/08/29/4c7c44d6e262a5c2fcc68edda71d9f56.gif)、[Web版多种上传方式演示](https://img.xiebruce.top/2019/04/20/bc83005774cf2dca482f290eb5508c5d.mp4)、[上传任意格式文件演示](https://img.xiebruce.top/2019/04/22/402a6e4a3fa0e8502c30910fab1db810.gif)  
[MWeb上传图片演示](https://img.xiebruce.top/2019/04/23/97a9efc1693e1ad0ebc6e81f43b385aa.mp4)、[ShareX使用演示](https://img.xiebruce.top/2019/04/29/89c6d78acb3ca7be98e17281102b2069.gif)、[查看上传记录演示](https://img.xiebruce.top/2019/05/01/90dd3550eef4991c849fde00092d0ad4.mp4)

## 获取各图床的参数
参见：[PicUploader: 各图床获取上传图片参数的方法](https://www.xiebruce.top/117.html)。

## 在Mac上配置
本文档为纯文字文档，如有不懂的，请看详细文档：[PicUploader: 一个还不错的图床工具](https://www.xiebruce.top/17.html)。
### 下载
```bash
git clone https://github.com/xiebruce/PicUploader.git
```

### 更新
如果以后要更新，请直接从git更新即可：
```bash
git pull
```

### 填写配置
把`PicUploader/config/config.php`文件复制一份，命名为`config-local.php`，然后在`config-local.php`中填写配置。

### 在Mac上搭建web后台
请搭建php+nginx运行环境，以下是nginx配置：
```nginx
server {
    listen 443;
    server_name api.picuploader.com;

    client_header_timeout 60s;
    client_body_timeout 60s;
    send_timeout 60s;
    keepalive_timeout  65s;

    access_log /usr/local/var/log/nginx/api.picuploader.com.access.log combined;
    error_log /usr/local/var/log/nginx/api.picuploader.com.error.log error;

    root /Users/bruce/www/personal/PicUploader;

    #https start
    ssl_certificate /Users/bruce/www/personal/PicUploader/accessorys/mkcert/api.picuploader.com.pem;
    ssl_certificate_key /Users/bruce/www/personal/PicUploader/accessorys/mkcert/api.picuploader.com-key.pem;
    ssl_session_timeout 5m;
    ssl_protocols TLSv1.1 TLSv1.2 TLSv1.3;
    ssl_ciphers ECDHE-RSA-AES128-GCM-SHellA256:HIGH:!aNULL:!MD5:!RC4:!DHE;
    ssl_prefer_server_ciphers on;
    add_header Strict-Transport-Security "max-age=63072000; includeSubdomains; preload";
    #https end

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
其中`ssl_certificate`和`ssl_certificate_key`是证书和证书密钥文件，生成方式请查看：[使用mkcert配置本地https](https://www.xiebruce.top/1121.html)。

由于是本地随意写的域名，所以需要在`/etc/hosts`中指定一下这是本地域名：
```hosts
127.0.0.1 api.picuploader.com
```
如果一切正常，访问`https://api.picuploader.com`就能看到PicUploader后台了，然后你就可以在里面添加配置和上传文件了。

### 添加右键上传
在Mac启动台中的“实用工具(Utility)”里找到“自动操作(Automator)”，打开它，创建一个服务，输入“shell”搜索→搜索出“运行Shell脚本”→把它拖到右侧：

- 工作流程收到当前：`文件或文件夹` 位于`访达.app`
- 输入为：灰色不可选，也不需要选
- 图像：默认就行
- 颜色：默认就行

运行Shell脚本：

- Shell: `/bin/bash`
- 传递输入: `作为自变量`
- 命令(注意把这里的路径改成你电脑上的路径)：
```
export LC_CTYPE="zh_CN.UTF-8"
/usr/bin/php /path/to/PicUploader/index.php "$@" | pbcopy
```

最后`cmd+s`保存→命名成`Upload by PicUploader`就完成了，可以关掉“自动操作”app了，然去Finder随便右击一个文件，是不是有个菜单叫`Upload by PicUploader`? 点击它就可以上传该文件了。

### 快捷键上传
安装`pngpaste`
```bash
brew install pngpaste
```

安装[Alfred](https://t00y.com/file/13114864-431159468)，双击`PicUploader/accessorys/PicUploaderHelper/PicUploaderHelper.alfredworkflow`→导入。

导入后可看到三个图标:

- 双击第一个`HotKey`图标可设置快捷键；
- 双击第二个`Run Script`图标设置快捷键要运行的命令，Language选择`/bin/bash`→`with input argv`→`Sequentially`，script填写(注意路径要换成你自己的)：
```
/usr/local/bin/php /path/to/personal/PicUploader/index.php --type=alfred
```
- 双击第三个`clipboard`图标，`type`选择`Plain Text`，框里填`{query}`，并勾选“Automatically paste to front most app”。  

**使用：** 把鼠标光标置于任意编辑器界面上，截图→复制到剪贴板→按快捷键→右上角提示上传中→右上角提示上传完成(此时返回的链接已经自动粘贴到编辑器中)！

### 作为MWeb图片上传接口
Mweb→`Preferences(偏好设置)`→`Publishing(发布)`→`Custom(自定义)`：  
- name: `PicUploader`
- API URL: `http:api.picuploader.com/index.php`
- POST File Name: `mweb`
- Response URL Path: `data/url`

如果你是远程部署的，一定要[Nginx添加密码认证](https://www.xiebruce.top/634.html)，添加了认证，MWeb这里就需要添加一个Header，名称为`authorization`，值为`Basic xxxxxxx`，其中`xxxxxxx`这串值，需要你登录网页版后，在网页控制台→网络→找到任意一个链接→查看它的Request Headers，找到`authorization`就有这串值。

**使用：** 截图粘贴到MWeb(或直接拖动图片到MWeb)→点击顶部菜单栏中的`Publish`→`Upload Local Images To...`→`Copy Markdown`即可自动上传图片，等所有图片上传完成，会显示`Copied`，然后你可以`cmd+a`全选文章`cmd+v`粘贴覆盖掉原文，这时整篇文章中的图片都换成了线上链接了。

### 作为Typora图片上传接口
作为Typora图片上传接口时，必须把PicUploader安装在本地，因为Typora本身不支持上传到api。

---
Typora→`偏好设置`→`图像`→上传服务选`Custom Command`，自定义命令填(注意把路径换成你电脑上的路径)：
```bash
/usr/local/bin/php /path/to/PicUploader/index.php --type=typora
```
**使用：** 截图粘贴(或拖动图片)到Typora→Typora自动显示出上传图片菜单(没有显示就右击图片)→点击`上传图片`，稍等片刻，如果图片上传正常，则图片会自动被替换为返回的图片地址。

### 作为PicGo自定义图床
右击顶部PicGo图标→`打开详细窗口`→`插件设置`→搜索`web-uploader`→点击安装，安装好后就能在左侧图床列表看到`自定义图床`。

点击自定义图床并填写配置：

- url: `http://你的PicUploader后台域名/index.php`
- paramName: `picgo`
- jsonPath: `data.url`
- customHeader: 如果nginx使用了[Nginx添加密码认证](https://www.xiebruce.top/634.html)，则填`{"authorization":"Basic xxxxxxx"}`，否则留空，其中`xxxxxxx`如何获取请参考[作为MWeb图片上传接口](https://github.com/xiebruce/PicUploader#%E4%BD%9C%E4%B8%BAmweb%E5%9B%BE%E7%89%87%E4%B8%8A%E4%BC%A0%E6%8E%A5%E5%8F%A3)
- customBody: 暂时用不到，留空。

设置好之后，双击顶部工具栏PicGo图标→选择默认图床→自定义Web图床，然后使用PicGo上传图片就会自动通过PicUploader的接口上传了。

### 作为uPic的自定义图床
uPic→`Preferences`→`Host`→左下角`+`号→`Custom`:

- API URL: `http://你的PicUploader后台域名/index.php`;
- Method: `POST`;
- File Field: `upic`;
- URL Path: `["data", "url"]`;
- Domain: 不用填，留空。

如果nginx使用了[Nginx添加密码认证](https://www.xiebruce.top/634.html)，则需要添加Header，点击`Other Fields`→`Add Header Field`：

- key: `authorization`
- value: `Basic xxxxxxx`，其中`xxxxxxx`如何获取请参考[作为MWeb图片上传接口](https://github.com/xiebruce/PicUploader#%E4%BD%9C%E4%B8%BAmweb%E5%9B%BE%E7%89%87%E4%B8%8A%E4%BC%A0%E6%8E%A5%E5%8F%A3)

### 查看日志和历史记录
在`PicUploader/logs/`文件夹下有上传日志和错误日志。

在Web版中点击左侧栏“逆时针旋转图标”的按钮即可查看上传历史，其中Sm.ms和Imgur由于可匿名上传，所以提供了删除功能。

## 在Windows上配置
本文档为纯文字文档，如有不懂的，请看详细文档：[在Windows上使用PicUploader](https://www.xiebruce.top/1095.html)。

### 在Windows上搭建Web后台
安装[phpstudy](https://www.xp.cn)，按以下方法配置。

进入`D:\phpstudy_pro\Extensions\Nginx1.15.11\conf\vhosts`文件夹，在里面新建一个文件名为`api.picuploader.com.conf`的配置文件，然后把以下配置粘贴进去：
```nginx
server {
    listen 443 ssl;
    server_name api.picuploader.com;

    client_header_timeout 60s;
    client_body_timeout 60s;
    send_timeout 60s;
    keepalive_timeout  65s;
    client_max_body_size 100m;

    access_log logs/api.picuploader.com.error.log combined;
    error_log logs/api.picuploader.com.error.log error;

    root D:/phpstudy_pro/WWW/PicUploader;

    #https start
    ssl_certificate D:/phpstudy_pro/WWW/PicUploader/accessorys/mkcert/api.picuploader.com.pem;
    ssl_certificate_key D:/phpstudy_pro/WWW/PicUploader/accessorys/mkcert/api.picuploader.com-key.pem;
    ssl_session_timeout 5m;
    ssl_protocols TLSv1.1 TLSv1.2 TLSv1.3;
    ssl_ciphers ECDHE-RSA-AES128-GCM-SHellA256:HIGH:!aNULL:!MD5:!RC4:!DHE;
    ssl_prefer_server_ciphers on;
    add_header Strict-Transport-Security "max-age=86400; includeSubdomains; preload";
    #https end

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
`ssl_certificate`和`ssl_certificate_key`是https证书和密钥文件，生成这两个文件请查看:[使用mkcert配置本地https](https://www.xiebruce.top/1121.html))。

添加hosts文件指向(点击phpstudy的`设置`→`配置文件`→`hosst`会自动用记事本打开)：
```hosts
127.0.0.1 api.picuploader.com
```

启动phpstudy的nginx，如果一切正常，你应该可以在浏览器打开：
```
api.picuploader.com
```

### 添加右键菜单
右击`PicUploader/accessorys/add-right-click-menu.bat`→以管理员身份运行→按提示填写最后输入`y`回车安装(注意复制路径如果开头有乱码字符请删掉)。

**使用：** 右击文件→点击自定义上传菜单→自动弹出黑框→黑框消失表示上传完成→去粘贴。

---
**删除右键菜单：** Win+R，输入`regedit`回车，进入注册表编辑器，找到`HKEY_CLASSES_ROOT`→`*`→`shell`，在这里就能找到你添加的菜单，删掉它，再重新按前面的步骤添加即可。

### 快捷键上传
下载[WinHotKey](https://softfamous.com/winhotkey/download)，打开WinHotKey→`New Hotkey...`:

- When I press these keys: 勾选`Alt`和`Ctrl`
- Along with the key: `U`,这一步跟前一步加起来表示把快捷键设置为`Ctrl+Alt+U`
- 点击右下角的`Advanced...`
- Launch which application: `D:\phpstudy_pro\Extensions\php\php7.3.4nts\php.exe`
- Provide application parameters here: 固定填`index.php --type=alfred`
- Start the application at this folder: `D:\phpstudy_pro\WWW\PicUploader`
- Display the window: `Minimized`

记得所有路径都换成你电脑的路径，然后保存，因为我们没有勾选Windows键，所以保存时它会弹出个提示(不用看，点`Yes`就行)。

**使用：** 截图→复制到剪贴板→按快捷键→任务栏显示php图标(上传中)→任务栏图标消失(上传完成)→去粘贴。

**注意：** 如果是Win7，需要升级[Windows Management Framework 5.1](https://www.microsoft.com/en-us/download/details.aspx?id=54616)，请下载安装。

### 作为Typora上传图片接口
参见：[作为Typora图片上传接口](https://github.com/xiebruce/PicUploader#%E4%BD%9C%E4%B8%BAtypora%E5%9B%BE%E7%89%87%E4%B8%8A%E4%BC%A0%E6%8E%A5%E5%8F%A3)。
### 作为PicGo自定义图床
参见：[作为PicGo自定义图床](https://github.com/xiebruce/PicUploader#%E4%BD%9C%E4%B8%BApicgo%E8%87%AA%E5%AE%9A%E4%B9%89%E5%9B%BE%E5%BA%8A)。
### 作为ShareX的自定义图床
这个有点复杂，文字可能说不太清，直接看详细文档吧：[作为ShareX的自定义图床](https://www.xiebruce.top/1095.html#ShareX)。

### 查看日志和历史记录
在`PicUploader/logs/`文件夹下有上传日志和错误日志。

在Web版中点击左侧栏“逆时针旋转图标”的按钮即可查看上传历史，其中Sm.ms和Imgur由于可匿名上传，所以提供了删除功能。

## 在服务器上搭建
服务器上搭建也是搭建一个php+nginx运行环境，nginx配置文件直接用[在Mac上搭建web后台](https://github.com/xiebruce/PicUploader#%E5%9C%A8Mac%E4%B8%8A%E6%90%AD%E5%BB%BAweb%E5%90%8E%E5%8F%B0)的就行，只不过路径要改改罢了，另外服务器上获取https证书要使用真实证书，申请https证书请查看：[https证书自动续订(renew)问题](https://www.xiebruce.top/837.html)。

**注意：** 由于PicUploader没有账号系统，在服务器上搭建，需要在nginx添加认证密码，添加方法请查看：[Nginx添加密码认证](https://www.xiebruce.top/634.html)。
## 点赞
如果觉得PicUploader还不错，给个star鼓励鼓励我吧！

## 如何支持我
**方法一：**
如果本工具确实能帮助到你，不妨打赏一下，鼓励一下我继续更新并维护`PicUploader`。  
<img width="200" src="https://www.xiebruce.top/wp-content/uploads/2018/09/wechat.png">

<img width="200" src="https://www.xiebruce.top/wp-content/uploads/2018/09/alipay.png">

**方法二：**
如果你玩抖音，可以使用抖音极速版(目前只有安卓版，iPhone暂不支持)，然后填上我的邀请码：**89571647**，这样我们都能得到一定的奖励！
