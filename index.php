<!DOCTYPE html>

<html>
	<head>
		<title>Travel BD</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	
	<body>


			<div id="header">
					<div id="logo">
						<a href="index.php"><img src="image/logo.png" style="width: 230px; height: 100px;"></a>
					</div>
					<div id="navbar">
						<nav>
							<ul>
								<a href="home.php"><li>Home</li></a>
								<a href="admin.php"><li>Admin</li></a>
								<a href="user.php"><li>User</li></a>
								<a href="register.php"><li>Register</li></a>
								<a href="about.php"><li>About Us</li></a>
								<a href="contact.php"><li>Contact</li></a>
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

		<div id="container">
				



		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>



	</body>

</html>