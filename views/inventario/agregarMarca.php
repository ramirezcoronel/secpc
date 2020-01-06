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
      <div class="modal-container">
        <?php include 'views/errores/mensaje.php'?>
        
      </div>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>
        
      </div>
        <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2>
            
        </div>
        <form action="<?php echo constant('URL')?>inventario/agregarMarca" method="POST" class="form">

           <div class="form-header"> <p>Agregar Marca</p> </div>
           
        <div class="form__box">
         <div>
            <label for="id">Id de la marca:</label>
            <input type="text" data-patron="[A-Z]{3}\-[0-9]{3}"  name="id" id="id">
         </div>
         <div>
            <label for="nombre">Nombre de la marca:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="nombre" id="nombre">
         </div>
        </div>
         
        <div class="bottom">
          <button type="submit" id="submit" name="agregar" value="agregar">Agregar Marca</button>
          <a href="<?php echo constant('URL')?>inventario">Volver</a>
        </div>
        
      </form>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/inventario/agregarMarca.js"></script>
     <script src="<?php echo constant('URL')?>public/js/modal/modal.js"></script>

</body>
</html>