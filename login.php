<?php
session_start();
require ("process/login_process.php");

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
		if (isset($_SESSION['user'])) {
			?><div class="welcometext"><h1>Välkommen <?php echo $_SESSION['user'];?>! Klicka <a href="index.php" id="goback">här</a> för att komma till kommentarsidan.</h1></div><?php
		} else {
			showloginform();
		}
	?>
</body>
</html>
