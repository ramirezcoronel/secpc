<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Tipos Equipos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
    <div class="text-header"><h2>Gestionar Tipos de Equipo</h2></div>
    <div class="form">
      <div id="form" data-eliminar="eliminarTipoEquipo" class="form__box">
        <div class="centrar">
          <table class="tabla tabla-secundaria">

            <caption class="agrandar">Tipos</caption>
            <tr> <th>Codigo</th> <th>Nombre</th>  <th>Modificar</th><th>Eliminar</th>
              <tbody id="tbody-equipos">
                
              
            <?php 
              foreach($this->tipos as $row){
                $tipo = new TiposClass();
                $tipo = $row;

            ?>
            </tr>
            <tr id="fila-<?php echo $tipo->getCodigo(); ?>">
              <td><?php echo $tipo->getCodigo(); ?></td>
              <td><?php echo $tipo->getNombre(); ?></td>
              <td><a class="botonForm" href="<?php echo constant('URL')?>equipos/actualizarTipoEquipo/<?php echo $tipo->getCodigo() ?>">Modificar</a></td>
              <td><button class="botonForm eliminar" data-id="<?php echo $tipo->getCodigo(); ?>">Eliminar</button></td>  
            </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      
      <div class="centrar">
        <a href="<?php echo constant('URL')?>equipos/agregarTipoDeEquipo" class="boton margin-lados">Agregar</a>
        <a href="<?php echo constant('URL')?>equipos" class="boton margin-lados">Volver</a>
      </div>
  
      </div>
    </main>
  </div>

 <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>

