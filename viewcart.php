<!DOCTYPE html>
<html><?php include 'includes/header.php'; ?>
	
	<body>

      <!-- Shopping cart Modal -->
     <?php include 'includes/shoppingCart.php'; ?>
      <!-- /.modal -->
           
      
      <?php include 'includes/navigation.php'; ?>
      <!-- Page title -->
      <div class="page-title">
         <div class="container">
            <h2><i class="icon-desktop color"></i> View Cart <small>Subtext for header</small></h2>
            <hr>
         </div>
      </div>
      <!-- Page title -->
      
      <!-- Page content -->
      
      <div class="view-cart blocky">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               
                  <!-- Table -->
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Quantity</th>
                          <th>Unit Price</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <!-- Index -->
                          <td>1</td>
                          <!-- Product  name -->
                          <td><a href="single-item.php">HTC One</a></td>
                          <!-- Product image -->
                          <td><a href="single-item.php"><img src="files/2.png" alt="" class="img-responsive"></a></td>
                          <!-- Quantity with refresh and remove button -->
                          <td>
                            <div class="input-group">
                              <input class="form-control" placeholder="1" type="text">
                              <span class="input-group-btn">
                                <button class="btn btn-info" type="button"><i class="icon-refresh"></i></button>
                                <button class="btn btn-danger" type="button"><i class="icon-remove"></i></button>
                              </span>
                            </div>
                          </td>
                          <!-- Unit price -->
                          <td>$150</td>
                          <!-- Total cost -->
                          <td>$300</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td><a href="single-item.php">Sony Xperia</a></td>
                          <td><a href="single-item.php"><img src="files/3.png" alt=""></a></td>
                          <td>
                            <div class="input-group">
                              <input class="form-control" placeholder="1" type="text">
                              <span class="input-group-btn">
                                <button class="btn btn-info" type="button"><i class="icon-refresh"></i></button>
                                <button class="btn btn-danger" type="button"><i class="icon-remove"></i></button>
                              </span>
                            </div>
                          </td>
                          <td>$150</td>
                          <td>$150</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td><a href="single-item.php">Nokia Asha</a></td>
                          <td><a href="single-item.php"><img src="files/4.png" alt=""></a></td>
                          <td>
                            <div class="input-group">
                              <input class="form-control" placeholder="1" type="text">
                              <span class="input-group-btn">
                                <button class="btn btn-info" type="button"><i class="icon-refresh"></i></button>
                                <button class="btn btn-danger" type="button"><i class="icon-remove"></i></button>
                              </span>
                            </div>                     
                          </td>
                          <td>$250</td>
                          <td>$250</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td><a href="single-item.php">Samsung Galaxy Pro</a></td>
                          <td><a href="single-item.php"><img src="files/5.png" alt=""></a></td>
                          <td>
                            <div class="input-group">
                              <input class="form-control" placeholder="1" type="text">
                              <span class="input-group-btn">
                                <button class="btn btn-info" type="button"><i class="icon-refresh"></i></button>
                                <button class="btn btn-danger" type="button"><i class="icon-remove"></i></button>
                              </span>
                            </div> 
                          </td>
                          <td>$450</td>
                          <td>$450</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td><a href="single-item.php">Micromax Funbook</a></td>
                          <td><a href="single-item.php"><img src="files/6.png" alt=""></a></td>
                          <td>
                            <div class="input-group">
                              <input class="form-control" placeholder="1" type="text">
                              <span class="input-group-btn">
                                <button class="btn btn-info" type="button"><i class="icon-refresh"></i></button>
                                <button class="btn btn-danger" type="button"><i class="icon-remove"></i></button>
                              </span>
                            </div> 
                          </td>
                          <td>$150</td>
                          <td>$300</td>
                        </tr>                                    
                        <tr>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th>Total</th>
                          <th>$2405</th>
                        </tr>
                      </tbody>
                    </table>

                     <div class="sep-bor"></div>
                     <!-- Discount Coupen -->
                      <h5 class="title">Discount Coupen</h5>
                      <hr>
                      
                      <form class="form-inline" role="form">
                         <div class="form-group">
                           <input class="form-control" id="discount" placeholder="Discount Coupon" type="discount">
                         </div>
                         <button type="submit" class="btn btn-info">Apply</button>
                      </form>
                      
                      <hr>
                      <!-- Gift coupen -->
                      <h5 class="title">Gift Coupen</h5>
                      <hr>
                       <form class="form-inline" role="form">
                         <div class="form-group">
                           <input class="form-control" id="discount" placeholder="Offer Coupon" type="offer">
                         </div>
                         <button type="submit" class="btn btn-info">Apply</button>
                      </form>
                     
                     <div class="sep-bor"></div>
                     <!-- Button s-->
                    <div class="row">
                      <div class="span4 offset8">
                        <div class="pull-right">
                          <a href="index.html" class="btn btn-info">Continue Shopping</a>
                          <a href="checkout.html" class="btn btn-danger">CheckOut</a>
                        </div>
                      </div>
                    </div>

               
               </div>
            </div>
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
                              </li><li style="width: 245px;">
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
                              </li>
                              <!-- Carousel item -->
                              <li style="width: 245px;">
                                 <a href="#"><img src="files/2.png" alt="" class="img-responsive"></a>
                                 <div class="carousel_caption">
                                    <h5><a href="#">Duis estsum placerat</a></h5>
                                    <p>Something about the product goes here. Not More than 2 lines.</p>
                                    <a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $199</a>
                                 </div>
                              </li>
                              <li style="width: 245px;">
                                 <a href="#"><img src="files/3.png" alt="" class="img-responsive"></a>
                                 <div class="carousel_caption">
                                     <h5><a href="#">Maecenas estsum odio</a></h5>
                                     <p>Something about the product goes here. Not More than 2 lines.</p>
                                     <a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $199</a>
                                 </div>
                              </li>
                              
                              
                              
                              
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