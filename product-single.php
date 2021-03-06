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
				<a href="index.html" class="brand">Online Shop</a>
				
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
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="products.html">Products</a></li>
						<li><a href="about.html">About Us</a></li>
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
			<ul class="breadcrumb">
				<li><a href="index.html">Home</a> <span class="divider">/</span></li>
				<li class="active">Products</li>
			</ul>
			
			<div class="page-header">
				<h1>Products. <small>We build amazing stuff.</small></h1>
			</div>
		</section>
		
		
		
		
		
		
		<!-- PAGE CONTENT -->
		<section>
			<h4>Product Name</h4>
			
			<div class="row c-product-cta">
				<div class="span6">
					<p class="muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				</div>
				
				<div class="span6">
					<div class="btn-group pull-right">
						<a href="" class="btn btn-info">Buy Now</a>
					</div>
				</div>
			</div>
			
			<div class="carousel slide" id="product-carousel">
				<ol class="carousel-indicators">
					<li data-target="#product-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#product-carousel" data-slide-to="1"></li>
					<li data-target="#product-carousel" data-slide-to="2"></li>
				</ol>
			
				<div class="carousel-inner">
					<div class="item active">
						<img src="img/custom/demo-product-large-1.jpg" alt="Demo Image" />
						
						<div class="carousel-caption">
							<h4>A nice demo image</h4>
							<p>The image description 1.</p>
						</div>
					</div>

					<div class="item">
						<img src="img/custom/demo-product-large-2.jpg" alt="Demo Image" />
						
						<div class="carousel-caption">
							<h4>A nice demo image</h4>
							<p>The image description 2.</p>
						</div>
					</div>

					<div class="item">
						<img src="img/custom/demo-product-large-3.jpg" alt="Demo Image" />
						
						<div class="carousel-caption">
							<h4>A nice demo image</h4>
							<p>The image description 3.</p>
						</div>
					</div>
				</div>
				
				<a href="#product-carousel" class="carousel-control left" data-slide="prev">&lsaquo;</a>
				<a href="#product-carousel" class="carousel-control right" data-slide="next">&rsaquo;</a>
			</div>
		</section>
		
		
		
		
		
		<!-- Q&A -->
		<section>
			<div class="row">
				<div class="span6">
					<h4>Product Q&A</h4>
				
					<div class="accordion" id="product-qa">
						<div class="accordion-group">
							<div class="accordion-heading">
								<a href="#collapse-1" data-parent="#product-qa" data-toggle="collapse" class="accordion-toggle">Question 1</a>
							</div>
							
							<div class="accordion-body collapse in" id="collapse-1">
								<div class="accordion-inner">
									This is answer 1.
								</div>
							</div>
						</div>
			
						<div class="accordion-group">
							<div class="accordion-heading">
								<a href="#collapse-2" data-parent="#product-qa" data-toggle="collapse" class="accordion-toggle">Question 2</a>
							</div>
							
							<div class="accordion-body collapse" id="collapse-2">
								<div class="accordion-inner">
									This is answer 2.
								</div>
							</div>
						</div>
			
						<div class="accordion-group">
							<div class="accordion-heading">
								<a href="#collapse-3" data-parent="#product-qa" data-toggle="collapse" class="accordion-toggle">Question 3</a>
							</div>
							
							<div class="accordion-body collapse" id="collapse-3">
								<div class="accordion-inner">
									This is answer 3.
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="span6">
					<h4>Product Testimonials</h4>
					
					<blockquote>
						<p>This is a testimonial.</p>
						<small>John</small>
					</blockquote>
					
					<hr />
					
					<blockquote>
						<p>This is a testimonial.</p>
						<small>John</small>
					</blockquote>
					
					<hr />

					<blockquote>
						<p>This is a testimonial.</p>
						<small>John</small>
					</blockquote>
				</div>
			</div>
			
			<hr />
			
			<ul class="pager">
				<li class="previous"><a href="#">&larr; Previous</a></li>
				<li class="next"><a href="#">Next &rarr;</a></li>
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
			
			<p class="text-center muted">&copy; Copyright 2021 Online Shop by: Fanastic Four</p>
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