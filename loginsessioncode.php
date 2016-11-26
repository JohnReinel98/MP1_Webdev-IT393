<?php
session_start();
$_SESSION['user'] = $_POST['txtUsername'];
$_SESSION['password'] = md5($_POST['txtPassword']);
header('Location: logincheck.php');
?>