@echo off

rem set window cols and lines

mode con cols=85 lines=40

echo -------------------------------------------------------------------------------------
echo                      ��ӭʹ�� PicUploader �Ҽ��˵���װ����
echo -------------------------------------------------------------------------------------

rem Initialization

set php_path=
set PicUploader_path=
set start_setup=
set btn_text=Upload with PicUploader

rem read user input

set /p php_path=��ճ��php.exe·�� : 
set /p PicUploader_path=��ճ��PicUploader��index.php��·��: 
set /p btn_text=�������Ҽ��˵����� : 
set /p start_setup=ȷ��Ҫ��װ��?(y/n):

:loop

rem input params

if /i "%start_setup%" == "Y" goto :start
if /i "%start_setup%" == "y" goto :start
if /i "%start_setup%" == "N" goto :exit
if /i "%start_setup%" == "n" goto :exit

set /p start_setup=ȷ��Ҫ��װ��?(y/n):

goto :loop

:start:

rem Start installation

reg add "HKCR\*\shell\%btn_text%" /ve /d "%btn_text%"  /f
reg add "HKCR\*\shell\%btn_text%\command" /ve /d "cmd /c %php_path% \"%PicUploader_path%\" \"%%1\" | clip"  /f

:exit

rem End installation

pause 