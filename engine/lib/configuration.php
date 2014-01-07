<?php
/***********************************
*  configuration.php
*  
*  company: shopandsell
*  project: shopandsell
*  author: Priya Malani
*  date: Jan 6th, 2014
*  path: /root/engine/lib/
*  desc: This file is used to set the base global configuration parameters for the application. This file should be included in php pages that require use of these parameters, which will be in the vast majority of cases.
*   
*  ---------------------------
*  MODS (not for bug fixes - more for feature additions):
*  author:
*  desc:
*  date:
*
**************/

// Encoding settings
mb_internal_encoding('UTF-8');
mb_regex_encoding('UTF-8');

$environment = "L"; //******* LEGEND: L = local; D = development; S = staging; P = production
$webroot = "localhost";
$pwebroot = "localhost";
$docroot = "/Applications/MAMP/htdocs/";
$domain = "buyandsell/";
$path = "buyandsell/";
  

$config_params = array (
"root_url"          => "http://".$webroot."/",
"root_path"         => $docroot,

"home_url"          => "http://".$webroot."/".$domain,
"home_path"         => $docroot.$path,

"db_server_name"    => "127.0.0.1",
"db_server_port"    => "3306",
"db_user"           => "shopandsell",
"db_pwd"            => "shopandsell",
"app_db"            => "shopandsell",

"app_user"          => "priya",
"app_pwd"           => "pmsti5",
);

function getWebRoot(){
    global $webroot;
    return $webroot;
}

function getEnvironmentType(){
    global $environment;
    return $environment;	
}

function getEnvironmentGroup(){
    global $environment;
    if ( $environment == "P" )      return "PROD";
    else if ( $environment == "S" ) return "UAT";
    else if ( $environment == "D" ) return "DEV";
    else if ( $enviornment == "L" ) return "LOCAL";
    else                            return "";              
}

function isLocalDev(){
    if ( getEnvironmentType() == "L" )
            return TRUE;
    else 
            return FALSE;
}

function getDBServerName(){
   global $config_params;
   return $config_params['db_server_name'];
}

function getDBServerPort(){
   global $config_params;
   return $config_params['db_server_port'];
}

function getDBUser(){
   global $config_params;
   return $config_params['db_user'];
}

function getDBPwd(){
   global $config_params;
   return $config_params['db_pwd'];
}

function getAppDB(){
   global $config_params;
   return $config_params['app_db'];
}

function getAppUser(){
   global $config_params;
   return $config_params['app_user'];
}

function getAppPwd(){
   global $config_params;
   return $config_params['app_pwd'];
}

function getQueueFile(){
    return getAbsolutePath( "queues/job.queue"); 
}

function getErrorFile(){
    return getAbsolutePath( "queues/error.queue"); 
}

function getAbsoluteRootURL( $relative_href = "" ){
    if ( stripos($relative_href, 'http://') !== FALSE || stripos($relative_href, 'https://') !== FALSE  ){
            return $relative_href;	
    }
    else{	
            global $config_params;
            return $config_params['root_url'].$relative_href;
    }
}

function getAbsoluteRootPath( $relative_path = "" ){
   global $config_params;
   return $config_params['root_path'].$relative_path;
}

function getAbsoluteURL( $relative_href = "" ){
    if ( stripos($relative_href, 'http://') !== FALSE || stripos($relative_href, 'https://') !== FALSE  ){
            return $relative_href;	
    }
    else{
            global $config_params;
            return $config_params['home_url'].$relative_href;
    }
}

function getAbsolutePath( $relative_path = "" ){
   global $config_params;
   return $config_params['home_path'].$relative_path;
}
?>
