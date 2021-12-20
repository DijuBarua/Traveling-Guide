<!DOCTYPE html>

<html>
	<head>
		<title>Himchari</title>
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
							<a><div id="afterloggedheader">Himchari</div></a>
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
				<h1>Himchari, Cox's Bazar, Chittagong</h1>
				<p>Himchari is located just south of the Cox's Bazar town. It consists of lush tropical rain forest, grasslands and trees, and features a number of waterfalls, the biggest of which cascades down toward the sandy, sun-drenched beach. The National Park was established in 1980 by the Government of Bangladesh as a conservation area for research, education and recreation. Once it was the stomping grounds of herds of Asian elephant. It is still home to a limited number of these mammals.</p>
			</div>

			<div id="slider">
				<figure>
					<img src="image/him.jpg">
					<img src="image/him1.jpg">
					<img src="image/him2.jpeg">
					<img src="image/him3.jpg">
					<img src="image/him5.jpg">
				</figure>
			</div>
			
		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>



	</body>

</html>