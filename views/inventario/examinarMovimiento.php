<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Movimietos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>

</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
    <div class="text-header"><h2>Gestionar Movimientos</h2></div>
    <div class="tabla" id="form" data-eliminar="eliminarMovimiento">
      <div>
          <table>
            <caption>Movimientos</caption>
            <tr> <th>Numero</th> <th>Tipo</th> <th>Fecha</th> <th>Hora</th> <th>Modificar</th> <th>Eliminar</th>
            <tbody id="tbody-inventario">
              <?php

                foreach($this->movimientos as $row){
                  $movimiento = new MovimientosClass();
                  $movimiento = $row;

              ?>
              </tr>
              <tr id="fila-<?php echo $movimiento->getNumero(); ?>">
                <td><?php echo $movimiento->getNumero(); ?></td>
                <td><?php echo $movimiento->getTipo(); ?></td>
                <td><?php echo $movimiento->getFecha(); ?></td>
                <td><?php echo $movimiento->getHora(); ?></td>
                <td><a class="crud" href="<?php echo constant('URL')?>inventario/actualizarMovimiento/<?php echo $movimiento->getNumero() ?>">Modificar</a></td>
                <td><button class="crud eliminar" data-id="<?php echo $movimiento->getNumero(); ?>">Eliminar</button></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>

      <div class="bottom">
        <a href="<?php echo constant('URL')?>inventario/agregarMovimiento">Agregar</a>
        <a href="<?php echo constant('URL')?>inventario">Volver</a>
      </div>
    </div>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>
