<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Soporte</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
      <div class="text-header">
            <h2>Soporte</h2> 
        </div>
    <div class="tabla" id="form" data-eliminar="eliminarSoporte">
      <div class="tabla-titulo">Gestionar Soporte</div>
      <div>
          <table>
            <tr>  <th>Num. Soporte</th>
                  <th>falla Reportada</th>
                  <th>Fecha del Soporte</th>
                  <th>Hora de Entrada</th>
                  <th>Hora de Salida</th>
                  <th>Descripcion de Actividad</th>
                  <th>Modificar</th>
                  <th>Eliminar</th>
            <tbody id="tbody-soporteproducto">
              <?php
                foreach($this->soportes as $row){
                  $soporte = $row;
              ?>
              </tr >
              <tr id="fila-<?php echo $soporte->getNumSop(); ?>">
                <td><?php echo $soporte->getNumSop(); ?></td>
                <td><?php echo $soporte->getFallaReport(); ?></td>
                <td><?php echo $soporte->getFecha(); ?></td>
                <td><?php echo $soporte->getHoraEn(); ?></td>
                <td><?php echo $soporte->getHoraSda(); ?></td>
                <td><?php echo $soporte->getEstatus(); ?></td>
                <td><?php echo $soporte->getDesActividad(); ?></td>
                <td><?php echo $soporte->getNumPrueba(); ?></td>
                <td><a class="crud" href="<?php echo constant('URL')?>soporte/actualizarSoporte/<?php echo $soporte->getNumSop() ?>">Modificar</a></td>
              <td><button class="crud eliminar" data-id="<?php echo $soporte->getNumSop(); ?>">Eliminar</button></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
      <div class="bottom">
        <a href="<?php echo constant('URL')?>soporte/agregar">Agregar</a>
          <a href="<?php echo constant('URL')?>">Volver</a>
      </div>
      </div>
    </main>
  </div>

  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>