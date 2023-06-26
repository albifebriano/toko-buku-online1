<?php
$host = "localhost";

$username = "root";
$password = "";
$db_name = "diko_wahyu_pratama";
($GLOBALS["___mysqli_ston"] = mysqli_connect("$host",  "root",  "")) or die("cannot connect" . mysqli_error($GLOBALS["___mysqli_ston"]));
mysqli_select_db($GLOBALS["___mysqli_ston"], $db_name) or die(mysqli_error($GLOBALS["___mysqli_ston"]));
?>