<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
session_start();
include('db.php');
$orderid=$_GET['Sno'];

$buyer=$_SESSION['username'];

$query="SELECT *FROM `categories` where `Sno`='$orderid'";
$data=mysqli_query($con,$query);
$row=mysqli_fetch_array($data);
$image=$row['image'];
$productname=$row['product'];
$price=$row['price'];

$query1="INSERT INTO `cart`(`orderID`,`username`,`image`,`productName`,`price`) VALUES ('$orderid ','$buyer','$image','$productname','$price')";
$data1=mysqli_query($con,$query1);
if($data1){
	
	?>
		    <script type="text/javascript">
            window.location="cartDetails.php";
             </script>
         <?php

}
else{
echo mysqli_error($con);	
	
}	


?>
</body>
</html>