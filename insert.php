<?php
	$first = $_POST['first'];
	$last = $_POST['last'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];


	if ((!empty($first)) || (!empty($last)) || (!empty($username)) || (!empty($email)) || (!empty($password)) || (!empty($phone)) || (!empty($gender))) {
		$host = "localhost";
		$dbUsename = "root";
		$dbPassword = "";
		$dbname = "project";

		//create connection
		$conn = new mysqli($host, $dbUsename, $dbPassword, $dbname); //mysqli_connect();

		if (mysqli_connect_error()) {
			die('Connect Error('. mysqli_connect_errno(). ')'. mysqli_connect_error());
		} else{
			$SELECT = "SELECT email From user where email = ? limit 1";
			$INSERT = "INSERT INTO user (first, last, username, email, password, phone, gender) values(?, ?, ?, ?, ?, ?, ?)";

			//prepare statement

			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if ($rnum==0) {
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sssssis", $first, $last, $username, $email, $password, $phone, $gender);
				$stmt->execute();
				echo "New records inserted successfully...";
			} else{
				echo "Somebody already registered using this email";
			}
			$stmt->close();
			$conn->close();
		}

	} else{
		echo "All fields are required";
		die();
	}
?>