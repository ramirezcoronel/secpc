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
        <form action="<?php echo constant('URL')?>soporte/agregar" method="POST" class="form" name="formulario">
          <div class="form-header">
            <p>Realizar Soporte</p>
          </div>
        <div class="form__box">
         <div>
            <label for="num">Numero de Soporte:</label>
            <input type="number" placeholder="Ingrese numero" name="num" id="num">
         </div>
          <div>
             <label for="horaInicio">Hora Inicio de Soporte:</label>
             <input type="time" id="horaInicio" name="horaInicio" >
           </div>
           <div>
             <label for="horaFin">Hora Fin de Soporte:</label>
             <input type="time" id="horaFin" name="horaFin">
           </div>
           <div>
             <label for="fecha">Fecha de Soporte:</label>
             <input id="fecha" name="fecha" type="date">
           </div>
           <div>
            <label for="falla">Falla reportada:</label>
            <textarea id="falla" name="falla" placeholder="Describa la falla reportada" maxlength="250"></textarea>
         </div>
         <div>
            <label for="descripcion">Descripcion de Soporte:</label>
            <textarea id="descripcion" name="descripcion" placeholder="Describa el procedimiento de el soporte" maxlength="250"></textarea>
         </div>
         <div>
              <label for="numPrueba ">Numero de Prueba: </label>
              <select name="numPrueba" class="select" id="select">
                <option value="0">Seleccione</option>
                <?php
                foreach($this->pruebas as $row){
                  $prueba = $row;

                  if ($prueba->getResultado() === 'No pasa la prueba'){
                    ?>
                     <option value="<?php echo $prueba->getNum()?>">
                        <?php echo  'Prueba N°'.$prueba->getNum();?>
                      </option>
                    <?php
                  }
                } ?>
              </select>
           </div>
        </div>

        <div class="bottom">
          <button type="submit" name="agregar"  value="agregar" id="submit">Agregar</button>
          <a href="<?php echo constant('URL')?>soporte" >Volver</a>

        </div>
      </form>

       <div class="tabla">
        <div class="tabla-titulo">Pruebas:</div>
      <div>
          <table>
            <tr> <th>Num</th><th>Fecha</th>
            <tbody>
              <?php
                foreach($this->pruebas as $row){
                  $prueba = $row;

                  if ($prueba->getResultado() === 'No pasa la prueba'){
                    ?>
                     </tr >
                    <tr>
                      <td><?php echo $prueba->getNum(); ?></td>
                      <td><?php echo $prueba->getFecha(); ?></td>
                    </tr>
                    <?php
                  }
                } ?>
            </tbody>
          </table>
      </div>
      </div>
    </div>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/modal/modal.js"></script>
   <script src="<?php echo constant('URL')?>public/js/soporte/agregar.js"></script>
</body>
</html>