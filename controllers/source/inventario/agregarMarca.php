<?php
	if(isset($_POST['agregar'])){
      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $id = ($_POST['id'] !== "") ? $_POST['id'] : NULL;
      $estatus = 1;
  
      if ($this->model->insertMarca(['nombre'=>$nombre, 'id'=>$id, 'estatus'=>$estatus])){

      	$this->view->mensaje = 'Agregado Exitosamente';

      }else{
        $this->view->mensaje = 'Ha ocurrido un error.';
      }
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }

	$this->view->render('inventario/agregarMarca');

?>