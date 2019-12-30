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
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>
        
      </div>
        <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2>
            
        </div>
        <form action="<?php echo constant('URL')?>equipos/agregarPartesEquipo" method="POST" class="form">
        <div class="form__box centrar">
          <div class="margin-lados">
              <label for="codequipo ">Equipo: </label>
              <select name="codequipo" class="select" id="select">
                <option value="0">Seleccione</option>
                <?php
              foreach($this->equipos as $row){
                $equipo = new EquiposClass();
                $equipo = $row;
            ?>
              <option value="<?php echo $equipo->getCodigo()?>"><?php echo $equipo->getNombre(); ?></option>
            <?php } ?>
              </select>
           </div>
           <div class="margin-lados">
              <label for="codpartes ">Partes: </label>
              <select name="codpartes" class="select" id="select">
                <option value="0">Seleccione</option>
                <?php
              foreach($this->partes as $row){
                $parte = new PartesClass();
                $parte = $row;
            ?>
              <option value="<?php echo $parte->getCodigo()?>"><?php echo $parte->getCodigo(); ?></option>
            <?php } ?>
              </select>
           </div>
        </div>

        <div class="form__box centrar">
          <div class="margin-lados">
            <label for="cantidadparteequipo">Cantidad:</label>
            <input type="text" name="cantidadparteequipo" id="cantidadparteequipo" />
          </div>
          <div class="margin-lados">
            <label for="estatusparteequipo">Estatus</label>
            <input type="text" name="estatusparteequipo" id="estatus" />
            
          </div>
        </div>

        <div class="centrar">
          <button type="submit" name="agregar" class="boton">Agregar Tipo de Equipo</button>
        </div>
        
        
      </form>
    </main>
  </div>

</body>
</html>