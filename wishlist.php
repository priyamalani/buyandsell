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
                  <h3><i class="icon-user color"></i> &nbsp;Wish List</h3>
                  <table class="table table-striped tcart">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><a href="single-item.php">HTC One</a></td>
                        <td>$530</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><a href="single-item.php">Sony Xperia</a></td>
                        <td>$330</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><a href="single-item.php">Nokia Asha</a></td>
                        <td>$230</td>
                        <td>6</td>
                      </tr>  
                      <tr>
                        <td>4</td>
                        <td><a href="single-item.php">Xperia Tipo</a></td>
                        <td>$330</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td><a href="single-item.php">Apple iPhone</a></td>
                        <td>$730</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td><a href="single-item.php">Windows Mobile</a></td>
                        <td>$130</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td><a href="single-item.php">Galaxy SIII</a></td>
                        <td>$430</td>
                        <td>2</td>
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