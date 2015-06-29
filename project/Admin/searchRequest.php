<!DOCTYPE html>
<html>
<head>
	<title>Search Request</title>
	<link rel="stylesheet" type="text/css" href="../CSS/searchDonar.css">
	<link rel="stylesheet" type="text/css" href="../CSS/request.css">
	<link rel="stylesheet" type="text/css" href="../CSS/table.css">
</head>
<body>
	
		<div class="header">
            <div class="logo"> </div>
            <div class="banner">
                <div class="pic">
                    <h1 align="center">Bondhon</h1>
                    <h2 align="center">Online Blood Bank</h2>
                    <h2 align="center">(Search Requests)</h2>

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
                        
                        
                        <li><a href="../logIn.php">Sign Out</a></li>
                    </ul>



                </div>
            </div>
            

        </div>
		<form method="post" action="searchRequest.php">
		<div class="search">
			
			<div class="donar">
				<div class="title"><h2 align="center">Search By Blood Group</h></div>
				<div class="task">
					<div align="center">
					<br><br>
					<select  id="select" name="select">
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
					<br>
					<input class="btn btn-primary btn-large btn-block" type="submit" name="submit1" value="Search">
					
				</div>
			</div>
			<div class="donar">
				<div class="title"><h2 align="center">Search All Requests</h2></div>
				<div class="task" >


					<div class="control-group" align="center">
					<br><br>
					<input class="btn btn-primary btn-large btn-block" type="submit" name="submit2" value="Search">
					
					</div>



				</div>
			</div>
			<div class="donar">
				<div class="title"><h2 align="center">Search By Member Id</h2></div>
				<div class="task">
					<div class="control-group" align="center">
					<br><br>
					<input  type="text" class="login-field" value="" placeholder="Request Id" name="mid">
					<br><br>
					<input class="btn btn-primary btn-large btn-block" type="submit" name="submit3" value="Search">
					
					</div>
				</div>
			</div>
			</form>
		</div>
		<div class="result">
			<div class="title"><h1>Results:</h1></div>
			<div class="all">
				<table cellspacing='0' align="center"> 
					<tr><th>Request Id</th><th>Patient Name</th><th>Blood Group</th><th>Mobile Number</th><th>Location</th> <th>Email</th> <th>Deisre Date</th> <th>Details</th></tr><!-- Table Header -->
    				<?php
    					include_once('../database.php');
    					/*$today=getdate();
    					
    					$month = ($today['mon']-2);
    					if($month > 1){
    						$mon=$month;
    					}
    					else{
    						$mon=$month+12;
    					}
    					echo $mon;*/
    					
    					if(isset($_POST['submit3'])){
    						$index=$_POST['mid'];
    						$query=mysql_query("SELECT * from request where request_id=$index") or die("There is no member in this ID");
    						$result=$query;
    						while($final = mysql_fetch_array($result)){
    							echo "<tr>";
    							echo "<td>".$final['request_id']."</td>";
    							echo "<td>".$final['patient_name']."</td>";
    							echo "<td>".$final['bloodgroup']."</td>";
    							echo "<td>".$final['phone']."</td>";
    							echo "<td>".$final['location']."</td>";
    							echo "<td>".$final['email']."</td>";
    							echo "<td>".$final['desiredate']."</td>";
    							echo "<td>".$final['details']."</td>";


    							echo "</tr>";
    						}
    					}
    					elseif (isset($_POST['submit1'])) {
    						$index=$_POST['select'];
    						
    						$query=mysql_query("SELECT * from request where bloodgroup like '%$index%'") or die("Can not Found!!");
    						$result=$query;
    						if($index != ""){
    						while($final = mysql_fetch_array($result)){
    							echo "<tr>";
                                echo "<td>".$final['request_id']."</td>";
                                echo "<td>".$final['patient_name']."</td>";
                                echo "<td>".$final['bloodgroup']."</td>";
                                echo "<td>".$final['phone']."</td>";
                                echo "<td>".$final['location']."</td>";
                                echo "<td>".$final['email']."</td>";
                                echo "<td>".$final['desiredate']."</td>";
                                echo "<td>".$final['details']."</td>";


    							echo "</tr>";
    						}
    					}
    					else{
    						echo "Please enter blood group.";
    					} 

    						
    					}
    					elseif (isset($_POST['submit2'])) {
    						
    						
    						
    						$query=mysql_query("SELECT * from request order by request_id desc") or die("Can not Found!!");
    						$result=$query;
    						while($final = mysql_fetch_array($result)){
    							echo "<tr>";
                                echo "<td>".$final['request_id']."</td>";
                                echo "<td>".$final['patient_name']."</td>";
                                echo "<td>".$final['bloodgroup']."</td>";
                                echo "<td>".$final['phone']."</td>";
                                echo "<td>".$final['location']."</td>";
                                echo "<td>".$final['email']."</td>";
                                echo "<td>".$final['desiredate']."</td>";
                                echo "<td>".$final['details']."</td>";


    							echo "</tr>";
    						}
    						# code...
    				
    					
    					}

    				?>
					
					</table>
			</div>
			
		</div>
		<div class="foetr"></div>

	

</body>
</html>