<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'cuong' && $password == '123') {
    $_SESSION['username'] = $username;
    header("location: account.php");
} else {
    header('location: login.html');
}