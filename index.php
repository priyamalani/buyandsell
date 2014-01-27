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
              
         <div id="carousel-example-generic" class="carousel slide hidden-sm hidden-xs">
           <!-- Indicators -->
           <ol class="carousel-indicators">
             <li class="active" data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
             <li data-target="#carousel-example-generic" data-slide-to="1"></li>
             <li class="" data-target="#carousel-example-generic" data-slide-to="2"></li>
           </ol>

           <!-- Wrapper for slides -->
           <div class="carousel-inner">
             <!-- Item -->
             <div class="item animated fadeInRight active">
               <img src="images/2.png" alt="" class="img-responsive col-md-2 col-md-offset-2">
               <div class="carousel-caption col-md-4 col-md-offset-1" style='position: static'>
                 <h2 class="animated fadeInLeftBig">Lorem ipsum dolor sit amet</h2>
                 <p class="animated fadeInRightBig">Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. Donec tristique est sit amet diam interdum semper. </p>
                 <a href="#" class="animated fadeInLeftBig btn btn-info btn-lg">Buy Now - $199</a>
               </div>
             </div>
             
             <div class="item animated fadeInRight">
               <img src="images/2.png" alt="" class="img-responsive col-md-2 col-md-offset-2">
               <div class="carousel-caption col-md-4 col-md-offset-1" style='position: static'>
                 <h2 class="animated fadeInLeftBig">Mauris semper tincidunt suscipit</h2>
                 <p class="animated fadeInRightBig">Donec tristique est sit amet diam interdum semper. Vestibulum <strong>condimentum ante urna</strong>, vel interdum odio accumsan id.</p>
                 <a href="#" class="animated fadeInLeftBig btn btn-info btn-lg">Buy Now - $299</a>
               </div>
             </div>

             <div class="item animated fadeInRight">
               <img src="images/2.png" alt="" class="img-responsive col-md-2 col-md-offset-2">
               <div class="carousel-caption col-md-4 col-md-offset-1" style='position: static'>
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
            
            <?php 
            
            $details = getMostViewedItem(9);
             
                for ($j = 0 ; $j < count($details) ; ++$j){ 
                    echo '
                        <div class="col-md-4">
                        <div class="thumbs">
                        <div class="item-icon"><span>HOT</span></div>
                                            <img class="img-responsive change-image" src="images/ads/' . $details[$j]['members_id']. '/' . $details[$j]['info_1']. '" alt="Image Size 430x280">

                                            <a id="'.$details[$j]['product_id'].'" href="single-item.php?item_id='.$details[$j]['product_id'].'" target="_blank">
                                                <span class="title">
                                                        <span>
                                                            <p>' . $details[$j]['product_name']. '</p>
                                                            <p><em>' . substr($details[$j]['product_desc'],0,20) . '...</em></p>    
                                                            <p><i class="icon-circle-arrow-right icon-2x"></i></p>
                                                        </span>
                                                </span>	
                                            </a>
                                    </div>
                        </div>';
                }
                ?>

          </div>
        </div>
      </div>

      <!-- Items List ends -->

      
      <?php include 'includes/whatsNew.php'; ?>	
      
      
      <?php include 'includes/catchyBlock.php'; ?>
           
      
      <!-- CTA Starts -->
       <?php include 'includes/CTABlock.php'; ?>	
      <!-- CTA Ends -->
      
      
      <?php include 'includes/footer.php'; ?>
      </body></html>