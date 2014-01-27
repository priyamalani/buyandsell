<?php
include_once 'functions.php';
 
$error_msg = "";
 
if (isset($_POST['members_id'], $_POST['productNo'])) {
    
    $product_no = $_POST['productNo'];
    $members_id = $_POST['members_id'];
    
    $query = "SELECT * FROM wishlist where product_no=".$product_no." and members_id=".$members_id;
    $result = mysql_query($query);
    if (!$result) die ("Database access failed: " . mysql_error());
    $rows = mysql_num_rows($result);
    if($rows>0){
        header('Location: ../wishlist.php');
    }
    
    elseif (empty($error_msg)) {
        $query = "INSERT INTO wishlist (product_no, members_id ) VALUES" .
        "('$product_no' ,'$members_id')";
        if (!mysql_query($query, $db_server)){
            setSessionParameter('error_message', 'Unable to create profile');
            header('Location: ../error.php');
        }
        else {
            header('Location: ../wishlist.php');
        }
    }
}

?>