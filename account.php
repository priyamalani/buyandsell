<?php
require_once 'actions/functions.php';
?>
<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
	<body>

      <!-- Shopping cart Modal -->
     <?php include 'includes/shoppingCart.php'; ?>
      <!-- /.modal -->
           
    
      <?php include 'includes/navigation.php'; ?> 
      <!-- Page title -->
      <div class="page-title">
         <div class="container">
            <h2><i class="icon-desktop color"></i> My Account <small>Subtext for header</small></h2>
            <hr>
         </div>
      </div>
      <!-- Page title -->
      
      <!-- Page content -->
      
      <div class="account-content">
         <div class="container">
            
            <div class="row">
               <div class="col-md-3">
                 <?php include 'includes/accountSideNav.php'; ?> 
               </div>
               <div class="col-md-9">
                  <h3><i class="icon-user color"></i> &nbsp;My Account</h3>
                  <!-- Your details -->
                   <div class="address">
                     <address>
                       <!-- Your name -->
                       <strong><?echo $_SESSION['name'];?></strong><br>
                       <!-- Address -->
                       <p>
                           <abbr title="Address"><i class="icon-home"></i></abbr> :
                           <?echo $_SESSION['address'];?>
                       </p>
                       <!-- Phone number -->
                       <abbr title="Phone"><i class="icon-phone"></i></abbr> : <a href="tel:<?echo $_SESSION['phone'];?>"><?echo $_SESSION['phone'];?></a><br>
                       <abbr title="Email"><i class="icon-envelope"></i></abbr> : <a href="mailto:<?echo $_SESSION['email'];?>"><?echo $_SESSION['email'];?></a>
                     </address>
                   </div>

                   <hr>
                   
                   <h4>My Posting</h4>

                     <table class="table table-striped tcart">
                       
                        <?php
                             echo (getMembersAllProduct($_SESSION['id']));
                        ?>                                              
                       
                     </table>
               </div>
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