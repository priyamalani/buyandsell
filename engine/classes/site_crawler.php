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
require dirname(dirname(__FILE__))."/3plib/PHPCrawl/libs/PHPCrawler.class.php";
require dirname(dirname(__FILE__))."/3plib/STI/PhantomJSCrawler.php";
require dirname(dirname(__FILE__))."/3plib/STI/ImageUtils.php";
require_once dirname(dirname(__FILE__))."/lib/db_functions.php";

class Crawler extends PHPCrawler{
    private $site_id = 0;
    private $page_count = 0;
    
    private $_processedPhoneNumbers = array(); 
    
    private $_commonElements = array();
    private $_totalPages = 0;
    private $_logoImgSrc = '';
    private $_logoImgSrcAbsolute = '';
    private $_logoImgType = '';
    
    private $_featuredImgSrc = '';
    private $_featuredImgSrcAbsolute = '';
    
    function __construct( $site_id = null ) {
        $this->site_id = $site_id;
        $this->page_count = 0;
        
        parent::__construct();
    }
    
    function __destruct() {
    }
    
    public function handleDocumentInfo( PHPCrawlerDocumentInfo $PageInfo ){
        if ( $PageInfo->http_status_code == 200 ){
            $page_file = ( isGood( $PageInfo->file ) ) ? $PageInfo->file : str_replace("/", "", $PageInfo->path ).".html";
            $page_name = trim( strip_tags( $PageInfo->refering_linktext ) );
            if ( strlen($page_name) == 0 ){ $page_name = substr( $page_file, 0, strpos( $page_file, ".") ); }
            
            if ( $this->page_count === 0 || ( $this->page_count > 0 && stripos( $page_name, "index" ) === FALSE && stripos( $page_name, "home" ) === FALSE && stripos( $page_name, "default" ) === FALSE ) ){
                if ( $this->page_count === 0 ){   
                    $page_file = "index.html"; 
                    $page_type = 'home';
                    $page_name = 'Home';
                } else {
                    $page_type = STI_ContentUtils::classifyText($page_file);
                }

                $content = $this->absoluteSources( $PageInfo->protocol.$PageInfo->host.$PageInfo->path, $this->_getContent($PageInfo) );
                $filteredText = filterContent($content['text']);
                $pageId = addSitePage( $this->site_id, $page_name, $page_file, $content['text'], $filteredText, $page_type );
                
                /* Disabled, time-consuming and we don't have logic to consume these images on the builder side 
                if ( ( $pageId > 0 ) && ( !empty($content['imgs'] ) ) ) {
                    // Update img queue
                    foreach ( $content['imgs'] as $url => $attrs ) {
                        addSiteImage( $this->site_id, $pageId, 'picture', '', json_encode($attrs), '', 'N', $url );
                    }
                }*/
                
                if ($pageId > 0) {
                    $this->_totalPages ++;
                }
                
                // Indentify common design elements (images)
                if ( ( $pageId > 0 ) && ( !empty($content['imgs'] ) ) ) {
                    foreach ( $content['imgs'] as $url => $attrs ) {
                        if (! isset($this->_commonElements[$url])) {
                            $this->_commonElements[$url] = 1;
                        } else {
                            $this->_commonElements[$url] ++;
                        }
                    }
                }
                
                // Extract and add emails
                addSiteEmails( $this->site_id, STI_ContentUtils::extractEmails( $content['text'] ) );
                
                // Extract and add phone numbers
                $tmp = STI_ContentUtils::extractPhoneNumbers( html_entity_decode( strip_tags( $filteredText ) ) );
                if ( !empty( $tmp ) ) {
                    foreach ( $tmp as $tmpPh ) {
                        if ( !isset( $this->_processedPhoneNumbers[$tmpPh[1] ] ) ){
                            
                            addSitePhoneNumbers($this->site_id, $tmpPh[0]);
                            
                            $this->_processedPhoneNumbers[$tmpPh[1]] = true;
                            $this->_processedPhoneNumbers[substr($tmpPh[1], -11)] = true;
                            $this->_processedPhoneNumbers[substr($tmpPh[1], -10)] = true;
                            $this->_processedPhoneNumbers[substr($tmpPh[1], -9)] = true;
                            $this->_processedPhoneNumbers[substr($tmpPh[1], -8)] = true;
                            $this->_processedPhoneNumbers[substr($tmpPh[1], -7)] = true;
                            $this->_processedPhoneNumbers[substr($tmpPh[1], -6)] = true;
                            $this->_processedPhoneNumbers[substr($tmpPh[1], -5)] = true;
                        }
                    }
                }
                
                if ( $pageId > 0 && $this->page_count === 0 ) {
                    // PhantomJS Crawl
                    $phc = new STI_PhantomJSCrawler();
                    $phc->setUrl($PageInfo->url);
                    $phc->setBaseTmpDir('/tmp/');
                    $phc->addContentFilterRule(STI_PhantomJSCrawler::CONTENT_INCLUDE_IMAGES);
                    
                    if ( $this->page_count === 0 ) {
                        $phc->addContentFilterRule(STI_PhantomJSCrawler::CONTENT_INCLUDE_SCREEN_SHOTS);
                    }
                    
                    $this->_processPhantomData($phc->crawl(), $pageId);
                }
                
                $this->page_count++;
            }
        }
    }
    
