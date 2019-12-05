<?php 

	 if ( $this->model->deleteEquipo($param[0]) ) {
      $this->view->mensaje = 'Equipo Eliminado';
    } else {
      $this->view->mensaje = 'Ha ocurrido un Error';

    }

    $this->view->render('equipos/mensaje');

?>