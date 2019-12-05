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
        <form action="<?php echo constant('URL')?>inventario/actualizarParte" method="POST" class="form">


        <div class="form__box centrar margin-lados">
          <div>
           <div class="form__box">
            <div>
              <label for="modelo">Modelo de Parte</label>
              <select class="select" name="idmodelo" id="select">
                <option value="0">Seleccione</option>
                <?php 
                  foreach($this->modelos as $row){
                    $tipo = new ModelosClass();
                    $tipo = $row;
               ?>
              <option value="<?php echo $tipo->getId()?>"><?php echo $tipo->getNombre(); ?></option>
                <?php } ?>
              </select>
              
            </div>
            </div>
          </div>
        </div>

        <div class="form__box margin-lados esquinas">
          <div>
            <p>Serializable:</p>
            <div class="centrar">
              si
              <input type="radio" name="serializable" value="1">
              no
              <input type="radio" name="serializable" value="0">
            </div>
          </div>
          <div>
            <label for="codpartes">Codigo de Partes:</label>
            <input type="text" name="codpartes" id="codpartes" value="<?php echo $this->parte->getCodigo(); ?>" readonly>
          </div>
        </div>

        <div class="form__box esquinas margin-lados">
         <div>
            <label for="stockmaximo">Stock Maximo:</label>
            <input type="number" name="stockmaximo" id="stockmaximo">
         </div>
         <div>
            <label for="stockminimo">Stock Minimo:</label>
            <input type="number" name="stockminimo" id="stockminimo">
         </div>
        </div>

        
        <div class="form__box esquinas">
         <div class="margin-lados">
            <label for="puntoreorden">Punto de Reorden:</label>
            <input type="number" name="puntoreorden" id="puntoreorden">
         </div>
         <div class="margin-lados">
            <label for="estatus">Estatus del Modelo:</label>
            <input type="text" name="estatus" id="estatus">
         </div>

        </div>
         
        <div class="centrar">
          <button type="submit" name="actualizar" class="boton" value="agregar">Actualizar Partes</button><a href="<?php echo constant('URL')?>inventario" class="boton margin-lados">Volver</a>
        </div>
        
      </form>
    </main>
  </div>

</body>
</html>