    /**
     * Returns list of src(urls) to elements(images) that are common for all pages + logo   
     */
    public function getSiteCommonElements() {
        $data = array();
        foreach ($this->_commonElements as $url => $cnt) {
            if (($cnt > 1) && ($cnt == $this->_totalPages)) {
                $data[] = $url;
            }
        }
        
        // Include logo IMG url
        if ($this->_logoImgSrc != '') {
            $data[] = $this->_logoImgSrc;
            $data[] = $this->_logoImgSrcAbsolute;
        }
        
        // Include featured IMG url
        if ($this->_featuredImgSrc != '') {
            $data[] = $this->_featuredImgSrc;
            $data[] = $this->_featuredImgSrcAbsolute;
        } 
        
        return $data;
    }
    
    
    /**
     * 
     * Process and store data from PhantomJS Crawler
     * 
     * @param array $data
     * @param int $pageId
     */
    private function _processPhantomData($data, $pageId) {
        
        // Store bizName and featured text(slogan)
        $bName = null;
        $featuredText = null;
//        if (isset($data['businessName']) && $data['businessName'] != '') {
//            $bName = $data['businessName'];
//        }
        if (isset($data['sloganText']) && $data['sloganText'] != '') {
            $featuredText = $data['sloganText'];
        }
        $pageTitle = null;
        if (isset($data['pageTitle']) && $data['pageTitle'] != '') {
            $pageTitle = $data['pageTitle'];
        }
        $ogTitle = null;
        if (isset($data['ogTitle']) && $data['ogTitle'] != '') {
            $ogTitle = $data['ogTitle'];
        }
        $itempropName = null;
        if (isset($data['itempropName']) && $data['itempropName'] != '') {
            $itempropName = $data['itempropName'];
        }
        
        // Determine business name using site url and title(s)
        $bName = $this->_determineBusinessName($data['url'], $pageTitle, $ogTitle, $itempropName);
        
        
        if ($featuredText || $bName || $pageTitle || $ogTitle || $itempropName) {
            updateSite($this->site_id, null, $featuredText, $bName, $pageTitle, $ogTitle, $itempropName);
        }
        
        // Screen shots -> db
        $screenFull = '';
        $screenNoText = '';
        if (isset($data['screens']) && is_array($data['screens'])) {
            foreach ($data['screens'] as $screen) {
                addSiteScreenShot($this->site_id, $pageId, 'screen-' . $screen['type'], file_get_contents($screen['localFile']));
                
                if ($screen['type'] == STI_ImageUtils::TYPE_SCREEN_FULL) {
                    $screenFull = $screen['localFile'];
                } elseif ($screen['type'] == STI_ImageUtils::TYPE_SCREEN_NO_TEXT) {
                    $screenNoText = $screen['localFile'];
                }
            }
            
            // Get top BG colors
            $colors = STI_ImageUtils::getXColorsTop($screenNoText, 16, array($this->_locateNavigationBlock($data['aTags'])));
            
            $topBGColors = array('maxPopularity' => $colors['maxPopularity'], 'colors' => $colors['colors']);
            
            // Get color pairs (replaced with 'main pairs')
            $colorPairs = array(); //STI_ImageUtils::diffImages($screenNoText, $screenFull);
            
            // Get main color pairs
            $colorMainPairs = $this->_selectColorMainPairs($topBGColors, (! empty($colors['regionsColors']) ? $colors['regionsColors'][0] : array()), $data['colors'], $data['colorsA']);
            
            // Colors -> db
            addSiteColors($this->site_id, $pageId, json_encode($topBGColors), json_encode($colorPairs), json_encode($colorMainPairs));
        }
        
        
        
        // Pictures -> db
        if (isset($data['pictures']) && is_array($data['pictures'])) {
            if (isset($data['pictures']['attrs'])) {
                foreach ($data['pictures']['attrs'] as $k => $picAttr) {
                    $picAttr['type'] = ($this->_isLogoImage($picAttr) ? STI_ImageUtils::TYPE_LOGO : $picAttr['type']);
                    
                    // Remember logo img URL
                    if (($this->_logoImgType == '') || (($this->_logoImgType != STI_ImageUtils::TYPE_LOGO) && ($picAttr['type'] == STI_ImageUtils::TYPE_LOGO))) {
                        $this->_logoImgType = $picAttr['type'];
                        $this->_logoImgSrc = $picAttr['src'];
                        $this->_logoImgSrcAbsolute = $picAttr['srcAbsolute'];
                    }
                    
                    // Remember feature img URL
                    if ($picAttr['type'] == STI_ImageUtils::TYPE_FEATURED) {
                        $this->_featuredImgSrc = $picAttr['src'];
                        $this->_featuredImgSrcAbsolute = $picAttr['srcAbsolute'];
                    }
                    
                    addSiteImage($this->site_id, $pageId, $picAttr['type'], STI_ImageUtils::getImageData($picAttr), json_encode($picAttr), json_encode($data['pictures']['offsets'][$k]));
                }
            }
        }
    }
    
