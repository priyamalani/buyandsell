<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
	
	<body>

      <!-- Shopping cart Modal -->
     <?php include 'includes/shoppingCart.php'; ?>
      <!-- /.modal -->
           
      <?php include 'includes/navigation.php'; ?>
      <!-- Page content -->
      
      <div class="error-block blocky text-center">
         <div class="container">
            <h2>Oops<span class="color">!!!</span> It<span class="color">'</span>s 404<span class="color">!!!</span></h2>
            <p class="error-para">We are sorry, the page you requested cannot be found. </p>
            <div class="sep-bor"></div>
            <form class="form-inline" role="form">
              <div class="form-group">
                <input class="form-control" id="search" placeholder="Type Something..." type="email">
              </div>
              <button type="submit" class="btn btn-info">Search</button>
            </form>
            
                    <div class="link-list">
                      <h5>Take a look around our site</h5>
                      <a href="#">Home</a> <a href="#">About us</a> <a href="#">Support</a> <a href="#">Contact Us</a> <a href="#">Disclaimer</a>
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