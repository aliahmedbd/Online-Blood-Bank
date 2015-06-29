<!DOCTYPE html>
<html>
<head>
	<script>
function myFunction() {
    alert("Successfully Change your last donate date.");
}
function myFunction1() {
    alert("Do you want to go back?");
}
</script>
	<title>Donate Blood</title>
	<link rel="stylesheet" type="text/css" href="CSS/profile.css">
	
	<link rel="stylesheet" type="text/css" href="CSS/log.css">
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
                        <li><a href="#">About Us</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="logIn.php">Sign Out</a></li>
                    </ul>

				</div>
			</div>
		</div>

		<div class="content">
			<div class="profile">
				<h1 align="center">Are you really donate blood today? </h1>
				<form method="post" action="donate.php">
				<br>
				 <input class="btn" onclick="myFunction()" type="submit" value="Yes" name="yes">
				 <br>
				 <input class="btn" onclick="myFunction1()" type="submit" value="no" name="no">
					
				</form>
				<?php
				include_once('database.php');
					session_start();
					if(isset($_POST["yes"])){
					$id = $_SESSION["id"];
					$date = date('Y-m-d');
					

					$query=mysql_query("UPDATE member set last_donateblood_date = NOW() where id=$id") or die("Can not update");
					header('location: start.php');
					}
					elseif (isset($_POST['no'])) {
							header('location: start.php');
						# code...
					}


				?>
				<table>
					
				</table>

			</div>
			
		</div>

	</div>

</body>
</html>