<?php 
	if(isset($_POST['actualizar'])){

	       $num    = ($_POST['num'] !== "") ? $_POST['num'] : NULL;
	      $tipo = ($_POST['tipo'] !== "") ? $_POST['tipo'] : NULL;
	      $hora = ($_POST['hora'] !== "") ? $_POST['hora'] : NULL;
	      $fecha = ($_POST['fecha'] !== "") ? $_POST['fecha'] : NULL;


	      if ($this->model->updateMovimiento(['num'=>$num, 'tipo'=>$tipo, 'hora'=>$hora, 'fecha'=>$fecha])){

	      	$this->view->mensaje = 'Actualizado Exitosamente';

	      }else{

	        $this->view->mensaje = 'Ha ocurrido un error.';

	      }

	      $this->view->render('inventario/mensaje');

	    }else{
         
	    	$movimiento = $this->model->getMovimientos($param[0]);
	        $this->view->movimiento = $movimiento[0];


	      if ( sizeof($movimiento) ) {
		      $this->view->mensaje = 'Rellene los campos';
			  $this->view->render('inventario/actualizarMovimiento');

			} else {
			  $this->view->mensaje = 'Ha ocurrido un error';
			  $this->view->render('inventario/mensaje');
			}

	    }
 ?>