<?php
	if(isset($_POST['agregar'])){
      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $id = ($_POST['id'] !== "") ? $_POST['id'] : NULL;
      $estatus = 1;
  
      if ($this->model->marcas->insert(['nombre'=>$nombre, 'id'=>$id, 'estatus'=>$estatus])){

      	$this->view->mensaje = 'Agregado Exitosamente';

      }else{
        $this->view->mensaje = 'Ha ocurrido un error.';
        $this->view->error = $this->model->marcas->getError();
      }
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }

	$this->view->render('inventario/agregarMarca');

?>