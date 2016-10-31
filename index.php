<?php
/*
USERAGENT Location
*/
header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");

$USERAGENT = $_SERVER['HTTP_USER_AGENT'];

//Surge
if(strstr($USERAGENT,"Surge")){
header("Location:".'https://Config.daoapp.io/Proxy/Surge.php');
}
//Shadowrocket
elseif(strstr($USERAGENT,"Shadowrocket")){
header("Location:".'https://Config.daoapp.io/Proxy/Shadowrocket.php');
}
//Potatso
elseif(strstr($USERAGENT,"Potatso")){
header("Location:".'https://Config.daoapp.io/Proxy/Potatso.php');
}
//A.BIG.T
elseif(strstr($USERAGENT,"A.BIG.T")){
header("Location:".'https://Config.daoapp.io/Proxy/A.BIG.T.php');
}
//Other
else{
header("Location:".'https://Config.daoapp.io/Other.html');
}