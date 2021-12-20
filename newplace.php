<!DOCTYPE html>

<html>
	<head>
		<title>New Place</title>
		<link rel="stylesheet" href="style.css" type="text/css">
		<style type="text/css">
			#detailsnote{
	margin-left: 47px;
	margin-top: 43px;
	width: 1400px;
	height: 350px;
	background: #000;
	color: #fff;
	box-sizing: border-box;
	padding: 70px 30px;
	opacity: .8;
}

#detailsnote h1{
	font-size: 45px;
	margin-top: -22px;
}

#detailsnote p{
	font-size: 22px;
	margin-left: 70px;
	margin-right: 70px;
	text-align: center;
}

	#newimage{
		width: 96%;
		height: 1000px;
		padding: 22px;
		border-bottom: 2px solid red;
	}

	#newimage img{
		width: 1442px;
		height: 998px;
		margin: auto;
	}

	#containertravelsnew{
	height: 91800px;
	width: 1500px;
	border: none;
	margin: auto;
	font-family: sans-serif;
}

		</style>
	</head>
	
	<body id="bodyfront">


			<div id="header">
				<div id="logo">
					<a href="loggeduser.php"><img src="image/logo.png" style="width: 230px; height: 100px;"></a>
				</div>
				<div id="navbar">
					<nav>
						<ul>
							<a><div id="afterloggedheader">New Places</div></a>
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

		<div id="containertravelsnew">
			<?php
				$host = "localhost";
				$dbUsename = "root";
				$dbPassword = "";
				$dbname = "project";

				//create connection
				$conn = new mysqli($host, $dbUsename, $dbPassword, $dbname);

				$sql = "SELECT * FROM addplace";
				$result = $conn-> query($sql);

				if($result->num_rows > 0) {
					while ($row = $result-> fetch_assoc()){
						echo "<div id='detailsnote'>"; 
							echo "<h1>".$row['name']."</h1>";
							echo "<p>".$row['details']."</p>";
						echo "</div>";
						echo "<div id='newimage'>";
							echo "<img src='new/".$row['image']."'>";
						echo "</div>";
				}
				} else {
				echo "0 result";
				}	
				$conn-> close();
			?>
		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>



	</body>

</html>