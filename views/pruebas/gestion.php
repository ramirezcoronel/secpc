<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Gestion de prueba</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
    <!-- Uso esta clase por el fondo rojo -->
    <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
      <div class="text-header">
        <h2> <?php echo $this->mensaje ?> </h2>      
      </div>

      <div class="tabla" id="form" data-eliminar="eliminarPrueba">
        <div class="tabla-titulo">Pruebas</div>
      <div>
          <table>
            <tr> 
              <th>codigo</th>
              <th>Nombre</th> 
              <th>Descripcion</th>
              <th>Duracion (minutos)</th>
              <th>Modificar</th>
              <th>Eliminar</th>
            <tbody id="tbody-pruebas">
              <?php foreach($this->stressing as $row){
                  $prueba = $row;
                ?>        
              </tr>
              <tr id="fila-<?php echo $prueba->getCod(); ?>">
                <td><?php echo $prueba->getCod(); ?></td>
                <td><?php echo $prueba->getNombre(); ?></td>
                <td><?php echo $prueba->getDes(); ?></td>
                <td><?php echo $prueba->getDuracin(); ?></td>
                <td><a class="crud" href="<?php echo constant('URL')?>pruebas/actualizarPrueba/<?php echo $prueba->getCod()?>">Modificar</a></td>
                <td><button class="crud eliminar" data-id="<?php echo $prueba->getCod(); ?>">Eliminar</button></td>
              </tr>
                <?php } ?>
            </tbody>
          </table>
      </div>
      <div class="bottom">
        <a href="<?php echo constant('URL')?>pruebas/agregarPrueba">Agregar</a>
          <a href="<?php echo constant('URL')?>pruebas">Volver</a>
      </div>
      </div>
    </main>
  </div>
<script type="text/javascript" src="<?php echo constant('URL')?>public/js/eliminar.js"></script>
  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>

</body>
</html>


