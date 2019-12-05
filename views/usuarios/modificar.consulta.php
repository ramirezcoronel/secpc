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
        <form action="<?php echo constant('URL')?>usuarios/modificarUsuario" method="POST" class="form">
        <div class="form__box esquinas">
         <div>
            <label for="cedula">Ingrese Cedula de usuario a modificar:</label>
            <input type="text" name="cedula" id="cedula">
         </div>
        </div>
        
        <div class="centrar">
          <button type="submit" name="modificar" class="boton" value="Modificar">Modificar Usuario</button>
        </div>
        
      </form>
    </main>
  </div>

</body>
</html>