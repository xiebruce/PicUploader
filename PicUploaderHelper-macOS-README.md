# PicUploaderHelper-macOS-README.md
本文档为macOS版文档，Windows请看：[PicUploader-Windows-README.md](https://github.com/xiebruce/PicUploader/blob/master/PicUploaderHelper-Windows-README.md)

### 先看效果
貌似有时候看不了动图，看不了请点这个链接查看：[macOS-upload-demo.gif](https://img.xiebruce.top/2019/03/27/a1fe3fd4f306698dd43b7408eebdce74.gif)
![macOS-upload](https://img.xiebruce.top/2019/03/27/a1fe3fd4f306698dd43b7408eebdce74.gif)

### 安装python依赖
如果你电脑没安装过python，请先看[Mac同时安装python2.7和python3](https://www.xiebruce.top/905.html)。
由于该助手使用python编写，需要用到`pynput`(用于监听快捷键)和`Pillow`(用于获取图片)两个模块，所以需要先安装这两个模块：
```bash
pip install pynput
pip install Pillow
```
本插件需要使用python3，如果你电脑中安装了python2.7和python3两个版本，要注意pip是对应的哪个版本，用`pip -V`即可查看，一般根据安装方式的不同有可能是“pip”和“pip3”(此时pip就是pip2.7)，也有可能是“pip”和“pip2”(此时pip就是pip3)。

### 安装PicUploaderHelper
下载：[PicUploaderHelper-macOS.zip](https://github.com/xiebruce/PicUploader/blob/master/accessorys/PicUploaderHelper-macOS.zip)
解压后，请把解压出来的文件夹放到位置比较固定的地方，因为随意挪动将会导致无法开机运行(如果要挪动，需要删除原来的开机“登录项”并重新添加)

解压出来的`PicUploaderHelper-macOS`文件夹中有三个文件：
```
├── PicUploaderHelper.py                #助手主程序
├── config.json                         #助手配置文件
└── generatesh.sh                       #自启动脚本生成器
```

进入`PicUploaderHelper-macOS`文件夹，执行：
```bash
chmod u+x generatesh.sh && ./generatesh.sh
```
注意：如果你后面想移动该文件夹到别处，那么需要重新执行`./generatesh.sh`重新生成启动脚本，原来的不用删除，会自动覆盖。

根据提示输入python3的可执行命令(可以先用`python -V`和`python3 -V`，看显示的版本，哪个是python3就输入哪个)，回车即可生成开机启动文件`PicUploaderHelper-start.sh`，然后右击它→选择`显示简介`→设置打开方式为`iTerm`(或其他你自己习惯用的终端工具都行)，但不要点击“全部更改”，因为没必要。
![-w262](https://img.xiebruce.top/2019/03/23/23cba2b35105a5ecc3a71f6c5594d126.jpg)

注意，如果你想使用系统自带终端为默认打开方式也可以，但是默认没的选，你要选择其他：
![Xnip2019-03-25_00-08-47](https://img.xiebruce.top/2019/03/25/dd297a17e842d94fefc9cd7065d99136.jpg)

然后在启用里面选择“所有应用程序”，这样才能选择自带的“终端”，否则是灰色的选不了：
![Xnip2019-03-25_00-07-39](https://img.xiebruce.top/2019/03/25/e19e99399f10f5033d168ba092ce421c.jpg)

但用自带终端有一个问题，开机启动后，它会自动打开这个终端并启动PicUploaderHelper，而且启动后它会一直停留在那里，不会自动关闭，你需要手动装它关闭，而iTerm2会自动关闭窗口：
![Xnip2019-03-24_23-55-55](https://img.xiebruce.top/2019/03/25/0d9fb0298278f117034964d38fcd3241.jpg)

### 配置文件解析
```json
{
	"img_type": "JPEG",
	"php_path": "/usr/local/bin/php",
	"picuploader_index_path": "/Users/bruce/www/personal/PicUploader/index.php",
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
        ["cmd", "shift", "u"]
    ],
	"debug": 0
}
```
按以下解释，修改你自己的配置，主要是`php_path`和`picuploader_index_path`要修改，其他的一般不需要修改，当然你也可以改。

- `img_type`：两个可选值`JPEG`或`PNG`(不能写其他格式)，这将决定你最终上传的图片的格式为`.png`还是`.jpeg`。
- `php_path`：php可执行文件路径，使用`which php`命令可获得，并修改成你自己的路径。
- `picuploader_index_path`：PicUploader的入口文件`index.php`的路径，这个路径要修改成你自己的路径。
- `notification`：通知消息，分为上传成功和未检测到剪贴板有图片两个通知，你可以修改里面的title、subtitle、message为你自己想要的。
- `key_combinations`：快捷键，使用数组方式指定，像上边默认的就是`cmd+shift+u`，每一组快捷键都用中括号括住(其实就是python的列表)，特别注意，如果你的快捷键用到了`alt`，那会比较不一样，`alt+ctrl`目前由于使用的`pynput`原因无法使用，假设你要设置`alt+shift+u`，配置文件里不能直接写`u`，而是你要直接按住`alt+shift`，再按`u`，它出来什么符号就是什么符号，不要手工修改它，另外如果出来的符号带“\x”的快捷键不可用而且会导致报错，如果出来的符号带`<数字>`这样的也不可用，你可以在配置文件设置`debug`为1(开启debug模式)，这样即可在与`PicUploaderHelper.py`文件同目录下生成一个`key_log.txt`文件，该文件会记录下你按下的每一个键最终识别出来的都是什么。为了方便查看，你可以新开一个终端窗口，使用以下命令监控`key_log.txt`的变化：
```bash
tail -f -n 5 key_log.txt
```
几个按键的写法(左侧为原按键，右侧为定义快捷键的写法)：
```
左shift => shift
右shift => shift_r
左option => alt
右option => alt_r
左command => cmd
右command => cmd_r
左control => ctrl
```
`debug`:两个值0或1，0为关闭调试模式，1为开启调试模式

### 运行PicUploaderHelper
运行前，要把运行终端比如`iTerm2`(或者你自己习惯用的其它终端工具)加入到`系统偏好设置`→`  安装与隐私`→`辅助功能`里面，注意，你设置了“PicUploaderHelper-start.sh”文件使用哪个终端打开，就把哪个终端加入到系统的`辅助功能`里。  
**运行：** 先在iTerm2用`sudo -s`切换到root，把`PicUploaderHelper-start.sh`拖动到`iTerm2`中，回车运行即可，当然你也可以进入它所在的文件夹中然后用`sudo ./PicUploaderHelper-start.sh`来运行（重复运行会先杀死原有进程并启动新进程，此时进程id会改变）。

**关闭：** 先查找进程id号
```bash
ps aux | grep PicUploaderHelper
```
然后使用以下命令关闭：
```bash
kill -9 进程id号
```

**测试：** 先不要截图，直接按上传快捷键，正常会弹出通知告诉你剪贴板未检测到图片(前面配置文件解析也说了，这个提示文字你可以自己在配置里修改):
![-w343](https://img.xiebruce.top/2019/03/25/0963f887631f430ba3776c76b512ccbb.jpg)

**上传图片：** 然后你就可以截图→按快捷键上传了，注意截图的时候要“复制到剪贴板”而不是保存文件，如果你保存成文件，那你还得用右击图片的方式上传。

**加入开机启动：** 本来macOS的服务类型的程序开机启动最好用`launchctl`的或者直接把它转成app程序的，但由于系统限制原因，目前用`launchctl`虽然能正常启动，但是无法响应快捷键，而转成app程序运行的时候会报错，原因好像是Mojave系统的bug，等后面更新了系统我会尝试转成mac的app，所以现在暂时只能退而求其次，使用开机登录项来做开机启动(当然如果你不嫌麻烦，可以不做这个开启启动，只要开机后自己`sudo ./PicUploaderHelper-start.sh`运行即可)：
![Xnip2019-03-23_06-43-38](https://img.xiebruce.top/2019/03/23/58475317f4308b3e1241916853f964f1.jpg)

注意，当你关机了，下次你开机的时候，如果你设置的是用iTerm2打开启动脚本，它会弹出以下提示，那个选项是不要提示的意思，把它勾上就行：
![Xnip2019-03-23_02-25-26](https://img.xiebruce.top/2019/03/23/a924f2bea9c49e107d9ed649ee1353ec.jpg)

把它勾上之后，再下次开机登录后，`iTerm2`会自动打开闪一下又关闭，其实它就是在启动`PicUploaderHelper`（但如果是自带的终端，就会一直显示，要你手动关闭）。

### 原理
后台运行PicUploaderHelper，PicUploaderHelper会监听全局快捷键，当按下快捷键时，PicUploaderHelper会检测剪贴板中是否存在图片：  
1、如果不存在，它会弹出一个通知(调用applescript来实现)，告诉你未检测到图片，没有图片的通知消息具体内容可由配置文件中的`no_image`部分自定义。  
2、如果有图片，PicUploaderHelper会把剪贴板中的图片保存到与`PicUploaderHelper.py`同级目录中，文件名为`.screenshot_upload_tmp.xxx`(由于是`.`开头所以是隐藏文件)，`xxx`是图片类型，由配置文件中的`img_type`指定，`img_type`只能指定两种类型，一种是`PNG`，一种是`JPEG`。图片保存后，即会调用PicUploader来上传，上传完成会弹出通知，弹出通知后markdown格式地址已经在剪贴板，直接去粘贴即可。要把它保存成图片的原因，是因为PicUploader的所有代码都是需要指定图片文件路径的(包括所使用的对象存储的接口都是传图片路径的)，注意，保存的图片不会被删除(理论上要删除，但由于技术原因删除不了)，将会一直存在，但也只会有这一张(一般为几十到几百KB大小)，因为下一张永远会覆盖上一张，所以不会导致有垃圾，并且你是看不到的，所以不会打扰到你。

### 错误解决：按快捷键没反应
1、查看进程是否启动
```bash
ps aux | grep PicUploaderHelper
```
    
2、如果未启动，查看“PicUploaderHelper-macOS”文件夹下的“PicUploaderHelper.log”看有没有报错，如果有报错无法解决，可以提issue。

3、如果已启动，查看是否把iTerm2加入到了`系统偏好设置`→`  安装与隐私`→`辅助功能`？如果没有，请添加。而且要注意，添加到`辅助功能`里的终端，要跟`PicUploaderHelper-start.sh`设置的开打方式那个终端一致，所以，如果你用的不是iTerm2，而是系统自带的终端，又或者是其他的终端工具，就要注意这两个地方对应一下。

4、如果你是以`./PicUploaderHelper-start.sh`的方式运行，是否是root权限状态下运行的？如果不是，请先使用`sudo -s`切换到root权限再运行，或者也可以`sudo ./PicUploaderHelper-start.sh`这样运行
