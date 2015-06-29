<!DOCTYPE html>
<html>

<head>
  <title>LogIn</title>
  <script type="text/javascript" src="JS/log.js"></script>
    <link rel="stylesheet" href="CSS/log.css">

</head>
  <body>
  	<div class="header">
			<div class="logo"></div>
			<div class="banner">
				<div class="pic">
					<h1 align="center">Bondhon</h1>
					<h2 align="center">Online Blood Bank</h2>


				</div>
				<div class="menu">
					<ul id="navmenu">
                        
                        
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="registration.php">Sign Up</a></li>

                       
                    </ul>

				</div>
			</div>
		</div>

	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>

			<div class="login-form">
				<form method="post" action="logIn.php" onsubmit="return validation()">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="username" id="name" name="user" onblur="username()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="mname"></div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password" id="pass" name="pass" onblur="userpass()">
				
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<div id="mpass"></div>
				<input class="btn btn-primary btn-large btn-block" type="submit" name="submit" value="Login">
				</form>

				
				
			</div>
		</div>
	</div>
</body>
<?php
include_once('database.php');
$result=mysql_query('SELECT * from member');
session_start();


if (isset($_POST['submit'])) {
	$name=$_POST['user'];
	$password=$_POST['pass'];
	 	while($res = mysql_fetch_array($result)) { 		
 		if($name == $res['username'] && $password == $res['password'] && $res['type']=="admin"){
 			$first=$res['firstname'];
 			$last=$res['lastname'];
 			$idd=$res['id'];
 			
 			$_SESSION["first"] = $first;
			$_SESSION["last"] = $last;
			$_SESSION["id"]=$idd;
 			header('location: Admin/start.php'); 
 		}
 		if($name == $res['username'] && $password == $res['password'] && $res['type']=="users"){
 			$first=$res['firstname'];
 			$last=$res['lastname'];
 			$idd=$res['id'];

 			$_SESSION["first"] = $first;
			$_SESSION["last"] = $last;
			$_SESSION["id"]=$idd;
 			header('location: start.php'); 
 		}
 		else{
 			echo "Inavalid!!!";
 		}
	}
	
}



?>



</html>