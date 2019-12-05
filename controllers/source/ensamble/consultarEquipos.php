<?php 

	$equipos = $this->model->getEquipos();
      $this->view->equipos = $equipos;
      $this->view->render('ensamble/consultarEquipo');

 ?>