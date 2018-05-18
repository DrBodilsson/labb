<?php
session_start();
require ("process/register_process.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>hejhej</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/js.js"></script>
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
	<div id="form">
		<p><span class="error">Var god fyll i alla fält</span></p>
		<form name="registerForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validate()">
		<input id="input" type="text" name="username" placeholder="Användarnamn"><br><span class="error"> <?php echo $usernameErr;?></span><br>
		<input id="input" type="text" name="mail" placeholder="Email"><br><span class="error"> <?php echo $mailErr;?></span><br>
		<input id="input" type="password" name="password" placeholder="Lösenord"><br><span class="error"> <?php echo $passwordErr;?></span><br>
		<input id="input" type="password" name="confirm_password" placeholder="Bekräfta lösenord"><br><span class="error"> <?php echo $confirm_passwordErr;?></span><br>
		<input id="submit" type="submit" name="Submit" value="Registrera">
		</form>
	</div>
</body>
</html>
