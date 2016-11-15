<?php
/*
USERAGENT Location
*/
header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");

$USERAGENT = $_SERVER['HTTP_USER_AGENT'];

//Surge
if(strstr($USERAGENT,"Surge")){
header("Location:".'http://'.$_SERVER['SERVER_NAME'].'/Rule/General/Surge.php');
}
//Shadowrocket
elseif(strstr($USERAGENT,"Shadowrocket")){
header("Location:".'http://'.$_SERVER['SERVER_NAME'].'/Rule/General/Shadowrocket.php');
}
//Potatso
elseif(strstr($USERAGENT,"Potatso")){
header("Location:".'http://'.$_SERVER['SERVER_NAME'].'/Rule/General/Potatso.php');
}
//A.BIG.T
elseif(strstr($USERAGENT,"A.BIG.T")){
header("Location:".'http://'.$_SERVER['SERVER_NAME'].'/Rule/General/A.BIG.T.php');
}
//Other
else{
header("Location:".'http://'.$_SERVER['SERVER_NAME'].'/Other.html');
}