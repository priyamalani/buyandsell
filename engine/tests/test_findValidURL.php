<?php
/***********************************
*  test_findValidURL.php
*  
*  company: Site Technologies Inc.
*  project: Veloxsites Scraper
*  author: Priya Malani
*  date: April 19th, 2013
*  path: /root/engine/tests/
*  desc: This page tests the findValidURL function
*   
*  ---------------------------
*  MODS (not for bug fixes - more for feature additions):
*  author:
*  desc:
*  date:
*
**************/
include dirname(dirname(__FILE__))."/lib/configuration.php";
include dirname(dirname(__FILE__))."/lib/session_manager.php";

$url = getParameter("url");

if ( isGood( $url ) ){
    if ( stripos( $url, 'http' ) === FALSE) $url = "http://".$url;
    
    $headers = get_headers( $url );
    if ( isGood( $headers ) ){
        foreach( $headers as $header ){
            echo $header.'<br/>';
        }
    }
    else{
        echo 'INVALID URL OR DOES NOT EXIST';
    }
    echo '<br/><br/>';
    echo '<a href="test_findValidURL.php">test another url</a>&nbsp;<a href="index.php">back to test home</a>';
}
else{
    ?>
    <html>
        <body>
            <b>Enter a URL and click "go" to execute test:</b>
            <form action="test_findValidURL.php" method="post">
                <input type="text" name="url" value="" />
                <input type="submit" value="go" />&nbsp;<input type="button" value="back to test home" onClick="window.location='index.php';" />
            </form>
        </body>
    </html>
    <?php
}
    
exit;
?>