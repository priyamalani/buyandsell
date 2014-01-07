#!/usr/bin/php
<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once dirname(dirname(dirname(__FILE__))) . '/3plib/STI/Daemon/Process.php';
require_once dirname(dirname(dirname(__FILE__))) . '/classes/ImageDownloader.php';

try {
    $Process = new STI_Daemon_Process('/tmp/image-downloader.php.pid');
} catch (Exception $ex) {
    switch ($ex->getCode()) {
        case 100:
        case 103:
            echo "Script already running...\n";
            die;
        case 101:
            echo "File Not Writable\n";
            die;
        case 102:
            echo "Folder Not Writable\n";
            die;
    }
}

try {
    
	$imgDown = new ImageDownloader();
	$imgDown->run();
	
} catch (Exception $e) {
	throw $e;
}
