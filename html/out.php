<?php
session_start(); // Включаем сессии

if (isset($_SESSION['username'])) {
    unset($_SESSION['username']); // Удаляем переменную 'username' из сессии
}

header('Location: ../index.php'); // Перенаправляем на страницу входа
exit();
?>
