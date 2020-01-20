<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Modelos</title>
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
        <form action="<?php echo constant('URL')?>inventario/actualizarModelo" method="POST" class="form">
          <div class="form__box">
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
         <div>
            <label for="idmodelo">Id del modelo:</label>
            <input type="text" name="idmodelo" id="id" value="<?php echo $this->modelo->getId(); ?>" readonly>
         </div>
         <div>
            <label for="nommodelo">Nombre de Modelo:</label>
            <input type="text" data-patron="^([A-Za-z0-9\s]){3,25}$" name="nommodelo" id="nommodelo" value="<?php echo $this->modelo->getNombre(); ?>">
            <p class="ayuda esconder">*3 a 25 caracteres alfanumericos.</p>
         </div>
        </div>
        
        <div class="bottom">
          <button type="submit" id="submit" name="actualizar" value="agregar">Actualizar</button>
          <a href="<?php echo constant('URL')?>inventario">Volver</a>
        </div>
      </form>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/inventario/actualizarModelos.js"></script>

</body>
</html>