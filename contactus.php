<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
	<body>

      <!-- Shopping cart Modal -->
     <?php include 'includes/shoppingCart.php'; ?>
      <!-- /.modal -->
           

      <?php include 'includes/navigation.php'; ?>      
      <!-- Page content -->
      
      <div class="contactus ">
            <!-- Google maps -->
            <div class="gmap">
               <!-- Google Maps. Replace the below iframe with your Google Maps embed code -->
               <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Nagpur,+Maharashtra&amp;aq=0&amp;oq=nagpur&amp;sll=12.993518,77.660294&amp;sspn=0.02233,0.038581&amp;ie=UTF8&amp;hq=&amp;hnear=Nagpur,+Maharashtra&amp;t=m&amp;z=11&amp;ll=21.1458,79.088155&amp;output=embed"></iframe><br />
            </div>
            
            <div class="container">
                        <div class="row">
                           <div class="col-md-6 col-sm-7">
                              <div class="cwell">
                                 <!-- Contact form -->
                                    <h5>Contact Form</h5>
                                    
                                    <form role="form">
                                      <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input class="form-control" id="name" placeholder="Enter Name" type="text">
                                      </div>                                    
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Content</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                      </div>                                      
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox"> Important?
                                        </label>
                                      </div>
                                      <button type="submit" class="btn btn-info">Send</button>
                                      <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                    
                                 </div>
                           </div>
                           <div class="col-md-6 col-sm-5">
                                 <div class="cwell">
                                    <!-- Address section -->
                                       <h5>Address</h5>
                                       <div class="address">
                                           <address>
                                              <!-- Company name -->
                                              <h6>Responsive Web, Inc.</h6>
                                              <!-- Address -->
                                              795 Folsom Ave, Suite 600<br>
                                              San Francisco, CA 94107<br>
                                              <!-- Phone number -->
                                              <abbr title="Phone">P:</abbr> (123) 456-7890.
                                           </address>
                                            
                                           <address>
                                              <!-- Name -->
                                              <h6>Full Name</h6>
                                              <!-- Email -->
                                              <a href="mailto:#">first.last@gmail.com</a>
                                           </address>
                                           
                                       </div>
                                 </div>
                           </div>
                        </div>

         </div>
      </div>
      
      
      
      <?php include 'includes/catchyBlock.php'; ?>
      
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