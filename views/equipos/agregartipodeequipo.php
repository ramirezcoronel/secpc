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
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>
        
      </div>
        <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2>
            
        </div>
        <form action="<?php echo constant('URL')?>equipos/agregarTipoDeEquipo" method="POST" class="form">

           <div class="form-header"> <p>Agregar Tipo de Equipo</p> </div>
          
        
        <div class="form__box">
          <div class="margin-lados">
            <label for="codTipoEquipo">Codigo de Tipo de Equipo:</label>
            <input type="text" data-patron="[A-Z]{3}\-[0-9]{3}" name="codTipoEquipo" id="codTipoEquipo" />
          </div>
          <div class="margin-lados">
            <label for="nombre">Nombre de Tipo de Equipo:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="nomTipoEquipo" id="nombre" />
          </div>
        </div>

        <div class="bottom">
          <button type="submit" name="agregar" id="submit">Agregar</button>
          <a href="<?php echo constant('URL')?>equipos/consultarTipoEquipo" >Volver</a>
        </div>
      </form>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/equipos/agregarTipo.js"></script>
  <script src="<?php echo constant('URL')?>public/js/modal/modal.js"></script>
</body>
</html>