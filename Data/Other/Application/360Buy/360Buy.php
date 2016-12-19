<?php

# 引用Controller控制器模块
require '../../Controller/Controller.php';

# 重定向到京东相应的页面
if    (strstr($JDMethod,"H5HOME")){header("Location:"."https://m.jd.com/");}
elseif(strstr($JDMethod,"Browse")){header("Location:"."https://item.m.jd.com/$JDHijack");}
elseif(strstr($JDMethod,"Serach")){header("Location:"."https://so.m.jd.com/$JDHijack");}
elseif(strstr($JDMethod,"Portal")){header("Location:"."https://p.m.jd.com/$JDHijack");}
elseif(strstr($JDMethod,"Coupon")){header("Location:"."https://coupon.m.jd.com/$JDHijack");}
elseif(strstr($JDMethod,"MHTML5")){header("Location:"."https://h5.m.jd.com/$JDHijack");}
elseif(strstr($JDMethod,"MNEWCZ")){header("Location:"."https://newcz.m.jd.com/$JDHijack");}

?>