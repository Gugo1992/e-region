@echo off

rem -------------------------------------------------------------
rem  Yii command line bootstrap script for Windows.
<<<<<<< HEAD
rem
rem  @author Qiang Xue <qiang.xue@gmail.com>
rem  @link http://www.yiiframework.com/
rem  @copyright Copyright (c) 2008 Yii Software LLC
rem  @license http://www.yiiframework.com/license/
=======
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
rem -------------------------------------------------------------

@setlocal

set YII_PATH=%~dp0

if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

"%PHP_COMMAND%" "%YII_PATH%yii_test" %*

@endlocal
