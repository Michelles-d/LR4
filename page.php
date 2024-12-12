<?php
session_start();
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Сторінка користувача</title>
    <link rel="stylesheet" href="hellopage.css">
</head>
<body>
    <h1>Привіт, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : (isset($_COOKIE['username']) ? $_COOKIE['username'] : 'Гість'); ?>!</h1>
    <a href="index.php">Повернутись на головну</a>
</body>
</html>
