<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <div class="header">
        <header>
            <a href="index.php" class="logo">Translate IT!</a>
            <a href="index.php" class="active">Главная</a>
            <a href="html/order.php">Заказать</a>
            <a href="html/about.php">О нас</a>  
            <?php if(isset($_SESSION['username'])) {$username = $_SESSION['username']; echo "<a href='/html/out.php'><h4>".$username."</h4>";} else echo "<a href='html/login.php'><img src='img/2.png'>";?></a>
        </header>
    </div>
    <div class="container">
        <div class="text-img">
            <div class="text">
                <h3>Выбирайте нас</h3>
                <p>Мы, участники компании “Translate IT!” - переводчики, готовые перевести для вас любые материалы
                    на
                    разные языки.
                    Наши переводчики являются носителями языка и профессионально переводят свои заказы за доступную
                    цену.</p>
            </div>
            <div class="img1">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-img">
            <div class="text">
                <h3>Быстрый и качественный перевод</h3>
                <p>Перевод текста, аудио и видео записей с русского на любой другой, и наоборот.
                    Переводом занимаются профессионалы с огромным и многолетним опытом.</p>
                <a href="html/order.php"><button>Заказать</button></a>
            </div>
            <div class="img2">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-img">
            <div class="img3">
            </div>
            <div class="text">
                <h3>Возможность перевода на множество языков</h3>
                <p>Перевод на любой язык, к примеру популярные английский, французский, немецкий, китайский,
                    испанский,
                    итальянский и многие другие.</p>
                <a href="html/order.php"><button>Заказать</button></a>
            </div>
        </div>
    </div>
    <footer>
    </footer>
</body>

</html>