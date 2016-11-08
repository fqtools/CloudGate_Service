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
header("Location:".'http://UPlus7.Win/Hosts/Surge-Hosts.php');
}
//Shadowrocket
elseif(strstr($USERAGENT,"Shadowrocket")){
header("Location:".'http://UPlus7.Win/Hosts/Shadowrocket.php');
}
//Other
else{
header("Location:".'http://UPlus7.Win/Hosts/Surge-Hosts.php');
}