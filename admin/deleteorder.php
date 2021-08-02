<?php

include('db.php');

$sno=$_GET['orderid'];

$query="delete from `order` where `orderid`='$sno'";
$data=mysqli_query($con,$query);
if($data){
	
	header('location:orderAction.php');
		
	}
	
else{
	
	echo mysqli_error($con)."error";
	
	}
?>