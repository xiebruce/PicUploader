@echo off

rem set window cols and lines

mode con cols=85 lines=40

echo -------------------------------------------------------------------------------------
echo                      欢迎使用 PicUploader 右键菜单安装工具
echo -------------------------------------------------------------------------------------

rem Initialization

set php_path=
set PicUploader_path=
set start_setup=
set btn_text=Upload by PicUploader

rem read user input

set /p php_path=请粘贴php.exe路径 :
set /p PicUploader_path=请粘贴PicUploader的index.php的路径:
set /p btn_text=请输入右键菜单文字 :
set /p start_setup=确定要安装吗?(y/n):

:loop

rem input params

if /i "%start_setup%" == "Y" goto :start
if /i "%start_setup%" == "y" goto :start
if /i "%start_setup%" == "N" goto :exit
if /i "%start_setup%" == "n" goto :exit

set /p start_setup=确定要安装吗?(y/n):

goto :loop

:start:

rem Start installation

reg add "HKCR\*\shell\%btn_text%" /ve /d "%btn_text%"  /f
reg add "HKCR\*\shell\%btn_text%\command" /ve /d "cmd /c %php_path% \"%PicUploader_path%\" \"%%1\" | clip"  /f

:exit

rem End installation

pause