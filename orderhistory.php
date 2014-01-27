<?php
require_once 'actions/functions.php';

if(isset($_SESSION['id'])){
$orderHistory = getOrderHistory($_SESSION['id']);    
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
            <h2><i class="icon-user color"></i> <?echo $_SESSION['name'];?> <small> Account ID: <? echo $_SESSION['id'];?></small></h2>
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
                  <h3><i class="icon-folder-open color"></i> &nbsp;Order History</h3>
                  <!-- Your details -->
                  

                  <table class="table table-striped tcart">
                    <thead>
                      <tr>
                        <th>Date & Time</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      for($i=0; $i<count($orderHistory);$i++){
                      echo '<tr>
                            <td>'.$orderHistory[$i]['order_date'].'</td>
                            <td>'.$orderHistory[$i]['id'].'</td>
                            <td>'.$orderHistory[$i]['product_name'].'</td>
                            <td>'.$orderHistory[$i]['selling_price'].'</td>
                            <td>'.$orderHistory[$i]['status'].'</td>
                          </tr>';
                      }
                      ?>
                                                                                                                                  
                    </tbody>
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
<?}
 else {
    header('Location: login.php');
}
?>