<?php
session_start();
?>
<html>
<head>
<title>Admin</title>

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> 
<link rel="stylesheet" type="text/css" href="css/style.css"> 
<link href="css/category_style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
function myfnx(){
	var cat_type=document.forms['category_form']['cat_type'].value;
	var productName=document.forms['category_form']['product_name'].value;
    var description=document.forms['category_form']['description'].value;
	var price=document.forms['category_form']['price'].value;
	if(cat_type=="none"){
document.getElementById("user_error").innerHTML="please! select type of category";
document.forms['category_form']['product_name'].focus();
return false;
}
if(productName==null || productName=="")
{
	alert("enter product name plz!!!");
	return false;
}
if(price==null || price=="")
{
	alert("enter price of the product!");
	return false;
}
}
</script>
</head>

<body>
<div id="header">
	<div class="inHeader"><div style="float: left;font-size: 20px;color: #00CC00;">Online Shopping <span>STORE</span></div>
		<div class="mosAdmin">
		Hello, Website Administrator<br>
		<a href="logout.php">Logout</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="orderAction.php">OrderAction</a></li>
		<li><a href="productAction.php">ProductAction</a></li>
		     
	</ul>
	</div>
	<div id="rightContent">
	 
  <div class="form">
  <h1>Add Products</h1>
  <form action="category_db.php"method="post" name="category_form" enctype="multipart/form-data" onsubmit="return myfnx()">
  <div class="type">Select Type-
  <select name="cat_type">
  <option value="none">--NONE--</option>
  <option value="clothing">Clothing</option>
  <option value="shoes">Shoes</option>
  <option value="grocery">Grocery</option>
  <option value="electronics">Electronics</option>
  <option value="toys">Toys</option>
  <option value="sports">Sports</option>
  </select><span id="user_error"></span></div>
  <input type="text" name="product_name" placeholder="Product Name" />
  <div class="address"><textarea name="description" placeholder="Description" cols="3" rows="3"/></textarea>
  </div>
  <label>Select Product Image: </label><div class="image"><input type="file" name="image"  /></div>
  <div class="number"><input type="text" name="price" placeholder="Price"/></div>
  
  <div class="button"><input type="submit" name="submit" value="ADD" /></div>
  </form>
  </div>
  		
		
	</div>
<div class="clear"></div>

</div>
</body>
</html>