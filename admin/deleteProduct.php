<?php

include('db.php');

$sno=$_GET['Sno'];

$query="delete from `categories` where `Sno`='$sno'";
$data=mysqli_query($con,$query);
if($data){
	
	header('location:productAction.php');
		
	}
	
else{
	
	echo mysqli_error($con)."error";
	
	}
?>