<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Recuperar contraseña</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
  <body>
    <?php require 'views/header1.php'; ?>
    <main>
      <div class="login" >
        
        <form class="restaurar__form" method="post" name="formulario" action="<?php echo constant('URL')?>restaurar/actualizar">

          <input class="login__form__input" type="text" name="cuenta" value="<?php echo $_SESSION['restaurarUsuario'];?>" id="cuenta" disabled/>
          <br>
          <input required class="login__form__input" type="password" name="password1" placeholder="Nueva contraseña" id="password1"/>
          
          <input required class="login__form__input" type="password" name="password2" placeholder="Confirme la contraseña" id="password2"/>
          <input type="submit" name="btn" id="btn"  class="login__form__input login__form__submit" value="actualizar" >
         <input type="button" class="login__form__input login__form__submit" value="Cancelar" onClick="history.go(-2);">
        </form>
        <div class="restaurar__sistema">
          <h3>Bienvenidos al recuperar contraseña de <span>SECPC</span></h3>
          <p>
            En este modulo podras recuperar su contraseña utilizando solo el nombre de ususuario de la cuenta que quiere recupear y la ceduala de ese mismo usuario.
          </p>
        </div>
      </div>

      
    </main>
    <script type="text/javascript" src="<?php echo constant('URL')?>public/js/validar_password.js"></script>
  </body>
</html>
