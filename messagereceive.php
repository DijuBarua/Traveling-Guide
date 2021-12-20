<!DOCTYPE html>

<html>
	<head>
		<title>Messages</title>
		<link rel="stylesheet" href="style.css" type="text/css">
		<style type="text/css">
			table {
				border-collapse: collapse;
				width: 100%;
				color: black;
				font-family: none;
				font-size: 25px;
				text-align: left;
				margin-top: 5px;
			}

			th {
				background-color: #f63c3c;
				color: white;
			}

			tr:nth-child(even) {background-color: #f2f2f2}
			tr:nth-child(odd) {background-color: white;}

		</style>
	</head>
	
	<body id="bodyfront">


			<div id="header">
				<div id="logo">
					<a href="loggedadmin.php"><img src="image/logo.png" style="width: 230px; height: 100px;"></a>
				</div>
				<div id="navbar">
					<nav>
						<ul>
							<a><div id="afterloggedheader">Messages</div></a>
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

		<div id="containertravels">
			<table>
				<tr>
					<th>Username</th>
					<th>Message</th>
				</tr>
			<?php
				$host = "localhost";
				$dbUsename = "root";
				$dbPassword = "";
				$dbname = "project";

				//create connection
				$conn = new mysqli($host, $dbUsename, $dbPassword, $dbname);

				$sql = "SELECT m_username, message FROM message";
				$result = $conn-> query($sql);

				if($result->num_rows > 0) {
					while ($row = $result-> fetch_assoc()){
						echo "<tr><td>". $row["m_username"] . "</td><td>". $row["message"] . "</td></tr>";
				}
				echo "</table>";
				} else {
				echo "0 result";
				}	
				$conn-> close();
			?>
			</table>
		</div>

		<div id="footer">
			<center>FOOTER</center>
		</div>



	</body>

</html>