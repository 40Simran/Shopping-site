<html>
<head>
<title>Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> 
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body bgcolor="#660000">
<div id="header">
	<div class="templatemo_sitetitle">WELCOME<span> to Admin Panel</span></div>
</div>

<div id="loginForm">
	<div class="headLoginForm">
	Login Administrator
	</div>
	<div class="fieldLogin">
	<form method="post" action="index.php">
	<label>Username</label><br>
	<input type="text" class="login" name="username"><br>
	<label>Password</label><br>
	<input type="password" class="login" name="pass"><br>
	<input type="submit" class="button" value="Login" name="sub">
	</form>
	</div>
</div>
</body>
</html>
<?php
session_start();
if(isset($_POST['sub']))
{
$u=$_POST['username'];
$p=$_POST['pass'];
include("db.php");
$sel="select *from `admin` where `username`='$u' and `password`='$p'";
$c=mysqli_query($con,$sel);
$num=mysqli_num_rows($c);
$d=mysqli_fetch_assoc($c);
if($num>0)
{
session_start();
$_SESSION['id']=$u;
header("location:productAction.php");
}
else
{
?>
<script>
alert("Wrong username and password");
</script>
<?php
}
}
?>