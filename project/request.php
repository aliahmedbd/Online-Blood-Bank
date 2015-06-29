<!DOCTYPE html>
<html>

<head>
  <title>Request for blood</title>
  	<script type="text/javascript" src="JS/request.js"></script>
    <link rel="stylesheet" href="CSS/request.css">

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
                        
                        <li><a href="start.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="logIn.php">Log Out</a></li>

                       
                    </ul>

				</div>
			</div>
		</div>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Request for blood </h1>
			</div>

			<div class="login-form">
				<form method="post" action="request.php" onsubmit="return validation()">
				<div class="control-group">
				<input type="text" class="login-field" placeholder="Patient Name"  name="name" id="pname" onblur="patientname()">				
			</div>
			<div id="mpname">
				
			</div>
				

				<div class="control-group">
				<input type="text" class="login-field"  placeholder="Patient Age"  name="page" id="page" onblur="patientage()">
				</div>
				<div id="mpage"></div>


				<div class="control-group" >
					<p></p>
					<select id="select" name="sex">
  						<option value="">Sex</option>
 						<option value="Male">Male</option>
 						<option value="Female">Female</option>
  						<option value="Others">Others</option>		
					</select>
					
					</div>

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
				<input type="text" class="login-field" placeholder="Hospital Name" name="hosname" id="hname" onblur="hospitalname()">
				</div>
				<div id="mhname"></div>


					<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Hospital Address"name="haddress" id="addr" onblur="address()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="maddr"></div>
			

					<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Mobile Number" name="phone" id="phone" onblur="userPhone()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="mphone"></div>

					<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Email" name="email" id="email" onblur="useremail()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="memail"></div>

				<div class="control-group">
					Blood Desire Date:
				<input type="date" class="login-field" value="" placeholder="Date of last Donate" id="login-name" name="dDate">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>


					<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Exact Location" name="location" id="location" onblur="userlocation()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="mlocation"></div>

				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Details" name="detail">
				
				</div>
				

					


				
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<input class="btn btn-primary btn-large btn-block" type="submit" name="submit" value="Request Submit">
				</form>

				
				
			</div>
		</div>
	</div>
</body>
<?php
include_once('database.php');
if(isset($_POST['submit'])){
	$pname=$_POST['name'];
	$age=$_POST['page'];
	$sex=$_POST['sex'];
	$group=$_POST['select'];
	$hname=$_POST['hosname'];
	$address=$_POST['haddress'];
	$mobile=$_POST['phone'];
	$email=$_POST['email'];
	$date=$_POST['dDate'];
	$location=$_POST['location'];
	$details=$_POST['detail'];

	$query="INSERT INTO request(patient_name,patient_age,sex,bloodgroup,hospital_name,hospital_address,phone,email,desiredate,location,details) values ('".$pname."','".$age."','".$sex."','".$group."','".$hname."','".$address."','".$mobile."','".$email."','".$date."','".$location."','".$details."')";
	$insert=mysql_query($query);

	
}
?>



</html>