    private function _determineBusinessName($url, $pageTitle = '', $ogTitle = '', $itempropName = '') {
        $bName = '';
        
        // Concatenate og and page titles to split&compare with url (same problems(extra stuff like "Home |" etc) exist for both of these titles)
        $pageTitle = trim(trim($ogTitle) . '   ' . trim($pageTitle));
        
        if (trim($itempropName) != '') {
            $bName = trim($itempropName); 
        } elseif ($pageTitle != '') {
            $tmp = preg_split("/([^&\.\(\)\w]{2,}|\.{2,}|\&{2,})/u", $pageTitle);
            $maxPercent = 0;
            $bestMatch = '';
            $tmpUrl = strtolower(str_replace(' ', '', STI_ContentUtils::replaceNonAlphaNumeric(STI_ContentUtils::translitText($url), ' '))); 
            foreach ($tmp as $st) {
                $tmpSt = strtolower(str_replace(' ', '', STI_ContentUtils::replaceNonAlphaNumeric(STI_ContentUtils::translitText($st), ' ')));
                
                if ($tmpSt != '') {
                    if ($bestMatch == '') {
                        // Use the first phrase as a default value for BName 
                        $bestMatch = trim($st);
                    }
                
                    // Compare phrase with url
                    similar_text($tmpUrl, $tmpSt, $tmpPercent);
                    
                    if ($tmpPercent > $maxPercent) {
                        $bestMatch = trim($st);
                        $maxPercent = $tmpPercent;
                    }
                }
            }
            
            $bName = $bestMatch;
        }
        
        return $bName;
    }
    
