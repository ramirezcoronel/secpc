<?php 

	$this->view->visible = false;

		if(isset($_POST['agregar'])){
		  //inputs de modelo
	      $num    = ($_POST['num'] !== "") ? $_POST['num'] : NULL;
	      $tipo = ($_POST['tipo'] !== "") ? $_POST['tipo'] : NULL;
	      $hora = ($_POST['hora'] !== "") ? $_POST['hora'] : NULL;
	      $fecha = ($_POST['fecha'] !== "") ? $_POST['fecha'] : NULL;
	      $estatus = ($_POST['estatus'] !== "") ? $_POST['estatus'] : NULL;

	      if ($this->model->movimientos->insert(['num'=>$num, 'tipo'=>$tipo, 'hora'=>$hora, 'fecha'=>$fecha, 'estatus'=>$estatus])){
	        $this->view->mensaje = 'Movimiento Agregado exitosamente!.';

			$movimiento = $this->model->movimientos->get(['num'=>$num ]);

	        $this->view->movimiento = $movimiento[0];
	        $this->view->visible = true;

	      }else{
	        $this->view->mensaje = 'Ha ocurrido un error.';
	      }
	    }else{
	      $this->view->mensaje = 'Rellene los campos';
	    }

	    if ( isset($_POST['agregarParte'])) {
	      	//codigo una vez ingresen una parte
		  $codparte    = ($_POST['codparte'] !== "") ? $_POST['codparte'] : NULL;
	      $num = ($_POST['num'] !== "") ? $_POST['num'] : NULL;
	      $cantidadparte = ($_POST['cantidadparte'] !== "") ? $_POST['cantidadparte'] : NULL;
	      $numserialfabricante = ($_POST['numserialfabricante'] !== "") ? $_POST['numserialfabricante'] : NULL;
	      $tipo = ($_POST['tipo'] !== "") ? $_POST['tipo'] : NULL;
	      $estatus = 1;

	  
	      if ($this->model->movimientos->insertInventario(['codparte'=>$codparte, 'nummovimiento'=>$num, 'cantidadparte'=>$cantidadparte, 'estatus'=>$estatus, 'numserialfabricante'=>$numserialfabricante])){

	        if ( $this->model->partes->update(['codpartes'=>$codparte, 'cantidadparte'=>$cantidadparte], $tipo)) {
	        	$this->view->mensaje = 'Agregado exitosamente';

	        	$movimiento = $this->model->movimientos->get(['num'=>$num ]);

		        $this->view->movimiento = $movimiento[0];
		        $this->view->visible = true;
	        }


	      }else{
	        $this->view->mensaje = 'Ha ocurrido un error.';
	      }
	    }


	    $partes = $this->model->partes->get();
    	$this->view->partes = $partes;

		$this->view->render('inventario/agregarMovimiento');

 ?>