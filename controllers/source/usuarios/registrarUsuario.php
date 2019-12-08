<?php 
  
  if(isset($_POST['agregar'])){
      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $apellido = ($_POST['apellido'] !== "") ? $_POST['apellido'] : NULL;
      $username = ($_POST['username'] !== "") ? $_POST['username'] : NULL;
      $rol        = ($_POST['rol'] !== "") ? $_POST['rol'] : NULL;
      $cedula     = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;
      $pass     = ($_POST['pass'] !== "") ? $_POST['pass'] : NULL;
      $estatus     = 1;
  
      if ($this->model->usuarios->insert(['nombreUsuario'=>$nombre, 'apellidoUsuario'=>$apellido, 'passUsuario'=>$pass, 'rolUsuario'=>$rol, 'cedulaUsuario'=>$cedula, 'estatusUsuario'=>$estatus, 'username'=>$username])){
        $this->view->mensaje = 'Usuario agregado exitosamente!.';
      }else{
        $this->view->mensaje = 'Ha ocurrido un error.';
      }
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }

    $this->view->render('usuarios/agregar');

?>