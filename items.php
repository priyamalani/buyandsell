<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
	
	<body>

      <!-- Shopping cart Modal -->
     <?php include 'includes/shoppingCart.php'; ?>
      <!-- /.modal -->
           
    
      <?php 
      include 'includes/navigation.php'; 
      $category_id = getParameter('id');
      $products = getProductsByCategory($category_id);
      $cat_name = getCategoryName($category_id);
      $parent_cat = getParentCategory($category_id);
      ?> 
      <!-- Page title -->
      <div class="page-title">
         <div class="container">
             <h2><i class="icon-desktop color"></i> <?=$cat_name?></h2>
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
                     <li><a href="#"><?=getCategoryName($parent_cat)?></a> <span class="divider"></span></li>
                   <li class="active"><?=$cat_name?></li>
                 </ul>
               
                 <!-- Items List starts -->

                     <div class="row">
                        <?php
                        if(isGood($products)){
                        for($i=0; $i<count($products);$i++){
                            echo '<!-- Item #'.$i.' -->
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="item">
                                  <!-- Item image -->
                                  <div class="item-image">
                                    <a href="single-item.php?item_id='.$products[$i]['product_id'].'"><img src="images/ads/'.$products[$i]['members_id'].'/'.$products[$i]['info_1'].'" alt="" class="img-responsive"></a>
                                  </div>
                                  <!-- Item details -->
                                  <div class="item-details">
                                    <!-- Name -->
                                    <h5><a href="single-item.php?item_id='.$products[$i]['product_id'].'">'.$products[$i]['product_name'].'</a></h5>
                                    <div class="clearfix"></div>
                                    <!-- Para. Note more than 2 lines. -->
                                    <p>'.substr($products[$i]['product_desc'],0,20).'...</p>
                                    <hr>
                                    <!-- Price -->
                                    <div class="item-price pull-left">'.$products[$i]['selling_price'].'</div>
                                    <!-- Add to cart -->
                                    <div class="pull-right"><a href="#" class="btn btn-danger btn-sm">Add to Cart</a></div>
                                    <div class="clearfix"></div>
                                  </div>
                                </div>
                              </div>';
                        }
                        }
                        elseif(isGood ($_SESSION['id'])) {
                            echo '<p class="col-md-12">No products found.<br>Be the first one to post in this category <a href="post-ad.php">Post Now</a></p>';
                        }
                        
                        else {
                            echo '<p class="col-md-12">No products found.<br>Be the first one to post in this category. To post <a href="login.php">Login</a> or <a href="register.php">Register</a></p>';
                        }
                        ?>
                        
                     </div>

                  <!-- Items List ends -->
                  
               
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