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
<form  method="POST" class="form">
<div class="form__box">
<div class="centrar">  
<table> 
    <td>
      <img src="<?php echo constant('URL')?>public/img/stressingAgregar.png" alt="Agregar tipos de pruebas" />
    </td>
    <td>
      <img src="<?php echo constant('URL')?>public/img/stressingPrueba.png" alt="Stressing" /> 
    </td>
    <tr>
      <td>
      <div class="centrar"><a href="<?php echo constant('URL')?>stressing/gestion" class="boton margin-lados" >Gestionar Prueba</a></div>
     </td>
     <td>
       <div class="centrar"><a href="<?php echo constant('URL')?>stressing/prueba" value="prueba" class="boton margin-lados" >Realizar Prueba</a></div>
     </td>
    </tr>
</table>
</div>
</div> 
</form>

  

    </main>
  </div>
 <script type="text/javascript" src="<?php echo constant('URL')?>public/js/confirmacion.js"></script>

</body>
</html>


