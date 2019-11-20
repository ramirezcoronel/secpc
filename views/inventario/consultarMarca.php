<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Usuarios</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
    <div class="text-header"><h2>Gestionar Marcas</h2></div>
    <form  action="gestionar_usuarios.php" method="POST" class="form">
      <div class="form__box">
        <div class="centrar">
          <table class="tabla tabla-secundaria">
            <caption class="agrandar">Marcas</caption>
            <tr> <th>ID</th> <th>Nombre</th> <th>Estatus</th> <th>Modificar</th> <th>Eliminar</th>
            <?php 
              foreach($this->marcas as $row){
                $marca = new MarcasClass();
                $marca = $row;
            ?>
            </tr>
              <td><?php echo $marca->getId(); ?></td>
              <td><?php echo $marca->getNombre(); ?></td>
              <td><?php echo $marca->getEstatus(); ?></td>
              <td><a class="botonForm" href="<?php echo constant('URL')?>inventario/actualizarMarca/<?php echo $marca->getId() ?>">Modificar</a></td>
              <td><a class="botonForm" href="<?php echo constant('URL')?>inventario/eliminarMarca/<?php echo $marca->getId() ?>">Eliminar</a></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
      
      <div class="centrar">
        <a href="<?php echo constant('URL')?>inventario/agregarMarca" class="boton margin-lados">Agregar</a>
        <a href="<?php echo constant('URL')?>inventario" class="boton margin-lados">Volver</a>
      </div>
  
      </form>
    </main>
  </div>

</body>
</html>

