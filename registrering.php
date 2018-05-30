<?php
session_start();
require ("process/register_process.php");
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
	<div class="form">
		<p><span class="error">Var god fyll i alla fält</span></p>
		<form name="registerForm" id="register-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateRegister()">
		<input class="inputbox" type="text" name="username" placeholder="Användarnamn">
		<input class="inputbox" type="text" name="email" placeholder="Email">
		<input class="inputbox" id="password" type="password" name="password" placeholder="Lösenord">
		<input class="inputbox" type="password" name="confirm_password" placeholder="Bekräfta lösenord">
		<input class="submit" type="submit" name="Submit" value="Registrera">
		</form>
	</div>
</body>
</html>
