<?php session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_GET['orderID'])){	
	$first_name=$_GET['first_name'];
	$last_name=$_GET['last_name'];
	$phone=$_GET['phone'];
	$email=$_GET['email'];
	$company=$_GET['company'];
	$addressContinent=$_GET['addressContinent'];
	$country=$_GET['country'];
	$region=$_GET['region'];
	$address=$_GET['address'];
	$town_city=$_GET['town_city'];
	$postcode=$_GET['postcode'];
	$passwords=$_GET['passwords'];
	$_SESSION['checksubscription']="checksubscription";
	$encryptedpassword=md5($passwords);
	$fullnames=$first_name." ".$last_name;
	$membershiptype=$_GET['membershiptype'];
	if(isset($_GET['payment_method'])){
				
	//require_once('connect.php');
	/*$newfetch ="SELECT * FROM `clientregistration` WHERE Email = '".$email."'";
	$result=mysqli_query($link,$newfetch);
	$row2=mysqli_fetch_row($result);	
	if(mysqli_num_rows($result)==0){*/
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

	if($membershiptype=="Individual"){
		$amount=10000;
	}else if($membershiptype=="Organisation"){
		$amount=100000;
	}
	
			require_once('connect.php');
			$query = "INSERT INTO `subscriptions` (FirstName,LastName,Email,Phones,Company,Continent,Country,Region,Address,Town,PostCode,Membership,Amount) VALUES('$first_name','$last_name','$email','$phone','$company','$addressContinent','$country','$region','$address','$town_city','$postcode','$membershiptype','$amount')";
			$results=mysqli_query($link,$query);
			if($results){
				$last_id = mysqli_insert_id($link);
				echo '<script type="application/javascript">';
				echo'alert("You Have Successfully Subscribed As AIFU Member");';
				echo'window.location.href="Subscribers.php";';
				echo '</script>';
			}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Subscriber Registration Failed");';
				echo'window.location.href="Subscribers.php";';
				echo '</script>';
			}
			
	}else{
			echo '<script type="application/javascript">';
				echo'alert("Failed, wrong inputs.");';
				echo'window.location.href="Subscribers.php";';
				echo '</script>';
			die;
		}
?>