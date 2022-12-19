<?php session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['place_order'])){	
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$company=$_POST['company'];
	$addressContinent=$_POST['addressContinent'];
	$country=$_POST['country'];
	$region=$_POST['region'];
	$address=$_POST['address'];
	$town_city=$_POST['town_city'];
	$postcode=$_POST['postcode'];
	$fullnames=$first_name." ".$last_name;
	require_once('connect.php');
	$newfetch ="SELECT * FROM `subscriptions` WHERE Email = '".$email."' and Payment='Paid'";
	$result=mysqli_query($link,$newfetch);
	if(mysqli_num_rows($result)==1){
	
	require_once('connect.php');
	$newfetch2 ="SELECT * FROM `volunteers` WHERE Email = '".$email."' and Approved='Approved'";
	$result2=mysqli_query($link,$newfetch2);	
	if(mysqli_num_rows($result2)==1){
	
				echo '<script type="application/javascript">';
				echo'alert("This Email has already been used to register a Volunteer account, use a different Email");';
				echo'window.location.href="voluteers.php";';
				echo '</script>';	
	}else{
	$fileName = $_FILES['cvs']['name'];
	$fileName1 = $_FILES['recommendation1']['name'];
	$fileName2 = $_FILES['recommendation2']['name'];
	
	$temp = explode(".", $_FILES["cvs"]["name"]);
	$temp1 = explode(".", $_FILES["recommendation1"]["name"]);
	$temp2 = explode(".", $_FILES["recommendation2"]["name"]);
	
	$newfilename =$fullnames. '.' . end($temp);
	$newfilename1 =$fullnames. '.' . end($temp1);
	$newfilename2 =$fullnames. '.' . end($temp2);
	
	$target = 'CVS/';
	$target1 = 'Recommendations/';
	$target2 = 'Recommendations2/';
	
	$fileTarget = $target.$newfilename; 
	$fileTarget1 = $target1.$newfilename1;   
	$fileTarget2 = $target2.$newfilename2;
	
	$tempFileName = $_FILES["cvs"]["tmp_name"];
	$tempFileName1 = $_FILES["recommendation1"]["tmp_name"];
	$tempFileName2 = $_FILES["recommendation2"]["tmp_name"];
	
	 $result = move_uploaded_file($tempFileName,$fileTarget);
	 $result1 = move_uploaded_file($tempFileName1,$fileTarget1);
	 $result2 = move_uploaded_file($tempFileName2,$fileTarget2);
	
			require_once('connect.php');
			$query = "INSERT INTO `volunteers` (FirstName,LastName,Email,Phones,Company,Continent,Country,Region,Address,Town,PostCode,CV,reco1,reco2) VALUES('$first_name','$last_name','$email','$phone','$company','$addressContinent','$country','$region','$address','$town_city','$postcode','$newfilename','$newfilename1','$newfilename2')";
			$results=mysqli_query($link,$query);
			if($results){
				$last_id = mysqli_insert_id($link);
				echo '<script type="application/javascript">';
				echo'alert("Volunteer Registration Success");';
				echo'window.location.href="voluteers.php";';
				echo '</script>';
			}else{
				//Account creation failed, thow the user an error message
				
				echo '<script type="application/javascript">';
				echo'alert("Volunteer Registration Failed");';
				echo'window.location.href="voluteers.php";';
				echo '</script>';
			}
	}
	}else{
				echo '<script type="application/javascript">';
				echo'alert("Your Registration as a Volunteer can not be completed because your not a registered Member");';
				echo'window.location.href="voluteers.php";';
				echo '</script>';
	}
			
	}else{
			echo '<script type="application/javascript">';
				echo'alert("Failed, wrong inputs.");';
				echo'window.location.href="voluteers.php";';
				echo '</script>';
			die;
		}
?>