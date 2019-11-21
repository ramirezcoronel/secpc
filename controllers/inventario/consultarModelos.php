<?php 

 	$modelos = $this->model->getModelos();
	$this->view->modelos = $modelos;
	$this->view->render('inventario/consultarModelo');

?>