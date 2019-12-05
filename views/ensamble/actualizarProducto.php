<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Producto</title>
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
        <form action="<?php echo constant('URL')?>inventario/actualizarProducto" method="POST" class="form">
          <div class="form__box centrar">
         <div>
              <label for="marca">Marca</label>
              <select class="select" name="idmarca" id="select">
                <option value="0">Seleccione</option>
                <?php 
                  foreach($this->equipo as $row){
                    $equipo = new EquiposClass();
                    $equipo = $row;
               ?>
              <option value="<?php echo $equipo->getCodigo()?>"><?php echo $equipo->getNombre(); ?></option>
                <?php } ?>
              </select>
              
            </div>
        </div>
        <div class="form__box esquinas">
         <div class="margin-lados">
            <label for="codigo">codigo :</label>
            <input type="text" name="codigo" id="codigo" value="<?php echo $this->equipo->getCodigo(); ?>" readonly>
         </div>
         <div class="margin-lados">
            <label for="fecha">fecha Produccion:</label>
            <input type="date" name="fecha" id="fecha">
         </div>
        </div>
        
        <div class="centrar">
          <button type="submit" name="actualizar" class="boton" value="agregar">Actualizar</button>
          <a href="<?php echo constant('URL')?>emsamble" class="boton margin-lados">Volver</a>
        </div>
      </form>
    </main>
  </div>

</body>
</html>