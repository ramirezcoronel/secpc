<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Tipos Equipos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
    <div class="text-header"><h2>Gestionar Tipos de Equipo</h2></div>
    <div class="tabla" id="form" data-eliminar="eliminarTipoEquipo">
      <div class="tabla-titulo">Tipos de Equipo</div>
      <div>
          <table>
            <tbody id="tbody-equipos">
            <tr> <th>Codigo</th> <th>Nombre</th>  <th>Modificar</th><th>Eliminar</th>
            <?php
              foreach ($this->tipos as $row) {
                  $tipo = new TiposClass();
                  $tipo = $row; ?>
            </tr>

            <tr id="fila-<?php echo $tipo->getCodigo(); ?>">
              <td><?php echo $tipo->getCodigo(); ?></td>
              <td><?php echo $tipo->getNombre(); ?></td>
              <td><a class="crud" href="<?php echo constant('URL')?>equipos/actualizarTipoEquipo/<?php echo $tipo->getCodigo() ?>">Modificar</a></td>
              <td><button class="crud eliminar" data-id="<?php echo $tipo->getCodigo(); ?>">Eliminar</button></td>
            </tr>
            <?php
              } ?>
            </tbody>
          </table>
      </div>

      <div class="bottom">
        <a href="<?php echo constant('URL')?>equipos/agregarTipoDeEquipo" >Agregar</a>
        <a href="<?php echo constant('URL')?>equipos" >Volver</a>
      </div>

      </div>
    </main>
  </div>

 <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>
