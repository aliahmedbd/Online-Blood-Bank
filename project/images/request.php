

<html>
<head>
	<title>Request </title>
	 <link rel="stylesheet" type="text/css" href="regstyle.css">
	 <script type="text/javascript" src="lib2.js"></script>

</head>

<body>

    <div id = "wrapper">
    	
   
      
       <div id="transbox">
      
       		<div id="request">
       	
          <form action="request.php" method="post">
		     <table align="center" width="800px"  border="0.5">
			   <tr>
				<td bgcolor="cyan" align = "center" height="100" style=font-size:50px  colspan="3">
					Request Here  !
				</td>
			</tr>
			
			<tr>
				<td width="200" align="right" height="52" style=font-size:20px >
					<b>Patient Name:</b>
				</td>
				<td width="200" align="center">
					<input type="text" name="fname" id="fname" onblur="firstname()" />
				</td>
				<td>
					<div id="mfname" width="400"></div>
				</td>
			</tr>


             <tr>
				<td width="200" align="right" height="52" style=font-size:20px >
					<b>Age :</b>
				</td>
				<td width="200" align="center">
					<input type="text" name="age" id="age" onblur="patientage()" />
				</td>
				<td>
					<div id="page" width="400"></div>
				</td>
			</tr>


                 


			 <tr>
				<td width="200" align="right" height="52" style=font-size:20px >
					<b>Sex :</b>
				</td>
				<td width="200" align="center">
					<input type="text" name="sex" id="sex" onblur="patientsex()" />
				</td>
				<td>
					<div id="psex" width="400"></div>
				</td>
			</tr>

             <tr>
				<td width="200" align="right" height="52" style=font-size:20px >
					<b>Relation  :</b>
				</td>
				<td width="200" align="center">
					<input type="text" name="relation" id="relation" onblur="patientage()" />
				</td>
				<td>
					<div id="prealtion" width="400"></div>
				</td>
			</tr>

			<tr>

				<td width="200" align="right" height="52" style=font-size:20px >
					<b>Blood Group :</b>
				</td>
				<td width="200" align="center">
					<input type="text" name="bgroup" id="bgroup" onblur="bloodgroup()" />
				</td>
				<td>
					<div id="blood" width="400"></div>
				</td>
			</tr>

                 
                 <td width="200" align="right" height="52" style=font-size:20px >
					<b>Hospital Name:</b>
				</td>
				<td width="200" align="center">
					<input type="text" name="hname" id="hname" onblur="hospitalname()" />
				</td>
				<td>
					<div id="hosname" width="400"></div>
				</td>
			</tr>
              

              	<tr>

				<td width="200" align="right" height="52" style=font-size:20px >
					<b>Hospital Address : </b>
				</td>
				<td width="200" align="center">
					<input type="text" name="haddress" id="haddress" onblur="hospitaladdress()" />
				</td>
				<td>
					<div id="hosaddress" width="400"></div>
				</td>
			</tr>
			
					

				<tr>
				<td width="200" align="right" height="52" style=font-size:20px >
					<b>Email:</b>
				</td>
				<td width="200" align="center">
					<input type="email" name="email" id="email" onblur="useremail()" />
				</td>
				<td>
					<div id="memail" width="400"></div>
				</td>
			</tr>


				<tr>
				<td width="200" align="right" height="52" style=font-size:20px >
					<b>Phone Number:</b>
				</td>
				<td width="200" align="center">
					<input type="phone" name="phone" id="phone" onblur="userPhone()" />
				</td>
				<td>
					<div id="mphone" width="400"></div>
				</td>
			</tr>
           
			  <tr>
				<td width="200" align="right" height="52" style=font-size:20px >
					<b>Desired Date :</b>
				</td>
				<td width="200" align="center">
					<input type="text" name="ddate" id="ddate" onblur="desiredate()" />
				</td>
				<td>
					<div id="desdate" width="400"></div>
				</td>
			</tr>
            <tr>
				<td >
					
				</td>
				<td width="200"  align="center" style=font-size:20px >
					<input type="submit"  name="submit" id="submit" value="SUBMIT" />
				</td>
				<td>
					
				</td>
			</tr>





		</table>
	</form>
	
	

<?php
	include_once('database.php');


   if(isset($_POST['submit'])){
		$pname=$_POST['fname'];
		$age=$_POST['age'];
    	$sex=$_POST['sex'];
       $relation=$_POST['relation'];
       $bgroup=$_POST['bgroup'];
      $hname=$_POST['hname'];
      $haddress=$_POST['haddress']; 
      $email=$_POST['email']; 
      $phone=$_POST['phone'];
      $ddate=$_POST['ddate'];  
		//echo $name;
		//echo $password;
		
		$sql="INSERT INTO request (patient_name,age,sex,relation,blood_group,hospital_name,hospital_address,phone,email,desired_date) VALUES 
		('".$pname."', '".$age."', '".$sex."','".$relation."','".$bgroup."','".$hname."','".$haddress."', '".$email."', '".$phone."', '".$ddate."')";
		$query=mysql_query($sql) or die("Sorry");
		echo "success";
	}

  ?> 

	</div>
    </div>
    </div>
</body>
</html>
