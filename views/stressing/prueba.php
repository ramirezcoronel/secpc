<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Stressing</title>
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
    <div class="form__box esquinas">

      <form class="form" method="POST" name="formulario" action="<?php echo constant('URL')?>stressing/prueba">
        <div class="form__box esquinas">
          <span>Tipo de Prueba</span>
          <select name="codprueba" class="select" id="select">
          <option value="0">Seleccione</option>
          <?php 
          foreach($this->pruebas as $row){
          $prueba = new stressingClass();
          $prueba = $row;
          ?>
          <option value="<?php echo $prueba->getCod()?>"><?php echo $prueba->getNombre()?></option>
           <?php } ?>
          </select>
        </div>
        <div class="form__box esquinas">
          <label for="produto">Serial:</label>
          <input type="text" name="produto" id="producto">
        </div>
        <div class="form__box esquinas">
          <div>
            <label for="fecha">fecha:</label>
            <input type="date" name="fecha" id="fecha">
          </div>
          <div>
            <label for="hora">Hora:</label>
            <input type="time" name="hora" id="hora">
          </div>
        </div>
        <span>Resultado de la prueba</span>
        <select onchange="habilitar(this)" name="resultado" class="select">
          <option>No pasó la prueba</option>
          <option>Pasó la prueba</option> 
        </select>
        <textarea name="observacion" placeholder="Escriba la observacion del equipo que no pasó la prueba">
        </textarea>
        <button type="submit" name="agregar" id="btn" class="boton" value="agregar">Agregar</button>
        <a href="<?php echo constant('URL')?>stressing/render" class="boton margin-lados" >Atras</a>
      </form>
      <div class="form"> 
        <table class="tabla tabla-secundaria">
          <th>Serial</th>
          <th>equipo</th>
          <th>Fecha</th>
        </table>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo constant('URL')?>public/js/stressing.js"></script>
  </main>
</div>

</body>
</html>

