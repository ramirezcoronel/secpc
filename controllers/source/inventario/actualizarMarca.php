<?php
	if(isset($_POST['actualizar'])){
	  $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
	  $id = ($_POST['id'] !== "") ? $_POST['id'] : NULL;
	  $estatus = 1;

	  if ($this->model->marcas->update(['nombre'=>$nombre, 'id'=>$id, 'estatus'=>$estatus])){

	  	$this->view->mensaje = 'Actualizado Exitosamente';


	  }else{
	    $this->view->mensaje = 'Ha ocurrido un error.';

	  }

	  $this->view->render('inventario/mensaje');

	}else{
	  
	  $marca = $this->model->marcas->get($param[0]);
	  $this->view->marca = $marca[0];

	  if ( sizeof($marca) ) {
	      $this->view->mensaje = 'Rellene los campos';
		  $this->view->render('inventario/actualizarMarca');

		} else {
		  $this->view->mensaje = 'Ha ocurrido un error';
		  $this->view->render('inventario/mensaje');
		}

	}
?>