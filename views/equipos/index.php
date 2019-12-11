<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Equipos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
      <div class="text-header">
        <h2> <?php echo $this->mensaje ?> </h2>
      </div>
      <div class="horizontal">
        <div class="cards">
          <div class="cards-header">
             <h2>Tipos de equipos</h2>
            </div>
          <div class="cards-content">
            <a href="<?php echo constant('URL')?>equipos/consultarTipoEquipo" > <h2>Gestionar Tipos</h2> </a>
        </div>
      </div>
      <div class="cards">
         <div class="cards-header">
         <h2>Equipos</h2>
        </div>
      <div class="cards-content">
        <a href="<?php echo constant('URL')?>equipos/consultarEquipos"> <h2>Gestionar Equipos</h2> </a>
      </div>
     </div>
      </div>

    </main>
  </div>

</body>
</html>
