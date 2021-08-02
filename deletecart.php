<?php

include('db.php');

$cartid=$_GET['cartID'];

$query="delete from `cart` where `cartID`='$cartid'";
$data=mysqli_query($con,$query);
if($data){
	
	header('location:cartDetails.php');
		
	}
	
else{
	
	echo mysqli_error()."error";
	
	}
?>
