<?php

# 关闭所有 Notice | Warning 级别的错误
error_reporting(E_ALL^E_NOTICE^E_WARNING);

# 页面禁止缓存 | 内容类型
header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");

# 设置时区
date_default_timezone_set('PRC');

# 接收GET请求参数
$Redirect     = $_GET['redirect'];
$M            = $_GET['m'];
$URL          = $_GET['url'];
$U            = $_GET['u'];
$JDMethod     = $_GET['JDMethod'];
$JDHijack     = $_GET['JDHijack'];
$YHDMethod    = $_GET['YHDMethod'];
$YHDHijack    = $_GET['YHDHijack'];
$FengPlus     = $_REQUEST['?r'];
$key          = $_REQUEST['?key'];
$Type         = $_REQUEST['type'];
$v            = $_REQUEST['v'];
$FengPlusData = $_REQUEST['data'];
$Method       = $_REQUEST['Method'];
$HOST         = $_GET['HOST'];
$R            = $_GET['R'];

# 设定参数默认值
$DeURL = 'http://'."$URL";

# 设置默认参数
$Base64_DecodeM    = base64_decode($M);
$Redirect_GET      = get_headers($Redirect,true);
$M_GET             = get_headers($Base64_DecodeM,true);
$URL_GET           = get_headers($DeURL,true);
$Redirect_FileSize = $Redirect_GET['Content-Length'];
$M_FileSize        = $M_GET['Content-Length'];
$URL_FileSize      = $URL_GET['Content-Length'];

# 检测请求的参数
if(strstr($Redirect,"http://")&&strstr($Redirect,".js")){
if($Redirect_FileSize>"50"&&$Redirect_FileSize<"1024000"){
$CURL="true";$CURLAddress=$Redirect;$CURLSwitch="Success";}}
elseif(strstr($M,"aHR0cDov")){
if($M_FileSize>"50"&&$M_FileSize<"1024000"){
$CURL="true";$CURLAddress=$Base64_DecodeM;$CURLSwitch="Success";}}
elseif(strstr($URL,"http://")&&strstr($URL,".js")){
if($URL_FileSize>"50"&&$URL_FileSize<"1024000"){
$CURL="true";$CURLAddress=$URL;$CURLSwitch="Success";}}
elseif(strstr($U,"mbd")){$BaiduHijack="true";$U="true";}
if($Method=="FengPlus"){$FengData="http://fengplus.feng.com/index.php?"."r=$FengPlus"."&data=$FengPlusData";$CURL="true";$CURLSwitch="Success";}
elseif($Method=="Live"){$FengData="http://live.feng.com/index.php?"."r=$FengPlus"."&data=$FengPlusData";$CURL="true";$CURLSwitch="Success";}
elseif($Method=="Friend"){$FengData="http://friend.feng.com/index.php?"."r=$FengPlus"."&data=$FengPlusData";$CURL="true";$CURLSwitch="Success";}
elseif($Method=="Push"){$FengData="http://push.feng.com/index.php?"."r=$FengPlus"."&data=$FengPlusData";$CURL="true";$CURLSwitch="Success";}
elseif($Method=="BBSAPI"){$FengData="http://bbsapi.feng.com/api/mobile/client.php?"."&data=$FengPlusData";$CURL="true";$CURLSwitch="Success";}
elseif($Method=="Feng"){$FengData="http://www.feng.com/publish/bbsapp.php?"."r=$FengPlus"."&v=$v"."&type=$Type"."&key=$key"."&data=$FengPlusData";$CURL="true";$CURLSwitch="Success";}
elseif($Method=="Game"){$FengData="http://game.feng.com/index.php?"."r=$FengPlus"."&data=$FengPlusData";$CURL="true";$CURLSwitch="Success";}
if($FengPlus=="api/slide/getAdsForList"){$Location="true";}
elseif($FengPlus=="api/slide/getAdsForDetail"){$Location="true";}
elseif($FengPlus=="api/Ads/getAdsForDetail"){$Location="true";}
elseif($FengPlus=="api/client/errorlog"){$Location="true";}
elseif($FengPlus=="api/slide/getSlideDataByCode"){$Location="true";}
elseif($FengPlus=="api/client/getAppLaunchImage"){$Location="true";}
else{$CURLAddress=$FengData;}

# 检测是否开启CURL和地址并打开
if($CURL=="true"){$CURLX=curl_init();
curl_setopt($CURLX,CURLOPT_URL,"$CURLAddress");
curl_setopt($CURLX,CURLOPT_RETURNTRANSFER,true);
curl_setopt($CURLX,CURLOPT_TIMEOUT,30);
$CURLContent=curl_exec($CURLX);
curl_close($CURLX);}

?>