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
                       <strong>Ashok Ramesh</strong><br>
                       <!-- Address -->
                       795 Folsom Ave, Suite 600<br>
                       San Francisco, CA 94107<br>

                       <!-- Phone number -->
                       <abbr title="Phone">P:</abbr> (123) 456-7890.<br>
                       <a href="mailto:#">first.last@gmail.com</a>
                     </address>
                   </div>

                   <hr>
                   
                   <h4>My Recent Purchases</h4>

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
                           <td>1283</td>
                           <td>Nokia Asha</td>
                           <td>$230</td>
                           <td>Processing</td>
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
      <div class="blocky">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="cta">
                     <div class="row">
                        <div class="col-md-8 col-sm-8">
                           <h5><i class="icon-angle-right"></i> Lorem trist iquest <span class="color">siamet diam</span> ipsum dolor sitamt</h5>
                        </div>
                        <div class="col-md-4 col-sm-4">
                           <div class="cta-buttons pull-right">
                              <a href="#" class="btn btn-info btn-lg">Download</a> &nbsp; <a href="#" class="btn btn-danger btn-lg">Get It Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>               
            </div>
         </div>
      </div>
      <!-- CTA Ends -->
      
      
      <?php include 'includes/footer.php'; ?>
        </body></html>