<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'functions.php';

$product_no = getParameter('product_no');

deleteItem($product_no);
?>
