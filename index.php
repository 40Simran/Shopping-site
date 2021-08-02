<!DOCTYPE html>
 <html lang="en"> 

<head>
	<meta charset="utf-8">
	<title>Online Store</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/bootstrap-responsive.css" />
	<link rel="stylesheet" href="css/custom.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/slider_script.js"></script>
<style>
.slider{
	height:400px;
	width:800px;
	margin:0 auto;
	
	}
.slider img{
	height:400px;
	width:800px;
	position:absolute;
	}
</style>
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
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="categories.php">Products</a></li>
						<li><a href="" data-toggle="modal" data-target="#modal-contact-form">Contact us</a></li>
						<li hidden><a href="cartDetails.php"><img src="img/cart.png" height = "10px" width ="30px"/></a></li>
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
	
	
	
	
	
	<!-- FEATURED PRODUCT -->
	<section>
		<div class="container">
			<div class="row">
				<div class="span4">
					<h1>Welcome </h1><h2> Hurry Up!</h2>
					
					<p class="lead">Our all stores are open and products are available at <b>70%</b> off. </br>We Sell Varieties of electronics goods, clothing and shoes and more...</p>
					
					<div class="c-cta">
						<div class="btn-group">
							<a href="categories.php" class="btn btn-info btn-large">Buy Now</a>
						</div>
					</div>
					
					</div>
				
				<div class="span8">
					<div class="play"></div>
					<div class="slider">
						<img src="img/custom/tuts-hub.jpg" alt="Image" />
						<img src="img/custom/slider1.jpg" />
						<img src="img/custom/slider2.jpg" />
						<img src="img/custom/slider3.jpg" />
						<img src="img/custom/slider4.jpg" />
					</div>
				</div>
			</div>
			
			<hr />
		</div> <!-- end container -->
	</section>
	
	
	
	
	
	<div class="container">
		<!-- COMPANY INFO -->
		<section>
			<h3>Online Shop</h3>

			<div class="row">
				<div class="span8">
					<p>Over 20 Years of Experience to Give You Great Deals on Quality Home Products and More. Shop Items You Love at Overstock, with Free Shipping on Everything* and Easy Returns. 
					Thousands of Styles That Ship Fast and Free., all in one place. Shop now for items you want at prices you’ll love.</p>
					<p>Shop now for items you want at prices you’ll love. </p>
				</div>
				
				<div class="span4">
					<p class="well well-large lead text-center">"The Weekend Has Arrived!!!"</p>
				</div>
			</div>
		</section>
		
		<hr />
		
		<!-- TESTIMONIALS -->
		<h3>Testimonials</h3>
		
		<div class="carousel slide" id="testimonials">
			<ol class="carousel-indicators">
				<li data-target="#testimonials" data-slide-to="0" class="active"></li>
				<li data-target="#testimonials" data-slide-to="1"></li>
				<li data-target="#testimonials" data-slide-to="2"></li>
				<li data-target="#testimonials" data-slide-to="3"></li>
			</ol>
		
			<div class="carousel-inner">
				<div class="item active">
					<blockquote>
						<p>This is testimonial 1</p>
						<small>Simran Kaur</small>
					</blockquote>
				</div>

				<div class="item">
					<blockquote>
						<p>This is testimonial 2</p>
						<small>Meet Patel</small>
					</blockquote>
				</div>

				<div class="item">
					<blockquote>
						<p>This is testimonial 3</p>
						<small>Navpreet Kaur</small>
					</blockquote>
				</div>

				<div class="item">
					<blockquote>
						<p>This is testimonial 4</p>
						<small>RahulGiri</small>
					</blockquote>
				</div>
			</div>
		</div> <!-- end carousel -->
		
		<hr />
		
		
		
		
		
		<!-- FOOTER -->
		<section>
			<p class="lead text-center">Wanna get in touch? Email us at <a href="">example@domain.com</a>.</p>
			
			<hr />
			
			<ul class="inline text-center">
				<li><strong>Follow Us On:</strong></li>
				<li><a href="">Twitter</a></li>
				<li><a href="">Facebook</a></li>
				<li><a href="">LinkedIn</a></li>
			</ul>
			
			<p class="text-center muted">&copy; Copyright 2021 Online Shop by: Fantastic Four</p>
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