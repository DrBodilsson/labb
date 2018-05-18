<?php
$commentErr = "";
$comment = "";
$flag = false;

require ("functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["comment"])) {
    $commentErr = "A comment is required";
    $flag = false;
  } else {
    $comment = test_input($_POST["comment"]);
    $flag = true;
  }
}
?>
