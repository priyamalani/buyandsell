<?php
/***********************************
*  logout.php
*  
*  company: Site Technologies Inc.
*  project: Veloxsites Scraper (VSS)
*  author: Priya Malani
*  date: February 26th, 2013
*  path: /root/engine/actions/
*  desc: This is the logout action page for administrative logout function.
*   
*  ---------------------------
*  MODS (not for bug fixes - more for feature additions):
*  author: 
*  desc: 
*  date: 
*
**************/
include_once dirname(dirname(__FILE__))."/lib/configuration.php";
include_once dirname(dirname(__FILE__))."/lib/session_manager.php";

destroySession();

header('Location: '.getAbsoluteURL("index.php"));
exit;
?>