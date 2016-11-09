<?php
/*
USERAGENT Location
*/
//Header
header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");

//GET
if( isset($_GET['Fix']) ){$Fix = $_GET['Fix'];}else {$Fix = "false";}
//USERAGENT
$USERAGENT = $_SERVER['HTTP_USER_AGENT'];
//Surge
if(strstr($USERAGENT,"Surge")){
header("Location:"."http://UPlus7.Win/Hosts/Surge-Hosts.php?Fix=$Fix");
}
//Shadowrocket
elseif(strstr($USERAGENT,"Shadowrocket")){
header("Location:"."http://UPlus7.Win/Hosts/Shadowrocket.php?Fix=$Fix");
}
//Other
else{
header("Location:"."http://UPlus7.Win/Hosts/Surge-Hosts.php?Fix=$Fix");
}