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
<style>
table {
   caption-side: bottom;
   border: 2px dashed black;
}
td {
   border: 2px solid midnightblue;
   text-align: center;
}
td[colspan] {
   box-shadow: inset 0 0 10px lightblue;
   text-align: center;
}
caption {
   font-size: 16px;
   font-weight: bold;
}
</style>
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
	 
  <?php

session_start();
include("db.php");
if($_GET['orderid'])
{
$sno=$_GET['orderid'];
$a="select *from `order`";
$b=mysqli_query($con,$a);
echo "<h1>Order Details</h1>";
echo "<table cellspacing='5px' cellpadding='10px' >";
echo "<tr><th>Order Id</th><th>Customer Name</th><th>Address</th><th>E-mail.</th><th>Product</th><th>Total Amount</th><th>Payment Mode</th><th>Order Status</th><th></th><th>Action</th></tr>";
while($c=mysqli_fetch_array($b))
{
echo "<tr><td>".$c[0]."</td><td>".$c[1]."</td><td>".$c[2]."</td><td>".$c[3]."</td><td>".$c[4]."</td><td>".$c[5]."</td><td>".$c[6]."</td>
<form action='SendMail.class.php' method='post'><td><input type = 'text' name = 'email' value='.$c[3]' hidden/>
<textarea name='msg' style='width: 100px;height: 50px' placeholder='Update Status'></textarea></td>
<td><input type='submit' name='update' value='change' /></td>
</form><td><a href=deleteorder.php?orderid=$c[0]><img src='images/delete.png' height='20px' width='20px'></a></td></tr>";
}
}
echo "</table>";

?>
 </div>		
		
<div class="clear"></div>

</div>
</body>
</html>