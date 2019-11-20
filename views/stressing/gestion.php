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
      <form  method="POST" class="form">
        <div class="form__box">
          <div class="centrar">  
            <table> 
                <td>
                  <img src="<?php echo constant('URL')?>public/img/stressingAgregar.png" alt="Agregar tipos de pruebas" />
                </td>
                <tr>
                  <td>
                  <div class="centrar"><a href="<?php echo constant('URL')?>stressing/agregarPrueba" class="boton margin-lados" >Agregar Prueba</a></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="centrar"><a href="<?php echo constant('URL')?>stressing/render" class="boton margin-lados" >Atras</a></div>
                  </td>
                </tr>
            </table>
            <table class="tabla tabla-secundaria">
              <tr>
                <th>codigo</th>
                <th>Nombre</th> 
                <th>Descripcion</th>
                <th>Duracion (minutos)</th>
                <th>Modificar</th>
                <th>Eliminar</th>
                <?php foreach($this->stressing as $row){
                  $stressing = new StressingClass();
                  $stressing = $row;
                ?>        
              </tr>
                <td><?php echo $stressing->getCod(); ?></td>
                <td><?php echo $stressing->getNombre(); ?></td>
                <td><?php echo $stressing->getDes(); ?></td>
                <td><?php echo $stressing->getDuracin(); ?></td>
                <td><a class="botonForm" href="<?php echo constant('URL')?>stressing/actualizarPrueba/<?php echo $stressing->getCod()?>">Modificar</a></td>
                <td><a id="eliminar" class="botonForm" href="<?php echo constant('URL')?>stressing/eliminarPrueba/<?php echo $stressing->getCod()?>">Eliminar</a></td>
              </tr>
                <?php } ?>
            </table>
          </div>
        </div> 
      </form>
    </main>
  </div>
<script type="text/javascript" src="<?php echo constant('URL')?>public/js/eliminar.js"></script>
</body>
</html>


