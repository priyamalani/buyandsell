<?php
/***********************************
*  db_accessor.php
*  
*  company: Site Technologies Inc.
*  project: Veloxsites
*  author: Priya Malani
*  date: May 4th, 2011
*  path: /root/engine/lib/
*  desc: This file is used to manage the connection between the application and the database. This file should not be directly included into PHP pages - it is automatically included and invoked when db_functions.php is included on the PHP page.
*  
*  ---------------------------
*  MODS (not for bug fixes - more for feature additions):
*  author:
*  desc:
*  date:
*
**************/
function openDBConn( $connection_params = null ){
    if ( isGood( $connection_params ) ){ 
        $host = $connection_params["host"];
        $port = $connection_params["port"];
        $user = $connection_params["user"];
        $pwd = $connection_params["pwd"];
        $name = $connection_params["name"];
    }
    else{
        $host = getDBServerName();
        $port = getDBServerPort();
        $user = getDBUser();
        $pwd = getDBPwd();
        $name = getAppDB();
    }
        
    $connection = mysql_connect( $host.":".$port, $user, $pwd, TRUE );

    if ( isGood( $connection ) ){
        if ( mysql_select_db( $name, $connection ) ){
            $status = mysql_query("SET NAMES utf8;", $connection);
            return $connection;
        }
   	else{
            setSessionParameter( "error_message", "DB Access Error - There was an error while trying to access the database. Please contact the system administrator to have this resolved.");
            header("Location:".getAbsoluteURL("error.php") );
            exit;
   	}
    }
    else{
	setSessionParameter( "error_message", "DB Connection Error - There was an error while trying to open a connection to the database. Please contact the system administrator to have this resolved.");
	header("Location:".getAbsoluteURL("error.php") );
	exit;
    }
}

function closeDBConn( $connection_object ){
   mysql_close( $connection_object );
}

function getResultSet( $connection, $query_string ){
   	$result = mysql_query( $query_string, $connection );

   	if ( isGood( $result ) ){
 		return $result;
   	}
	else {
		setSessionParameter( "error_message", "SQL Error - There was an error in trying to run a query on the database. Please contact the system administrator to have this resolved.");
		header("Location:".getAbsoluteURL("error.php") );
		exit;
	}
}

function freeResultSet( $result_object ){
   mysql_free_result( $result_object );
}

function hasRecords ( $result_object ){
   if ( mysql_num_rows( $result_object ) > 0 ){
      return TRUE;
   }
   else{
      return FALSE;
   }
}
?>