
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Log in</title>
   <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logo3.png" />
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
  <body>
    <?php require 'views/header1.php'; ?>
    <main>

      <div class="login" >
        <?php
        if (isset($this->mensaje) ) {
          ?>
          <h2 id="mensaje"> <?php echo $this->mensaje; ?> </h2>
          <?php
        } ?>

        <form action="<?php echo constant('URL')?>login" class="login__form"method="POST">
          <div class="user-img"></div>
         
          <input
            class="login__form__input"
            type="text"
            name="usuario"
            placeholder="Usuario"
            id="usuario"
          />
          <input
            class="login__form__input"
            type="password"
            name="contrasena"
            placeholder="********"
            id="contraseña"
          />
          <button type="submit" name="ingresar" class="login__form__input login__form__submit" value="ingresar">Iniciar Sesion</button>
          <p class="login__form__reset"> 
            <a href="<?php echo constant('URL')?>restaurar">restaurar mi contraseña</a>
          </p>
        </form>
        <div class="login__sistema">
          <h3>Bienvenidos al sistema de <span>SECPC</span></h3>
          <p>
            Este es un sistema que permite controlar el registro de componentes
            de hardware y de los equipos Canaima que son ensamblados.

          </p>
        </div>
      </div>

      
    </main>
  </body>
</html>
