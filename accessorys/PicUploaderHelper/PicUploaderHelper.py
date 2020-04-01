# -*- coding: utf-8 -*-
from pynput import keyboard
from PIL import ImageGrab
import os
import logging
import json
import subprocess
import sys

# Current directory
current_dir = os.path.dirname(os.path.abspath(__file__))

separator = '/'
client_type = ''
config_file_name = 'config.json'

if sys.platform == 'win32':
    config_file_name = 'config_win.json'
    separator = '\\'


def read_config():
    """ Read config from config.json """
    global client_type
    config_file = current_dir + separator + config_file_name
    # if there is params
    if len(sys.argv) > 1:
        for i, val in enumerate(sys.argv):
            if i == 0:
                continue
            else:
                """ 判断是直接执行还是用Alfred """
                pos = val.find('=')
                if pos > -1:
                    params = val.split('=')
                    key = params[0]
                    val = params[1]
                    if key == '--config':
                        config_file = val
                    elif key == '--type':
                        client_type = val
                else:
                    config_file = val
                    client_type = ''

    f = open(config_file, 'r', -1, 'utf8')
    text = f.read()
    f.close()
    return json.loads(text)


# Read config from config.json
config = read_config()

if config['debug'] == 1:
    log_dir = current_dir
    logging.basicConfig(filename=(log_dir + separator + "key_log.txt"), level=logging.DEBUG,format='%(asctime)s: %(message)s')


def send_notification(notification_type=''):
    """ Send notification with powershell """
    if notification_type == "":
        notification_type = 'success'

    notification = config['notification'][notification_type]
    title = notification['title']
    subtitle = notification['subtitle']
    message = notification['message']

    if sys.platform == 'win32':
        # powershell script
        notification_script = current_dir + separator + 'notification.ps1'
        # Popen参数
        args = ["powershell", "-ExecutionPolicy", "Unrestricted",
                notification_script + ' "' + title + '" "' + message + '"']

        # Execute shell by python
        subprocess.Popen(args, shell=True)
    elif sys.platform == 'darwin':
        # Apple script: display notification
        notification_script = 'display notification "' + message + '" with title "' + title + '" subtitle "' + subtitle + '"'
        # Execute apple script
        applescript_command = "osascript -e '" + notification_script + "'"

        # Execute shell by python
        subprocess.Popen(applescript_command, shell=True)
    else:
        notification_script = 'notify-send "' + title + '" "' + message + '"'
        # Execute shell by python
        subprocess.Popen(notification_script, shell=True)


def get_image_from_clipboard():
    """" Get image from clipboard """
    # Pull image from clipboard
    img_obj = ImageGrab.grabclipboard()

    if img_obj is None:
        return ''
    else:
        # Get image type from config
        img_type = config['img_type']

        ext = 'jpg' if img_type == 'JPEG' else img_type.lower()

        # Tmp image path
        tmp_img = current_dir + separator + 'image.' + ext

        # Save the image as jpg to disk
        img_obj.save(tmp_img, img_type.upper())

        return tmp_img


def upload_image():
    """ Upload image to remote server by running shell command """
    # 从剪贴板中获取截图保存后的路径
    tmp_img = get_image_from_clipboard()

    if tmp_img != '':
        # 上传前先显示图片上传中
        send_notification('uploading')
        
        # Assemble upload shell command
        upload_command = config['php_path'] + ' ' + config['picuploader_index_path'] + ' --type=python ' + tmp_img

        if client_type != 'alfred':
            if sys.platform == 'darwin':
                clipboard = 'pbcopy'
            elif sys.platform == 'win32':
                clipboard = 'clip'
            else:
                clipboard = 'xsel -b'

            # Execute shell with python
            upload_command = upload_command + ' | ' + clipboard

        # 调用PicUploader执行图片上传
        child = subprocess.Popen(upload_command, stdout=subprocess.PIPE, shell=True)
        child.wait()

        if client_type == 'alfred':
            link = str(child.stdout.read(), encoding='utf-8').strip()
            print(link)

        # 删除从剪贴板保存的图片文件
        os.remove(tmp_img)

        # 上传成功后，不使用python来通知，而是用php来弹出通知，因为可能有多个上传任务，只有php知道哪个上传完了
        # send_notification()
    else:
        # 提示没有图片
        send_notification('no_image')


def get_key_combination():
    """ Get key combinations from config """
    tmp_list = []
    key_combinations = config['key_combinations']
    # print(key_combinations)

    for items in key_combinations:
        s = set()
        for item in items:
            # 长度为1时，说明它是单字母，这时只获取KeyCode就行(也就是一个ASCII数字)
            if len(item) == 1:
                # char=item这种参数传法是因为函数的参数是"关键字参数"
                ele = keyboard.KeyCode(char=item)
            # 长度大于1，说明按的不是单字母，而是类似Ctrl,Alt,win/cmd等等按键，就要获取它们在Keyboard里的表示方法
            else:
                # 从keyboard.Key对象里获取item属性(item是变量，值可以是：shift,alt,ctrl等等)
                ele = getattr(keyboard.Key, item)
            s.add(ele)
        tmp_list.append(s)
    return tmp_list


# 如果是Alfred调用，则直接上传剪贴板图片即可，不需要监听剪贴板
if client_type == 'alfred':
    upload_image()
else:
    # The currently active modifiers
    current = set()
    # get key combination
    COMBINATIONS = get_key_combination()
    # print出来有尖括号是因为它是枚举类型
    # COMBINATIONS的值是这样的：[{<Key.alt: <58>>, <Key.shift: <56>>, '¨'}]
    # print(COMBINATIONS)
    # for COMBO in COMBINATIONS:
    #     print(COMBO)
    # quit()
    def on_press(key):
        print(key)
        """ Listen button press event  """
        if config['debug'] == 1:
            logging.info(str(key))
        # COMBINATIONS是二维数组(多组快捷键)，COMBO是集合(单组快捷键)
        if any([key in COMBO for COMBO in COMBINATIONS]):
            # 只要按下的键是在COMBINATIONS里的，则存到current集合里
            current.add(key)
            # 如果COMBINATIONS里的任意一组任意一组快捷键(即COMBO)里的所有按键都在current里，说明这组快捷键被按下了
            if any(all(k in current for k in COMBO) for COMBO in COMBINATIONS):
                print(111111)
                # upload_image()


    def on_release(key):
        """ Listen button release event """
        if any([key in COMBO for COMBO in COMBINATIONS]):
            current.remove(key)


    with keyboard.Listener(on_press=on_press, on_release=on_release) as listener:
        """ start a keyboard listener """
        listener.join()
