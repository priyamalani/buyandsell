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
                          <a href="index.php" class="btn btn-info">Continue Shopping</a>
                          <a href="checkout.php" class="btn btn-danger">CheckOut</a>
                        </div>
                      </div>
                    </div>

               
               </div>
            </div>
         </div>
      </div>
     
      
       <?php include 'includes/whatsNew.php'; ?>	
      
      
      
      <?php include 'includes/catchyBlock.php'; ?>
      
      <!-- CTA Starts -->
      <?php include 'includes/CTABlock.php'; ?>
      <!-- CTA Ends -->
      
      
      <?php include 'includes/footer.php'; ?>
        </body></html>