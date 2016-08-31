<?php
//------------Start-------------//
header("cache-control:no-cache,must-revalidate");//No-Cache
header("Content-Type:text/html;charset=UTF-8");//UTF-8
//-------------接收-------------//
if( isset($_GET['Config1']) ){$Config1 = $_GET['Config1'];}else {$Config1 = "ss://salsa20:Password@182.41.70.11:18650";}
if( isset($_GET['Config2']) ){$Config2 = $_GET['Config2'];}else {$Config2 = "ss://chacha20:Password@60.28.31.40:18650";}
if( isset($_GET['Config3']) ){$Config3 = $_GET['Config3'];}else {$Config3 = "ss://aes-256-cfb:Password@50.80.40.20:18650";}
if( isset($_GET['Flag1']) ){$Flag1 = $_GET['Flag1'];}else {$Flag1 = "JP";}
if( isset($_GET['Flag2']) ){$Flag2 = $_GET['Flag2'];}else {$Flag2 = "SG";}
if( isset($_GET['Flag3']) ){$Flag3 = $_GET['Flag3'];}else {$Flag3 = "KR";}
//-------------通用-------------//
$NAME = "UPlus";            //名称
//-------------文件-------------//
$DefaultFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Default.txt";
$DefaultFile  = $DefaultFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$Default = fopen($DefaultFile,"r");
$ProxyFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Proxy.txt";
$ProxyFile  = $ProxyFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$Proxy = fopen($ProxyFile,"r");
$DIRECTFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/DIRECT.txt";
$DIRECTFile  = $DIRECTFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$DIRECT = fopen($DIRECTFile,"r");
$REJECTFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/REJECT.txt";
$REJECTFile  = $REJECTFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$REJECT = fopen($REJECTFile,"r");
//$PathFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Path.txt";
//$PathFile  = $PathFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
//$Path = fopen($PathFile,"r");
$KEYWORDFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/KEYWORD.txt";
$KEYWORDFile  = $KEYWORDFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$KEYWORD = fopen($KEYWORDFile,"r");
$IPCIDRFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/IPCIDR.txt";
$IPCIDRFile  = $IPCIDRFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$IPCIDR = fopen($IPCIDRFile,"r");
//-------------下载-------------//
$File = "Potatso.Conf";//下载文件名称
header("cache-control:no-cache,must-revalidate");//No-Cache
header('Content-type: application/octet-stream; charset=utf8');//下载动作
header("Accept-Ranges: bytes");
header('Content-Disposition: attachment; filename='.$File);//名称
//--------------配置------------//
echo"proxies:\r\n";
echo"#\r\n";
echo"- name: $Flag1\r\n";
echo"  uri: $Config1\r\n";
echo"- name: $Flag2\r\n";
echo"  uri: $Config2\r\n";
echo"- name: $Flag3\r\n";
echo"  uri: $Config3\r\n";
echo"#\r\n";
echo"ruleSets:\r\n";
echo"# \r\n";
echo"# Potatso Config File [$NAME]\r\n";
echo"# Last Modified: " . date("Y/m/d") . "\r\n";
echo"#\r\n";
echo"- name: $NAME\r\n";
echo"  rules: ";
//--------------输出------------//
//Default
if($Default){打开错误
echo"\r\n# Default\r\n";
while(!feof($Default))
{
echo "  - ";
echo trim(fgets($Default)).",DIRECT"."\r\n"; 
}
{
fclose($Default);
}
}else {
  echo "\r\n# Default Module下载失败!\r\n";//
}
//PROXY
if($Proxy){打开错误
echo"# PROXY\r\n";
while(!feof($Proxy))
{
echo "  - ";
echo trim(fgets($Proxy)).",Proxy"."\r\n"; 
}
{
fclose($Proxy);
}
}else {
  echo "\r\n# Proxy Module下载失败!\r\n";//
}
//DIRECT
if($DIRECT){打开错误
echo"# DIRECT\r\n";
while(!feof($DIRECT))
{
echo "  - ";
echo trim(fgets($DIRECT)).",DIRECT"."\r\n"; 
}
{
fclose($DIRECT);
}
}else {
  echo "\r\n# DIRECT Module下载失败!\r\n";//
}
//REJECT
if($REJECT){打开错误
echo"\r\n# REJECT\r\n";
while(!feof($REJECT))
{
echo "  - ";
echo trim(fgets($REJECT)).",REJECT"."\r\n"; 
}
{
fclose($REJECT);
}
}else {
  echo "\r\n# REJECT Module下载失败!\r\n";//
}
//URL-MATCH
//if($Path){打开错误
//echo"# URL-MATCH\r\n";
//while(!feof($Path))
//{
//echo "  - URL-MATCH,";
//echo fgets($Path)."";
//}
//{
//fclose($Path);
//}
//}else {//
//  echo "\r\n# Path Module下载失败!\r\n";//
//}
//DOMAIN-MATCH
if($KEYWORD){打开错误
echo"\r\n# DOMAIN-MATCH\r\n";
while(!feof($KEYWORD))
{
echo "  - DOMAIN-MATCH,";
echo fgets($KEYWORD)."";
}
{
fclose($KEYWORD);
}
}else {
  echo "\r\n# KEYWORD Module下载失败!\r\n";//
}
//IPCIDR
if($IPCIDR){打开错误
echo"\r\n# IP-CIDR\r\n";
while(!feof($IPCIDR))
{
echo "  - IP-CIDR,";
echo fgets($IPCIDR)."";
}
{
fclose($IPCIDR);
}
}else {
  echo "\r\n# IPCIDR Module下载失败!\r\n";//
}
//Other
echo"\r\n#Other\r\n";
echo"  - GEOIP,CN,DIRECT";
exit();
//--------------END------------//