<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
if($_POST['submit']){
	
include('db.php');

$user=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$query="SELECT * FROM `signup` WHERE `username`='$user'";
$data=mysqli_query($con,$query);
$num_rows=mysqli_num_rows($data);
if($num_rows>0){
	
	?>
    <script type="text/javascript">
	alert("Username already exist");
		window.location="userAccount.php";
	</script>
    <?php
		
}
else{
$query="INSERT INTO`signup`(`username`,`emailid`,`password`,`phone`,`address`) VALUES ('$user','$email','$pass','$phone','$address')";	
$data=mysqli_query($con,$query);
?>
    <script type="text/javascript">
	alert("Thankyou for registration, Please login");
		window.location="userAccount.php";
	</script>
    <?php	
}
}

else{
echo mysql_error();
}



?>
</body>
</html>