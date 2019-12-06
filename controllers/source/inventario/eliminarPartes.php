<?php 

	if ( $this->model->partes->drop($param[0]) ) {
			$this->view->mensaje = 'Parte Eliminada';
		} else {
			$this->view->mensaje = 'Ha ocurrido un Error';
		}

		$this->view->render('inventario/mensaje');
 ?>