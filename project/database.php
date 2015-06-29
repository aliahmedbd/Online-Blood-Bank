<?php 
  
  $dbhost = "localhost" ; 
  $dbuser = "root" ; 
  $dbpass = "" ; 
  $dberror1 = " Could Not Connect To Server !" ; 
  
  $conn = mysql_connect ($dbhost , $dbuser , $dbpass) or die ($dberror1) ; 
  mysql_select_db("bloodbank",$conn);
  
  ?>