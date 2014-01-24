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
$important = isset($_REQUEST['important']) ? 'IMPORTANT: ' : '';

if(!strpos($actual_link, 'contactus.php')){
$message = "From : ".$name.' 
    
Time : '.date('l jS \of F Y h:i:s A').'
    
    
'.$message.'
    

With reference to your posting on ShopAndSell. Below is the link to your posting.        
'.$actual_link;
}
else{
    $to = 'priya.n.malani@gmail.com';
    $subject = 'Mail from contact us page ShopAndSell';
    $subject = $important. $subject;
    $message = "From : ".$name.' 
    
'.$message.'

       
Time : '.date('l jS \of F Y h:i:s A');
}
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);

header('Location: ../thank-you.php');


?>
