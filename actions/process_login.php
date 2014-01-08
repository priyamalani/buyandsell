<?php
include_once 'functions.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_POST['inputEmail1'], $_POST['inputPassword1'])) {
    $email = $_POST['inputEmail1'];
    $password = $_POST['inputPassword1']; // The hashed password.
 
    if (login($email, $password, $mysqli) == true) {
        // Login success 
        header('Location: ../account.php');
    } else {
        // Login failed 
        header('Location: ../index.php');
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}
?>