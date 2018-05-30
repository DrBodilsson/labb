<?php
$comment = "";
$flag = false;

require ("functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["comment"])) {
    $flag = false;
  } else {
    $comment = test_input($_POST["comment"]);
    $flag = true;
  }
}
?>
