<?php
function generateRandomString($length = 100) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++)
	{
			$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function insertcomment() {
	$comment = mysqli_real_escape_string($con, $_POST['comment']);
	$insert = "INSERT INTO `kommentarer`(kommentar) VALUES ('$comment')";
	mysqli_query($con, $insert);
}
function fetchrows ($table, $column, $compare) {
  $sql = "SELECT * FROM $table WHERE $column = '$compare'";
  $result = mysqli_query($con, $sql);
  $resultcheck = mysqli_num_rows($result);
}
function insertusernfo () {
  $salt = generateRandomString();
  $hash = sha1($passwordinsert.$salt);
  $insert = "INSERT INTO `users`(username, email, password, salt) VALUES ('$usernameinsert','$mailinsert', '$hash', '$salt')";
  mysqli_query($con, $insert);
}
?>
