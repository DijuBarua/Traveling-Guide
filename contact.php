<!DOCTYPE html>

<html>
	<head>
		<title>Contact</title>
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
							<a><div id="afterloggedheader">Contact</div></a>
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
			<div id="travelsbox">
				<h1>Email</h1><br><br>
				<img src="image/email.jpg" id="travelspic"><br>

				<a href="https://plus.google.com/u/0/117050874715439465558"><span id="frontadminsubmit">Contact</span></a>
			</div>

			<div id="travelsbox">
				<h1>Facebook</h1><br><br>
				<img src="image/facebook.jpg" id="travelspic"><br>

				<a href="https://www.facebook.com/shuvo.barua.505"><span id="frontadminsubmit">Contact</span></a>
			</div>

			<div id="travelsbox">
				<h1>Twitter</h1><br><br>
				<img src="image/Twitter.jpeg" id="travelspic"><br>

				<a href="https://twitter.com/?lang=en"><span id="frontadminsubmit">Contact</span></a>
			</div>

			<div id="travelsbox">
				<h1>Linkedin</h1><br><br>
				<img src="image/linkedin-logo.jpg" id="travelspic"><br>

				<a href="https://www.linkedin.com/in/diju-barua-76756a154/"><span id="frontadminsubmit">Contact</span></a>
			</div>
			
		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>



	</body>

</html>