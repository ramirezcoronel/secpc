<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Soporte Tecnico</title>
   <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
   
</head>
<!--cuerpo del modulo*********************************************-->

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
          <div class="form_box">
          
              <div class="form__box">
                <div class="centrar"> 
                  <div>
                   Buscador<br><input type="text" id="searchTerm" name="buscador" onkeyup="doSearch()" placeholder="Ingrese Datos">
                 </div>
               </div>
              </div>

             <table class="tabla tabla-secundaria" id="datos">
              
                <tr>
                  <th>Num. Soporte</th>
                  <th>falla Reportada</th>
                  <th>Fecha del Soporte</th>
                  <th>Hora de Entrada</th>
                  <th>Hora de Salida</th>
                  <th>Descripcion de Actividad</th>
                  <th>Modificar</th>
                  <th>Eliminar</th>
                </tr>

                <?php
                foreach ($this->soporte as $row){
                  $soporte = new SoporteTec();
                  $soporte = $row;           
                ?>

                <tr>
                  <td><?php echo $soporte->getNumSop(); ?></td>
                  <td><?php echo $soporte->getFallaReport(); ?></td>
                  <td><?php echo $soporte->getFecha(); ?></td>
                  <td><?php echo $soporte->getHoraEn(); ?></td>
                  <td><?php echo $soporte->getHoraSda(); ?></td>
                  <td><?php echo $soporte->getDesActividad(); ?></td>
                  <td><a class="botonForm" href="<?php echo constant('URL')?>stressing/actualizarPrueba/<?php echo $stressing->getCod()?>">Modificar</a></td>
                  <td><a id="eliminar" class="botonForm" href="<?php echo constant('URL')?>stressing/eliminarEOP/<?php echo $stressing->getCod()?>">Eliminar</a></td>
                </tr>
                <?php } ?>
                <tr class='noSearch hide'>
                  <td colspan="6"></td>
                </tr>

              </table>

            </div>

          <form action="soporter.php" method="POST" class="form">
          
             <div class="centrar">
            
          <a href="<?php echo constant('URL')?>soporte/seleccionarSop" name="btnReparar" class="boton margin-lados">Seleccionar</a>
           
             </div>
           </form>
          </form>
        </div>
      
      </main>
  </div>
   <script type="text/javascript" src="<?php echo constant('URL')?>public/js/validarSoporte.js"></script>
</body>
</html>