<!-- Форма авторизации -->
<?php
  session_start();
  error_reporting(0);

  if($_SESSION['user']){
    header('Location: profile.php');
  }
?>


<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Авторизация</title>
  <link rel="stylesheet" href="css\style.css" />
</head>
<body class="signup">
  <form action="core\authorization.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Войти</button>
    <p>
      У Вас нет аккаунта? - <a href="sign-up.php">Зарегистрируйтесь!</a>
    </p>
    <?php
      if($_SESSION['message']){
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message']);
    ?>
  </form>
</body>
</html>