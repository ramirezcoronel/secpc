<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Tipos de Equipos</title>
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
        <form action="<?php echo constant('URL')?>equipos/agregarTipoDeEquipo" method="POST" class="form">

           <div class="form-header"> <p>Agregar Tipo de Equipo</p> </div>
          
        
        <div class="form__box">
          <div class="margin-lados">
            <label for="codTipoEquipo">Codigo de Tipo de Equipo:</label>
            <input type="text" name="codTipoEquipo" id="codTipoEquipo" />
          </div>
          <div class="margin-lados">
            <label for="nombre">Nombre de Tipo de Equipo:</label>
            <input type="text" name="nomTipoEquipo" id="nombre" />
          </div>
        </div>

        <div class="bottom">
          <button type="submit" name="agregar">Agregar</button>
          <a href="<?php echo constant('URL')?>equipos/consultarTipoEquipo" >Volver</a>
        </div>
        
        
      </form>
    </main>
  </div>

</body>
</html>