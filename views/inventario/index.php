<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | inventario</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- HEADER -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
      <div class="text-header margin-bottom">
        <h2> <?php echo $this->mensaje ?> </h2>
      </div>
      <div class="horizontal">

        <div class="cards">
          <div class="cards-header">
            <h2>Partes</h2>
          </div>
          <div class="cards-content esquinas ">
             <a href="<?php echo constant('URL')?>inventario/consultarMarca"><h2>Gestionar Marcas</h2></a>
          </div>
          <div class="cards-content esquinas">
            <a href="<?php echo constant('URL')?>inventario/consultarModelos"><h2>Gestionar Modelos</h2></a>
          </div>
          <div class="cards-content esquinas">
            <a href="<?php echo constant('URL')?>inventario/consultarPartes"><h2>Gestionar Partes</h2></a>
          </div>
        </div>

        <div class="cards">
          <div class="cards-header">
            <h2>Movimientos</h2>
          </div>
         <div class="cards-content">
           <a href="<?php echo constant('URL')?>inventario/consultarMovimientos"><h2>Gestionar Movimientos</h2></a>
          </div>
        </div>

      </div>
    </main>
  </div>
</body>
</html>
