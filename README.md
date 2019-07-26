PicUploader
===============
![PicUploader-logo.png](https://img.xiebruce.top/2018/09/19/781e669d020efbde43dc952eb802293b.png)

**PicUploader** 是一个用php编写的图床工具，它能帮助你快速上传你的图片到云图床，并自动返回Markdown格式链接到剪贴板。配置完成后，要获取一个可用于markdown的图片外链只需要：

- **方式一：** 右击电脑本地图片→点击`你的自定义上传菜单`→系统通知图片上传成功→到Markdown编辑器中粘贴！
- **方式二：** 截图并点击复制到剪贴板→按快捷键→系统通知图片上传成功→到Markdown编辑器中粘贴！
- **方式三：** 右击网页中的图片→点击`复制图片`→按上传快捷键→系统弹出上传成功通知→到Markdown编辑器中粘贴！
- **方式四：** 使用网页版上传，包括拖放上传(支持多文件)、复制本地图片文件后粘贴上传、截图后粘贴上传、复制网页上的图片后粘贴上传、点击上传按钮选择图片后上传(支持多文件)。

## 主要功能
- 支持Mac和Windows(也可用于Linux服务器端)；
- 支持图片压缩后上传(支持jpg/png，gif不支持压缩)；
- 支持添加水印后上传(支持文字水印、图片水印、自定义水印颜色/透明度/角度/位置，也只支持jpg/png，gif不支持水印)；
- 返回的链接可自定义（如原始链接、Markdown格式链接、可点击的Markdown格式链接、完全自定义的链接）；
- 可作为MWeb的API使用，可作为PicGo、ShareX、uPic等的自定义图床使用；
- 支持快捷键上传剪贴板中的图片(需要配合PicUploaderHelper/Alfred使用)；
- 支持Web端拖放、粘贴、或直接选择上传图片；
- 支持Web端设置所有参数；
- 支持上传任意文件(不只是图片)；
- 目前支持的图床：七牛、阿里、腾讯、华为、网易、京东、百度、又拍、青云、Ucloud、sm.ms、Imgur、Gibhub、Gitee(码云)、微博、Nextcloud、Cloudinary、Chevereto、Aws s3、金山、个人服务器(sftp)、本地(即PicUploader所在机器)。

[Mac右击图片上传演示](https://img.xiebruce.top/2018/09/11/f4859eda8832f814486fc00df971e3cc.gif)：
![Mac-demo.gif](https://img.xiebruce.top/2018/09/11/f4859eda8832f814486fc00df971e3cc.gif)

[Mac快捷键上传截图演示](https://img.xiebruce.top/2019/04/21/9d331dd128140a2f17cdbd0bda7860ae.gif)：
![Mac-shortcut-upload-demo.gif](https://img.xiebruce.top/2019/04/21/9d331dd128140a2f17cdbd0bda7860ae.gif)

[Win10右击图片上传演示](https://img.xiebruce.top/2019/04/20/af6ba883c7336841bd66e92f68765210.gif)：
![Win10-demo.gif](https://img.xiebruce.top/2019/04/20/af6ba883c7336841bd66e92f68765210.gif)

[Win10快捷键上传截图演示](https://img.xiebruce.top/2019/04/21/8fdddaa3e5edaebbadda74aca79a4c11.gif)：
![windows10-shortcut-upload.gif](https://img.xiebruce.top/2019/04/21/8fdddaa3e5edaebbadda74aca79a4c11.gif)

[Win7右击图片上传演示](https://img.xiebruce.top/2019/04/20/7ac006c673dd9ab8500654de5a18b514.gif)：
![demo-win7.gif](https://img.xiebruce.top/2019/04/20/7ac006c673dd9ab8500654de5a18b514.gif)

[Win7快捷键上传截图演示](https://img.xiebruce.top/2019/04/21/037c1af6239d02b964f5e62d2550c25c.gif)：
![windows7-shortcut-upload.gif](https://img.xiebruce.top/2019/04/21/037c1af6239d02b964f5e62d2550c25c.gif)

[Web版演示](https://img.xiebruce.top/2019/04/20/bc83005774cf2dca482f290eb5508c5d.mp4)：
[![screenshot_upload_tmp.jpeg](https://img.xiebruce.top/2019/04/20/871131e16abc183075cdcc095d82b5be.jpeg)](https://img.xiebruce.top/2019/04/20/bc83005774cf2dca482f290eb5508c5d.mp4)

[上传任意格式文件演示](https://img.xiebruce.top/2019/04/22/402a6e4a3fa0e8502c30910fab1db810.gif)：
![upload-non-image-demo_optimized.gif](https://img.xiebruce.top/2019/04/22/402a6e4a3fa0e8502c30910fab1db810.gif)

[MWeb使用PicUploader上传图片演示](https://img.xiebruce.top/2019/04/23/97a9efc1693e1ad0ebc6e81f43b385aa.mp4)
[![screenshot.jpeg](https://img.xiebruce.top/2019/04/23/80dd5a000be625bb47833f1c8da0a032.jpeg)](https://img.xiebruce.top/2019/04/23/97a9efc1693e1ad0ebc6e81f43b385aa.mp4)

[ShareX使用演示](https://img.xiebruce.top/2019/04/29/89c6d78acb3ca7be98e17281102b2069.gif)
![sharex-customize-upload-demo_optimized_optimized.gif](https://img.xiebruce.top/2019/04/29/89c6d78acb3ca7be98e17281102b2069.gif)

[上传记录](https://img.xiebruce.top/2019/05/01/90dd3550eef4991c849fde00092d0ad4.mp4)
[![Xnip2019-05-01_00-50-56.jpg](https://img.xiebruce.top/2019/05/01/7153e7428808207abdbd05f98229a999.jpg)](https://img.xiebruce.top/2019/05/01/90dd3550eef4991c849fde00092d0ad4.mp4)

由于维护多个文档太累，Github flavor markdown不支持视频，并且gif图大点就不显示，还得空两格才会换行，基于种种原因，如果要继续查看文档，请直接查看唯一文档：[PicUploader: 一个还不错的图床工具](https://www.xiebruce.top/17.html)。

### 点赞
如果觉得PicUploader还不错，给个star鼓励鼓励我吧！

### 打赏
如果本工具确实能帮助到你，不妨鼓励一下我继续更新并维护`PicUploader`。  
<img width="200" src="https://www.xiebruce.top/wp-content/uploads/2018/09/wechat.png">

<img width="200" src="https://www.xiebruce.top/wp-content/uploads/2018/09/alipay.png">
