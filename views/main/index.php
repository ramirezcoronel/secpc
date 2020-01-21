<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | UPTAEB</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <?php require 'views/menu.php'; ?> <!-- MENU -->
    <main>
      <div class="produccion">
      <h2>Seguimiento de Ensamblado y Control de Producción de Canaima</h2>
      <div class="contenedor">
        <div>
          <div class="slider">
            <ul>
              <li><img src="<?php echo constant('URL')?>public/img/0.jpg"></li>
              <li><img src="<?php echo constant('URL')?>public/img/01.jpg"></li>
              <li><img src="<?php echo constant('URL')?>public/img/2.jpg"></li>
              <li><img src="<?php echo constant('URL')?>public/img/3.png"></li>
              <li><img src="<?php echo constant('URL')?>public/img/4.jpg"></li>
              <li><img src="<?php echo constant('URL')?>public/img/5.jpg"></li>
              <li><img src="<?php echo constant('URL')?>public/img/6.jpg"></li>
              <li><img src="<?php echo constant('URL')?>public/img/7.jpg"></li>
            </ul>
          </div>
        </div>
        <div> 
          <div class="alerta">
            <div class="alerta-header">
              <p>Alertas</p>
            </div>
            <div class="alerta-content">

              <?php
              if (sizeof($this->mensajeAlerta)) {

                foreach ($this->mensajeAlerta as $mensaje) {
                 ?>
                  <div class="alerta-mensaje">
                    <p class="titulo">Atencion!</p>
                    <p class="mensaje"><?php echo $mensaje;?></p>
                  </div>
                  <?php
                }
              } else {
                ?>
                <div class="alerta-mensaje">
                    <p class="titulo-bueno">Que bien!</p>
                    <p class="mensaje">No tienes alertas en el sistema.</p>
                  </div>
                <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
