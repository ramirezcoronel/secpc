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
        <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2>
            
        </div>
        <form action="<?php echo constant('URL')?>inventario/agregarInventario" method="POST" class="form">
        <div class="form__box centrar">
           <div class="margin-lados">
              <label for="codparte">Partes: </label>
              <select name="codparte" class="select" id="codparte">
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
           <div class="margin-lados">
              <label for="nummovimiento">Numero de Movimiento: </label>
              <select name="nummovimiento" class="select" id="select">
                <option value="0">Seleccione</option>
                <?php
                  foreach($this->movimientos as $row){
                    $movimiento = new MovimientosClass();
                    $movimiento = $row;
                ?>
              <option value="<?php echo $movimiento->getNumero()?>"><?php echo $movimiento->getNumero(); ?></option>
            <?php } ?>
              </select>
           </div>
        </div>

        <div class="form__box centrar">
          <div class="margin-lados">
            <label for="cantidadparte">Cantidad:</label>
            <input type="text" name="cantidadparte" id="cantidadparte" />
          </div>
          <div class="margin-lados">
            <label for="estatus">Estatus</label>
            <input type="text" name="estatus" id="estatus" />
            
          </div>
        </div>
        <div class="form__box centrar">
          <div class="margin-lados">
            <label for="numserialfabricante">Serial fabricante (si necesario):</label>
            <input type="text" name="numserialfabricante" id="numserialfabricante" />
          </div>
        </div>

        <div class="centrar">
          <button type="submit" name="agregar" class="boton">Agregar Inventario</button>
          <a href="<?php echo constant('URL')?>inventario/" class="boton">volver</a>
        </div>
        
        
      </form>
    </main>
  </div>

</body>
</html>