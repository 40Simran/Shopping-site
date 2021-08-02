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
					<form action="search.php" class="navbar-search pull-right">
						<input type="text" class="search-query" placeholder="search..." name ="query" required />
					</form>
				
					<ul class="nav pull-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="categories.php">Categoriess</a></li>
						<li class="active"><a href="about.php">About Us</a></li>
						<li><a href="" data-toggle="modal" data-target="#modal-contact-form">Contact us</a></li>
						<li hidden><a href="cart.php"><img src="img/cart.png" height = "10px" width ="30px"/></a></li>
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
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> <span class="divider">/</span></li>
				<li class="active">About Us</li>
			</ul>
			
			<div class="page-header">
				<h1>About Us. <small>Who we are.</small></h1>
			</div>
		</section>
		
		
		
		
		
		
		<!-- PAGE CONTENT -->
		<section>
			<h4>Online Shop</h4>

			<div class="row">
				<div class="span8">
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				</div>
				
				<div class="span4">
					<p class="well well-large lead text-center">This is a great company motto! It will be remembered for years to come.</p>
				</div>
			</div>
			
			<hr />
		</section>
	
	
	
	
	
		<!-- TEAM -->
		<section>
			<h4>The Team</h4>
			
			<ul class="thumbnails">
				<li class="span6">
					<div class="thumbnail">
						<img src="img/custom/demo-team-member.jpg" alt="Team Member" />
						
						<div class="caption">
							<h5>Simran Kaur</h5>
							<p class="muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							
							<p><small>Follow Simran Kaur: <a href="">Twitter</a> <span class="muted">/</span> <a href="">Facebook</a></small></p>
						</div>
					</div>
				</li>
				<li class="span6">
					<div class="thumbnail">
						<img src="img/custom/demo-team-member.jpg" alt="Team Member" />
						
						<div class="caption">
							<h5>Meet Patel</h5>
							<p class="muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							
							<p><small>Follow Meet Patel: <a href="">Twitter</a> <span class="muted">/</span> <a href="">Facebook</a></small></p>
						</div>
					</div>
				</li>
				<li class="span6">
					<div class="thumbnail">
						<img src="img/custom/demo-team-member.jpg" alt="Team Member" />
						
						<div class="caption">
							<h5>Navpreet Kaur</h5>
							<p class="muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							
							<p><small>Follow Navpreet Kaur: <a href="">Twitter</a> <span class="muted">/</span> <a href="">Facebook</a></small></p>
						</div>
					</div>
				</li>
				<li class="span6">
					<div class="thumbnail">
						<img src="img/custom/demo-team-member.jpg" alt="Team Member" />
						
						<div class="caption">
							<h5>RahulGiri</h5>
							<p class="muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							
							<p><small>Follow Rahul Giri: <a href="">Twitter</a> <span class="muted">/</span> <a href="">Facebook</a></small></p>
						</div>
					</div>
				</li>
			</ul>
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
			
			<p class="text-center muted">&copy; Copyright 2021  Online Shop by: Fantastic Four</p>
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