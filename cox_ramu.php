<!DOCTYPE html>

<html>
	<head>
		<title>Ramu</title>
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
							<a><div id="afterloggedheader">Ramu</div></a>
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
				<h1>Ramu, Cox's Bazar, Chittagong</h1>
				<p>Ramu about 10 km (6 mi) from Cox's Bazar,[26] is a village with a sizeable Buddhist population. The village is famous for its handicrafts and homemade cigars. There are monasteries, khyangs and pagodas containing images of Buddha in bronze, gold and other metals with precious stones. One of the most interesting of these temples is on the bank of the Baghkhali river. It houses not only relics and Burmese handicrafts but also a large bronze statue of Buddha measuring thirteen feet high which rests on a six feet high pedestal. Weavers ply their trade in open workshops and craftsmen make handmade cigars in their pagoda like houses.</p>
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