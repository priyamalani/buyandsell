<?php

require_once dirname(dirname(__FILE__))."/lib/configuration.php";
require_once dirname(dirname(__FILE__))."/lib/session_manager.php";
require_once dirname(dirname(__FILE__))."/lib/db_functions.php";

class ImageDownloader {

    protected $_baseTmpDir;
    
    protected $minW = 200;
    protected $minH = 200;

    protected $resizeW = 800;
    protected $resizeH = 600;
    
    
	public function __construct() {
	
		set_time_limit(0);
		ini_set('memory_limit', '512M');
		
		$this->_baseTmpDir = '/tmp/imgd-' . getmypid() . time() . '/';
		mkdir($this->_baseTmpDir);

	}

	public function run() {
	    
	    while (true) {
    	    // Get all images from db
    	    $rows = getSiteImages(0, 'picture', 'N', 1);
    	    
    	    if (! empty($rows) && (isset($rows[0]))) {
    	        // Get image
    	        $id = $rows[0]['image_id'];
    	        $url = $rows[0]['url'];
    	        
    	        $filename = $this->_baseTmpDir . "image.tmp";
    	        $filenameResult = $this->_baseTmpDir . "image.png";
    	        if (file_exists($filename)) {
    	            unlink($filename);
    	        }
    	        if (file_exists($filenameResult)) {
    	            unlink($filenameResult);
    	        }
    	        shell_exec("axel -n 3 \"{$url}\" -o {$filename}");
    	        
            	// Get image dimensions
        		$output = shell_exec('identify -verbose info: ' . $filename . ' | grep "\(Geometry\|Format\)"');
        		$w = 0;
        		$h = 0;
        		$hasData = false;
             	if (preg_match("/Geometry\:\s*(\d+)x(\d+)/i", $output, $r)) {
        	     	$w = $r[1];
            	 	$h = $r[2];
           	 		$isPng = preg_match("/Format\:\sPNG/i", $output);
            	 	
            	 	// Ignore small images
            	 	if (($w >= $this->minW) && ($h >= $this->minH)) {
        
            	 		if (($w <= $this->resizeW) && ($h <= $this->resizeH) && $isPng) {
            	 			// Don't resize and don't convert
            	 			copy($filename, "{$filenameResult}");
            	 		} else {
            	 			// Resize and convert to png
             				shell_exec("convert {$filename} -resize ".$this->resizeW."x".$this->resizeH."\> {$filenameResult}");
             			}
             			
             			$hasData = true;
        		     	//echo "{$filenameResult}\n";
             		}

             	}
             	
             	if ($hasData) {
             	    // Save
             		updateSiteImage($id, $url, file_get_contents($filenameResult), $w, $h);
             	} else {
             	    // Mark as processed
             	    updateSiteImage($id, $url, '', $w, $h);
             	}
    	        
    	    } else {
    	        // Wait	    
    	        sleep(1);
    	    }
	    }

	}

}
