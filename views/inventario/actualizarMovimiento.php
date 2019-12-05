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
        <form action="<?php echo constant('URL')?>inventario/actualizarMovimiento" method="POST" class="form margin-lados margin-bottom">
        <div class="form__box esquinas">
         <div class="margin-lados">
            <label for="num">Nº del Movimiento:</label>
            <input type="text" name="num" id="num" value="<?php echo $this->movimiento->getNumero();?>" readonly>
         </div>
          <div class="margin-lados">
             <label for="tipo">Tipo de Movimiento:</label>
             <input type="text" name="tipo" value="<?php echo $this->movimiento->getTipo();?>" readonly>
           </div>
        </div>


         <div class="form__box esquinas margin-bottom">
          <div class="margin-lados">
             <label for="hora">Nueva Hora de movimiento:</label>
             <input type="time" id="hora" name="hora" min="09:00" max="18:00" value="<?php echo $this->movimiento->getHora();?> " required >
           </div>
           <div class="margin-lados">
             <label for="fecha">Nueva Fecha de Movimiento</label>
             <input id="fecha" name="fecha" type="date" value="<?php echo $this->movimiento->getFecha();?>" >
           </div>
        </div>
        <div class="centrar">
          <button type="submit" name="actualizar" class="boton" value="actualizar">Actualizar Movimiento</button>
          <a href="<?php echo constant('URL')?>inventario" class="boton margin-lados">Volver</a>
        </div>
      </form>
    </main>
  </div>

</body>
</html>