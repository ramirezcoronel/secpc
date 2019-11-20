<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Partes</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
    <div class="text-header margin-bottom"><h2>Gestionar Partes</h2></div>
    <form  action="gestionar_usuarios.php" method="POST" class="form">
      <div class="form__box">
        <div class="centrar">
          <table class="tabla tabla-secundaria">
            <caption class="agrandar margin-bottom">Partes</caption>
            <tr> <th>Cod. Parte</th> <th>Serializable</th>  <th>Stock Actual</th> <th>Stock Max.</th> <th>Stock Min.</th> <th>Pto. Reorden</th> <th>id modelo</th> <th>Estatus</th> <th>Modificar</th> <th>Eliminar</th>
            <?php 
              foreach($this->partes as $row){
                $parte = new PartesClass();
                $parte = $row;
            ?>
            </tr>
              <td><?php echo $parte->getCodigo(); ?></td>
              <td><?php echo $parte->getSerializable(); ?></td>
              <td><?php echo $parte->getStockActual(); ?></td>
              <td><?php echo $parte->getStockMaximo(); ?></td>
              <td><?php echo $parte->getStockMinimo(); ?></td>
              <td><?php echo $parte->getPuntoReorden(); ?></td>
              <td><?php echo $parte->getIdModelo(); ?></td>
              <td><?php echo $parte->getEstatus(); ?></td>
              <td><a class="botonForm" href="<?php echo constant('URL')?>inventario/actualizarParte/<?php echo $parte->getCodigo() ?>">Modificar</a></td>
              <td><a class="botonForm" href="<?php echo constant('URL')?>inventario/eliminarPartes/<?php echo $parte->getCodigo() ?>">Eliminar</a></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
      <div class="centrar">
        <a href="<?php echo constant('URL')?>inventario/agregarPartes" class="boton margin-lados">Agregar</a>
        <a href="<?php echo constant('URL')?>inventario/" class="boton margin-lados">Volver</a>
      </div>
  
      </form>
    </main>
  </div>

</body>
</html>

