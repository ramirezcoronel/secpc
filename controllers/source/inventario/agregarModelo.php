<?php

	if(isset($_POST['agregar'])){

	  $idmodelo    = ($_POST['idmodelo'] !== "") ? $_POST['idmodelo'] : NULL;
	  $nommodelo = ($_POST['nommodelo'] !== "") ? $_POST['nommodelo'] : NULL;
	  $estatusmodelo = 1;
	  $idmarca = ($_POST['idmarca'] !== "") ? $_POST['idmarca'] : NULL;


	  if ($this->model->modelos->insert(['idmodelo'=>$idmodelo, 'nommodelo'=>$nommodelo, 'estatusmodelo'=>$estatusmodelo, 'idmarca'=>$idmarca])){
	    $this->view->mensaje = 'Modelo agregado exitosamente!.';
	  }else{
	    $this->view->mensaje = 'Ha ocurrido un error.';
	  }
	}else{
	  $this->view->mensaje = 'Rellene los campos';
	}

	$marcas = $this->model->getMarca();
	$this->view->marcas = $marcas;

	$this->view->render('inventario/agregarModelo');

?>