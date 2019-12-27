<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Usuarios</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
    <div class="tabla" id="form" data-eliminar="eliminarUsuario">
      <div>
          <table>
            <caption>Usuarios</caption>
            <tr> <th>Nombre</th><th>Apellido</th><th>Username</th><th>C.I.</th><th>Contraseña</th><th>Rol</th><th>ID</th>    <th>Modificar</th> <th>Eliminar</th>
            <tbody id="tbody-usuarios">
              <?php
                foreach($this->usuarios as $row){
                  $usuario = new UsuariosClass();
                  $usuario = $row;
              ?>
              </tr >
              <tr id="fila-<?php echo $usuario->getId(); ?>">
                <td><?php echo $usuario->getNombre(); ?></td>
                <td><?php echo $usuario->getApellido(); ?></td>
                <td><?php echo $usuario->getUsername(); ?></td>
                <td><?php echo $usuario->getCedula(); ?></td>
                <td><?php echo $usuario->getPass(); ?></td>
                <td><?php echo $usuario->getRol(); ?></td>
                <td><?php echo $usuario->getId(); ?></td>
                <td><a class="crud" href="<?php echo constant('URL')?>usuarios/modificarUsuario/<?php echo $usuario->getId();?>">Modificar</a></td>
                <td>
                  <button class="crud eliminar" data-id="<?php echo $usuario->getId(); ?>" <?php if ( $usuario->getId() == '1' ) {?> disabled="disabled" <?php }?>>Eliminar</button>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
      <div class="bottom">
        <a href="<?php echo constant('URL')?>usuarios/registrarUsuario">Agregar</a>
          <a href="<?php echo constant('URL')?>">Volver</a>
      </div>
      </div>
    </main>
  </div>

  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>
