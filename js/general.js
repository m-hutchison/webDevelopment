 $(document).ready(function() {
		$('#cont').load('content/index.php');
		
		$('a#nav').click(function() {
			var page = $(this).attr('href');
			$('#cont').load('content/' + page + '.php');
			return false;
		});
 });