<!doctype html>
<html>
<head>
<style>
 body {
  background-image: url("images/bag.jpg");
  
}




input[type=text], select, textarea {
  width: 15%;
  height:10%;
  padding: 2px;
 
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 2px 2px 2px 0;
  display: inline-block;
}

input[type=submit] {
  background-color:none;
  color: black;
  padding: 2px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color:blue;
}

.container {
  border-radius: 5px;
  background-color:none;
  padding: 20px;
  opacity:15;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
	margin-left:25%
  }
}

</style>

<title>additems</title>
<body>
<div class="container">
  <form class = "form-style-9" method = "POST" action="submitAddItems.php">
    <div class="row">
      <div class="col-25">
        <label for="iname">Item Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="item_name" name="item_name" placeholder="Item Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Iquantity">Item Quantity</label>
      </div>
      <div class="col-75">
        <input type="text" id="quantity" name="quantity" placeholder="Item Quantity">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="price">Price</label>
		
      </div>
      <div class="col-75">
        <input type="text" id="price" name="price" placeholder="Price"> 
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Description">Description</label>
      </div>
      <div class="col-75">
        <textarea id="item_description" name="item_description" placeholder="Description" style="height:25px"></textarea>
      </div>
    </div>
	
	<div class="col-25">
        <label for="code">Code</label>
      </div>
      <div class="col-75">
        <input type="text" id="item_code" name="item_code" placeholder="Item Code">
      </div>
    </div>
	
    <div class="row">
      <input type="submit" value="Submit">
    </div>
	<div class = "row">
	 <input type = "reset" value = "reset">
	 </div>
  </form>
</div>
</body>
</html>
