<!DOCTYPE html>

<html>
	<head>
		<title>Transport</title>
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
							<a><div id="afterloggedheader">Transport</div></a>
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
				<h1>Desh Travels</h1><br><br>
				<img src="image/deshtravels.jpg" id="travelspic"><br>

				<a href="http://www.deshtravelsbd.com/"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Grameen Travels</h1><br><br>
				<img src="image/grameentravels.jpg" id="travelspic"><br>

				<a href="http://www.grameentravelsbd.com/"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Train</h1><br><br>
				<img src="image/train.jpeg" id="travelspic"><br>

				<a href="https://www.esheba.cnsbd.com/"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Shohoz.com</h1><br><br>
				<img src="image/shohozv2.png" id="travelspic"><br>

				<a href="https://www.shohoz.com/"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Uber</h1><br><br>
				<img src="image/uber.jpg" id="travelspic"><br>

				<a href="https://auth.uber.com/login/?uber_client_name=riderSignUp"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Pathao</h1><br><br>
				<img src="image/pathao.jpg" id="travelspic"><br>

				<a href="https://pathao.com/"><span id="frontadminsubmit">Click</span></a>
			</div>
		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>



	</body>

</html>