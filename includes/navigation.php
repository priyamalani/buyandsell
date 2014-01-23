<!-- Logo & Navigation starts -->

      <div class="header">
<!--         <div class="container">
            <div class="row">
               <div class="col-md-2 col-sm-2">
                   Logo 
                  <div class="logo">
                     <h1><a href="index.php">ShopAndSell</a></h1>
                  </div>
               </div>
               <div class="col-md-6 col-sm-5">
                   Navigation menu 
						<div class="navi">
							<div id="ddtopmenubar" class="mattblackmenu">
								<ul>
									<li><a href="index.php">Home</a></li>
                           <li><a href="#" rel="ddsubmenu1">Account<img class="downarrowpointer" style="width: 11px; height: 7px;" src="images/arrow-down.gif"></a>
										
									</li>
									<li><a href="#" rel="ddsubmenu1">Pages<img class="downarrowpointer" style="width: 11px; height: 7px;" src="images/arrow-down.gif"></a>
										
									</li>
									<li><a href="#" rel="ddsubmenu1">Computers<img class="downarrowpointer" style="width: 11px; height: 7px;" src="images/arrow-down.gif"></a>
										
									</li>                       
									<li><a href="contactus.php">Contact</a></li>
								</ul>
							</div>
						</div>

						 Dropdown NavBar 
                  <div class="navis"><select><option value="" selected="selected">Menu</option><option value="index.php">Home</option><option value="#">Account</option><option value="account.php">My Account</option><option value="viewcart.php">View Cart</option><option value="checkout.php">Checkout</option><option value="wishlist.php">Wish List</option><option value="orderhistory.php">Order History</option><option value="editprofile.php">Edit Profile</option><option value="confirmation.php">Confirmation</option><option value="#">Pages</option><option value="404.php">404</option><option value="faq.php">FAQ</option><option value="blog.php">Blog</option><option value="careers.php">Careers</option><option value="support.php">Support</option><option value="aboutus.php">About</option><option value="#">Computers</option><option value="items.php">Desktop</option><option value="items.php">Laptop</option><option value="items.php">NetBook</option><option value="items.php">All-In-One PC</option><option value="items.php">Alienware</option><option value="contactus.php">Contact</option></select></div>                  
                  
               </div>
               
               <div class="col-md-4 col-sm-5">
                  <div class="kart-links">
                     <a href="login.php">Login</a> 
                     <a href="register.php">Signup</a>
                     <a data-toggle="modal" href="#shoppingcart"><i class="icon-shopping-cart"></i> 3 Items - $300</a>
                  </div>
               </div>
            </div>
         </div>-->
 
        <nav class="navbar navbar-default" role="navigation">
         <div class="">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="index.php">ShopAndSell</a>
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbar-collapse-1">
           <ul class="nav navbar-nav">
<!--             <li><a href="#">Home</a></li>-->
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fashion <b class="caret"></b></a>
               <ul class="dropdown-menu">
                 <li><a href="items.php?id=5">Men Clothing</a></li>
                 <li><a href="items.php?id=6">Women Clothing</a></li>
                 <li><a href="items.php?id=7">Baby Clothing</a></li>
                 <li><a href="items.php?id=8">Accessories</a></li>
                 <li><a href="items.php?id=9">Beauty Products</a></li>
                 <li class="divider"></li>
                 <li><a href="items.php?id=10">Others</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home & Garden <b class="caret"></b></a>
               <ul class="dropdown-menu">
                 <li><a href="items.php?id=11">Art & Crafts</a></li>
                 <li><a href="items.php?id=12">Home Decor</a></li>
                 <li><a href="items.php?id=13">Garden</a></li>
                 <li><a href="items.php?id=14">Pet Supplies</a></li>
                 <li class="divider"></li>
                 <li><a href="items.php?id=15">Others</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electronic <b class="caret"></b></a>
               <ul class="dropdown-menu">
                 <li><a href="items.php?id=16">Phones</a></li>
                 <li><a href="items.php?id=17">Cameras</a></li>
                 <li><a href="items.php?id=18">Computers</a></li>
                 <li class="divider"></li>
                 <li><a href="items.php?id=19">Other</a></li>
               </ul>
             </li>
             <li><a href="items.php?id=20">Other</a></li>
           </ul>
           <form class="navbar-form navbar-left search_form" role="search" style="max-width: 250px;" action="actions/process_search.php" method="POST">
             <div class="input-group">
                <input type="text" class="form-control" id="search" name="search">
                <span class="input-group-addon submit_search btn"><i class="icon-search"></i></span>
              </div>
           </form>
           <div class="nav navbar-nav navbar-right">
             <div class="kart-links">
                            <a href="support.php">Support</a>
                            <?php 
                            if(isset($_SESSION['id'])){ 
                                echo '<a href="account.php">Account</a> ';
                                echo '<a href="actions/process_logout.php">Logout</a> ';
                            }
                            else{
                                echo '<a href="login.php">Login</a> 
                                     <a href="register.php">Signup</a>';
                            }
                            ?>
                            <a data-toggle="modal" href="#shoppingcart"><i class="icon-shopping-cart"></i> 3</a>
                         </div>
           </div>
         </div><!-- /.navbar-collapse -->

          </div>
        </nav>
      </div>
      
      <!-- Logo & Navigation ends -->
     