<?php 

	if ( $this->model->deleteMovimiento($param[0]) ) {
			$this->view->mensaje = 'Movimiento Eliminado';
		} else {
			$this->view->mensaje = 'Ha ocurrido un Error';

		}

		$this->view->render('inventario/mensaje');
 ?>