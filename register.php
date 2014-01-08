<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
	
	<body>

      <!-- Shopping cart Modal -->
     <?php include 'includes/shoppingCart.php'; ?>
      <!-- /.modal -->
           
      
      <?php include 'includes/navigation.php'; ?>
      <!-- Page content -->
      
      <div class="blocky">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="reg-login-info">
                     <h2>Login to Access Amazing Benefits <span class="color">!!!</span></h2>
                     <img src="images/back1.jpg" alt="" class="img-responsive img-thumbnail">
                     <p>Duis leo risus, vehicula luctus nunc. Quiue 
rhoncus, a sodales enim arcu quis turpis. Duis leo risus, condimentum ut
 posuere ac, vehicula luctus nunc. Quisque rhoncus, a sodales enim arcu 
quis turpis. Duis leo risus, vehicula luctus nunc. Quiue rhoncus, a 
sodales enim arcu quis turpis. Duis leo risus, condimentum ut posuere 
ac, vehicula luctus nunc. Quisque rhoncus, a sodales enim arcu quis 
turpis.</p>
                     <p>Duis leo risus, vehicula luctus nunc. Quiue 
rhoncus, a sodales enim arcu quis turpis. Duis leo risus, condimentum ut
 posuere ac, vehicula luctus nunc. Quisque rhoncus, a sodales enim arcu 
quis turpis. Duis leo risus, vehicula luctus nunc. Quiue rhoncus, a 
sodales enim arcu quis turpis. Duis leo risus, condimentum ut posuere 
ac, vehicula luctus nunc. Quisque rhoncus, a sodales enim arcu quis 
turpis.</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="register-login">
                     <div class="cool-block">
                        <div class="cool-block-bor">
                        
                           <h3 class="text-center">Register</h3>
                           <form class="form-horizontal" role="form"  method="POST" action="actions/process_register.php">
                             <div class="form-group">
                               <label for="inputName" class="col-lg-2 control-label">Name</label>
                               <div class="col-lg-10">
                                 <input class="form-control" id="inputName" name="username" placeholder="Name" type="text">
                               </div>
                             </div>                           
                             <div class="form-group">
                               <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                               <div class="col-lg-10">
                                 <input class="form-control" id="inputEmail1" name="email" placeholder="Email" type="email">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                               <div class="col-lg-10">
                                 <input class="form-control" id="inputPassword1" name="password" placeholder="Password" type="password">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="inputPassword1" class="col-lg-2 control-label">Re-Password</label>
                               <div class="col-lg-10">
                                 <input class="form-control" id="inputPassword1" name="rePassword" placeholder="Retype Password" type="password">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="inputEmail1" class="col-lg-2 control-label">City</label>
                               <div class="col-lg-10">
                                 <input class="form-control" id="inputCity" placeholder="City" name="city" type="text">
                               </div>
                             </div>                              
                             <div class="form-group">
                               <div class="col-lg-offset-2 col-lg-10">
                                 <div class="checkbox">
                                   <label>
                                     <input type="checkbox"> I Agree Terms &amp; Conditions
                                   </label>
                                 </div>
                               </div>
                             </div>
                             <div class="form-group">
                               <div class="col-lg-offset-2 col-lg-10">
                                 <button type="submit" class="btn btn-info">Register</button>
                                 <button type="reset" class="btn btn-default">Reset</button>
                               </div>
                             </div>
                           </form>
                           
                        </div>
                     </div>   
                  </div>
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