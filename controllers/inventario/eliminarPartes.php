<?php 

	if ( $this->model->deleteParte($param[0]) ) {
			$this->view->mensaje = 'Parte Eliminada';
		} else {
			$this->view->mensaje = 'Ha ocurrido un Error';
		}

		$this->view->render('inventario/mensaje');
 ?>