<?php 

 	$modelos = $this->model->modelos->get();
	$this->view->modelos = $modelos;
	$this->view->render('inventario/consultarModelo');

?>