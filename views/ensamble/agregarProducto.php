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
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>
        
      </div>
        <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2>
            
        </div>
        <div class="horizontal">
          <?php if ( isset($this->producto) ){ ?>

        <form action="<?php echo constant('URL')?>inventario/agregar" method="POST" class="form">
          <div class="form-header">
            <p>Agregar Partes a Producto</p>
          </div>
        <div class="form__box">
         <div>
            <label for="num">Codigo del Producto:</label>
            <input type="text" name="num" id="num" value="<?php echo $this->producto->getCodigo();?>" readonly>
         </div>
          <div>
             <label for="tipo">Codigo del Equipo ensamblado:</label>
             <input type="text" name="tipo" value="<?php echo $this->producto->getCodigoEquipo();?>" readonly>
           </div>
           <div>
             <label for="fecha">Fecha de Movimiento</label>
             <input id="fecha" name="date" type="date" value="<?php echo $this->producto->getFecha();?>" readonly>
           </div>
        </div>
        
          
    <?php } else {?>

    <form name="formulario" method="post" action="<?php echo constant('URL')?>ensamble/agregarProducto"  class="form" id="form">
        <div class="form-header">
            <p>Agregar Producto</p>
          </div>
          <div class="form__box">
            <div>
              <label for="codequipo ">Codigo Equipo</label>
              <select name="codequipo" class="select" id="select">
                <option value="0">Seleccione</option>
                <?php 
              foreach($this->equipos as $row){
                $equipo = new EquiposClass();
                $equipo = $row;
            ?>
            <option value="<?php echo $equipo->getCodigo()?>"><?php echo $equipo->getCodigo().' - '.$equipo->getNombre(); ?></option>
            <?php } ?>
              </select>
            </div>
            <div>
              <label for="codigo">codigo de Producto:</label>
              <input type="text" name="codigo" id="codigo" />
            </div>
            <div>
              <label for="fecha">Fecha de Produccion:</label>
              <input type="Date" name="fecha" id="fecha" />
            </div>
          </div>

          <div class="bottom">
          <a href="<?php echo constant('URL')?>ensamble">Volver</a>
          <button type="submit" name="agregar">Agregar Producto</button>

        </div>
        
        </form>


    <?php }?>
      
      <!-- DESDE AQUI ESTA EL FORMULARIO PARA AGREGAR PARTES -->
      <?php if ($this->visible) {?>
        <h2 class="text-header margin-bottom">Datos de parte a agregar:</h2>
        <div class="form__box centrar">
           <div id="validacion" data-validacion="parte">
              <label for="codparte">Partes: </label>
              <select name="codparte" class="select" id="codparte">
                <option value="0">Seleccione</option>
                <?php
                  foreach($this->partes as $row){
                    $parte = new PartesClass();
                    $parte = $row;
                ?>
              <option value="<?php echo $parte->getCodigo()?>" data-serial="<?php echo $parte->getSerializable()?>"><?php echo $parte->getIdModelo().' - '. $parte->getCodigo(); ?></option>
            <?php } ?>
              </select>
           </div>
          <div>
            <label for="cantidadparte">Cantidad:</label>
            <input type="number" name="cantidadparte" id="cantidadparte" />
          </div>
          <div>
            <label for="numserialfabricante">Serial fabricante:</label>
            <input type="text" name="numserialfabricante" id="numserialfabricante" />
          </div>
        </div>
        <div class="bottom">
          <a href="<?php echo constant('URL')?>inventario/" >Listo!</a>
          <button type="submit" id="submit" name="agregarParte" >Agregar</button>
        </div>  
      </form>

     <div class="tabla">
      <div>
          <table>
            <caption>Partes Necesarias:</caption>
            <tr> <th>Codigo</th><th>Cantidad</th>
            <tbody id="tbody-usuarios">
              <?php
                foreach($this->partesequipos as $row){
                  $parteEquipos = new PartesEquiposClass();
                  $parteEquipos = $row;
              ?>
              </tr >
              <tr>
                <td><?php echo $parteEquipos->getCodPartes(); ?></td>
                <td><?php echo $parteEquipos->getCantidadPartes(); ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
      </div>
    <?php }?>
    </div>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/modal/modal.js"></script>
   <script src="<?php echo constant('URL')?>public/js/ensamble/agregarProducto.js"></script>

</body>
</html>