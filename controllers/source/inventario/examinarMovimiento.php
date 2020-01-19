<?php 
	

	$movimiento = $this->model->renglonesmovimientos->getMovimiento($param[0]);

    $this->view->movimiento = $movimiento;
    $this->view->codigo = $param[0];


  if ( sizeof($movimiento) ) {
      $this->view->mensaje = 'Rellene los campos';
	  $this->view->render('inventario/examinarMovimiento');

	} else {
	  $this->view->mensaje = 'Ha ocurrido un error';
	  $this->view->render('inventario/mensaje');
	}

	    
 ?>