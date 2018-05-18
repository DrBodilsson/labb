<?php
session_start();
require ("process/posts_process.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>hejhej</title>
	<link href="https://fonts.googleapis.com/css?family=Kanit:400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/js.js"></script>
	<div id="topnav">
		<div id="topnav-left">
			<a href="logout.php" id="logoutbutton">Logga ut</a>
		</div>
 		<div id="topnav-centered">
    	<a href="login.php" id="homebutton">Start</a>
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
	</div>
</head>
<body>
	<br>
	<h1 id="text">Välkommen <?php echo $_SESSION['user']; ?>!</h1>
	<div id="form">
		<p><span class="error">Var god fyll i alla fält</span></p>
		<form name="commentForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" >
		<textarea id="textarea" type="text" name="comment" placeholder="Skriv din kommentar"></textarea><br><span class="error"><?php echo $commentErr;?></span>
		<br>
		<input id="submit" type="submit" name="Submit" value="Kommentera">
	</form>
	</div>
	<div id="com">
		<h1 id="h1">kommentarer</h1>
		<?php
		while ($row = mysqli_fetch_assoc($select))
 		{
 			?>
			<div id="resultat">
			<div class="postadav">
			<div class="anvandare">Postat av <?php echo $roww['username'];?></div>
			</div>
			<div class="comment">
				<div><?php echo $row["kommentar"];?></div>
			</div>
			</div>
 			<?php
 		}
 	?>
 	</div>
</body>
</html>
