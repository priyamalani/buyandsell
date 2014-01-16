<?php
include_once 'functions.php';

$error_msg = "";
 
if (isset($_POST['name'], $_POST['sellingPrice'],$_POST['baseCategory'])) {
    // Sanitize and validate the data passed in
    $mem_id = $_SESSION['id'];
    $name = $_POST['name'];
    $description = $_POST['descriptions'];
    $sellingPrice = $_POST['sellingPrice'];
    $actualPrice = $_POST['actualPrice'];
    $quantity = $_POST['quantity'];
    $category = isset($_POST['subCategory']) ? $_POST['subCategory'] : $_POST['baseCategory'];
    $estimatedDelivery = $_POST['estimatedDelivery'];
    $shippingCharges = $_POST['shippingCharges'];
    $returnPolicy = $_POST['returnPolicy'];
    $moreDetails = $_POST['moreDetails'];
    $imageFile1 = $_FILES['imageFile1']['name'];
    $imageFile2 = $_FILES['imageFile2']['name'];
    $imageFile3 = $_FILES['imageFile3']['name'];
    $product_id = mt_rand();
    
    
    $location = '../images/ads/'.$_SESSION['id'].'/';
    if (!file_exists($location)) {
        mkdir($location, 0777, true);
    }
    if(isset($_FILES['imageFile1'])){
    $target = $location.$_FILES['imageFile1']['name'];
    move_uploaded_file( $_FILES['imageFile1']['tmp_name'], $target);
    }
    if(isset($_FILES['imageFile2'])){
    $target = $location.$_FILES['imageFile2']['name'];
    move_uploaded_file( $_FILES['imageFile2']['tmp_name'], $target);
    }
    if(isset($_FILES['imageFile3'])){
    $target = $location.$_FILES['imageFile3']['name'];
    move_uploaded_file( $_FILES['imageFile3']['tmp_name'], $target);
    }
    
   if (empty($error_msg)) {
        $query = "INSERT INTO product (product_name, product_desc, actual_price, selling_price, category_id, return_policy, info_1, info_2, info_3, quantity, estimated_delivery, shipping_charges, more_details, product_id, members_id) VALUES" .
        "('$name', '$description', '$actualPrice', '$sellingPrice', '$category', '$returnPolicy', '$imageFile1', '$imageFile2', '$imageFile3', '$quantity', '$estimatedDelivery', '$shippingCharges', '$moreDetails', '$product_id', '$mem_id')"; 
        if (!mysql_query($query, $db_server)){
            header('Location: ../404.php');
        }
        else {
           header('Location: ../account.php');
        }
    }
}

?>