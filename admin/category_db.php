<?php
if($_POST['submit']){
	
include('db.php');


function validate($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	}
function blog($d){
	$d=mysql_real_escape_string($d);
	return $d;}
	
$category=validate($_POST['cat_type']);
$name=blog($_POST['product_name']);
$desc=blog($_POST['description']);
$image=$_FILES['image']['name'];
$price=$_POST['price'];

move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$image);

$query="insert into `categories` (`category`,`product`,`description`,`image`,`price`)
values('$category','$name','$desc','$image','$price')";
$data=mysqli_query($con,$query);



if($data){
	header('location:productAction.php?msg=category is uploaded');
	}
else{
	echo mysqli_error($con);
	}

}
else{
	header('location:productAction.php?msg=first fill the form!');
	}

?>