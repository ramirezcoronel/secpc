<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Usuarios</title>
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
        <form  method="POST" class="form margin-lados">
      <div class="form__box esquinas">
         <h2>Gestionar Tipo de Equipo</h2>
        </div>
      <div class="centrar">
        <a href="<?php echo constant('URL')?>equipos/consultarTipoEquipo" class="boton margin-lados">Gestionar Tipos</a>
      </div>
     
      </form>
      <form class="form">
         <div class="form__box esquinas margin-lados">
         <h2>Gestionar Equipo</h2>
        </div>
      <div class="centrar">
        <a href="<?php echo constant('URL')?>equipos/consultarEquipos" class="boton margin-lados">Gestionar Equipos</a>
       
      </div>
      </form>
      </div>
    
    </main>
  </div>

</body>
</html>

