<?php

/*
 * License: MIT
 *    Time: 2017-01-20 11:08:14
 *    Name: Surge.php
 *    Note: CloudGate Surge Cloud Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'Surge.Conf');

# ClouGate控制器
require_once "../Controller/Controller.php";

# Cloud配置信息
echo CURL(true,Cloud($ConfigModule,$Surge_Config_Module,$Cache).$ConfigFile).$CURLContent."\r\n";

# CloudGate模块
echo "[Rule]\r\n";
echo "# Default\r\n".Replace(CURL(true,$RuleList['Default']).$CURLContent,true,false,false,false,false).$Surge_Default;
echo "# PROXY\r\n".Replace(CURL(true,$RuleList['Advanced']).$CURLContent,true,false,false,false,false).$Surge_Advanced;
echo "# DIRECT\r\n".Replace(CURL(true,$RuleList['DIRECT']).$CURLContent,true,false,false,false,false).$Surge_DIRECT;
echo "# REJECT\r\n".Replace(CURL(true,$RuleList['REJECT']).$CURLContent,true,false,false,false,false).$Surge_REJECT;
echo "# KEYWORD\r\n".Replace(CURL(true,$RuleList['KEYWORD']).$CURLContent,true,false,false,false,false).$Surge_KEYWORD;
echo "# IPCIDR\r\n".Replace(CURL(true,$RuleList['IPCIDR']).$CURLContent,true,false,false,false,false).$Surge_IPCIDR;
echo "# Other\r\n".Replace(CURL(true,$RuleList['Other']).$CURLContent,true,false,false,false,false).$Surge_Other;
echo "[URL Rewrite]\r\n";
echo "# Rewrite\r\n".Replace(CURL(true,$RuleList['Rewrite']).$CURLContent,true,false,false,false,false).$Surge_Rewrite;

?>