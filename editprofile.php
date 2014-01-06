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
                  <h3><i class="icon-user color"></i> &nbsp;Edit Profile</h3>
                  <!-- Your details -->
                  <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label for="inputName" class="col-md-2 control-label">Name</label>
                      <div class="col-md-4">
                        <input class="form-control" id="inputName" placeholder="Name" type="text">
                      </div>
                    </div>            
                    <div class="form-group">
                      <label for="inputEmail1" class="col-md-2 control-label">Email</label>
                      <div class="col-md-4">
                        <input class="form-control" id="inputEmail1" placeholder="Email" type="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPhone" class="col-md-2 control-label">Phone Number</label>
                      <div class="col-md-4">
                        <input class="form-control" id="inputPhone" placeholder="Phone" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputCountry" class="col-md-2 control-label">Country</label>
                      <div class="col-md-4">
                        <select class="form-control">
                          <option selected="selected">Select Country</option>
                          <option>USA</option>
                          <option>India</option>
                          <option>Canada</option>
                          <option>UK</option>
                        </select>
                      </div>
                    </div>              
                    <div class="form-group">
                        <label for="inputAddress" class="col-md-2 control-label">Address</label>
                        <div class="col-md-4">
                           <textarea class="form-control" rows="3" placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputZip" class="col-md-2 control-label">Zip Code</label>
                      <div class="col-md-4">
                        <input class="form-control" id="inputZip" placeholder="Zip Code" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputUsername" class="col-md-2 control-label">Username</label>
                      <div class="col-md-4">
                        <input class="form-control" id="inputUsername" placeholder="Username" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="col-md-2 control-label">Password</label>
                      <div class="col-md-4">
                        <input class="form-control" id="inputPassword" placeholder="Password" type="password">
                      </div>
                    </div>                    
                    <div class="form-group">
                      <div class="col-md-offset-2 col-md-4">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Accept Terms &amp; Conditions
                          </label>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group">
                      <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="btn btn-danger">Save Changes</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                      </div>
                    </div>
                  </form> 
                   
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