    private function _locateNavigationBlock($aTagOffsets) {
        $tmp = array(
        	'T' => array(),
        	'B' => array(),
        	'L' => array(),
        	'R' => array(),
        );
        
        // Add some pixels to the final block to cover a bit bigger background area
        $borderDelta = 3;
        
        // Min number of links in block
        $minNumOfLinks = 3;
        
        // Count number of A tags on the same vertical or horizontal +/- a couple of pixels
        foreach ($aTagOffsets as $k => $offset) {
            $top = round($offset['top'] / 5);
            $bottom = round(($offset['top'] + $offset['height']) / 5);
            $left = round($offset['left'] / 5);
            $right = round(($offset['left'] + $offset['width']) / 5);
            
            if (! isset($tmp['T'][$top])) {
                $tmp['T'][$top] = array('cnt' => 0, 'data' => array());
            }
            if (! isset($tmp['B'][$bottom])) {
                $tmp['B'][$bottom] = array('cnt' => 0, 'data' => array());
            }
            if (! isset($tmp['L'][$left])) {
                $tmp['L'][$left] = array('cnt' => 0, 'data' => array());
            }
            if (! isset($tmp['R'][$right])) {
                $tmp['R'][$right] = array('cnt' => 0, 'data' => array());
            }
            
            $tmp['T'][$top]['cnt'] ++;
            $tmp['T'][$top]['data'][] = $offset;
            
            $tmp['B'][$bottom]['cnt'] ++;
            $tmp['B'][$bottom]['data'][] = $offset;
            
            $tmp['L'][$left]['cnt'] ++;
            $tmp['L'][$left]['data'][] = $offset;
            
            $tmp['R'][$right]['cnt'] ++;
            $tmp['R'][$right]['data'][] = $offset;
        }
        
        $finalDir = '';
        $finalId = -1;
        $maxLinks = 0;
        foreach ($tmp as $dir => $v) {
            foreach ($v as $id => $data) {
                if (($data['cnt'] > $maxLinks) && ($data['cnt'] >= $minNumOfLinks)) {
                    $finalDir = $dir;
                    $finalId = $id;
                    $maxLinks = $data['cnt'];
                }
            }
        }
        
        if (($finalId > -1) && (! empty($tmp[$finalDir][$finalId]['data']))) {
            $minX = 10000;
            $minY = 10000;
            $maxX = 0;
            $maxY = 0; 
            foreach ($tmp[$finalDir][$finalId]['data'] as $offset) {
                if ($offset['top'] < $minY) {
                    $minY = $offset['top'];
                }
                if (($offset['top'] + $offset['height']) > $maxY) {
                    $maxY = $offset['top'] + $offset['height'];
                }
                if ($offset['left'] < $minX) {
                    $minX = $offset['left'];
                }
                if (($offset['left'] + $offset['width']) > $maxX) {
                    $maxX = $offset['left'] + $offset['width'];
                }
            }
            
            $result = array('x' => $minX - $borderDelta, 'y' => $minY - $borderDelta, 'w' => $maxX - $minX + (2 * $borderDelta), 'h' => $maxY - $minY + (2 * $borderDelta));
            
        } else {
            $result = array();
        }
        
        return $result;
    }
    
