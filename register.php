<?php
require_once 'actions/functions.php';

if(!isset($_SESSION['id'])){

?>
<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
	
	<body>

      <!-- Shopping cart Modal -->
     <?php include 'includes/shoppingCart.php'; ?>
      <!-- /.modal -->
           
      
      <?php include 'includes/navigation.php'; ?>
      <!-- Page content -->
      
      <?php
      $register = '';
      if(isset($_POST['registerEmail'])){
          $register = $_POST['registerEmail'];
      }
      ?>
      
      <div class="blocky">
         <div class="container">
            <div class="row">
<!--               <div class="col-md-6">
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
               </div>-->
               <div class="col-md-12">
                   <h2 class="text-center">Register to Access <span class="color">Amazing Benefits</span> !!!</h2>
                  <div class="register-login">
                     <div class="cool-block">
                        <div class="cool-block-bor">
                        
                           <h3 class="text-center">Register</h3>
                           <form class="form-horizontal" role="form"  method="POST" action="actions/process_register.php">
                             <div class="form-group">
                               <label for="inputName" class="col-md-3 control-label">Name</label>
                               <div class="col-md-9">
                                 <input class="form-control" id="inputName" name="username" placeholder="Name" type="text"  required>
                               </div>
                             </div>                           
                             <div class="form-group">
                               <label for="inputEmail1" class="col-md-3 control-label">Email</label>
                               <div class="col-md-9">
                                 <input class="form-control" id="inputEmail1" name="email" placeholder="Email" type="email" value="<?=$register?>"  required>
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="inputPassword1" class="col-md-3 control-label">Password</label>
                               <div class="col-md-9">
                                 <input class="form-control" id="inputPassword1" name="password" placeholder="Password" type="password"  required>
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="inputPassword1" class="col-md-3 control-label">Re-Password</label>
                               <div class="col-md-9">
                                 <input class="form-control" id="inputPassword1" name="rePassword" placeholder="Retype Password" type="password"  required>
                               </div>
                             </div>                            
                             <div class="form-group">
                               <div class="col-md-offset-3 col-md-9">
                                 <div class="checkbox">
                                   <label>
                                     <input type="checkbox" required> I Agree Terms &amp; Conditions
                                   </label>
                                 </div>
                               </div>
                             </div>
                             <div class="form-group">
                               <div class="col-md-offset-3 col-md-9">
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
      
     
      
     
      <?php include 'includes/footer.php'; ?>
        </body></html>

<?}
 else {
    header('Location: account.php');
}
?>