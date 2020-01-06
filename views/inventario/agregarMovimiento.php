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
          <?php if ( isset($this->movimiento) ){ ?>

             <form action="<?php echo constant('URL')?>inventario/agregarMovimiento" method="POST" class="form margin-lados margin-bottom">

           <div class="form-header"> <p>Agregar Movimiento</p> </div>
          
        <div class="form__box">
         <div>
            <label for="num">Nº del Movimiento:</label>
            <input type="text" name="num" id="num" value="<?php echo $this->movimiento->getNumero();?>" readonly>
         </div>
          <div class="margin-lados">
             <label for="tipo">Tipo de Movimiento:</label>
             <input type="text" name="tipo" value="<?php echo $this->movimiento->getTipo();?>" readonly>
           </div>
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

        <form action="<?php echo constant('URL')?>inventario/agregarMovimiento" method="POST" class="form margin-lados">

           <div class="form-header"> <p>Agregar Movimiento</p> </div>
          
        <div class="form__box">
         <div class="margin-lados">
            <label for="num">Nº del Movimiento:</label>
            <input type="text" name="num" id="num">
         </div>
          <div class="margin-lados">
             <label for="tipo">Tipo de Movimiento:</label>
             <select name="tipo" class="select" id="tipo">
               <option value="0">Seleccione</option>
               <option value="1">Entrada</option>
               <option value="2">Salida</option>
             </select>
           </div>

          <div class="margin-lados">
             <label for="hora">Hora de movimiento:</label>
             <input type="time" id="hora" name="hora" min="09:00" max="18:00" required>
           </div>
           <div class="margin-lados">
             <label for="fecha">Fecha de Movimiento</label>
             <input id="fecha" name="fecha" type="date">
           </div>
        </div>

         
        <div class="bottom">
          <button type="submit" id="submit" name="agregar"  value="agregar">Agregar Movimiento</button>
          <a href="<?php echo constant('URL')?>inventario">Volver</a>
        </div>
        
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
        <div class="bottom">
          <a href="<?php echo constant('URL')?>inventario/" >Listo!</a>
          <button type="submit" id="submit" name="agregarParte" >Agregar Inventario</button>

        </div>
        
        
      </form>
    <?php }?>

    </main>
  </div>

</body>
</html>