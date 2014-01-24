<?php
require_once 'actions/functions.php';

$product_id = getParameter('product_id');
$details = getProductDetails($product_id);

if((isset($_SESSION['id'])) && ($details['members_id'] == $_SESSION['id'])){
?>
<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
	
	<body>

      <!-- Shopping cart Modal -->
     <?php include 'includes/shoppingCart.php'; ?>
      <!-- /.modal -->
           
    
      <?php include 'includes/navigation.php'; 
      ?> 
      <!-- Page title -->
      <div class="page-title">
         <div class="container">
            <h2><i class="icon-user color"></i> <?echo $_SESSION['name'];?> <small> Account ID: <? echo $_SESSION['id'];?></small></h2>
            <hr>
         </div>
      </div>
      <!-- Page title -->
      
      <!-- Page content -->
      
      <div class="account-content">
         <div class="container">
            
            <div class="row">
               <div class="col-md-3">
                 <?php include 'includes/accountSideNav.php'; ?>  
               </div>
               <div class="col-md-9">
                  <h3><i class="icon-gift color"></i> &nbsp;Add Product</h3>
                  <!-- Your details -->
                  <form class="form-horizontal" enctype="multipart/form-data" role="form" action="actions/process_ad.php" method="POST">
                      <input type="hidden" name="action" id="action" value="update"/>
                      <input type="hidden" name="product_id" id="product_id" value="<?=$product_id?>"/>
                    <div class="form-group">
                      <label for="inputName" class="col-md-2 control-label">Name</label>
                      <div class="col-md-4">
                        <input class="form-control" id="inputName" name="name" placeholder="Name" type="text" value="<?=$details['product_name']?>" required>
                      </div>
                    </div>             
                    <div class="form-group">
                        <label for="Descriptions" class="col-md-2 control-label">Descriptions</label>
                        <div class="col-md-4">
                           <textarea class="form-control" rows="3" placeholder="Descriptions" name="descriptions" required><?=$details['product_desc']?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="sellingPrice" class="col-md-2 control-label">Selling Price</label>
                      <div class="col-md-4">
                        <input class="form-control" id="sellingPrice" placeholder="Selling Price" type="text" name="sellingPrice" value="<?=$details['selling_price']?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="actualPrice" class="col-md-2 control-label">Actual Price</label>
                      <div class="col-md-4">
                        <input class="form-control" id="actualPrice" placeholder="Actual Price" type="text" name="actualPrice" value="<?=$details['actual_price']?>">
                      </div>
                    </div> 
                    <div class="form-group">
                      <label for="quantity" class="col-md-2 control-label">Quantity</label>
                      <div class="col-md-4">
                        <input class="form-control" id="quantity" placeholder="Quantity" type="text" name="quantity" value="<?=$details['quantity']?>">
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
                        <input class="form-control" id="estimatedDelivery" placeholder="Estimated Delivery Time" type="date" name="estimatedDelivery" value="<?=$details['estimated_delivery']?>">
                      </div>
                    </div> 
                    <div class="form-group">
                      <label for="shippingCharges" class="col-md-2 control-label">Shipping Cost</label>
                      <div class="col-md-4">
                        <input class="form-control" id="shippingCharges" placeholder="Shipping Charges" type="text" name="shippingCharges" value="<?=$details['shipping_charges']?>">
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="returnPolicy" class="col-md-2 control-label">Return Policy</label>
                        <div class="col-md-4">
                           <textarea id="returnPolicy" class="form-control" rows="3" placeholder="Return Policy" name="returnPolicy"><?=$details['return_policy']?></textarea>
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="moreDetails" class="col-md-2 control-label">More Details</label>
                        <div class="col-md-4">
                           <textarea id="moreDetails" class="form-control" rows="3" placeholder="Eg: Size, Modal, etc" name="moreDetails"><?=$details['more_details']?></textarea>
                        </div>
                    </div> 
                    <div class="form-group">
                      <label for="image1" class="col-md-2 control-label">Image 1</label>
                      <div class="col-md-4">
                        <?php if(isGood($details['info_1'])){?>
                        <img class="img-responsive" src="images/ads/<? echo $details['members_id'].'/'.$details['info_1'];?>"/><br>
                        <?}?>
                        <input class="form-control hidden" id="imageFile1" type="file" name="imageFile1" value="">
                        <input class="btn-primary btn" id="image1" type="button" name="image1" value="Click to upload new file">
                      </div>
                    </div>  
                    <div class="form-group">
                      <label for="image2" class="col-md-2 control-label">Image 2</label>
                      <div class="col-md-4">
                        <?php if(isGood($details['info_2'])){?>
                        <img class="img-responsive" src="images/ads/<? echo $details['members_id'].'/'.$details['info_2'];?>"/><br>
                        <?}?>
                        <input class="form-control hidden" id="imageFile2" type="file" name="imageFile2" value="">
                        <input class="btn-primary btn" id="image2" type="button" name="image2" value="Click to upload new file">
                      </div>
                    </div> 
                    <div class="form-group">
                      <label for="image3" class="col-md-2 control-label">Image 3</label>
                      <div class="col-md-4">
                        <?php if(isGood($details['info_3'])){?>
                        <img class="img-responsive" src="images/ads/<? echo $details['members_id'].'/'.$details['info_3'];?>"/><br>
                        <?}?>
                        <input class="form-control hidden" id="imageFile3" type="file" name="imageFile3" value="">
                        <input class="btn-primary btn" id="image3" type="button" name="image3" value="Click to upload new file">
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
});
</script>
<?}
 else {
    header('Location: login.php');
}
?>