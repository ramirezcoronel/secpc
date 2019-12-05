<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Eliminar Usuarios</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
<?php require 'views/header.php'; ?> <!-- HEADER -->
<div class="container">
  <?php require 'views/menu.php'; ?> <!-- MENU -->

  <main>
    <div class="text-header">
      <h2> <?php echo $this->mensaje ?> </h2>      
    </div>
    <form method="POST" class="form">
    <div class="form__box">
        <div class="centrar">
        <table class="tabla tabla-secundaria">
            <caption class="agrandar">Usuarios</caption>
            <tr> <th>ID</th> <th>C.I.</th> <th>Nombre</th> <th>Apellido</th><th>Username</th><th>Contraseña</th><th>Estatus</th><th>Rol</th> 
            <?php 
              foreach($this->usuarios as $row){
                $usuario = new UsuariosClass();
                $usuario = $row;
            ?>
            </tr>
              <td><?php echo $usuario->getId(); ?></td>
              <td><?php echo $usuario->getCedula(); ?></td>
              <td><?php echo $usuario->getNombre(); ?></td>
              <td><?php echo $usuario->getApellido(); ?></td>
              <td><?php echo $usuario->getUsername(); ?></td>
              <td><?php echo $usuario->getPass(); ?></td>
              <td><?php echo $usuario->getEstatus(); ?></td>
              <td><?php echo $usuario->getRol(); ?></td>

            </tr>
            <?php } ?>
          </table>
        </div>
    </div>
    <div class="form__box">
        <label for="idDeUsuario">Ingrese ID del usuarios que desea eliminiar:</label>
        <input type="number" name="idDeUsuario" id="idDeUsuario">
    </div>
    <div class="centrar">
        <button type="submit" name="eliminar" class="boton" value="eliminar">Eliminar Usuario</button>
    </div>
    </form>
  </main>
</div>
</body>
</html>