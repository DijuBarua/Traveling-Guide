<!DOCTYPE html>

<html>
	<head>
		<title>Travel BD</title>
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
								<li><a href="places.php">Places</a>
									<ul>
										<li><a href="dhaka.php">Dhaka</a></li>
										<li><a href="chittagong.php">Chittagong</a></li>
										<li><a href="sylhet.php">Sylhet</a></li>
										<li><a href="rajshahi.php">Rajshahi</a></li>
										<li><a href="mymensingh.php">Mymensingh</a></li>
										<li><a href="khulna.php">Khulna</a></li>
										<li><a href="rangpur.php">Rangpur</a></li>
										<li><a href="newplace.php">New Places</a></li>
									</ul>
								</li>
								<li><a href="plans.php">Plans</a></li>
								<li><a href="travels.php">Transport</a></li>
								<li><a href="message_send.php">Message</a></li>
								<li><a href="aboutus.php">About Us</a></li>
								<li><a href="contact.php">Contact</a></li>
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