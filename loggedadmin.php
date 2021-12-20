</!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
		

	<body id="bodyfront">


			<div id="header">
					<div id="logo">
						<a href="loggedadmin.php"><img src="image/logo.png" style="width: 230px; height: 100px;"></a>
					</div>
					<div id="navbar">
						<div id="new">
						<nav>
							<ul>
									<a href="addplace.php"><li>Add Place</li></a>
									<a href="users_list.php"><li>Users List</li></a>
									<a href="messagereceive.php"><li>Messages</li></a>
							</ul>
						</nav>
						</div>
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

		<div id="container">
				



		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>



	</body>

</html>