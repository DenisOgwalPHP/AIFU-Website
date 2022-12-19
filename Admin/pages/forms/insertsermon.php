<?php
session_start();
if(isset($_SESSION['aifuadminuser'])){
	}
	else{
		
		}

	
if(isset($_REQUEST['productupload'])){	
// getting inputs from the form	
    $productname = $_POST['productname'];
	
	$fileNames = $_FILES['Filenames']['name'];
	$temps = explode(".", $_FILES["Filenames"]["name"]);
    $newfilenames =$productname.'1'. '.' . end($temps);
	
	$fileName = $_FILES['Filename']['name'];
	$temp = explode(".", $_FILES["Filename"]["name"]);
    $newfilename =$productname. '.' . end($temp);
	
	$postedby = $_POST['postedby'];
	$description = $_POST['description'];
	$category = $_POST['category'];
	$imageurl="http://goodwillwomenspulse.org/AndroidFiles/";
	//$finalimageurl=$imageurl.$fileTarget;
	
	
	require_once('../../Connection/connect.php');
	
	$query = "INSERT INTO `sermons` (Topic,Attachment,ShortDescription,postedby,sermonimage,Category) VALUES('$productname','$newfilename','$description','$postedby','$newfilenames','$category')";
	$result=mysqli_query($link,$query);
			
	$targets = '../../../images/SermonImage/';
	$fileTargets = $targets.$newfilenames; 
	$tempFileNames = $_FILES["Filenames"]["tmp_name"];
	$results = move_uploaded_file($tempFileNames,$fileTargets);
	
    $target = '../../../images/SermonAttachment/';
	$fileTarget = $target.$newfilename;
	$tempFileName = $_FILES["Filename"]["tmp_name"];
	$result = move_uploaded_file($tempFileName,$fileTarget);
	
	$finalimageurl=$fileTarget;
	$finalimageurls=$fileTargets;
			if($result){
				echo '<script type="application/javascript">';
				echo'alert("Sermon successfully registered");';
				echo'window.location.href="Sermon.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Sermon registration Failed");';
				echo'window.location.href="Sermon.php";';
				echo '</script>';
			}
			
	}else{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="Sermon.php";';
				echo '</script>';
			die;
		}
?>