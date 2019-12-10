<?php 

	 if ( $this->model->tiposequipos->drop($param[0]) ) {
      $this->view->mensaje = 'Tipo de equipo Eliminado';
    } else {
      $this->view->mensaje = 'Ha ocurrido un Error';

    }

?>