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
					<form action="" class="navbar-search pull-right">
						<input type="text" class="search-query" placeholder="search..." />
					</form>
				
					<ul class="nav pull-right">
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="categories.php">Categoriess</a></li>
						<li ><a href="about.php">About Us</a></li>
						<li><a href="" data-toggle="modal" data-target="#modal-contact-form">Contact us</a></li>
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
include('db.php');

if($_SESSION['userID']){
	echo "<h2 align='center'  id='welcome'>WELCOME  ".$_SESSION['username']."</h2>";
?>
	<a href="cartDetails.php" data-dismiss="modal" class="btn">Orders</a>
<?php	
$id=$_SESSION['userID'];
$query="SELECT * FROM `signup` WHERE `userID`='$id'";
$data=mysqli_query($con,$query);
$row=mysqli_fetch_array($data);

echo"<table >";

	echo"<tr>";
	echo"<td ><label>Name :</label></td>";
	echo"<td>". $row['username']."</td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td ><label>Email:</label></td>";
	echo"<td>". $row['emailid']."</td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td ><label>Contact:</label></td>";
	echo"<td>". $row['phone']."</td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td ><label>ADDRESS :</label></td>";
	echo"<td>". $row['address']."</td>";
	echo"</tr>";
echo"</table>";
}
else{
	header('location:userAccount.php');
}

?>

	
		</section>
	
	
		<!-- FOOTER -->
		<section>
			<hr />
		
			<p class="lead text-center">Wanna get in touch? Email us at <a href="">example@domain.com</a>.</p>
			
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