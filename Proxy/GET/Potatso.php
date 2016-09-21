<?php
//------------Start-------------//
header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");
header("Accept-Ranges: bytes");
header('Content-Disposition: attachment; filename='.'Potatso.Conf');
//-------------接收-------------//
if( isset($_GET['Rule']) ){$Rule = $_GET['Rule'];}else {$Rule = "Advanced";}
if( isset($_GET['Apple']) ){$Apple = $_GET['Apple'];}else {$Apple = "DIRECT";}
if( isset($_GET['Config1']) ){$Config1 = $_GET['Config1'];}else {$Config1 = "ss://salsa20:Password@182.41.70.11:18650";}
if( isset($_GET['Config2']) ){$Config2 = $_GET['Config2'];}else {$Config2 = "ss://chacha20:Password@60.28.31.40:18650";}
if( isset($_GET['Config3']) ){$Config3 = $_GET['Config3'];}else {$Config3 = "ss://aes-256-cfb:Password@50.80.40.20:18650";}
if( isset($_GET['Flag1']) ){$Flag1 = $_GET['Flag1'];}else {$Flag1 = "JP";}
if( isset($_GET['Flag2']) ){$Flag2 = $_GET['Flag2'];}else {$Flag2 = "SG";}
if( isset($_GET['Flag3']) ){$Flag3 = $_GET['Flag3'];}else {$Flag3 = "KR";}
//-------------通用-------------//
$NAME = "CloudGate";        //名称
//-------------文件-------------//
$DefaultFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Default.txt";
$DefaultFile  = $DefaultFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$Default = fopen($DefaultFile,"r");
if ($Rule=="Advanced"){$ProxyFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Advanced.txt";} 
elseif ($Rule=="Basic"){$ProxyFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Basic.txt";}
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
//--------------模块------------//
//Default
if($Default){
echo"\r\n# Default\r\n";
while(!feof($Default))
{
echo "  - ";
echo trim(fgets($Default)).",$Apple"."\r\n"; 
}
{
fclose($Default);
}
}else {
  echo "\r\n# Default Module下载失败!\r\n";
}
//PROXY
if($Proxy){
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
  echo "\r\n# Proxy Module下载失败!\r\n";
}
//DIRECT
if($DIRECT){
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
  echo "\r\n# DIRECT Module下载失败!\r\n";
}
//REJECT
if($REJECT){
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
  echo "\r\n# REJECT Module下载失败!\r\n";
}
//DOMAIN-MATCH
if($KEYWORD){
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
  echo "\r\n# KEYWORD Module下载失败!\r\n";
}
//IPCIDR
if($IPCIDR){
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
  echo "\r\n# IPCIDR Module下载失败!\r\n";
}
//Other
echo"\r\n#Other\r\n";
echo"  - GEOIP,CN,DIRECT";
exit();
//--------------END------------//