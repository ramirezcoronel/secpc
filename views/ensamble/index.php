<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Productos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
    <div class="text-header"><h2>Gestionar Productos</h2></div>
    <form  action="gestionar_usuarios.php" method="POST" class="form">
      <div class="form__box">
        <div class="centrar">
          <table class="tabla tabla-secundaria">

            <caption class="agrandar">Productos</caption>
            <tr> <th>Codigo Producto</th> <th>Fecha</th> <th>Codigo de Equipo</th> <th>Estatus</th> <th>Modificar</th><th>Eliminar</th>
            <?php 
              foreach($this->productos as $row){
                $producto = new productosClass();
                $producto = $row;
            ?>
            </tr>
              <td><?php echo $producto->getCodigo(); ?></td>
              <td><?php echo $producto->getFecha(); ?></td>
              <td><?php echo $producto->getCodigoEquipo(); ?></td>
              <td><?php echo $producto->getEstatus(); ?></td>
              <td><a class="botonForm" href="<?php echo constant('URL')?>ensamble/actualizarProducto/<?php echo $producto->getCodigo() ?>">Modificar</a></td>
              <td><a class="botonForm" href="<?php echo constant('URL')?>ensamble/eliminarProducto/<?php echo $producto->getCodigo() ?>">Eliminar</a></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
      
      <div class="centrar">
        <a href="<?php echo constant('URL')?>ensamble/agregarProducto" class="boton margin-lados">Agregar</a>
        <a href="<?php echo constant('URL')?>ensamble" class="boton margin-lados">Volver</a>
      </div>
  
      </form>
    </main>
  </div>

</body>
</html>

