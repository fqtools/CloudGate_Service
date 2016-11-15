<?php

header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");

if( isset($_GET['Fix']) ){$Fix = $_GET['Fix'];}else {$Fix = "false";}

header("Location:".'http://'.$_SERVER['SERVER_NAME']."/Rule/General/Hosts.php?Fix=$Fix");
?>