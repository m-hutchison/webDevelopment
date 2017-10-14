<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<?php
include './func.inc.php';

if (isset($_GET['code']) && !empty($_GET['code'])) {
  $code = $_GET['code'];
  redirect ($code);
  die();  
}

?>
 
 <head>
  <title> Simple URL Shortener </title
  <link rel="stylesheet" href="./style.css" type="text/css" />
  <link type="text/plain" rel="author" href="./humans.txt" />
  
  <script type="text/javascript" src="http://code.jquer.com/jquery-1.6.1.min.js" /></script>
  <script type="text/javascript">
	$(document).ready(function() {
		$('#url').focus();
	});

    function go(url) {
		$.post('url.php', { url: url }, function(data) {
			if (data=='error_no_url') {
			   $('#message').html('<p>No URL specific</p>');
			} else if (data=='error_invalid_url') {
			   $('#message').html('<p>Not a valid URL</p>');
			} else if (data=='error_is_min') {
			   $('#message').html('<p>Already a yunodirect.me URL</p>');
			} else {
			   $('#url').val(data);
			   $('#url').select();
			   $('#message').html('<p>Succesfully shortened your URL</p>');
			}
		 });
		}
  </script>
  
  </head>
  
<body>

<div id="container">
<form>
 <h2>YUNO Redirect me! : BETA</h2>
 <p>Simple URL redirector with a little meme fun!</p>
 <p><input type="text" name="url" id="url" size="60" onkeydown="if (event.keyCode == 13 || event.which == 13)  { go($('#url').val()); } " /> <input type="button" value="Shorten" onclick="go($('#url').val());" /></p> 
 
 <div id="message"><p>&nbsp;</p></div>
</form>
</div>

</body>
</html>