    private function _selectColorMainPairs($topBGColors = array(), $navigationBGColors = array(), $textColors = array(), $navigationTextColors = array()) {
        $minReadability = 0.8;
        $minReadabilityN = 0.75;
        $whiteColor = 'rgb(255,255,255)';
        $blackColor = 'rgb(0,0,0)';
        
        $colorMainPairs = array(
			'primaryBG' => $whiteColor,
			'primaryText' => $blackColor,

			'secondaryBG' => 'rgb(128,128,128)',
			'secondaryText' => $whiteColor,
                        
			'navigationBG' => 'rgb(64,64,64)',
			'navigationText' => $whiteColor
		);
		
        arsort($topBGColors['colors']);
        
        $i = 0;
        foreach ($topBGColors['colors'] as $k => $v) {
            switch ($i) {
                case 0:
                    $colorMainPairs['primaryBG'] = $k;
                break;
                
                case 1:
                    $colorMainPairs['secondaryBG'] = $k;
                break;
                
                case 2:
                    $colorMainPairs['navigationBG'] = $k;
                break;
                
                default:
                    ;
                break;
            }
            
            $i ++;
        }
        
        
        if ((! empty($navigationBGColors)) && (isset($navigationBGColors['colors']))) {
            foreach ($navigationBGColors['colors'] as $k => $v) {
                if ($v == $navigationBGColors['maxPopularity']) {
                    
                    $colorMainPairs['navigationBG'] = $k;
                    
                    break 1;
                }
            }
        }
        
        $pBG = STI_ImageUtils::rgbaStrToArray($colorMainPairs['primaryBG']);
        $sBG = STI_ImageUtils::rgbaStrToArray($colorMainPairs['secondaryBG']);
        $nBG = STI_ImageUtils::rgbaStrToArray($colorMainPairs['navigationBG']);
        
        // Don't have text colors? Use black and white
        if (empty($textColors)) {
            $textColors = array($blackColor => 1, $whiteColor => 1);
        }
        
        // Loop through text colors and select one color with the max readability for each BG
        $maxReadabilityP = 0;
        $maxReadabilityPColor = '';
        $maxReadabilityS = 0;
        $maxReadabilitySColor = '';
        $maxReadabilityN = 0;
        $maxReadabilityNColor = '';
        foreach ($textColors as $k => $v) {
            $c = STI_ImageUtils::rgbaStrToArray($k);
            
            $tmpP = STI_ImageUtils::getColourReadability($c, $pBG);
            $tmpS = STI_ImageUtils::getColourReadability($c, $sBG);
            
            if ($tmpP > $maxReadabilityP) {
                $maxReadabilityP = $tmpP;
                $maxReadabilityPColor = $k;
            }
            if ($tmpS > $maxReadabilityS) {
                $maxReadabilityS = $tmpS;
                $maxReadabilitySColor = $k;
            }
        }
        
        // Don't have nav text? Use black and white with popularity at least 2
        if (empty($navigationTextColors)) {
            $navigationTextColors = array($blackColor => 3, $whiteColor => 3);
        }
        
        // Sort nav text colours (most popular first)
        arsort($navigationTextColors);
        $maxPopularityN = 0;
        foreach ($navigationTextColors as $k => $v) {
            
            if (($v <= 1) && ($maxPopularityN > 1)) {
                // Don't work with popularity=1 colours if we had popularity>1 colours before
                break 1;
            }
            
            $maxPopularityN = max($maxPopularityN, $v);
            
            $c = STI_ImageUtils::rgbaStrToArray($k);
            
            $tmpN = STI_ImageUtils::getColourReadability($c, $nBG);
            
            if ($tmpN > $maxReadabilityN) {
                $maxReadabilityN = $tmpN;
                $maxReadabilityNColor = $k;
                
                // Stop if we have colour with $minReadabilityN
                if ($tmpN >= $minReadabilityN) {
                    break 1;
                }
            }
            
            if ($v <= 1) {
                // Stop after the first colour with popularity <= 1
                // (nav should have multiple links otherwise use the first one)
                break 1;
            }
        }
        
        // If readability is low check vs White and Black
        $cW = STI_ImageUtils::rgbaStrToArray($whiteColor);
        $cB = STI_ImageUtils::rgbaStrToArray($blackColor);
        if ($maxReadabilityP < $minReadability) {
            $tmpW = STI_ImageUtils::getColourReadability($cW, $pBG);
            $tmpB = STI_ImageUtils::getColourReadability($cB, $pBG);
            if (($tmpW > $maxReadabilityP) && ($tmpW >= $tmpB)) {
                $maxReadabilityPColor = $whiteColor;
            } elseif (($tmpB > $maxReadabilityP) && ($tmpB >= $tmpW)) {
                $maxReadabilityPColor = $blackColor;
            }
        }
        if ($maxReadabilityS < $minReadability) {
            $tmpW = STI_ImageUtils::getColourReadability($cW, $sBG);
            $tmpB = STI_ImageUtils::getColourReadability($cB, $sBG);
            if (($tmpW > $maxReadabilityS) && ($tmpW >= $tmpB)) {
                $maxReadabilitySColor = $whiteColor;
            } elseif (($tmpB > $maxReadabilityS) && ($tmpB >= $tmpW)) {
                $maxReadabilitySColor = $blackColor;
            }
        }
        if ($maxReadabilityN < $minReadabilityN) {
            $tmpW = STI_ImageUtils::getColourReadability($cW, $nBG);
            $tmpB = STI_ImageUtils::getColourReadability($cB, $nBG);
            if (($tmpW > $maxReadabilityN) && ($tmpW >= $tmpB)) {
                $maxReadabilityNColor = $whiteColor;
            } elseif (($tmpB > $maxReadabilityN) && ($tmpB >= $tmpW)) {
                $maxReadabilityNColor = $blackColor;
            }
        }
        
        $colorMainPairs['primaryText'] = $maxReadabilityPColor;
        $colorMainPairs['secondaryText'] = $maxReadabilitySColor;
        $colorMainPairs['navigationText'] = $maxReadabilityNColor;
        
        return $colorMainPairs;
    }
    
