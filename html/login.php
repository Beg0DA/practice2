<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Вход</title>
  <link rel="stylesheet" href="../css/login.css">
</head>

<body>
  <header>
    <a href="../index.php" class="logo">Translate IT!</a>
    <a href="../index.php">Главная</a>
    <a href="../html/order.php">Заказать</a>
    <a href="../html/about.php">О нас</a>
    <a href="../html/login.php"><img src="../img/2.png"></a>
  </header>
  <div class="container">
    <form action="log.php" method="post">
      <h3>Вход</h3>

      <label for="login">Логин</label>
      <input type="text" placeholder="Введите почту" name="login" id="login" required>

      <label for="psw">Пароль</label>
      <input type="password" placeholder="Введите пароль" name="psw" id="psw" required>
      <input class=registerbtn value="Войти" type="submit">
  </div>
  <div class="container signin">
    <p>Нет аккаунта? <a href="reg.php">Регистрация</a>.</p>
  </div>
  </form>
</body>

</html>