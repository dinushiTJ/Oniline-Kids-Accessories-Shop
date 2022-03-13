<!DOCTYPE html>
<html>
	<head>
		
			<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--to make a responsive web page-->
			<link rel="icon" type="image/x-icon" href="images/ti.png">
			<link rel="stylesheet" type="text/css" href="css/homeStyles.css">
			<link rel="stylesheet" type="text/css" href="css/kidsStyles.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--font awsome link for the rating bar and for some animations-->
			<title>Kids Accessory Shop</title> 
	</head>
		
	<body>
			  
		<header>
			<div id= "shadow">	
					
					<!--LOGO-->
					<img src="images\logo.png" width="246px"  alt="bumpy cart" class="logo">
					<img src="images\bumpy.png" width="1000px"   alt="bumpy cart" class="logo">
		
		<!--Fixed sideout Login-->
		<div class="login">
				<ul>
					<li><a href=""><i><img src="images/lo.png" width="40px" height="40px"></i> Log-in / Sign-up</a></li>
				</ul>
		</div>
		<!--Fixed sideout Login ends-->
		
		</header>
		
		<!--Fixed sideout Shopping cart-->
		<div class="Shopping-cart">
				<ul>
					<li><a href=""><i><img src="images/cart.png" width="60px" height="60px"></i> Cart </a></li>
				</ul>
		</div>
		<!--Fixed sideout Shopping cart ends-->
		
		
		<!--Nav Bar-->
		<div class="navbar-container">
			<b>
				<ul class="navbar">
					<li><a>✦</a></li>
					<li><a class="navlink" href ="home.php">HOME</a></li>
					<li><a>✦</a></li>
					<li><a class="navlink"  href ="baby.php">BABY</a></li>
					<li><a>✦</a></li>
					<li><a class="navlink"  href ="toddlers.php">TODDLER</a></li>
					<li><a>✦</a></li>
					<li><a class="current"  href ="Kids.php">KIDS</a></li> 
					<li><a>✦</a></li>
					<li><a  class="navlink" href ="">CONTACT US</a></li>
					<li><a>✦</a></li>
					<li><a class="navlink"  href ="">ABOUT US</a></li>
					<li><a>✦</a></li>
		
					<!--Search Bar-->
					<div id="search">
							<form method="get" action="search.php">
								<div class="tb">
								<div class="td">
									<input type="text" placeholder="Search" ></div>
									<div class="td" id="s-search">
									  <button type="submit" >
										<div id="s-circle"></div>
										<span></span>
									  </button>
									</div>
								</div>
							</form>
					</div>
					<!--Search Bar ends-->
				</ul>
			</b><!--Bold-->
			
		</div>
		<!--Nav Bar ends-->

