<?php 

	if(isset($_POST['modificar'])){

        $cod    = ($_POST['cod'] !== "") ? $_POST['cod'] : NULL;
        $nombre = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
        $descripcion = ($_POST['descripcion'] !== "") ? $_POST['descripcion'] : NULL;
        $duracion = ($_POST['duracion'] !== "") ? $_POST['duracion'] : NULL;

        if ($this->model->updateModelo(['cod'=>$cod, 'nombre'=>$nombre, 'descripcion'=>$descripcion, 'duracion'=>$duracion])){

          $this->view->mensaje = 'Actualizado Exitosamente';

        }else{
          $this->view->mensaje = 'Ha ocurrido un error.';
        }

        $this->view->render('pruebas/mensaje');
    } else {
      $prueba = $this->model->get($param[0]);

        $this->view->prueba = $prueba[0];

        if ( sizeof($prueba) ) {

          $this->view->mensaje = 'Modificar la prueba: '. $param[0];
        $this->view->render('pruebas/modificar');

      } else {
        $this->view->mensaje = 'Ha ocurrido un error';
        $this->view->render('pruebas/mensaje');
      }
    }
	
 ?>