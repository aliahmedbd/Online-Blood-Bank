<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../CSS/start.css">
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
					<div class="div1">
						<ul id="navmenu">
						<li><a href="#">Home</a></li>
						<li><a href="#">Search</a>
						<ul class="sub1">
							<li><a href="searchDonar.php">Donar</a></li>
							<li><a href="searchRequest.php">Requests</a></li>
			
						</ul>
						</li>
						<li><a href="request.php">Set Request</a></li>
						<li><a href="view.php">View Messages</a></li>
				
						

					</ul>

					</div>
					<div class="div2">
					<ul id="navmenu">
						<li><a href="#"><?php session_start(); echo $_SESSION["first"];echo " ";echo $_SESSION["last"];echo "|Admin"; ?></a>

							<ul class="sub1">

							<li><a href="profile.php">Profile</a></li>
							<li><a href="../logIn.php">Sign Out</a></li>
			
						</ul>
						</li>
						

					</ul>
						
					</div>
					
					


				</div>
			</div>
			
		</div>
		<div class="content">
			<div class="first"></div>
			<div class="middle">
				<div class="top">
				<br>
					<h1 align="center"> One Bag of Blood Can Save One's Life</h1><br>
					<br><br>
					<div class="box">
							<a href="searchDonar.php">
							<div class="part">
							<div class="part1" id="mg-image" style="background-image: url(../images/donor.png)"></div>
								<div class="part2"><h2 align="center">Search Donors</h2></div>
								
							</div>
							</a>
							<a href="request.php">
							<div class="part">
								<div class="part1" id="mg-image" style="background-image: url(../images/bank.png)"></div>
								<div class="part2"><h2 align="center">Request for Blood</h2></div>
							</div>
							</a>
							<a href="searchRequest.php">
							<div class="part">
								<div class="part1" id="mg-image" style="background-image: url(../images/requests.gif)" ></div>
								<div class="part2" ><h2 align="center">Search Request</h2></div>
							</div>
							</a>
							
							
					</div>
					


						
					
				</div>
				<div class="bottom">
				<h1 align="center">Blood Requests</h1>
					<div class="request">
					<h3>
						<?php
						$id=rand(1,5);
						include_once('../database.php');
						$query=mysql_query("SELECT * from request where request_id=$id") or die("There is no member in this ID");
						$result=$query;
    					$final = mysql_fetch_array($result);
    					

						 echo "HI";"<br>";
						 echo "<br>I am ";
						 echo $final['patient_name'];
						 echo ".I am at ";
						 echo $final['hospital_name'];
						 echo ".I need blood so badly.My Blood Group is ";
						 echo "'".$final['bloodgroup']."'";
						 echo ".My mobile number is ";
						 echo "'".$final['phone']."'";
						 echo ".Please help me and save my life.";


						 



						?>
						</h3>
						
					</div>
					<div class="request">
					<h3>
						<?php

						 $id=rand(1,5);
						include_once('../database.php');
						$query=mysql_query("SELECT * from request where request_id=$id") or die("There is no member in this ID");
						$result=$query;
    					$final = mysql_fetch_array($result);
    					

						 echo "HI";"<br>";
						 echo "<br>I am ";
						 echo $final['patient_name'];
						 echo ".I am at ";
						 echo $final['hospital_name'];
						 echo ".I need blood so badly.My Blood Group is ";
						 echo "'".$final['bloodgroup']."'";
						 echo ".My mobile number is ";
						 echo "'".$final['phone']."'";
						 echo ".Please help me and save my life.";



						?>
						</h3>
						
					</div>
					<div align="center"><a href="searchRequest.php">Search All Requests</a></div>
					
					
				</div>
			</div>
			<div class="third"></div>
		</div>
		<div class="foetr"></div>
	</div>

</body>
</html>