<?php
session_start();
if(isset($_POST['addappointment'])){	
	$names=$_POST['names'];
	$phones=$_POST['phones'];
	$emails=$_POST['emails'];
	$date1=$_POST['date1'];
	$notes=$_POST['notes'];
	require_once('connect.php');
	
			$query = "INSERT INTO `appointments` (Names,Phonenumber,Email,AppointmentRequestDate,Notes) VALUES('$names','$phones','$emails','$date1','$notes')";
			$results=mysqli_query($link,$query);
			if($results){		
				
				$last_id = mysqli_insert_id($link);
				//Account created notify user.
				echo '<script type="application/javascript">';
				echo'alert("Your Appointment Request has been Received, Wait for communication from AIFU");';
				echo'window.location.href="index.php"';
				echo '</script>';
				
			}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Appointment Request Could not be registered");';
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