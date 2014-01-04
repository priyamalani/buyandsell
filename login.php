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
                           <form class="form-horizontal" role="form">
                             <div class="form-group">
                               <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                               <div class="col-lg-10">
                                 <input class="form-control" id="inputEmail1" placeholder="Email" type="email">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                               <div class="col-lg-10">
                                 <input class="form-control" id="inputPassword1" placeholder="Password" type="password">
                               </div>
                             </div>
                             <div class="form-group">
                               <div class="col-lg-offset-2 col-lg-10">
                                 <button type="submit" class="btn btn-info">Sign in</button>
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