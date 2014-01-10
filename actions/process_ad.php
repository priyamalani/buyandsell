<?php
include_once 'functions.php';
 
$error_msg = "";
 
if (isset($_POST['name'], $_POST['sellingPrice'],$_POST['category'],$_POST['imageFile1'])) {
    // Sanitize and validate the data passed in
    $name = $_POST['name'];
    $description = $_POST['descriptions'];
    $sellingPrice = $_POST['sellingPrice'];
    $actualPrice = $_POST['actualPrice'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    $estimatedDelivery = $_POST['estimatedDelivery'];
    $shippingCharges = $_POST['shippingCharges'];
    $returnPolicy = $_POST['returnPolicy'];
    $moreDetails = $_POST['moreDetails'];
    $imageFile1 = $_POST['imageFile1'];
    $imageFile2 = $_POST['imageFile2'];
    $imageFile3 = $_POST['imageFile3'];

   if (empty($error_msg)) {
        $query = "INSERT INTO product (product_name, product_desc, actual_price, selling_price, category_id, return_policy, info_1, info_2, info_3, quantity, estimated_delivery, shipping_charges, more_details) VALUES" .
        "('$name', '$description', '$actualPrice', '$sellingPrice', '$category', '$returnPolicy', '$imageFile1', '$imageFile2', '$imageFile3', '$quantity', '$estimatedDelivery', '$shippingCharges', '$moreDetails')"; 
        if (!mysql_query($query, $db_server))
            header('Location: ../404.php');
        else {
           header('Location: ../index.php');
        }
    }
}

?>