    private function _isLogoImage($attrs) {
        if ($attrs['type'] == STI_ImageUtils::TYPE_LOGO_CANDIDATE) {
            foreach (array('id', 'src', 'alt', 'class', 'backgroundImage', 'itemprop') as $prop) {
                if (isset($attrs[$prop]) && (preg_match("/(\b|\_|\d)(logo(type)?|emblem)(\b|\_|\d)/iu", $attrs[$prop]))) {
                    return true;
                }
            }
        }
        
        return false;
    }
    
    /**
     * 
     * Returns page content using provided charset (default is utf-8)
     * 
     * @param PHPCrawlerDocumentInfo $PageInfo
     * @param string $characterSet
     */
    private function _getContent(PHPCrawlerDocumentInfo $PageInfo, $characterSet = 'UTF-8') {
        
        $characterSet = strtoupper($characterSet);

        $pageCharset = $this->_determineCharset($PageInfo);
        if ($pageCharset != $characterSet) {
            $tmp = iconv($pageCharset, $characterSet, $PageInfo->content);
        } else {
            $tmp = $PageInfo->content;
        }
        
        // Remove xml/html encoding tags
        $tmp = '<?xml encoding="'.$characterSet.'">' . preg_replace(array(
			"/<\?*\s*xml\b[^>]*?encoding\s*=\s*[^>]+?>/iu",
			"/<\s*meta\b[^>]*?charset\s*=\s*[^>]+?>/iu"
		), '', $tmp);
        
        return $tmp;
    }
    
