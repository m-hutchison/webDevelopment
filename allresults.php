<!DOCTYPE html>
 <html>
  <head>
   <title>All database entries!</title>
   <link rel="stylesheet" style="text/css" href="./css/style.css">
   <script language="javascript" src="./js/ajax_framework.js"></script>
  </head>
  
  
  <body>
   <div id="container">
	<p id="header">
	    <a href="./index.php"> #ScammerBay </a>
	</p>	  	
	   
		<span style="margin-left:500px;"><a href="./index.php" title="Search specifically here">Click here to search for entries</a></span>
		
		
	<div id="results">	

	<?php
		error_reporting(0);
		include('dbconnection.php');


		  $sql = mysql_query("select * from user where user like '%$term%'");

		  while ($row = mysql_fetch_array($sql)){
			echo 'Username: ' .'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['user'];
			echo '<br>Email: '.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['email'];
			echo '<br>Reason: '.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['desc'];
			echo '<br/><br/>';
		  }
	   ?>
	
    </div>
   </div>
  </body>
</html>

<!-- Created by Silmerian -->