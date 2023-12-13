<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина заказов</title>
    <link rel="stylesheet" href="../css/cart.css">
</head>

<body>
        <header>
            <a href="../index.php" class="logo">Translate IT!</a>
            <a href="../index.php">Главная</a>
            <a href="../html/order.php">Заказать</a>
            <a href="../html/about.php">О нас</a>
            <a href="../html/cart.php"><img src="../img/1.png"></a>
            <?php if(isset($_SESSION['username'])) {$username = $_SESSION['username']; echo "<a href='../html/out.php'><h4>".$username."</h4>";} else echo "<a href='../html/login.php'><img src='../img/2.png'>";?></a>

</body>

</html>