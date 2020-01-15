<?php
	if(isset($_POST['agregar'])){
      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $id = ($_POST['id'] !== "") ? $_POST['id'] : NULL;
      $estatus = 1;
  
      
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }

    $pruebas = $this->model->pruebas->get();
    $this->view->pruebas = $pruebas;

	$this->view->render('soporte/agregar');

?>