# -*- coding: utf-8 -*-
from pynput import keyboard
from PIL import ImageGrab
import os
import logging
import json
import subprocess
import sys

# The currently active modifiers
current = set()
# Current directory
current_dir = os.path.dirname(os.path.abspath(__file__))

separator = '/'
config_file_name = 'config.json'

if sys.platform == 'win32':
    config_file_name = 'config_win.json'
    separator = '\\'


def read_config():
    """ Read config from config.json """
    config_file = current_dir + separator + config_file_name
    if len(sys.argv) == 2:
        config_file = sys.argv[1]

    f = open(config_file, 'r', -1, 'utf8')
    text = f.read()
    f.close()
    return json.loads(text)


# Read config from config.json
config = read_config()

if config['debug'] == 1:
    log_dir = current_dir
    logging.basicConfig(filename=(log_dir + separator + "key_log.txt"), level=logging.DEBUG,format='%(asctime)s: %(message)s')


def get_key_combination():
    """ Get key combinations from config """
    tmp_list = []
    key_combinations = config['key_combinations']

    for items in key_combinations:
        s = set()
        for item in items:
            if len(item) == 1:
                ele = keyboard.KeyCode(char=item)
            else:
                ele = getattr(keyboard.Key, item)
            s.add(ele)
        tmp_list.append(s)
    return tmp_list


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


def get_image_from_clipboard():
    """" Get image from clipboard """
    # Pull image from clipboard
    img_obj = ImageGrab.grabclipboard()

    if img_obj is None:
        return '';
    else:
        # Get image type from config
        img_type = config['img_type']

        # Tmp image path
        # tmp_img =  './.screenshot_upload_tmp.' + img_type.lower()
        tmp_img = current_dir + separator + '.screenshot.' + img_type.lower()

        # Save the image as jpg to disk
        img_obj.save(tmp_img, img_type.upper())

        return tmp_img


def upload_image():
    """ Upload image to remote server by running shell command """
    tmp_img = get_image_from_clipboard()

    if tmp_img != '':
        # Assemble upload shell command
        upload_command = config['php_path'] + ' ' + config['picuploader_index_path'] + ' ' + tmp_img

        if sys.platform == 'darwin':
            clipboard = 'pbcopy'
        elif sys.platform == 'win32':
            clipboard = 'clip'
        else:
            clipboard = 'xsel -b'

        # Execute shell with python
        upload_command = upload_command + ' | ' + clipboard

        child = subprocess.Popen(upload_command, stdout=subprocess.PIPE, shell=True)
        child.wait()

        # 删除从剪贴板保存的图片文件
        os.remove(tmp_img)

        # Send macOS notification
        send_notification()
    else:
        send_notification('no_image')


COMBINATIONS = []
COMBINATIONS = get_key_combination()


def on_press(key):
    """ Listen button press event  """
    if config['debug'] == 1:
        logging.info(str(key))
    if any([key in COMBO for COMBO in COMBINATIONS]):
        current.add(key)
        if any(all(k in current for k in COMBO) for COMBO in COMBINATIONS):
            upload_image()


def on_release(key):
    """ Listen button release event """
    if any([key in COMBO for COMBO in COMBINATIONS]):
        current.remove(key)


with keyboard.Listener(on_press=on_press, on_release=on_release) as listener:
    """ start a keyboard listener """
    listener.join()
