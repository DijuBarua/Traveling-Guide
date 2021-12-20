<!DOCTYPE html>

<html>
	<head>
		<title>Places</title>
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
							<a><div id="afterloggedheader">Places</div></a>
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
			
			<div id="travelsbox">
				<h1>Dhaka</h1><br><br>
				<img src="image/dhaka.jpg" id="travelspic"><br>

				<a href="dhaka.php"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Chittagong</h1><br><br>
				<img src="image/ctg.jpg" id="travelspic"><br>

				<a href="chittagong.php"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Rajshahi</h1><br><br>
				<img src="image/raj.jpg" id="travelspic"><br>
				<a href="rajshahi.php"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Khulna</h1><br><br>
				<img src="image/khulna.jpg" id="travelspic"><br>

				<a href="khulna.php"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Rangpur</h1><br><br>
				<img src="image/rangpur.jpg" id="travelspic"><br>

				<a href="rangpur.php"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Sylhet</h1><br><br>
				<img src="image/sylhet.jpg" id="travelspic"><br>

				<a href="sylhet.php"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Mymensingh</h1><br><br>
				<img src="image/my.jpg" id="travelspic"><br>

				<a href="mymensingh.php"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>New Places</h1><br><br>
				<img src="image/np.jpg" id="travelspic"><br>

				<a href="newplace.php"><span id="frontadminsubmit">Click</span></a>
			</div>
			
		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>



	</body>

</html>