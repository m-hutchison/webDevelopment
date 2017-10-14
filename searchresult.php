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
	   
<!-- Created by Silmerian -->