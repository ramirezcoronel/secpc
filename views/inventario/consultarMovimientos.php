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
    <div  id="form" data-eliminar="eliminarMovimiento" class="form">
      <div class="form__box">
        <div class="centrar">
          <table class="tabla tabla-secundaria">
            <caption class="agrandar">Movimientos</caption>


            <tr> <th>Numero</th> <th>Tipo</th> <th>Fecha</th> <th>Hora</th> <th>Modificar</th> <th>Eliminar</th>
            <tbody id="tbody-inventario">
              <?php

                foreach($this->movimientos as $row){
                  $movimiento = new MovimientosClass();
                  $movimiento = $row;

              ?>
              </tr>
              <tr id="fila-<?php echo $movimiento->getNumero()?>">
                <td><?php echo $movimiento->getNumero(); ?></td>
                <td><?php echo $movimiento->getTipo(); ?></td>
                <td><?php echo $movimiento->getFecha(); ?></td>
                <td><?php echo $movimiento->getHora(); ?></td>
                <td><a class="botonForm" href="<?php echo constant('URL')?>inventario/actualizarMovimiento/<?php echo $movimiento->getNumero() ?>">Modificar</a></td>
                <td><button class="botonForm eliminar" data-id="<?php echo $movimiento->getNumero(); ?>">Eliminar</button></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

      <div class="centrar">
        <a href="<?php echo constant('URL')?>inventario/agregarMovimiento" class="boton margin-lados">Agregar</a>
        <a href="<?php echo constant('URL')?>inventario" class="boton margin-lados">Volver</a>
      </div>

    </div>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>

</body>
</html>
