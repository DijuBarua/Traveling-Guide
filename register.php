<!DOCTYPE html>

<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	
	<body>
		<div id="regloginbody">


			<div id="header">
					<div id="navbar">
						<nav>
							<ul>
								<a><div id="frontPageHeader">Registration</div></a>
							</ul>
						</nav>
					</div>

			</div>

		<div id="containerReglogin">
			<div class="RegloginBox">
				<img src="image/avatar.png" class="formheadReg">
				<h1>Register Here</h1>
				<form action="signup.php" method="POST">
					<p>First Name</p>
					<input type="text" name="first" placeholder="Enter your First Name"><br><br>

					<p>Last Name</p>
					<input type="text" name="last" placeholder="Enter your Last Name"><br><br>

					<p>Username</p>
					<input type="text" name="username" placeholder="Enter an unique username"><br><br>

					<p>Email</p>
					<input type="email" name="email" placeholder="Enter your Email Address"><br><br>

					<p>Password</p>
					<input type="Password" name="password" placeholder="Enter your Password"><br><br>
                    
                    <p>Contact Number</p>
                    <input type="number" name="phone" placeholder="Enter your mobile Number" id="num"><br><br>

                    <input type="radio" name="gender" value="Male" id="rd"><span id="but">Male</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="Female" id="rd"><span id="but">Female</span><br><br><br>

					<input type="submit" name="submit" value="Submit" id="sub">
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