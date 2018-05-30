<?php
session_start();
require ("process/posts_process.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>hejhej</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.min.js"></script>
	<!--<script src="assets/js/js.js"></script>-->
	<script src="assets/js/jquery.js"></script>
	<?php
		showheader();
 	?>
</head>
<body>
	<?php
	showcommentform();
	?>
</body>
</html>
