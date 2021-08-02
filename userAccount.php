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
	<link rel="stylesheet" href="css/signup.css" />
<script type="text/javascript">
function myf(){

var user=document.forms['myform']['username'].value;

if(user==null||user==""){
	document.getElementById("user_error").innerHTML="*The username field is required.";
	document.forms['myform']['username'].focus();
	return false;
}

var email=document.forms['myform']['email'].value;
var at=email.indexOf("@");
var dot=email.lastIndexOf(".");
if(email==null || email==""){
	document.getElementById("email_error").innerHTML="*The email field is required.";
	document.forms['myform']['email'].focus();
	return false;

	}
else if( at<1|| dot-at<2 ||dot+2>=email.length){
	document.getElementById("email_error").innerHTML="*Please enter valid email.";
	document.forms['myform']['email'].focus();
	return false;

}
var pass=document.forms['myform']['password'].value;
var plen=pass.length;
if(pass==null || pass=="")
{
	document.getElementById("pass_error").innerHTML="*The password field is required.";
document.forms['myform']['password'].focus();
	
	return false;
}
else if(plen<6)
{
	document.getElementById("pass_error").innerHTML="*Password length must be in between 6 to 15 char";
document.forms['myform']['password'].focus();
	return false;
}

var conp=document.forms['myform']['con_password'].value;
if(conp==null || conp=="")
{
	document.getElementById("conpass_error").innerHTML="*The confirm password field is required.";
document.forms['myform']['con_password'].focus();
	
	return false;
}
else if(conp!=pass)
{
document.getElementById("conpass_error").innerHTML="*Password confirmation does not match.";
document.forms['myform']['con_password'].focus();
return false;
}
}

function myfun(){
	var email=document.forms['myform1']['loginemail'].value;

if(email==null||email==""){
	document.getElementById("lname_error").innerHTML="*username required.";
	document.forms['myform1']['loginemail'].focus();
	return false;
}
var pass=document.forms['myform1']['loginpass'].value;
var plen=pass.length;
if(pass==null || pass=="")
{
	document.getElementById("lpass_error").innerHTML="*password missing.";
document.forms['myform1']['loginpass'].focus();
	
	return false;
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
						<input type="text" class="search-query" placeholder="search..." name = "search-query"/>
					</form>
				
					<ul class="nav pull-right">
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="categories.php">Categoriess</a></li>
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
	
	
	
	
	<div class="container">
		<!-- PAGE HEADER -->
		<section>
			<div class="page-header">
				<h1>Login <small>register yourself.</small></h1>
			</div>
		</section>
	<section>		
		<div class="content">
<div class="signup">
<h2 class="hsignup">SIGN UP</h2>

<div class="table">
<table width="90%" >
<form action="userDB.php" name="myform" method="post" enctype="multipart/form-data" onsubmit="return myf()">
<tr><td>
<input type="text" name="username" placeholder="USERNAME" id="iuser"/><span id="user_error" style="color:red"> </span><br />
</td></tr>
<tr><td>
<input type="password" name="password" placeholder="PASSWORD" id="ipass" /><span id="pass_error" style="color:red"> </span><br />
</td></tr>
<tr><td>
<input type="password" name="con_password" placeholder="CONFIRM PASSWORD" id="iconpass" /><span id="conpass_error" style="color:red"> </span><br />
</td></tr>
<tr><td>
<input type="email" name="email" placeholder="EMAILID" id="iemail"/><span id="email_error" style="color:red"> </span><br />
</td></tr>
<tr><td>
<input type="number" name="phone" placeholder="Phone Number" id="phone"/><span id="phone_error" style="color:red"> </span><br />
</td></tr>

<tr><td>
<textarea name="address" name="addresss" cols="30" rows="5" id="address" placeholder="Address"></textarea>
</td></tr>

<tr><td>
<input type="submit" name="submit" value="Submit" id="rsignup" />
</td></tr>
</form>
</table>
</div><!--table div-->
</div><!--signup div-->

<div class="signin">
<h2 class="hsignin">SIGN IN</h2>
<div class="tablein">
<form action="loginDB.php" name="myform1" method="post" enctype="multipart/form-data" onsubmit="return myfun()">
<table width="90%">
<tr><td>
<input type="text" placeholder="USERNAME OR EMAIL" id="lemail" name="loginemail" ><span id="lname_error" style="color:red"> </span><br>
</td></tr>
<tr><td>
<input type="password" placeholder="PASSWORD" id="lpass" name="loginpass"><span id="lpass_error" style="color:red"> </span><br>
</td></tr>
<tr><td>
<input type="submit" value="Login" name="signin" id="lsignin" />
</td></tr>			
</table>
</form>

</div><!--signin div-->
</div><!--content div-->

</div><!--main div-->
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