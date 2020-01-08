<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Soporte Tecnico</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>

  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    
    <?php require 'views/menu.php'; ?> <!-- MENU -->

      <main>
        <div class="form_title text-header">
       <h2><?php echo $this->mensaje;?></h2>    
      </div>
        <div class="centrar">
          <form action="soporter.php" method="POST" class="form">
        <div class="form_box" onsubmit="return seleccionar()">
          
         <div class="form__box">
             <div class="centrar"> 
              <div>
               Buscador<br><input type="text" id="searchTerm" name="buscador" onkeyup="doSearch()" placeholder="Ingrese Datos">
              </div>
             </div>
        </div>

         <table class="tabla tabla-secundaria" id=" tabla">
              
          <tr>
              <th>Num. Soporte</th>
              <th>falla Reportada</th>
              <th>Fella del Soporte</th>
              <th>Hora de Entrada</th>
              <th>Hora de Salida</th>
              <th>Descripcion de Actividad</th>
              <th>NumPrueba</th>
              <th>Seleccionar</th>
          </tr>

          <?php
            foreach ($this->soporte as $row){
             $seleccionar = new SoporteTec();
             $seleccionar = $row;                 
          ?>

          <tr>
           <td><?php echo $seleccionar->getNumSop(); ?></td>
           <td><?php echo $seleccionar->getFallaReport(); ?></td>
           <td><?php echo $seleccionar->getFecha(); ?></td>
           <td><?php echo $seleccionar->getHoraEn(); ?></td>
           <td><?php echo $seleccionar->getHoraSda(); ?></td>
           <td><input type="radio" name="selec">Seleccionar</td>
          <?php } ?>

        </table>

        <form action="soporte.php" class="form" method="post" onsubmit="return seleccionar()">
          <div class="centrar">
            <div>
             <a href="<?php echo constant('URL')?>soporte/repararEquip" id="btnAceptar" name="btnAceptar" class="boton margin-lados">Aceptar</a>
      
             <a href="<?php echo constant('URL')?>soporte" class="boton margin-lados">cancelar</a>
              </div>
             </div>
            </form>
          </div>
        </form>
      </div>
    </main>
   </div>
  <script type="text/javascript" src="<?php echo constant('URL')?>public/js/validarSoporte.js"></script>
 </body>
</html>