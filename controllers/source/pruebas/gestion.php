<?php 

	$this->view->mensaje = 'Gestionar Pruebas';
    $stressing = $this->model->get();
    $this->view->stressing = $stressing;
    
    $this->view->render('pruebas/gestion');
 ?>