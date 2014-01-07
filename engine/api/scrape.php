<?php
/***********************************
*  scrape.php
*  
*  company: Site Technologies Inc.
*  project: Veloxsites Scraper V1.0
*  author: Priya Malani
*  date: March 27th, 2013
*  path: /root/
*  desc: This file handles the scraper request from the API
*   
*  ---------------------------
*  MODS (not for bug fixes - more for feature additions):
*  author:
*  desc:
*  date:
* 
**************/
require dirname(dirname(__FILE__))."/lib/configuration.php";
require dirname(dirname(__FILE__))."/lib/session_manager.php";
require dirname(dirname(__FILE__))."/lib/db_functions.php";
require dirname(dirname(__FILE__))."/classes/site_crawler.php";

$url    = getParameter("url");
$site_id= getParameter("id");

if ($url == '') {
    $url = getSiteURL($site_id);
}

$crawler = new Crawler( $site_id );
$crawler->setURL( $url );
$crawler->setFollowMode(3);
$crawler->enableAggressiveLinkSearch( FALSE );
$crawler->setPageLimit( 10 );
$crawler->addContentTypeReceiveRule("#text/html#");
$crawler->addURLFilterRule("#(css|js|pdf|jpg|jpeg|gif|png|bmp)$#i");
$crawler->go();

removeContentElements($site_id, $crawler->getSiteCommonElements());

setScrapingFinishedIndicator( $site_id );

echo "SUCCESS";

exit;
?>