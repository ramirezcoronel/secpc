<?php

	if(isset($_POST['actualizar'])){
    $numero    = ($_POST['num'] !== "") ? $_POST['num'] : NULL;
    $horaInicio = ($_POST['horaInicio'] !== "") ? $_POST['horaInicio'] : NULL;
    $horaFin = ($_POST['horaFin'] !== "") ? $_POST['horaFin'] : NULL;
    $fecha = ($_POST['fecha'] !== "") ? $_POST['fecha'] : NULL;
    $falla = ($_POST['falla'] !== "") ? $_POST['falla'] : NULL;
    $descripcion = ($_POST['descripcion'] !== "") ? $_POST['descripcion'] : NULL;
    $numeroPrueba = ($_POST['numPrueba'] !== "") ? $_POST['numPrueba'] : NULL;

    $data = array('num' => $numero, 'fallareportada' => $falla, 'fecha' => $fecha,
                    'horainicio' => $horaInicio,  
                    'horafin' => $horaFin, 
                    'desactividad' =>$descripcion ,
                     'numprueba' => $numeroPrueba);

    if ($this->model->soporte->update($data)) {
      $this->view->mensaje = 'Soporte Actualizado Exitosamente.';
      $this->view->render('soporte/mensaje');
    } else {
      $this->error = $this->model->soporte->getError();
    }


  }else{
      
    $soporte = $this->model->soporte->get($param[0]);

    $this->view->soporte = $soporte[0];

    if ( sizeof($soporte) ) {
    $pruebas = $this->model->pruebaproducto->get();
    $this->view->pruebas = $pruebas;
    $this->view->mensaje = 'Rellene los campos';
    $this->view->render('soporte/actualizarSoporte');

    } else {
      $this->view->mensaje = 'Ha ocurrido un error';
      $this->view->render('soporte/mensaje');
    }

  }

?>