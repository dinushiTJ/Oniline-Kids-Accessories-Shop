<?php
	include('conn.php');
	$itemid = ($_GET["id"]); 
 
	$sql = "SELECT * FROM items where itemCode='$itemid'";
	$result = $conn -> query($sql);

	$count = mysqli_num_rows($result);

	if($count > 0)
	{
        $row = mysqli_fetch_assoc($result);
        $name= $row['itemName'];
        $price= $row['price'];
        $image= mysqli_real_escape_string($conn, $row['item_image']);

        $sql = "INSERT INTO shoppingcart (id,pname, image,price) VALUES ('','$name','$image','$price')";
        mysqli_query($conn, $sql);

        if (mysqli_connect_error($sql)){
            header("Location: ../home.php?addtocart=error");
            exit();
        } else {
            header("Location: ../home.php?addtocart=success");
            exit();
        }

	}else{
        echo "<div style='height:400px;'><p>Error adding item to cart!</div>";
        header("Location: ../home.php?addtocart=error");
        exit();
    }


?>