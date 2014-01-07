<?php
/***********************************
*  session_manager.php
*  
*  company: Site Technologies Inc.
*  project: Veloxsites
*  author: Priya Malani
*  date: May 4th, 2011
*  path: /root/engine/lib/
*  desc: This file is used to control how session are managed in the system. This file should be included in PHP pages that require access to functions that require session persistence.
*  
*  ---------------------------
*  MODS (not for bug fixes - more for feature additions):
*  author:
*  desc:
*  date:
*
**************/

session_start();

function setProfile( $info = null ){
    if ( isGood( $info ) ){
        setSessionParameter("user_id", $info["user_id"] );
    }
}

function hasProfile(){
    if ( hasSessionParameter("user_id") ){
        if ( isGood( getSessionParameter("user_id") ) )
            return TRUE;
        else
            return FALSE;
    }
    else
        return FALSE;
}

function getParameter( $param = null, $dataType = null ){
	$val = null;
	
	if ( isGood( $param ) ){
		$val = getURLParameter( $param );
		if( !isGood( $val ) )	$val = getFormParameter( $param );
		if( !isGood( $val ) )	$val = getSessionParameter( $param );
		
		//********  check datatype if requested  ************
		if ( isGood( $val, $dataType ) ){
			if ( !isDataType( $val, $dataType ) ){
				setSessionParameter( "error_message", "Parameter Datatype Error - There was an issue processing a passed parameter with an incorrect datatype. Please contact the system administrator to have this issue resolve.");
				header("Location:".getAbsoluteURL("error.php") );
				exit;
			}
		}
	}
	
	return $val;
}

function hasParameter( $param ){
	$exists = FALSE;
	
	if ( isGood( $param ) ){
		if ( isGood( getURLParameter( $param ) ) ){ $exists = TRUE; }
		if ( isGood( getFormParameter( $param ) ) ){ $exists = TRUE; }
		if ( hasSessionParameter( $param ) ){ $exists = TRUE; }
	}
	
	return $exists;	
}

function getURLParameter( $param = null, $dataType = null ){
	if ( isset( $_GET[$param] ) ){
		$val = $_GET[$param];
		
		//********  check datatype if requested  ************
		if ( isGood( $val, $dataType ) ){
			if ( !isDataType( $val, $dataType ) ){
				setSessionParameter( "error_message", "Parameter Datatype Error - There was an issue processing a passed parameter with an incorrect datatype. Please contact the system administrator to have this issue resolve.");
				header("Location:".getAbsoluteURL("error.php") );
				exit;
			}
		}
		
		return $val;
	}
	else
		return null;
}

function getFormParameter( $param = null, $dataType = null ){
	if ( isset( $_POST[$param] ) ){
		$val = $_POST[$param];
		
		//********  check datatype if requested  ************
		if ( isGood( $val, $dataType ) ){
			if ( !isDataType( $val, $dataType ) ){
				setSessionParameter( "error_message", "Parameter Datatype Error - There was an issue processing a passed parameter with an incorrect datatype. Please contact the system administrator to have this issue resolve.");
				header("Location:".getAbsoluteURL("error.php") );
				exit;
			}
		}
		
		return $val;
	}
	else
		return null;
}

function getSessionParameter( $param_name ){
	if ( isset( $_SESSION[ $param_name ] ) )
		return $_SESSION[ $param_name ];
	else
		return null;
}

function popSessionParameter( $param_name ){
	$param = getSessionParameter( $param_name );
	removeSessionParameter( $param_name );
	return $param;
}

function setSessionParameter( $param_name, $param_value ){
	$_SESSION[ $param_name ] = $param_value;
}

function hasSessionParameter( $param_name ){
	return isset( $_SESSION[ $param_name ] );
}

function removeSessionParameter( $param_name ){
	unset( $_SESSION[ $param_name ] );
}

function clearSessionParameter( $param_name ){
	unset( $_SESSION[ $param_name ] );
}

function destroySession(){
	$_SESSION = array();

	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '', time()-42000, '/');
	}

	session_destroy();
}

function startsWith($what, $where){
   return substr($where, 0, strlen($what)) === $what;
}

function endsWith($what, $where){
   $length = strlen($what);
   return !$length || substr($where, - $length) === $what;
}

function isDataType( $variable = null, $datatype = null ){
	switch ( $datatype ){
		case "int":
			return is_numeric( $variable );
			break;
			
		case "float":
			return is_float( $variable );
			break;
			
		case "string":
			return is_string( $variable);
			break;
		
		case "object":
			return is_object( $variable);
			break;
			
		case "array":
			return is_array( $variable );
			break;
			
		case "boolean":
			return is_bool( $variable );
			break;
		
		case "char":
			return ( is_string( $varaible ) && strlen( $variable ) == 1 ) ? TRUE : FALSE;
			break;
			
		case "alphanumeric":
			return ctype_alnum( $variable );
			break;
			
		case "alpha":
			return ctype_alpha( $variable );
			break;

		default:
			return FALSE;
			break;
	}
}

function isGood(){
	$isGood = FALSE;
	
	if ( func_num_args() > 0 ){
		$vars = func_get_args();

		foreach( $vars as $var ){
			if ( isset( $var ) && $var !== "NULL" && $var !== "NIL" && !empty( $var )  ){
				if ( is_array( $var ) ){
					$isGood = ( count($var)>0 ) ? TRUE : FALSE;
				}
				else
					$isGood = TRUE;
			}
			else
				$isGood = FALSE;
			
			if ( !$isGood ) break;
		}
	}
	
	return $isGood;
}

function debug( $var = "NULL", $name = "NULL" ){
	$list = ( isGood( $name ) ) ? $name.": " : "DEBUG: ";
	
	if ( isGood( $var ) ){
		if ( is_array( $var ) ){
			echo $list;
			print_r( $var );
			echo '<br/>';
		}
		else{
			echo $list.$var;
			echo '<br/>';
		}
	}
	else{
		if ( is_bool( $var ) ){
			echo 'BOOLEAN';
		}
		else{
			echo $list.'(nothing)';
			echo '<br/>';
		}
	}
}
?>