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
            <h2><i class="icon-desktop color"></i> Blog <small>Subtext for header</small></h2>
            <hr>
         </div>
      </div>
      <!-- Page title -->
      
      <!-- Page content -->
      
      <div class="blog">
         <div class="container">
            <div class="row">
                  <div class="col-md-8 col-sm-8">
                           <div class="posts">
                           
                              <!-- Each posts should be enclosed inside "entry" class" -->
                              <!-- Post one -->
                              <div class="entry">
                                 <h2><a href="#">Sed justo sceleque ut constur sceisque</a></h2>
                                 
                                 <!-- Meta details -->
                                 <div class="meta">
                                    <i class="icon-calendar"></i> 26-2-2012 <i class="icon-user"></i> Admin <i class="icon-folder-open"></i> <a href="#">General</a> <span class="pull-right"><i class="icon-comment"></i> <a href="#">2 Comments</a></span>
                                 </div>
                                 
                                 <!-- Thumbnail -->
                                 <div class="bthumb">
                                    <a href="#"><img src="images/back1.jpg" alt="" class="img-responsive"></a>
                                 </div>
                                 
                                 <!-- Para -->
                                 <p>Lorem ipsum dolor sit amet, 
consectetur adipiscing elit. Duis vulputate eros nec odio egestas in 
dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et 
netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus
 imperdiet. <a href="#">Praesent ultricies</a> enim ac ipsum aliquet 
pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales
 eu orci. Duis a risus sed dolor placerat semper quis in urna. Nam risus
 magna, fringilla sit amet blandit viverra, dignissim eget est. Ut <strong>commodo ullamcorper risus nec</strong>
 mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis 
tortor, et placerat quam posuere posuere. Morbi tincidunt posuere turpis
 eu laoreet. Nulla facilisi. Aenean at massa leo. Vestibulum in varius 
arcu.</p>

                              </div>
                              
                            <!-- Comment section -->
                  
                              <div class="comments">
                                 
                                    <div class="title"><h5>2 Comments</h5></div>
                                    
                                    <ul class="comment-list">
                                      <li class="comment">
                                        <a class="pull-left" href="#">
                                          <img class="avatar" src="images/user.jpg">
                                        </a>
                                          <div class="comment-author"><a href="#">Ashok</a></div>
                                          <div class="cmeta">Commented on 25/12/2012</div>
                                          <p>Nulla facilisi. Sed justo 
dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus 
condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
                                          <div class="clearfix"></div>
                                      </li>
                                      <li class="comment reply">
                                        <a class="pull-left" href="#">
                                          <img class="avatar" src="images/user.jpg">
                                        </a>
                                          <div class="comment-author"><a href="#">Ashok</a></div>
                                          <div class="cmeta">Commented on 25/12/2012</div>
                                          <p>Nulla facilisi. Sed justo 
dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus 
condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
                                          <div class="clearfix"></div>
                                      </li>
                                    </ul>
                              </div>
                              
                              <!-- Comment posting -->
                              
                              <div class="respond">
                                 <div class="title"><h5>Post Reply</h5></div>
                                 
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
                                        <label for="exampleInputEmail1">Comment</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                      </div>
                                      <button type="submit" class="btn btn-info">Submit</button>
                                      <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                 
                              </div>
                              
                              <!-- Navigation -->
                              
                              <div class="navigation button">  
                                    <div class="pull-left"><a href="#" class="btn btn-info">� Previous Post</a></div>
                                    <div class="pull-right"><a href="#" class="btn btn-info">Next Post �</a></div>
                                    <div class="clearfix"></div>
                              </div>

                              <div class="clearfix"></div>
                              
   
                              
                           </div>
                        </div>                        
                        <div class="col-md-4 col-sm-4">

                            <!-- Sidebar 1 -->

                           <div class="sidebar">
                              <!-- Widget -->
                              <div class="widget">
                                 <h4>Search</h4>
                                    <form class="form-inline widget-search" role="form">
                                      <div class="form-group">
                                        <input class="form-control" id="exampleInputEmail2" placeholder="Type" type="text">
                                      </div>
                                      <button type="submit" class="btn btn-info">Search</button>
                                    </form>
                              </div>
                              <div class="widget">
                                 <h4>Recent Posts</h4>
                                 <ul>
                                 <li>Etiam adipiscing posuere justo, nec iaculis justo dictum non</li>
                                 <li>Cras tincidunt mi non arcu hendrerit eleifend</li>
                                 <li>Aenean ullamcorper justo tincidunt justo aliquet et lobortis diam faucibus</li>
                                 <li>Maecenas hendrerit neque id ante dictum mattis</li>
                                 <li>Vivamus non neque lacus, et cursus tortor</li>
                                 </ul>
                              </div>
                              <div class="widget">
                                 <h4>About</h4>
                                 <p>Nulla facilisi. Sed justo dui, id 
erat. Morbi auctor adipiscing tempor. Phasellus condimentum rutrum 
aliquet. Quisque eu consectetur erat. Proin rutrum, erat eget posuere 
semper, <em>arcu mauris posuere tortor</em>,velit at <a href="#">magna sollicitudin cursus</a> ac ultrices magna. </p>
                              </div>                              
                           </div>                                                
                        </div>

                        
    </div>
         </div>
      </div>
      
      
      
      <?php include 'includes/catchyBlock.php'; ?>
      <!-- CTA Starts -->
      <?php include 'includes/CTABlock.php'; ?>
      <!-- CTA Ends -->
      

      <?php include 'includes/footer.php'; ?>
        </body></html>