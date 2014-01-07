<?php
/***********************************
*  login.php
*  
*  company: Site Technologies Inc.
*  project: Veloxsites Administration (VSS)
*  author: Priya Malani
*  date: February 26th, 2013
*  path: /root/engine/actions/
*  desc: This is the login action page for administrative login function.
*   
*  ---------------------------
*  MODS (not for bug fixes - more for feature additions):
*  author: 
*  desc: 
*  date: 
*
**************/
include_once dirname(dirname(__FILE__))."/engine/lib/configuration.php";
include_once dirname(dirname(__FILE__))."/engine/lib/session_manager.php";
include_once dirname(dirname(__FILE__))."/engine/lib/db_functions.php";

$email = getFormParameter('email');
$password = getFormParameter('password');
$user_info = getLoginInformation( $email );

if ( isGood( $user_info ) ){
	if ( md5( $password ) != $user_info["password"] ){
		setSessionParameter( 'message','You have entered an incorrect password. Please try again or click the "Forgot Password" button to have your password reset.');
		header('Location:'.getAbsoluteURL("index.php") );
	}
	else{
		if ( $user_info["active"] === "1" ){
			setProfile( $user_info );
			setLastDate( getUserID() );
		
			if ( getUserRoleID() === "4" )
				header('Location:'.getAbsoluteURL("actions/process_invoke_site_submit.php?busId=".getUserBusinessID( getUserID() ) ) );
			else
				header('Location:'.getAbsoluteURL("index.php") );
		}
		else{
			setSessionParameter( "message","The account you've attempted to use has been deactivated. Please notify the site administrator to determine the cause and potentially get activated again.");
			header('Location:'.getAbsoluteURL("index.php") );
		}
	}
}
else{
	setSessionParameter( "message","The email you entered was not found in the system. Please try again or notify the site administrator if you wish to obtain an account on this system.");
	header('Location:'.getAbsoluteURL("index.php") );
}

closeDBConnection();

exit;
?>