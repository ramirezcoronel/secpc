<?php 
	
	$partes = $this->model->ejemplaresparte->getEjemplares($param[0]);

    $this->view->partes = $partes;


  if ( sizeof($partes) ) {
      $this->view->mensaje = 'Rellene los campos';
	  $this->view->render('ensamble/examinarProducto');

	} else {
	  $this->view->mensaje = 'Ha ocurrido un error';
	  $this->view->render('ensamble/mensaje');
	}

	    
 ?>