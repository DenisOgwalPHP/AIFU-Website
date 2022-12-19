<?php
session_start();
if(isset($_POST['addtestimony'])){	
	$names=$_POST['names'];
	$telephone=$_POST['telephone'];
	$emails=$_POST['emails'];
	$messages=$_POST['messages'];

	require_once('connect.php');
	
			$query = "INSERT INTO `testmonials` (Names,Email,PhoneNumber,ShotDescription) VALUES('$names','$emails','$telephone','$messages')";
			$results=mysqli_query($link,$query);
			if($results){		
				
				$last_id = mysqli_insert_id($link);
				//Account created notify user.
				echo '<script type="application/javascript">';
				echo'alert("Your Testmony has been Received");';
				echo'window.location.href="services.php"';
				echo '</script>';
				
			}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Testimony Could not be registered");';
				echo'window.location.href="services.php";';
				echo '</script>';
			}
			
	}else{
			echo '<script type="application/javascript">';
				echo'alert("Failed, wrong inputs.");';
				echo'window.location.href="services.php";';
				echo '</script>';
			die;
		}
?>