<?php 

	$this->view->mensaje = 'Gestionar';
    $stressing = $this->model->get();
    $this->view->stressing = $stressing;
    
    $this->view->render('pruebas/gestion');
 ?>