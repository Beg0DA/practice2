<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php'); // Перенаправление, если пользователь не авторизован
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Панель управления</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>

<body>
    <header>
        <a href="../index.php" class="logo">Translate IT!</a>
        <a href="../index.php">Главная</a>
        <a href="../html/order.php">Заказать</a>
        <a href="../html/about.php">О нас</a>
        <a href="../html/out.php"><h4><?php echo $username; ?></h4></a>
    </header>
    <div class="container-log">
        <h2>Добро пожаловать, <?php echo $username; ?>!</h2>
        <a href="logout.php">Выйти</a>
    </div>
</body>

</html>