<?php
include_once 'functions.php';
 
$error_msg = "";
 
if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    // Sanitize and validate the data passed in
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $seller = $_POST['seller'];
    $id = $_POST['id'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }
    if (strlen($password) <= 0) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }
    
    $query = "SELECT * FROM members where id='".$id."'";
    $result = mysql_query($query);
    if (!$result) die ("Database access failed: " . mysql_error());
    $rows = mysql_num_rows($result);
    if(count($rows)<1){
        header('Location: ../404.php');
        die("Email Exists");
    }
    elseif (empty($error_msg)) {
        $query = "UPDATE members SET name= '".$name."' ,email= '".$email."' ,phone= '".$phoneNumber."' ,country= '".$country."' ,address= '".$address."' ,zip= '".$zip."' ,username= '".$username."' ,password= '".$password."' ,seller= '".$seller."' where id=".$id;
        if (!mysql_query($query, $db_server))
            header('Location: ../404.php');
        else {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['name'] = $name;
            $_SESSION['username'] = $username;
            $_SESSION['country'] = $country;
            $_SESSION['address'] = $address;
            $_SESSION['zip'] = $zip;
            $_SESSION['seller'] = $seller;
            $_SESSION['phone'] = $phoneNumber;
            header('Location: ../account.php');
        }
    }
}

?>