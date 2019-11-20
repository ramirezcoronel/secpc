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

        <form class="restaurar__form"method="POST">
          <div class="user-img1"></div>
         
          <input
            class="login__form__input"
            type="text"
            name="usuario"
            placeholder="Usuario"
            id="usuario"
          />
          <input
            class="login__form__input"
            type="text"
            name="cedula"
            placeholder="Cedula"
            id="cedula"
          />
          <button type="submit" name="ingresar" class="login__form__input login__form__submit" value="ingresar">Restaurar contraseña</button>
         <input type="button" class="login__form__input login__form__submit" value="Cancelar" onClick="history.go(-1);">
        </form>
        <div class="restaurar__sistema">
          <h3>Bienvenidos al recuperar contraseña de <span>SECPC</span></h3>
          <p>
            En este modulo podras recuperar su contraseña utilizando solo el nombre de ususuario de la cuenta que quiere recupear y la ceduala de ese mismo usuario. asd

          </p>
        </div>
      </div>

      
    </main>
  </body>
</html>

</html>
