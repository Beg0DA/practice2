<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказать</title>
    <link rel="stylesheet" href="../css/orders.css">
    <script>
        function confirmOrder() {
            var confirmed = confirm("Вы уверены, что хотите оформить заказ?");
            if (confirmed) {
                alert("Ваш заказ оформлен, ожидайте ответ на почте.");
                window.location.href = "../index.php";
            }
        }
    </script>
</head>

<body>
    <div class="header">
        <header>
            <a href="../index.php" class="logo">Translate IT!</a>
            <a href="../index.php">Главная</a>
            <a href="../html/order.php" class="active">Заказать</a>
            <a href="../html/about.php">О нас</a>
            <?php if(isset($_SESSION['username'])) {$username = $_SESSION['username']; echo "<a href='../html/out.php'><h4>".$username."</h4>";} else echo "<a href='../html/login.php'><img src='../img/2.png'>";?></a>
        </header>
    </div>
    <h3>Подтвердите выбранный перевод</h3>
    <div class="container">
        <div class="text">
            <p>Перевод с: <input type="text" required placeholder="Впишите нужный язык"></p> 
            <p>Перевод на: <input type="text" placeholder="Впишите нужный язык" required></p>
            <p>Цена: 2000</p>
            <p>Описание: Быстрый и качественный перевод на любой иностранный язык с любого иностранного языка</p>
            <a href="#" onclick="confirmOrder();"><button>Подтвердить заказ</button></a>
        </div>
    </div>
</body>

</html>