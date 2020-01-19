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
            <caption>Gestionar Productos</caption>
            <tr> <th>Codigo de parte</th> <th>Serial</th> <th>Cantidad de piezas usadas</th>
            <tbody id="tbody-ensamble">
              <?php
                foreach($this->partes as $row){
                $partes = $row;
              ?>
              </tr >
              <tr >
                <td><?php echo $partes->getCodParte(); ?></td>
              <td><?php echo $partes->getSerial(); ?></td>
              <td><?php echo $partes->getCantidad(); ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
      <div class="bottom">
        <a href="<?php echo constant('URL')?>ensamble">Volver</a>
      </div>
      </div>
    </main>
  </div>
</body>
</html>

