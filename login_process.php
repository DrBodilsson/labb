<?php

$con = mysqli_connect("localhost", "root", "", "labb2");

if (isset($_POST['user'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$query = "SELECT * FROM users WHERE username = '$user'";
	$result = mysqli_query($con, $query);
	$resultcheck = mysqli_num_rows($result);

	$saltquery = "SELECT salt FROM users WHERE username = '$user'";
	$result1 = mysqli_query($con, $saltquery);
	$fetchsalt = mysqli_fetch_assoc($result1);
	$hej1 = $fetchsalt['salt'];

	$passquery = "SELECT password FROM users WHERE username = '$user'";
	$passresult = mysqli_query($con, $passquery);
	$rowpass = mysqli_fetch_assoc($passresult);
	$hej = $rowpass['password'];

	if($resultcheck < 1) {
		echo "Fel användarnamn";
		exit();
	}
	if(sha1($pass.$hej1) == $hej) {
		$_SESSION['user'] = $user;
		header("Location: index.php");
		echo "Inloggningen lyckades!";
	} else {
		echo "Fel lösenord";
		exit();
	}
}

?>
