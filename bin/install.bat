@REM mkdir "./AppClone/";
@REM copy C:\laragon\www\TortongFramework\App\*.* C:\laragon\www\TortongFramework\AppClone\.
@REM copy C:\laragon\www\TortongFramework\*.* C:\laragon\www\TortongFramework\AppClone\. /Y

@REM del C:\laragon\www\TortongFramework\bin\AppClone\setup_tortong_script.*
@echo off
echo Date/Time last login:
:write
echo %date%, %time%. >> log.txt
echo %cd%. >> log.txt
@pause
exit