<?php
	$first = $_POST['first'];
	$last = $_POST['last'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];


	if (empty($first) || empty($last) || empty($username) || empty($email) || empty($password) || empty($phone) || empty($gender)) {
		header("Location: ../myproject/register.php?register=empty");
					exit();
	} else{
		$host = "localhost";
		$dbUsename = "root";
		$dbPassword = "";
		$dbname = "project";

		//create connection
		$conn = new mysqli($host, $dbUsename, $dbPassword, $dbname); //mysqli_connect();

		if (mysqli_connect_error()) {
			die('Connect Error('. mysqli_connect_errno(). ')'. mysqli_connect_error());
		} else{
			//check if input characters valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../myproject/register.php?register=invalid");
			exit();
		} else {
			//check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../myproject/register.php?register=emali");
				exit();
			} else {
				//check if copy username
				$sql = "SELECT * FROM user WHERE username='$username'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../myproject/register.php?register=usertaken");
					exit();
				}else {
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
				$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sssssis", $first, $last, $username, $email, $hashedpassword, $phone, $gender);
				$stmt->execute();
				header("Location: ../myproject/register.php?register=success");
					exit();
			} else{
				header("Location: ../myproject/register.php?register=emailtaken");
					exit();
			}
			$stmt->close();
			$conn->close();
		}
	}
}
}
}

?>