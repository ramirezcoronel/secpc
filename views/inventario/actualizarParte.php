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


        <div class="form__box">
            <div>
              <label for="modelo">Modelo de Parte</label>
              <select class="select" name="idmodelo" id="select">
                <option value="">Seleccione</option>
                <?php 
                  foreach($this->modelos as $row){
                    $tipo = new ModelosClass();
                    $tipo = $row;
               ?>
              <option value="<?php echo $tipo->getId()?>"><?php echo $tipo->getNombre(); ?></option>
                <?php } ?>
              </select>
              
            </div>
          <div class="radio">
            <label>Serializable:</label>
            <span class="radio-buttons">
              <span>si
              <input type="radio" name="serializable" value="1"></span>
              <span>no
              <input type="radio" name="serializable" value="0"></span>
              
            </span>
          </div>
          <div>
            <label for="codpartes">Codigo de Partes:</label>
            <input type="text" name="codpartes" id="codpartes" value="<?php echo $this->parte->getCodigo(); ?>" readonly>
            <p class="ayuda esconder">*Recuerda usar el formato XXX-000</p>
          </div>
         <div>
            <label for="stockmaximo">Stock Maximo:</label>
            <input type="number" name="stockmaximo" id="stockmaximo"  value="<?php echo $this->parte->getStockMaximo(); ?>">
         </div>
         <div>
            <label for="stockminimo">Stock Minimo:</label>
            <input type="number" name="stockminimo" id="stockminimo"  value="<?php echo $this->parte->getStockMinimo(); ?>">
         </div>
         <div >
            <label for="puntoreorden">Punto de Reorden:</label>
            <input type="number" name="puntoreorden" id="puntoreorden"  value="<?php echo $this->parte->getPuntoReorden(); ?>">
         </div>

        </div>
         
        <div class="bottom">
          <a href="<?php echo constant('URL')?>inventario">Volver</a>
          <button type="submit" name="actualizar" id="submit" value="agregar">Actualizar Partes</button>
        </div>
        
      </form>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/inventario/actualizarPartes.js"></script>

</body>
</html>