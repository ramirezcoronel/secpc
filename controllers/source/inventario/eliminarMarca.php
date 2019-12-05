<?php
	if ( $this->model->deleteMarca($param[0]) ) {
		$this->view->mensaje = 'Marca Eliminada';
	} else {
		$this->view->mensaje = 'Ha ocurrido un Error';

	}

	$this->view->render('inventario/mensaje');
?>