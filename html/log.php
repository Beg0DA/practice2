<?php
session_start();

// Подключение к базе данных
$servername = "localhost";
$username = "root"; // Имя пользователя базы данных
$password = ""; // Пароль к базе данных
$dbname = "igralov"; // Имя вашей базы данных

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Получение данных из формы
$username = $_POST['login'];
$password = $_POST['psw'];

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Поиск пользователя в базе данных
$sql = "SELECT * FROM users WHERE login='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Вход выполнен успешно
    $_SESSION['username'] = $username;
    header('Location: dashboard.php'); // Перенаправление на защищенную страницу
} else {
    // Неверные учетные данные
    echo "Неверное имя пользователя или пароль";
}

$conn->close();
?>