<?php 
if(isset($_POST['actualizar'])){
	      $idmodelo    = ($_POST['idmodelo'] !== "") ? $_POST['idmodelo'] : NULL;
	      $nommodelo = ($_POST['nommodelo'] !== "") ? $_POST['nommodelo'] : NULL;
	      $estatusmodelo = 1;
	      $idmarca = ($_POST['idmarca'] !== "") ? $_POST['idmarca'] : NULL;


	      if ($this->model->updateModelo(['idmodelo'=>$idmodelo, 'nommodelo'=>$nommodelo, 'estatusmodelo'=>$estatusmodelo, 'idmarca'=>$idmarca])){

	      	$this->view->mensaje = 'Actualizado Exitosamente';

	      }else{
	        $this->view->mensaje = 'Ha ocurrido un error.';
	      }

	      $this->view->render('inventario/mensaje');

	    }else{
          
	      $modelo = $this->model->getModelos($param[0]);

	      $this->view->modelo = $modelo[0];

	      if ( sizeof($modelo) ) {
	      	$marcas = $this->model->getMarca();
	   		 $this->view->marcas = $marcas;
		      $this->view->mensaje = 'Rellene los campos';
			  $this->view->render('inventario/actualizarModelo');

			} else {
			  $this->view->mensaje = 'Ha ocurrido un error';
			  $this->view->render('inventario/mensaje');
			}

	    }

?>