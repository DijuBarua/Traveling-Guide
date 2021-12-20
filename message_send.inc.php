<?php

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$m_username = $_POST['m_username'];
	$message = $_POST['message'];

	//error handlers
	//check for empty fields
	if (empty($m_username) || empty($message)) {
		header("Location: ../register.php?register=empty");
		exit();
	} else{
					//Insert the user into database
					$sql = "INSERT INTO message (m_username, message) VALUES ('$m_username', '$message');";
					mysqli_query($conn, $sql); 	
					header("Location: ../register.php?register=success");
					exit();
				}

} else {
	header("Location: ../register.php");
	exit();
}