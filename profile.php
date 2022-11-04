<?php
  session_start();
  error_reporting(0);
  if(!$_SESSION['user']){
    header('Location: /');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <title>Профиль</title>
</head>
<body>

  <!-- Профиль -->
  <div class="profile">
    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" style="margin: 0 auto;" alt=""/>
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="core\logout.php" class="logout">Выход</a>
    </form>
  </div>

</body>
</html>