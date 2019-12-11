<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Movimietos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
    <div class="text-header"><h2>Gestionar Movimientos</h2></div>
    <form  action="gestionar_usuarios.php" method="POST" class="form">
      <div class="form__box">
        <div class="centrar">
          <table class="tabla tabla-secundaria">
            <caption class="agrandar">Movimientos</caption>
            <tr> <th>Numero</th> <th>Tipo</th> <th>Fecha</th> <th>Hora</th> <th>Modificar</th> <th>Eliminar</th>
            <?php

              foreach($this->movimientos as $row){
                $movimiento = new MovimientosClass();
                $movimiento = $row;

            ?>
            </tr>
              <td><?php echo $movimiento->getNumero(); ?></td>
              <td><?php echo $movimiento->getTipo(); ?></td>
              <td><?php echo $movimiento->getFecha(); ?></td>
              <td><?php echo $movimiento->getHora(); ?></td>
              <td><a class="botonForm" href="<?php echo constant('URL')?>inventario/actualizarMovimiento/<?php echo $movimiento->getNumero() ?>">Modificar</a></td>
              <td><a class="botonForm" href="<?php echo constant('URL')?>inventario/eliminarMovimiento/<?php echo $movimiento->getNumero() ?>">Eliminar</a></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>

      <div class="centrar">
        <a href="<?php echo constant('URL')?>inventario/agregarMovimiento" class="boton margin-lados">Agregar</a>
        <a href="<?php echo constant('URL')?>inventario" class="boton margin-lados">Volver</a>
      </div>

      </form>
    </main>
  </div>

</body>
</html>
