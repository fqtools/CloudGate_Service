<?php
//------------Start-------------//
header("cache-control:no-cache,must-revalidate");//No-Cache
header("Content-Type:text/html;charset=UTF-8");//UTF-8
//-------------接收-------------//
if( isset($_GET['interval']) ){$interval = $_GET['interval'];}else {$interval = "600";}
if( isset($_GET['China']) ){$China = $_GET['China'];}else {$China = "17.70.70.30,18650,aes-256-cfb,Password";}
if( isset($_GET['Config1']) ){$Config1 = $_GET['Config1'];}else {$Config1 = "50.70.70.30,18650,aes-256-cfb,Password";}
if( isset($_GET['Config2']) ){$Config2 = $_GET['Config2'];}else {$Config2 = "50.190.150.170,18650,aes-256-cfb,Password";}
if( isset($_GET['Config3']) ){$Config3 = $_GET['Config3'];}else {$Config3 = "120.190.200.240,18650,aes-256-cfb,Password";}
if( isset($_GET['Flag1']) ){$Flag1 = $_GET['Flag1'];}else {$Flag1 = "JP";}
if( isset($_GET['Flag2']) ){$Flag2 = $_GET['Flag2'];}else {$Flag2 = "KR";}
if( isset($_GET['Flag3']) ){$Flag3 = $_GET['Flag3'];}else {$Flag3 = "CN";}
//-------------通用-------------//
$NAME = "UPlus";            //名称
$OTA = "ota=false";      //OTA设置
$Module = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/Surge.Module"; //Module
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
$KEYWORDFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/KEYWORD.txt";
$KEYWORDFile  = $KEYWORDFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$KEYWORD = fopen($KEYWORDFile,"r");
$IPCIDRFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/IPCIDR.txt";
$IPCIDRFile  = $IPCIDRFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$IPCIDR = fopen($IPCIDRFile,"r");
$HOSTSFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/HOSTS.txt";
$HOSTSFile  = $HOSTSFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$HOSTS = fopen($HOSTSFile,"r");
$RewriteFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Rewrite.txt";
$RewriteFile  = $RewriteFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$Rewrite = fopen($RewriteFile,"r");
//-------------下载-------------//
$File = "LoadBalance.Conf";//下载文件名称
header("cache-control:no-cache,must-revalidate");//No-Cache
header('Content-type: application/octet-stream; charset=utf8');//下载动作
header("Accept-Ranges: bytes");
header('Content-Disposition: attachment; filename='.$File);//名称
//--------------配置------------//
echo "[General]\r\n";
echo "bypass-system = true\r\n";
echo "skip-proxy = 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, localhost, *.local, ::ffff:0:0:0:0/1, ::ffff:128:0:0:0/1\r\n";
//echo "bypass-tun = 0.0.0.0/8, 1.0.0.0/9, 1.160.0.0/11, 1.192.0.0/11, 10.0.0.0/8, 14.0.0.0/11, 14.96.0.0/11, 14.128.0.0/11, 14.192.0.0/11, 27.0.0.0/10, 27.96.0.0/11, 27.128.0.0/9, 36.0.0.0/10, 36.96.0.0/11, 36.128.0.0/9, 39.0.0.0/11, 39.64.0.0/10, 39.128.0.0/10, 42.0.0.0/8, 43.224.0.0/11, 45.64.0.0/10, 47.64.0.0/10, 49.0.0.0/9, 49.128.0.0/11, 49.192.0.0/10, 54.192.0.0/11, 58.0.0.0/9, 58.128.0.0/11, 58.192.0.0/10, 59.32.0.0/11, 59.64.0.0/10, 59.128.0.0/9, 60.0.0.0/10, 60.160.0.0/11, 60.192.0.0/10, 61.0.0.0/10, 61.64.0.0/11, 61.128.0.0/10, 61.224.0.0/11, 100.64.0.0/10, 101.0.0.0/9, 101.128.0.0/11, 101.192.0.0/10, 103.0.0.0/10, 103.192.0.0/10, 106.0.0.0/9, 106.224.0.0/11, 110.0.0.0/7, 112.0.0.0/9, 112.128.0.0/11, 112.192.0.0/10, 113.0.0.0/9, 113.128.0.0/11, 113.192.0.0/10, 114.0.0.0/9, 114.128.0.0/11, 114.192.0.0/10, 115.0.0.0/8, 116.0.0.0/8, 117.0.0.0/9, 117.128.0.0/10, 118.0.0.0/11, 118.64.0.0/10, 118.128.0.0/9, 119.0.0.0/9, 119.128.0.0/10, 119.224.0.0/11, 120.0.0.0/10, 120.64.0.0/11, 120.128.0.0/11, 120.192.0.0/10, 121.0.0.0/9, 121.192.0.0/10, 122.0.0.0/7, 124.0.0.0/8, 125.0.0.0/9, 125.160.0.0/11, 125.192.0.0/10, 127.0.0.0/8, 139.0.0.0/11, 139.128.0.0/9, 140.64.0.0/11, 140.128.0.0/11, 140.192.0.0/10, 144.0.0.0/10, 144.96.0.0/11, 144.224.0.0/11, 150.0.0.0/11, 150.96.0.0/11, 150.128.0.0/11, 150.192.0.0/10, 152.96.0.0/11, 153.0.0.0/10, 153.96.0.0/11, 157.0.0.0/10, 157.96.0.0/11, 157.128.0.0/11, 157.224.0.0/11, 159.224.0.0/11, 161.192.0.0/11, 162.96.0.0/11, 163.0.0.0/10, 163.96.0.0/11, 163.128.0.0/10, 163.192.0.0/11, 166.96.0.0/11, 167.128.0.0/10, 167.192.0.0/11, 168.160.0.0/11, 169.254.0.0/16, 171.0.0.0/9, 171.192.0.0/11, 172.16.0.0/12, 175.0.0.0/9, 175.128.0.0/10, 180.64.0.0/10, 180.128.0.0/9, 182.0.0.0/8, 183.0.0.0/10, 183.64.0.0/11, 183.128.0.0/9, 192.0.0.0/24, 192.0.2.0/24, 192.88.99.0/24, 192.96.0.0/11, 192.160.0.0/11, 198.18.0.0/15, 198.51.100.0/24, 202.0.0.0/9, 202.128.0.0/10, 202.192.0.0/11, 203.0.0.0/9, 203.128.0.0/10, 203.192.0.0/11, 210.0.0.0/10, 210.64.0.0/11, 210.160.0.0/11, 210.192.0.0/11, 211.64.0.0/10, 211.128.0.0/10, 218.0.0.0/9, 218.160.0.0/11, 218.192.0.0/10, 219.64.0.0/11, 219.128.0.0/11, 219.192.0.0/10, 220.96.0.0/11, 220.128.0.0/9, 221.0.0.0/11, 221.96.0.0/11, 221.128.0.0/9, 222.0.0.0/8, 223.0.0.0/11, 223.64.0.0/10, 223.128.0.0/9\r\n";
echo "bypass-tun = 192.168.0.0/16, 10.0.0.0/8, 172.0.0.0/8, 127.0.0.0/24\r\n";
echo "dns-server = 8.8.8.8, 8.8.4.4\r\n";
echo "loglevel = notify\r\n";
echo "replica = false\r\n";
echo "ipv6 = false\r\n";
echo "#  \r\n";
echo "# Surge Config File [$NAME]\r\n";
echo "# Last Modified: " . date("Y/m/d") . "\r\n";
echo "# \r\n";
echo "[Proxy]\r\n";
echo "🇨🇳 = custom,$China,$Module,$OTA\r\n";
echo "$Flag1 = custom,$Config1,$Module,$OTA\r\n";
echo "$Flag2 = custom,$Config2,$Module,$OTA\r\n";
echo "$Flag3 = custom,$Config3,$Module,$OTA\r\n";
echo "[Proxy Group]\r\n";
echo "Proxy = select, $Flag1, $Flag2, $Flag3\r\n";
//echo "Group = select, AutoGroup, 🇳🇫, 🇬🇧\r\n";
echo "AutoGroup = url-test, $Flag1, $Flag2, $Flag3, url = http://www.gstatic.com/generate_204, interval = $interval, tolerance = 200, timeout = 5\r\n";
//--------------输出------------//
//HOSTS
//echo "[Host]";
//echo"\r\n# HOSTS\r\n";
if($HOSTS){//判断打开错误
while(!feof($HOSTS))
{
echo fgets($HOSTS)."";
}
{
fclose($HOSTS);
}
}else {
  echo "\r\n# HOSTS Module下载失败!\r\n";//
}
//Default
if($Default){//判断打开错误
echo "\r\n[Rule]";
echo"\r\n# Default\r\n";
while(!feof($Default))
{
echo trim(fgets($Default)).",🇨🇳,force-remote-dns"."\r\n"; 
}
{
fclose($Default);
}
}else {
  echo "\r\n# Default Module下载失败!\r\n";//
}
//PROXY
if($Proxy){//判断打开错误
echo"# PROXY\r\n";
while(!feof($Proxy))
{
echo trim(fgets($Proxy)).",AutoGroup,force-remote-dns"."\r\n"; 
}
{
fclose($Proxy);
}
}else {
  echo "\r\n# Proxy Module下载失败!\r\n";//
}
//DIRECT
if($DIRECT){//判断打开错误
echo"# DIRECT\r\n";
while(!feof($DIRECT))
{
echo trim(fgets($DIRECT)).",🇨🇳"."\r\n"; 
}
{
fclose($DIRECT);
}
}else {
  echo "\r\n# DIRECT Module下载失败!\r\n";//
}
//REJECT
if($REJECT){//判断打开错误
echo"# REJECT\r\n";
while(!feof($REJECT))
{
echo trim(fgets($REJECT)).",REJECT"."\r\n"; 
}
{
fclose($REJECT);
}
}else {
  echo "\r\n# REJECT Module下载失败!\r\n";//
}
//KEYWORD
if($KEYWORD){//判断打开错误
echo"# KEYWORD\r\n";
while(!feof($KEYWORD))
{
echo "DOMAIN-KEYWORD,";
echo fgets($KEYWORD)."";
}
{
fclose($KEYWORD);
}
}else {
  echo "\r\n# KEYWORD Module下载失败!\r\n";//
}
//IPCIDR
if($IPCIDR){//判断打开错误
echo"\r\n# IP-CIDR\r\n";
while(!feof($IPCIDR))
{
echo "IP-CIDR,";
echo trim(fgets($IPCIDR)).",no-resolve"."\r\n"; 
}
{
fclose($IPCIDR);
}
}else {
  echo "\r\n# IPCIDR Module下载失败!\r\n";//
}
//Other
echo"# Other\r\n";
echo"GEOIP,CN,DIRECT\r\n";
echo"FINAL,AutoGroup";
//Rewrite
if($Rewrite){//判断打开错误
echo"\r\n# Rewrite\r\n";
echo"[URL Rewrite]\r\n";
while(!feof($Rewrite))
{
echo fgets($Rewrite)."";
}
{
fclose($Rewrite);
}
}else {
  echo "\r\n# Rewrite Module下载失败!\r\n";//
}
exit();
//--------------END-------------//