<?php  

		$marcas = $this->model->marcas->get();
		$this->view->marcas = $marcas;

		$this->view->render('inventario/consultarMarca');
?>