<div class="sidey">
                     <ul class="nav">
                         <li><a href="index.php"><i class="icon-home"></i> &nbsp;Home</a>
                         </li><li><a href="#"><i class="icon-heart"></i> &nbsp;Fashion<span class="caret"></span></a>
                             <ul style="display: none;" data-index="0">
                                 <?php 
                                 $result = getCategory(1, '', NULL, NULL, TRUE);
                                 $count = count($result);
                                 for($i=0; $i<$count; $i++){
                                          echo '<li><a href="items.php?id='.$result[$i][1].'">'.$result[$i][0].'</a></li>';
                                 }
                                 ?>
                             </ul>
                         </li>
                         <li><a href="#"><i class="icon-road"></i> &nbsp;Home & Garden<span class="caret"></span></a>
                             <ul style="display: none;" data-index="1">
                                 <?php 
                                 $result = getCategory(2, '', NULL, NULL, TRUE);
                                 $count = count($result);
                                 for($i=0; $i<$count; $i++){
                                          echo '<li><a href="items.php?id='.$result[$i][1].'">'.$result[$i][0].'</a></li>';
                                 }
                                 ?>
                             </ul>
                         </li>
                         <li><a href="#"><i class="icon-mobile-phone"></i> &nbsp;Electronic<span class="caret"></span></a>
                             <ul style="display: none;" data-index="2">
                                 <?php 
                                 $result = getCategory(3, '', NULL, NULL, TRUE);
                                 $count = count($result);
                                 for($i=0; $i<$count; $i++){
                                          echo '<li><a href="items.php?id='.$result[$i][1].'">'.$result[$i][0].'</a></li>';
                                 }
                                 ?>
                             </ul>
                         </li>
                         <li><a href="#"><i class="icon-random"></i> &nbsp;Other<span class="caret"></span></a>
                             <ul style="display: none;" data-index="3">
                                 <?php 
                                 $result = getCategory(4, '', NULL, NULL, TRUE);
                                 $count = count($result);
                                 for($i=0; $i<$count; $i++){
                                          echo '<li><a href="items.php?id='.$result[$i][1].'">'.$result[$i][0].'</a></li>';
                                 }
                                 ?>
                             </ul>
                         </li>
                     </ul>
                  </div>
                  
                  <!-- Sidebar items (featured items)-->
<!--                  
                    <div class="sidebar-items">

                     <h5>Featured Items</h5>

                      Item #1 
                     <div class="sitem">
                       <div class="onethree-left">
                          Image 
                         <a href="single-item.php"><img src="images/2.png" alt="" class="img-responsive"></a>
                       </div>
                       <div class="onethree-right">
                          Title 
                         <a href="single-item.php">HTC One V</a>
                          Para 
                         <p>Aenean ullamcorper justo tincidunt justo aliquet.</p>
                          Price 
                         <p class="bold">$199</p>
                       </div>
                       <div class="clearfix"></div>
                     </div>

                     <div class="sitem">
                       <div class="onethree-left">
                         <a href="single-item.php"><img src="images/3.png" alt="" class="img-responsive"></a>
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
                         <a href="single-item.php"><img src="images/4.png" alt="" class="img-responsive"></a>
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
                         <a href="single-item.php"><img src="images/5.png" alt="" class="img-responsive"></a>
                       </div>
                       <div class="onethree-right">
                         <a href="single-item.php">Samsung One V</a>
                         <p>Aenean ullamcorper justo tincidunt justo aliquet.</p>
                         <p class="bold">$299</p>
                       </div>
                       <div class="clearfix"></div>
                     </div>
                                             
                   </div>-->