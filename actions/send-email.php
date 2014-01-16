<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'functions.php';

$email = getParameter('email');

$to = $email;
$subject = 'With reference to your posting on ShopAndSell';
$name = $_REQUEST['name'];
$from = $_REQUEST['userEmail'];
$message = $_REQUEST['userMessage'];
$actual_link = $_SERVER['HTTP_REFERER'];
$message = "From : ".$name.' 
    
'.$message.'
    

With reference to your posting on ShopAndSell. Below is the link to your posting.        
'.$actual_link;
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);

header('Location: ../thank-you.php');


?>
