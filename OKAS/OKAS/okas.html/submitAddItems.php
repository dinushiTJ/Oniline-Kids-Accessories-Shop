<?php
include_once 'config.php';
?>
<?php

//Getting Values from the HTML form
$name = $_POST['item_name'];
$code = $_POST['quantity'];
$price = $_POST['price'];
$qty = $_POST['item_description'];
$des = $_POST['item_code'];

//Insert query execution
$sql = "INSERT INTO mytable (item_name,quantity,price,item_description,item_code) VALUES('$name','$code','$price','$qty','$des')";

if(mysqli_query($conn,$sql))
{
	echo "alert('Record added successfully!')";
	header("Location:output.php");
}
else
{
	
}

//closing the connection
mysqli_close($conn);
?>