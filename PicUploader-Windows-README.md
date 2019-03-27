# 在Windows中设置使用PicUploader
### 安装php
由于phpstudy安装简单，遇到问题也有很多解决方法，所以推荐安装phpstudy，如果你已经有php环境，这一步可以略过（不过要保证开始这四个扩展`php_curl`、`php_exif`、`php_fileinfo`、`php_gd2`）。

进入[phpstudy官网](http://phpstudy.php.cn)，点击下载phpstudy2018：
![Xnip2019-03-26_15-44-30](https://img.xiebruce.top/2019/03/26/d645ddd1c4d28bd1df7dcd9c69770bca.jpg)

解压后双击打开，它会问你要解压到哪个盘，一般默认就行：
![Xnip2019-03-26_15-46-00](https://img.xiebruce.top/2019/03/26/7c6f06426b9c915731b5da3761f6342e.jpg)

安装完成后，双击打开phpstudy如果提示你更新，那就更新到最新版本：
![-w1024](https://img.xiebruce.top/2019/03/26/0acb9c588d74f6c5db03975ccd8725ae.jpg)

更新完之后，如果你没有安装VC9、VC11运行库，它有可能会有以下提示(这个提示暂时不需要安装，忽略即可，如果最后用不了，就试试安装这个，点击确定会自动打开phpstudy网站的下载页面)：
![Xnip2019-03-26_14-53-03](https://img.xiebruce.top/2019/03/26/c0a698d9b6f55f7003cacfd5258097c5.jpg)

如下图，点击`其他选项菜单`→`PHP扩展及设置`→`PHP扩展`：
![Xnip2019-03-26_15-54-46](https://img.xiebruce.top/2019/03/26/1626a530cef0f5c18fdcc173d8fe856e.jpg)

勾选`php_curl`、`php_exif`、`php_fileinfo`、`php_gd2`，然后关掉即可，如果你是自己安装的php环境，也要保证有这四个扩展(至少要curl和gd2)，设置完之后，就可以关掉phpstudy了：
![Xnip2019-03-26_15-58-13](https://img.xiebruce.top/2019/03/26/33449b3ba007162a6070356d3528372a.jpg)


然后去你安装phpstudy的那个目录中找php在哪，假如你安装在D盘，那么请进入`D:\phpStudy\PHPTutorial\php`(其他盘类似)，如下图找到最高版本，然后点击进入，`php.exe`就在里面，它就是接下来要用到的：
![Xnip2019-03-26_14-59-28](https://img.xiebruce.top/2019/03/26/1abf1e4b0797cb413356daa01dae1739.jpg)

### 添加右键菜单
解压`add-right-click-menu.zip`，右击`add-right-click-menu.bat`→点击`以管理员身份运行`：
![Xnip2019-03-26_15-39-57](https://img.xiebruce.top/2019/03/26/b84ced7066294b7e18ecc6077af4b4cc.jpg)

点击`是`：
![Xnip2019-03-26_15-40-28](https://img.xiebruce.top/2019/03/26/6701dc243fe96c1bd650bcabade081f9.jpg)

把前面说到的`php.exe`的路径和PicUploader的`index.php`路径粘贴到这里，然后按`y`回车确定添加，最后回车退出(其中的菜单文字可以不填，不填默认是“获取Markdown链接”)：
![Xnip2019-03-26_15-29-49](https://img.xiebruce.top/2019/03/26/8d07fd13df21e72fc176cf2c6fd9765a.jpg)
怎么粘贴地址呢？其实win7你可以直接把文件拖过去就能自动粘贴路径，但win10我这里是没法拖动，不知道是系统问题还是所有win10都不能拖动，不能拖动，你只能右击`php.exe`或`index.php`，然后点击`属性`→`安全`→然后就能看到路径，复制粘贴即可。

如果粘贴后出现以下类似乱码的字符，请把它删除：
![Xnip2019-03-26_15-29-00](https://img.xiebruce.top/2019/03/26/3de096dad80f677aceb6aa947a4c7e2c.jpg)

右键菜单文字就是创建右键菜单后，菜单上的文字，比如我写的是“上传图片”，创建后就是“上传图片”：
![Xnip2019-03-26_16-06-34](https://img.xiebruce.top/2019/03/26/6773339fa46f3bd47b92b2363f3ad62b.jpg)

现在就可以右击图片，点击`上传图片`试试了，正常的话它会弹出cmd黑色窗口并稍等一会儿自动消失，消失了就是图片上传完了，如果图片上传时间比较长，它停留的时间也比较长，等cmd黑色窗口消失后，就可以去粘贴了，如果粘贴出来的是报错，请自己尝试解决，如果无法解决，请在我的[github](https://github.com/xiebruce/PicUploader)上提issue。

### 原理
其实使用`add-right-click-menu.bat`添加右键菜单，是往注册表添加了一个选项，`win`+`R`打开运行→输入`regedit`回车即可打开注册表：
![Xnip2019-03-26_15-03-37](https://img.xiebruce.top/2019/03/26/24ad612868d0824cb926242f24cf8312.jpg)

打开注册表后，找到这个路径`HKEY_CLASSES_ROOT`→`*`→`shell`，添加菜单就是往这里添加了一个目录，目录名就是菜单名，然后目录里的command有一个默认值，这个值就是调用php执行`PicUploader`，并把当前右击的文件路径传给它，php上传完后会输出返回的地址，然后通过管道符`|`输出到系统剪贴板`clip`，这就是为什么上传完了，你能直接去粘贴的原因：
![Xnip2019-03-26_16-15-04](https://img.xiebruce.top/2019/03/26/2bc778fe3c461fdc22ed9bb79fb7ebe9.jpg)

### 删除菜单
如果你重新执行添加了菜单，而且添加的菜单名和之前的不一样，那么就会出现两个菜单，此时你只要到注册表里，找到原来的菜单，右击→`删除`即可，如果没有出来，你可以点`查看`→`刷新`：
![Xnip2019-03-26_15-31-04](https://img.xiebruce.top/2019/03/26/10f71bdc326b1d3bf965e3bfa069e366.jpg)

另外由于Windows系统原因，在windows系统下你只能右击一张图片上传，不能像在Mac系统下一样可以选中多张之后，右击同时上传多张，不过好在我们平时写文章插截图都是一张一张的传，所以这个关系倒不大！