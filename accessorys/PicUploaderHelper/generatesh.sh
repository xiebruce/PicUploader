#/bin/bash

if [[ "$USER" = "root" ]]; then
	echo "请不要用root用户运行！"
	exit
fi

count=0
while [[ $count=0 || "$py_version" = "" ]]
do
    if [[ "$py_version" = "" ]];then
        echo "请输入python3的可执行程序，如：python / python3\n（如不小心输入错误，请重新运行“./generatesh.sh”）:"
    else
        echo "您的输入有误，请重新输入："
    fi
    read py_version
    if [ "$py_version" != "" ]; then
        count=$($py_version -V 2>&1 | grep "Python 3." | grep -v "grep" | wc -l)
        if [[ $count -gt 0  ]];then
            break
        fi
    fi
done

sh_name="PicUploaderHelper-start.sh"

if [ "$USER"x = "$u"x ]
then
	echo "Please don't run as root!\n"
else
	CUR_DIR=$( cd "$(dirname "$0")" ; pwd -P )

    cat > $sh_name <<EOF
#!/bin/bash

user=\$(whoami)
if [ "\$user" != "root" ];then
    if [ "\$SUDO_USER"="" ]; then
        echo "请使用root用户启动，或直接在命令前添加sudo"
        exit
    fi
fi

OLD_PID=\$(ps aux | grep PicUploaderHelper.py | grep -v "grep" | tr -s ' ' | cut -d ' ' -f 2)

if [[ "\$OLD_PID" -gt "0" ]]; then
    kill -9 \$OLD_PID
fi

# PicUploaderHelper directory path
dir=\$(pwd)

# Run PicUploaderHelper.py in background
nohup python3 \${dir}"/PicUploaderHelper.py" \${dir}"/config.json" >> PicUploaderHelper.log 2>&1 &

PID=\$(ps aux | grep PicUploaderHelper.py | grep -v "grep" | tr -s ' ' | cut -d ' ' -f 2)
if [[ "\$PID" -gt "0" ]]; then
    echo "PicUploaderHelper启动成功，进程ID为："\$PID"，使用“ps aux | grep -v "grep" | grep PicUploaderHelper.py”命令可查询进程"
else
    echo "PicUploaderHelper启动失败"
fi
EOF

	chmod u+x ./$sh_name
	echo "\nPicUploaderHelper开机启动文件“${sh_name}”已生成，请把它拖动到“系统首选项”→“用户与群组”→“登录选项”中"
fi


