<!DOCTYPE html>

<html>
	<head>
		<title>Safari Park</title>
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
							<a><div id="afterloggedheader">Safari Park</div></a>
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
				<h1>Safari Park, Cox's Bazar, Chittagong</h1>
				<p>Bangabandhu Sheikh Mujib Safari Park is the first Safari Park in Bangladesh. The nature of the forest is tropical evergreen and rich with Garjan, Boilam, Telsur and Chapalish along with herbs, shrubs and creepers. Safari Park is a declared protected area where the animals are kept in fairly large area with natural environment and visitors can easily see the animal when ever they visit by bus, jeep or on foot. This park was established on the basis of South Asian model. The sanctuary itself protects a large number of wild elephants which are native to the area. In the safari park there are domesticated elephants which are available for a ride. Other animal attractions include lions, Bengal tigers, Crocodiles, Bears, Chitals and lots of different types of birds and monkeys.which is wonder full project to attract the tourist.</p>
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