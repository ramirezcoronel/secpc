<?php  

		$marcas = $this->model->getMarca();
		$this->view->marcas = $marcas;

		$this->view->render('inventario/consultarMarca');
?>