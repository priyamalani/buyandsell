<?php
/***********************************
*  db_base_functions.php
*  
*  company: Site Technologies Inc.
*  project: Veloxsites
*  author: Priya Malani
*  date: January 24th, 2012
*  path: /root/engine/lib/
*  desc: This is used to centralize all calls/actions to the core database miscellaneous and supporting functions.
*  
*  ---------------------------
*  MODS (not for bug fixes - more for feature additions):
*  author:
*  desc:
*  date:
*
**************/

require dirname(dirname(__FILE__))."/3plib/STI/ContentUtils.php";


/*********
* 
*  MISCELLANEOUS AND SUPPORTING FUNCTIONS
*  
*********/
function getArray( $connection, $query ){
	$result = getResultSet( $connection, $query );
	$data = array();

	if ( hasRecords( $result ) ){
		while( $row = mysql_fetch_assoc($result) ){
			array_push($data, $row);
		}

		freeResultSet( $result );
	}

	return $data;
}

function getSimpleArray( $connection, $query, $key ){
	$result = getResultSet( $connection, $query );
	$data = array();

	if ( hasRecords( $result ) ){
		while( $row = mysql_fetch_assoc($result) ){
			array_push($data, $row[$key]);
		}

		freeResultSet( $result );
	}

	return $data;
}

function getKeyValueArray( $connection, $query ){
	$result = getResultSet( $connection, $query );
	$data = array();

	if ( hasRecords( $result ) ){
		while( $row = mysql_fetch_row( $result ) ){
			$data[ $row[0] ] = $row[1];
		}

		freeResultSet( $result );
	}

	return $data;
}

function getSingleColumn( $connection, $query, $key ){
	$result = getResultSet( $connection, $query );
	$data = array();

	if ( hasRecords( $result ) ){
		while( $row = mysql_fetch_assoc($result) ){
			array_push($data, $row[$key]);
		}

		freeResultSet( $result );
	}

	return $data;
}

function getSingleRow( $connection, $query ){
	$result = getResultSet( $connection, $query );
	$data = "NULL";

	if ( hasRecords( $result ) ){
		while( $row = mysql_fetch_assoc($result) ){
			$data = $row;
		}

		freeResultSet( $result );
	}

	return $data;
}

function getSingleValue( $connection, $query, $key ){
	$result = getResultSet( $connection, $query );
	$data = "NULL";

	if ( hasRecords( $result ) ){
		while( $row = mysql_fetch_assoc($result) ){
			$data = $row[ $key ];
		}

		freeResultSet( $result );
	}

	return $data;
}

function getBoolean( $connection, $query ){
	$result = getResultSet( $connection, $query );
	$data = FALSE;

	if ( hasRecords( $result ) ){
		$data = TRUE;
		freeResultSet( $result );
	}

	return $data;
}

function setData( $connection, $query ){
	$result = getResultSet( $connection, $query );
}

function setDataGetID( $connection, $query ){
	$result = getResultSet( $connection, $query );
	return mysql_insert_id( $connection );
}

function getColumnData( $connectino, $records, $key ){
	$result = getResultSet( $connection, $query );
	$column = array();

	if ( $records != "NULL" && $records != NULL && count($records)>0 ){
		foreach( $records as $record ){
			array_push( $column, $record[ $key ] );
		}
	}

	return $column;
}

function getList( $connection, $query, $key ){
	$result = getResultSet( $connection, $query );
	$list = "";

	if ( hasRecords( $result ) ){
		$first = TRUE;
		while( $row = mysql_fetch_assoc( $result ) ){
			if ( !$first )	$list .= ", ";
			$list .= $row[ $key ];
			$first = FALSE;
		}

		freeResultSet( $result );
	}

	return $list;
}

function processStringFromFile( $text ){
	$rtext = replaceText( $text, "\n", "");
	$rtext = replaceText( $rtext, "\t", "");
	$rtext = replaceText( $rtext, "\r", "");
	
	return $rtext;
}

