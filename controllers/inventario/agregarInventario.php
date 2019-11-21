<?php 
	if(isset($_POST['agregar'])){
	      $codparte    = ($_POST['codparte'] !== "") ? $_POST['codparte'] : NULL;
	      $nummovimiento = ($_POST['nummovimiento'] !== "") ? $_POST['nummovimiento'] : NULL;
	      $cantidadparte = ($_POST['cantidadparte'] !== "") ? $_POST['cantidadparte'] : NULL;
	      $numserialfabricante = ($_POST['numserialfabricante'] !== "") ? $_POST['numserialfabricante'] : NULL;
	      $estatus = ($_POST['estatus'] !== "") ? $_POST['estatus'] : NULL;

	      $movimiento = $this->model->getMovimientos(['num' => $nummovimiento]);
	      $tipo = $movimiento->getTipo();

	  
	      if ($this->model->insertInventario(['codparte'=>$codparte, 'nummovimiento'=>$nummovimiento, 'cantidadparte'=>$cantidadparte, 'estatus'=>$estatus, 'numserialfabricante'=>$numserialfabricante])){

	        if ( $this->model->updateParte(['codparte'=>$codparte, 'cantidadparte'=>$cantidadparte, 'tipo' => $tipo])) {
	        	$this->view->mensaje = 'Agregado exitosamente';
	        }


	      }else{
	        $this->view->mensaje = 'Ha ocurrido un error.';
	      }
	    }else{
	      $this->view->mensaje = 'Rellene los campos';
	    }

	    $partes = $this->model->getPartes();
    	$this->view->partes = $partes;


    	$movimientos = $this->model->getMovimientos();
    	$this->view->movimientos = $movimientos;


		$this->view->render('inventario/agregarinventario');

 ?>