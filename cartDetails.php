<!DOCTYPE html>
 <html lang="en">

<head>
	<meta charset="utf-8">
	<title>Online Shop</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/bootstrap-responsive.css" />
	<link rel="stylesheet" href="css/custom.css" />
<style>
table{
border-collapse: collapse;
border: 1px solid black;	

}
th, td {
    padding: 20px;
    text-align: left;
	 border-bottom: 1px solid black;
}
tr:nth-child(even) {
	background-color: #f2f2f2;
	}
.carttotal{
font-family:roboto slab, sans-serif;
	border:none;
	font-size:1.0em;
	margin-top:10px;
	padding:15px 35px 15px 35px;
width:100px;
outline:none;
	border-radius:5px;
background-color:#CCC;
	cursor:pointer;
	color:black;	
margin-left: 30%;	
float:left;
}
.shopping{
font-family:roboto slab, sans-serif;
	border:none;
	font-size:1.0em;
	margin-top:10px;
	padding:15px 35px 15px 35px;
width:200px;
outline:none;
	border-radius:5px;

	cursor:pointer;
	color:black;	
margin-left:10px;	
float:left;
}

#checkout{
	font-family:roboto slab, sans-serif;
	border:none;
	font-size:1.0em;
	margin-top:10px;
	padding:15px 35px 15px 35px;
width:260px;
outline:none;
	border-radius:5px;
background-color:#00B279;
	cursor:pointer;
	color:white;	
margin-left:10px;	
float:left;

}

#checkout:hover{
	background-color:#7323DC;
}

.payment{
margin-top:100px;
height:300px;
width:100%;

}
.pay{
width:100%;	
border: 1px solid black;	
}
.pay tr:nth-child(even) {
	background-color: #f2f2f2;
	
	}
</style>
<script type="text/javascript">
		
function isChecked(){
 var checkedCash = document.getElementById('cash').checked;
 var checkedCard = document.getElementById('card').checked;
 
 if(checkedCash == false && checkedCard == false){
 alert('You need to select an option!');
 return false;
 }
 else{
 return true;
 }
 }
</script> 
</head>
<body>
	
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a href="index.php" class="brand">Online Shop</a>
				
				<a data-toggle="collapse" data-target=".nav-collapse" class="btn btn-navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				
				<div class="collapse nav-collapse">
					<form action="search.php" class="navbar-search pull-right" method ="post">
						<input type="text" class="search-query" placeholder="search..." name = "query"/>
					</form>
				
					<ul class="nav pull-right">
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="categories.php">Products</a></li>
						<li><a href="" data-toggle="modal" data-target="#modal-contact-form">Contact us</a></li>
						<li><a href="cartDetails.php"><img src="img/cart.png" height = "10px" width ="30px"/></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div> <!-- end navbar -->
	
	
	
	
	
	<!-- MODAL CONTACT FORM -->
	<div class="modal hide fade" id="modal-contact-form">
		<div class="modal-header">
			<button class="close" data-dismiss="modal">&times;</button>
			<h3>Contact Us</h3>
		</div>
		
		<div class="modal-body">
			<form action="" class="form-horizontal">
				<div class="control-group">
					<label for="contact-name" class="control-label">Name:</label>
					
					<div class="controls">
						<input type="text" id="contact-name" />
					</div>
				</div>

				<div class="control-group">
					<label for="contact-email" class="control-label">Email:</label>
					
					<div class="controls">
						<input type="email" id="contact-email" />
					</div>
				</div>

				<div class="control-group">
					<label for="contact-message" class="control-label">Message:</label>
					
					<div class="controls">
						<textarea name="contact-message" id="contact-message" cols="30" rows="10"></textarea>
					</div>
				</div>
				
				<div class="control-group">
					<div class="controls">
						<input type="submit" class="btn btn-primary" value="Send Message" />
					</div>
				</div>
			</form>
		</div>
		
		<div class="modal-footer">
			<a href="" data-dismiss="modal" class="btn">Cancel</a>
		</div>
	</div> <!-- end modal -->
	
	
	
	
	<div class="container">
		<!-- PAGE HEADER -->
		<section>
			
			<?php
session_start();
include("db.php");
if($_SESSION['username']){
	echo "<h2 align='center'  id='welcome'>WELCOME  ".$_SESSION['username']."</h2>"; 
}

$buyer=$_SESSION['username'];
$query="select * from `cart` WHERE  `username`='$buyer' ";
$data=mysqli_query($con,$query);

echo "<table  cellspacing='8'  align='center'>";
	echo "<tr>
	<td></td>
	<td><b>Image</b></td>
	<td><b>Product</b></td>
	<td><b>Price</b></td>
	</tr>";
	while($c=mysqli_fetch_array($data))
{
	echo "<tr>
	<td><a href=deletecart.php?cartID=$c[0]><img src='img/c.png' height='20px' width='20px'></a></td>
	<td><img src='admin/upload/".$c['image']."'height='80px' width='100px'/></td>
	<td>".$c['productName']."</td> 
	<td><b>$".$c['price']."</b></td>
   	</tr>";

}
	echo"<tr></tr>";
echo "</table>";
	
	
$query2="select sum(`price`)  from `cart`  WHERE  `username`='$buyer' ";
$data2=mysqli_query($con,$query2);

$c2=mysqli_fetch_array($data2);


?>
<div class="shopping"><a href="categories.php">CONTINUES SHOPPING!!</a><br><a href="userLogout.php">Logout</a></div>
<div class="carttotal">

Total.....$
<?php
$total=$c2['sum(`price`)'];
echo "<b>".$total."</b>";
?>
</div>



<div class="payment">
<h2>PAYMENT GATEWAYS</h2>

<form action="ordersDB.php"  method="post" enctype="multipart/form-data" onsubmit="return isChecked();>


<table class="pay">
<tr>
<td>
<input type ="hidden" name="total" value="<?php echo $total; ?>" />
</td>
<td>
</td>
</tr>
<tr>
<td>
<input type="radio" name="payment" value="cash" id ="cash"/><label>CASH ON DELIVERY</label> 
</td>
<td>
<label>Pay with cash upon delivery. <b>*Rs 30</b> will be added as delivery charges</label> 
</td>
</tr>

<tr>
<td>
<input type="radio" name="payment" value="check" id = "card"/><label>CREDIT CARD/ DEBIT CARD</label> 
</td>
<td>
<label>MAKE YOUR PAYMENT THROUGH CARD</label> 
</td>
</tr>
</table>

<div class="checkout"><input type="submit" name="submit" value="PROCEED TO CHECKOUT" id="checkout"/></div>
</form>
</div><!--payment div-->



		</section>
	
	
		<!-- FOOTER -->
		<section>
			<hr />
		
			<br><br><p class="lead text-center">Wanna get in touch? Email us at <a href="">example@domain.com</a>.</p>
			
			<hr />
			
			<ul class="inline text-center">
				<li><strong>Follow Us On:</strong></li>
				<li><a href="">Twitter</a></li>
				<li><a href="">Facebook</a></li>
				<li><a href="">LinkedIn</a></li>
			</ul>
			
			<p class="text-center muted">&copy; Copyright 2021  Online Shop by: Fanastic Four</p>
		</section>
	</div> <!-- end container -->
	
	<!-- JavaScript -->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script>
		$(document).ready(function(){
			$('.carousel').carousel({
				interval: 5000
			});
		});

 
	</script>

</body>
</html>