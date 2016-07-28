<?php
//------------Start-------------//
header("cache-control:no-cache,must-revalidate");//No-Cache
header("Content-Type:text/html;charset=UTF-8");//UTF-8
//-------------通用-------------//
if( isset($_GET['Config1']) ){//判断
$Config1 = $_GET['Config1'];//配置
}else {
$Config1 = "ss://salsa20:12345@10.0.0.0:18650";//配置
}
if( isset($_GET['Config2']) ){//判断
$Config2 = $_GET['Config2'];//配置
}else {
$Config2 = "ss://chacha20:12345@10.0.0.0:18650";//配置
}
if( isset($_GET['Config3']) ){//判断
$Config3 = $_GET['Config3'];//配置
}else {
$Config3 = "ss://aes-256-cfb:12345@10.0.0.0:18650";//配置
}
if( isset($_GET['Flag1']) ){//判断
$Flag1 = $_GET['Flag1'];    //配置
}else {
$Flag1 = "JP";//配置
}
if( isset($_GET['Flag2']) ){//判断
$Flag2 = $_GET['Flag2'];    //配置
}else {
$Flag2 = "SG";//配置
}
if( isset($_GET['Flag3']) ){//判断
$Flag3 = $_GET['Flag3'];    //配置
}else {
$Flag3 = "KR";//配置
}
$NAME = "UPlus";            //名称
//-------------文件-------------//
$DefaultFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Default.txt";
$DefaultFile  = $DefaultFile . '?Cache='.time();
$Default = fopen($DefaultFile,"r");
$ProxyFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Proxy.txt";
$ProxyFile  = $ProxyFile . '?Cache='.time();
$Proxy = fopen($ProxyFile,"r");
$DIRECTFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/DIRECT.txt";
$DIRECTFile  = $DIRECTFile . '?Cache='.time();
$DIRECT = fopen($DIRECTFile,"r");
$REJECTFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/REJECT.txt";
$REJECTFile  = $REJECTFile . '?Cache='.time();
$REJECT = fopen($REJECTFile,"r");
$PathFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Path.txt";
$PathFile  = $PathFile . '?Cache='.time();
$Path = fopen($PathFile,"r");
$KEYWORDFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/KEYWORD.txt";
$KEYWORDFile  = $KEYWORDFile . '?Cache='.time();
$KEYWORD = fopen($KEYWORDFile,"r");
$IPCIDRFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/IPCIDR.txt";
$IPCIDRFile  = $IPCIDRFile . '?Cache='.time();
$IPCIDR = fopen($IPCIDRFile,"r");
//-------------下载-------------//
$File = "Potatso.Conf";//下载文件名称
header("cache-control:no-cache,must-revalidate");//No-Cache
header('Content-type: application/octet-stream; charset=utf8');//下载动作
header("Accept-Ranges: bytes");
header('Content-Disposition: attachment; filename='.$File);//名称
//--------------配置------------//
echo"proxies:\r\n";
echo"- name: ss1\r\n";
echo"  type: SS\r\n";
echo"  host: 10.0.0.0\r\n";
echo"  port: 443\r\n";
echo"  encryption: rc4-md5\r\n";
echo"  password: 12345\r\n";
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
if($Default){//判断打开错误
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
  echo "下载失败!";//
}
//PROXY
if($Proxy){//判断打开错误
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
  echo "下载失败!";//
}
//DIRECT
if($DIRECT){//判断打开错误
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
  echo "下载失败!";//
}
//REJECT
if($REJECT){//判断打开错误
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
  echo "下载失败!";//
}
//URL-MATCH
if($Path){//判断打开错误
echo"# URL-MATCH\r\n";
while(!feof($Path))
{
echo "  - URL-MATCH,";
echo fgets($Path)."";
}
{
fclose($Path);
}
}else {//
  echo "下载失败!";//
}
//DOMAIN-MATCH
if($KEYWORD){//判断打开错误
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
  echo "下载失败!";//
}
//IPCIDR
if($IPCIDR){//判断打开错误
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
  echo "下载失败!";//
}
//Other
echo"\r\n#Other\r\n";
echo"  - GEOIP,CN,DIRECT";
exit();
//--------------END------------//