<?php
	$msg="";

	if(isset($_POST['upload'])){

	$target = "new/".basename($_FILES['image']['name']);

		$host = "localhost";
		$dbUsename = "root";
		$dbPassword = "";
		$dbname = "project";

		//create connection
		$conn = new mysqli($host, $dbUsename, $dbPassword, $dbname);

	$name1 = $_POST['name1'];
	$details = $_POST['details'];
	$image = $_FILES['image']['name'];

	if (empty($name1) || empty($details)) {
		header("Location: ../register.php?register=empty");
		exit();
	} else{
		//Insert the data into database
		$sql = "INSERT INTO addplace (name, details, image) VALUES ('$name1', '$details', '$image');";
		mysqli_query($conn, $sql); 
		move_uploaded_file($_FILES['image']['tmp_name'], $target);
		$msg = "Image uploaded successfully";
		header("Location: ../myproject/addplace.php?register=success");
		exit();
	}
}


?>



<!DOCTYPE html>

<html>
	<head>
		<title>Add Place</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	
	<body id="bodyfront">


			<div id="header">
				<div id="logo">
					<a href="loggeduser.php"><img src="image/logo.png" style="width: 230px; height: 100px;"></a>
				</div>
				<div id="navbar">
					<nav>
						<ul>
							<a><div id="afterloggedheader">Add Place</div></a>
						</ul>
					</nav>
				</div>
				<div id="account">
					<?php
					if (isset($_SESSION['u_id'])) {
						$name = $_SESSION['u_username'];
						echo $name;
					}
				?>
				<form action="logout.inc.php" method="POST">
					<button type="submit" name="submit" id="logout">Logout</button>
				</form>	
						
				</div>
			</div>

		<div id="containertravels">
			<div id="messageboxadd">
				<form action="addplace.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="size" value="10000000">
				<p>Name</p>
				<input type="text" name="name1" placeholder="Enter the name">

				<p>Details</p>
				<input type="message" name="details" placeholder="Enter the details">

				<input type="file" name="image">

				<input type="submit" name="upload" value="Add Place" id="subuseradd">
			</form>
			</div>
		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>



	</body>

</html>