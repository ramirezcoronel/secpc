<?php 

	if( $this->model->delete($param[0]) ) {
      $this->view->mensaje = 'Prueba eliminada con exito';
    } else {

      $this->view->mensaje = 'Ha ocurrido un error';

    }

   $this->view->render('pruebas/mensaje');

 ?>