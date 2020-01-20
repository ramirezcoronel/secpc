<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Equipos</title>
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

            <form name="formulario" method="post" action="<?php echo constant('URL')?>equipos/actualizarEquipo"  class="form" id="form">
               <div class="form-header"> <p>Actualizar Equipo</p> </div>

          <div class="form__box">
            <div>
              <label for="codtipoequipo ">Tipo Equipo</label>
              <select name="codtipoequipo" class="select" id="select">
                <option value="">Seleccione</option>
                <?php 
              foreach($this->tipos as $row){
                $tipo = new TiposClass();
                $tipo = $row;
            ?>
              <option value="<?php echo $tipo->getCodigo()?>"><?php echo $tipo->getNombre(); ?></option>
            <?php } ?>
              </select>
            </div>
            <div>
              <label for="codequipo">codigo de Equipo:</label>
              <input type="text" name="codequipo" id="codequipo" value="<?php echo $this->equipo->getCodigo()?>" readonly/>
            </div>
            <div>
              <label for="nomequipo">Nombre de Equipo:</label>
              <input type="text" data-patron="^([A-Za-z\s]){3,100}$" name="nomequipo" id="nomequipo" value="<?php echo $this->equipo->getNombre()?>"/>
              <p class="ayuda esconder">*4 a 100 letras.</p>
            </div>
          </div>
          <div class="bottom">
            <button type="submit" id="submit" name="actualizar">Actualizar</button>
            <a href="<?php echo constant('URL')?>equipos/consultarEquipos">volver</a>
        </div>
        </form>

    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/equipos/actualizarEquipo.js"></script>

</body>
</html>