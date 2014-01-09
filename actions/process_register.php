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
    if($rows>1){
        header('Location: ../404.php');
        die("Email Exists");
    }
    elseif (empty($error_msg)) {
        $query = "INSERT INTO members (username, email, password, salt) VALUES" .
        "('$username', '$email', '$password', '$random_salt')";
        if (!mysql_query($query, $db_server))
            header('Location: ../404.php');
        else {
            header('Location: ../account.php');
        }
    }
}

?>