function formatKeyword( $keyword = null ){
	if ( isGood( $keyword ) )
		return sanitize( strtolower( trim( $keyword ) ) );
	else 
		return $keyword;
}

function sanitize( $text = null, $rich_text = FALSE ){
	if ( isGood( $text ) ){
		$rtext = ( $rich_text ) ? removeSomeHTML( $text ) : removeHTML( $text );
		$rtext = checkForApostrophy( $rtext );
		$rtext = removeNL( $rtext );
		
		return $rtext; 
	}
	else 
		return $text;	
}

function replaceText( $text, $what, $with ){
	return preg_replace( "/".$what."/", $with, $text );
}

function checkForApostrophy( $text ){
	if ( isGood( $text ) )
		return str_replace("'", "&#39;", $text);
	else 
		return $text;
}

function removePunctuation( $text ){
	$rtext = preg_replace( "/'/", "", $text );
	$rtext = preg_replace( "/\"/", "", $rtext );
	$rtext = preg_replace( "/\./", "", $rtext );
	$rtext = preg_replace( "/!/", "", $rtext );
	$rtext = preg_replace( "/\?/", "", $rtext );
	$rtext = preg_replace( "/,/", "", $rtext );

	return $rtext;
}

function removeHTML( $text ){
	return strip_tags( $text, '<br/><br>' );
}

function removeSomeHTML( $text ){
	return strip_tags($text,'<br/><br><p><p/><b><i><u><a><ul><li><ol><span><div/><div><blockquote><img><img/><font><embed>');
}

function filterContent( $text ){

    // Remove navigation
    $filtered = STI_ContentUtils::stripNavigation($text);
    
    $allowable = '<a></a><b></b><br><br/><div></div><img></img><p></p><title></title>';
    
    //*****  strip-out scripts tags and content  *****
    while( stripos( $filtered, '<script' ) !== FALSE ){
        $begin = stripos( $filtered, '<script' );
        $end = stripos( $filtered, '</script>', $begin);
        $filtered = substr( $filtered, 0, $begin ).substr( $filtered, $end + 9 );
    }
    
    //*****  style scripts tags and content  *****
    while( stripos( $filtered, '<style' ) !== FALSE ){
        $begin = stripos( $filtered, '<style' );
        $end = stripos( $filtered, '</style>', $begin);
        $filtered = substr( $filtered, 0, $begin ).substr( $filtered, $end + 8 );
    }
    
    //*****  removing form tags from content  *****
    while( stripos( $filtered, '<form' ) !== FALSE ){
        $begin = stripos( $filtered, '<form' );
        $end = stripos( $filtered, '</form>', $begin);
        $filtered = substr( $filtered, 0, $begin ).substr( $filtered, $end + 7 );
    }
    
    preg_match_all('/<form(.*?)form>/s', $filtered, $matches);
    $count = count($matches[0]);
    if($count){
        for($i=0; $i<$count; $i++){
            $fromBlock = $matches[0][$i];
            $filtered = str_replace($fromBlock,'', $filtered);
        }
    }
    
    //***** end of : removing form tags from content  *****
    
    
    $tmp = preg_replace("/^\s+|\s+$/u", '', strip_tags( $filtered, $allowable ));
    
    return $tmp;
}

function removeNL( $text ){
	if ( preg_match( "[a-zA-Z0-9]", $text ) )
		return nl2brr( $text );
	else 
		return	preg_replace("/\r\n|\n|\r/", "", $text);
}

function nl2brr( $text ){
    return preg_replace("/\r\n|\n|\r/", "<br/>", $text);
}

function br2nl( $text ){
    $text = str_replace("\r\n", "\n", $text); // brand from windows-returns, *nix-returns
    $text = str_replace("<br />\n", "\n", $text); // to retrieve it
    return $text;
}

function json2js( $text ){
	$rtext = preg_replace( "/{/", "[", $text );
	$rtext = preg_replace( "/}/", "]", $rtext );
	$rtext = preg_replace( "/,/", "],[", $rtext );
	$rtext = preg_replace( "/\:\[/", ",[[", $rtext );
	$rtext = preg_replace( "#\\\/#", "/", $rtext );
		
	return $rtext;
}

