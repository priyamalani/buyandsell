<?php
include_once 'functions.php';
 
$error_msg = "";
 
if (isset($_POST['seller_id'], $_POST['productNo'])) {
    
    $product_no = $_POST['productNo'];
    $seller_id = $_POST['seller_id'];
    $buyer_id = $_POST['buyer_id'];
    $quantity = $_POST['quantity'];
    
    if (empty($error_msg)) {
        $query = "INSERT INTO order_history (product_no, seller_id, buyer_id, quantity ) VALUES" .
        "('$product_no' ,'$seller_id', '$buyer_id', '$quantity')";
        if (!mysql_query($query, $db_server)){
            setSessionParameter('error_message', 'Unable to create profile');
            header('Location: ../error.php');
        }
        else {
            $_SESSION['confirmation'] = mysql_insert_id();
            header('Location: ../confirmation.php');
        }
    }
}

?>