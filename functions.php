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
function insertcomment($con, $table, $column1, $column2, $value1, $value2, $comment) {
	$comment = mysqli_real_escape_string($con, $_POST[$comment]);
	$insert = "INSERT INTO `$table`($column1, $column2) VALUES ('$value1', '$value2')";
	mysqli_query($con, $insert);
}
function fetchrows ($con, $table, $column, $compare) {
  $sql = "SELECT * FROM $table WHERE $column = '$compare'";
  $result = mysqli_query($con, $sql);
  $resultcheck = mysqli_num_rows($result);
	return $resultcheck;
}
function fetchdata ($con, $table, $column, $compare, $fetchvalue) {
	$sql = "SELECT * FROM $table WHERE $column = '$compare'";
	$result = mysqli_query($con, $sql);
	$resultfetch = mysqli_fetch_assoc($result);
	$value = $resultfetch[$fetchvalue];
	return $value;
}
function insertusernfo ($con, $table, $passwordinsert, $column1, $column2, $column3, $column4, $value1, $value2) {
  $salt = generateRandomString();
  $hash = sha1($passwordinsert.$salt);
  $insert = "INSERT INTO $table ($column1, $column2, $column3, $column4) VALUES ('$value1','$value2', '$hash', '$salt')";
  mysqli_query($con, $insert);
}
function showcomment() {
	$con = mysqli_connect("localhost", "root", "", "labb2");
	$sql = "SELECT * FROM kommentarer";
	$select = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_assoc($select))
	{
		?>
			<div id="result">
				<div class="posts">
					<div class="user">Postat av <?php echo $row['user'];?></div>
				</div>
				<div class="comment">
					<div><?php echo $row["kommentar"];?></div>
				</div>
			</div>
		<?php
	}
}
function showuser() {
	if (isset($_SESSION['user'])) {
	?><div class="inlog">Inloggad som: <?php echo $_SESSION['user'];
	} else {
	echo "";
	}
}
function showheader() {
	?>
	<header class="topnav">
		<div>
			<a href="logout.php" class="logoutbutton">Logga ut</a>
		</div>
 		<div class="topnav-centered">
    	<a href="login.php" class="hombutton">Start</a>
  	</div>
  	<div class="topnav-right">
    	<?php
  		showuser();
  		?>
  	</div>
  </header>
	<?php
}
function showloginform() { ?>
	<h1 class="welcometext">Välkommen till forumet! Logga in för att gå vidare.</h1>
	<form name="loginForm" id="login-form" method="POST" onsubmit="return validateLogin()">
		<input class="inputbox" type="text" name="user" placeholder="Användarnamn">
		<input class="inputbox" type="password" name="pass" placeholder="Lösenord">
		<input class="submit" type="submit" name="logon" value="Logga in">
	</form>
	<form action="registrering.php">
	<div id="regtext">
	<button type="submit" id="reg">Bli medlem</button>
	</div>
	</form>
	<?php
}
function showcommentform() { ?>
	<h1 class="welcometext">Välkommen <?php echo $_SESSION['user']; ?>!</h1>
	<div class="form">
		<p><span class="error">Var god fyll i alla fält</span></p>
		<form name="commentForm" id="comment-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateComment()" >
		<textarea id="textarea" type="text" name="comment" placeholder="Skriv din kommentar"></textarea>
		<input class="submit" type="submit" name="Submit" value="Kommentera">
	</form>
	</div>
	<div id="com">
		<h1 class="welcometext">kommentarer</h1>
		<?php
		showcomment();
		?>
	</div>
	<?php
}
?>
