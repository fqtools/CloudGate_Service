<?php
//------------Start-------------//
header("cache-control:no-cache,must-revalidate");//No-Cache
header("Content-Type:text/html;charset=UTF-8");//UTF-8
//-------------GET--------------//
$Flag1 = $_GET[ 'Flag1'];//备注
$Server1 = $_GET[ 'Server1'];//服务器
$Port1 = $_GET[ 'Port1'];//端口
$Password1 = $_GET[ 'Password1'];//密码
$Method1 = $_GET[ 'Method1'];//方式
$Flag2 = $_GET[ 'Flag2'];//备注
$Server2 = $_GET[ 'Server2'];//服务器
$Port2 = $_GET[ 'Port2'];//端口
$Password2 = $_GET[ 'Password2'];//密码
$Method2 = $_GET[ 'Method2'];//方式
$Flag3 = $_GET[ 'Flag3'];//备注
$Server3 = $_GET[ 'Server3'];//服务器
$Port3 = $_GET[ 'Port3'];//端口
$Password3 = $_GET[ 'Password3'];//密码
$Method3 = $_GET[ 'Method3'];//方式
//-------------通用-------------//
$NAME = "UPlus";            //名称
$DNS = ",force-remote-dns"; //其他
$Module = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/Surge.Module";//Module
//-------------文件-------------//
$DefaultFile = "File/Default.txt";
$Default = fopen($DefaultFile,"r");
$ProxyFile = "File/Proxy.txt";
$Proxy = fopen($ProxyFile,"r");
$GFWListFile = "File/GFWList.txt";
$GFWList = fopen($GFWListFile,"r");
$DIRECTFile = "File/DIRECT.txt";
$DIRECT = fopen($DIRECTFile,"r");
$REJECTFile = "File/REJECT.txt";
$REJECT = fopen($REJECTFile,"r");
$KEYWORDFile = "File/KEYWORD.txt";
$KEYWORD = fopen($KEYWORDFile,"r");
$IPCIDRFile = "File/IPCIDR.txt";
$IPCIDR = fopen($IPCIDRFile,"r");
$HOSTSFile = "File/HOSTS.txt";
$HOSTS = fopen($HOSTSFile,"r");
$PathFile = "File/Path.txt";
$Path = fopen($PathFile,"r");
//-----------A.BIG.T------------//
if($_GET["Version"]==1.0){
$File = "A.BIG.T.conf";
header("cache-control:no-cache,must-revalidate");
header('Content-type: application/octet-stream; charset=utf8');
header("Accept-Ranges: bytes");
header('Content-Disposition: attachment; filename='.$File);
echo "[General]\r\n";
echo "skip-proxy = 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, localhost, *.local\r\n";
echo "bypass-tun = 0.0.0.0/8, 1.0.0.0/9, 1.160.0.0/11, 1.192.0.0/11, 10.0.0.0/8, 14.0.0.0/11, 14.96.0.0/11, 14.128.0.0/11, 14.192.0.0/11, 27.0.0.0/10, 27.96.0.0/11, 27.128.0.0/9, 36.0.0.0/10, 36.96.0.0/11, 36.128.0.0/9, 39.0.0.0/11, 39.64.0.0/10, 39.128.0.0/10, 42.0.0.0/8, 43.224.0.0/11, 45.64.0.0/10, 47.64.0.0/10, 49.0.0.0/9, 49.128.0.0/11, 49.192.0.0/10, 54.192.0.0/11, 58.0.0.0/9, 58.128.0.0/11, 58.192.0.0/10, 59.32.0.0/11, 59.64.0.0/10, 59.128.0.0/9, 60.0.0.0/10, 60.160.0.0/11, 60.192.0.0/10, 61.0.0.0/10, 61.64.0.0/11, 61.128.0.0/10, 61.224.0.0/11, 100.64.0.0/10, 101.0.0.0/9, 101.128.0.0/11, 101.192.0.0/10, 103.0.0.0/10, 103.192.0.0/10, 106.0.0.0/9, 106.224.0.0/11, 110.0.0.0/7, 112.0.0.0/9, 112.128.0.0/11, 112.192.0.0/10, 113.0.0.0/9, 113.128.0.0/11, 113.192.0.0/10, 114.0.0.0/9, 114.128.0.0/11, 114.192.0.0/10, 115.0.0.0/8, 116.0.0.0/8, 117.0.0.0/9, 117.128.0.0/10, 118.0.0.0/11, 118.64.0.0/10, 118.128.0.0/9, 119.0.0.0/9, 119.128.0.0/10, 119.224.0.0/11, 120.0.0.0/10, 120.64.0.0/11, 120.128.0.0/11, 120.192.0.0/10, 121.0.0.0/9, 121.192.0.0/10, 122.0.0.0/7, 124.0.0.0/8, 125.0.0.0/9, 125.160.0.0/11, 125.192.0.0/10, 127.0.0.0/8, 139.0.0.0/11, 139.128.0.0/9, 140.64.0.0/11, 140.128.0.0/11, 140.192.0.0/10, 144.0.0.0/10, 144.96.0.0/11, 144.224.0.0/11, 150.0.0.0/11, 150.96.0.0/11, 150.128.0.0/11, 150.192.0.0/10, 152.96.0.0/11, 153.0.0.0/10, 153.96.0.0/11, 157.0.0.0/10, 157.96.0.0/11, 157.128.0.0/11, 157.224.0.0/11, 159.224.0.0/11, 161.192.0.0/11, 162.96.0.0/11, 163.0.0.0/10, 163.96.0.0/11, 163.128.0.0/10, 163.192.0.0/11, 166.96.0.0/11, 167.128.0.0/10, 167.192.0.0/11, 168.160.0.0/11, 169.254.0.0/16, 171.0.0.0/9, 171.192.0.0/11, 172.16.0.0/12, 175.0.0.0/9, 175.128.0.0/10, 180.64.0.0/10, 180.128.0.0/9, 182.0.0.0/8, 183.0.0.0/10, 183.64.0.0/11, 183.128.0.0/9, 192.0.0.0/24, 192.0.2.0/24, 192.88.99.0/24, 192.96.0.0/11, 192.160.0.0/11, 198.18.0.0/15, 198.51.100.0/24, 202.0.0.0/9, 202.128.0.0/10, 202.192.0.0/11, 203.0.0.0/9, 203.128.0.0/10, 203.192.0.0/11, 210.0.0.0/10, 210.64.0.0/11, 210.160.0.0/11, 210.192.0.0/11, 211.64.0.0/10, 211.128.0.0/10, 218.0.0.0/9, 218.160.0.0/11, 218.192.0.0/10, 219.64.0.0/11, 219.128.0.0/11, 219.192.0.0/10, 220.96.0.0/11, 220.128.0.0/9, 221.0.0.0/11, 221.96.0.0/11, 221.128.0.0/9, 222.0.0.0/8, 223.0.0.0/11, 223.64.0.0/10, 223.128.0.0/9\r\n";
echo "dns-server = 8.8.8.8, 8.8.4.4\r\n";
echo "loglevel = notify\r\n";
echo "#  \r\n";
echo "# A.BIG.T Config File [$NAME]\r\n";
echo "# Last Modified: " . date("Y/m/d") . "\r\n";
echo "# \r\n";
echo "[Proxy]\r\n";
echo "$Flag1 = custom,$Server1,$Port1,$Method1,$Password1\r\n";
echo "$Flag2 = custom,$Server2,$Port2,$Method2,$Password2\r\n";
echo "$Flag3 = custom,$Server3,$Port3,$Method3,$Password3\r\n";
echo "[Rule]";
echo"\r\n# Default\r\n";
while(!feof($Default))
{
echo fgets($Default)."";
}
{
fclose($Default);
}
echo"\r\n# Proxy\r\n";
while(!feof($Proxy))
{
echo fgets($Proxy)."";
}
{
fclose($Proxy);
}
echo"\r\n# GFWList\r\n";
while(!feof($GFWList))
{
echo fgets($GFWList)."";
}
{
fclose($GFWList);
}
echo"\r\n# DIRECT\r\n";
while(!feof($DIRECT))
{
echo fgets($DIRECT)."";
}
{
fclose($DIRECT);
}
echo"\r\n# REJECT\r\n";
while(!feof($REJECT))
{
echo fgets($REJECT)."";
}
{
fclose($REJECT);
}
echo"\r\n# KEYWORD\r\n";
while(!feof($KEYWORD))
{
echo "DOMAIN-KEYWORD,";
echo fgets($KEYWORD)."";
}
{
fclose($KEYWORD);
}
echo"\r\n# IPCIDR\r\n";
while(!feof($IPCIDR))
{
echo "IP-CIDR,";
echo fgets($IPCIDR)."";
}
{
fclose($IPCIDR);
}
echo"\r\n# Other\r\n";
echo"GEOIP,CN,DIRECT\r\n";
echo"FINAL,Proxy";
exit();
}
//-----------Potatso------------//
if($_GET["Version"]==2.0){
$File = "Potatso.Conf";
header("cache-control:no-cache,must-revalidate");
header('Content-type: application/octet-stream; charset=utf8');
header("Accept-Ranges: bytes");
header('Content-Disposition: attachment; filename='.$File);
echo"ruleSets:\r\n";
echo"# \r\n";
echo"# Potatso Config File [$NAME]\r\n";
echo"# Last Modified: " . date("Y/m/d") . "\r\n";
echo"#\r\n";
echo"- name: $NAME\r\n";
echo"  rules: ";
echo"\r\n# Default\r\n";
while(!feof($Default))
{
echo "  - ";
echo fgets($Default)."";
}
{
fclose($Default);
}
echo"\r\n# Proxy\r\n";
while(!feof($Proxy))
{
echo "  - ";
echo fgets($Proxy)."";
}
{
fclose($Proxy);
}
echo"\r\n# GFWList\r\n";
while(!feof($GFWList))
{
echo "  - ";
echo fgets($GFWList)."";
}
{
fclose($GFWList);
}
echo"\r\n# DIRECT\r\n";
while(!feof($DIRECT))
{
echo "  - ";
echo fgets($DIRECT)."";
}
{
fclose($DIRECT);
}
echo"\r\n# REJECT\r\n";
while(!feof($REJECT))
{
echo "  - ";
echo fgets($REJECT)."";
}
{
fclose($REJECT);
}
echo"\r\n# URL-MATCH\r\n";
while(!feof($Path))
{
echo "  - URL-MATCH,";
echo fgets($Path)."";
}
{
fclose($Path);
}
echo"\r\n# DOMAIN-MATCH\r\n";
while(!feof($KEYWORD))
{
echo "  - DOMAIN-MATCH,";
echo fgets($KEYWORD)."";
}
{
fclose($KEYWORD);
}
echo"\r\n# IP-CIDR\r\n";
while(!feof($IPCIDR))
{
echo "  - IP-CIDR,";
echo fgets($IPCIDR)."";
}
{
fclose($IPCIDR);
}
echo"\r\n#Other\r\n";
echo"  - GEOIP,CN,DIRECT";
exit();
}
//---------Shadowrocket---------//
if($_GET["Version"]==3.0){
$File = "Shadowrocket.Conf";
header("cache-control:no-cache,must-revalidate");
header('Content-type: application/octet-stream; charset=utf8');
header("Accept-Ranges: bytes");
header('Content-Disposition: attachment; filename='.$File);
echo "[General]\r\n";
echo "# warning, notify, info, verbose\r\n";
echo "loglevel = notify\r\n";
echo "bypass-system = true\r\n";
echo "skip-proxy = 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, localhost, *.local\r\n";
echo "bypass-tun = 0.0.0.0/8, 1.0.0.0/9, 1.160.0.0/11, 1.192.0.0/11, 10.0.0.0/8, 14.0.0.0/11, 14.96.0.0/11, 14.128.0.0/11, 14.192.0.0/11, 27.0.0.0/10, 27.96.0.0/11, 27.128.0.0/9, 36.0.0.0/10, 36.96.0.0/11, 36.128.0.0/9, 39.0.0.0/11, 39.64.0.0/10, 39.128.0.0/10, 42.0.0.0/8, 43.224.0.0/11, 45.64.0.0/10, 47.64.0.0/10, 49.0.0.0/9, 49.128.0.0/11, 49.192.0.0/10, 54.192.0.0/11, 58.0.0.0/9, 58.128.0.0/11, 58.192.0.0/10, 59.32.0.0/11, 59.64.0.0/10, 59.128.0.0/9, 60.0.0.0/10, 60.160.0.0/11, 60.192.0.0/10, 61.0.0.0/10, 61.64.0.0/11, 61.128.0.0/10, 61.224.0.0/11, 100.64.0.0/10, 101.0.0.0/9, 101.128.0.0/11, 101.192.0.0/10, 103.0.0.0/10, 103.192.0.0/10, 106.0.0.0/9, 106.224.0.0/11, 110.0.0.0/7, 112.0.0.0/9, 112.128.0.0/11, 112.192.0.0/10, 113.0.0.0/9, 113.128.0.0/11, 113.192.0.0/10, 114.0.0.0/9, 114.128.0.0/11, 114.192.0.0/10, 115.0.0.0/8, 116.0.0.0/8, 117.0.0.0/9, 117.128.0.0/10, 118.0.0.0/11, 118.64.0.0/10, 118.128.0.0/9, 119.0.0.0/9, 119.128.0.0/10, 119.224.0.0/11, 120.0.0.0/10, 120.64.0.0/11, 120.128.0.0/11, 120.192.0.0/10, 121.0.0.0/9, 121.192.0.0/10, 122.0.0.0/7, 124.0.0.0/8, 125.0.0.0/9, 125.160.0.0/11, 125.192.0.0/10, 127.0.0.0/8, 139.0.0.0/11, 139.128.0.0/9, 140.64.0.0/11, 140.128.0.0/11, 140.192.0.0/10, 144.0.0.0/10, 144.96.0.0/11, 144.224.0.0/11, 150.0.0.0/11, 150.96.0.0/11, 150.128.0.0/11, 150.192.0.0/10, 152.96.0.0/11, 153.0.0.0/10, 153.96.0.0/11, 157.0.0.0/10, 157.96.0.0/11, 157.128.0.0/11, 157.224.0.0/11, 159.224.0.0/11, 161.192.0.0/11, 162.96.0.0/11, 163.0.0.0/10, 163.96.0.0/11, 163.128.0.0/10, 163.192.0.0/11, 166.96.0.0/11, 167.128.0.0/10, 167.192.0.0/11, 168.160.0.0/11, 169.254.0.0/16, 171.0.0.0/9, 171.192.0.0/11, 172.16.0.0/12, 175.0.0.0/9, 175.128.0.0/10, 180.64.0.0/10, 180.128.0.0/9, 182.0.0.0/8, 183.0.0.0/10, 183.64.0.0/11, 183.128.0.0/9, 192.0.0.0/24, 192.0.2.0/24, 192.88.99.0/24, 192.96.0.0/11, 192.160.0.0/11, 198.18.0.0/15, 198.51.100.0/24, 202.0.0.0/9, 202.128.0.0/10, 202.192.0.0/11, 203.0.0.0/9, 203.128.0.0/10, 203.192.0.0/11, 210.0.0.0/10, 210.64.0.0/11, 210.160.0.0/11, 210.192.0.0/11, 211.64.0.0/10, 211.128.0.0/10, 218.0.0.0/9, 218.160.0.0/11, 218.192.0.0/10, 219.64.0.0/11, 219.128.0.0/11, 219.192.0.0/10, 220.96.0.0/11, 220.128.0.0/9, 221.0.0.0/11, 221.96.0.0/11, 221.128.0.0/9, 222.0.0.0/8, 223.0.0.0/11, 223.64.0.0/10, 223.128.0.0/9\r\n";
echo "dns-server = 8.8.8.8, 8.8.4.4\r\n";
echo "#  \r\n";
echo "# Shadowrocket Config File [$NAME]\r\n";
echo "# Last Modified: " . date("Y/m/d") . "\r\n";
echo "#  \r\n";
echo "[Rule]";
echo"\r\n# Default\r\n";
while(!feof($Default))
{
echo fgets($Default)."";
}
{
fclose($Default);
}
echo"\r\n# Proxy\r\n";
while(!feof($Proxy))
{
echo fgets($Proxy)."";
}
{
fclose($Proxy);
}
echo"\r\n# GFWList\r\n";
while(!feof($GFWList))
{
echo fgets($GFWList)."";
}
{
fclose($GFWList);
}
echo"\r\n# DIRECT\r\n";
while(!feof($DIRECT))
{
echo fgets($DIRECT)."";
}
{
fclose($DIRECT);
}
echo"\r\n# REJECT\r\n";
while(!feof($REJECT))
{
echo fgets($REJECT)."";
}
{
fclose($REJECT);
}
echo"\r\n# KEYWORD\r\n";
while(!feof($KEYWORD))
{
echo "DOMAIN-KEYWORD,";
echo fgets($KEYWORD)."";
}
{
fclose($KEYWORD);
}
echo"\r\n# IP-CIDR\r\n";
while(!feof($IPCIDR))
{
echo "IP-CIDR,";
echo fgets($IPCIDR)."";
}
{
fclose($IPCIDR);
}
echo"\r\n# Other\r\n";
echo"GEOIP,CN,DIRECT\r\n";
echo"FINAL,Proxy";
exit();
}
//------------Surge-------------//
if($_GET["Version"]==4.0){
$File = "Surge.Conf";
header("cache-control:no-cache,must-revalidate");
header('Content-type: application/octet-stream; charset=utf8');
header("Accept-Ranges: bytes");
header('Content-Disposition: attachment; filename='.$File);
echo "[General]\r\n";
echo "skip-proxy = 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, localhost, *.local\r\n";
echo "bypass-tun = 0.0.0.0/8, 1.0.0.0/9, 1.160.0.0/11, 1.192.0.0/11, 10.0.0.0/8, 14.0.0.0/11, 14.96.0.0/11, 14.128.0.0/11, 14.192.0.0/11, 27.0.0.0/10, 27.96.0.0/11, 27.128.0.0/9, 36.0.0.0/10, 36.96.0.0/11, 36.128.0.0/9, 39.0.0.0/11, 39.64.0.0/10, 39.128.0.0/10, 42.0.0.0/8, 43.224.0.0/11, 45.64.0.0/10, 47.64.0.0/10, 49.0.0.0/9, 49.128.0.0/11, 49.192.0.0/10, 54.192.0.0/11, 58.0.0.0/9, 58.128.0.0/11, 58.192.0.0/10, 59.32.0.0/11, 59.64.0.0/10, 59.128.0.0/9, 60.0.0.0/10, 60.160.0.0/11, 60.192.0.0/10, 61.0.0.0/10, 61.64.0.0/11, 61.128.0.0/10, 61.224.0.0/11, 100.64.0.0/10, 101.0.0.0/9, 101.128.0.0/11, 101.192.0.0/10, 103.0.0.0/10, 103.192.0.0/10, 106.0.0.0/9, 106.224.0.0/11, 110.0.0.0/7, 112.0.0.0/9, 112.128.0.0/11, 112.192.0.0/10, 113.0.0.0/9, 113.128.0.0/11, 113.192.0.0/10, 114.0.0.0/9, 114.128.0.0/11, 114.192.0.0/10, 115.0.0.0/8, 116.0.0.0/8, 117.0.0.0/9, 117.128.0.0/10, 118.0.0.0/11, 118.64.0.0/10, 118.128.0.0/9, 119.0.0.0/9, 119.128.0.0/10, 119.224.0.0/11, 120.0.0.0/10, 120.64.0.0/11, 120.128.0.0/11, 120.192.0.0/10, 121.0.0.0/9, 121.192.0.0/10, 122.0.0.0/7, 124.0.0.0/8, 125.0.0.0/9, 125.160.0.0/11, 125.192.0.0/10, 127.0.0.0/8, 139.0.0.0/11, 139.128.0.0/9, 140.64.0.0/11, 140.128.0.0/11, 140.192.0.0/10, 144.0.0.0/10, 144.96.0.0/11, 144.224.0.0/11, 150.0.0.0/11, 150.96.0.0/11, 150.128.0.0/11, 150.192.0.0/10, 152.96.0.0/11, 153.0.0.0/10, 153.96.0.0/11, 157.0.0.0/10, 157.96.0.0/11, 157.128.0.0/11, 157.224.0.0/11, 159.224.0.0/11, 161.192.0.0/11, 162.96.0.0/11, 163.0.0.0/10, 163.96.0.0/11, 163.128.0.0/10, 163.192.0.0/11, 166.96.0.0/11, 167.128.0.0/10, 167.192.0.0/11, 168.160.0.0/11, 169.254.0.0/16, 171.0.0.0/9, 171.192.0.0/11, 172.16.0.0/12, 175.0.0.0/9, 175.128.0.0/10, 180.64.0.0/10, 180.128.0.0/9, 182.0.0.0/8, 183.0.0.0/10, 183.64.0.0/11, 183.128.0.0/9, 192.0.0.0/24, 192.0.2.0/24, 192.88.99.0/24, 192.96.0.0/11, 192.160.0.0/11, 198.18.0.0/15, 198.51.100.0/24, 202.0.0.0/9, 202.128.0.0/10, 202.192.0.0/11, 203.0.0.0/9, 203.128.0.0/10, 203.192.0.0/11, 210.0.0.0/10, 210.64.0.0/11, 210.160.0.0/11, 210.192.0.0/11, 211.64.0.0/10, 211.128.0.0/10, 218.0.0.0/9, 218.160.0.0/11, 218.192.0.0/10, 219.64.0.0/11, 219.128.0.0/11, 219.192.0.0/10, 220.96.0.0/11, 220.128.0.0/9, 221.0.0.0/11, 221.96.0.0/11, 221.128.0.0/9, 222.0.0.0/8, 223.0.0.0/11, 223.64.0.0/10, 223.128.0.0/9\r\n";
echo "dns-server = 8.8.8.8, 8.8.4.4\r\n";
echo "loglevel = notify\r\n";
echo "#  \r\n";
echo "# Surge Config File [$NAME]\r\n";
echo "# Last Modified: " . date("Y/m/d") . "\r\n";
echo "# \r\n";
echo "[Proxy]\r\n";
echo "$Flag1 = custom,$Server1,$Port1,$Method1,$Password1,$Module\r\n";
echo "$Flag2 = custom,$Server2,$Port2,$Method2,$Password2,$Module\r\n";
echo "$Flag3 = custom,$Server3,$Port3,$Method3,$Password3,$Module\r\n";
echo "[Proxy Group]\r\n";
echo "Proxy = select, $Flag1, $Flag2, $Flag3\r\n";
echo "AutoGroup = url-test, $Flag1, $Flag2, $Flag3, url = http://www.gstatic.com/generate_204, interval = 600, tolerance = 200, timeout = 5\r\n";
echo "[Host]";
echo"\r\n# HOSTS\r\n";
while(!feof($HOSTS))
{
echo fgets($HOSTS)."";
}
{
fclose($HOSTS);
}
echo "\r\n[Rule]";
echo"\r\n# Default\r\n";
while(!feof($Default))
{
echo fgets($Default)."";
}
{
fclose($Default);
}
echo"\r\n# PROXY\r\n";
while(!feof($Proxy))
{
echo trim(fgets($Proxy)).$DNS."\r\n"; 
}
{
fclose($Proxy);
}
echo"# GFWList\r\n";
while(!feof($GFWList))
{
echo trim(fgets($GFWList)).$DNS."\r\n"; 
}
{
fclose($GFWList);
}
echo"# DIRECT\r\n";
while(!feof($DIRECT))
{
echo fgets($DIRECT)."";
}
{
fclose($DIRECT);
}
echo"\r\n# REJECT\r\n";
while(!feof($REJECT))
{
echo fgets($REJECT)."";
}
{
fclose($REJECT);
}
echo"\r\n# KEYWORD\r\n";
while(!feof($KEYWORD))
{
echo "DOMAIN-KEYWORD,";
echo fgets($KEYWORD)."";
}
{
fclose($KEYWORD);
}
echo"\r\n# IP-CIDR\r\n";
while(!feof($IPCIDR))
{
echo "IP-CIDR,";
echo fgets($IPCIDR)."";
}
{
fclose($IPCIDR);
}
echo"\r\n# Other\r\n";
echo"GEOIP,CN,DIRECT\r\n";
echo"FINAL,Proxy";
exit();
}
//--------------END------------//