function getFormattedDate(){
	return date('Y-m-d H:i:s');
}

function getFormattedTime( $start_time = null, $end_time = null ){
	$time = "By Appointment";
		
	if ( isGood( $start_time ) && isGood( $end_time ) ){
		if ( $start_time != "00:00:00" || $end_time != "00:00:00" ){
			$shour = substr( $start_time, 0, 2 );
			$smin = substr( $start_time, stripos( $start_time, ":" ) + 1, 2);				 
			$ehour = substr( $end_time, 0, 2 );
			$emin = substr( $end_time, stripos( $end_time, ":" ) + 1, 2); 
			
			$stime = "Midnight";	
			$etime = "Midnight";

			if ( $shour !== "00" || $smin !== "00" ){
				if ( $shour === "12" && $smin === "00" ){
					$stime = "Noon";
				}
				else if ( (int)$shour > 12 ){
					$stime = ((int)$shour - 12).":".$smin."pm";	
				}
				else{
					$stime = $shour.":".$smin."am";
				}					
			}
				
			if ( $ehour !== "00" || $emin !== "00" ){
				if ( $ehour === "12" && $emin === "00" ){
					$etime = "Noon";
				}
				else if ( (int)$ehour > 12 ){
					$etime = ((int)$ehour - 12).":".$emin."pm";	
				}
				else{
					$etime = $ehour.":".$emin."am";
				}
			}

			$time = $stime. " - ".$etime;
		}
	}

	return $time;
}
	

function array_flatten( $array ) {
  	if ( !is_array( $array ) ) {
    	return FALSE;
  	}
  
  	$result = array();
  	foreach ( $array as $key => $value) {
  		
    	if ( is_array($value) ) {
    		$recur = array_flatten( $value );
    		
    		$the_keys = array_keys( $recur );
    		foreach( $the_keys as $the_key ){
    			if ( array_key_exists( $the_key, $result ) ){
    				$val = $result[ $the_key ];
    				$val .= ','.$recur[ $the_key ];
    				$result[ $the_key ] = $val;
    			}
    			else{
    				$result[ $the_key ] = $recur[ $the_key ];
    			}
    		}      		    		
    	}
    	else {
    		if ( array_key_exists( $key, $result ) ){
    			$val = $result[ $key ];
    			$val .= ','.$value;
    			$result[ $key ] = $val;
    		}
    		else{
      			$result[ $key ] = $value;
    		}
    	}
  	}
  
  	return $result;
} 

function array_find_element_by_key( $key, $array ){
  	if ( array_key_exists( $key, $array ) )	 
  		return $array[ $key ];
  		
  	if ( is_array( $array ) ){
  		foreach ( $array as $k => $v ) {
    		if ( is_array( $v ) ) {
      			$val = array_find_element_by_key( $key, $v );
      			if ( isGood( $val ) ) {
        			return $val;
      			}
    		}
  		}
  	}
  	
  	return null;
}

function xmlencode( $text ){
	if ( strpos( $text, "&") )
		return replaceText( $text, "&", " &amp;" );
	else 
		return $text;
}

function sqlize( $csv_list = null ){
	$sql_list = $csv_list;
	
	if ( isGood( $csv_list ) ){
		if ( strpos( $csv_list, "," ) !== FALSE ){
			$items = explode( ",", $csv_list );
			$first = TRUE;
			foreach( $items as $item ){
				if ( $first )	$sql_list = "'".formatKeyword( $item )."'";
				else			$sql_list .= ",'".formatKeyword( $item )."'";
				$first = FALSE;
			}
		}
		else 
			$sql_list = "'".formatKeyword( $sql_list )."'";	
	}
	
	return $sql_list;
}

function normalize( $string = null ) {
    $table = array(
        'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
        'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
        'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
        'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
        'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
        'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
        'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r',
    );
    
    return strtr( $string, $table );
}
?>