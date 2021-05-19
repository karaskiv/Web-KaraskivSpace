<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$password 		= sha1($_POST['password']);

		$sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$password')";
		if(mysqli_query($conn, $sql)){
    		echo "Thank you for joining! We're currently preparing this website for a better Karaskiv Space.";
			} else{
   				echo 'ERROR: Could not able to execute.';
			 }
}else{
	echo 'No data';
}