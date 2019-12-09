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
    <div class="form">
      <div class="form__box">
        <div class="centrar">
          <table class="tabla tabla-secundaria">
            <caption class="agrandar">Usuarios</caption>
            <tr> <th>ID</th> <th>C.I.</th> <th>Nombre</th> <th>Apellido</th><th>Username</th><th>Contraseña</th><th>Estatus</th><th>Rol</th> <th>Modificar</th> <th>Eliminar</th> 
            <tbody id="tbody-usuarios">

            
            <?php 
              foreach($this->usuarios as $row){
                $usuario = new UsuariosClass();
                $usuario = $row;
            ?>
            </tr >
            <tr id="fila-<?php echo $usuario->getId(); ?>">
              <td><?php echo $usuario->getId(); ?></td>
              <td><?php echo $usuario->getCedula(); ?></td>
              <td><?php echo $usuario->getNombre(); ?></td>
              <td><?php echo $usuario->getApellido(); ?></td>
              <td><?php echo $usuario->getUsername(); ?></td>
              <td><?php echo $usuario->getPass(); ?></td>
              <td><?php echo $usuario->getEstatus(); ?></td>
              <td><?php echo $usuario->getRol(); ?></td>
              <td><a class="botonForm" href="<?php echo constant('URL')?>usuarios/modificarUsuario/<?php echo $usuario->getId();?>">Modificar</a></td>  
              <td><button class="botonForm eliminar" data-id="<?php echo $usuario->getId(); ?>">Eliminar</button></td>  
            </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      
      <div class="centrar">
        <a href="<?php echo constant('URL')?>usuarios/registrarUsuario" class="boton margin-lados">Agregar Usuario</a>
        </div>
  
              </div>
              
    </main>
  </div>

  <script src="<?php echo constant('URL')?>public/js/usuarios/eliminar.js"></script>
</body>
</html>