    /**
     * See http://www.w3.org
     *
     * http://www.w3.org/International/questions/qa-html-encoding-declarations
     * 
     */
    private function _determineCharset(PHPCrawlerDocumentInfo $PageInfo) {
        
        $charset = '';
        
        // Get charset from HTTP header (Content-Type: text/html; charset=UTF-8)
        if (preg_match("/[\r\n]Content\-Type:[^\r\n]*?[ \t]*;[ \t]*charset[ \t]*=[ \t]*([^\r\n\;]+?)[\r\n\;]/i", $PageInfo->header, $match)) {
            $tmpCharset = (isset($match[1]) ? trim($match[1]) : '');
            if ($tmpCharset != '') {
                $charset = $tmpCharset;
            }
        }
        
        
        // Check content
        if (empty($charset)) {
            // Check XML declaration (<?xml version="1.0" encoding="ISO-8859-1")
            if (preg_match("/<?xml\b[^>]*\bencoding[\s]*=[\s\'\"]*([^ >\'\"]+)[\'\"]*/i", $PageInfo->content, $match)) {
                $tmpCharset = (isset($match[1]) ? trim($match[1]) : '');
                if ($tmpCharset != '') {
                    $charset = $tmpCharset;
                }
            }
        }
        
        if (empty($charset)) {
            // Check HTML5 meta (<meta charset="UTF-8">)
            if (preg_match("/<meta\s+\bcharset[\s]*=[\s\'\"]*([^ >\'\"]+)[\'\"]*/i", $PageInfo->content, $match)) {
                $tmpCharset = (isset($match[1]) ? trim($match[1]) : '');
                if ($tmpCharset != '') {
                    $charset = $tmpCharset;
                }
            }
        }
        
        if (empty($charset)) {
            // Check pragma directive (<meta http-equiv="Content-type" content="text/html; charset=UTF-8">)
            if (preg_match("/<meta[^><]+?content\s*=[^><]+?\bcharset[\s]*=[\s\'\"]*([^ >\'\"]+)[\'\"]*/i", $PageInfo->content, $match)) {
                $tmpCharset = (isset($match[1]) ? trim($match[1]) : '');
                if ($tmpCharset != '') {
                    $charset = $tmpCharset;
                }
            }
        }
        
        if (empty($charset)) {
            // Default encoding of documents delivered via HTTP
            $charset = 'ISO-8859-1';
        } else {
            $charset = strtoupper($charset);
        }
        
        return $charset;
    }
    
    
    
    private function absoluteSources( $domain = null, $content = null ){
        $imgUrls = array();
        $imgHrefUrls = array();
        if ( isGood( $domain, $content ) ){
            $DOM = new DOMDocument;
            $DOM->loadHTML( $content );

            
            //*****  find all images on page  *****
            $imgs = $DOM->getElementsByTagName('img');
            foreach( $imgs as $img ){
                $src = $img->getAttribute('src');
                
                if( isGood( $src ) && stripos( $src, 'http://') === FALSE && stripos( $src, 'https://') === FALSE ){
                    if ( substr( $src, 0, 3 ) == "../" || substr( $src, 0, 2 ) == "./" || substr( $src, 0, 1 ) == "/" )
                        $new_rel_src = substr( $src, strpos( $src, "/") + 1 );
                    else 
                        $new_rel_src = $src;
                    
                    $new_abs_src = $domain.$new_rel_src;
                    $img->setAttribute('src', $new_abs_src );
                }
                
                $url = $img->getAttribute('src');
                if (! isset($imgUrls[$url])) {
                    if (preg_match(STI_ContentUtils::PATTERN_IMG_URL, $url)) {
                        $imgUrls[$url] = array('alt' => $img->getAttribute('alt'), 'width' => $img->getAttribute('width'), 'height' => $img->getAttribute('height'));
                    }
                }
            }
            

            //*****  find all links on page  *****
            $links = $DOM->getElementsByTagName('a');
            foreach( $links as $link ){
                $href = $link->getAttribute('href');

                if( isGood( $href ) && stripos( $href, 'http://') === FALSE && stripos( $href, 'https://') === FALSE ){
                    if ( substr( $href, 0, 3 ) == "../" || substr( $href, 0, 2 ) == "./" || substr( $href, 0, 1 ) == "/" )
                        $new_rel_href = substr( $href, strpos( $href, "/") + 1 );
                    else 
                        $new_rel_href = $href;

                    $new_abs_href = $domain.$new_rel_href;
                    $link->setAttribute('href', $new_abs_href );
                }
                
                $url = $link->getAttribute('href');
                if (! isset($imgHrefUrls[$url])) {
                    if (preg_match(STI_ContentUtils::PATTERN_IMG_URL, $url)) {
                        $imgHrefUrls[$url] = array('alt' => '', 'width' => '0', 'height' => '0');
                    }
                }
                
            }
            
            $result = array('text' => $DOM->saveHTML(), 'imgs' => $imgUrls, 'imgHrefs' => $imgHrefUrls);
            
            return $result;
        }
        else
            return array('text' => $content, 'imgs' => array());
    }
}