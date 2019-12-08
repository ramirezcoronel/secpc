<?php
	if ( $this->model->usuarios->drop($param[0]) ) {
		$this->view->mensaje = 'Usuario Eliminado';
	} else {
		$this->view->mensaje = 'Ha ocurrido un Error';

	}

	$this->view->render('usuarios/mensaje');
?>