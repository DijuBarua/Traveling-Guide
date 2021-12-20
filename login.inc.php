<?php

session_start();

if (isset($_POST['submit'])) {
		$host = "localhost";
		$dbUsename = "root";
		$dbPassword = "";
		$dbname = "project";

		//create connection
		$conn = new mysqli($host, $dbUsename, $dbPassword, $dbname);

	$username = $_POST['username'];
	$password = $_POST['password'];

	//Error handlers
	//check if input are empty
	if (empty($username) || empty($password)) {
		header("Location: ../user.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM user WHERE username='$username' OR email='$username'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../user.php?login=no_match_user");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//dehashing the password
				$heashedpasswordcheck = password_verify($password, $row['password']);
				if ($heashedpasswordcheck == true) {
					//log in the user here
					$_SESSION['u_id'] = $row['id'];
					$_SESSION['u_first'] = $row['first'];
					$_SESSION['u_last'] = $row['last'];
					$_SESSION['u_username'] = $row['username'];
					$_SESSION['u_email'] = $row['email'];
					$_SESSION['u_phone'] = $row['phone'];
					$_SESSION['u_gender'] = $row['gender'];
					header("Location: ../myproject/loggeduser.php");
					exit();
				} elseif($heashedpasswordcheck == false) {
					header("Location: ../user.php?login=no_match_pass");
					exit(); 
				}
			}
		}
	}
} else {
	header("Location: ../user.php?login=aa");
	exit();
}