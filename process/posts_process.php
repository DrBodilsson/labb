<?php

if (!isset($_SESSION['user'])) {
	header("Location: login.php");
}
$con = mysqli_connect("localhost", "root", "", "labb2");

require ("commentvalidate.php");

if (isset($_POST['Submit'])) {
	$comment = mysqli_real_escape_string($con, $_POST['comment']);
	if ($flag == true) {
		$insert = "INSERT INTO `kommentarer`(kommentar) VALUES ('$comment')";
		mysqli_query($con, $insert);
	}
}
$userrr = $_SESSION['user'];
$sqll = "SELECT * FROM `users` WHERE username = '$userrr'";
$selectt = mysqli_query($con, $sqll);
$roww = mysqli_fetch_assoc($selectt);
$sql = "SELECT * FROM kommentarer";
$select = mysqli_query($con, $sql);
?>
