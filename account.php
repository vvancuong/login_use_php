<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.html");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quan tri</title>
</head>

<body>
    <h1>Trang quan tri</h1>
    <a href="logout.php">Dang xuat</a>
</body>

</html>