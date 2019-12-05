<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Tipos Equipos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
    <div class="text-header"><h2>Gestionar Tipos de Equipo</h2></div>
    <form  action="gestionar_usuarios.php" method="POST" class="form">
      <div class="form__box">
        <div class="centrar">
          <table class="tabla tabla-secundaria">

            <caption class="agrandar">Tipos</caption>
            <tr> <th>Codigo</th> <th>Nombre</th>  <th>Modificar</th><th>Eliminar</th>
            <?php 
              foreach($this->tipos as $row){
                $tipo = new TiposClass();
                $tipo = $row;

            ?>
            </tr>
              <td><?php echo $tipo->getCodigo(); ?></td>
              <td><?php echo $tipo->getNombre(); ?></td>
              <td><a class="botonForm" href="<?php echo constant('URL')?>equipos/actualizarEquipo/<?php echo $tipo->getCodigo() ?>">Modificar</a></td>
              <td><a class="botonForm" href="<?php echo constant('URL')?>equipos/eliminarEquipo/<?php echo $tipo->getCodigo() ?>">Eliminar</a></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
      
      <div class="centrar">
        <a href="<?php echo constant('URL')?>equipos/agregarTipoDeEquipo" class="boton margin-lados">Agregar</a>
        <a href="<?php echo constant('URL')?>equipos" class="boton margin-lados">Volver</a>
      </div>
  
      </form>
    </main>
  </div>

</body>
</html>

