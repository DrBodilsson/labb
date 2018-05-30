<?php

//$usernameErr = $mailErr = $passwordErr = $confirm_passwordErr = "";
$usernameinsert = $mailinsert = $password = $confirm_password = "";
$con = mysqli_connect("localhost", "root", "", "labb2");
$usernameflag = $emailflag = $passwordflag = $confirm_passwordflag = false;
require ("functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["username"])) {
    $usernameflag = false;
  } else {
    $usernameinsert = test_input(mysqli_real_escape_string($con, $_POST['username']));
    $usernameflag = true;
  }
   if (empty($_POST["email"])) {
    $emailflag = false;
  } else if (!preg_match("/.+\@.+\../", $_POST["email"])) {
    $emailflag = false;
  }
    else {
    $mailinsert = test_input(mysqli_real_escape_string($con, $_POST['email']));
    $emailflag = true;
  }
   if (empty($_POST["password"])) {
    $passwordflag = false;
  } else if (strlen($_POST["password"]) < 8) {
    $passwordflag = false;
  }
    else {
    $passwordinsert = test_input(mysqli_real_escape_string($con, $_POST["password"]));
    $passwordflag = true;
  }
  if (($_POST["password"]) != ($_POST["confirm_password"])) {
    $confirm_passwordflag = false;
  }
   else if (empty($_POST["confirm_password"])) {
    $confirm_passwordflag = false;
  } else {
    $confirm_password = test_input($_POST["confirm_password"]);
    $confirm_passwordflag = true;
  }
}
?>
