<?php

	$tipos = $this->model->tiposequipos->get();
    $this->view->tipos = $tipos;
    $this->view->render('equipos/consultarTipo');

?>