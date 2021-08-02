<html>
<body>
<?php 


session_start();

if($_POST['submit']){
include('db.php');
$paymentmode = $_POST['payment'];
$total = $_POST['total'];

$buyer=$_SESSION['username'];
$query1="SELECT *FROM `cart` where `username`='$buyer'";
$data1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($data1);
$products=$row1['productName'];

$query2="select * from `signup`  WHERE  `username`='$buyer' ";
$data2=mysqli_query($con,$query2);
$row2=mysqli_fetch_array($data2);
$address = $row2['address'];
$email = $row2['emailid'];

$query3="INSERT INTO `order`(`customerName`,`address`,`email`,`productName`,`price`,`paymentMode`) VALUES ('$buyer ','$address','$email','$products','$total','$paymentmode')";
$data3=mysqli_query($con,$query3);
if($data3){
	
		?>
		    <script type="text/javascript">
			mess1='Press Ok to Continue.';
			x = confirm(mess1); 
			if (x == true)
			{
			alert("Order has been placed!!!");
			window.location = "index.php";
			}
			else
			{
			alert("You have cancel the order.");  
			window.location="emptyCart.php?username=<?php echo $buyer; ?>";
			} 
              
             </script>
         <?php   
		 
}

else{
	echo mysqli_error($con);
	
}
}
	?>


</body>
</html>