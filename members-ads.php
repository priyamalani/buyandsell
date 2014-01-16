<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
	
	<body>

      <!-- Shopping cart Modal -->
     <?php include 'includes/shoppingCart.php'; ?>
      <!-- /.modal -->
           
    
      <?php include 'includes/navigation.php'; 
      $members_id = getParameter('members_id');
      $result = getMembersAllProduct($members_id);
      $count = count($result);
      ?> 
      <!-- Page title -->
      <div class="page-title">
         <div class="container">
            <h2><i class="icon-desktop color"></i> <?=$members_id?> <small>Subtext for header</small></h2>
            <hr>
         </div>
      </div>
      <!-- Page title -->
      
      <!-- Page content -->
      
      <div class="shop-items">
         <div class="container">
            
            <div class="row">
               
               <div class="col-md-9 col-md-push-3">
               
               
                 <!-- Items List starts -->

                     <div class="row">
                        <!-- Item #1 -->
                        <?
                             for($i=0; $i<$count; $i++){
                                 
                        ?>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                          <div class="item">
                            <!-- Item image -->
                            <div class="item-image">
                              <a href="single-item.php?item_id=<?=$result[$i]['product_id']?>"><img src="images/ads/<?=$result[$i]['members_id'].'/'.$result[$i]['info_1']?>" alt="" class="img-responsive"></a>
                            </div>
                            <!-- Item details -->
                            <div class="item-details">
                              <!-- Name -->
                              <h5><a href="single-item.php?item_id=<?=$result[$i]['product_id']?>"><?=$result[$i]['product_name']?></a></h5>
                              <div class="clearfix"></div>
                              <!-- Para. Note more than 2 lines. -->
                              <p><?=$result[$i]['product_desc']?></p>
                              <hr>
                              <!-- Price -->
                              <div class="item-price pull-left"><?=$result[$i]['selling_price']?></div>
                              <!-- Add to cart -->
                              <div class="pull-right"><a href="single-item.php?item_id=<?=$result[$i]['product_id']?>" class="btn btn-danger btn-sm">View</a></div>
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                       <?}?>

                       

                     </div>
                     
                     
                      

                  <!-- Items List ends -->
                  
                  
<!--                     <div class="row">
                        <div class="col-md-12">
                                     Pagination 
                                    <ul class="pagination">
                                      <li><a href="#"><i class="icon-caret-left"></i></a></li>
                                      <li><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li><a href="#"><i class="icon-caret-right"></i></a></li>
                                    </ul> 
                        </div>
                     </div>-->
               
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