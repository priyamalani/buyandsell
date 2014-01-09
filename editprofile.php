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
                  <form class="form-horizontal" role="form" action="actions/update_profile.php" method="POST">
                      <input id="id" name="id" type="hidden" value="<? echo $_SESSION['id'];?>">
                    <div class="form-group">
                      <label for="inputName" class="col-md-2 control-label">Name</label>
                      <div class="col-md-4">
                        <input class="form-control" id="inputName" name="name" placeholder="Name" type="text" value="<? echo $_SESSION['name'];?>">
                      </div>
                    </div>            
                    <div class="form-group">
                      <label for="inputEmail1" class="col-md-2 control-label">Email</label>
                      <div class="col-md-4">
                        <input class="form-control" id="inputEmail1" name="email" placeholder="Email" type="email" value="<? echo $_SESSION['email'];?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPhone" class="col-md-2 control-label">Phone Number</label>
                      <div class="col-md-4">
                        <input class="form-control" id="inputPhone" name="phoneNumber" placeholder="Phone" type="text" value="<? echo $_SESSION['phone'];?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputCountry" class="col-md-2 control-label">Country</label>
                      <div class="col-md-4">
                        <select class="form-control" name="country">
                          <option selected="selected"><?if(isset($_SESSION['country'])) echo $_SESSION['country']; else echo 'Select Country';?></option>
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
                           <textarea class="form-control" rows="3" placeholder="Address" name="address"><? echo $_SESSION['address'];?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputZip" class="col-md-2 control-label">Zip Code</label>
                      <div class="col-md-4">
                        <input class="form-control" id="inputZip" placeholder="Zip Code" type="text" name="zip" value="<? echo $_SESSION['zip'];?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputUsername" class="col-md-2 control-label">Username</label>
                      <div class="col-md-4">
                        <input class="form-control" id="inputUsername" placeholder="Username" type="text" name="username" value="<? echo $_SESSION['username'];?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="col-md-2 control-label">Password</label>
                      <div class="col-md-4">
                        <input class="form-control" id="inputPassword" placeholder="Password" type="password" name="password" value="<? echo $_SESSION['password'];?>">
                      </div>
                    </div>  
                    <div class="form-group">
                      <label for="inputSeller" class="col-md-2 control-label">Seller</label>
                      <div class="col-md-4">
                        <select class="form-control" name="seller">
                          <option selected="selected">Owner</option>
                          <option>Retail</option>
                          <option>Other</option>
                        </select>
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