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
		$sql = "SELECT * FROM admin1 WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../user.php?login=no_match_user");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				if ($password == $row['password']) {
					//log in the admin here
					$SESSION['u_username'] = $row['username'];
					header("Location: ../myproject/loggedadmin.php?login=success");
					exit();
				} else {
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