<?php session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_GET['orderID'])){	
	$first_name=$_GET['first_name'];
	$last_name=$_GET['last_name'];
	$phone=$_GET['phone'];
	$email=$_GET['email'];
	$company=$_GET['company'];
	$country=$_GET['country'];
	$address=$_GET['address'];
	$town_city=$_GET['town_city'];
	$postcode=$_GET['postcode'];
	$notes=$_GET['notes'];
	$passwords=$_GET['passwords'];
	$ordercodes=$_GET['ordercode'];
	$totalcost= $_GET['totalcost'];
	$encryptedpassword=md5($passwords);
	$fullnames=$first_name." ".$last_name;
	//$membershiptype=$_GET['membershiptype'];
	$_SESSION['checkshop']="checkshop";
	if(isset($_GET['payment_method'])){
				
	require_once('connect.php');
	$newfetch ="SELECT * FROM `clientregistration` WHERE Email = '".$email."'";
	$result=mysqli_query($link,$newfetch);
	$row2=mysqli_fetch_row($result);	
	if(mysqli_num_rows($result)==0){
	require_once('connect.php');
	$query = "INSERT INTO `clientregistration` (FullNames,Email,Password,Telephone,Address) VALUES('$fullnames','$email','$encryptedpassword','$phone','$address')";
	$results=mysqli_query($link,$query);
	if($results){
		require 'PHPMailer/src/Exception.php';
		require 'PHPMailer/src/PHPMailer.php';
		require 'PHPMailer/src/SMTP.php';			
							
	$to = $email;
	$subject = 'Confirm Account';
	$message = 'Click this link to confirm your account with Africa Interfaith Uganda http://africainterfaithuganda.org/emailapproval?email='.$to;
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers = 'From:  info@africainterfaithuganda.org ' . "\r\n" .'Reply-To: no-reply@africainterfaithuganda.org ' . "\r\n" .'X-Mailer: PHP/' . phpversion();

	echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
												
												
	}
	}
	}
	
			$newfetch ="SELECT * FROM `deliveryinformation` WHERE Email = '".$email."'";
			$result=mysqli_query($link,$newfetch);
			$row2=mysqli_fetch_row($result);	
			if(mysqli_num_rows($result)==0){
			$query = "INSERT INTO `deliveryinformation` (Country,LastName,FirstName,CompanyName,StreetAddress,Town,State,PostCode,Email,PhoneNumber) VALUES('$country','$last_name','$first_name','$company','$address','$town_city','$country','$postcode','$email','$phone')";
			$results=mysqli_query($link,$query);
			
			
			$newfetch2 ="SELECT IDs FROM `bookings` WHERE User = '".$email."' and OrderCode='".$ordercodes."' order By IDs DESC LIMIT 1";
			$result2=mysqli_query($link,$newfetch2);
			$row3=mysqli_fetch_row($result2);										
			$fetchdids=	$row3[0];	
			if(mysqli_num_rows($result2)>=1){
			$query = "UPDATE `bookings` SET OrderNotes='$notes',TotalCost='$totalcost' where IDs='$fetchdids'";
			$results=mysqli_query($link,$query);
			}else{
			$query = "INSERT INTO `bookings` (OrderCode,User,OrderNotes,TotalCost) VALUES('$ordercodes','$email','$notes','$totalcost')";
			$results=mysqli_query($link,$query);
			}
			require_once('connect.php');		
			$query4 = "UPDATE `orders` SET ReviewOrder='Confirmed' where OrderCode='".$ordercodes."'";
			$result4=mysqli_query($link,$query4);
			echo '<script type="application/javascript">';
			echo'alert("Payment Successful, Thank you./n You Can shop More.. ");';
			echo'window.location.href="shop.php";';
			echo '</script>';
			}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Checkout Failed");';
				echo'window.location.href="checkout.php";';
				echo '</script>';
			}
			
	}else{
			echo '<script type="application/javascript">';
				echo'alert("Failed, wrong inputs.");';
				echo'window.location.href="checkout.php";';
				echo '</script>';
			die;
		}
?>