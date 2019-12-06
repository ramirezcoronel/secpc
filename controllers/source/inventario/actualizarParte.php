<?php 
	if(isset($_POST['actualizar'])){

	      $idmodelo    = ($_POST['idmodelo'] !== "") ? $_POST['idmodelo'] : NULL;
	      $serializable = ($_POST['serializable'] !== "") ? $_POST['serializable'] : NULL;
	      $codpartes = ($_POST['codpartes'] !== "") ? $_POST['codpartes'] : NULL;
	      $stockmaximo = ($_POST['stockmaximo'] !== "") ? $_POST['stockmaximo'] : NULL;
	      $stockminimo = ($_POST['stockminimo'] !== "") ? $_POST['stockminimo'] : NULL;
	      $puntoreorden = ($_POST['puntoreorden'] !== "") ? $_POST['puntoreorden'] : NULL;
	      $estatus = 1;

	      if ($this->model->partes->update(['idmodelo'=>$idmodelo, 'serializable'=>$serializable, 'codpartes'=>$codpartes, 'stockmaximo'=>$stockmaximo, 'stockminimo'=>$stockminimo, 'puntoreorden'=>$puntoreorden])){

	      	$this->view->mensaje = 'Actualizado Exitosamente';

	      }else{

	        $this->view->mensaje = 'Ha ocurrido un error.';

	      }

	      $this->view->render('inventario/mensaje');

	    }else{
          
	      $parte = $this->model->partes->get($param[0]);
	      $this->view->parte = $parte[0];

	       $modelos = $this->model->modelos->get();
	       $this->view->modelos = $modelos;

	      if ( sizeof($parte) ) {
		      $this->view->mensaje = 'Rellene los campos';
			  $this->view->render('inventario/actualizarParte');

			} else {
			  $this->view->mensaje = 'Ha ocurrido un error';
			  $this->view->render('inventario/mensaje');
			}

	    }

 ?>