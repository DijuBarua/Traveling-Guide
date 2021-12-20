<!DOCTYPE html>

<html>
	<head>
		<title>Sea Beach</title>
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
							<a><div id="afterloggedheader">Sea Beach</div></a>
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

		<div id="containerdetails">
			<div id="detailsNote">
				<h1>Sea Beach, Cox's Bazar, Chittagong</h1>
				<p>The sea beach in Cox's Bazar is sandy and has a gentle slope; with an unbroken length of 120 km (75 mi), it is the longest natural sea beach in the world. It is located 150 km (93 mi) south of the industrial port of Chittagong.</p>
			</div>

			<div id="slider">
				<figure>
					<img src="image/cox.jpeg">
					<img src="image/cox1.jpg">
					<img src="image/cox2.jpg">
					<img src="image/cox3.jpg">
					<img src="image/cox4.jpg">
				</figure>
			</div>
			
		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>



	</body>

</html>