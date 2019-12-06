<?php 
	$movimientos = $this->model->movimientos->get();
		$this->view->movimientos = $movimientos;
		$this->view->render('inventario/consultarMovimientos');
 ?>