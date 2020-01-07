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
      <form class="form " method="POST" name="formulario" action="<?php echo constant('URL')?>pruebas/prueba">
        <div class="form-header">
          <p>Agregar Prueba</p>
        </div>

        <div class="form__box">
          <div>
            <label>Tipo de Prueba</label>
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
          <div>
            <label for="produto">Serial:</label>
            <input type="text" name="produto" id="producto">
          </div>
            <div>
              <label for="fecha">fecha:</label>
              <input type="date" name="fecha" id="fecha">
            </div>
            <div>
              <label for="hora">Hora:</label>
              <input type="time" name="hora" id="hora">
            </div>
          <div>
            <label for="select">Resultado de la prueba</label>
            <select onchange="habilitar(this)" name="resultado" id="select">
              <option>No pasó la prueba</option>
              <option>Pasó la prueba</option> 
            </select>
          </div>
          <div>
            <textarea name="observacion" placeholder="Escriba la observacion del equipo que no pasó la prueba">
            </textarea>
          </div>
        </div>

        <div class="bottom">
          
          <button type="submit" name="agregar" id="btn" value="agregar">Agregar</button>
          <a href="<?php echo constant('URL')?>pruebas" >Atras</a>
        </div>
      </form>


      <div class="form"> 
      <div class="form-header">
          <p>Equipo</p>
        </div>

        <table class="tabla tabla-secundaria">
          <th>Serial</th>
          <th>equipo</th>
          <th>Fecha</th>
        </table>
      </div>
    <script type="text/javascript" src="<?php echo constant('URL')?>public/js/stressing.js"></script>
  </main>
</div>

</body>
</html>

