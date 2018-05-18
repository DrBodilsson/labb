<?php
$con = mysqli_connect("localhost", "root", "", "labb2");

require ("../validateform.php");
require ("../functions.php");



/*$sql = "SELECT * FROM users WHERE username = '$usernameinsert'";
$result = mysqli_query($con, $sql);
$resultcheck = mysqli_num_rows($result);*/

if (isset($_POST['username'])) {
    fetchrows(users, username, $usernameinsert);
    fetchrows(users, email, $mailinsert);

	if ($resultcheck > 0) {
		echo "Användarnamnet är upptaget.";
		exit();
	}
	else if ($resultcheck > 0) {
		echo "Emailadressen är redan registrerad.";
		exit();
	}
	else if ($flag == true) {
	  insertusernfo();
		header("Location: login.php");
	}
}
?>
