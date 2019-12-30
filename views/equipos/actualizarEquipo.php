<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Movimiento</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>
        
      </div>
        <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2>
        </div>

            <form name="formulario" method="post" action="<?php echo constant('URL')?>equipos/actualizarEquipo"  class="form" id="form">

          <div class="form__box centrar">
            <div class="margin-lados">
              <label for="codtipoequipo ">Tipo Equipo</label>
              <select name="codtipoequipo" class="select" id="select">
                <option value="0">Seleccione</option>
                <?php 
              foreach($this->tipos as $row){
                $tipo = new TiposClass();
                $tipo = $row;
            ?>
              <option value="<?php echo $tipo->getCodigo()?>"><?php echo $tipo->getNombre(); ?></option>
            <?php } ?>
              </select>
            </div>
            <div class="margin-lados">
              <label for="codequipo">codigo de Equipo:</label>
              <input type="text" name="codequipo" id="codequipo" value="<?php echo $this->equipo->getCodigo()?>" readonly/>
            </div>
            <div class="margin-lados">
              <label for="nomequipo">Nombre de Equipo:</label>
              <input type="text" name="nomequipo" id="nomequipo" value="<?php echo $this->equipo->getNombre()?>"/>
            </div>
          </div>
          <div class="centrar">
            <button type="submit" name="actualizar" class="boton">Actualizar</button>
            <a href="<?php echo constant('URL')?>equipos/consultarEquipos" class="boton">volver</a>
        </div>
        </form>


      
      <!-- DESDE AQUI ESTA EL FORMULARIO PARA AGREGAR PARTES -->

     

    </main>
  </div>

</body>
</html>