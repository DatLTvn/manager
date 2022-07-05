<!--A Design by Isource
Author: isource
Author URL: http://isource.vn
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Home Shoppe for Iphone, Android and Smartphone Website Templates | Home :: Isource</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Home Shoppe Iphone web template, Andriod web template, Smartphone web template,  webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href="<?php echo e(asset('public/smartphone/css/style.css')); ?>" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo e(asset('public/smartphone/css/slider.css')); ?>" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo e(asset('public/smartphone/css/menu.css')); ?>" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo e(asset('public/smartphone/js/jquery-1.7.2.min.js')); ?>"></script> 
<script type="text/javascript" src="<?php echo e(asset('public/smartphone/js/startstop-slider.js')); ?>"></script>
</head>
<body>
  <div class="wrap">
	<div class="header">
	 <div class="header_bottom">
		<div class="logo">
				<a href="index.html"><img src="<?php echo e(asset('public/smartphone/images/logo.png')); ?>" alt="" /></a>
			</div>
	        <nav class="nav">
	            <ul class="nav-list">
	                <li class="nav-item"><a href="index.html">Home</a></li>
	                <li class="nav-item"><a href="<?php echo e(URL::to('/about-sp')); ?>">About</a></li>
	                <li class="nav-item"><a href="delivery.html">Delivery</a></li>
	                <li class="nav-item has-inner">
	                    <a href="#">Categories</a>
	                    <ul class="nav-inner">
	                          <li><a href="#">Mobile Phones</a></li>
						      <li><a href="#">Desktop</a></li>
						      <li><a href="#">Laptop</a></li>
						      <li><a href="#">Accessories</a></li>
						      <li><a href="#">Software</a></li>
						       <li><a href="#">Sports &amp; Fitness</a></li>
						       <li><a href="#">Footwear</a></li>
						       <li><a href="#">Jewellery</a></li>
						       <li><a href="#">Clothing</a></li>
						       <li><a href="#">Home Decor &amp; Kitchen</a></li>
						       <li><a href="#">Beauty &amp; Healthcare</a></li>
						       <li><a href="#">Toys, Kids &amp; Babies</a></li>
	                    </ul>
	                </li>
	                <li class="nav-item"><a href="news.html">News</a></li>
	                <li class="nav-item"><a href="<?php echo e(URL::to('/contact-sp')); ?>">Contact</a></li>
	            </ul>
	        </nav>
	        <div class="clear"> </div>
	        <script type="text/javascript" src="<?php echo e(asset('public/smartphone/js/responsive.menu.js')); ?>"></script>
         </div>	  
         <div class="header_top">
			  <div class="cart">
			  	   <h3>Welcome to our Online Store! </h3>
			  	     <p><span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
			  	   	<ul class="dropdown">
							<li>you have no items in your Shopping cart</li>
					</ul></div></p>
			  </div>
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
  <div class="search_box">
	     		<form>
	     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
	     		</form>
	     	</div>   	
	    <div class="clear"></div>
	 </div>	     	  
	           <div class="header_slide">
					 <div class="header_bottom_right">					 
					 	 <div class="slider">					     
							 <div id="slider">
			                    <div id="mover">
			                    	<div id="slide-1" class="slide">			                    
									 <div class="slider-img">
									     <a href="preview.html"><img src="<?php echo e(asset('public/smartphone/images/slide-1-image.png')); ?>" alt="learn more" /></a>									    
									  </div>
						             	<div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 20% OFF</h2>
									   <div class="features_list">
									   	<h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>							               
							            </div>
							             <a href="preview.html" class="button">Shop Now</a>
					                   </div>			               
									  <div class="clear"></div>				
				                  </div>	
						             	<div class="slide">
						             		<div class="slider-img">
									     <a href="preview.html"><img src="<?php echo e(asset('public/smartphone/images/slide-3-image.jpg')); ?>" alt="learn more" /></a>
									  </div>
						             		<div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 40% OFF</h2>
									   <div class="features_list">
									   	<h4>Get to Know More About Our Memorable Services</h4>							               
							            </div>
							             <a href="preview.html" class="button">Shop Now</a>
					                   </div>								             	 						             					                 
									  <div class="clear"></div>				
				                  </div>
				                  <div class="slide">						             	
					                  <div class="slider-img">
									     <a href="preview.html"><img src="<?php echo e(asset('public/smartphone/images/slide-2-image.jpg')); ?>" alt="learn more" /></a>
									  </div>
									  <div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 10% OFF</h2>
									   <div class="features_list">
									   	<h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>							               
							            </div>
							             <a href="preview.html" class="button">Shop Now</a>
					                   </div>	
									  <div class="clear"></div>				
				                  </div>												
			                 </div>		
		                </div>
					 <div class="clear"></div>					       
		         </div>
		      </div>
		   <div class="clear"></div>
		</div>
   </div>
 <div class="main">
    <div class="content">
    	<div class="wrap">
    	<div class="content_top">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.html"><img src="<?php echo e(asset('public/smartphone/images/feature-pic1.jpg')); ?>" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$620.87</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.html"><img src="<?php echo e(asset('public/smartphone/images/feature-pic2.jpg')); ?>" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$899.75</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.html"><img src="<?php echo e(asset('public/smartphone/images/feature-pic3.jpg')); ?>" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$599.00</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.html"><img src="<?php echo e(asset('public/smartphone/images/feature-pic4.jpg')); ?>" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$679.87</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>				     
				</div>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.html"><img src="<?php echo e(asset('public/smartphone/images/new-pic1.jpg')); ?>" alt="" /></a>					
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$849.99</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.html"><img src="<?php echo e(asset('public/smartphone/images/new-pic2.jpg')); ?>" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$599.99</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview.html"><img src="<?php echo e(asset('public/smartphone/images/new-pic4.jpg')); ?>" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$799.99</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
				 <a href="preview.html"><img src="<?php echo e(asset('public/smartphone/images/new-pic3.jpg')); ?>" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>					 
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$899.99</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
    </div>
 </div>
</div>
   <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Customer Service</a></li>
						<li><a href="#">Advanced Search</a></li>
						<li><a href="delivery.html">Orders and Returns</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.html">Site Map</a></li>
						<li><a href="#">Search Terms</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="contact.html">Sign In</a></li>
							<li><a href="index.html">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="contact.html">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+91-123-456789</span></li>
							<li><span>+00-123-000000</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><img src="<?php echo e(asset('public/smartphone/images/facebook.png')); ?>" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="<?php echo e(asset('public/smartphone/images/twitter.png')); ?>" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="<?php echo e(asset('public/smartphone/images/skype.png')); ?>" alt="" /> </a></li>
							      <li><a href="#" target="_blank"> <img src="<?php echo e(asset('public/smartphone/images/dribbble.png')); ?>" alt="" /></a></li>
							      <li><a href="#" target="_blank"> <img src="<?php echo e(asset('public/smartphone/images/linkedin.png')); ?>" alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>			
        </div>
        <div class="copy_right">
				<p>Company Name © All rights Reseverd | Design by  <a href="http://isource.vn">Isource</a> </p>
		   </div>
    </div>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\relaravel\resources\views/smartphone/index.blade.php ENDPATH**/ ?>