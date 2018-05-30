<?php

$con = mysqli_connect("localhost", "root", "", "labb2");
require ("functions.php");

if (isset($_POST['user'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$inlogstatus = fetchrows($con, "users", "username", $user);
	$saltfetch = fetchdata($con, "users", "username", $user, "salt");
	$passwordfetch = fetchdata($con, "users", "username", $user, "password");

	/*if($inlogstatus < 1) {
		?><p class="echo">Användarnamn och lösenord stämmer inte överens.</p><?php
	}*/
	if((sha1($pass.$saltfetch) == $passwordfetch) && ($inlogstatus >= 1)) {
		$_SESSION['user'] = $user;
		header("Location: index.php");
		echo "Inloggningen lyckades!";
	}
	/*if ($inlogstatus < 1) {
		?><p class="echo">Användarnamn och lösenord stämmer inte överens.</p><?php
	}*/
	else {
		?><p class="echo">Användarnamn och lösenord stämmer inte överens.</p><?php
	}
}

?>
