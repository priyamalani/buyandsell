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
                                    <a href="#"><img src="files/back1.jpg" alt="" class="img-responsive"></a>
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
                                          <img class="avatar" src="files/user.jpg">
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
                                          <img class="avatar" src="files/user.jpg">
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