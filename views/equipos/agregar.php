<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Equipos</title>
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
          <?php if ( isset($this->equipo) ){ ?>

            <form name="formulario" method="post" action="<?php echo constant('URL')?>equipos/agregar"  class="form" id="form">

           <div class="form-header"> <p>Agregar Equipo</p> </div>
          

          <div class="form__box">
            <div>
              <label for="codtipoequipo ">Tipo Equipo</label>
              <input type="text" name="codtipoequipo" id="codtipoequipo" value="<?php echo $this->equipo->getCodTipo()?>"readonly>
            </div>
            <div>
              <label for="codequipo">codigo de Equipo:</label>
              <input type="text" name="codequipo" id="codequipo" value="<?php echo $this->equipo->getCodigo()?>" readonly/>
            </div>
            <div>
              <label for="nomequipo">Nombre de Equipo:</label>
              <input type="text" name="nomequipo" id="nomequipo" value="<?php echo $this->equipo->getNombre()?>"readonly/>
            </div>
          </div>
        
          
    <?php } else {?>

        <form name="formulario" method="post" action="<?php echo constant('URL')?>equipos/agregar"  class="form" id="form">

           <div class="form-header"> <p>Agregar Parte</p> </div>
          

          <div class="form__box">
            <div>
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
            <div>
              <label for="codequipo">codigo de Equipo:</label>
              <input type="text" name="codequipo" id="codequipo" />
            </div>
            <div>
              <label for="nomequipo">Nombre de Equipo:</label>
              <input type="text" name="nomequipo" id="nomequipo" />
            </div>
          </div>

          <div class="bottom">
          <a href="<?php echo constant('URL')?>equipos/consultarEquipos" >Volver</a>
          <button type="submit" name="agregar" >Agregar Tipo de Equipo</button>

        </div>
        
        </form>


    <?php }?>
      
      <!-- DESDE AQUI ESTA EL FORMULARIO PARA AGREGAR PARTES -->

      <?php if ($this->visible) {?>

        <h2 class="text-header margin-bottom">Agregar Parte A Equipo:</h2>
         <div class="form__box">
         
           <div>
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
          <div>
            <label for="cantidadparteequipo">Cantidad:</label>
            <input type="text" name="cantidadparteequipo" id="cantidadparteequipo" />
          </div>
        </div>

        <div class="bottom">
          <a href="<?php echo constant('URL')?>equipos" >Listo</a>
          <button type="submit" name="agregarParte" >Agregar Parte a Equipo</button>
        </div>
        
        
      </form>
    <?php }?>

    </main>
  </div>

</body>
</html>