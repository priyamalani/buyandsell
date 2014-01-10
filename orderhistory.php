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
                  <div class="sidey">
                     <ul class="nav">
                         <li><a href="account.php">My Account</a></li>
                         <li><a href="wishlist.php">Wish List</a></li>
                         <li><a href="orderhistory.php">Order History</a></li>                         
                         <li><a href="editprofile.php">Edit Profile</a></li>
                         <li><a href="post-ad.php">Post Ad</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-9">
                  <h3><i class="icon-user color"></i> &nbsp;Order History</h3>
                  <!-- Your details -->
                  

                  <table class="table table-striped tcart">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>25-08-12</td>
                        <td>4423</td>
                        <td>HTC One</td>
                        <td>$530</td>
                        <td>Completed</td>
                      </tr>
                      <tr>
                        <td>15-02-12</td>
                        <td>6643</td>
                        <td>Sony Xperia</td>
                        <td>$330</td>
                        <td>Shipped</td>
                      </tr>
                      <tr>
                        <td>14-08-12</td>
                        <td>1243</td>
                        <td>Nokia Asha</td>
                        <td>$230</td>
                        <td>Processing</td>
                      </tr>  
                      <tr>
                        <td>14-08-12</td>
                        <td>1283</td>
                        <td>Xperia Tipo</td>
                        <td>$330</td>
                        <td>Shipping</td>
                      </tr>
                      <tr>
                        <td>14-08-12</td>
                        <td>8283</td>
                        <td>Apple iPhone</td>
                        <td>$730</td>
                        <td>Processing</td>
                      </tr>
                      <tr>
                        <td>14-08-12</td>
                        <td>3283</td>
                        <td>Windows Mobile</td>
                        <td>$130</td>
                        <td>Shipped</td>
                      </tr>
                      <tr>
                        <td>14-08-12</td>
                        <td>1523</td>
                        <td>Galaxy SIII</td>
                        <td>$430</td>
                        <td>Completed</td>
                      </tr>                                                                                                             
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