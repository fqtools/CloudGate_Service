<?php
//------------Start-------------//
header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");
header("Accept-Ranges: bytes");
header('Content-Disposition: attachment; filename='.'Potatso.Conf');
//-------------接收-------------//
//if( isset($_GET['AutoGroup']) ){$AutoGroup = $_GET['AutoGroup'];}else {$Rule = "false";}
//if( $AutoGroup=="true" ){$AutoGroup="true";}elseif($AutoGroup=="false"){$AutoGroup="false";}else {$AutoGroup="false";}
if( isset($_GET['Rule']) ){$Rule = $_GET['Rule'];}else {$Rule = "false";}
if( $Rule=="true" ){$Rule="true";}elseif ($Rule=="false"){$Rule="false";}else {$Apple="false";}
if( isset($_GET['Apple']) ){$Apple = $_GET['Apple'];}else {$Apple = "false";}
if( $Apple=="true" ){$GETApple="Proxy";}elseif ($Apple=="false"){$GETApple="DIRECT";}else {$GETApple="DIRECT";}
//if( isset($_GET['IPV6']) ){$IPV6 = $_GET['IPV6'];}else {$IPV6 = "false";}
//if( $IPV6=="true" ){$IPV6="true";}elseif($IPV6=="false"){$IPV6="false";}else {$IPV6="false";}
if( isset($_GET['Group']) ){$Group = $_GET['Group'];}else {$Group = "1";}
//if( isset($_GET['DNS1']) ){$DNS1 = $_GET['DNS1'];}else {$DNS1 = "8.8.8.8";}
//if( isset($_GET['DNS2']) ){$DNS2 = $_GET['DNS2'];}else {$DNS2 = "8.8.4.4";}
if( isset($_GET['Config1']) ){$Config1 = $_GET['Config1'];}else {$Config1 = "127.0.0.1,80,aes-256-cfb,Password";}
if( isset($_GET['Config2']) ){$Config2 = $_GET['Config2'];}else {$Config2 = "127.0.0.1,80,aes-256-cfb,Password";}
if( isset($_GET['Config3']) ){$Config3 = $_GET['Config3'];}else {$Config3 = "127.0.0.1,80,aes-256-cfb,Password";}
if( isset($_GET['Config4']) ){$Config4 = $_GET['Config4'];}else {$Config4 = "127.0.0.1,80,aes-256-cfb,Password";}
if( isset($_GET['Config5']) ){$Config5 = $_GET['Config5'];}else {$Config5 = "127.0.0.1,80,aes-256-cfb,Password";}
if( isset($_GET['Flag1']) ){$Flag1 = $_GET['Flag1'];  }else {$Flag1 = "NONE1";}
if( isset($_GET['Flag2']) ){$Flag2 = $_GET['Flag2'];  }else {$Flag2 = "NONE2";}
if( isset($_GET['Flag3']) ){$Flag3 = $_GET['Flag3'];  }else {$Flag3 = "NONE3";}
if( isset($_GET['Flag4']) ){$Flag4 = $_GET['Flag4'];  }else {$Flag4 = "NONE4";}
if( isset($_GET['Flag5']) ){$Flag5 = $_GET['Flag5'];  }else {$Flag5 = "NONE5";}
//-------------通用-------------//
$NAME = "CloudGate";        //名称
//-------------文件-------------//
$DefaultFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Default.txt";
$DefaultFile  = $DefaultFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$Default = fopen($DefaultFile,"r");
//Proxy Rule | if Rule=null>Advanced | if Rule=false>Advanced | if Rule=true>Basic |
if ($Rule=="true"){$ProxyFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Basic.txt";}
elseif ($Rule=="false"){$ProxyFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Advanced.txt";} 
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
if ($Group<"2"){
echo"- name: $Flag1\r\n";
echo"  uri: $Config1\r\n";}
elseif ($Group<"3"){
echo"- name: $Flag1\r\n";
echo"  uri: $Config1\r\n";
echo"- name: $Flag2\r\n";
echo"  uri: $Config2\r\n";}
elseif ($Group<"4"){
echo"- name: $Flag1\r\n";
echo"  uri: $Config1\r\n";
echo"- name: $Flag2\r\n";
echo"  uri: $Config2\r\n";
echo"- name: $Flag3\r\n";
echo"  uri: $Config3\r\n";}
elseif ($Group<"5"){
echo"- name: $Flag1\r\n";
echo"  uri: $Config1\r\n";
echo"- name: $Flag2\r\n";
echo"  uri: $Config2\r\n";
echo"- name: $Flag3\r\n";
echo"  uri: $Config3\r\n";
echo"- name: $Flag4\r\n";
echo"  uri: $Config4\r\n";}
elseif ($Group<"6"){
echo"- name: $Flag1\r\n";
echo"  uri: $Config1\r\n";
echo"- name: $Flag2\r\n";
echo"  uri: $Config2\r\n";
echo"- name: $Flag3\r\n";
echo"  uri: $Config3\r\n";
echo"- name: $Flag4\r\n";
echo"  uri: $Config4\r\n";
echo"- name: $Flag5\r\n";
echo"  uri: $Config5\r\n";}
elseif ($Group>"6"){
echo"- name: $Flag1\r\n";
echo"  uri: $Config1\r\n";}
else {
echo"- name: $Flag1\r\n";
echo"  uri: $Config1\r\n";}
echo"#\r\n";
echo"ruleSets:\r\n";
echo"# \r\n";
echo"# Potatso Config File [$NAME]\r\n";
echo "# Last Modified: " . date("Y-m-d H:i:s") . "\r\n";
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
echo trim(fgets($Default)).",$GETApple"."\r\n"; 
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