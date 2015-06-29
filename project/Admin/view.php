<!DOCTYPE html>
<html>
<head>
	<title>messages</title>
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
                    <h2 align="center">(Messages)</h2>
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
                        
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="../logIn.php">Sign Out</a></li>
                    </ul>



                </div>
            </div>
            

        </div>
		<form method="post" action="searchDonar.php">
				<div class="result">
			<div class="title"><h1>Results:</h1></div>
			<div class="all">
				<table cellspacing='0' align="center"> 
					<tr><th>Message Id</th><th>Name</th><th>Contact number</th><th>Email</th><th>Messages</th></tr><!-- Table Header -->
    				<?php
    					
    						include_once('../database.php');
    						$query=mysql_query("SELECT * from contactus ORDER BY message_id DESC") or die("There is no message");
    						$result=$query;
    						while($final = mysql_fetch_array($result)){
    							echo "<tr>";
    							echo "<td>".$final['message_id']."</td>";
    							echo "<td>".$final['name']."</td>";
    							echo "<td>".$final['contact_number']."</td>";
    							echo "<td>".$final['email']."</td>";
    							echo "<td>".$final['message']."</td>";
    							


    							echo "</tr>";
    						}
    					
    					

    				?>
					
					</table>
			</div>
			
		</div>
		<div class="foetr"></div>

	

</body>
</html>