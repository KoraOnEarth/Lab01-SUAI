<!-- Форма регистрации -->

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
  <title>Регистрация</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="signup">
  <form action="core/signupreg.php" method="post" enctype="multipart/form-data">
    <label>Ваше имя</label>
    <input type="text" name="full_name" placeholder="Введите имя">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Почта</label>
    <input type="email" name="email" placeholder="Введите адрес своей почты">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Введите пароль ещё раз">
    <label>Желаемая аватарка</label>
    <input type="file" name="avatar" placeholder="Выберите файл">
    <button type="submit">Зарегистрироваться</button>
    <p>
      У Вас уже есть аккаунт? - <a href="login.php">Авторизуйтесь! :)</a>
    </p>


  </form>
</body>
</html>