<?php
include_once 'functions.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$search = $_POST['search'];
if(isset($search)){
     header('Location: ../result.php?search='.$search);
}
?>
