<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
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
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>
        
      </div>
      <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2> 
        </div>
        <div class="horizontal">
        <form action="<?php echo constant('URL')?>soporte/actualizarSoporte" method="POST" class="form" name="formulario">
          <div class="form-header">
            <p>Realizar Soporte</p>
          </div>
        <div class="form__box">
         <div>
            <label for="num">Numero de Soporte:</label>
            <input type="number" placeholder="Ingrese numero" name="num" id="num" value="<?php echo $this->soporte->getNumSop()?>" readonly>
         </div>
          <div>
             <label for="horaInicio">Hora Inicio de Soporte:</label>
             <input type="time" id="horaInicio" name="horaInicio" value="<?php echo $this->soporte->getHoraEn()?>" >
           </div>
           <div>
             <label for="horaFin">Hora Fin de Soporte:</label>
             <input type="time" id="horaFin" name="horaFin" value="<?php echo $this->soporte->getHoraSda()?>">
           </div>
           <div>
             <label for="fecha">Fecha de Soporte:</label>
             <input id="fecha" name="fecha" type="date" value="<?php echo $this->soporte->getFecha()?>">
           </div>
           <div>
            <label for="falla">Falla reportada:</label>
            <textarea id="falla" name="falla" placeholder="Describa la falla reportada" maxlength="250" value="<?php echo $this->soporte->getFallaReport()?>"></textarea>
         </div>
         <div>
            <label for="descripcion">Descripcion de Soporte:</label>
            <textarea id="descripcion" name="descripcion" placeholder="Describa el procedimiento de el soporte" maxlength="250" value="<?php echo $this->soporte->getDesActividad()?>"></textarea>
         </div>
         <div>
              <label for="numPrueba ">Numero de Prueba: </label>
             <input type="text" name="numPrueba" id="numPrueba" value="<?php echo $this->soporte->getNumPrueba()?>" readonly>
           </div>
        </div>

        <div class="bottom">
          <button type="submit" name="actualizar"  value="agregar" id="submit">Actualizar</button>
          <a href="<?php echo constant('URL')?>soporte" >Volver</a>

        </div>
      </form>
    </div>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/modal/modal.js"></script>
   <script src="<?php echo constant('URL')?>public/js/soporte/agregar.js"></script>
</body>
</html>