<?php

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$first = $_POST['first'];
	$last = $_POST['last'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];

	//error handlers
	//check for empty fields
	if (empty($first) || empty($last) || empty($username) || empty($email) || empty($password) || empty($phone) || empty($gender)) {
		header("Location: ../register.php?register=empty");
		exit();
	} else {
		//check if input characters valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../register.php?register=invalid");
			exit();
		} else {
			//check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../register.php?register=emali");
				exit();
			} else {
				//check if copy username
				$sql = "SELECT * FROM user WHERE username='$username'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../register.php?register=usertaken");
					exit();
				} else {
					$sql = "SELECT * FROM user WHERE email='$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../register.php?register=emailusedalready");
					exit();
				}else {
					//hashing the password
					$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
					//Insert the user into database
					$sql = "INSERT INTO user (first, last, username, email, password, phone, gender) VALUES ('$first', '$last', '$username', '$email', '$hashedpassword', '$phone', '$gender');";
					mysqli_query($conn, $sql); 	
					header("Location: ../register.php?register=success");
					exit();
				}
				}
			}
		}
	}

} else {
	header("Location: ../register.php");
	exit();
}