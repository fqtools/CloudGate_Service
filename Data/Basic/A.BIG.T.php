<?php

/*
 * License: MIT
 *    Time: 2017-02-12 00:25:32
 *    Name: A.BIG.T.php
 *    Note: CloudGate A.BIG.T Basic Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'A.BIG.T.Conf');

# ClouGate控制器
require_once "../Controller/Controller.php";

# Cloud配置信息
echo "[General]\r\n";
echo CURL(true,$RuleList['General']).$CURLContent."\r\n";
echo "dns-server = 8.8.8.8, 8.8.4.4\r\n";
echo "#  \r\n";
echo "# A.BIG.T Config File [CloudGate]\r\n";
echo "# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo "# \r\n";
echo "[Proxy]\r\n";
echo '🇨🇳 = custom,172.0.0.1,80,aes-256-cfb,Password'."\r\n";
echo '🇳🇫 = custom,172.0.0.1,80,aes-256-cfb,Password'."\r\n";
echo '🇬🇧 = custom,172.0.0.1,80,aes-256-cfb,Password'."\r\n";
echo "[Proxy Group]\r\n";
echo "Proxy = select, 🇨🇳, 🇳🇫, 🇬🇧\r\n";

# CloudGate模块
echo "[Rule]\r\n";
echo Replace(CURL(true,$RuleList['Default']).$CURLContent,false,false,false,true,false).$ABIGT_Default;
echo Replace(CURL(true,$RuleList['Advanced']).$CURLContent,false,false,false,true,false).$ABIGT_Advanced;
echo Replace(CURL(true,$RuleList['DIRECT']).$CURLContent,false,false,false,true,false).$ABIGT_DIRECT;
echo Replace(CURL(true,$RuleList['REJECT']).$CURLContent,false,false,false,true,false).$ABIGT_REJECT;
echo Replace(CURL(true,$RuleList['USERAGENT']).$CURLContent,false,false,false,true,false).$ABIGT_USERAGENT;
echo Replace(CURL(true,$RuleList['KEYWORD']).$CURLContent,false,false,false,true,false).$ABIGT_KEYWORD;
echo Replace(CURL(true,$RuleList['IPCIDR']).$CURLContent,false,false,false,true,false).$ABIGT_IPCIDR;
echo Replace(CURL(true,$RuleList['Other']).$CURLContent,false,false,false,true,false).$ABIGT_Other;
echo "[Host]\r\n";
echo Replace(CURL(true,$RuleList['Host']).$CURLContent,false,false,false,true,false).$ABIGT_Host;
echo "[URL Rewrite]\r\n";
echo Replace(CURL(true,$RuleList['Rewrite']).$CURLContent,false,false,false,true,false).$ABIGT_Rewrite;

?>