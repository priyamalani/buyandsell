<?php
require_once 'actions/functions.php';
?>
<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
    
	
	<body>

      <!-- Shopping cart Modal -->
     <?php include 'includes/shoppingCart.php'; ?>
      <!-- /.modal -->
           
     
      <?php include 'includes/navigation.php'; ?>
      <?php
      $item_id = getParameter('item_id');
      $detail = getProductDetails($item_id);
      error_log(print_r($detail,TRUE));
      ?>
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
                              <img src="images/ads/<?=$_SESSION['id'].'/'.$detail['info_1']?>" alt="">
                          </div>
                              

                        </div>
                        <div class="col-md-5 col-xs-7">
                          <!-- Title -->
                            <h4><?=$detail['product_name']?></h4>
                            <h5><strong>Price : <?=$detail['selling_price']?></strong></h5>
                            <p><strong>Shipping</strong> : <?=$detail['product_name']?></p>
                            <p><strong>Create Date</strong> : <?=$detail['create_date']?></p>
                            <p><strong>Availability</strong> : <?=$detail['product_name']?></p><br>
                            

                                    
                                     <!-- Quantity and add to cart button -->
                                    
                                    <div class="input-group">
                                       <input class="form-control" placeholder="1" type="text">
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
                      <li class="active"><a href="#tab1" data-toggle="tab">Contact Seller</a></li>
                      <li><a href="#tab2" data-toggle="tab">Description</a></li>
                      <li><a href="#tab3" data-toggle="tab">Review (5)</a></li>
                    </ul>

                    <!-- Tab Content -->
                    <div id="myTabContent" class="tab-content">
                        <!--contact -->
                        <div class="tab-pane fade in active" id="tab1">
                        <h5 class="text-left col-md-6"><strong>Seller Name</strong></h5>
                       <span class="text-right col-md-6">
                           <button class="btn btn-danger" type="submit">View seller's other Ads <i class='icon-double-angle-right'></i></button>
                       </span>
                        <form role="form" class="col-md-6 col-sm-12">
                            <div class="form-group">
                              <label for="name">Your Name</label>
                              <input class="form-control" id="name" placeholder="Enter Name" type="text">
                            </div>                                    
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Message</label>
                              <textarea class="form-control" rows="3"></textarea>
                            </div>  
                            <button type="submit" class="btn btn-info">Send</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                          </form>
                        <div class="col-md-6 col-sm-6">
                            <label for="googleMap">Google Map</label><br>
                            <iframe height="285px" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?q=naGPUR&amp;ie=UTF8&amp;hq=&amp;hnear=Nagpur,+Maharashtra,+India&amp;t=m&amp;z=11&amp;ll=21.1458,79.088155&amp;output=embed"></iframe>
                        </div>
                      </div>
                      <!-- Description -->
                      <div class="tab-pane fade" id="tab2">
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
                  <?php include 'includes/featuredSidebar.php'; ?>
                   
               </div>
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