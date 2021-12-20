<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>User Login</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	
	<body>
		<div id="userloginbody">

            <div id="header">
					<div id="navbar">
						<nav>
							<ul>
								<a><div id="frontPageHeader">User Login</div></a>
							</ul>
						</nav>
					</div>

			</div>

		<div id="containeradminlogin">
			<div class="loginBox">
				<img src="image/avatar.png" class="formhead">
				<h1>Login Here</h1>
				<form action="login.inc.php" method="POST">
					<p>Username</p>
					<input type="text" name="username" placeholder="Enter Username">
					<p>Password</p>
					<input type="Password" name="password" placeholder="Enter Password">
					<input type="submit" name="submit" value="Login" id="subuser"><br><br><br><br><br><br>
					<a href="#">Lost your password?</a><br>
					<a href="register.php">Don't have an account?</a>
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