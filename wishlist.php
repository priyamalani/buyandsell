<?php
require_once 'actions/functions.php';

if(isset($_SESSION['id'])){
$wishlist = getWishList($_SESSION['id']);    
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
                  <h3><i class="icon-heart color"></i> &nbsp;Wish List</h3>
                  <table class="table table-striped tcart">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity Available</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        for($i=0; $i<count($wishlist); $i++){
                            $count = $i+1;
                        echo '<tr>
                            <td>'.$count.'</td>
                            <td><a href="single-item.php?item_id='.$wishlist[$i]['product_id'].'">'.$wishlist[$i]['product_name'].'</a></td>
                            <td>'.$wishlist[$i]['selling_price'].'</td>
                            <td>'.$wishlist[$i]['quantity'].'</td>
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