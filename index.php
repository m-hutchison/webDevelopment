<!DOCTYPE html>
 <html>
  <head>
   <title> Scammer Search</title>
   <link rel="stylesheet" style="text/css" href="./css/style.css">
   <script language="javascript" src="./js/ajax_framework.js"></script>
  </head>
  
  
  <body>
   <div id="container">
	<p id="header">
	    <a href="./index.php"> #ScammerBay </a>
	</p>	  	
	   
	   	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
		  <input type="text" name="term" />
		  <button type="submit" name="submit">Submit</button>
		  <input type="hidden" name="process" />
    	</form>
		
		<span style="margin-left:500px;"><a href="./allresults.php" title="View every database entrant">Click here to view all entries</a></span>
		
		
	<div id="results">	
	<?php
	
		include('dbconnection.php');

		  if(isset($_REQUEST['process'])) {
		  $term = $_POST['term'];
		  $sql = mysql_query("select * from user where user like '%$term%'");

		  while ($row = mysql_fetch_array($sql)){
			echo 'Username: ' .'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['user'];
			echo '<br>Email: '.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['email'];
			echo '<br>Reason: '.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['desc'];
			echo '<br/><br/>';
		  }
		}
	   ?>
    </div>
   </div>
  </body>
</html>

<!-- Created by Silmerian -->