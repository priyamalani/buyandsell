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
                      <a href="index.php">Home</a> <a href="aboutus.php">About us</a> <a href="support.php">Support</a> <a href="contactus.php">Contact Us</a> <a href="faq.php">FAQ</a>
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