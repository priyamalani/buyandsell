<?php
/***********************************
*  site_crawler.php
*  
*  company: Site Technologies Inc.
*  project: Veloxsites Scraper V1.0
*  author: Priya Malani
*  date: March 1st, 2013
*  path: /root/engine/classes/
*  desc: This file is used to crawl sites and used PHPCrawl at its core
*  
*  ---------------------------
*  MODS (not for bug fixes - more for feature additions):
*  author:
*  desc:
*  date:
*
**************/
require_once dirname(dirname(__FILE__))."/lib/configuration.php";
require_once dirname(dirname(__FILE__))."/lib/session_manager.php";
require_once dirname(dirname(__FILE__))."/lib/db_functions.php";

$page_id = getParameter("page_id");

if ( isGood( $page_id ) ){
    $page = getSitePage( $page_id );
    
    echo $page["page_content"];
}
else{
  echo '<html><body>No Page Found</body></html>';  
}

closeDBConnection();
exit;
?>
