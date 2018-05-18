<?php
session_start();
$_SESSION = array();
session_destroy();

?>

<html lang="en">
<head>
	<title>Comment as much as you want :D</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<div id="topnav">
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
  	</div>
</head>
<body>
	<div id="headerlog"><h1>Du är nu utloggad.<br>Klicka <a href="login.php" id="goback">här</a> för att logga in igen.</h1></div>
</body>
</html>
