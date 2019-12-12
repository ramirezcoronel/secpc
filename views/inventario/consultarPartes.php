<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Partes</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>

</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
    <div class="text-header margin-bottom"><h2>Gestionar Partes</h2></div>
    <div id="form" data-eliminar="eliminarPartes" class="tabla">
      <div>
          <table>
            <caption>Partes</caption>
            <tr> <th>Cod. Parte</th> <th>Serializable</th>  <th>Stock Actual</th> <th>Stock Max.</th> <th>Stock Min.</th> <th>Pto. Reorden</th> <th>id modelo</th> <th>Estatus</th> <th>Modificar</th> <th>Eliminar</th>
            <tbody id="tbody-inventario">
              <?php
                foreach($this->partes as $row){
                  $parte = new PartesClass();
                  $parte = $row;
              ?>
              </tr>
              <tr id="fila-<?php echo $parte->getCodigo(); ?>">
                <td><?php echo $parte->getCodigo(); ?></td>
                <td><?php echo $parte->getSerializable(); ?></td>
                <td><?php echo $parte->getStockActual(); ?></td>
                <td><?php echo $parte->getStockMaximo(); ?></td>
                <td><?php echo $parte->getStockMinimo(); ?></td>
                <td><?php echo $parte->getPuntoReorden(); ?></td>
                <td><?php echo $parte->getIdModelo(); ?></td>
                <td><?php echo $parte->getEstatus(); ?></td>
                <td><a class="crud" href="<?php echo constant('URL')?>inventario/actualizarParte/<?php echo $parte->getCodigo() ?>">Modificar</a></td>
                <td><button class="crud eliminar" data-id="<?php echo $parte->getCodigo(); ?>">Eliminar</button></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
      <div class="bottom">
        <a href="<?php echo constant('URL')?>inventario/agregarPartes">Agregar</a>
        <a href="<?php echo constant('URL')?>inventario/">Volver</a>
      </div>

    </div>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>
