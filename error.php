<?php
require_once 'actions/functions.php';

$error_msg = isGood($_SESSION['error_message'])? $_SESSION['error_message'] : 'Looks like something went wrong!'; 
?>

<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
	
	<body>

      <!-- Shopping cart Modal -->
     <?php include 'includes/shoppingCart.php'; ?>
      <!-- /.modal -->
           
      <?php include 'includes/navigation.php'; ?>
      <!-- Page content -->
      
      <div class="error-block blocky text-center">
         <div class="container">
            <h2>Oops <span class="color">Error</span>!!!</h2>
            <p class="error-para"><?=$error_msg?> <i class='icon-meh'></i> </p>
            
                <span class="icon-stack" style="font-size: 12em;">
                    <i class="icon-thumbs-up color"></i>
                    <i class="icon-ban-circle icon-stack-base text-error" style="color: #9D261D;"></i>
                </span>
            <hr>
                    <div class="link-list">
                      <h5>Take a look around our site</h5>
                      <a href="index.php">Home</a> <a href="aboutus.php">About us</a> <a href="support.php">Support</a> <a href="contactus.php">Contact Us</a> <a href="faq.php">FAQ</a>
                    </div>

            <div class="sep-bor"></div>
         </div>
      </div>
     
      
       <?php include 'includes/whatsNew.php'; ?>		
      
      
      
      <?php include 'includes/catchyBlock.php'; ?>
      
      <!-- CTA Starts -->
      <?php include 'includes/CTABlock.php'; ?>
      <!-- CTA Ends -->
      
      
      <?php include 'includes/footer.php'; ?>
        </body></html>