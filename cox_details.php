<!DOCTYPE html>

<html>
	<head>
		<title>Cox's Bazar</title>
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
							<a><div id="afterloggedheader">Cox's Bazar</div></a>
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
					<h1>Cox's Bazar, Chittagong</h1>
					<p>Cox's Bazar is a city, fishing port, tourism centre and district headquarters in Bangladesh. It is located 150 km (93 mi) south of the industrial port of Chittagong. 
						Cox's Bazar Town was constituted in 1869, eventually becoming a B-grade municipality in 1989. Located along the Bay of Bengal in South Eastern Bangladesh, Cox's Bazar Town is a health resort. But it is famous mostly for its long natural sandy beach. The municipality covers an area of 6.85 km2 (2.64 sq mi) with 27 mahallas and 9 wards and has a population of 51,918.[8] Cox's Bazar is connected by road and air with Chittagong.	Cox's Bazar is also known by the name Panowa, which Translates literally as "yellow flower." Another old name was "Palongkee".
					</p>
				</div>	
			
			<div id="travelsbox">
				<h1>Sea Beach</h1><br><br>
				<img src="image/cox.jpeg" id="travelspic"><br>

				<a href="cox_sea_beach.php"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Himchari</h1><br><br>
				<img src="image/him.jpg" id="travelspic"><br>

				<a href="cox_himchari.php"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Saint Martin</h1><br><br>
				<img src="image/saint.jpg" id="travelspic"><br>

				<a href="saint.php"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Ramu</h1><br><br>
				<img src="image/ramu.jpg" id="travelspic"><br>

				<a href="cox_ramu.php"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Safari Park</h1><br><br>
				<img src="image/safc.png" id="travelspic"><br>

				<a href="cox_safari.php"><span id="frontadminsubmit">Click</span></a>
			</div>

			<div id="travelsbox">
				<h1>Inani Beach</h1><br><br>
				<img src="image/in.jpg" id="travelspic"><br>

				<a href="cox_inani.php"><span id="frontadminsubmit">Click</span></a>
			</div>
			
		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>



	</body>

</html>