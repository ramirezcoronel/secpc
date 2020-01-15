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
        <form action="<?php echo constant('URL')?>soporte/agregar" method="POST" class="form">
          <div class="form-header">
            <p>Realizar Soporte</p>
          </div>
        <div class="form__box">
         <div>
            <label for="num">Numero de Soporte:</label>
            <input type="number" data-patron="^[a-zA-Z]{3,12}$" name="num" id="num">
         </div>
          <div>
             <label for="horaInicio">Hora Inicio de Soporte:</label>
             <input type="time" id="horaInicio" name="horaInicio" min="09:00" max="18:00" required>
           </div>
           <div>
             <label for="horaFin">Hora Fin de Soporte:</label>
             <input type="time" id="horaFin" name="horaFin" min="09:00" max="18:00" required>
           </div>
           <div>
             <label for="fecha">Fecha de Soporte:</label>
             <input id="fecha" name="fecha" type="date">
           </div>
           <div>
            <label for="descripcion">Falla reportada:</label>
            <textarea id="descripcion" name="descripcion" placeholder="Describa el procedimiento de la prueba" maxlength="250"></textarea>
         </div>
         <div>
            <label for="descripcion">Descripcion de Soporte:</label>
            <textarea id="descripcion" name="descripcion" placeholder="Describa el procedimiento de la prueba" maxlength="250"></textarea>
         </div>
         <div>
              <label for="numPrueba ">Numero de Prueba: </label>
              <select name="numPrueba" class="select" id="select">
                <option value="0">Seleccione</option>
                <?php
              foreach($this->pruebas as $row){
                $prueba = $row;
            ?>
              <option value="<?php echo $prueba->getCod()?>"><?php echo $prueba->getNombre().' - '.$prueba->getCod(); ?></option>
            <?php } ?>
              </select>
           </div>
        </div>

        <div class="bottom">
          <button type="submit" name="agregar"  value="agregar" id="submit">Agregar</button>
          <a href="<?php echo constant('URL')?>soporte" >Volver</a>

        </div>

      </form>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/modal/modal.js"></script>
</body>
</html>
