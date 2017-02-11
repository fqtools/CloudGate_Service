<?php

/*
 * License: MIT
 *    Time: 2017-02-08 06:47:55
 *    Name: Potatso.php
 *    Note: CloudGate Potatso Cloud Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'Potatso.Conf');

# ClouGate控制器
require_once "../Controller/Controller.php";

# 处理URI参数
GET().parse_str($REQUEST_QUERY_URI);
Verify($DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6,$SERVER7,$SERVER8,$SERVER9,$SERVER0,$Group,$Rule,$IPV6,$Apple,$WIFIAccess,$AutoGroup,$Interval,$Tolerance,$TimeOut,$AGENT);
Exp_lode($Group,$DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6,$SERVER7,$SERVER8,$SERVER9,$SERVER0);

# Cloud配置信息
echo CURL(true,Cloud($Data,$Potatso_Config_Module,$Cache).$ConfigFile).$CURLContent."\r\n";

# CloudGate模块
echo Replace(CURL(true,$RuleList['Default']).$CURLContent,false,false,true,false,false).$Potatso_Default;
echo Replace(CURL(true,$RuleList['Advanced']).$CURLContent,false,false,true,false,false).$Potatso_Advanced;
echo Replace(CURL(true,$RuleList['DIRECT']).$CURLContent,false,false,true,false,false).$Potatso_DIRECT;
echo Replace(CURL(true,$RuleList['REJECT']).$CURLContent,false,false,true,false,false).$Potatso_REJECT;
echo Replace(CURL(true,$RuleList['KEYWORD']).$CURLContent,false,false,true,false,false).$Potatso_KEYWORD;
echo Replace(CURL(true,$RuleList['IPCIDR']).$CURLContent,false,false,true,false,false).$Potatso_IPCIDR;
echo Replace(CURL(true,$RuleList['Other']).$CURLContent,false,false,true,false,false).$Potatso_Other;

?>