<?php
require_once 'config.php';   // As functions.php is not included

 
//function sec_session_start() {
//    $session_name = 'sec_session_id';   // Set a custom session name
//    $secure = SECURE;
//    // This stops JavaScript being able to access the session id.
//    $httponly = true;
//    // Forces sessions to only use cookies.
//    if (ini_set('session.use_only_cookies', 1) === FALSE) {
//        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
//        exit();
//    }
//    // Gets current cookies params.
//    $cookieParams = session_get_cookie_params();
//    session_set_cookie_params($cookieParams["lifetime"],
//        $cookieParams["path"], 
//        $cookieParams["domain"], 
//        $secure,
//        $httponly);
//    // Sets the session name to the one set above.
//    session_name($session_name);
//    session_start();            // Start the PHP session 
//    session_regenerate_id();    // regenerated the session, delete the old one. 
//}


function login($email, $password) {
    
    $query = "SELECT * FROM members where email='".$email."'";
        $result = mysql_query($query);
        if (!$result) die ("Database access failed: " . mysql_error());
        $rows = mysql_num_rows($result);
        if($rows>1){
            return FALSE;
        }
        elseif(mysql_result($result, 0 ,'password')==$password){
            $_SESSION['id'] = mysql_result($result, 0 ,'id');
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['name'] = mysql_result($result, 0 ,'name');
            $_SESSION['username'] = mysql_result($result, 0 ,'username');
            $_SESSION['country'] = mysql_result($result, 0 ,'country');
            $_SESSION['address'] = mysql_result($result, 0 ,'address');
            $_SESSION['zip'] = mysql_result($result, 0 ,'zip');
            $_SESSION['seller'] = mysql_result($result, 0 ,'seller');
            $_SESSION['phone'] = mysql_result($result, 0 ,'phone');
            return TRUE;
        }
        else { return FALSE;}

}

function getMembersDetails($id) {
    
    $query = "SELECT * FROM members where id='".$id."'";
        $result = mysql_query($query);
        if (!$result) die ("Database access failed: " . mysql_error());
        $rows = mysql_num_rows($result);
        if($rows>1){
            return FALSE;
        }
        else{
            $return['id'] = $id;
            $return['email'] = mysql_result($result, 0 ,'email');
            $return['name'] = mysql_result($result, 0 ,'name');
            $return['username'] = mysql_result($result, 0 ,'username');
            $return['country'] = mysql_result($result, 0 ,'country');
            $return['address'] = mysql_result($result, 0 ,'address');
            $return['zip'] = mysql_result($result, 0 ,'zip');
            $return['seller'] = mysql_result($result, 0 ,'seller');
            $return['phone'] = mysql_result($result, 0 ,'phone');
            return $return;
        }

}

