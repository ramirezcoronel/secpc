<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Ensamble</title>
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
          <?php if ( isset($this->producto) ){ ?>

        <form action="<?php echo constant('URL')?>inventario/agregar" method="POST" class="form margin-lados margin-bottom">
        <div class="form__box esquinas">
         <div class="margin-lados">
            <label for="num">Nº del Movimiento:</label>
            <input type="text" name="num" id="num" value="<?php echo $this->producto->getNumero();?>" readonly>
         </div>
          <div class="margin-lados">
             <label for="tipo">Tipo de Movimiento:</label>
             <input type="text" name="tipo" value="<?php echo $this->producto->getTipo();?>" readonly>
           </div>
        </div>


         <div class="form__box esquinas margin-bottom">
          <div class="margin-lados">
             <label for="hora">Hora de movimiento:</label>
             <input type="text" id="hora" name="hora" min="09:00" max="18:00" value="<?php echo $this->movimiento->getHora();?> " required readonly>
           </div>
           <div class="margin-lados">
             <label for="fecha">Fecha de Movimiento</label>
             <input id="fecha" name="date" type="date" value="<?php echo $this->movimiento->getFecha();?>" readonly>
           </div>
        </div>
        
          
    <?php } else {?>

    <form name="formulario" method="post" action="<?php echo constant('URL')?>ensamble/agregarProducto"  class="form" id="form">

          <div class="form__box centrar">
            <div class="margin-lados">
              <label for="codequipo ">Codigo Equipo</label>
              <select name="codequipo" class="select" id="select">
                <option value="0">Seleccione</option>
                <?php 
              foreach($this->equipos as $row){
                $equipo = new EquiposClass();
                $equipo = $row;
            ?>
            <option value="<?php echo $equipo->getCodigo()?>"><?php echo $equipo->getCodigo(); ?></option>
            <?php } ?>
              </select>
            </div>
            <div class="margin-lados">
              <label for="codigo">codigo de Producto:</label>
              <input type="text" name="codigo" id="codigo" />
            </div>
            <div class="margin-lados">
              <label for="fecha">Fecha de Produccion:</label>
              <input type="Date" name="fecha" id="fecha" />
            </div>
          </div>

          <div class="esquinas">
          <a href="<?php echo constant('URL')?>ensamble" class="boton">Volver</a>
          <button type="submit" name="agregar" class="boton">Agregar Producto</button>

        </div>
        
        </form>


    <?php }?>
      
      <!-- DESDE AQUI ESTA EL FORMULARIO PARA AGREGAR PARTES -->
      <?php if ($this->visible) {?>
        <h2 class="text-header margin-bottom">Datos de parte a agregar:</h2>
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
            <label for="cantidadparte">Cantidad:</label>
            <input type="text" name="cantidadparte" id="cantidadparte" />
          </div>
        </div>

        <div class="form__box centrar">
          <div class="margin-lados">
            <label for="numserialfabricante">Serial fabricante (si necesario):</label>
            <input type="text" name="numserialfabricante" id="numserialfabricante" />
          </div>
        </div>
        <div class="centrar">
          <button type="submit" name="agregarParte" class="boton">Agregar Inventario</button>
          <a href="<?php echo constant('URL')?>ensamble/index" class="boton">Listo!</a>

        </div>
        
        
      </form>
    <?php }?>

    </main>
  </div>

</body>
</html>