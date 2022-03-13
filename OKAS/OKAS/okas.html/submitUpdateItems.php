<?php
include_once'config.php';
?>

<?php
//Get form data to update the exsisting data
$name = $_POST['item_name'];
$code = $_POST['quantity'];
$price = $_POST['price'];
$qty = $_POST['item_description'];
$des = $_POST['item_code'];
//Update Query
$sql = "UPDATE mytable set item_name='$name',quantity='$code', price='$price',item_description='$qty',item_code='$des' WHERE item_name='$name'";

if(mysqli_query($conn,$sql))
{
	echo "alert('Record updates successfully!')";
	header("Location:output.php");
}
else
{
	echo "alert('Error: Could not able to execute $sql.')";
}
?>