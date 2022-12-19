<?php session_start();

if(isset($_POST['postcommentbutton'])){	
$ids = $_POST['idss'];
$messages = $_POST['messages'];
$names = $_POST['names'];
$emails = $_POST['emails'];
$phones = $_POST['phones'];
require_once('connect.php');
			$query = "INSERT INTO `comments` (Comment,CommentBy,UserEmail,RepliedTo,CommenterPhone) VALUES('$messages','$names','$emails','$ids','$phones')";
			$results=mysqli_query($link,$query);
			if($results){		
				echo '<script type="application/javascript">';
				echo'alert("Your Comment Submitted Successfuly");';
				echo'window.location.href="single_post.php?ids='. $_POST['idss'].'"';
				echo '</script>';
				
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Comment Posting Failed");';
				echo'window.location.href="single_post.php?ids='. $_POST['idss'].'"';
				echo '</script>';
			}
	}else{
			echo '<script type="application/javascript">';
				echo'alert("Failed, wrong inputs.");';
					echo'window.location.href="single_post.php?ids='. $_POST['idss'].'"';
				echo '</script>';
			die;
		}
?>