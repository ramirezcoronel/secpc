<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Marcas</title>
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
        <form action="<?php echo constant('URL')?>inventario/agregarModelo" method="POST" class="form">
          <div class="form__box centrar">
         <div>
              <label for="marca">Marca</label>
              <select class="select" name="idmarca" id="select">
                <option value="0">Seleccione</option>
                <?php 
                  foreach($this->marcas as $row){
                    $marca = new MarcasClass();
                    $marca = $row;
               ?>
              <option value="<?php echo $marca->getId()?>"><?php echo $marca->getNombre(); ?></option>
                <?php } ?>
              </select>
              
            </div>
        </div>
        <div class="form__box esquinas">
         <div class="margin-lados">
            <label for="idmodelo">Id del modelo:</label>
            <input type="text" name="idmodelo" id="idmodelo">
         </div>
         <div class="margin-lados">
            <label for="nommodelo">Nombre de Modelo:</label>
            <input type="text" name="nommodelo" id="nommodelo">
         </div>
        </div>
        
        <div class="centrar">
          <button type="submit" name="agregar" class="boton" value="agregar">Agregar Modelo</button>
          <a href="<?php echo constant('URL')?>inventario/consultarModelos" class="boton margin-lados">Volver</a>
        </div>
      </form>
    </main>
  </div>

</body>
</html>