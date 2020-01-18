<?php 

	if(isset($_POST['agregar'])){
      $cod    = ($_POST['cod'] !== "") ? $_POST['cod'] : NULL;
      $nombre = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $descripcion = ($_POST['descripcion'] !== "") ? $_POST['descripcion'] : NULL;
      $duracion     = ($_POST['duracion'] !== "") ? $_POST['duracion'] : NULL;
  
      if ($this->model->insert(['codPrueba'=>$cod, 'nomPrueba'=>$nombre, 'desPrueba'=>$descripcion, 'durPrueba'=>$duracion])){
      	
        $this->view->mensaje = 'Prueba agregada exitosamente!.';
      }else{
        $this->view->mensaje = 'Ha ocurrido un error.';
      }
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }

    $this->view->render('pruebas/agregar');

 ?>