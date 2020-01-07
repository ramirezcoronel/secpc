<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Pruebas</title>
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
             <h2>Pruebas</h2>
            </div>
          <div class="cards-content">
            <a href="<?php echo constant('URL')?>pruebas/gestion"> <h2>Gestionar Prueba</h2></a>
        </div>
      </div>
      <div class="cards">
         <div class="cards-header">
         <h2>Realizar Pruebas</h2>
        </div>
      <div class="cards-content">
        <a href="<?php echo constant('URL')?>pruebas/prueba"> <h2>Realizar Prueba</h2></a>
      </div>
     </div>
      </div>
    </main>
  </div>
 <script type="text/javascript" src="<?php echo constant('URL')?>public/js/confirmacion.js"></script>

</body>
</html>


