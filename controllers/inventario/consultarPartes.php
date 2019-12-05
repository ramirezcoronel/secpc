<?php 
  	$partes = $this->model->getPartes();
	$this->view->partes = $partes;
	$this->view->render('inventario/consultarPartes');

 ?>