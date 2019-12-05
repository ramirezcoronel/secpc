<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC - UPTAEB</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->

      <main>

        <div class="produccion">
        <h2>Cantidad de Canaimas Producidas</h2>

        <div class="produccion__equipos">

          <div class="equipos__laptops">
            <img src="<?php echo constant('URL')?>public/img/laptop.png" alt="Modelos de Laptops" />
            <ul>
              <li>Letras azules: 2034</li>
              <li>Letras rojas: 123</li>
              <li>Profesores: 334</li>
            </ul>
          </div>

          <div class="equipos__tablets">
            <img src="<?php echo constant('URL')?>public/img/tablet.png" alt="Modelos de tablet" />
            <p>Tablets: 1340</p>
          </div>
        </div>
      </div>
      </main>
  </div>
</body>
</html>