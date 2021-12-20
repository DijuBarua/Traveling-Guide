<?php
	session_start();
?>



<!DOCTYPE html>

<html>
	<head>
		<title>Admin Login</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	
	<body>
		<div id="adminloginbody">


			<div id="header">
					<div id="navbar">
						<nav>
							<ul>
								<a><div id="frontPageHeader">Admin Login</div></a>
							</ul>
						</nav>
					</div>

			</div>

		<div id="containeradminlogin">
			<div class="loginBox">
				<img src="image/avatar.png" class="formhead">
				<h1>Login Here</h1>
				<form action="admin.inc.php" method="POST">
					<p>Username</p>
					<input type="text" name="username" placeholder="Enter Username"><br><br>
					<p>Password</p>
					<input type="Password" name="password" placeholder="Enter Password"><br><br>
					<input type="submit" name="submit" value="Login" id="subadmin"><br><br><br><br><br>
					<a href="#">Lost your password?</a><br>
				</form>
			</div>	
			<a href="front.php"><span id="backfromadmintofront"> ← Back to Front page</span></a>
		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>
	</div>



	</body>

</html>