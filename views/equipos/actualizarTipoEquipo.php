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
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>
        
      </div>
        <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2>
            
        </div>
        <form action="<?php echo constant('URL')?>equipos/actualizarTipoEquipo" method="POST" class="form">
           <div class="form-header"> <p>Actualizar Tipo de Equipo</p> </div>
        
        <div class="form__box">
          <div>
            <label for="codTipoEquipo">Codigo de Tipo de Equipo:</label>
            <input type="text" name="codTipoEquipo" id="codTipoEquipo" value="<?php echo $this->tipo->getCodigo();?>" readonly/>
          </div>
          <div>
            <label for="nombre">Nombre de Tipo de Equipo:</label>
            <input type="text" name="nomTipoEquipo" id="nombre" value="<?php echo $this->tipo->getNombre();?>" />
          </div>
        </div>

        <div class="bottom">
          <button type="submit" name="actualizar">Actualizar Tipo de Equipo</button>
          <a href="<?php echo constant('URL')?>equipos/consultarTipoEquipo">Volver</a>
        </div>
        
        
      </form>
    </main>
  </div>

</body>
</html>