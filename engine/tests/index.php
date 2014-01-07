<?php
/***********************************
*  index.php
*  
*  company: Site Technologies Inc.
*  project: Veloxsites Scraper
*  author: Priya Malani
*  date: April 19th, 2013
*  path: /root/engine/tests/
*  desc: This is the homepage for central access to all test pages.
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

?>

<html>
<body>
<center>
<h1>Veloxsites Scraper Test Pages</h1>

<table border="1" cellpadding="20" cellspacing="0">
<tr><td>

<table border="0">

<?php 
$files = scandir( '.' );
sort( $files );

foreach( $files as $file ){
    if ( $file != "." && $file != ".." && !is_dir( $file ) && $file != "index.php" ) {
        echo '<tr><td><a href="'.$file.'">'.$file.'</a></td></tr>';
    }
}    
?>

</table>

</td></tr>
</table>

</center>
</body>
</html>
