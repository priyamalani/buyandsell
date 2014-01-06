<!DOCTYPE html>
<html>
    
      <?php include 'includes/header.php'; ?>
	<!--Header includes-->
	<body>

      <!-- Shopping cart Modal -->
     <?php include 'includes/shoppingCart.php'; ?>
      <!-- /.modal -->
           
      <?php include 'includes/navigation.php'; ?>
      <div class="clearfix"></div>
      
         <!-- Carousel starts -->
              
         <div id="carousel-example-generic" class="carousel slide">
           <!-- Indicators -->
           <ol class="carousel-indicators">
             <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
             <li class="active" data-target="#carousel-example-generic" data-slide-to="1"></li>
             <li class="" data-target="#carousel-example-generic" data-slide-to="2"></li>
           </ol>

           <!-- Wrapper for slides -->
           <div class="carousel-inner">
             <!-- Item -->
             <div class="item animated fadeInRight">
               <img src="files/back1.jpg" alt="" class="img-responsive">
               <div class="carousel-caption">
                 <h2 class="animated fadeInLeftBig">Lorem ipsum dolor sit amet</h2>
                 <p class="animated fadeInRightBig">Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. Donec tristique est sit amet diam interdum semper. </p>
                 <a href="#" class="animated fadeInLeftBig btn btn-info btn-lg">Buy Now - $199</a>
               </div>
             </div>
             
             <div class="item animated fadeInRight active">
               <img src="files/back2.jpg" alt="" class="img-responsive">
               <div class="carousel-caption">
                 <h2 class="animated fadeInLeftBig">Mauris semper tincidunt suscipit</h2>
                 <p class="animated fadeInRightBig">Donec tristique est sit amet diam interdum semper. Vestibulum <strong>condimentum ante urna</strong>, vel interdum odio accumsan id.</p>
                 <a href="#" class="animated fadeInLeftBig btn btn-info btn-lg">Buy Now - $299</a>
               </div>
             </div>

             <div class="item animated fadeInRight">
               <img src="files/back3.jpg" alt="" class="img-responsive">
               <div class="carousel-caption">
                 <h2 class="animated fadeInLeftBig">Phasellus et nisi tincidunt</h2>
                 <p class="animated fadeInRightBig">Lorem <strong>ipsum dolor sit amet</strong>, consectetur adipiscing elit. Vestibulum condimentum ante urna, vel interdum odio accumsan id.</p>
                 <a href="#" class="animated fadeInLeftBig btn btn-info btn-lg">Buy Now - $479</a>
               </div>
             </div>          
           </div>

           <!-- Controls -->
           <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
             <span class="icon-prev"></span>
           </a>
           <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
             <span class="icon-next"></span>
           </a>
         </div>
         
         <!-- carousel ends -->
		
      <!-- Hero starts -->
      
      <div class="hero">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <!-- Catchy title -->
                  <h3>Welcome to <span class="color">ShopAndSell</span> - Online  <span class="color">Classifieds</span></h3>
                  <p>Buy and sell electronics, home decors, fashion apparel, 
                      sporting goods, digital items, coupons, and many more on 
                      <span class="color">ShopAndSell</span>, the world's online classifieds.</p>
               </div>
            </div>
          <div class="sep-bor"></div>
         </div>
      </div>
      
      <!-- Hero ends -->  
      
      <!-- Items List starts -->

      <div class="shop-items blocky">
        <div class="container">
          
         <div class="row">
            <!-- Item #1 -->
            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="item">
                <!-- Use the below link to put HOT icon -->
                <div class="item-icon"><span>HOT</span></div>
                <!-- Item image -->
                <div class="item-image">
                  <a href="single-item.php"><img src="files/2.png" alt="" class="img-responsive"></a>
                </div>
                <!-- Item details -->
                <div class="item-details">
                  <!-- Name -->
                  <h5><a href="single-item.php">HTC One V</a></h5>
                  <div class="clearfix"></div>
                  <!-- Para. Note more than 2 lines. -->
                  <p>Something about the product goes here. Not More than 2 lines.</p>
                  <hr>
                  <!-- Price -->
                  <div class="item-price pull-left">$360</div>
                  <!-- Add to cart -->
                  <div class="pull-right"><a href="#" class="btn btn-danger btn-sm">Add to Cart</a></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>

            <!-- Item #2 -->
            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="item">
                <!-- Item image -->
                <div class="item-image">
                  <a href="single-item.php"><img src="files/3.png" alt="" class="img-responsive"></a>
                </div>
                <!-- Item details -->
                <div class="item-details">
                  <!-- Name -->
                  <h5><a href="single-item.php">Dell One V</a></h5>
                  <!-- Para. Note more than 2 lines. -->
                  <p>Something about the product goes here. Not More than 2 lines.</p>
                  <hr>
                  <!-- Price -->
                  <div class="item-price pull-left">$264</div>
                  <!-- Add to cart -->
                  <div class="pull-right"><a href="#" class="btn btn-danger btn-sm">Add to Cart</a></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>  

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="item">
                <!-- Item image -->
                <div class="item-image">
                  <a href="single-item.php"><img src="files/4.png" alt="" class="img-responsive"></a>
                </div>
                <!-- Item details -->
                <div class="item-details">
                  <!-- Name -->
                  <h5><a href="single-item.php">Cannon One V</a></h5>
                  <!-- Para. Note more than 2 lines. -->
                  <p>Something about the product goes here. Not More than 2 lines.</p>
                  <hr>
                  <!-- Price -->
                  <div class="item-price pull-left">$160</div>
                  <!-- Add to cart -->
                  <div class="pull-right"><a href="#" class="btn btn-danger btn-sm">Add to Cart</a></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="item">
                <!-- Item image -->
                <div class="item-image">
                  <a href="single-item.php"><img src="files/5.png" alt="" class="img-responsive"></a>
                </div>
                <!-- Item details -->
                <div class="item-details">
                  <!-- Name -->
                  <h5><a href="single-item.php">Apple One V</a></h5>
                  <!-- Para. Note more than 2 lines. -->
                  <p>Something about the product goes here. Not More than 2 lines.</p>
                  <hr>
                  <!-- Price -->
                  <div class="item-price pull-left">$420</div>
                  <!-- Add to cart -->
                  <div class="pull-right"><a href="#" class="btn btn-danger btn-sm">Add to Cart</a></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="item">

                <!-- Item image -->
                <div class="item-image">
                  <a href="single-item.php"><img src="files/6.png" alt="" class="img-responsive"></a>
                </div>
                <!-- Item details -->
                <div class="item-details">
                  <!-- Name -->
                  <h5><a href="single-item.php">Samsung One V</a></h5>
                  <!-- Para. Note more than 2 lines. -->
                  <p>Something about the product goes here. Not More than 2 lines.</p>
                  <hr>
                  <!-- Price -->
                  <div class="item-price pull-left">$300</div>
                  <!-- Add to cart -->
                  <div class="pull-right"><a href="#" class="btn btn-danger btn-sm">Add to Cart</a></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="item">
               <div class="item-icon"><span>HOT</span></div>
                <!-- Item image -->
                <div class="item-image">
                  <a href="single-item.php"><img src="files/7.png" alt="" class="img-responsive"></a>
                </div>
                <!-- Item details -->
                <div class="item-details">
                  <!-- Name -->
                  <h5><a href="single-item.php">Micromax One V</a></h5>
                  <!-- Para. Note more than 2 lines. -->
                  <p>Something about the product goes here. Not More than 2 lines.</p>
                  <hr>
                  <!-- Price -->
                  <div class="item-price pull-left">$240</div>
                  <!-- Add to cart -->
                  <div class="pull-right"><a href="#" class="btn btn-danger btn-sm">Add to Cart</a></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="item">
                <!-- Item image -->
                <div class="item-image">
                  <a href="single-item.php"><img src="files/8.png" alt="" class="img-responsive"></a>
                </div>
                <!-- Item details -->
                <div class="item-details">
                  <!-- Name -->
                  <h5><a href="single-item.php">Nokia One V</a></h5>
                  <!-- Para. Note more than 2 lines. -->
                  <p>Something about the product goes here. Not More than 2 lines.</p>
                  <hr>
                  <!-- Price -->
                  <div class="item-price pull-left">$50</div>
                  <!-- Add to cart -->
                  <div class="pull-right"><a href="#" class="btn btn-danger btn-sm">Add to Cart</a></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="item">
                <!-- Item image -->
                <div class="item-image">
                  <a href="single-item.php"><img src="files/9.png" alt="" class="img-responsive"></a>
                </div>
                <!-- Item details -->
                <div class="item-details">
                  <!-- Name -->
                  <h5><a href="single-item.php">Sony One V</a></h5>
                  <!-- Para. Note more than 2 lines. -->
                  <p>Something about the product goes here. Not More than 2 lines.</p>
                  <hr>
                  <!-- Price -->
                  <div class="item-price pull-left">$100</div>
                  <!-- Add to cart -->
                  <div class="pull-right"><a href="#" class="btn btn-danger btn-sm">Add to Cart</a></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>                                                                      

          </div>
        </div>
      </div>

      <!-- Items List ends -->

      <?php include 'includes/catchyBlock.php'; ?>
      
      <?php include 'includes/whatsNew.php'; ?>	
           
      
      <!-- CTA Starts -->
       <?php include 'includes/CTABlock.php'; ?>	
      <!-- CTA Ends -->
      
      <!-- Clients starts -->
      <div class="clients blocky">
         <div class="container">
                  
            <div class="row">
               <div class="col-md-2 col-sm-4 col-xs-6">
                  <div class="client">
                    <img src="files/amazon-f.png" alt="" class="img-responsive">
                  </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <div class="client">
                    <img src="files/google-f.png" alt="" class="img-responsive">
                  </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <div class="client">
                    <img src="files/facebook-f.png" alt="" class="img-responsive">
                  </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <div class="client">
                    <img src="files/twitter-f.png" alt="" class="img-responsive">
                  </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <div class="client">
                    <img src="files/skype-f.png" alt="" class="img-responsive">
                  </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <div class="client">
                    <img src="files/youtube-f.png" alt="" class="img-responsive">
                  </div>
                </div>
            </div>
         </div>
      </div>
      <!-- Clients ends -->
      <?php include 'includes/footer.php'; ?>
      </body></html>