<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Equipos</title>
   <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
   <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
    <div class="text-header"><h2>Gestionar Equipos</h2></div>
    <div  id="form" data-eliminar="eliminarEquipo" class="tabla">
      <div class="tabla-titulo">Equipos</div>
      <div>
          <table>
            <tr> <th>Codigo</th> <th>Nombre</th> <th>Estatus</th> <th>Codigo Tipo de Equipo</th> <th>Modificar</th><th>Eliminar</th>
            <tbody id="tbody-equipos">

              <?php
                foreach($this->equipos as $row){
                  $equipo = new EquiposClass();
                  $equipo = $row;

              ?>
              </tr>
              <tr id="fila-<?php echo $equipo->getCodigo(); ?>">
                <td><?php echo $equipo->getCodigo(); ?></td>
                <td><?php echo $equipo->getNombre(); ?></td>
                <td><?php echo $equipo->getEstatus(); ?></td>
                <td><?php echo $equipo->getCodTipo(); ?></td>
                <td><a class="crud" href="<?php echo constant('URL')?>equipos/actualizarEquipo/<?php echo $equipo->getCodigo() ?>">Modificar</a></td>
                <td><button class="crud eliminar" data-id="<?php echo $equipo->getCodigo(); ?>">Eliminar</button></td>
              </tr>
              <?php } ?>

            </tbody>
          </table>
      </div>

      <div class="bottom">
        <a href="<?php echo constant('URL')?>equipos/agregar" >Agregar</a>
        <a href="<?php echo constant('URL')?>equipos">Volver</a>
      </div>
    </div>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>
