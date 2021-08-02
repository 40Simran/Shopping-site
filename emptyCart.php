<?php

include('db.php');

$buyer = $_GET['username'];

$query="delete from `cart`  WHERE  `username`='$buyer'";
$data=mysqli_query($con,$query);
if($data){
	
	header('location:categories.php');
		
	}
	
else{
	
	echo mysqli_error()."error";
	
	}
?>

