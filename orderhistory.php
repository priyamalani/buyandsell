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
            <h2><i class="icon-desktop color"></i> My Account <small>Subtext for header</small></h2>
            <hr>
         </div>
      </div>
      <!-- Page title -->
      
      <!-- Page content -->
      
      <div class="account-content">
         <div class="container">
            
            <div class="row">
               <div class="col-md-3">
                  <div class="sidey">
                     <ul class="nav">
                         <li><a href="account.php">My Account</a></li>
                         <li><a href="wishlist.php">Wish List</a></li>
                         <li><a href="orderhistory.php">Order History</a></li>                         
                         <li><a href="editprofile.php">Edit Profile</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-9">
                  <h3><i class="icon-user color"></i> &nbsp;Order History</h3>
                  <!-- Your details -->
                  

                  <table class="table table-striped tcart">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>25-08-12</td>
                        <td>4423</td>
                        <td>HTC One</td>
                        <td>$530</td>
                        <td>Completed</td>
                      </tr>
                      <tr>
                        <td>15-02-12</td>
                        <td>6643</td>
                        <td>Sony Xperia</td>
                        <td>$330</td>
                        <td>Shipped</td>
                      </tr>
                      <tr>
                        <td>14-08-12</td>
                        <td>1243</td>
                        <td>Nokia Asha</td>
                        <td>$230</td>
                        <td>Processing</td>
                      </tr>  
                      <tr>
                        <td>14-08-12</td>
                        <td>1283</td>
                        <td>Xperia Tipo</td>
                        <td>$330</td>
                        <td>Shipping</td>
                      </tr>
                      <tr>
                        <td>14-08-12</td>
                        <td>8283</td>
                        <td>Apple iPhone</td>
                        <td>$730</td>
                        <td>Processing</td>
                      </tr>
                      <tr>
                        <td>14-08-12</td>
                        <td>3283</td>
                        <td>Windows Mobile</td>
                        <td>$130</td>
                        <td>Shipped</td>
                      </tr>
                      <tr>
                        <td>14-08-12</td>
                        <td>1523</td>
                        <td>Galaxy SIII</td>
                        <td>$430</td>
                        <td>Completed</td>
                      </tr>                                                                                                             
                    </tbody>
                  </table>
                   
               </div>
            </div>
            
            <div class="sep-bor"></div>
         </div>
      </div>
     
      
       <?php include 'includes/whatsNew.php'; ?>	
      
      
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