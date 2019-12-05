<?php

	$tipos = $this->model->get();
    $this->view->tipos = $tipos;
    $this->view->render('equipos/consultarTipo');

?>