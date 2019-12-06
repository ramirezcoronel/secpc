<?php 
  	$partes = $this->model->partes->get();
	$this->view->partes = $partes;
	$this->view->render('inventario/consultarPartes');

 ?>