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
      <div class="text-header margin-bottom">
        <h2> <?php echo $this->mensaje ?> </h2>      
      </div>
      <div class="horizontal">
        
    <form  method="POST" class="form margin-lados">
      <div class="text-header margin-bottom">
        <h2>Partes</h2>
      </div>
      <div class="form__box esquinas ">
         <h2>Gestionar Marcas</h2>
        <div>
        </div>
      </div>
      <div class="margin-bottom">
        <a href="<?php echo constant('URL')?>inventario/consultarMarca" class="boton margin-lados">Gestionar</a>
      </div>
      <div class="form__box esquinas">
         <h2>Gestionar Modelos</h2>
        <div >
        </div>
      </div>
      <div class="margin-bottom">
        <a href="<?php echo constant('URL')?>inventario/consultarModelos" class="boton margin-lados">Agregar</a>
      </div>
      <div class="form__box esquinas">
         <h2>Gestionar Partes</h2>
         <div>
         </div>
        </div>
     <div class="margin-bottom">
       <a href="<?php echo constant('URL')?>inventario/consultarPartes" class="boton margin-lados">Consultar</a>
     </div>

       
      </form>

      <form action="POST" class="form margin-lados"> 
        <div class="text-header margin-bottom">
          <h2>Movimientos</h2>
        </div>
       <div class="form__box esquinas">
          <h2>Gestionar Movimientos</h2>
        </div>
        <div class="margin-bottom">
          <a href="<?php echo constant('URL')?>inventario/consultarMovimientos" class="boton margin-lados">Gestionar</a>
        </div>
      </form>
      </div>
    </main>
  </div>

</body>
</html>
