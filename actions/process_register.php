<?php
include_once 'functions.php';
 
$error_msg = "";
 
if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    // Sanitize and validate the data passed in
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $random_salt = mt_rand();
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }
    if (strlen($password) <= 0) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }

//    // TODO: 
//    // We'll also have to account for the situation where the user doesn't have
//    // rights to do registration, by checking what type of user is attempting to
//    // perform the operation.
//        // Create a random salt
////        $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));
//        $random_salt = mt_rand();
//        // Create salted password 
////        $password = hash('sha512', $password . $random_salt);
    
    $query = "SELECT * FROM members where email='".$email."'";
    $result = mysql_query($query);
    if (!$result) die ("Database access failed: " . mysql_error());
    $rows = mysql_num_rows($result);
    if($rows>0){
        setSessionParameter('error_message', 'Email already exists please <a href="login.php">login</a>');
        header('Location: ../error.php');
        die("Email Exists");
    }
    elseif (empty($error_msg)) {
        $query = "INSERT INTO members (username, email, password, salt) VALUES" .
        "('$username', '$email', '$password', '$random_salt')";
        if (!mysql_query($query, $db_server)){
            setSessionParameter('error_message', 'Unable to create profile');
            header('Location: ../error.php');
        }
        else {

            $subject = 'Welcome to ShopSellRent - Online Classifieds';

            $headers = "From: info@shopsellrent.com \r\n";
            $headers .= "Reply-To: info@shopsellrent.com \r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $message = "<html>
            <head>
            <style>
            body {
             font-family: 'Open Sans',sans-serif;
            }
            #logo{
            background: #1ABC9C;
            width: 100%;
            }
            .color {
                color: #1ABC9C;
            }
            </style>
            </head>
            <body>
            <img id='logo' src='http://www.shopsellrent.com/images/green_logo.png' alt='ShopSellRent'/>
            <h3>Welcome to <span class='color'>ShopSellRent</span> - Online  <span class='color'>Classifieds</span></h3>
            <p>Hello ".$username.",</p>
            <p>You have been registered with the following information:</p><table>
            <tr>
            <td>Login: </td>
            <td>".$email."</td>
            </tr>
            <tr>
            <td>Password: </td>
            <td>".$password."</td>
            </tr>
            </table><p>To login use this link: 
                    <a href='http://www.shopsellrent.com/login.php'>www.ShopSellRent.com/login.php</a></p>
            </body></html>";
            mail($email,$subject,$message,$headers);
            header('Location: ../login.php');
        }
    }
}

?>