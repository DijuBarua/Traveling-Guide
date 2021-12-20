<!DOCTYPE html>
<html>
<head>
	<title>Message Us</title>
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
							<a><div id="afterloggedheader">Message</div></a>
						</ul>
					</nav>
			</div>
			
			<div id="account">
				<form action="logout.inc.php" method="POST">
					<button type="submit" name="submit" id="logout">Logout</button>
				</form>	
			</div>

		</div>

		<div id="container">
			<div id="messagebox">
				<form action="message_send.inc.php" method="POST">
				<p>Username</p>
				<input type="text" name="m_username" placeholder="Enter your Username">

				<p>Message</p>
				<input type="message" name="message" placeholder="Enter your message">

				<input type="submit" name="submit" value="Send" id="subuser">
			</form>
			</div>
		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>

</body>
</html>