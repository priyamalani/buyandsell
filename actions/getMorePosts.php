<?php

include_once 'functions.php';
        
      $id = getParameter('id');
      $result = getMembersAllProduct($id);
      $count = count($result);
      
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
                              <p>
                              <?php 
                              if(strlen($result[$i]['product_desc'])>50){
                                  echo substr($result[$i]['product_desc'],0,50).'...';
                              }
                              else
                                  echo $result[$i]['product_desc'];
                              ?>
                              </p>
                              <hr>
                              <!-- Price -->
                              <div class="item-price pull-left"><?=$result[$i]['selling_price']?></div>
                              <!-- Add to cart -->
                              <div class="pull-right"><a href="single-item.php?item_id=<?=$result[$i]['product_id']?>" class="btn btn-danger btn-sm">View</a></div>
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                       <?}
                      
?>
