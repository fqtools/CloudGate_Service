<?php

header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");

header("Location:".'http://'.$_SERVER['SERVER_NAME'].'/Rule/General/Surge.php');
?>