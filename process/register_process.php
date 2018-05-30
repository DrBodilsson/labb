<?php
$con = mysqli_connect("localhost", "root", "", "labb2");
$flagsuccess = false;
require ("validateform.php");

if (isset($_POST['username'])) {

$userfetch = fetchrows($con, "users", "username", $usernameinsert);
$emailfetch = fetchrows($con, "users", "email", $mailinsert);

	if ($userfetch > 0) {
		?><p class="echo">Användarnamnet är upptaget.</p><?php
	}
	else if ($emailfetch > 0) {
		?><p class="echo">Emailadressen är redan registrerad.</p><?php
	}
	else if ($usernameflag == true && $emailflag == true && $passwordflag == true && $confirm_passwordflag == true) {
		insertusernfo($con, "users", $passwordinsert, "username", "email", "password", "salt", $usernameinsert, $mailinsert);
		$flagsuccess = true;
		?><p class="echo">Registreringen lyckades!</p><?php
		header("Refresh: 1.5; URL=login.php");
	}
}
?>
