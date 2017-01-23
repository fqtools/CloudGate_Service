<?php

/*
 * License: MIT
 *    Time: 2017-01-20 11:35:27
 *    Name: Request.php
 *    Note: CloudGate Request Controller
 *  Author: Eval,BurpSuite
 */

# REQUEST QUERY URI
function GET(){
    global $REQUEST_QUERY_URI;
    $QUERY_URI = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $REQUEST_QUERY_URI = substr($QUERY_URI,(strpos($QUERY_URI,'?')+1));
}

# File RegExp&Size Verify
function Cloud($CloudModule,$DefaultModule,$Cache){
    global $ConfigFile;
    !empty($CloudModule)?$Cloud_IS_NULL="{$CloudModule}{$Cache}":$Cloud_IS_NULL="{$DefaultModule}{$Cache}";
    preg_match('/^((http|https):\/\/)(.*)(.cfg)(.*)/',$Cloud_IS_NULL)?$Cloud_Preg_Match=$Cloud_IS_NULL:$Config_Preg_Match=$DefaultModule;
    $CloudSize = get_headers($Cloud_Preg_Match,true);
    $CloudSize['Content-Length']>'100'&&$CloudSize['Content-Length']<'524288'?$ConfigFile=$Cloud_Preg_Match:$ConfigFile=$DefaultModule;
}

# CURL Request
 function CURL($CURL, $File){
    if ($CURL === true){
        global $CURLContent;
            $CURL = curl_init();
            curl_setopt($CURL, CURLOPT_URL, $File);
            curl_setopt($CURL, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($CURL, CURLOPT_TIMEOUT, 30);
            $CURLContent = curl_exec($CURL);
            curl_close($CURL);
     }
}

?>