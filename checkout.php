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
      
      
      
      <?php include 'includes/catchyBlock.php'; ?>
      
      <!-- CTA Starts -->
      <?php include 'includes/CTABlock.php'; ?>
      <!-- CTA Ends -->
      
      <?php include 'includes/footer.php'; ?>
        </body></html>