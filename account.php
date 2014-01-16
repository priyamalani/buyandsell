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
                 <?php include 'includes/accountSideNav.php'; ?> 
               </div>
               <div class="col-md-9">
                  <h3><i class="icon-user color"></i> &nbsp;My Account</h3>
                  <!-- Your details -->
                   <div class="address">
                     <address>
                       <!-- Your name -->
                       <strong><?echo $_SESSION['name'];?></strong><br>
                       <!-- Address -->
                       <p>
                           <abbr title="Address"><i class="icon-home"></i></abbr> :
                           <?echo $_SESSION['address'];?>
                       </p>
                       <!-- Phone number -->
                       <abbr title="Phone"><i class="icon-phone"></i></abbr> : <a href="tel:<?echo $_SESSION['phone'];?>"><?echo $_SESSION['phone'];?></a><br>
                       <abbr title="Email"><i class="icon-envelope"></i></abbr> : <a href="mailto:<?echo $_SESSION['email'];?>"><?echo $_SESSION['email'];?></a>
                     </address>
                   </div>

                   <hr>
                   
                   <h4>My Posting</h4>

                     <table class="table table-striped tcart">
                       
                        <?php
                             $result = getMembersAllProduct($_SESSION['id']);
                             $count = count($result);
                             if($count>=1){
                                echo '<thead>
                                             <tr>
                                               <th>Date</th>
                                               <th>ID</th>
                                               <th>Name</th>
                                               <th>Price</th>
                                               <th>Views</th>
                                               <th>Edit</th>
                                               <th>Delete</th>
                                             </tr>
                                           </thead>
                                           <tbody>';
                             for($i=0; $i<$count; $i++){
                             echo '<tr>
                                <td>' . $result[$i]['create_date'] . '</td>
                                <td>' . $result[$i]['product_id'] . '</td>
                                <td><a href="single-item.php?item_id='.$result[$i]['product_id'].'" class="single-item" id="'. $result[$i]['product_id'] .'">' . $result[$i]['product_name'] . '</a></td>
                                <td>' . $result[$i]['selling_price'] . '</td>
                                <td>' . $result[$i]['visits'] . '</td>
                                <td id="'.$result[$i]['product_no'].'" class="editItem"><a href="#"><i class="icon-pencil"></i></a></td>
                                <td id="'.$result[$i]['product_no'].'" class="deleteItem"><a href="#"><i class="icon-trash"></i></a></td>    
                                </tr>';  
                             }
                                echo '</tbody>';
                             }
                             else {
                                    echo '<p>You have no posting. To post a new ad <a href="post-ad.php">Click here</a></p>';
                                }
                        ?>                                              
                       
                     </table>
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
    $(document).on( "click", '.deleteItem', function(){
        if(confirm('Are you sure you want to delete?')){
        $.ajax({  
            url: ("actions/delete-item.php"),  
            data: {
            product_no : this.id
            },
            success: function( data ){  
             window.location.reload();
            } 
        });
        }
        else
        return false;
     });
});
</script>