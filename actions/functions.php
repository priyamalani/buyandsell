<?php


include_once 'config.php';   // As functions.php is not included
session_start();

 
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


?>