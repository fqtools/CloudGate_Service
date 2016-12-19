<?php

# 引用Controller控制器模块
require '../Controller/Controller.php';

# 输出文件内容 | 百度劫持修复 | 其他
if($CURLSwitch=="Success"){echo $CURLContent;}
elseif($BaiduHijack=="true"){header("Location:".'https://baidu.com/');}
else{echo "Error 400! :)";}

?>