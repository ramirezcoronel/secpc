<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Eliminar Productos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
<?php require 'views/header.php'; ?> <!-- HEADER -->
<div class="container">
  <?php require 'views/menu.php'; ?> <!-- MENU -->

  <main>
    <div class="form_title">
      <h2><?php echo $this->mensaje;?></h2>    
    </div>
    
    <form method="POST" class="form">
    <div class="form__box">
        <div class="centrar">
        <table class="tabla tabla-secundaria" id=" tabla">
               
                <tr>
                  <th>Num. Reguistro</th><th>serial</th><th>Tipo del Equipo</th><th>detalles del equipo</th><th>Fecha</th><th>Hora Entrada</th><th>Hora Salida</th>
                </tr>


               <?php
                foreach ($this->soporte as $row){
                  $eliminar = new SoporteTec();
                  $eliminar = $row;           
                ?>

                <tr>
                  <td><?php echo $eliminar->getNumSop(); ?></td>
                  <td><?php echo $eliminar->getSerial(); ?></td>
                  <td><?php echo $eliminar->getTipoEquip(); ?></td>
                  <td><?php echo $eliminar->getDetalles(); ?></td>
                  <td><?php echo $eliminar->getFecha(); ?></td>
                  <td><?php echo $eliminar->getHoraEn(); ?></td>
                  <td><?php echo $eliminar->getHoraSda(); ?></td>

                </tr>
            
              </table>
            
        </div>
    </div>
    <div class="form__box centrar">
        <label for="idDeUsuario">Ingrese ID del producto que desea eliminiar:</label>
        <input type="number" name="idDeSoporte" id="idDeUsuario">
    </div>
    <div class="centrar">
        <button type="submit" name="eliminar" class="boton" value="eliminar">Eliminar Producto</button>
        <a href="<?php echo constant('URL')?>soporte" class="boton margin-lados">cancelar</a>

    </div>
    </form>
  </main>
</div>
</body>
</html>