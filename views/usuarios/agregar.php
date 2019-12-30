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
        <?php require_once 'views/errores/mensaje.php'?>
        
      </div>
        <form action="<?php echo constant('URL')?>usuarios/registrarUsuario" method="POST" class="form">
          <div class="form-header">
            <p>Agregar Usuario</p>
          </div>
        <div class="form__box">
         <div>
            <label for="nombre">Nombre:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="nombre" id="nombre">
         </div>
         <div>
            <label for="apellido">Apellido:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="apellido" id="apellido">
         </div>
         <div>
            <label for="username">Username:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="username" id="username">
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
            <div>
                <label for="pass">Contraseña:</label>
                <input type="password" name="pass" id="pass" required>
            </div>
            <div>
                <label for="pass">Confirmar contraseña:</label>
                <input type="password" name="pass-confirmar" id="conPass" required>
            </div>
          <div>
            <label for="cedula">Pregunta de seguridad(Cedula:)</label>
            <input type="text" name="cedula" id="cedula" data-patron="^[0-9]{6,9}$" placeholder="Ingrese su cedula" required>

          </div>
        </div>

        <div class="bottom">
          <button type="submit" name="agregar"  value="agregar" id="submit">Agregar</button>
          <a href="<?php echo constant('URL')?>usuarios" >Volver</a>

        </div>

      </form>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/usuarios/agregar.js"></script>
   <script src="<?php echo constant('URL')?>public/js/modal/modal.js"></script>
</body>
</html>
