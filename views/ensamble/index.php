<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Productos</title>
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
            <h2>Productos</h2> 
        </div>
    <div class="tabla" id="form" data-eliminar="eliminarProducto">
      <div>
          <table>
            <caption>Producto</caption>
            <tr> <th>Codigo Producto</th> <th>Fecha</th> <th>Codigo de Equipo</th> <th>Estatus</th> <th>Examinar</th><th>Modificar</th><th>Eliminar</th>
            <tbody id="tbody-ensamble">
              <?php
                foreach($this->productos as $row){
                $producto = $row;
              ?>
              </tr >
              <tr id="fila-<?php echo $producto->getCodigo(); ?>">
                <td><?php echo $producto->getCodigo(); ?></td>
              <td><?php echo $producto->getFecha(); ?></td>
              <td><?php echo $producto->getCodigoEquipo(); ?></td>
              <td><?php echo $producto->getEstatus(); ?></td>
              <td><a class="crud" href="<?php echo constant('URL')?>ensamble/examinarProducto/<?php echo $producto->getCodigo() ?>">Examinar</a></td>
                <td><a class="crud" href="<?php echo constant('URL')?>ensamble/actualizarProducto/<?php echo $producto->getCodigo() ?>">Modificar</a></td>
                <td>
                  <button class="crud eliminar" data-id="<?php echo $producto->getCodigo(); ?>">Eliminar</button>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
      <div class="bottom">
         <a href="<?php echo constant('URL')?>ensamble/agregarProducto">Agregar</a>
        <a href="<?php echo constant('URL')?>">Volver</a>
      </div>
      </div>
    </main>
  </div>

  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>

