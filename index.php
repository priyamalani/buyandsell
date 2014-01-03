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
                  <h3>Welcome to <span class="color">BuyAndSell</span> - Online  <span class="color">Classifieds</span></h3>
                  <p>Buy and sell electronics, home decors, fashion apparel, 
                      sporting goods, digital items, coupons, and many more on 
                      <span class="color">BuyAndSell</span>, the world's online classifieds.</p>
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

      <!-- Catchy starts -->
      <div class="catchy blocky">
         <div class="catchy-inner1">
            <div class="catchy-inner2">
               <div class="container">
                  <div class="row">
                     <div class="col-md-5">
                        <div class="catchy-subscribe">
                           <h3>Join Us!</h3>
                           <p>Lorem tristique est sit amet diam ipsum  dolor sit  diam interdum diam ipsum  dolor sit diam ipsum  dolor sit tristique semper.</p>
                           <br>
                           <form class="form-inline" >
                             <div class="form-group">
                               <input class="form-control " id="exampleInputEmail2" placeholder="Enter your email" type="text">
                             </div>
                             <button type="submit" class="btn btn-danger">Subscribe</button>
                           </form>

                        </div>
                     </div>
                     <div class="col-md-7">
                     
                        <div class="report">
                           <div class="report-bor">
                              <div class="row">
                                 <!-- Report data starts -->
                                 <div class="col-md-4 col-sm-4">
                                    <div class="report-data">
                                       <div class="row">
                                          <div class="col-md-4 col-sm-4 col-xs-4">
                                             <!-- Icon -->
                                             <div class="report-icon">
                                                <i class="icon-group color"></i>
                                             </div>
                                          </div>
                                          <div class="col-md-8 col-md-8 col-xs-8">
                                             <!-- Details -->
                                             <span class="report-big color">40,000</span> <span>Customers</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Report data ends -->
                                 
                                 <!-- Report data starts -->
                                 <div class="col-md-4 col-sm-4">
                                    <div class="report-data">
                                       <div class="row">
                                          <div class="col-md-4 col-sm-4 col-xs-4">
                                             <!-- Icon -->
                                             <div class="report-icon">
                                                <i class="icon-calendar color"></i>
                                             </div>
                                          </div>
                                          <div class="col-md-8 col-md-8 col-xs-8">
                                             <!-- Details -->
                                              <span>Since</span><span class="report-big color">1857</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Report data ends -->

                                 <!-- Report data starts -->
                                 <div class="col-md-4 col-sm-4">
                                    <div class="report-data">
                                       <div class="row">
                                          <div class="col-md-4 col-sm-4 col-xs-4">
                                             <!-- Icon -->
                                             <div class="report-icon">
                                                <i class="icon-android color"></i>
                                             </div>
                                          </div>
                                          <div class="col-md-8 col-md-8 col-xs-8">
                                             <!-- Details -->
                                             <span class="report-big color">30,000</span> <span>Revenue</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Report data ends -->
                                 
                              </div>
                              
                              <hr class="hidden-xs">
                              
                              <div class="row">
                                 
                                 <!-- Report data starts -->
                                 <div class="col-md-4 col-sm-4">
                                    <div class="report-data">
                                       <div class="row">
                                          <div class="col-md-4 col-sm-4 col-xs-4">
                                             <!-- Icon -->
                                             <div class="report-icon">
                                                <i class="icon-building color"></i>
                                             </div>
                                          </div>
                                          <div class="col-md-8 col-md-8 col-xs-8">
                                             <!-- Details -->
                                             <span class="report-big color">150 +</span> <span>Companies</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Report data ends -->
                                 
                                 <!-- Report data starts -->
                                 <div class="col-md-4 col-sm-4">
                                    <div class="report-data">
                                       <div class="row">
                                          <div class="col-md-4 col-sm-4 col-xs-4">
                                             <!-- Icon -->
                                             <div class="report-icon">
                                                <i class="icon-signal color"></i>
                                             </div>
                                          </div>
                                          <div class="col-md-8 col-md-8 col-xs-8">
                                             <!-- Details -->
                                             <span class="report-big color">50.60%</span> <span>Growth</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Report data ends -->

                                 <!-- Report data starts -->
                                 <div class="col-md-4 col-sm-4">
                                    <div class="report-data">
                                       <div class="row">
                                          <div class="col-md-4 col-sm-4 col-xs-4">
                                             <!-- Icon -->
                                             <div class="report-icon">
                                                <i class="icon-truck color"></i>
                                             </div>
                                          </div>
                                          <div class="col-md-8 col-md-8 col-xs-8">
                                             <!-- Details -->
                                             <span class="report-big color">100 +</span> <span>Employees</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Report data ends -->
                                 
                              </div>
                              
                           </div>
                        </div> 
                     
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>      
      <!-- Catchy ends -->
      
      <?php include 'includes/whatsNew.php'; ?>	
           
      
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