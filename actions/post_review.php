<?php
include_once 'functions.php';
 
$error_msg = "";
 
if (isset($_POST['comment'], $_POST['productNo'])) {
    // Sanitize and validate the data passed in
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $rating = $_POST['rating'];
    $product_no = $_POST['productNo'];
    $comment = $_POST['comment'];
    
    if (empty($error_msg)) {
        $query = "INSERT INTO reviews (name, email, rating, product_no,comment ) VALUES" .
        "('$name', '$email', '$rating', '$product_no' ,'$comment')";
        if (!mysql_query($query, $db_server)){
            setSessionParameter('error_message', 'Unable to create profile');
            header('Location: ../error.php');
        }
        else {
            header('Location: ../single-item.php?item_id='.$_POST['productId']);
        }
    }
}

?>