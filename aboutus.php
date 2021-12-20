<!DOCTYPE html>

<html>
	<head>
		<title>About Us</title>
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
							<a><div id="afterloggedheader">About Us</div></a>
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
			<div id="aboutusbox">
				<p id="aboutuswrite">
					Hello, thanks for visiting my website.<br> I am Diju Barua Shuvo.<br> Currently I am studying in Rajshahi University of<br> Engineering & technology, department of Computer<br> Science & Engineering. I made this website as a<br> project for 5th semester <br>"Web Development Project"<br> course under the supervisation of our 
					<br>honourable Assistant Professor of our <br>department Shyla Afroge ma'am.<br> Hope this site will help you to make <br>your travel easier and find something new. Thank you... 
				</p>

				<img src="image/shuvo.JPG" id="aboutusmypic">
			</div>
			
		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>



	</body>

</html>