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
      <div class="modal-container">
        <?php include 'views/errores/mensaje.php'?>
        
      </div>
        <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2>
            
        </div>
        <form action="<?php echo constant('URL')?>usuarios/modificarUsuario" method="POST" class="form">
          <div class="form-header">
            <p>Actualizar Usuario</p>
          </div>
        <div class="form__box ">
         <div>
            <label for="nombre">Nombre:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="nombre" id="nombre" value="<?php echo $this->usuarios->getNombre();?>">
            <p class="ayuda esconder">*3 a 12 letras.</p>
         </div>
         <div>
            <label for="apellido">Apellido:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="apellido" id="apellido" value="<?php echo $this->usuarios->getApellido();?>">
            <p class="ayuda esconder">*3 a 12 letras.</p>
         </div>
         <div>
            <label for="username">Username:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="username" id="username" value="<?php echo $this->usuarios->getUsername();?>">
            <p class="ayuda esconder">*3 a 12 letras.</p>
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
            <div class="margin-lados">
                <label for="pass">Contraseña:</label>
                <input type="password" name="pass" id="pass" value="<?php echo $this->usuarios->getPass();?>" required>
                <p class="ayuda esconder">*hasta 16 caracteres alfanumericos</p>
            </div>
            <div class="margin-lados">
                <label for="conPass">Confirmar contraseña:</label>
                <input type="password" name="pass-confirmar" id="conPass" required>
                <p class="ayuda esconder">*hasta 16 caracteres alfanumericos</p>
            </div>
          <div>
            <label for="cedula">Pregunta de seguridad(Cedula:)</label>
            <input type="text" data-patron="^[0-9]{6,9}$" name="cedula" id="cedula" placeholder="Ingrese su cedula" value="<?php echo $this->usuarios->getCedula();?>" required readonly>
            <p class="ayuda esconder">*6 a 9 numeros</p>
          </div>  
        </div>
        
        <div class="bottom">
          <button type="submit" id="submit" name="modificarUsuario" value="modificarUsuario">Modificar Usuario</button>
          <a href="<?php echo constant('URL')?>usuarios/">Cancelar</a>
        </div>
        
      </form>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/usuarios/actualizar.js"></script>
   <script src="<?php echo constant('URL')?>public/js/modal/modal.js"></script>
</body>
</html>