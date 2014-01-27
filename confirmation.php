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
            <h2><i class="icon-shopping-cart color"></i> We received order Successfully...</h2>
            <hr>
            <h5>Thanks for buying from ShopAndSell!!!</h5>
            <h5>Your Order #id is <span class="color"><?=$_SESSION['confirmation']?></span>. Use this for further communication.</h5>
            <div class="sep-bor"></div>
            <form class="form-inline" role="search" action="actions/process_search.php" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" id="search" name="search" required>
              </div>
              <button type="submit" class="btn btn-info submit_search">Search</button>
            </form>
                    <div class="link-list">
                      <h4><strong>Take a look around our site</strong></h4>
                      <a href="index.php">Home</a> <a href="aboutus.php">About us</a> <a href="support">Support</a> <a href="contactus.php">Contact Us</a> <a href="faq.php">FAQ</a>
                    </div>

            <div class="sep-bor"></div>
         </div>
      </div>
      <!-- Page title -->
      

     
      
       <?php include 'includes/whatsNew.php'; ?>	
      
      
      
      <?php include 'includes/catchyBlock.php'; ?>
      
      <!-- CTA Starts -->
      <?php include 'includes/CTABlock.php'; ?>
      <!-- CTA Ends -->
      

      <?php include 'includes/footer.php'; ?>
        </body></html>