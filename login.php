<?php
session_start();
require ("process/login_process.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>hejhej</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/js.js"></script>
	<header id="topnav">
		<div>
			<a href="logout.php" id="activee">Logga ut</a>
		</div>
 		<div id="topnav-centered">
    	<a href="login.php" id="active">Start</a>
  	</div>
  	<div id="topnav-right">
    	<?php
  			if (isset($_SESSION['user'])) {
				?><div id="inlog">Inloggad som: <?php echo $_SESSION['user'];
				} else {
  			echo "";
  			}
  		?>
  	</div>
  	</header>
</head>
<body>
	<?php
		if (isset($_SESSION['user'])) {
			?><div id="headerlog"><h1>Välkommen <?php echo $_SESSION['user'];?>!<br>Klicka <a href="index.php" id="goback">här</a> för att komma till kommentarsidan.</h1></div><?php
		} else {
	?>
	<form name="loginForm" id="loginform" method="POST" action="login.php">
		<input id="input" type="text" name="user" placeholder="Användarnamn"><br><br>
		<input id="input" type="password" name="pass" placeholder="Lösenord"><br><br>
		<input id="submit" type="submit" name="logon" value="Logga in"><br>
	</form>
	<form action="registrering.php">
	<div id="regtext">
	<button type="submit" id="reg">Bli medlem</button>
	</div
	</form>
	<?php
		}
	?>
</body>
</html>
