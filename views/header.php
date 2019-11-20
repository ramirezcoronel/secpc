<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title></title>
</head>
<body>
  <header class="header">
        <!-- titulo del header -->
        <div class="header__texto">
          <p class="header__titulo"><a href="<?php echo constant('URL')?>">Inicio</a></p>
          <p><?php echo $_SESSION['usuario']; ?></p>
        </div>
        <div class="header__logo"></div>
        <div class="header__uptaeb"></div>
  </header>
</body>
</html>



   