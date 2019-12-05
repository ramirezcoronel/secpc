<?php 
	
	if(isset($_POST['modificarUsuario'])) {

      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $apellido = ($_POST['apellido'] !== "") ? $_POST['apellido'] : NULL;
      $username = ($_POST['username'] !== "") ? $_POST['username'] : NULL;
      $rol        = ($_POST['rol'] !== "") ? $_POST['rol'] : NULL;
      $cedula     = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;
      $pass     = ($_POST['pass'] !== "") ? $_POST['pass'] : NULL;
      $estatus     = ($_POST['estatus'] !== "") ? $_POST['estatus'] : NULL;

      if ($this->model->usuarios->update(['nombreUsuario'=>$nombre, 'apellidoUsuario'=>$apellido, 'passUsuario'=>$pass, 'rolUsuario'=>$rol, 'estatusUsuario'=>$estatus, 'username'=>$username, 'cedulaUsuario'=>$cedula])){
        $this->view->mensaje = 'Usuario Modificado exitosamente!.';

      }else{
        $this->view->mensaje = 'Ha ocurrido un error.';
      }
      $this->view->render('usuarios/modificar.mensaje');

    } else if ( isset($_POST['modificar']) ) {

      $cedula     = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;

      $usuarios = $this->model->usuarios->search($cedula);


      if (isset($usuarios)){

        $this->view->usuarios = $usuarios;

        $this->view->render('usuarios/modificar'); 
     } else {
      $this->view->mensaje = 'Usuario No ENcontrado';
      $this->view->render('usuarios/modificar.mensaje');
     }

      
    } else {
      $this->view->mensaje = 'Ingrese Cedula de Usuario A Modificar';
      $this->view->render('usuarios/modificar.consulta');
    }

?>