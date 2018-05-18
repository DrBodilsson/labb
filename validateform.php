<?php

$usernameErr = $mailErr = $passwordErr = $confirm_passwordErr = "";
$usernameinsert = $mailinsert = $password = $confirm_password = "";
$con = mysqli_connect("localhost", "root", "", "labb2");
$flag = false;
require ("functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
    $flag = false;
  } else {
    $usernameinsert = test_input(mysqli_real_escape_string($con, $_POST['username']));
    $flag = true;
  }
   if (empty($_POST["mail"])) {
    $mailErr = "Email is required";
    $flag = false;
  } else {
    $mailinsert = test_input(mysqli_real_escape_string($con, $_POST['mail']));
    $flag = true;
  }
   if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
    $flag = false;
  } else {
    $passwordinsert = test_input($_POST["password"]);
    $flag = true;
  }
   if (empty($_POST["confirm_password"])) {
    $confirm_passwordErr = "Confirm password is required";
    $flag = false;
  } else {
    $confirm_password = test_input($_POST["confirm_password"]);
    $flag = true;
  }
}


?>
