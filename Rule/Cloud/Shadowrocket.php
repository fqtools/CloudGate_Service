<?php
//------------Start-------------//
header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");
header("Accept-Ranges: bytes");
header('Content-Disposition: attachment; filename='.'Shadowrocket.Conf');
//-------------通用-------------//
$GeneralDefaultURL = "http://7xpphx.com1.z0.glb.clouddn.com/General/Demo/Shadowrocket_General.cfg";
if( isset($_GET['Config']) ){$GeneralURL = $_GET['Config'];}else {$GeneralURL = "$GeneralDefaultURL";}
if( strstr($GeneralURL,"http://")&&strstr($GeneralURL,".cfg") ){$GeneralURLSign = $GeneralURL .'?Sign='.sha1(mt_rand()).'&TimeStamp='.time();}else {$GeneralURLSign = "$GeneralDefaultURL";}
$a_array = get_headers($GeneralURLSign,true); 
$FileSize = $a_array['Content-Length']; 
if( $FileSize<"524288"&&$FileSize>"100" ){$GeneralFile = "$GeneralURLSign";}
//-------------文件-------------//
$General = fopen($GeneralFile,"r");
$DefaultFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Default.txt";
$DefaultFile  = $DefaultFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$Default = fopen($DefaultFile,"r");
$ProxyFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Advanced.txt";
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
$RewriteFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Rewrite.txt";
$RewriteFile  = $RewriteFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$Rewrite = fopen($RewriteFile,"r");
//--------------配置------------//
if($General){
while(!feof($General))
{
echo trim(fgets($General))."\r\n"; 
}
{
fclose($General);
}
}else {
  echo "\r\n# General Module下载失败!\r\n";
}
//--------------模块------------//
//Default
if($Default){
echo "[Rule]";
echo"\r\n# Default\r\n";
while(!feof($Default))
{
echo trim(fgets($Default)).",DIRECT"."\r\n"; 
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
echo trim(fgets($Proxy)).",PROXY"."\r\n"; 
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
echo"# REJECT\r\n";
while(!feof($REJECT))
{
echo trim(fgets($REJECT)).",REJECT"."\r\n"; 
}
{
fclose($REJECT);
}
}else {
  echo "\r\n# REJECT Module下载失败!\r\n";
}
//KEYWORD
if($KEYWORD){
echo"# KEYWORD\r\n";
while(!feof($KEYWORD))
{
echo "DOMAIN-KEYWORD,";
echo trim(fgets($KEYWORD)).",force-remote-dns"."\r\n"; 
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
echo "IP-CIDR,";
echo fgets($IPCIDR)."";
}
{
fclose($IPCIDR);
}
}else {
  echo "\r\n# IPCIDR Module下载失败!\r\n";
}
//Other
echo"\r\n# Other\r\n";
echo"GEOIP,CN,DIRECT\r\n";
echo"FINAL,PROXY";
//Rewrite
if($Rewrite){
echo"\r\n# Rewrite\r\n";
echo"[URL Rewrite]\r\n";
while(!feof($Rewrite))
{
echo trim(fgets($Rewrite))."\r\n"; 
}
{
fclose($Rewrite);
}
}else {
  echo "\r\n# Rewrite Module下载失败!\r\n";
}
exit();
//--------------END------------//
