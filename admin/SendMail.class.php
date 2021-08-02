<?php


if($_POST)
{
		include('PHPMailer.class.php');
		include('db.php');
		$to = $_POST['email'];
		
		$msg=$_POST['msg'];
		
			
			$body = "Hi,
			<br><br>
			
			<br>
			Email: ".$to."<br>
			
			<br><br>
			
			".$msg."
			";
			
			
			
			$from = "ahluwalia205simran@gmail.com";
			$mail = new PHPMailer();
			$mail->IsSMTP(true); // SMTP
			$mail->set('X-MSMail-Priority', 'Normal');
			$mail->addCustomHeader("X-Priority: 3");
			$mail->SMTPAuth = true;  // SMTP authentication
			$mail->IsHTML(true);
			$mail->Mailer = "smtp";
			$mail->Host = "ssl://smtp.gmail.com";
			$mail->Port = 465;
			$mail->Username = "ahluwalia205simran@gmail.com";
			$mail->Password = "gmailsypakikra";
			$mail->SetFrom($from, 'Simran Kaur');
			$mail->Subject = 'Your new password';
			$mail->MsgHTML($body);
			$address = $to;
			$mail->AddAddress($address, $to);
			$mail->AddReplyTo('ahluwalia205simran@gmail.com', 'Simran Kaur');
	
			if (!$mail->Send())
			{
			  echo  "Oops! Something went wrong. Please try again";
			 }  
			else
			   {

if(isset($_POST['update']))
{

$ans=$_POST['msg'];
mysqli_query($con,"update `order` set `status`='$ans',`status`='0' where `orderid`='$up_s'");
header("location:orderAction.php?email is send");
}
			   }
		  
}
else
{
	header("location: orderAction.php");
}
?>