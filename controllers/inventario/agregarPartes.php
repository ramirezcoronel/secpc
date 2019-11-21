<?php 
	if(isset($_POST['agregar'])){
	      $idmodelo    = ($_POST['idmodelo'] !== "") ? $_POST['idmodelo'] : NULL;
	      $serializable = ($_POST['serializable'] !== "") ? $_POST['serializable'] : NULL;
	      $codpartes = ($_POST['codpartes'] !== "") ? $_POST['codpartes'] : NULL;
	      $stockmaximo = ($_POST['stockmaximo'] !== "") ? $_POST['stockmaximo'] : NULL;
	      $stockminimo = ($_POST['stockminimo'] !== "") ? $_POST['stockminimo'] : NULL;
	      $puntoreorden = ($_POST['puntoreorden'] !== "") ? $_POST['puntoreorden'] : NULL;
	      $estatus = 1;
	  
	      if ($this->model->insertPartes(['idmodelo'=>$idmodelo, 'serializable'=>$serializable, 'codpartes'=>$codpartes, 'stockmaximo'=>$stockmaximo, 'stockminimo'=>$stockminimo, 'puntoreorden'=>$puntoreorden, 'estatus'=>$estatus])){
	        $this->view->mensaje = 'Partes agregadas exitosamente!.';
	      }else{
	        $this->view->mensaje = 'Ha ocurrido un error.';
	      }
	    }else{
	      $this->view->mensaje = 'Rellene los campos';
	    }

	    $modelos = $this->model->getModelos();
	    $this->view->modelos = $modelos;

		$this->view->render('inventario/agregarPartes');

 ?>