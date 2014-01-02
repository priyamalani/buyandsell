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
            <h2><i class="icon-desktop color"></i> Laptops &amp; Desktops <small>Subtext for header</small></h2>
            <hr>
         </div>
      </div>
      <!-- Page title -->
      
      <!-- Page content -->
      
      <div class="shop-items">
         <div class="container">
            
            <div class="row">
               
               <div class="col-md-9 col-md-push-3">
               
                  <!-- Breadcrumb -->
                 <ul class="breadcrumb">
                   <li><a href="index.php">Home</a> <span class="divider"></span></li>
                   <li><a href="items.php">Smartphone</a> <span class="divider"></span></li>
                   <li class="active">Apple</li>
                 </ul>
               
                  <div class="single-item">
                      <div class="row">
                        <div class="col-md-4 col-xs-5">

                          <div class="item-image">
                              <img src="files/2.png" alt="">
                          </div>
                              

                        </div>
                        <div class="col-md-5 col-xs-7">
                          <!-- Title -->
                            <h4>Apple iPhone 5G</h4>
                            <h5><strong>Price : $999</strong></h5>
                            <p><strong>Shipping</strong> : Free</p>
                            <p><strong>Brand</strong> : Apple</p>
                            <p><strong>Modal</strong> : 5G</p>
                            <p><strong>Availability</strong> : In Stock</p><br>
                                 
                                 <div class="form-group">
                                    <!-- Dropdown menu -->
                                    <select class="form-control">
                                      <option selected="selected">Color</option>
                                      <option>Red</option>
                                      <option>Blue</option>
                                      <option>Green</option>
                                      <option>Orange</option>
                                    </select>
                                 </div>

                                    
                                     <!-- Quantity and add to cart button -->
                                    
                                    <div class="input-group">
                                       <input class="form-control" placeholder="2" type="text">
                                       <span class="input-group-btn">
                                         <button class="btn btn-info" type="button">Go!</button>
                                       </span>
                                     </div><!-- /input-group -->

                                    <!-- Add to wish list -->
                                    <a href="wishlist.php">+ Add to Wish List</a>

                                    <!-- Share button -->
                            
                        </div>
                      </div>
                    </div>

            <br>
                    
                    <!-- Description, specs and review -->

                    <ul id="myTab" class="nav nav-tabs">
                      <!-- Use uniqe name for "href" in below anchor tags -->
                      <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                      <li><a href="#tab2" data-toggle="tab">Specs</a></li>
                      <li><a href="#tab3" data-toggle="tab">Review (5)</a></li>
                    </ul>

                    <!-- Tab Content -->
                    <div id="myTabContent" class="tab-content">
                      <!-- Description -->
                      <div class="tab-pane fade in active" id="tab1">
                        <h5><strong>Apple iPhone 5G</strong></h5>
                        <p>Nulla facilisi. Sed justo dui, scelerisque ut
 consectetur vel, eleifend id erat. Morbi auctor adipiscing tempor. 
Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat. Proin
 rutrum, erat eget posuere semper, <em>arcu mauris posuere tortor</em>, 
in commodo enim magna id massa. Suspendisse potenti. Aliquam erat 
volutpat. Maecenas quis tristique turpis. Nulla facilisi. Duis sed velit
 at <a href="#">magna sollicitudin cursus</a> ac ultrices magna. Aliquam
 consequat, purus vitae auctor ullamcorper, sem velit convallis quam, a 
pharetra justo nunc et mauris. Vivamus diam diam, fermentum sed dapibus 
eget, egestas sed eros. Lorem ipsum dolor sit amet, consectetur 
adipiscing elit.</p>
                        <h6><strong>Features</strong></h6>
                        <ul>
                        <li>Etiam adipiscing posuere justo, nec iaculis justo dictum non</li>
                        <li>Cras tincidunt mi non arcu hendrerit eleifend</li>
                        <li>Aenean ullamcorper justo tincidunt justo aliquet et lobortis diam faucibus</li>
                        <li>Maecenas hendrerit neque id ante dictum mattis</li>
                        <li>Vivamus non neque lacus, et cursus tortor</li>
                        </ul>
                      </div>

                      <!-- Sepcs -->
                      <div class="tab-pane fade" id="tab2">
                        
                        <h5><strong>Product Specs:</strong></h5>
                        <table class="table table-striped">
                          <tbody>
                            <tr>
                              <td><strong>Name</strong></td>
                              <td>Apple iPhone 5G</td>
                            </tr>
                            <tr>
                              <td><strong>Brand</strong></td>
                              <td>Apple</td>
                            </tr>
                            <tr>
                              <td><strong>Modal</strong></td>
                              <td>Fifth Generation</td>
                            </tr>
                            <tr>
                              <td><strong>Memory</strong></td>
                              <td>2GB RAM</td>
                            </tr>
                            <tr>
                              <td><strong>Storage</strong></td>
                              <td>16GB, 32GB, 64GB</td>
                            </tr>
                            <tr>
                              <td><strong>Camera</strong></td>
                              <td>Front VGA, Read 8MP</td>
                            </tr>
                            <tr>
                              <td><strong>Processor</strong></td>
                              <td>Apple 1.25GHz Processor</td>
                            </tr>
                            <tr>
                              <td><strong>Battery</strong></td>
                              <td>30 Hours Standby</td>
                            </tr>                                                                                                
                          </tbody>
                        </table>

                      </div>

                      <!-- Review -->
                      <div class="tab-pane fade" id="tab3">
                        <h5><strong>Product Reviews :</strong></h5>
                        <hr>
                        <div class="item-review">
                          <h5>Ravi Kumar - <span class="color">4/5</span></h5>
                          <p class="rmeta">27/1/2012</p>
                          <p>Suspendisse potenti. Morbi ac felis nec 
