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
            <h2><i class="icon-desktop color"></i> Checkout <small>Subtext for header</small></h2>
            <hr>
         </div>
      </div>
      <!-- Page title -->
      
      <!-- Page content -->
      
      <div class="checkout">
         <div class="container">
            <h4>Shipping &amp; Billing Details</h4>
            <br>
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label for="inputName" class="col-md-2 control-label">Name</label>
                <div class="col-md-4">
                  <input class="form-control" id="inputName" placeholder="Name" type="text">
                </div>
              </div>            
              <div class="form-group">
                <label for="inputEmail1" class="col-md-2 control-label">Email</label>
                <div class="col-md-4">
                  <input class="form-control" id="inputEmail1" placeholder="Email" type="email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPhone" class="col-md-2 control-label">Phone Number</label>
                <div class="col-md-4">
                  <input class="form-control" id="inputPhone" placeholder="Phone" type="text">
                </div>
              </div>
              <div class="form-group">
                <label for="inputCountry" class="col-md-2 control-label">Country</label>
                <div class="col-md-4">
                  <select class="form-control">
                    <option selected="selected">Select Country</option>
                    <option>USA</option>
                    <option>India</option>
                    <option>Canada</option>
                    <option>UK</option>
                  </select>
                </div>
              </div>              
              <div class="form-group">
                  <label for="inputAddress" class="col-md-2 control-label">Address</label>
                  <div class="col-md-4">
                     <textarea class="form-control" rows="3" placeholder="Address"></textarea>
                  </div>
              </div>
              <div class="form-group">
                <label for="inputZip" class="col-md-2 control-label">Zip Code</label>
                <div class="col-md-4">
                  <input class="form-control" id="inputZip" placeholder="Zip Code" type="text">
                </div>
              </div>
              
              <hr>
              <h4>Payment Details</h4>
              
              <div class="form-group">
                <label for="inputPayment" class="col-md-2 control-label">Payment Method</label>
                <div class="col-md-4">
                  <select class="form-control">
                    <option selected="selected">Payment Method</option>
                    <option>Credit Card</option>
                    <option>Debit Card</option>
                    <option>Internet Banking</option>
                    <option>Check</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-offset-2 col-md-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Accept Terms &amp; Conditions
                    </label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                  <button type="submit" class="btn btn-danger">Confirm Order</button>
                  <button type="reset" class="btn btn-default">Reset</button>
                </div>
              </div>
            </form>
            
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