<?php
if (isset($_GET['orderID'])) {
	$orderID = $_GET['orderID'];
	$first_name = $_GET['first_name'];
	$last_name = $_GET['last_name'];
	$phone = $_GET['phone'];
	$email = $_GET['email'];
	$company = $_GET['company'];
	$addressContinent = $_GET['addressContinent'];
	$country = $_GET['country'];
	$region = $_GET['region'];
	$address = $_GET['address'];
	$town_city = $_GET['town_city'];
	$postcode = $_GET['postcode'];
	$fullnames = $first_name . " " . $last_name;
	$amount = $_GET['Amount'];
	$_SESSION['checkdonation'] = "checkdonation";
	$notes = $_GET['notes'];

	require_once('connect.php');
	$query = "INSERT INTO `donate` (FirstName,LastName,Email,Phones,Company,Continent,Country,Region,Address,Town,PostCode,Amount,notes) VALUES('$first_name','$last_name','$email','$phone','$company','$addressContinent','$country','$region','$address','$town_city','$postcode','$amount','$notes')";
	$results = mysqli_query($link, $query);
	if ($results) {
		$last_id = mysqli_insert_id($link);
		echo '<script type="application/javascript">';
		echo 'alert("Donation Registration Successful, Thank you");';
		echo 'window.location.href="donate.php";';
		echo '</script>';
	} else {
		echo '<script type="application/javascript">';
		echo 'alert("Donation Registration Failed");';
		echo 'window.location.href="donate.php";';
		echo '</script>';
	}
} else {
	echo '<script type="application/javascript">';
	echo 'alert("Failed, wrong inputs.");';
	echo 'window.location.href="donate.php";';
	echo '</script>';
	die;
}
