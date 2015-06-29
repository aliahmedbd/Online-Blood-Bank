<!DOCTYPE html>
<html>

<head>
  <title> Contact Us!</title>
  	<script type='text/javascript' src='JS/contact.js'></script>
    <link rel="stylesheet" href="CSS/contact.css">
  

</head>
 
<body>
  
  <div id="header"> <img src="images/banner.jpg" class="image1"> </img></div>

  <div id="header1">




<fieldset >

<legend>Contact us</legend>

<form method='post' id='contactus'  action='contactus.php' onsubmit="return validation()" >


    <div class='container'>
       <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' onblur="uname()" /><br/>
   
    </div>
    <div id="mname"></div>


   <div class='container'>
        <label for='email' >Email Address*:</label><br/>
        <input type='text' name='email' id='email'   onblur="uemail()" /><br/>
    
     </div>
   
   <div id="memail"></div>

<div class='container'>
    <label for='phone' >Phone Number*:</label><br/>
    <input type='text' name='phone' id='phone' onblur="uphone()" /><br/>
  
</div>
 
 <div id="mphone"></div>

<div class='container'>
    <label for='message' >Message:</label><br/>
  
    <input
     rows="10" cols="50" name='message' id='message' onblur="umessage()">

  <div id="mmessage"></div>


<div class='container'>
    <input type='submit' name='submit' value='Submit' onclick='myfunction()' />
</div>

</form>
</fieldset>





</div>

<div id="foetr">
  
 <p>
   
Please complete the form . We'll do everything we can to respond to you as quickly as possible. </br>
Our goal is to reply to every email as quickly as possible . 
Please be assured, we will never publish the personal information you provide to us.

 </p>


</div>
</body>
<?php
include_once('database.php');

if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  echo "cdshdvdvhjvh";
  $query=mysql_query("INSERT into contactus(name,contact_number,email,message)  values ('".$name."','".$phone."','".$email."','".$message."')");
  header("location: start.php");

  # code...
}



?>




</html>