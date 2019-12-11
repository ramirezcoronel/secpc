<?php
	if ( $this->model->modelos->drop($param[0]) ) {
		$this->view->mensaje = 'Modelo Eliminado';
	} else {
		$this->view->mensaje = 'Ha ocurrido un Error';

	}
	$this->view->render('inventario/mensaje');

 ?>
