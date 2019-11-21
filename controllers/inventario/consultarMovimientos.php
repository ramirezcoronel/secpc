<?php 
	$movimientos = $this->model->getMovimientos();
		$this->view->movimientos = $movimientos;
		$this->view->render('inventario/consultarMovimientos');
 ?>