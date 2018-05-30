<?php

if (!isset($_SESSION['user'])) {
	header("Location: login.php");
}
$con = mysqli_connect("localhost", "root", "", "labb2");

require ("commentvalidate.php");

if (isset($_POST['Submit'])) {
	if ($flag == true) {
		insertcomment($con, "kommentarer", "kommentar", "user", $comment, $_SESSION['user'], "comment");
	}
}
?>
