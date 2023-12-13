<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказать</title>
    <link rel="stylesheet" href="../css/order3.css">
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
    <h3 style="font-size:36px;">Выберите нужный перевод</h3>
    <div class="container">
        <div class="text-img">
            <div class="img1">
            </div>
            <div class="text">
                <h3>С иностранного на русский</h3>
                <p>Цена: 1000</p>
                <p>Готовность перевода: Перевод может быть готов в течении 1-2 дней.</p>
                <p>Описание:  Быстрый и качественный перевод на наш русский язык с любого иностранного языка</p>
                <?php if(isset($_SESSION['username'])) { echo "<a href='../html/order2.php'>";} else echo "<a href='../html/login.php'>";?><button>Заказать</button></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-img">
            <div class="img2">
            </div>
            <div class="text">
                <h3>С русского на иностранный</h3>
                <p>Цена: 1000</p>
                <p>Готовность перевода: Перевод может быть готов в течении 1-2 дней.</p>
                <p>Описание: Быстрый и качественный перевод на с русского языка на любой иностранный язык</p>
                <?php if(isset($_SESSION['username'])) { echo "<a href='../html/order1.php'>";} else echo "<a href='../html/login.php'>";?><button>Заказать</button></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-img">
            <div class="img3">
            </div>
            <div class="text">
                <h3>С иностранного на иностранный</h3>
                <p>Цена: 2000</p>
                <p>Готовность перевода: Перевод может быть готов в течении 1-2 дней.</p>
                <p>Описание: Быстрый и качественный перевод на любой иностранный язык с любого иностранного языка</p>
                <?php if(isset($_SESSION['username'])) { echo "<a href='../html/order3.php'>";} else echo "<a href='../html/login.php'>";?><button>Заказать</button></a>
            </div>
        </div>
    </div>
    <footer>

    </footer>
</body>

</html>