function checkbrute($user_id, $mysqli) {
    // Get timestamp of current time 
    $now = time();
 
    // All login attempts are counted from the past 2 hours. 
    $valid_attempts = $now - (2 * 60 * 60);
 
    if ($stmt = $mysqli->prepare("SELECT time 
                             FROM login_attempts <code><pre>
                             WHERE user_id = ? 
                            AND time > '$valid_attempts'")) {
        $stmt->bind_param('i', $user_id);
 
        // Execute the prepared query. 
        $stmt->execute();
        $stmt->store_result();
 
        // If there have been more than 5 failed logins 
        if ($stmt->num_rows > 5) {
            return true;
        } else {
            return false;
        }
    }
}

function login_check($mysqli) {
    // Check if all session variables are set 
    if (isset($_SESSION['user_id'], 
                        $_SESSION['username'], 
                        $_SESSION['login_string'])) {
 
        $user_id = $_SESSION['user_id'];
        $login_string = $_SESSION['login_string'];
        $username = $_SESSION['username'];
 
        // Get the user-agent string of the user.
        $user_browser = $_SERVER['HTTP_USER_AGENT'];
 
        if ($stmt = $mysqli->prepare("SELECT password 
                                      FROM members 
                                      WHERE id = ? LIMIT 1")) {
            // Bind "$user_id" to parameter. 
            $stmt->bind_param('i', $user_id);
            $stmt->execute();   // Execute the prepared query.
            $stmt->store_result();
 
            if ($stmt->num_rows == 1) {
                // If the user exists get variables from result.
                $stmt->bind_result($password);
                $stmt->fetch();
                $login_check = hash('sha512', $password . $user_browser);
 
                if ($login_check == $login_string) {
                    // Logged In!!!! 
                    return true;
                } else {
                    // Not logged in 
                    return false;
                }
            } else {
                // Not logged in 
                return false;
            }
        } else {
            // Not logged in 
            return false;
        }
    } else {
        // Not logged in 
        return false;
    }
}

function esc_url($url) {
 
    if ('' == $url) {
        return $url;
    }
 
    $url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);
 
    $strip = array('%0d', '%0a', '%0D', '%0A');
    $url = (string) $url;
 
    $count = 1;
    while ($count) {
        $url = str_replace($strip, '', $url, $count);
    }
 
    $url = str_replace(';//', '://', $url);
 
    $url = htmlentities($url);
 
    $url = str_replace('&amp;', '&#038;', $url);
    $url = str_replace("'", '&#039;', $url);
 
    if ($url[0] !== '/') {
        // We're only interested in relative links from $_SERVER['PHP_SELF']
        return '';
    } else {
        return $url;
    }
}

function getGoogleMap( $address = "", $country = "", $postal = "", $width = 300, $height = 300, $id='locMap' ){
	$location = $address.",".$country.",".$postal;
	$location = str_replace(" ", "+", $location);
	echo '	
		<iframe 
			id="'.$id.'"
			width="'.$width.'" 
			height="'.$height.'" 
			frameborder="0" 
			scrolling="no" 
			marginheight="0" 
			marginwidth="0" 
			src="http://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q='.$location.'&amp;aq=&amp;ie=UTF8&amp;hq=&amp;hnear='.$location.'&amp;z=14&amp;iwloc=&amp;output=embed"
			>
			</iframe>			
		';
}

function getMembersAllProduct($mem_id) {
    
    $query = "SELECT * FROM product where members_id='".$mem_id."'";
        $result = mysql_query($query);
        if (!$result) die ("Database access failed: " . mysql_error());
        $rows = mysql_num_rows($result);
        if($rows>0){
        for ($j = 0 ; $j < $rows ; ++$j)
        {   
            $return[$j]['create_date'] = mysql_result($result,$j,'create_date');
            $return[$j]['product_id'] = mysql_result($result,$j,'product_id');
            $return[$j]['selling_price'] = mysql_result($result,$j,'selling_price');
            $return[$j]['product_name'] = mysql_result($result,$j,'product_name');
            $return[$j]['info_1'] = mysql_result($result,$j,'info_1');
            $return[$j]['members_id'] = mysql_result($result,$j,'members_id');
            $return[$j]['product_desc'] = mysql_result($result,$j,'product_desc');
            $return[$j]['visits'] = mysql_result($result,$j,'visits');
            $return[$j]['product_no'] = mysql_result($result,$j,'product_no');
             
        }
        return $return;
        }
        else {
            return FALSE;
        }
}

function deleteItem($product_no){
        $query = "SELECT * FROM product where product_no='".$product_no."'";
        $result = mysql_query($query);
        if (!$result) die ("Database access failed: " . mysql_error());
        $rows = mysql_num_rows($result);
        if($rows>0){
            $res = deleteImage('../images/ads/'.mysql_result($result,0,'members_id').'/'.mysql_result($result,0,'info_1'));
            if($res){
            $query = "delete FROM product where product_no='".$product_no."'";
            $result = mysql_query($query);
            if (!$result) die ("Database access failed: " . mysql_error());
            else 
                return TRUE;
            }
        }
}

function deleteImage( $image = null ){
	if ( isGood( $image ) )
		if ( file_exists($image)  )
			return unlink( $image );
		else 	
			return FALSE;
	else 
		return FALSE;
}


function getProductDetails($product_id) {
    
    $query = "SELECT * FROM product where product_id='".$product_id."'";
        $result = mysql_query($query);
        if (!$result) die ("Database access failed: " . mysql_error());
        $rows = mysql_num_rows($result);
        if($rows>1){
            echo '<p>Too many posting with product id = '.$product_id;
        }
        elseif($rows==0){
            setSessionParameter('error_message', 'Looks like the product is no longer available');
            return FALSE;
        }
        else {
            $details = array();
            $details['create_date'] = mysql_result($result,0,'create_date');
            $details['product_id'] = mysql_result($result,0,'product_id');
            $details['product_name'] = mysql_result($result,0,'product_name');
            $details['selling_price'] = mysql_result($result,0,'selling_price');
            $details['visits'] = mysql_result($result,0,'visits');
            $details['info_1'] = mysql_result($result,0,'info_1');
            $details['info_2'] = mysql_result($result,0,'info_2');
            $details['info_3'] = mysql_result($result,0,'info_3');
            $details['members_id'] = mysql_result($result,0,'members_id');
            $details['shipping_charges'] = mysql_result($result,0,'shipping_charges');
            $details['quantity'] = mysql_result($result,0,'quantity');
            $details['product_desc'] = mysql_result($result,0,'product_desc');
            $details['more_details'] = mysql_result($result,0,'more_details');
            $details['actual_price'] = mysql_result($result,0,'actual_price');
            $details['category_id'] = mysql_result($result,0,'category_id');
            $details['estimated_delivery'] = mysql_result($result,0,'estimated_delivery');
            $details['return_policy'] = mysql_result($result,0,'return_policy');
            return $details;
        }
}



function getRecentProducts($count) {
    
    $query = "select * from product order by create_date desc limit 0,".$count;
        $result = mysql_query($query);
        if (!$result) die ("Database access failed: " . mysql_error());
        $rows = mysql_num_rows($result);
        if($rows>0){
            for ($j = 0 ; $j < $rows ; ++$j){ 
                echo'<li class="col-md-3">
                                 <a href="single-item.php?item_id='.mysql_result($result,$j,'product_id').'"><img src="images/ads/' . mysql_result($result,$j,'members_id') . '/' . mysql_result($result,$j,'info_1') . '" alt="" class="img-responsive"></a>
                                 <div class="carousel_caption">
                                     <h5><a href="single-item.php?item_id='.mysql_result($result,$j,'product_id').'">' . mysql_result($result,$j,'product_name') . '</a></h5>
                                     
                                     <a href="single-item.php?item_id='.mysql_result($result,$j,'product_id').'" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for ' . mysql_result($result,$j,'selling_price') . '</a>
                                 </div>
                              </li>';
            }
        }
        else {
            $res = False;
            return $res;
        }
}

function updatePageView($product_id){
    $query = "select visits from product where product_id=".$product_id;
    $result = mysql_query($query);
    $count = mysql_result($result,0,'visits');
    $count = $count+1;
    $query = "UPDATE product SET visits= '".$count."' where product_id=".$product_id;
        if (!mysql_query($query)){
            setSessionParameter('error_message', 'Unable to update page view');
            header('Location: ../error.php');
        }
}

function getMostViewedItem($count){
    $query = "select * from product order by visits desc limit 0,".$count;
        $result = mysql_query($query);
        if (!$result) die ("Database access failed: " . mysql_error());
        $rows = mysql_num_rows($result);
        if($rows>0){
            for ($j = 0 ; $j < $rows ; ++$j){ 
                echo '<div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="item">
                          <!-- Use the below link to put HOT icon -->
                          <div class="item-icon"><span>HOT</span></div>
                          <!-- Item image -->
                          <div class="item-image">
                            <a href="single-item.php?item_id='.mysql_result($result,$j,'product_id').'"><img src="images/ads/' . mysql_result($result,$j,'members_id') . '/' . mysql_result($result,$j,'info_1') . '" alt="" class="img-responsive"></a>
                          </div>
                          <!-- Item details -->
                          <div class="item-details">
                            <!-- Name -->
                            <h5><a href="single-item.php?item_id='.mysql_result($result,$j,'product_id').'">' . mysql_result($result,$j,'product_name') . '</a></h5>
                            <div class="clearfix"></div>
                            <!-- Para. Note more than 2 lines. -->
                            <p>' . substr(mysql_result($result,$j,'product_desc'),0,20) . '...</p>
                            <hr>
                            <!-- Price -->
                            <div class="item-price pull-left">'.mysql_result($result,$j,'selling_price').'</div>
                            <!-- Add to cart -->
                            <div class="pull-right"><a href="#" class="btn btn-danger btn-sm">Add to Cart</a></div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>';
            }
        }
        else {
            $res = False;
            return $res;
        }
}


function getCategory($parent_category = null, $name = null, $css = null, $default = FALSE, $noStyle = FALSE) {
    
    $query = "SELECT * FROM category where parent_category='".$parent_category."'";
        $result = mysql_query($query);
        if (!$result) die ("Database access failed: " . mysql_error());
        $rows = mysql_num_rows($result);
        if($rows>0){
        if($noStyle==FALSE){    
        echo '<select class="form-control" id="'.$name.'" name="'.$name.'" style="'.$css.'" required>';
        if($default!=FALSE)
        echo '<option>Please select</option>';
        for ($j = 0 ; $j < $rows ; ++$j)
        {   
             echo '<option value="'.mysql_result($result,$j,'id').'">'.mysql_result($result,$j,'category_name').'</option>';
        }
        echo '</select>';
        }
        else{
            $cat_name = array();
            for ($j = 0 ; $j < $rows ; ++$j){   
                 $cat_name[$j][0] = mysql_result($result,$j,'category_name');
                 $cat_name[$j][1] = mysql_result($result,$j,'id');
            }
                 return $cat_name;
        }
        }
        else {
            echo '<p>No Category</p>';
        }
}


function directory_exists( $path = null ){
	$success = FALSE;
	if ( $path !='' ){
		$directories = explode( "/", $path );
		$build_path = "";
		foreach ( $directories as $directory ){
			if ( $directories !='' ){
				$build_path .= "/".$directory;
                                if ( !file_exists( $build_path ) ){ $success = mkdir( $build_path, 0777, true ); }
                                else{                                $success = TRUE; }		 	
			}
		}
	}
	return $success;
}

function isGood(){
    $isGood = FALSE;

    if ( func_num_args() > 0 ){
        $vars = func_get_args();

        foreach( $vars as $var ){
            if ( isset( $var ) && $var !== "NULL" && $var !== "NIL" && !empty( $var ) && $var !== FALSE ){
                if ( is_array( $var ) )
                    $isGood = ( count($var)>0 ) ? TRUE : FALSE;
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


?>