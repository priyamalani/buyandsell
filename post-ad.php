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
                         <li><a href="post-ad.php">Post Ad</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-9">
                  <h3><i class="icon-gift color"></i> &nbsp;Add Product</h3>
                  <!-- Your details -->
                  <form class="form-horizontal" role="form" action="actions/process_ad.php" method="POST">
                    <div class="form-group">
                      <label for="inputName" class="col-md-2 control-label">Name</label>
                      <div class="col-md-4">
                        <input class="form-control" id="inputName" name="name" placeholder="Name" type="text" value="">
                      </div>
                    </div>             
                    <div class="form-group">
                        <label for="Descriptions" class="col-md-2 control-label">Descriptions</label>
                        <div class="col-md-4">
                           <textarea class="form-control" rows="3" placeholder="Descriptions" name="descriptions"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="sellingPrice" class="col-md-2 control-label">Selling Price</label>
                      <div class="col-md-4">
                        <input class="form-control" id="sellingPrice" placeholder="Selling Price" type="text" name="sellingPrice" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="actualPrice" class="col-md-2 control-label">Actual Price</label>
                      <div class="col-md-4">
                        <input class="form-control" id="actualPrice" placeholder="Actual Price" type="text" name="actualPrice" value="">
                      </div>
                    </div> 
                    <div class="form-group">
                      <label for="quantity" class="col-md-2 control-label">Quantity</label>
                      <div class="col-md-4">
                        <input class="form-control" id="quantity" placeholder="Quantity" type="text" name="quantity" value="">
                      </div>
                    </div>  
                    <div class="form-group">
                      <label for="inputCategory" class="col-md-2 control-label">Category</label>
                      <div class="col-md-4">
                          <? echo getCategory(0, 'baseCategory', '', TRUE);?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="subCategoryDiv" class="col-md-2 control-label">Sub-Category</label>
                      <div class="col-md-4" id="subCategoryDiv">
                          
                      </div>
                    </div>  
                    <div class="form-group">
                      <label for="estimatedDelivery" class="col-md-2 control-label">Delivery Date</label>
                      <div class="col-md-4">
                        <input class="form-control" id="estimatedDelivery" placeholder="Estimated Delivery Time" type="date" name="estimatedDelivery" value="">
                      </div>
                    </div> 
                    <div class="form-group">
                      <label for="shippingCharges" class="col-md-2 control-label">Shipping Cost</label>
                      <div class="col-md-4">
                        <input class="form-control" id="shippingCharges" placeholder="Shipping Charges" type="text" name="shippingCharges" value="">
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="returnPolicy" class="col-md-2 control-label">Return Policy</label>
                        <div class="col-md-4">
                           <textarea id="returnPolicy" class="form-control" rows="3" placeholder="Return Policy" name="returnPolicy"></textarea>
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="moreDetails" class="col-md-2 control-label">More Details</label>
                        <div class="col-md-4">
                           <textarea id="moreDetails" class="form-control" rows="3" placeholder="Eg: Size, Modal, etc" name="moreDetails"></textarea>
                        </div>
                    </div> 
                    <div class="form-group">
                      <label for="image1" class="col-md-2 control-label">Image 1</label>
                      <div class="col-md-4">
                        <input class="form-control" id="imageFile1" type="file" name="imageFile1" value="" style="display: none;">
                        <input class="btn-primary btn" id="image1" type="button" name="image1" value="Click to upload">
                      </div>
                    </div>  
                    <div class="form-group">
                      <label for="image2" class="col-md-2 control-label">Image 2</label>
                      <div class="col-md-4">
                        <input class="form-control" id="imageFile2" type="file" name="imageFile2" value="" style="display: none;">
                        <input class="btn-primary btn" id="image2" type="button" name="image2" value="Click to upload">
                      </div>
                    </div> 
                    <div class="form-group">
                      <label for="image3" class="col-md-2 control-label">Image 3</label>
                      <div class="col-md-4">
                        <input class="form-control" id="imageFile3" type="file" name="imageFile3" value="" style="display: none;">
                        <input class="btn-primary btn" id="image3" type="button" name="image3" value="Click to upload">
                      </div>
                    </div>  
                    <hr>
                    <div class="form-group">
                      <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="btn btn-danger">Save Changes</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                      </div>
                    </div>
                  </form> 
                   
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

<script>
$(function() {
   $('#image1').click(function(){
      $('#imageFile1').click(); 
   }); 
   $('#image2').click(function(){
      $('#imageFile2').click(); 
   }); 
   $('#image3').click(function(){
      $('#imageFile3').click(); 
   }); 
   
   $('#baseCategory').change(function(){
      var cat = $('#baseCategory').val();
      
      if(cat == 1){
          $('#subCategoryDiv').html('<? echo getCategory(1, 'subCategory', '');?>');
      }
      else if(cat == 2){
          $('#subCategoryDiv').html('<? echo getCategory(2, 'subCategory', '');?>');
      }
      else if(cat == 3){
          $('#subCategoryDiv').html('<? echo getCategory(3, 'subCategory', '');?>');
      }
      else if(cat == 4){
          $('#subCategoryDiv').html('<? echo getCategory(4, 'subCategory', '');?>');
      }
   });
   
//   $("input[name='imageFile1']").change(function() { this.form.submit(); });
//   $("input[name='imageFile2']").change(function() { this.form.submit(); });
//   $("input[name='imageFile3']").change(function() { this.form.submit(); });
});
</script>