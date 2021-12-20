<!DOCTYPE html>

<html>
	<head>
		<title>Inani Beach</title>
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
							<a><div id="afterloggedheader">Inani Beach</div></a>
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
				<h1>Inani Beach, Cox's Bazar, Chittagong</h1>
				<p>Inani Beach (also Enani Beach) is an 18-kilometre-long (11 mi) sea beach in Ukhia Upazila of Cox's Bazar District, Bangladesh. It has a lot of coral stones, which are very sharp. These coral stones look black and green, and they are found in summer or rainy seasons. Pathorkhani is located in Jaliapalong, Inani Beach. Almost all of the visitors gather around it and love to take snapshot by sitting on it.</p>
			</div>

			<div id="slider">
				<figure>
					<img src="image/jj.jpg">
					<img src="image/w.jpg">
					<img src="image/userloginform.jpg">
					<img src="image/e.jpg">
					<img src="image/loggeduserhome.jpg">
				</figure>
			</div>
			
		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>



	</body>

</html>