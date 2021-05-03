<?php
error_reporting(E_ALL);
session_start();
$_SESSION['username'] = $_POST['name'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['location'] = "Cairns";
//echo $_GET['page'];
header("Location: index.php");

exit();
