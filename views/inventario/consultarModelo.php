<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Modelos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>

</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
    <div class="text-header"><h2>Gestionar Modelos</h2></div>
    <div  id="form" data-eliminar="eliminarModelo" class="tabla">
      <div>
          <table>

            <caption>Modelos</caption>
            <tbody id="tbody-inventario">
            <tr> <th>ID</th> <th>Nombre</th> <th>Estatus</th> <th>Modificar</th> <th>Eliminar</th>
              <?php
                foreach($this->modelos as $row){
                  $modelo = new ModelosClass();
                  $modelo = $row;

              ?>
              </tr>
              <tr id="fila-<?php echo $modelo->getId(); ?>">
                <td><?php echo $modelo->getId(); ?></td>
                <td><?php echo $modelo->getNombre(); ?></td>
                <td><?php echo $modelo->getEstatus(); ?></td>
                <td><a class="crud" href="<?php echo constant('URL')?>inventario/actualizarModelo/<?php echo $modelo->getId() ?>">Modificar</a></td>
                <td><button class="crud eliminar" data-id="<?php echo $modelo->getId(); ?>">Eliminar</button></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>

      <div class="bottom">
        <a href="<?php echo constant('URL')?>inventario/agregarModelo">Agregar</a>
        <a href="<?php echo constant('URL')?>inventario">Volver</a>
      </div>

    </div>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>

</body>
</html>
