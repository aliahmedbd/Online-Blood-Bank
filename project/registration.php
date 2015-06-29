<!DOCTYPE html>
<html>

<head>
  <title>Registration</title>
  	<script type="text/javascript" src="JS/registration.js"></script>

    <link rel="stylesheet" href="CSS/reg.css">

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
                        
                        
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="logIn.php">Log In</a></li>

                       
                    </ul>

				</div>
			</div>
		</div>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Registration</h1>
			</div>

			<div class="login-form">
				<form method="post" action="registration.php" onsubmit="return validation()">
				<div class="control-group">
				<input type="text" class="login-field" placeholder="First Name"  name="fname" id="fname" onblur="userfirst()">				
			</div>
			<div id="mfname">
				
			</div>
				

				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Last Name" id="lname" name="lname" onblur="lastcheck()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="mlname"></div>

				<div class="control-group" >
					<p></p>
					<select id="select" name="sex">
  						<option value="">Sex</option>
 						<option value="Male">Male</option>
 						<option value="Female">Female</option>
  						<option value="Others">Others</option>		
					</select>
					
					</div>

				

				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="username" id="uname" name="user" onblur="usercheck()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="muname"></div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password" id="pass" name="pass" onblur="userpass()">
				</div>
				<div id="mpass"></div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="Retype Password" id="rpass" name="rpass" onblur="rPassword()">
				</div>
				<div id="mRpass"></div>

				<div class="control-group" >
					<p></p>
					<select id="select" name="select">
  						<option value="">Blood Group</option>
 						<option value="A+">A+</option>
 						<option value="A-">A-</option>
  						<option value="B+">B+</option>
  						<option value="B-">B-</option>
 						<option value="AB+">AB+</option>
  						<option value="AB-">AB-</option>
  						<option value="O+">O+</option>
 						<option value="O-">O-</option>
					</select>
  

				</div>

					<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Mobile Number" id="phone" name="phone" onblur="userPhone()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="mphone"></div>

					<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Email" id="email" name="email" onblur="useremail()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="memail"></div>

					<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Address" id="address" name="address" onblur="useraddress()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="maddress"></div>

					<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Exact Location" id="location" name="location" onblur="userlocation()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="mlocation"></div>

					<div class="control-group">
					Last Blood Donate Date:
				<input type="date" class="login-field" value="" placeholder="Date of last Donate" id="login-name" name="lastDate">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>



				
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<input class="btn btn-primary btn-large btn-block" type="submit" name="submit" value="Register">
				</form>

				
				
			</div>
		</div>
	</div>
</body>
<?php
include_once('database.php');
if (isset($_POST['submit'])) {
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$sex=$_POST['sex'];
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$bgroup=$_POST['select'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$location=$_POST['location'];
	$lastDate=$_POST['lastDate'];
	$type="users";


	$query=mysql_query("SELECT * from member where username='".$username."'");
	$index=mysql_fetch_row($query);

	if ($index>0) {
		echo "This username is not available";
		# code...
	}
	else{
		$q="INSERT into member(firstname,lastname,sex,username,password,bloodgroup,mobile,email,address,location,last_donateblood_date,type) values ('".$firstname."','".$lastname."','".$sex."','".$username."', '".$password."','".$bgroup."','".$phone."','".$email."','".$address."','".$location."' ,'".$lastDate."','".$type."')";
		$insert=mysql_query($q);
		//header('location: start.php');
		echo "<h1>"."Thank for your registraion.Now you have to log in to enter home.";
	}
}

?>



</html>