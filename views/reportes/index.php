<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Soporte</title>
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
   <form  method="POST" class="form">
     
      <div class="form__box esquinas">
         <h2>Reportes de Partes</h2>
         <div>
         </div>
        </div>
     <div class="margin-bottom">
      <button type="submit" name="generar" value="generar" class="boton margin-lados">generar reporte
     </div>

      <div class="form__box esquinas">
         <h2>Reportes de inventario</h2>
         <div>
         </div>
        </div>
     <div class="margin-bottom">
      <a href="<?php echo constant('URL')?>reportes/inventario" class="boton">Reporte de inventario</a>
     </div>


      </form>
    </main>
  </div>

</body>
</html>
