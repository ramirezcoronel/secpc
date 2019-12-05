<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Marcas</title>
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
        <form action="<?php echo constant('URL')?>inventario/actualizarMarca" method="POST" class="form">
        <div class="form__box esquinas">
         <div class="margin-lados">
            <label for="id">Id del modelo:</label>
            <input type="text" name="id" id="id" value="<?php echo $this->marca->getId(); ?>" readonly>
         </div>
         <div class="margin-lados">
            <label for="nombre">Nombre de Modelo:</label>
            <input type="text" name="nombre" id="nombre">
         </div>
        </div>
        <div class="form__box esquinas">
         
        <div class="centrar">
          <button type="submit" name="actualizar" class="boton" value="agregar">actualizar</button>
          <a href="<?php echo constant('URL')?>inventario/consultarMarca" class="boton margin-lados">Volver</a>
        </div>
        
      </form>
    </main>
  </div>

</body>
</html>