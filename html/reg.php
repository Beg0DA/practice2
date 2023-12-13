<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация</title>
  <link rel="stylesheet" href="../css/reg.css">
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
    <form action="" method="post">
      <h3>Регистрация</h3>

      <label for="login">Логин</label>
      <input type="text" placeholder="Введите логин" name="login" id="login" required>

      <label for="name">Имя</label>
      <input type="text" placeholder="Введите имя" name="name" id="name" required>

      <label for="email">Почта</label>
      <input type="email" placeholder="Введите почту" name="email" id="email" required>

      <label for="psw">Пароль</label>
      <input type="password" placeholder="Введите пароль" name="psw" id="psw" required>
      <input class=registerbtn value="Зарегистрироваться" name="add" type="submit">
  </div>
  <div class="container signin">
    <p>Уже есть аккаунт? <a href="login.php">Войти</a>.</p>
  </div>
  </form>

  <?php
  //Подключаемся к БД Хост, Имя пользователя MySQL, его пароль, имя нашей базы
  $connect = new mysqli("site-php-version", "root", "", "igralov");

  //Кодировка данных получаемых из базы
  $connect->query("SET NAMES 'utf8' ");

  //Функция добавления пользователей
  function addUser($login, $name, $email, $password, $connect)
  {
    $result = $connect->query("SELECT id FROM igralov.users ORDER BY (SELECT NULL) LIMIT 1;");
    if ($result && $row = $result->fetch_assoc()) {
      $id = $row['id'] + 1;
    } else {
      $id = 1;
    }
    $add = $connect->query("INSERT INTO igralov.users (id, login, name, email, password) VALUES  ($id, '$login', '$name', '$email', $password)");
    if ($add) {
      $GLOBALS['sysMessages'] = "Добавлен новый пользователь";
    } else {
      $GLOBALS['sysMessages'] = "Ошибка добавления";
    }
  }

  //Если было добавление пользователя, то занести все данные в базу
  if ($_POST['add']) {
    $login = $_POST['login'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    addUser($login, $name, $email, $password, $connect);
  }

  echo "
" . $sysMessages . "
";
  ?>

</body>

</html>