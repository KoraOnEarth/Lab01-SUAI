<?php
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My favourite places</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="/favicon/site.webmanifest" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand p-0" href="/">
        <img src="img/logo.png" alt="logo" width="40" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/">Контакты</a>
            </li>
          </ul>
        </div>
        <div class="text-end">
          <?php
            if($_COOKIE['user'] === 'Да'):
          ?>
            <a href="profile.php" class="btn btn-warning me-2">Кабинет пользователя</a>
          <?php else: ?>
            <a href="login.php" class="btn btn-outline-light me-2">Войти</a>
            <a href="sign-up.php" class="btn btn-warning me-2">Зарегистрироваться</a>
          <?php endif;?>
        </div>
      </div>
    </nav>

    <div class="container my-5">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
        <div class="col">
          <div class="card">
            <img src="img/Nikki_ava.png" class="card-img-top" alt="Nikki" />
            <div class="card-body">
              <h5 class="card-title">Никита Смирнов</h5>
              <p class="card-text">
                Глава технической разработки сайта и дискорд-сервера
              </p>
              <a href="https://vk.com/koraonearth" class="btn btn-primary" target="_blank">ВКонтакте</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img src="img/Dima_ava.png" class="card-img-top" alt="Dima" />
            <div class="card-body">
              <h5 class="card-title">Дмитрий Ермаков</h5>
              <p class="card-text">
                Глава отдела модерирования и взаимодействия с аудиторией
              </p>
              <a href="https://vk.com/d.ermakoff" class="btn btn-primary" target="_blank">ВКонтакте</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img src="img/Yana_ava.jpg" class="card-img-top" alt="Yana" />
            <div class="card-body">
              <h5 class="card-title">Яна Акманаева</h5>
              <p class="card-text">
                Глава поддержания хорошего настроения и дружелюбия на сервере
              </p>
              <a href="https://vk.com/ymuun" class="btn btn-primary" target="_blank">ВКонтакте</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
