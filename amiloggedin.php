<?php
error_reporting(0);
session_start();
include_once 'dbconnect.php';
$yes = "yes";
$valid = mysqli_real_escape_string($con, $_SESSION['usr_valid']);
$result = mysqli_query($con, "SELECT * FROM users WHERE valid = '" . $yes . "'"); 

if ($row = mysqli_fetch_array($result)) {

} else {
    header("location: kk.php");
}




?>
<!doctype html>
<h1> hi </h1>