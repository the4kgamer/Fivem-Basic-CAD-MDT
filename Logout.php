<?php
error_reporting(0);
session_start();

if(isset($_SESSION['usr_id'])) {
    session_destroy();
    unset($_SESSION['usr_id']);
    unset($_SESSION['usr_name']);
    header("Location: youhaveloggedoff.php");
} else {
    header("Location: youhaveloggedoff.php");
}
?>