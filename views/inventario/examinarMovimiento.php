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
      <div class="tabla-titulo">Movimiento <?php echo $this->codigo; ?></div>
      <div class="overflow">
          <table>
            <tr> <th>Cod. Parte</th> <th>Cantidad</th> <th>Serial</th> <th>Estatus</th></tr>
            <tbody id="tbody-inventario">
              <?php

                foreach($this->movimiento as $row){
                  $movimiento = $row;
              ?>
              
              <tr>
                <td><?php echo $movimiento->getCodParte(); ?></td>
                <td><?php echo $movimiento->getCantidad(); ?></td>
                <td><?php echo ($movimiento->getSerial() !== NULL) ? $movimiento->getSerial() : 'No serializable'; ?></td>
                <td><?php echo ($movimiento->getEstatus() === '1') ? 'Disponible' : 'Ensamblada'; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>

      <div class="bottom">
        <a href="<?php echo constant('URL')?>inventario/consultarMovimientos">Volver</a>
      </div>
    </div>
    </main>
  </div>
</body>
</html>
