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
      
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>
        
      </div>
        <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2>
            
        </div>
        <form action="<?php echo constant('URL')?>inventario/agregarModelo" method="POST" class="form">

           <div class="form-header"> <p>Agregar Modelos</p> </div>
           
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
                <option value="<?php echo $marca->getId()?>"><?php echo $marca->getNombre().' - '.$marca->getId(); ?></option>
                  <?php } ?>
                </select>
                
              </div>
         <div class="margin-lados">
            <label for="idmodelo">Id del modelo:</label>
            <input type="text" data-patron="^([A-Z]{3}\-[0-9]{3})$" name="idmodelo" id="idmodelo" placeholder="AAA-111">
            <p class="ayuda esconder">*Recuerda usar el formato XXX-000</p>
         </div>
         <div class="margin-lados">
            <label for="nommodelo">Nombre de Modelo:</label>
            <input type="text" data-patron="^([A-Za-z0-9\s]){3,25}$" name="nommodelo" id="nommodelo" placeholder="...">
            <p class="ayuda esconder">*3 a 25 caracteres alfanumericos.</p>
         </div>
        </div>
        
        <div class="bottom">
          <button type="submit" id="submit" name="agregar"value="agregar">Agregar</button>
          <a href="<?php echo constant('URL')?>inventario/consultarModelos" >Volver</a>
        </div>
      </form>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/inventario/agregarModelos.js"></script>
     <script src="<?php echo constant('URL')?>public/js/modal/modal.js"></script>

</body>
</html>