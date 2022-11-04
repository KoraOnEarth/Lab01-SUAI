<?php
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOL Family</title>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@258&display=swap" rel="stylesheet">
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
              <a class="nav-link active" aria-current="page" href="/">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacts.php">Контакты</a>
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

  <!-- Карусель -->
  <div class="container-fluid my-carousel">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000" >
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img\Kindred.png" class="d-block w-100" alt="Kindred">
            <div class="carousel-caption d-none d-md-block">
              <h5>Киндред</h5>
              <p>Воплощение смерти, разделенное надвое</p>
            </div>
      </div>
        <div class="carousel-item">
          <img src="img\noct.png" class="d-block w-100" alt="Nocturne">
          <div class="carousel-caption d-none d-md-block">
            <h5>Ноктюрн</h5>
            <p>Первобытная мощь чистого зла</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img\lillia.png" class="d-block w-100" alt="Lillia">
          <div class="carousel-caption d-none d-md-block">
            <h5>Лиллия</h5>
            <p>Олень Лесной, обыкновенный</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
    

  </body>
</html>
