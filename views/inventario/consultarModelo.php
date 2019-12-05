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
    <div class="text-header"><h2>Gestionar Modelos</h2></div>
    <form  action="gestionar_usuarios.php" method="POST" class="form">
      <div class="form__box">
        <div class="centrar">
          <table class="tabla tabla-secundaria">

            <caption class="agrandar">Modelos</caption>
            <tr> <th>ID</th> <th>Nombre</th> <th>Estatus</th> <th>Modificar</th> <th>Eliminar</th>
            <?php 
              foreach($this->modelos as $row){
                $modelo = new ModelosClass();
                $modelo = $row;

            ?>
            </tr>
              <td><?php echo $modelo->getId(); ?></td>
              <td><?php echo $modelo->getNombre(); ?></td>
              <td><?php echo $modelo->getEstatus(); ?></td>
              <td><a class="botonForm" href="<?php echo constant('URL')?>inventario/actualizarModelo/<?php echo $modelo->getId() ?>">Modificar</a></td>
              <td><a class="botonForm" href="<?php echo constant('URL')?>inventario/eliminarModelo/<?php echo $modelo->getId() ?>">Eliminar</a></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
      
      <div class="centrar">
        <a href="<?php echo constant('URL')?>inventario/agregarModelo" class="boton margin-lados">Agregar</a>
        <a href="<?php echo constant('URL')?>inventario" class="boton margin-lados">Volver</a>
      </div>
  
      </form>
    </main>
  </div>

</body>
</html>

