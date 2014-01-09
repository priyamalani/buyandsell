<?php
include_once 'functions.php';
 
//sec_session_start(); // Our custom secure way of starting a PHP session.
//session_start();
 
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; // The hashed password.
    $id= login($email, $password);
 
    if ($id != FALSE) {
        // Login success 
        header('Location: ../account.php');
    } else {
        // Login failed 
        header('Location: ../login.php');
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}
?>