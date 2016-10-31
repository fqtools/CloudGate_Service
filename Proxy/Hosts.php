<?php
/*
USERAGENT Location
*/
//Header
header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");
//USERAGENT
$USERAGENT = $_SERVER['HTTP_USER_AGENT'];
//Surge
if(strstr($USERAGENT,"Surge")){
header("Location:".'https://Config.daoapp.io/Hosts/Surge-Hosts.php');
}
//Shadowrocket
elseif(strstr($USERAGENT,"Shadowrocket")){
header("Location:".'https://Config.daoapp.io/Hosts/Shadowrocket.php');
}
//Other
else{
header("Location:".'https://Config.daoapp.io/Hosts/Surge-Hosts.php');
}