<!DOCTYPE HTML>
<html dir="ltr">
<head>
<meta charset="utf-8" />

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=0;" />
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

<title>#Scammerbay - Smartphone Enabled</title>
<link rel="stylesheet" href="style.css" />
</head>

<body>

<div id="container">

 <p id="header">
  #ScammerBay 
 </p>	

  <center>
   Currently displaying all results <br /> Alphabetical order only
  </center>
   <br /><br />
 
	<?php
		error_reporting(0);
		include('../dbconnection.php');


		  $sql = mysql_query("select * from user where user like '%$term%'");

		  while ($row = mysql_fetch_array($sql)){
			echo 'Username: ' .'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['user'];
			echo '<br>Email: '.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['email'];
			echo '<br>Reason: '.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['desc'];
			echo '<br/><br/>';
		  }
	   ?>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
