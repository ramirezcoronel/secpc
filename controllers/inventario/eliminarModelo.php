<?php 
	if ( $this->model->deleteModelo($param[0]) ) {
		$this->view->mensaje = 'Modelo Eliminada';
	} else {
		$this->view->mensaje = 'Ha ocurrido un Error';

	}
	$this->view->render('inventario/mensaje');

 ?>