<div class="wrapper">
	
		<div class="content">
			<!-- content here -->
			<div class="product-grid product-grid--flexbox">
				<div class="product-grid__wrapper">
					<!-- Product list start here -->
	
					<!-- Single product -->
					<div class="product-grid__product-wrapper">
						<div class="product-grid__product">
							<div class="product-grid__img-wrapper">			
								<img src="images/by1.jpeg" alt="Img" class="product-grid__img" />
							</div>
							<span class="product-grid__title">This Kid, T-shirt and trouser</span>
							<span class="product-grid__price">Rs.1200.00</span>
							<div class="product-grid__extend-wrapper">
								<div class="product-grid__extend">
									<p class="product-grid__description">Grey blue quality leather shoes for kids</p>
									<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>				
									<span class="product-grid__btn product-grid__view">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end Single product -->
	
					<!-- Single product -->
					<div class="product-grid__product-wrapper">
						<div class="product-grid__product">
							<div class="product-grid__img-wrapper">			
								<img src="images/by2.jpg" alt="Img" class="product-grid__img" />
							</div>
							<span class="product-grid__title">Yellow t-shirt</span>
							<span class="product-grid__price">Rs.400.00</span>
							<div class="product-grid__extend-wrapper">
								<div class="product-grid__extend">
									<p class="product-grid__description">Pink quality leather shoes for kids girls</p>
									<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>				
									<span class="product-grid__btn product-grid__view">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end Single product -->
	
					<!-- Single product -->
					<div class="product-grid__product-wrapper">
						<div class="product-grid__product">
							<div class="product-grid__img-wrapper">			
								<img src="images/oi1.jpg" alt="Img" class="product-grid__img" />
							</div>
							<span class="product-grid__title">Pink-blue girl party wear</span>
							<span class="product-grid__price">Rs.1920.00</span>
							<div class="product-grid__extend-wrapper">
								<div class="product-grid__extend">
									<p class="product-grid__description">blue denim quality snikers for kids</p>
									<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>				
									<span class="product-grid__btn product-grid__view">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end Single product -->
					<!-- Single product -->
					<div class="product-grid__product-wrapper">
						<div class="product-grid__product">
							<div class="product-grid__img-wrapper">			
								<img src="images/oi2.jpg" alt="Img" class="product-grid__img" />
							</div>
							<span class="product-grid__title">Pink shirt-blue short</span>
							<span class="product-grid__price">Rs.1640.00</span>
							<div class="product-grid__extend-wrapper">
								<div class="product-grid__extend">
									<p class="product-grid__description">Greay blue quality leather shoes for babies</p>
									<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>				
									<span class="product-grid__btn product-grid__view">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end Single product -->
					<!-- Single product -->
					<div class="product-grid__product-wrapper">
						<div class="product-grid__product">
							<div class="product-grid__img-wrapper">			
								<img src="images/oi3.jpg" alt="Img" class="product-grid__img" />
							</div>
							<span class="product-grid__title">white blouse and denim short</span>
							<span class="product-grid__price">Rs.1550.00</span>
							<div class="product-grid__extend-wrapper">
								<div class="product-grid__extend">
									<p class="product-grid__description">Greay blue quality leather shoes for babies</p>
									<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>				
									<span class="product-grid__btn product-grid__view">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end Single product -->
					<!-- Single product -->
					<div class="product-grid__product-wrapper">
						<div class="product-grid__product">
							<div class="product-grid__img-wrapper">			
								<img src="images/oi4.jpg" alt="Img" class="product-grid__img" />
							</div>
							<span class="product-grid__title">pinky white jump suit</span>
							<span class="product-grid__price">Rs.1890.00</span>
							<div class="product-grid__extend-wrapper">
								<div class="product-grid__extend">
									<p class="product-grid__description">Greay blue quality leather shoes for babies</p>
									<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>				
									<span class="product-grid__btn product-grid__view">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end Single product -->
					<!-- Single product -->
					<div class="product-grid__product-wrapper">
						<div class="product-grid__product">
							<div class="product-grid__img-wrapper">			
								<img src="images/oi5.jpg" alt="Img" class="product-grid__img" />
							</div>
							<span class="product-grid__title">Party suit- boy</span>
							<span class="product-grid__price">Rs.1400.00</span>
							<div class="product-grid__extend-wrapper">
								<div class="product-grid__extend">
									<p class="product-grid__description">Quality cotton cute dress for girls</p>
									<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>				
									<span class="product-grid__btn product-grid__view">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end Single product -->
					<!-- Single product -->
					<div class="product-grid__product-wrapper">
						<div class="product-grid__product">
							<div class="product-grid__img-wrapper">			
								<img src="images/oi6.jpeg" alt="Img" class="product-grid__img" />
							</div>
							<span class="product-grid__title">Denim trouser and pink t-shirt</span>
							<span class="product-grid__price">Rs.1590.00</span>
							<div class="product-grid__extend-wrapper">
								<div class="product-grid__extend">
									<p class="product-grid__description">Quality Princess Lace Outfit for kids girls</p>
									<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>				
									<span class="product-grid__btn product-grid__view">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end Single product -->
					<!-- Single product -->
					<div class="product-grid__product-wrapper">
						<div class="product-grid__product">
							<div class="product-grid__img-wrapper">			
								<img src="images/oi7.jpg" alt="Img" class="product-grid__img" />
							</div>
							<span class="product-grid__title">Summer Stylish denim dress</span>
							<span class="product-grid__price">Rs.1280.00</span>
							<div class="product-grid__extend-wrapper">
								<div class="product-grid__extend">
									<p class="product-grid__description">Quality cotton summer dress for girls</p>
									<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>				
									<span class="product-grid__btn product-grid__view">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end Single product -->
					
				
			
					
				</div>		
			</div>
		</div>
	</div>
	</body>



<!-- Footer-->
	<footer>
		<div class="footer-container">
				<div class="footer-column">
					<ul>
						<li><a href ="">C o n t a c t &nbsp; U s</a></li>
						<li><a href ="">A b o u t &nbsp; U s</a></li>
						<li><a href ="">F A Q</a></li>
					</ul>
				</div>
			
				<div class="footer-column">
					<ul>
						<li><a href ="">F i n d &nbsp; U s</a></li>
						<li><a href ="">T e r m s &nbsp; & &nbsp; C o n d i t i o n</a></li>
						<li><a href ="">B l o g</a></li>
					</ul>
				</div>
			
				<div class="footer-icons">
					<div style="position: absolute; right:0;">
						<img class="payment-option" src="images\pp.png" alt="logo" width="60px">
						<img class="payment-option" src="images\mc.png" alt="logo" width="60px">
						<img class="payment-option" src="images\vc.png" alt="logo" width="60px">
					</div>
				</div>
			
				<div class="footer-social">
					<img class="flex-item-fb" src="images\fb.png" alt="logo">
					<img class="flex-item-ig" src="images\ig.png" alt="logo">
					<img class="flex-item-gp" src="images\gp.png" alt="logo">
					<img class="flex-item-tt" src="images\tt.png" alt="logo">
				</div>

		</div>

		<center>
			<h6>&#169;2019 BumpyCart. All rights reserved.</h6>
		</center>

	</footer>
</html>




<!--
	Created by: Dinushi Jayasinghe
	ID: IT19075754
-->



