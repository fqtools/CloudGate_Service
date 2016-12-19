<?php

# 引用Controller控制器模块
require '../../Controller/Controller.php';

# 重定向到一号店相应的页面
if(strstr($YHDMethod,"H5HOME")){header("Location:"."http://m.yhd.com/$YHDHijack");}

?>