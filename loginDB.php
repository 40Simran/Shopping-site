<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
session_start();
if($_POST['signin']){
include('db.php');

$user=$_POST['loginemail'];	
$pass=$_POST['loginpass'];	
$query="SELECT * FROM `signup` WHERE `username`='$user' || `emailid`='$user'";	
$data=mysqli_query($con,$query);	
$row=mysqli_fetch_array($data);
$num_rows=mysqli_num_rows($data);

if($num_rows>0){
if($row['password']==$pass){
		
$_SESSION['userID']=$row['userID'];
$_SESSION['username']=$row['username']; 
header('location:categories.php');
}
else{
	?>
    <script type="text/javascript">
	alert("Incorrect username or password");
		window.location="userAccount.php";
	</script>
    <?php
}

}
else{
	?>
    <script type="text/javascript">
	alert("Invalid user");
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