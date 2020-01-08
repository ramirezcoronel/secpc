<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Soporte Tecnico </title>
    <!-- <link rel="stylesheet" href="public/css/main.css"> -->
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
      <div class="form_title text-header">
      <h2><?php echo $this->mensaje;?></h2>    
    </div>
  <form action="soporte.php" method="POST" class="form" >
  <table class="tabla tabla-secundaria centrar">
    <div class="centrar">
    <tr>
    	<th>Num.Reguistro</th><th>Serial</th>
    </tr>

   </div>
    <?php
    foreach ($this->soporte as $row) {
        $reparar = new SoporteTec();
        $reparar = $row;
      
    ?>
    </tr>
      <td><?php echo $reparar->getNumSop();?></td>
    </tr>

  <?php } ?>


  <tr>
      <th>Hora Inicial</th><th>Hora Final</th>
    </tr>
  
  <tr>
    <td><input type="time" name="horaEn"></td>
    <td><input type="time" name="horaSla"></td>
  </tr>
  </table>

  <label for="descripcion">Descripcion de la reparacion</label>
<textarea name="desactividad" placeholder="detalles del trabajo realizado"></textarea>

<div class="centrar">
  <button type="submit" name="reparado" class="boton" value="agregar" href="<?php echo constant('URL')?>soporte" >Reparado</button>
  <button href="<?php echo constant('URL')?>soporte" name="noreparado" class="boton" value="noReparado" >Sin Reparación</button>
  <a href="<?php echo constant('URL')?>soporte" class="boton margin-lados">cancelar</a>
</div>

  </form>

      </main>
      </body>
</html>