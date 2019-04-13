# PicUploaderHelper-Windows-README.md
本文档为Windows版文档，macOS请看：[PicUploaderHelper-macOS-README.md](https://github.com/xiebruce/PicUploader/blob/master/PicUploaderHelper-macOS-README.md)

### 先看效果
win10：如果看不了请点这个链接查看：[windows10-upload-demo](https://img.xiebruce.top/2019/03/27/840b4d80eb29383892db115406c80d3e.gif)
![windows10-upload](https://img.xiebruce.top/2019/03/27/840b4d80eb29383892db115406c80d3e.gif)

Win7：如果看不了请点这个链接查看：[windows7-upload-demo](https://img.xiebruce.top/2019/03/27/43edc8c9fa7feb8ee28172e7ce764c93.gif)
![windows7-upload](https://img.xiebruce.top/2019/03/27/43edc8c9fa7feb8ee28172e7ce764c93.gif)

### 安装python3
打开[Python官网](https://www.python.org)，点击下载最新版Python：
![Xnip2019-03-27_01-29-36](https://img.xiebruce.top/2019/03/27/a9773d8d3501aaed9bb91a83c5ffc272.jpg)

往下滚动，找到以下界面，点击下载`Windows x86-64 executable installer`：
![-w1216](https://img.xiebruce.top/2019/03/27/1117fd94ae4dde71af8d85c4d9e82782.jpg)

下载后双击安装(先勾选`Add Python 3.7 to PATH`，然后点击第一个安装)：
![-w1141](https://img.xiebruce.top/2019/03/27/93c4722d72fb5c58566babe35194becb.jpg)

安装完成后，右击左下角的`开始`菜单→点击`Windows PowerShell(管理员)(A)`：
![-w314](https://img.xiebruce.top/2019/03/27/b1baa5d2ac836a6ab8dd28a957f5897d.jpg)


选择`是`即可打开PowerShell界面：
![-w454](https://img.xiebruce.top/2019/03/27/6ed3e4d48973b73b25f1e36b7b19a6a3.jpg)

执行以下命令安装`pynput`模块(用于监听快捷键)：
```bash
pip install pynput
```

执行以下命令安装`Pillow`模块(用于获取剪贴板中的截图)：
```bash
pip install Pillow
```

### 下载PicUploaderHelper-Windows
下载：[PicUploaderHelper-Windows.zip](https://github.com/xiebruce/PicUploader/blob/master/accessorys/PicUploaderHelper-Windows.zip)，解压并放到相对稳定的位置(因为移动位置需要修改配置文件及自启动，否则会无法运行)。

```
├── PicUploaderHelper.pyw   #助手主程序
├── config.json             #助手配置文件
└── notification.ps1        #被主程序引用，用于显示通知
```

### 配置文件解析
```json
{
	"img_type": "JPEG",
	"php_path": "D:\\phpStudy\\PHPTutorial\\php\\php-7.2.1-nts\\php.exe",
	"picuploader_index_path": "D:\\PicUploader\\index.php",
	"notification": {
		"success": {
			"title": "Upload image succeed",
			"subtitle": "",
			"message": "Markdown link is copied to the cliboard, you can paste now!"
		},
		"no_image": {
			"title": "No image detected",
			"subtitle": "",
			"message": "No image was detected in the clipboard, please take a screenshot first!"
		}
    },
    "key_combinations": [
        ["ctrl_l", "shift", "u"]
    ],
	"debug": 0
}
```
按以下解释，修改你自己的配置，主要是`php_path`和`picuploader_index_path`要修改，其他的一般不需要修改，当然你也可以改。

`img_type`：两个可选值`JPEG`或`PNG`(不能写其他格式)，这将决定你最终上传的图片的格式为`.png`还是`.jpeg`。
`php_path`：php.exe文件路径，要修改成你自己的php.exe。  
`picuploader_index_path`：PicUploader的入口文件`index.php`的路径，这个路径要修改成你自己的路径。  
`php_path`和`picuploader_index_path`路径的获取，请参考：[PicUploader-Windows-README.md](https://github.com/xiebruce/PicUploader/blob/master/PicUploader-Windows-README.md)，但这里不同的是，路径中的每个反斜杠都要再加一个反斜杠，否则无法启动。  
`notification`：通知消息，分为上传成功和未检测到剪贴板有图片两个通知，你可以修改里面的title、message为你自己想要的，subtitle在这里没有用处，为了和mac版统一，没有删除。  
`key_combinations`：快捷键，使用数组方式指定，像上边默认的就是`ctrl_l+shift+u`，每一组快捷键都用中括号括住(其实就是python的列表)。  
`debug`:两个值0或1，0为关闭调试模式，1为开启调试模式，打开调试模式可以在当前目录下的key_log.txt中查看到你按了哪些键，按的这个键的键值是多少。

几个按键的写法：
```
左shift：shift
右shift：shift_r
左ctrl：ctrl_l
右ctrl：ctrl_r
左alt：alt_l
右alt：alt_r
```

### 启动试试
对于win10，正常情况双击`PicUploaderHelper.pyw`即可启动，默认快捷键`ctrl_l+shift+u`，“ctrl_l”中的l表示left，即左侧的ctrl键(按右侧的ctrl键无效)。

启动后，可打开任务管理器，找到`Python`就是该助手了，要关闭就右击→结束任务即可，如果修改了配置文件，要先关闭再打开，就用这个方法：
![Xnip2019-03-27_01-53-40](https://img.xiebruce.top/2019/03/27/69eb8c886af318798a0e02b158430d23.jpg)

Win7上则叫pythonw.exe：
![Xnip2019-03-27_02-23-34](https://img.xiebruce.top/2019/03/27/0930d2d256f4f0ba5a7ae040deeba6b3.jpg)

对于win7，第一次双击应该是启动不了，你得选给它配置一个打开方式：右击`PicUploaderHelper.pyw`→`属性`→`打开方式`→选择以下路径的pythonw为打开方式(注意不要直接复制，`bruce`是我的用户名，要换成你的用户名)：
```bash
C:\Users\bruce\AppData\Local\Programs\Python\Python37\pythonw.exe
```

### 加入开机启动
确定能运行操作正常后，加入开机启动，能让你在重启或者关机后下次开机能自动后台启动。

右击`PicUploaderHelper.pyw`→点击`创建快捷方式`，即可得到一个`PicUploaderHelper.pyw - 快捷方式`，重命名一下，把` - 快捷方式`删除，变成像下图这样：
![-w484](https://img.xiebruce.top/2019/03/27/c9ba3645647d1379bb174cb728b1247c.jpg)

`Win+R`打开`运行`窗口，输入`shell:startup`回车，即可打开自启动窗口，把刚才创建的快捷方式拖入自启动窗口中即可(注意，两个文件名完全一样，图标有个小箭头的是快捷方式)：
![-w513](https://img.xiebruce.top/2019/03/27/e5549bfc8c8c9758dc9598fe3491d36b.jpg)

为了测试开机是否能启动，你可以重启试试，当然也可以等下次开机再说。
