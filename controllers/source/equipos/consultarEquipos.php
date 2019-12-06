<?php

	$equipos = $this->model->equipos->get();
    $this->view->equipos = $equipos;
    $this->view->render('equipos/consultarEquipos');

?>