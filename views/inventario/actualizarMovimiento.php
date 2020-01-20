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
        <form action="<?php echo constant('URL')?>inventario/actualizarMovimiento" method="POST" class="form">
          <div class="form-header"> <p>Actualizar Movimiento</p> </div>
        <div class="form__box">
         <div>
            <label for="num">Nº del Movimiento:</label>
            <input type="text" name="num" id="num" value="<?php echo $this->movimiento->getNumero();?>" readonly>
         </div>
          <div>
             <label for="tipo">Tipo de Movimiento:</label>
             <input type="text" id="tipo" name="tipo" value="<?php echo $this->movimiento->getTipo();?>" readonly>
           </div>
          <div>
             <label for="hora">Nueva Hora de movimiento:</label>
             <input type="time" id="hora" name="hora" min="09:00" max="18:00" value="<?php echo $this->movimiento->getHora();?> " required >
           </div>
           <div>
             <label for="fecha">Nueva Fecha de Movimiento</label>
             <input id="fecha" name="fecha" type="date" value="<?php echo $this->movimiento->getFecha();?>" >
           </div>
        </div>
        <div class="bottom">
          <button type="submit" name="actualizar" id="submit" value="actualizar">Actualizar Movimiento</button>
          <a href="<?php echo constant('URL')?>inventario">Volver</a>
        </div>
      </form>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/inventario/actualizarMovimiento.js"></script>

</body>
</html>