mauris imperdiet fermentum. Aenean sodales augue ac lacus hendrerit sed 
rhoncus erat hendrerit. Vivamus vel ultricies elit. Curabitur lacinia 
nulla vel tellus elementum non mollis justo aliquam.</p>
                        </div>

                        <hr>
                        <h5><strong>Write a Review</strong></h5>
                        <hr>
                                              <form role="form">
                                               <div class="form-group">
                                                 <label for="name">Your Name</label>
                                                 <input class="form-control" id="name" placeholder="Enter Name" type="text">
                                               </div>                                    
                                               <div class="form-group">
                                                 <label for="exampleInputEmail1">Email address</label>
                                                 <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
                                               </div>
                                               <div class="form-group">
                                                   <label for="rating">Rating</label>
                                                   <!-- Dropdown menu -->
                                                   <select class="form-control">
                                                     <option selected="selected">Rating</option>
                                                     <option>1</option>
                                                     <option>2</option>
                                                     <option>3</option>
                                                     <option>4</option>
                                                     <option>5</option>
                                                   </select>
                                                </div>
                                               <div class="form-group">
                                                 <label for="exampleInputEmail1">Review</label>
                                                 <textarea class="form-control" rows="3"></textarea>
                                               </div>  
                                               <button type="submit" class="btn btn-info">Send</button>
                                               <button type="reset" class="btn btn-default">Reset</button>
                                             </form>

                      </div>

                    </div>
               
               </div>
               
               <div class="col-md-3 col-md-pull-9">
                  <div class="sidey">
                     <ul class="nav">
                         <li><a href="index.php"><i class="icon-home"></i> &nbsp;Home</a>
                         </li><li><a href="#"><i class="icon-mobile-phone"></i> &nbsp;Smartphones<span class="caret"></span></a>
                             <ul style="display: none;" data-index="0">
                                 <li><a href="items.php">Apple</a></li>
                                 <li><a href="items.php">Samsung</a></li>
                                 <li><a href="items.php">Motorola</a></li>
                                 <li><a href="items.php">Nokia</a></li>
                             </ul>
                         </li>
                         <li><a href="#"><i class="icon-laptop"></i> &nbsp;Laptops<span class="caret"></span></a>
                             <ul style="display: none;" data-index="1">
                                 <li><a href="items.php">Apple</a></li>
                                 <li><a href="items.php">Samsung</a></li>
                                 <li><a href="items.php">Motorola</a></li>
                                 <li><a href="items.php">Nokia</a></li>
                             </ul>
                         </li>
                         <li><a href="#"><i class="icon-briefcase"></i> &nbsp;Office Items<span class="caret"></span></a>
                             <ul style="display: none;" data-index="2">
                                 <li><a href="items.php">Apple</a></li>
                                 <li><a href="items.php">Samsung</a></li>
                                 <li><a href="items.php">Motorola</a></li>
                                 <li><a href="items.php">Nokia</a></li>
                             </ul>
                         </li>
                         <li><a href="#"><i class="icon-camera"></i> &nbsp;Camera<span class="caret"></span></a>
                             <ul style="display: none;" data-index="3">
                                 <li><a href="items.php">Apple</a></li>
                                 <li><a href="items.php">Samsung</a></li>
                                 <li><a href="items.php">Motorola</a></li>
                                 <li><a href="items.php">Nokia</a></li>
                             </ul>
                         </li>
                     </ul>
                  </div>
                  
                  <!-- Sidebar items (featured items)-->

                   <div class="sidebar-items">

                     <h5>Featured Items</h5>

                     <!-- Item #1 -->
                     <div class="sitem">
                       <div class="onethree-left">
                         <!-- Image -->
                         <a href="single-item.php"><img src="files/2.png" alt="" class="img-responsive"></a>
                       </div>
                       <div class="onethree-right">
                         <!-- Title -->
                         <a href="single-item.php">HTC One V</a>
                         <!-- Para -->
                         <p>Aenean ullamcorper justo tincidunt justo aliquet.</p>
                         <!-- Price -->
                         <p class="bold">$199</p>
                       </div>
                       <div class="clearfix"></div>
                     </div>

                     <div class="sitem">
                       <div class="onethree-left">
                         <a href="single-item.php"><img src="files/3.png" alt="" class="img-responsive"></a>
                       </div>
                       <div class="onethree-right">
                         <a href="single-item.php">Sony One V</a>
                         <p>Aenean ullamcorper justo tincidunt justo aliquet.</p>
                         <p class="bold">$399</p>
                       </div>
                       <div class="clearfix"></div>
                     </div>

                     <div class="sitem">
                       <div class="onethree-left">
                         <a href="single-item.php"><img src="files/4.png" alt="" class="img-responsive"></a>
                       </div>
                       <div class="onethree-right">
                         <a href="single-item.php">Nokia One V</a>
                         <p>Aenean ullamcorper justo tincidunt justo aliquet.</p>
                         <p class="bold">$159</p>
                       </div>
                       <div class="clearfix"></div>
                     </div>

                     <div class="sitem">
                       <div class="onethree-left">
                         <a href="single-item.php"><img src="files/5.png" alt="" class="img-responsive"></a>
                       </div>
                       <div class="onethree-right">
                         <a href="single-item.php">Samsung One V</a>
                         <p>Aenean ullamcorper justo tincidunt justo aliquet.</p>
                         <p class="bold">$299</p>
                       </div>
                       <div class="clearfix"></div>
                     </div>
                                             
                   </div>
               </div>
            </div>
            
            <div class="sep-bor"></div>
         </div>
      </div>
     
      
      <!-- Recent posts CarouFredSel Starts -->
	
      <div class="recent-posts blocky">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <!-- Section title -->
                  <div class="section-title">
                     <h4><i class="icon-desktop color"></i> &nbsp;Whats New in Our Company</h4>
                  </div>    
                  
                  <div class="row">
                     <div class="col-md-12">
                        <div class="my_carousel">
                        
                           <div class="carousel_nav pull-right">
                               <!-- Carousel navigation -->
                               <a style="display: inline-block;" class="prev" id="car_prev" href="#"><i class="icon-chevron-left"></i></a>
                               <a style="display: inline-block;" class="next" id="car_next" href="#"><i class="icon-chevron-right"></i></a>
                           </div>
                          
                           <div style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1020px; height: 343px; margin: 0px; overflow: hidden;" class="caroufredsel_wrapper"><ul style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 4080px; height: 343px;" id="carousel_container"><li style="width: 245px;">
                                 <a href="#"><img src="files/6.png" alt="" class="img-responsive"></a>
                                 <div class="carousel_caption">
                                     <h5><a href="#">Praesent estsum massa</a></h5>
                                     <p>Something about the product goes here. Not More than 2 lines.</p>
                                     <a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $199</a>
                                 </div>
                              </li><li style="width: 245px;">
                                 <a href="#"><img src="files/7.png" alt="" class="img-responsive"></a>
                                 <div class="carousel_caption">
                                     <h5><a href="#">Praesent estsum etium</a></h5>
                                     <p>Something about the product goes here. Not More than 2 lines.</p>
                                     <a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $199</a>
                                 </div>
                              </li><li style="width: 245px;">
                                 <a href="#"><img src="files/2.png" alt="" class="img-responsive"></a>
                                 <div class="carousel_caption">
                                    <h5><a href="#">Duis estsum placerat</a></h5>
                                    <p>Something about the product goes here. Not More than 2 lines.</p>
                                    <a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $199</a>
                                 </div>
                              </li><li style="width: 245px;">
                                 <a href="#"><img src="files/3.png" alt="" class="img-responsive"></a>
                                 <div class="carousel_caption">
                                     <h5><a href="#">Maecenas estsum odio</a></h5>
                                     <p>Something about the product goes here. Not More than 2 lines.</p>
                                     <a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $199</a>
                                 </div>
                              </li><li style="width: 245px;">
                                 <a href="#"><img src="files/4.png" alt="" class="img-responsive"></a>
                                 <div class="carousel_caption">
                                     <h5><a href="#">Proin estsum accumsan</a></h5>
                                     <p>Something about the product goes here. Not More than 2 lines.</p>
                                     <a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $199</a>
                                 </div>
                              </li><li style="width: 245px;">
                                 <a href="#"><img src="files/5.png" alt="" class="img-responsive"></a>
                                 <div class="carousel_caption">
                                     <h5><a href="#">Lorem estsum ipsum</a></h5>
                                     <p>Something about the product goes here. Not More than 2 lines.</p>
                                     <a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $199</a>
                                 </div>
                              </li>
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
                           <form class="form-inline" role="form">
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