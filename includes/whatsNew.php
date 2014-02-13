<?
require_once 'actions/functions.php';
?>
<!-- Recent posts CarouFredSel Starts -->
	
      <div class="recent-posts blocky">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <!-- Section title -->
                  <div class="section-title">
                     <h4><i class="icon-desktop color"></i> &nbsp;Whats New at <span class="color">ShopSellRent</span></h4>
                  </div>    
                  
                  <div class="row">
                     <div class="col-md-12">
                        <div class="my_carousel">
                        
                           <div class="carousel_nav pull-right">
                               <!-- Carousel navigation -->
                               <a style="display: inline-block;" class="prev" id="car_prev" href="#"><i class="icon-chevron-left"></i></a>
                               <a style="display: inline-block;" class="next" id="car_next" href="#"><i class="icon-chevron-right"></i></a>
                           </div>
                          
                           <div class="col-md-12" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; height: 458px; margin: 0px; overflow: hidden;" class="caroufredsel_wrapper">
                               <ul class="col-md-12" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; height: 458px;" id="carousel_container">
                                  <?php echo  getRecentProducts(6);?>
                              <!-- Carousel item -->
                              
                              
                              
                              
                              
                              
                           </ul></div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
			
      <!-- Recent posts Ends -->