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
                     </ul>
                  </div>
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
                       <thead>
                         <tr>
                           <th>Date</th>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Price</th>
                           <th>Views</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <td>25-08-12</td>
                           <td>4423</td>
                           <td><a href="single-item.php" id="">HTC One</a></td>
                           <td>$530</td>
                           <td>31</td>
                         </tr>
                         <tr>
                           <td>15-02-12</td>
                           <td>6643</td>
                           <td><a href="single-item.php" id="">Nokia</a></td>
                           <td>$330</td>
                           <td>20</td>
                         </tr>
                         <tr>
                           <td>14-08-12</td>
                           <td>1283</td>
                           <td><a href="single-item.php" id="">Samsung</a></td>
                           <td>$230</td>
                           <td>5</td>
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