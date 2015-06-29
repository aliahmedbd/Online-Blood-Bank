<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="CSS/profile.css">
	<link rel="stylesheet" type="text/css" href="CSS/table.css">
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="logo"></div>
			<div class="banner">
				<div class="pic">
					<h1 align="center">Bondhon</h1>
					<h2 align="center">Online Blood Bank</h2>


				</div>
				<div class="menu">
					<ul id="navmenu">
                        <li><a href="start.php">Home</a></li>
                        <li><a href="#">Search</a>
                        <ul class="sub1">
                            <li><a href="searchDonar.php">Donar</a></li>
                            <li><a href="searchRequest.php">Requests</a></li>
            
                        </ul>
                        </li>
                        <li><a href="request.php">Set Request</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="profile.php">Profile</a></li>

                        <li><a href="logIn.php">Sign Out</a></li>
                    </ul>

				</div>
			</div>
		</div>

		<div class="content">
			<div class="profile">
				<h1 align="center">Profile</h1>
				<table>
					<?php
					include_once('database.php');
					session_start();
					$id = $_SESSION["id"];
					$query=mysql_query("SELECT * from member where id=$id") or die("There is no member in this ID");
					$result=$query;
					$final = mysql_fetch_array($result);
				
					echo "<tr>";
						echo "<td>"."Name:"."</td>";
						echo "<td>".$final['firstname']." ".$final['lastname']."</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>"."Sex:"."</td>";
						echo "<td>".$final['sex']."</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>"."Blood Group:"."</td>";
						echo "<td>".$final['bloodgroup']."</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>"."Mobile Number:"."</td>";
						echo "<td>".$final['mobile']."</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>"."Email:"."</td>";
						echo "<td>".$final['email']."</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>"."Address:"."</td>";
						echo "<td>".$final['address']."</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>"."Location:"."</td>";
						echo "<td>".$final['location']."</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>"."Last Donate Date:"."</td>";
						echo "<td>".$final['last_donateblood_date']."</td>";
					echo "</tr>";






					?>
				
				</table>

			</div>
			
		</div>

	</div>

</body>
</html>