<?php
session_start(); // Початок сесії

// Якщо форма була надіслана
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Отримуємо ім'я користувача
    $username = $_POST['username'];

    // Зберігаємо ім'я користувача в сесії
    $_SESSION['username'] = $username;

    // Зберігаємо ім'я користувача в кукі
    setcookie('username', $username, time() + 3600, '/'); // Кука зберігається 1 годину
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Лабораторна робота 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Введіть своє ім'я:</h1>
    <form method="POST" action="index.php">
        <label for="username">Ім'я:</label>
        <input type="text" id="username" name="username" required>
        <div class="buttons-container">
            <button type="submit">Надіслати</button>
            <button onclick="window.location.href='page.php';">Інша сторінка</button>
        </div>
    </form>
    
    <?php
    // Перевіряємо, чи є ім'я в сесії або кукі
    if (isset($_SESSION['username'])) {
        echo "<p>Ім'я користувача сесії: " . $_SESSION['username'] . "</p>";
    } elseif (isset($_COOKIE['username'])) {
        echo "<p>Ім'я користувача кукі: " . $_COOKIE['username'] . "</p>";
    }
    ?>
</body>
</html>
