<?php
$con = mysqli_connect("localhost", "root", "", "labb2");

require ("validateform.php");

if (isset($_POST['username'])) {
	$sql = "SELECT * FROM users WHERE username = '$usernameinsert'";
	$result = mysqli_query($con, $sql);
	$resultcheck = mysqli_num_rows($result);

	$sql1 = "SELECT * FROM users WHERE email = '$mailinsert'";
	$result1 = mysqli_query($con, $sql1);
	$resultcheck1 = mysqli_num_rows($result1);

	if ($resultcheck > 0) {
		echo "Användarnamnet är upptaget.";
		exit();
	}
	else if ($resultcheck1 > 0) {
		echo "Emailadressen är redan registrerad.";
		exit();
	}
	else if ($flag == true) {
		$salt = generateRandomString();
		$hash = sha1($passwordinsert.$salt);
		$insert = "INSERT INTO `users`(username, email, password, salt) VALUES ('$usernameinsert','$mailinsert', '$hash', '$salt')";
		mysqli_query($con, $insert);
		header("Location: login.php");
	}
}
?>
