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
        <form action="<?php echo constant('URL')?>inventario/actualizarMarca" method="POST" class="form">
          <div class="form-header"> <p>Actualizar Marca</p> </div>
        <div class="form__box">
         <div>
            <label for="id">Id del modelo:</label>
            <input type="text" name="id" id="id" value="<?php echo $this->marca->getId(); ?>" readonly>
         </div>
         <div>
            <label for="nombre">Nombre de Modelo:</label>
            <input type="text" name="nombre" id="nombre" data-patron="^[a-zA-Z]{3,25}$" placeholder="...">
            <p class="ayuda esconder">*De 3 a 25 catacteres.</p>
         </div>
        </div>
         
        <div class="bottom">
          <button type="submit" name="actualizar" id="submit" value="agregar">actualizar</button>
          <a href="<?php echo constant('URL')?>inventario/consultarMarca">Volver</a>
        </div>
        
      </form>
    </main>
  </div>
    <script src="<?php echo constant('URL')?>public/js/inventario/agregarMarca.js"></script>


</body>
</html>