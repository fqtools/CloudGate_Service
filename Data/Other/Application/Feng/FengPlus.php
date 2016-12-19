<?php

# 引用Controller控制器模块
require '../../Controller/Controller.php';

# 输出文件内容
if($CURLSwitch=="Success"){echo $CURLContent;}
elseif($Location=="true"){}
else{echo "Error 400! :)";}

?>