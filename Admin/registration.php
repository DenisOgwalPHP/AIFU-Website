<?php

if(isset($_POST['uname'])){	

// getting inputs from the form		
	$password = $_POST['pword'];
	$encryptedpassword = md5($password);
	$username = $_POST['uname'];
	$email = $_POST['email'];
	$lastname = $_POST['lname'];
	$firstname = $_POST['fname'];
	$names= $lastname." ".$firstname;
	$phone = $_POST['phone'];
	$day = $_POST['dd'];
	$month = $_POST['mm'];
	$year = $_POST['yyyy'];
	$dob=$day."-".$month."-".$year;
	$location = $_POST['address'];
	//$token=md5(uniqid(rand(), true));
    $timeregistered=date("Y-m-d H:i:s");
	 $membertype="Administrator";
	require_once('Connection/connect.php');
	
	//checking if user is already registered
			$count ="SELECT COUNT('Email') AS Counter FROM `registration` WHERE `Email` = '".$email."'";
			$result=mysqli_query($link,$count);
			$row=mysqli_fetch_assoc($result);
		if($row['Counter'] == 0){
			$query = "INSERT INTO `registration` (FullNames,Password,Email,Telephone,Address,DOB,MemberType) VALUES('$names','$encryptedpassword','$email','$phone','$location','$dob','$membertype')";
			$results=mysqli_query($link,$query);
			if($results){
				//Account created notify user.
				echo '<script type="application/javascript">';
				echo'alert("Your Account Has Been Created, Wait for Approval to begin Using it");';
				echo'window.location.href="index.php";';
				echo '</script>';
			}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Account Could not be created");';
				echo'window.location.href="home.html";';
				echo '</script>';
			}
			}else{
			//Wrong username or password message
				echo '<script type="application/javascript">';
				echo'alert("Account with same Username Already Exists");';
				echo'window.location.href="index.php";';
				echo '</script>';
	}
	}else{
			echo '<script type="application/javascript">';
				echo'alert("Failed, wrong inputs.");';
				echo'window.location.href="index.php";';
				echo '</script>';
			die;
		}
?>