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
        <form name="formulario" action="<?php echo constant('URL')?>pruebas/agregarPrueba" method="POST" class="form">
         <div class="form__box">
          <div>
            <label for="cod">Codigo de la prueba</label>
            <input type="text" name="cod" id="cod" placeholder="Formato XXX-000" maxlength="7">
          </div>
          <div>
           <label for="nombre">Nombre de la prueba:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre">
          </div>
        
        <div>
            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="descripcion" placeholder="Describa el procedimiento de la prueba" maxlength="100"></textarea>
        </div>
     
          <div>
           <label for="duracion">Duracion de la prueba:</label>
            <input type="number" name="duracion" id="duracion" placeholder="Minutos">
          </div>
      
        </div>        
        <div class="bottom">
          <button type="submit" name="agregar" id="btn" value="agregar">Agregar</button>
          <a href="<?php echo constant('URL')?>pruebas/gestion" >Atras</a>
        </div>
      </form>
    </main>
      <script type="text/javascript" src="<?php echo constant('URL')?>public/js/stressing_agregar.js"></script>
  </div>

</body>
</html>