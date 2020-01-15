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
    <div class="tabla" id="form" data-eliminar="eliminarUsuario">
      <div>
          <table>
            <caption>Gestionar Soporte</caption>
            <tr>  <th>Num. Soporte</th>
                  <th>falla Reportada</th>
                  <th>Fecha del Soporte</th>
                  <th>Hora de Entrada</th>
                  <th>Hora de Salida</th>
                  <th>Descripcion de Actividad</th>
                  <th>Modificar</th>
                  <th>Eliminar</th>
            <tbody id="tbody-usuarios">
              
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