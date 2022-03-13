<?
$servername="localhost";
$username="root";
$password="";
$dbname="okas";



/*creat my database connection*/

 $conn = new mysqli($servername, $username, $password,$dbname); 
 /*check wether it is working or not*/
 
if ($conn->connect_error) {     die("Connection failed: " . $conn->connect_error); 
}
  echo "Connected successfully";
  

session_start();




    if(isset($_post["add"])){
		
		if(isset($_session["cart"])){
			$item_array_id=array_column($_session["cart"],product_id);
			if(!in_array($_get["id"],$item_array_id)){
				$count=count($_session["cart"]);
				$item_array=array(
					'product_id'=>$_get["id"],
					'item_name'=>$_post["hidden_name"],
					'product_price'=>$_post["hidden_price"],
					'item_quantity'=>$_post["quantity"],
					);
					
				$_session["cart"][$count]=$item_array;
				 echo '<script>window.locaation="cartd.php"</script>' ;
				 
				
			}else{
				echo' <script>alert("already added")</script>';
				 echo '<script>window.locaation="cartd.php"</script>' ;



			}else{
				$item_array=array(
					'product_id'=>$_get["id"],
					'item_name'=>$_post["hidden_name"],
					'product_price'=>$_post["hidden_price"],
					'item_quantity'=>$_post["quantity"],
					);
						

				$_session["cart"][0]=$item_array;
				
				
			}
				if(isset($_get["action"])){
				if($_get["action"]=="delete"){
						foreach($_session["cart"] as $keys=>$value){
							if($value["product_id"]==$_get["id"]){
							unset($_session["cart"][$keys]);
							echo '<script>alert("deleted....!")</script>';
							echo '<script>window.locaation="cartd.php"</script>' ;
							
							
							
							
							
							}
						}	
				}
				}	
							
		?>					
							
							
							
								
								
				

















<!DOCTYPE html>
<html>
<head>
   <title>Cart page</title>
   <style>
   
   
   
   </style>   


</head>
  <h2>Shopping cart</h2>
  <?php
     $query="SELECT * FROM shoppingcart ORDER BY id ASC ";
     $result=mysqli_query($conn,$query);
	 if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
			?>
			<form method="post" action="cartd.php?action=add&id=<?php echo $row["id"];?>">
			
			    
			      <div class="product">
				    <img src="<?php echo $row["image"];?> class="img-x">
					<h5 class="a"><?php echo $row["pname"];?></h5>
					<h5 class="b"><?php echo $row["price"];?></h5>
					<input type="text" name="quantity" class="form-control" value="1">
					<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>">
					<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
					<input type="submit" name="add" style="margi-top:5px;" class="btn-btn success" value="claculate">
					
				  </div>
			</form>
			<?php
		}
	 }	
	?> 
	
	
	<div style="clear:both"></div>
	<h3 class="title2">Shopping cart Details</h3>
	<div class="table responsive">
	<table>
	<tr>
	   <th width="30%">Product Name</th>
	   <th width="10%">Quantitt</th>
	   <th width="13%">Price Details</th>
	   <th width="10%">Total Price</th>
	   <th width="17%">Remove Item</th>
	   
	</tr>


	<?php
	    if(!empty($_session["cart"])){
            $total=0;
            foreach ($_session["cart"] as $key=>$value){
			    ?>
				<tr>
					<td><?php echo $value["item_name"];?></td>
					<td><?php echo $value["item_quantity"];?></td>
					<td>Rs.<?php echo $value["product_price"];?></td>
					<td>
					    Rs.<?php echo number_format($value["item_quantity"] * $value["product_price"],2) ;?></td>
							</td><a href="cart.php?action=delete&id=<?php echo $value[product_id];?> "><span>Delete</span></a></td>
							
							
				</tr>			
				<?php
				$total=$total+($value["item_quantity"] * $value["product_price"]);
			}	
					
				?>
				<tr>
					<td colspan="3" align="right">Total</td>
					<th align="right">Rs. <?php echo number_format($total,2);?></th>
					<td>BUY</td>
					</tr>
					<?php
		}			
	   
	   ?>
		</table>
	   
	</div>
<body>
</html>	
	   
	   
	   
	   
	   
	   
	   
	   
	   
