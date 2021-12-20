<!DOCTYPE html>

<html>
	<head>
		<title>Mymensingh</title>
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
							<a><div id="afterloggedheader">Mymensingh</div></a>
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
				<h1></h1><br><br>
				<img src="" id="travelspic"><br>

				<a href=""><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1></h1><br><br>
				<img src="" id="travelspic"><br>

				<a href=""><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1></h1><br><br>
				<img src="" id="travelspic"><br>

				<a href=""><span id="frontadminsubmit">Click</span></a>
			</div>
			
		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>



	</body>

</html>