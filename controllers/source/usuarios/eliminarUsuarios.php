<?php

	$this->view->mensaje = 'Eliminar Usuario';

    if ( isset($_POST['eliminar']) ) {
      $idDeUsuario = ($_POST['idDeUsuario'] !== "" && $_POST['idDeUsuario'] !== "1") ? $_POST['idDeUsuario'] : NULL;
      if ( $this->model->usuarios->drop( $idDeUsuario ) ) {
        $this->view->mensaje = 'Usuario eliminado exitosamente';
      } else {
        $this->view->mensaje = 'No se han encontrado usuarios con ese ID';
      }

    }

    $usuarios = $this->model->usuarios->get();
    $this->view->usuarios = $usuarios;
    
    $this->view->render('usuarios/eliminar');

?>