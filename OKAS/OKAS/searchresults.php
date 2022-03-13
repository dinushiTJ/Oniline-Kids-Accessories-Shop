
	
<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--to make a responsive web page-->
	<link rel="icon" type="image/x-icon" href="images/ti.png">
	<link rel="stylesheet" type="text/css" href="css/homeStyles.css">
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
			<li><a href="cartd.php"><i><img src="images/cart.png" width="60px" height="60px"></i> Cart </a></li>
		</ul>
</div>
<!--Fixed sideout Shopping cart ends-->


<!--Nav Bar-->
<div class="navbar-container">
	<b>
		<ul class="navbar">
			<li><a>✦</a></li>
			<li><a class="current" href ="home.php">HOME</a></li>
			<li><a>✦</a></li>
			<li><a class="navlink"  href ="baby.php">BABY</a></li>
			<li><a>✦</a></li>
			<li><a class="navlink"  href ="toddlers.php">TODDLER</a></li>
			<li><a>✦</a></li>
			<li><a class="navlink"  href ="Kids.php">KIDS</a></li> 
			<li><a>✦</a></li>
			<li><a  class="navlink" href ="contactus.php">CONTACT US</a></li>
			<li><a>✦</a></li>
			<li><a class="navlink"  href ="aboutus.php">ABOUT US</a></li>
			<li><a>✦</a></li>
		</ul>
	</b><!--Bold-->
</div>
<!--Nav Bar ends-->
	

<main>
	<?php
	include('php/conn.php');

		$keyword = ($_POST["searchbox"]);
  
		$sql = "SELECT * FROM items where itemName LIKE '%$keyword%' OR category LIKE '%$keyword%'";
		$result = $conn -> query($sql);

		$count = mysqli_num_rows($result);

		if($count > 0)
		{
			//if found, print results
			echo "<div style='display:flex;flex-wrap:wrap;width:100%;min-height:400px;'>";
			while($row=$result->fetch_assoc()){
				echo "<div style='margin:10px 10px;border:1px solid black;background-color:yellowgreen;height:300px;'><form method='post' action='php/searchtocart.php?id=".$row['itemCode']."'>";
				echo "<center><img style='width:150px;' src=".$row['item_image']."></center><p>Item: ".$row['itemName']."<p>Category: ".$row['category']."<p>Price: ".$row['price']."<p>Rating: ".$row['rating']."";
				echo "<button type='submit' name='submit' style='height:50px;background-color:yellow;margin:0 auto; margin-top:5px;'>Add to cart</button></form></div>";
			}
			echo "</div>";

		}else{
			echo "<div style='height:400px;'><p>Could not find a matching item!</div>";
	}

?>
</main>
</body>


<footer><!-- Footer-->
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
</footer><!--Footer ends-->
</html>



<!--
	Created by: Dinushi Jayasinghe
	ID: IT19075754
-->



