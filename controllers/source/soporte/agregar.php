<?php
	if(isset($_POST['agregar'])){
      $numero    = ($_POST['num'] !== "") ? $_POST['num'] : NULL;
      $horaInicio = ($_POST['horaInicio'] !== "") ? $_POST['horaInicio'] : NULL;
      $horaFin = ($_POST['horaFin'] !== "") ? $_POST['horaFin'] : NULL;
      $fecha = ($_POST['fecha'] !== "") ? $_POST['fecha'] : NULL;
      $falla = ($_POST['falla'] !== "") ? $_POST['falla'] : NULL;
      $descripcion = ($_POST['descripcion'] !== "") ? $_POST['descripcion'] : NULL;
      $numeroPrueba = ($_POST['numPrueba'] !== "") ? $_POST['numPrueba'] : NULL;
      $estatus = 1;

      $data = array('num' => $numero, 'fallareportada' => $falla, 'fecha' => $fecha,
                    'horainicio' => $horaInicio,  'horafin' => $horaFin, 'desactividad' =>$descripcion ,
                    'estatus' => $estatus, 'numprueba' => $numeroPrueba);

      if ( $this->model->soporte->insert($data)) {
        $updateData = array('numpruebaproducto' => $numeroPrueba, 
                            'resultPruebaProducto'=> 'Pasó la prueba');
        if ( $this->model->pruebaproducto->updateEstado($updateData) ){
          $this->view->mensaje = 'Agregado Exitosamente!';
        } else {
          $this->view->error = $this->model->pruebaproducto->getError();
        }
      } else {
        $this->view->error = $this->model->soporte->getError();
      }
      
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }

    $pruebas = $this->model->pruebaproducto->get();
    $this->view->pruebas = $pruebas;

	$this->view->render('soporte/agregar');

?>