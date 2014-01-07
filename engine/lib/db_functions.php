<?php
/***********************************
*  db_functions.php
*  
*  company: Site Technologies Inc.
*  project: Veloxsites
*  author: Priya Malani
*  date: May 4th, 2011
*  path: /root/engine/lib/
*  desc: This is used to centralize all calls/actions to the database. This file should be included in any PHP files that require interaction with the application database.
*  
*  ---------------------------
*  MODS (not for bug fixes - more for feature additions):
*  author:
*  desc:
*  date:
*
**************/
require_once('db_accessor.php');
require_once('db_base_functions.php');

$vss_db_conn = openDBConn();


function closeDBConnection(){
   closeDBConn( $GLOBALS["vss_db_conn"] );
}

/*************************************
 * 
 *  USER FUNCTIONS
 * 
 *************************************/
function isAuthorized( $auth_key = null ){
    if ( isGood( $auth_key ) ){
        $query = "select * from systems where auth_code='".$auth_key."'";
        return getBoolean( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return FALSE;
}


/*************************************
 * 
 *  SCRAPER FUNCTIONS
 * 
 *************************************/
function siteExists( $url = null ){
    if( isGood( $url ) ){
        $query = "select site_id from sites where site_url like '%".$url."%'";
        return getBoolean( $GLOBALS["vss_db_conn"], $query );
    }
    else 
        return FALSE;
}

function siteIDExists( $site_id = null ){    
    if( isGood( $site_id ) ){
        $query = "select * from sites where site_id=".$site_id;
        return getBoolean( $GLOBALS["vss_db_conn"], $query );
    }
    else 
        return 0;
}

function getSiteID( $url = null ){
    if ( isGood( $url ) ){
        if ( stripos($url,"http") !== FALSE )                   $url = substr( $url, 7 );
        if ( strrpos( $url, "/")  == ( strlen( $url ) - 1 ) )   $url = substr( $url, 0, strlen( $url ) - 1 );
        
        $query = "select site_id from sites where site_url like '%".$url."%'";
        $site_id = getSingleValue( $GLOBALS["vss_db_conn"], $query, "site_id" );
        
        if ( !isGood( $site_id ) ){
            $host_parts = explode( ".", $url );
            $site_name = ( $host_parts[0] == "www" ) ? $host_parts[ 1 ] : $host_parts[ 0 ];
            return addSite( $url, $site_name );
        }
        else
            return $site_id;
    }
    else
        return "0";
}

function getSiteURL( $site_id = null ){
    if ( isGood( $site_id ) ){
        $query = "select site_url from sites where site_id=".$site_id;
        return getSingleValue( $GLOBALS["vss_db_conn"], $query, "site_url" );
    }
    else
        return null;
}

function getSiteStatus( $site_id = null ){
    if ( isGood( $site_id ) ){
        $query = "select UPPER(scraped) as scraped from sites where site_id=".$site_id;
        return getSingleValue( $GLOBALS["vss_db_conn"], $query, "scraped" );
    }
    else
        return "N";
}

function completeSiteScrape( $site_id = null ){
    if ( isGood( $site_id ) ){
        $query = "update sites set scraped='Y' where site_id=".$site_id;
        return setData( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return FALSE;
}

/*

ALTER TABLE sites ADD scraped_images CHAR(1) DEFAULT 'N';

ALTER TABLE sites ADD `featured_text` TEXT;
ALTER TABLE sites ADD `business_name` TEXT;

ALTER TABLE sites ADD `source_id` int(11) DEFAULT '0';

ALTER TABLE sites ADD `page_title` TEXT, ADD `og_title` TEXT, ADD `itemprop_name` TEXT;

ALTER TABLE site_pages ADD `page_type` enum("about", "blog", "contact", "gallery",
"home", "menu", "news", "portfolio", "products",
"reviews", "services", "team", "testimonials", "other") NOT NULL DEFAULT 'other';

ALTER TABLE site_images
ADD `url` TEXT,
ADD `scraped` CHAR(1) DEFAULT 'Y',
ADD `image_width` smallint unsigned DEFAULT '0',
ADD `image_height` smallint unsigned DEFAULT '0' 
;

alter table site_images add key scraped (scraped), add key scraped_w_h (scraped, image_width, image_height);

alter table site_images add key url (url(1000));


CREATE TABLE `site_comments` (
  `site_id` int(11) DEFAULT '0',
  
  `logo` smallint unsigned DEFAULT '0',
  `name` smallint unsigned DEFAULT '0',
  
  `colours` smallint unsigned DEFAULT '0',
  `mobile` smallint unsigned DEFAULT '0',
  
  `ftext` smallint unsigned DEFAULT '0',
  `fimage` smallint unsigned DEFAULT '0',
  
  `email` smallint unsigned DEFAULT '0',
  `phone` smallint unsigned DEFAULT '0',
  
  `comments` TEXT,
  
  `last_modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  
  PRIMARY KEY (`site_id`)
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `site_comments_history` (
  `record_id` int unsigned NOT NULL AUTO_INCREMENT,
  
  `site_id` int(11) DEFAULT '0',
  
  `logo` smallint unsigned DEFAULT '0',
  `name` smallint unsigned DEFAULT '0',
  
  `colours` smallint unsigned DEFAULT '0',
  `mobile` smallint unsigned DEFAULT '0',
  
  `ftext` smallint unsigned DEFAULT '0',
  `fimage` smallint unsigned DEFAULT '0',
  
  `email` smallint unsigned DEFAULT '0',
  `phone` smallint unsigned DEFAULT '0',
  
  `comments` TEXT,
  
  `last_modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  
  PRIMARY KEY (`record_id`),
  KEY site_id (site_id, last_modified_date)
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


ALTER TABLE `site_comments`
ADD `hbgcolour` smallint unsigned DEFAULT '0',
ADD `htcolour` smallint unsigned DEFAULT '0',

ADD `bbgcolour` smallint unsigned DEFAULT '0',
ADD `btcolour` smallint unsigned DEFAULT '0',

ADD `mbgcolour` smallint unsigned DEFAULT '0',
ADD `mtcolour` smallint unsigned DEFAULT '0',

ADD `not_smb` smallint unsigned DEFAULT '0';

ALTER TABLE `site_comments_history`
ADD `hbgcolour` smallint unsigned DEFAULT '0',
ADD `htcolour` smallint unsigned DEFAULT '0',

ADD `bbgcolour` smallint unsigned DEFAULT '0',
ADD `btcolour` smallint unsigned DEFAULT '0',

ADD `mbgcolour` smallint unsigned DEFAULT '0',
ADD `mtcolour` smallint unsigned DEFAULT '0',

ADD `not_smb` smallint unsigned DEFAULT '0';

ALTER TABLE `site_comments`
ADD `score` smallint unsigned DEFAULT '0';

ALTER TABLE `site_comments_history`
ADD `score` smallint unsigned DEFAULT '0';

ALTER TABLE `site_comments`
ADD `user` CHAR(50) DEFAULT '';

ALTER TABLE `site_comments_history`
ADD `user` CHAR(50) DEFAULT '';

ALTER TABLE `site_comments`
ADD `navigation` smallint unsigned DEFAULT '0',
ADD `bcontent` smallint unsigned DEFAULT '0';

ALTER TABLE `site_comments_history`
ADD `navigation` smallint unsigned DEFAULT '0',
ADD `bcontent` smallint unsigned DEFAULT '0';


*/

function addSiteComment( $site_id = null, $data = array() ) {
    if ( isGood( $site_id ) ){
        $queryData = " (site_id, user, logo, name, colours, mobile, ftext, fimage, email, phone, navigation, bcontent, hbgcolour, htcolour, bbgcolour, btcolour, mbgcolour, mtcolour, not_smb, score, comments)
        	values (".(int)$site_id.",
        	\"".(isset($data['user']) ? mysql_real_escape_string($data['user']) : '')."\",
        	
        	\"".(isset($data['logo']) ? (int)$data['logo'] : 0)."\",
        	\"".(isset($data['name']) ? (int)$data['name'] : 0)."\",
        	\"".(isset($data['colours']) ? (int)$data['colours'] : 0)."\",
        	\"".(isset($data['mobile']) ? (int)$data['mobile'] : 0)."\",
        	\"".(isset($data['ftext']) ? (int)$data['ftext'] : 0)."\",
        	\"".(isset($data['fimage']) ? (int)$data['fimage'] : 0)."\",
        	\"".(isset($data['email']) ? (int)$data['email'] : 0)."\",
        	\"".(isset($data['phone']) ? (int)$data['phone'] : 0)."\",
        	
        	\"".(isset($data['navigation']) ? (int)$data['navigation'] : 0)."\",
        	\"".(isset($data['bcontent']) ? (int)$data['bcontent'] : 0)."\",
        	
        	\"".(isset($data['hbgcolour']) ? (int)$data['hbgcolour'] : 0)."\",
        	\"".(isset($data['htcolour']) ? (int)$data['htcolour'] : 0)."\",
        	\"".(isset($data['bbgcolour']) ? (int)$data['bbgcolour'] : 0)."\",
        	\"".(isset($data['btcolour']) ? (int)$data['btcolour'] : 0)."\",
        	\"".(isset($data['mbgcolour']) ? (int)$data['mbgcolour'] : 0)."\",
        	\"".(isset($data['mtcolour']) ? (int)$data['mtcolour'] : 0)."\",
        	
        	\"".(isset($data['not_smb']) ? (int)$data['not_smb'] : 0)."\",
        	
        	\"".(isset($data['score']) ? (int)$data['score'] : 0)."\",
        	
        	\"".(isset($data['comments']) ? mysql_real_escape_string($data['comments']) : '')."\"
        	)";
        
        $query = 'REPLACE INTO site_comments ' . $queryData;
        $queryLog = 'INSERT INTO site_comments_history ' . $queryData;
        
        setData( $GLOBALS["vss_db_conn"], $queryLog );
        
        
        return setData( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return 0;
}

function deleteSiteData($site_id = null) {
    if ( isGood( $site_id ) ) {
        
        $query = "delete from site_colors where site_id=".$site_id;
        setData( $GLOBALS["vss_db_conn"], $query );
        
        $query = "delete from site_emails where site_id=".$site_id;
        setData( $GLOBALS["vss_db_conn"], $query );
        
        $query = "delete from site_images where site_id=".$site_id;
        setData( $GLOBALS["vss_db_conn"], $query );
        
        $query = "delete from site_pages where site_id=".$site_id;
        setData( $GLOBALS["vss_db_conn"], $query );
        
        $query = "delete from site_phone_numbers where site_id=".$site_id;
        setData( $GLOBALS["vss_db_conn"], $query );
        
        return TRUE;
    }
    else
        return FALSE;
}

function addSite( $url = null, $name = null ){
    if ( isGood( $url ) && !siteExists( $url ) ){
        $site_name = isGood( $name ) ? $name : "NAMELESS";
        $query = "insert into sites (site_name, site_url) values ('".$site_name."','".$url."')";
        return setDataGetID( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return 0;
}

function updateSite( $site_id = null, $name = null, $featuredText = null, $businessName = null, $pageTitle = null, $ogTitle = null, $itempropName = null ) {
    if ( isGood( $site_id ) && (isGood( $name ) || isGood( $featuredText ) || isGood( $businessName ))) {
        $query = 'UPDATE sites SET site_id=site_id '
            . ($name !== null ? ', site_name="' . mysql_real_escape_string($name) . '" ' : '')
            . ($featuredText !== null ? ', featured_text="' . mysql_real_escape_string($featuredText) . '" ' : '')
            . ($businessName !== null ? ', business_name="' . mysql_real_escape_string($businessName) . '" ' : '')
            . ($pageTitle !== null ? ', page_title="' . mysql_real_escape_string($pageTitle) . '" ' : '')
            . ($ogTitle !== null ? ', og_title="' . mysql_real_escape_string($ogTitle) . '" ' : '')
            . ($itempropName !== null ? ', itemprop_name="' . mysql_real_escape_string($itempropName) . '" ' : '')
            . ' WHERE site_id=' . $site_id;
        return setData( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return FALSE;
}

function deleteSite( $site_id = null ){
    if ( isGood( $site_id ) ){
        $query = "delete from site_pages where site_id=".$site_id;
        setData( $GLOBALS["vss_db_conn"], $query );
        
        $query = "delete from sites where site_id=".$site_id;
        return setData( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return FALSE;
}

function addSitePage( $site_id = null, $page_name = null, $page_file = null, $page_content = null, $page_content_filtered = null, $page_type = 'other') {
    if ( isGood( $site_id, $page_name, $page_file, $page_content, $page_content_filtered ) ){
        $query = "insert into site_pages (site_id, page_name, page_file, page_content, page_filtered, page_type) values (".$site_id.",\"".mysql_real_escape_string( $page_name )."\",\"".mysql_real_escape_string($page_file)."\",\"".mysql_real_escape_string( $page_content )."\",\"".mysql_real_escape_string( $page_content_filtered )."\", \"".mysql_real_escape_string( $page_type )."\")";
        return setDataGetID( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return 0;
}
/*

CREATE TABLE `site_images` (
  `image_id` int unsigned NOT NULL AUTO_INCREMENT,
  
  `site_id` int(11) DEFAULT '0',
  `page_id` int(11) DEFAULT '0',
  
  `image_type` enum('screen-full', 'screen-no-text', 'picture', 'logo-candidate') NOT NULL DEFAULT 'picture',
  
  `image_png` MEDIUMBLOB,
  
  `image_attr` TEXT,
  `image_offset` TEXT,
  
  PRIMARY KEY (`image_id`),
  KEY `site_id_page_id` (`site_id`,`page_id`),
  KEY `site_id` (`site_id`),
  KEY `page_id` (`page_id`)
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `site_images` CHANGE `image_type` `image_type` enum('screen-full', 'screen-no-text', 'picture', 'logo-candidate', 'logo', 'featured') NOT NULL DEFAULT 'picture';

ALTER TABLE `site_images` CHANGE `image_type` `image_type` enum('screen-full', 'screen-no-text', 'picture', 'logo-candidate', 'logo', 'featured', 'screen-mobile') NOT NULL DEFAULT 'picture';

*/

function getSite($site_id) {
    if ( isGood( $site_id ) ){
        $query = "select * from sites where site_id=".$site_id;
        return getSingleRow( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return null;
}

function getSites($offset = 0, $limit = 5, $filter = '', $order = '', $user = '') {
    
    $where = " WHERE sites.scraped = 'Y' AND h.user IS NULL AND sites.source_id = 1 ";
    
    $order = " ORDER BY sites.site_id DESC ";
    
    $limit = " LIMIT " . (int)$offset . "," . (int)$limit;
    
    $queryCnt = "SELECT COUNT(*) as cnt FROM sites LEFT JOIN site_comments_history h ON (h.site_id = sites.site_id AND h.user = '".$user."') " . $where;
    $query = "SELECT sites.* FROM sites LEFT JOIN site_comments_history h ON (h.site_id = sites.site_id AND h.user = '".$user."') " . $where . $order . $limit;
    
    return array('total' => (int)getSingleValue( $GLOBALS["vss_db_conn"], $queryCnt, "cnt" ), 'rows' => getArray( $GLOBALS["vss_db_conn"], $query ));
    
}

function addSiteScreenShot( $site_id = null, $page_id, $img_type, $img_data = null){
    if ( isGood( $site_id, $page_id, $img_data) ){
        $query = "insert into site_images (site_id, page_id, image_type, image_png) values (".(int)$site_id.",'".(int)$page_id."','".mysql_real_escape_string($img_type)."',\"".mysql_real_escape_string($img_data)."\")";
        return setDataGetID( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return 0;
}

function addSiteImage( $site_id = null, $page_id, $img_type, $img_data = null, $img_attr = null, $img_offset = null, $scraped = 'Y', $url = ''){
    if ( isGood( $site_id, $page_id, $img_data || $url) ){
        $query = "insert into site_images (site_id, page_id, image_type, image_png, image_attr, image_offset, scraped, url)
        	values (".(int)$site_id.",'".(int)$page_id."', \"".mysql_real_escape_string($img_type)."\", \"".mysql_real_escape_string($img_data)."\",
        	\"".mysql_real_escape_string($img_attr)."\",
        	\"".mysql_real_escape_string($img_offset)."\",
        	\"".mysql_real_escape_string($scraped)."\",
        	\"".mysql_real_escape_string($url)."\")";
        return setDataGetID( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return 0;
}

/*

CREATE TABLE `site_emails` (
  `email_id` int unsigned NOT NULL AUTO_INCREMENT,
  
  `site_id` int(11) DEFAULT '0',
  
  `email` CHAR(255),
  
  PRIMARY KEY (`email_id`),
  UNIQUE KEY `site_id_email` (`site_id`,`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `site_phone_numbers` (
  `phone_number_id` int unsigned NOT NULL AUTO_INCREMENT,
  
  `site_id` int(11) DEFAULT '0',
  
  `phone_number` CHAR(25),
  
  PRIMARY KEY (`phone_number_id`),
  UNIQUE KEY `site_id_phone_number` (`site_id`,`phone_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE site_phone_numbers ADD `phone_number_numeric` CHAR(25);

*/

function addSiteEmails( $site_id = null, $emails) {
    if ( isGood( $site_id, $emails) ){
        
        if (! is_array($emails)) {
            $emails = array($emails);
        }
        
        $query = "insert ignore into site_emails (site_id, email) VALUES ";
        $cnt = 0;
        foreach ($emails as $email) {
            if ($email != '') {
                $query .= " (".(int)$site_id.", \"".mysql_real_escape_string($email)."\"),";
                $cnt ++;
            }
        }
        
        if ($cnt == 0) {
            return 0;
        }
        
        $query = trim($query, ',');
        
        return setDataGetID( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return 0;
}

function getSiteEmails( $site_id = null ){
    if ( isGood( $site_id ) ){
        $query = "select * from site_emails where site_id=".$site_id." order by email_id";
        return getArray( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return null;    
}

function addSitePhoneNumbers( $site_id = null, $phones) {
    if ( isGood( $site_id, $phones) ){
        
        if (! is_array($phones)) {
            $phones = array($phones);
        }
        
        $query = "insert ignore into site_phone_numbers (site_id, phone_number, phone_number_numeric) VALUES ";
        $cnt = 0;
        foreach ($phones as $phone) {
            if ($phone != '') {
                $query .= " (".(int)$site_id.", \"".mysql_real_escape_string($phone)."\", \"".mysql_real_escape_string(preg_replace("/\D/", '', $phone))."\"),";
                $cnt ++;
            }
        }
        
        if ($cnt == 0) {
            return 0;
        }
        
        $query = trim($query, ',');
        
        return setDataGetID( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return 0;
}

function getSitePhoneNumbers( $site_id = null ){
    if ( isGood( $site_id ) ){
        $query = "select * from site_phone_numbers where site_id=".$site_id." order by phone_number_id";
        return getArray( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return null;    
}

function getSiteAddresses( $site_id = null ){
    // TODO
    return array();
    
    if ( isGood( $site_id ) ){
        //$query = "select * from site_addresses where site_id=".$site_id." order by address_id";
        return getArray( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return null;    
}

function updateSiteImage($image_id, $url, $img_data, $w, $h) {
    
    $query = "UPDATE
    		site_images SET
        	image_png = \"".mysql_real_escape_string($img_data)."\",
        	image_width = \"".mysql_real_escape_string($w)."\",
        	image_height = \"".mysql_real_escape_string($h)."\",
        	scraped = 'Y'
        	WHERE
        	(
        	image_id = \"".mysql_real_escape_string($image_id)."\"
        	OR
        	url = \"".mysql_real_escape_string($url)."\"
        	)
        	AND scraped = 'N'
	";
    return setDataGetID( $GLOBALS["vss_db_conn"], $query );
}

function getSiteImages( $site_id = null, $type = '', $scraped = 'Y', $limit = 0) {
    $query = "select image_id, page_id, image_type, image_attr, image_offset, url from site_images where " . ($site_id > 0 ? "site_id=".(int)$site_id : ' 1 ') . " AND scraped=\"".$scraped."\" ".($scraped == 'N' ? " AND url != '' " : ' AND image_png != "" ')."  ".($type != '' ? " AND image_type = \"{$type}\"" : '')." order by image_type, image_id " . ($limit > 0 ? " LIMIT " . (int)$limit : '');
    return getArray( $GLOBALS["vss_db_conn"], $query );
}

function getSiteImage($image_id) {
    if ( isGood( $image_id ) ){
        $query = "select * from site_images where image_id=".$image_id;
        return getSingleRow( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return null;
}

function getSiteColors($site_id) {
    if ( isGood( $site_id ) ){
        $query = "select * from site_colors where site_id=".$site_id;
        return getSingleRow( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return null;
}

function getMaxSiteId() {
    $query = "select MAX(site_id) as site_id from sites";
    return (int)getSingleValue( $GLOBALS["vss_db_conn"], $query, "site_id" );
}

/*

CREATE TABLE `site_colors` (
  `color_id` int unsigned NOT NULL AUTO_INCREMENT,
  
  `site_id` int(11) DEFAULT '0',
  `page_id` int(11) DEFAULT '0',
  
  `color_top` TEXT,
  `color_pairs` TEXT,
  
  PRIMARY KEY (`color_id`),
  KEY `site_id_page_id` (`site_id`,`page_id`),
  KEY `site_id` (`site_id`),
  KEY `page_id` (`page_id`)
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE site_colors ADD `color_main_pairs` TEXT AFTER color_pairs;

*/

function addSiteColors( $site_id = null, $page_id, $color_top = '{}', $color_pairs = '{}', $color_main_pairs = '{}'){
    if ( isGood( $site_id, $page_id) ){
        $query = "insert into site_colors (site_id, page_id, color_top, color_pairs, color_main_pairs)
        	values (".(int)$site_id.",'".(int)$page_id."',
        	\"".mysql_real_escape_string($color_top)."\",
        	\"".mysql_real_escape_string($color_pairs)."\",
        	\"".mysql_real_escape_string($color_main_pairs)."\"
        	)";
        return setDataGetID( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return 0;
}

function updateSitePage( $page_id = null, $page_name = null, $page_file = null, $page_content = null ){
    if ( isGood( $page_id, $page_name = null, $page_file = null, $page_content = null ) ){
        $query = "update site_pages set page_name='".$page_name."', page_file='".$page_file."', page_content='".$page_content."', page_filtered='".filterContent( $page_content )."' where page_id=".$page_id;
        return setData( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return FALSE;
}

function updateSitePageByField( $page_id = null, $fields = null){
    if ( isGood( $page_id) && (! empty($fields))) {
        
        $fieldsSql = 'UPDATE site_pages SET page_id = ' . $page_id;
        foreach ($fields as $k => $v) {
            $fieldsSql .= ', ' . $k . ' = "' . mysql_real_escape_string($v) . '"';
        }
        
        $query = $fieldsSql . ' WHERE page_id=' . $page_id;
        
        return setData( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return FALSE;
}

function deleteSitePage( $page_id = null ){
    if ( isGood( $page_id ) ){
        $query = "delete from site_pages where page_id=".$page_id;
        return setData( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return FALSE;
}

function getPageIDs( $site_id = null ){
    if ( isGood( $site_id ) ){
        $query = "select page_id from site_pages where site_id=".$site_id." AND page_filtered != '' order by page_id";
        return getSingleColumn( $GLOBALS["vss_db_conn"], $query, "page_id" );
    }
    else
        return null;
}


function getPageIDWithName( $site_id = null ){
    if ( isGood( $site_id ) ){
        $query = "select page_id, page_name, page_type  from site_pages where site_id=".$site_id." AND page_filtered != '' order by page_id";
        return getArray( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return null;
}

function getPageContentViaId( $site_id = null, $page_id= null ){
   if ( isGood( $site_id, $page_id ) ){
        $query = "select page_filtered from site_pages where site_id=".$site_id." and page_id='".$page_id."'";
        return getSingleValue( $GLOBALS["vss_db_conn"], $query, "page_filtered" );
    }
    else
        return null;
}

function getSitePages( $site_id = null ){
    if ( isGood( $site_id ) ){
        $query = "select * from site_pages where site_id=".$site_id." AND page_filtered != '' order by page_id";
        return getArray( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return null;    
}

function getSitePage( $page_id = null ){
    if ( isGood( $page_id ) ){
        $query = "select * from site_pages where page_id=".$page_id;
        return getSingleRow( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return null;        
}

function getSitePageName( $page_id = null ){
    if ( isGood( $page_id ) ){
        $query = "select page_name from site_pages where page_id=".$page_id;
        return getSingleValue( $GLOBALS["vss_db_conn"], $query, "page_name" );
    }
    else
        return null;            
}

function getSitePageFile( $page_id = null ){
    if ( isGood( $page_id ) ){
        $query = "select page_file from site_pages where page_id=".$page_id;
        return getSingleValue( $GLOBALS["vss_db_conn"], $query, "page_file" );
    }
    else
        return null;            
}

function getSitePageCount( $site_id = null ){
    if ( isGood( $site_id ) ){
        $query = "select count(*) as total from site_pages where site_id=".$site_id . " AND page_filtered != ''";
        return getSingleValue( $GLOBALS["vss_db_conn"], $query, "total" );
    }
    else
        return "0";
}

function getSiteNavigation( $site_id = null ){
    if ( isGood( $site_id ) ){
        $query = "select page_name, page_type from site_pages where site_id=".$site_id." AND page_filtered != '' order by page_id";
        return getArray( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return null;
}

function getRawPageContent( $site_id = null, $page_name = null ){
    if ( isGood( $site_id, $page_name ) ){
        $query = "select page_content from site_pages where site_id=".$site_id." and page_name='".$page_name."'";
        return getSingleValue( $GLOBALS["vss_db_conn"], $query, "page_content" );
    }
    else
        return null;
}

function getRawPageContentViaId( $site_id = null, $page_id = null ){
    if ( isGood( $site_id, $page_id ) ){
        $query = "select page_content from site_pages where site_id=".$site_id." and page_id='".$page_id."'";
        return getSingleValue( $GLOBALS["vss_db_conn"], $query, "page_content" );
    }
    else
        return null;
}

function getPageContent( $site_id = null, $page_name = null ){
    if ( isGood( $site_id, $page_name ) ){
        $query = "select page_filtered from site_pages where site_id=".$site_id." and page_name='".$page_name."'";
        return getSingleValue( $GLOBALS["vss_db_conn"], $query, "page_filtered" );
    }
    else
        return null;
}

function removeContentElements( $site_id, $urls ) {
    if (isGood( $site_id ) && (! empty($urls))) {
        
        // Prepare removal patterns
        $patterns = array("/<\s*\/\s*img>|<img\s*\/\s*>/iums");
        foreach ($urls as $url) {
            if ($url != '') {
                $patterns[] = "|<img [^>]*?" . preg_quote($url) . "[^>]*?>|iums";
            }
        }
        
        $query = "select page_id, page_filtered from site_pages where site_id=".$site_id." and page_filtered != ''";
        $pages = getArray( $GLOBALS["vss_db_conn"], $query );
        foreach ($pages as $page) {
            
            $page['page_filtered'] = preg_replace($patterns, ' ', $page['page_filtered']);
             
            updateSitePageByField($page['page_id'], array('page_filtered' => $page['page_filtered']));
        }
        
        
        
    } else {
        return FALSE;
    }
}

function setScrapingFinishedIndicator( $site_id = null ){
    if ( isGood( $site_id ) ){
        $query = "update sites set scraped='Y' where site_id=".$site_id;
        return setData( $GLOBALS["vss_db_conn"], $query );
    }
    else
        return FALSE;
}
?>