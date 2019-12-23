<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SECPC | Usuarios</title>
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
        <form action="<?php echo constant('URL')?>usuarios/modificarUsuario" method="POST" class="form">
          <div class="form-header">
            <p>Modificar Usuario</p>
          </div>
        <div class="form__box">
         <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $this->usuarios->getNombre();?>">
         </div>
         <div>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" value="<?php echo $this->usuarios->getApellido();?>">
         </div>
        </div>
        <div class="form__box">
         <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?php echo $this->usuarios->getUsername();?>">
         </div>
         <div>
            <label for="rol">Rol:</label>
            <select name="rol" id="rol" class="select" required>
                <option value="">...</option>
                <option value="admin">Admin</option>
                <option value="ensamblador">Ensamblador</option>
                <option value="inventario">Inventario</option>
                <option value="tester">Tester</option>
            </select>
         </div>
        </div>
        <div class="form__box">
            <div class="margin-lados">
                <label for="pass">Contraseña:</label>
                <input type="password" name="pass" id="pass" value="<?php echo $this->usuarios->getPass();?>" required>
            </div>
            <div class="margin-lados">
                <label for="pass">Confirmar contraseña:</label>
                <input type="password" name="pass-confirmar" id="pass" required>
            </div>
        </div>
        <div class="form__box">
        </div>
        <div class="form__box">
          <div>
            <label for="cedula">Pregunta de seguridad(Cedula:)</label>
            <input type="text" name="cedula" id="nombre" placeholder="Ingrese su cedula" value="<?php echo $this->usuarios->getCedula();?>" required readonly>
              
          </div>  
          <div>
            <label for="estatus">Estatus:</label>
            <input type="number" name="estatus" id="estatus" value="<?php echo $this->usuarios->getEstatus();?>">
         </div>
        </div>
        
        <div class="bottom">
          <button type="submit" name="modificarUsuario" value="modificarUsuario">Modificar Usuario</button>
          <a href="<?php echo constant('URL')?>usuarios/">Cancelar</a>
        </div>
        
      </form>
    </main>
  </div>

</body>
</html>