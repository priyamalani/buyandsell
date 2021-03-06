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
      $category_id = $detail['category_id'];
      $cat_name = getCategoryName($category_id);
      $parent_cat = getParentCategory($category_id);
      $parent_cat_name = getCategoryName($parent_cat);
      $mem_details = getMembersDetails($detail['members_id']);
      $reviews = getReviews($detail['product_no']);
      if($detail['members_id']!=$_SESSION['id']){
      updatePageView($item_id);
      }
      if(isGood($detail, $item_id)){
      ?>
      <!-- Page title -->
      <div class="page-title">
         <div class="container">
            <h2><i class="icon-desktop color"></i> <?=$detail['product_name']?> <small>Product ID: <?=$detail['product_id']?></small></h2>
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
                   <li><a href="items.php?id=<?=$parent_cat?>&parent=<?=TRUE?>"><?=$parent_cat_name?></a> <span class="divider"></span></li>
                   <li><a href="items.php?id=<?=$category_id?>"><?=$cat_name?></a> <span class="divider"></span></li>
                   <li class="active"><?=$detail['product_name']?></li>
                 </ul>
               
                  <div class="single-item">
                      <div class="row">
                        <div class="col-md-4 col-xs-5">

                          <div class="item-image">
                              <img src="images/ads/<?=$detail['members_id'].'/'.$detail['info_1']?>" alt="">
                          </div>
                              

                        </div>
                        <div class="col-md-5 col-xs-7">
                          <!-- Title -->
                            <h4><?=$detail['product_name']?></h4>
                            <h5><strong>Price : <?=$detail['selling_price']?></strong></h5>
                            <p><strong>Shipping</strong> : <?=$detail['shipping_charges']?></p>
                            <p><strong>Create Date</strong> : <?=$detail['create_date']?></p>
                            <p><strong>Quantity</strong> : <?=$detail['quantity']?></p>
                            <p><strong>Total Views</strong> : <?=$detail['visits']?></p><br>
                            

                                    <?php
                                     if($detail['members_id']!=$_SESSION['id']){
                                     ?> 
                                      <!-- Quantity and add to cart button -->
                                    <form role="form" class="" action='actions/place_order.php' method='POST'>
                                    <input type="hidden" name="buyer_id" value="<?=$_SESSION['id']?>">   
                                    <input type="hidden" name="seller_id" value="<?=$detail['members_id']?>">   
                                    <input type="hidden" name="productNo" value="<?=$detail['product_no']?>"> 
                                    <input type="hidden" name="productId" value="<?=$detail['product_id']?>"> 
                                    <input type="hidden" name="seller_email" value="<?=$mem_details['email']?>>"> 
                                    <div class="input-group">
                                       <input class="form-control" name="quantity" placeholder="1" type="text">
                                       <span class="input-group-btn">
                                         <input type="submit" class="btn btn-info" value="Go!"/>
                                       </span>
                                     </div>  
                                    </form>
                                     <?php
                                     }
                                     if(isset($_SESSION['id']) && $detail['members_id']!=$_SESSION['id']){
                                     ?> 
                                    <!-- Add to wish list -->
                                    <form role="form" class="" action='actions/add_wishlist.php' method='POST'>
                                    <input type="hidden" name="members_id" value="<?=$_SESSION['id']?>">   
                                    <input type="hidden" name="productNo" value="<?=$detail['product_no']?>">   
                                    <input type="submit" class="btn btn-info" value="+ Add to Wish List"/>
                                    </form>
                                     <?}
                                     elseif(!isset($_SESSION['id'])){
                                     ?>  
                                    <a href="login.php" class="btn" >+ Add to Wish List"</a>
                                     <?}?>

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
                      <li><a href="#tab3" data-toggle="tab">Review (<?=count($reviews)?>)</a></li>
                    </ul>

                    <!-- Tab Content -->
                    <div id="myTabContent" class="tab-content">
                        <!--contact -->
                        <div class="tab-pane fade in active" id="tab1">
                        <h5 class="text-left col-md-6"><strong><?=$mem_details['name']?></strong></h5>
                       <span class="text-right col-md-6">
                           <a href="members-ads.php?members_id=<?=$detail['members_id']?>" class="btn btn-danger">View seller's other Ads <i class='icon-double-angle-right'></i></a>
                       </span>
                        <form role="form" class="col-md-6 col-sm-12" action='actions/send-email.php?email=<?=$mem_details['email']?>' method='POST'>
                            <div class="form-group">
                              <label for="name">Your Name</label>
                              <input class="form-control" id="name" name="name" placeholder="Enter Name" type="text">
                            </div>                                    
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input class="form-control" id="userEmail" name='userEmail' placeholder="Enter email" type="email">
                            </div>
                            <div class="form-group">
                              <label for="userMessage">Message</label>
                              <textarea id='userMessage' name='userMessage' class="form-control" rows="3"></textarea>
                            </div>  
                            <button type="submit" class="btn btn-info">Send</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                          </form>
                        <div class="col-md-6 col-sm-6">
                            <label for="googleMap">Google Map</label><br>
                            <?=  getGoogleMap($mem_details['address'], $mem_details['country'], $mem_details['zip'], '100%', '285px', 'sellerMap')?>
                        </div>
                      </div>
                      <!-- Description -->
                      <div class="tab-pane fade" id="tab2">
                        <h5><strong><?=$detail['product_name']?></strong></h5>
                        <p><?=$detail['product_desc']?></p>
                        <h6><strong>More Details</strong></h6>
                        <p><?=$detail['more_details']?></p>
                      </div>

                     

                      <!-- Review -->
                      <div class="tab-pane fade" id="tab3">
                        <h5><strong>Product Reviews :</strong></h5>
                        <hr>
                        <?php 
                        if(isGood($reviews)){
                        for ($i = 0 ; $i < count($reviews) ; ++$i){ 
                            echo '<div class="item-review">
                                    <h5>'.$reviews[$i]['name'].' - <span class="color">'.$reviews[$i]['rating'].'/5</span></h5>
                                    <p class="rmeta">'.$reviews[$i]['review_date'].'</p>
                                    <p>'.$reviews[$i]['comment'].'</p>
                                  </div>
                                  <hr>'; 
                        }
                        }
                        else {
                            echo 'Be the first one to review this product.';
                        }
                        ?>
                        

                        <hr>
                        <h5><strong>Write a Review</strong></h5>
                        <hr>
                                              <form role="form" action="actions/post_review.php" method="POST">
                                                  <input type="hidden" value="<?=$detail['product_no']?>" name="productNo" name="productNo"/>
                                                  <input type="hidden" value="<?=$detail['product_id']?>" name="productId" name="productId"/>
                                               <div class="form-group">
                                                 <label for="name">Your Name</label>
                                                 <input class="form-control" id="name" placeholder="Enter Name" name="name" type="text">
                                               </div>                                    
                                               <div class="form-group">
                                                 <label for="exampleInputEmail1">Email address</label>
                                                 <input class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" type="email">
                                               </div>
                                               <div class="form-group">
                                                   <label for="rating">Rating</label>
                                                   <!-- Dropdown menu -->
                                                   <select class="form-control" name="rating" id="rating">
                                                     <option selected="selected">Rating</option>
                                                     <option>1</option>
                                                     <option>2</option>
                                                     <option>3</option>
                                                     <option>4</option>
                                                     <option>5</option>
                                                   </select>
                                                </div>
                                               <div class="form-group">
                                                 <label for="comment">Review</label>
                                                 <textarea id="comment" name="comment" class="form-control" rows="3"></textarea>
                                               </div>  
                                               <input type="submit" class="btn btn-info" value="Send"/>
                                               <button type="reset" class="btn btn-default">Reset</button>
                                             </form>

                      </div>

                    </div>
               
               </div>
               
               <div class="col-md-3 col-md-pull-9">
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
<?}
 else {
    header('Location: error.php');
}
?>