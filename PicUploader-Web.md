# PicUploader-Web端/Mweb的配置与使用
## 先看一下效果
Web端上传图片示例：支持拖拽上传、截图粘贴上传、复制图片文件粘贴上传，如果gif图看不了，点这里看[web-upload-demo.gif](https://img.xiebruce.top/2019/04/16/b511d63082f0a21f270c2f372c145e68.gif)：
![web-upload-demo](https://img.xiebruce.top/2019/04/16/b511d63082f0a21f270c2f372c145e68.gif)

使用Web端配置参数，简单直观，不需要去配置文件手写了，如果gif图看不了，点这里看[web-demo.gif](https://img.xiebruce.top/2019/04/16/c47b6950bf92a1a1a5a2f018efeab1d8.gif)：
![web-demo](https://img.xiebruce.top/2019/04/16/c47b6950bf92a1a1a5a2f018efeab1d8.gif)

## 搭建nginx服务器
搭建nginx服务器，配置文件如下：
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
特别注意，由于`index.php`之前已经使用，所以网页的index文件并非`index.php`，而是`dashboard.php`，所以上边的location里，一定要写`index dashboard.php;`。

修改host文件，添加：
```ini
127.0.0.1       api.picuploader.com
```
对于Mac，在`/etc/hosts`文件中添加，对于Win，在`C:\Windows\System32\drivers\etc\hosts`，windows的要把文件先复制出来，修改完后，再复制回去覆盖。

访问`http://api.picuploader.com`，如果能打开界面那么就成功了。

进去之后，首先要设置你要使用的云的参数：
![-w914](https://img.xiebruce.top/2019/04/16/484be6f7f63abc150e3427a5f4f78835.jpg)

![-w1114](https://img.xiebruce.top/2019/04/16/a36fb44073cdd0a625eccc3356e09235.jpg)

然后这里选择要上传到哪些云，以及其他的一些参数：
![-w1440](https://img.xiebruce.top/2019/04/16/2b10ae99742c00551f8f61b84b4d1d0f.jpg)

配置好参数之后，就可以使用了，除了右击图片上传图片、快捷键上传图片之外，也可在这里上传，可以拖拽图片到这里、也可以截图后直接`ctrl+v`在这里粘贴，当然也可以直接`ctrl+C`复制图片文件后，直接`ctrl+V`在这里粘贴上传：
![-w1440](https://img.xiebruce.top/2019/04/16/65b4312f3c43b0593307255433df9f6b.jpg)

注意：使用Web版来设置配置后，`config-local.php`将不起作用，但`config.php`来会用于读取默认参数。

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

上传完成后，即会出现地址图片地址，你可以点`New Document`建立一篇新文章，该文章就是你写的这篇文章，只不过图片全部被替换为线上地址了，然后你就可以发布这篇文章了，当然你也可以点`Copy Markdown`或`Copy HTML`复制markdown或html到其他地方(比如你的博客后台)去发布。
