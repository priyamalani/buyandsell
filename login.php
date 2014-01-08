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
                  <div class="register-login">
                     <div class="">
                        <div class="">
                            <h3></h3>
                           <h3 class="text-center">New to ShopAndSell</h3>
                           <form class="form-horizontal" role="form">
                             <div class="form-group">
                                 <div class="col-lg-12">
                               <label for="inputEmail2" class="col-lg-12 control-label" style="text-align: center;">Get started now. It's fast and easy!</label>
                                 </div>
                               <div class="col-lg-12">
                                 <input class="form-control" id="inputEmail2" placeholder="Email" type="email">
                               </div>
                             </div>
                            
                             <div class="form-group text-center">
                               <div class="col-lg-offset-1 col-lg-10">
                                 <button type="submit" class="btn btn-info">Register Today!</button>
                               </div>
                             </div>
                           </form>
                           
                        </div>
                     </div>   
                  </div>
               </div>
                
                <div class="col-md-6">
                  <div class="register-login">
                     <div class="cool-block">
                        <div class="cool-block-bor">
                        
                           <h3 class="text-center">Login</h3>
                           <form class="form-horizontal" role="form" method="POST" action="actions/process_login.php">
                             <div class="form-group">
                               <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                               <div class="col-lg-10">
                                 <input class="form-control" id="inputEmail1" name="inputEmail1" placeholder="Email" type="email">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                               <div class="col-lg-10">
                                 <input class="form-control" id="inputPassword1" name="inputPassword1" placeholder="Password" type="password">
                               </div>
                             </div>
                             <div class="form-group">
                               <div class="col-lg-offset-2 col-lg-10">
                                 <input type="submit" class="btn btn-info" value="Sign In" id="signIn" name="signIn"/>
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
<!--      <script>
          $(document).on( "click", "#signIn", function(event){
        $.ajax({
                url: ("actions/process_login.php"),
                data: {},
                success: function(data) {
                    $("#mostPopular").html(data);
                    closeAllMenuDropdowns();
                    $('#SOCPDropdownMenu').show();
                    return false;
                }
            });
        openSOCP();
        publishBtns();
        return;
    });
      </script>-->
        </body></html>